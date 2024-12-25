<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" media="all" rel="stylesheet"
        type="text/css" />
</head>

<body>
    <div class="outer-wrapper">
        <div class="login-wrapper">
            <div class="logo-wrapper">
                <div class="logo"><img src="images/logo.png"></div>
            </div>
            <div class="form-wrapper">
                <div class="form-login">
                    <form action="login.php" method="post">
                        <div class="input-group">
                            <input type="text" id="username" name="username" placeholder="Email / NIK" required>
                            <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
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
                        <button class="login-btn">Login</button>
                        <div class="daftar-btn">
                            <label>Belum Punya Akun?</label>
                            <a href="#">Daftar!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
