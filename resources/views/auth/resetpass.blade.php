<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Open Sans", sans-serif;
            box-sizing: border-box;
            word-wrap: break-word;
        }

        body {
            background-image: url("../images/bg-login.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        .outer-wrapper {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .reset-wrapper {
            width: 80vw;
            max-width: 650px;
            height: 70vh;
            background: #00000095;
            border-radius: 42px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 10px;
        }

        .logo-wrapper {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-wrapper .logo img {
            width: 100px;
            height: auto;
        }

        .form-wrapper {
            display: flex;
            flex-direction: column;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
        }

        .form-wrapper h1 {
            margin: 5;
            color: white;
            text-align: center;
        }

        .form-wrapper p {
            margin: 5;
            color: white;
            text-align: center;
        }

        .form-wrapper label {
            color: #f2f2f2;
        }

        button[type="submit"] {
            background-color: #007bff;
            border: none;
            color: #ffffff;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #003cff;
        }
    </style>
</head>

<body>
    <div class="outer-wrapper">
        <div class="reset-wrapper">
            <div class="logo-wrapper">
                <div class="logo"><img src="../images/logo.png"></div>
            </div>
            <div class="form-wrapper">
                <h1 class>Reset Password</h1>
                <p>Silahkan isi Password anda yang baru.</p>
                <form id="resetPassForm">
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">New Password:</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" id="password_confirmation" class="form-control"
                            name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
