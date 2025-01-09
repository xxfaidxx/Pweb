<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forgot.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="outer-wrapper">
        <div class="forgot-wrapper">
            <div class="logo-wrapper">
                <div class="logo"><img src="images/logo.png"></div>
            </div>
            <div class="form-wrapper">
                <h1>Forgot Password</h1>
                <p>Masukkan email, nisn, nik anda dan kami akan memberikan link untuk mereset passwordnya.</p>
                <form id="forgotPassForm">
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <input type="text" id="nisn" class="form-control" name="nisn" required>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK:</label>
                        <input type="text" id="nik" class="form-control" name="nik" required>
                    </div>
                    <button type="submit" class="btn w-100 space-between">Send Reset Link</button>
                </form>
                <div id="message" style="margin-top: 20px; display: none;"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#forgotPassForm').on('submit', function(e) {
                e.preventDefault();

                const formData = {
                    email: $('#email').val(),
                    nisn: $('#nisn').val(),
                    nik: $('#nik').val(),
                };

                $.ajax({
                    url: "{{ route('password.email') }}", // Ganti dengan rute Anda
                    type: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#message')
                            .html(`<p style="color: white;">${response.message}</p>`)
                            .show();
                        $('#forgotPassForm')[0].reset(); // Reset form setelah sukses
                    },
                    error: function(xhr) {
                        let errorMessage = xhr.responseJSON ? xhr.responseJSON.message :
                            'Terjadi kesalahan.';
                        $('#message')
                            .html(`<p style="color: red;">${errorMessage}</p>`)
                            .show();
                    }
                });
            });
        });
    </script>
</body>

</html>
