<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                <form action="{{ route('login.submit') }}" method="post" class="mb-3">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Enter email"
                            value="{{ old('email', request()->cookie('email')) }}">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password">
                    </div>
                    <div class="choose d-flex justify-content-between align-items-center">
                        <div class="remember-me">
                            <input type="checkbox" id="remember" name="remember"
                                {{ old('remember', request()->cookie('remember')) ? 'checked' : '' }}>
                            <label for="remember">Ingat Saya?</label>
                        </div>
                        <div class="forgot-password">
                            <a href="\forgot-password">Lupa Kata Sandi?</a>
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn w-100 space-between"
                            style="background-color: #234df0; color: #ffff; border; none">Login</button>
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
