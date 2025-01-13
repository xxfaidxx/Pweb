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
            <table border="1" cellpadding="15" cellspacing="0" cellmargin="2" width="100%" style="margin: 0 auto;">
                <thead>
                    <tr>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Created At</th>
                        <th style="text-align: center;">Asal Sekolah</th>
                        <th style="text-align: center;">Jenis Kelamin</th>
                        <th style="text-align: center;">Jenjang</th> <!-- Menambahkan kolom Jenjang -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop untuk menampilkan data pengguna -->
                    @foreach ($users as $user)
                        <tr>
                            <td style="text-align: center;">{{ $user->name }}</td>
                            <td style="text-align: center;">{{ $user->email }}</td>
                            <td style="text-align: center;">{{ $user->created_at }}</td>
                            <td style="text-align: center;">{{ $user->asal_sekolah }}</td>
                            <td style="text-align: center;">{{ $user->jenis_kelamin }}</td>
                            <td style="text-align: center;">{{ $user->jenjang }}</td> <!-- Menampilkan Jenjang -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endsection
</body>
