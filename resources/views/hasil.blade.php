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
            <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Asal Sekolah</th>
                        <th>Jenis Kelamin</th>
                        <th>Jenjang</th> <!-- Menambahkan kolom Jenjang -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop untuk menampilkan data pengguna -->
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->asal_sekolah }}</td>
                            <td>{{ $user->jenis_kelamin }}</td>
                            <td>{{ $user->jenjang }}</td> <!-- Menampilkan Jenjang -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
</body>
