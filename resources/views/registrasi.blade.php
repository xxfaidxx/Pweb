<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="outer-wrapper">
        <div class="daftar-wrapper">
            <div class="logo-wrapper">
                <div class="logo"><img src="images/logo.png"></div>
            </div>
            <div class="form-wrapper">
                <form action="{{ route('registrasi.submit') }}" method="post" class="mb-3">
                    @csrf
                    <div class="form-group">
                        <p class="mb-0">Jenis Pendaftar</p>
                        <label>
                            <input type="radio" name="jenis_pendaftar" value="Pendaftar Dalam Kota" required>
                            Pendaftar Dalam Kota
                        </label>
                        <label>
                            <input type="radio" name="jenis_pendaftar" value="Pendaftar Luar Kota"> Pendaftar Luar
                            Kota
                        </label>
                    </div>
                    <div class="form-group">
                        <p class="mb-0">Asal Sekolah</p>
                        <label>
                            <input type="radio" name="asal_sekolah" value="Sekolah Dalam Kota" required> Sekolah Dalam
                            Kota
                        </label>
                        <label>
                            <input type="radio" name="asal_sekolah" value="Sekolah Luar Kota"> Sekolah Luar Kota
                        </label>
                    </div>
                    <div class="form-group">
                        <p class="mb-0">Jenjang yang Ditujui</p>
                        <label>
                            <input type="radio" name="jenjang" value="SD" required> SD
                        </label>
                        <label>
                            <input type="radio" name="jenjang" value="SMP"> SMP
                        </label>
                        <label>
                            <input type="radio" name="jenjang" value="SMA"> SMA
                        </label>
                    </div>
                    <div class="form-group-inline">
                        <div class="form-group">
                            <p class="mb-0">NIK</p>
                            <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK"
                                required>
                        </div>
                        <div class="form-group">
                            <p class="mb-0">NISN</p>
                            <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="mb-0">Nama Lengkap Siswa</p>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap"
                            required>
                    </div>

                    <div class="form-group-inline">
                        <div class="form-group">
                            <p class="mb-0">Tempat Lahir Siswa</p>
                            <input type="text" name="tempat_lahir" class="form-control"
                                placeholder="Masukkan Tempat Lahir" required>
                        </div>
                        <div class="form-group">
                            <p class="mb-0">Tanggal Lahir Siswa</p>
                            <input type="date" name="tanggal_lahir" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="mb-0">Jenis Kelamin</p>
                        <label>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                        </label>
                        <label>
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </label>
                    </div>
                    <div class="form-group">
                        <p class="mb-0">Masukkan Email</p>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                    <div class="form-group-inline">
                        <div class="form-group">
                            <p class="mb-0">Kata Sandi</p>
                            <input type="password" name="password" class="form-control"
                                placeholder="Masukkan Kata Sandi" required>
                        </div>
                        <div class="form-group">
                            <p class="mb-0">Konfirmasi Kata Sandi</p>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Konfirmasi Kata Sandi" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn w-100 space-between"
                            style="background-color: #234df0; color: #fff; border: none">
                            Registrasi
                        </button>
                    </div>
                    @if ($errors->has('password'))
                        <div class="alert alert-danger">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</body>

</html>
