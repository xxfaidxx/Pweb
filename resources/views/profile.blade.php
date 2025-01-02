<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="script/script.js" defer></script>
    <title>Bintang Cendekia</title>
</head>

<body>
    <div id="header-wrapper">
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo Bintang Cendekia" class="logo">
        </div>
        <h1>Selamat Datang <br> Bintang Cendekia</h1>
    </div>
    <div>
        <div class="container">
            <div class="nav-links">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/hasil">Hasil Seleksi</a></li>
                    <li><a href="/infosekolah">Info Sekolah</a></li>
                    @if (Auth::check())
                        <li><a href="/profile">{{ Auth::user()->name }}</a></li>
                    @else
                        <li><a href="/login">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
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
</body>

</html>
