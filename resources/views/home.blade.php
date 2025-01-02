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
        <div id="Body">
            <div class="info">
                <div class="g1">
                    <div class="box1">
                        <img src="images/1.jpg" alt="Info Jalur">
                    </div>
                </div>
                <div class="g1">
                    <div class="box1">
                        <img src="images/2.jpg" alt="Info Sekolah">
                    </div>
                </div>
                <div class="g1">
                    <div class="box1">
                        <a href="jalur.html"><img src="images/3.jpg" alt="Panduan Tata Cara Pendaftaran"></a>
                    </div>
                </div>
            </div>
            <div id="container-doc" class="container-doc">
                <div class="tabs">
                    <button class="tab active">Dokumen</button>
                    <button class="tab" onclick="loadContent('/berita')">Berita / Informasi
                        Seputar PPDB 2024</button>
                    <button class="tab" onclick="loadContent('/info')">Info Praktikal</button>
                </div>
                <div id="content" class="news">
                    <table class="document-table">
                        <tbody>
                            <tr>
                                <td>SE Gratifikasi PPDB Kota Bekasi 2024</td>
                                <td><a href="#" class="download">Unduh</a></td>
                            </tr>
                            <tr>
                                <td>Komitmen PPDB Kota Bekasi</td>
                                <td><a href="#" class="download">Unduh</a></td>
                            </tr>
                            <tr>
                                <td>PERWAL PPDB TAHUN 2024</td>
                                <td><a href="#" class="download">Unduh</a></td>
                            </tr>
                            <tr>
                                <td>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK ORANGTUA</td>
                                <td><a href="#" class="download">Unduh</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="footer-wrapper">
            <footer class="footer">
                <div class="footer-container">
                    <p class="footer-title">Sosial Media dan Website Bintang Cendekia</p>
                    <div class="sns">
                        <div class="sns-item">
                            <img src="images/instagram-icon.png" alt="Instagram">
                            <span>@bintangcendekia</span>
                        </div>
                        <div class="sns-item">
                            <img src="images/youtube-icon.png" alt="YouTube">
                            <span>bintangcendekia</span>
                        </div>
                        <div class="sns-item">
                            <img src="images/website-icon.png" alt="Website">
                            <span><a href="https://disdik.bekasikota.go.id"
                                    target="_blank">https://bintangcendikia.com</a></span>
                        </div>
                    </div>
                    <p class="footer-note">© Official website Bintang Cendikia</p>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
