<!DOCTYPE html>
<html lang="en">

@extends('layout.app')

<body>
    @section('content')
        <div class="profile-wrapper">
            <div class="profile-container">
                <h2>Profile Saya</h2>
                <div class="profile-info">
                    <div class="picture-akun">
                        <img src="../images/GambarAkun.png" alt="GambarAkun">
                    </div>
                    <div class="profile-item">
                        <strong>Nama:</strong> {{ Auth::user()->name }}
                    </div>
                    <div class="profile-item">
                        <strong>Email:</strong> {{ Auth::user()->email }}
                    </div>
                    <div class="profile-item">
                        <strong>Jenis Pendaftar:</strong> {{ Auth::user()->jenis_pendaftar }}
                    </div>
                    <div class="profile-item">
                        <strong>Asal Sekolah:</strong> {{ Auth::user()->asal_sekolah }}
                    </div>
                    <div class="profile-item">
                        <strong>Jenjang yang Ditujui:</strong> {{ Auth::user()->jenjang }}
                    </div>
                    <div class="profile-item">
                        <strong>NIK:</strong> {{ Auth::user()->nik }}
                    </div>
                    <div class="profile-item">
                        <strong>NISN:</strong> {{ Auth::user()->nisn }}
                    </div>
                    <div class="profile-item">
                        <strong>Tempat Lahir:</strong> {{ Auth::user()->tempat_lahir }}
                    </div>
                    <div class="profile-item">
                        <strong>Tanggal Lahir:</strong> {{ Auth::user()->tanggal_lahir }}
                    </div>
                    <div class="profile-item">
                        <strong>Jenis Kelamin:</strong> {{ Auth::user()->jenis_kelamin }}
                    </div>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="button">Logout</button>
                </form>
            </div>
        </div>
        </div>
    @endsection
</body>

</html>
