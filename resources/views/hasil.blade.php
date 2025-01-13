<!DOCTYPE html>
<html lang="en">
@extends('layout.app')

<body>
    @section('content')
        <div id="container-doc" class="container-doc">
            <div class="tabs">
                <button class="tab active">SD</button>
                <button class="tab" onclick="loadContent('/smp')">SMP</button>
                <button class="tab" onclick="loadContent('/sma')">SMA</button>
            </div>
            <div id="content" class="news">
                <table class="document-table">
                    <tbody>
                        <tr>
                            <td>SE Gratifikasi PPDB Kota Bekasi 2024</td>
                            <td><a href="#" class="download">Unduh</a></td>
                            <td><a href="#" class="share">Bagikan</a></td>
                        </tr>
                        <tr>
                            <td>Komitmen PPDB Kota Bekasi</td>
                            <td><a href="#" class="download">Unduh</a></td>
                            <td><a href="#" class="share">Bagikan</a></td>
                        </tr>
                        <tr>
                            <td>PERWAL PPDB TAHUN 2024</td>
                            <td><a href="#" class="download">Unduh</a></td>
                            <td><a href="#" class="share">Bagikan</a></td>
                        </tr>
                        <tr>
                            <td>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK ORANGTUA</td>
                            <td><a href="#" class="download">Unduh</a></td>
                            <td><a href="#" class="share">Bagikan</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
</body>
