<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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

    public function showForgotPassword()
    {
        return view('auth.forgotpass');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nisn' => 'required',
            'nik' => 'required',
        ]);

        $user = DB::table('users')
            ->where('email', $request->email)
            ->where('nisn', $request->nisn)
            ->where('nik', $request->nik)
            ->first();

        if ($user) {
            Password::sendResetLink(['email' => $request->email]);

            return response()->json(['message' => 'Tautan reset password telah dikirim ke email Anda.'], 200);
        }

        return response()->json(['error' => 'Data tidak ditemukan. Pastikan informasi yang Anda masukkan benar.'], 404);
    }

    public function showResetForm($token)
    {
        return view('auth.resetpass', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login.tampil')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function sd()
    {
        $users = User::where('jenjang', 'SD')->get(); // Ambil data jenjang SD
        return view('jenjang.sd', ['users' => $users]);
    }

    public function smp()
    {
        $users = User::where('jenjang', 'smp')->get(); // Ambil data jenjang SMP
        return view('jenjang.smp', ['users' => $users]);
    }

    public function sma()
    {
        $users = User::where('jenjang', 'sma')->get(); // Ambil data jenjang SMA
        return view('jenjang.sma', ['users' => $users]);
    }
}
