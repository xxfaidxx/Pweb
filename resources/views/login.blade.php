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
                <form action="{{ route('login.submit') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password">
                    </div>
                    <div class="choose">
                        <div class="remember-me">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Ingat Saya?</label>
                        </div>
                        <div class="forgot-password">
                            <a href="#">Lupa Kata Sandi?</a>
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn w-100 space-between"
                            style="background-color: #234df0; color: #ffff; border; none">Submit</button>
                    </div>
                    <div class="daftar-btn d-flex align-items-center gap-3 text-white">
                        <label class="mb-0">Belum Punya Akun?</label>
                        <a href="/registrasi" class="btn btn-primary btn-sm text-white px-2 py-1">Daftar Sekarang</a>
                    </div>
                </form>
                @if (session('gagal'))
                    <p class="text-danger text-center">{{ session('gagal') }}</p>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
