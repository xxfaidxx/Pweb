<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showRegistrasi()
    {

        return view('registrasi');
    }

    function submitRegistrasi(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'jenis_pendaftar' => 'required|string|max:50',
            'asal_sekolah' => 'required|string|max:50',
            'jenjang' => 'required|string|max:50',
            'nik' => 'required|string|max:50',
            'nisn' => 'required|string|max:50',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->jenis_pendaftar = $request->jenis_pendaftar;
        $user->asal_sekolah = $request->asal_sekolah;
        $user->jenjang = $request->jenjang;
        $user->nik = $request->nik;
        $user->nisn = $request->nisn;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;


        $user->save();

        return redirect()->route('login.tampil');
    }

    function showLogin()
    {
        return view('login');
    }

    function submitLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($data, $remember)) {
            $request->session()->regenerate();
            $request->session()->put('email', $request->email);

            if ($remember) {
                $minutes = 60 * 24 * 7;
                cookie()->queue(cookie()->make('email', $request->email, $minutes));
                cookie()->queue(cookie()->make('remember', 'true', $minutes));
            }

            return redirect()->route('home');
        } else {
            return redirect()->back()->with('gagal', 'Email atau password salah');
        }
    }
    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
