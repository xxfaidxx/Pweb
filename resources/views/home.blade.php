<!DOCTYPE html>
<html lang="en">
@extends('layout.app')

<body>

    @section('content')
        <div class="info">
            <div class="g1">
                <div class="box1">
                    <img src="{{ asset('images/1.jpg') }}" alt="Info Jalur">
                </div>
            </div>
            <div class="g1">
                <div class="box1">
                    <img src="{{ asset('images/2.jpg') }}" alt="Info Sekolah">
                </div>
            </div>
            <div class="g1">
                <div class="box1">
                    <a href="jalur.html"><img src="{{ asset('images/3.jpg') }}" alt="Panduan Tata Cara Pendaftaran"></a>
                </div>
            </div>
        </div>
        <div id="container-doc" class="container-doc">
            <div class="tabs">
                <button class="tab active">Dokumen</button>
                <button class="tab" onclick="loadContent('/berita')">Berita / Informasi Seputar PPDB 2024</button>
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
    @endsection
</body>

</html>
