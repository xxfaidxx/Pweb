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
    </div>
</body>
