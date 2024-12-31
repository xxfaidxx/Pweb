<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="outer-wrapper">
        <div class="login-wrapper">
            <div class="logo-wrapper">
                <div class="logo"><img src="images/logo.png"></div>
            </div>
            <div class="form-wrapper">
                <form action="{{ route('registrasi.submit') }}" method="post" class="mb-3">
                    @csrf
                    <div class="form-group">
                        <p class="mb-0">Masukkan Nama Lengkap</p>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <p class="mb-0">Masukkan Nama Lengkap</p>
                        <input type="date" name="date" class="form-control" id="date"
                            aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <p class="mb-0">Masukkan Email</p>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <p class="mb-0">Masukkan Password</p>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn w-100 space-between"
                            style="background-color: #234df0; color: #ffff; border; none">Registrasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
