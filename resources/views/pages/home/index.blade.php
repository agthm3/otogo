<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="login-body">

    <div class="login-container">
        <img src="asset/img/logo-login.svg" alt="Logo" class="logo">
        <img src="asset/img/otogo-login.svg" alt="Vehicle" class="vehicle">
        <p  style="margin-top: 60px; margin-bottom:-90px">"Temukan cara berkeliling Kota Makassar dengan dengan nyaman, aman, cepat melalui Pete-pete OTOGO"</p>
        <a href="{{ route('login') }}" class="btn text-decoration-none">Masuk dengan akun yang sudah ada</a>
        <p>Belum punya akun? <a href="{{ route('register') }}">Registrasi disini</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
