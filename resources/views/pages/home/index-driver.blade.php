<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            width: 100%;
            height: 100%;
            overflow: hidden; /* Prevent scrolling */
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #008097;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }
        .header-logo {
            width: 100%;
            text-align: center;
            padding: 20px 0;
            position: absolute;
            top: 20px;
        }
        .header-logo img {
            max-width: 150px;
        }
        .character-image {
            position: absolute;
            top: 50%;
            z-index: 1;
            width: 80%;
            transform: translateY(-50%);
        }
        .login-container {
            text-align: center;
            color: black;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            background-color: white;
            border-radius: 60px 60px 0 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }
        .login-container h2 {
            margin-top: 40px; /* Adjust to provide space for character */
        }
        .btn-custom {
            background-color: #008097;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            width: 100%;
            margin-top: 20px;
        }
        .btn-custom:hover {
            background-color: #007b7e;
        }
        .login-container p {
            margin-top: 20px;
            color: #008097;
        }
        .login-container a {
            color: #008097;
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .header-logo img {
                max-width: 100px;
            }
            .character-image {
                top: 50%;
                width: 80%;
            }
            .login-container h2 {
                margin-top: 20px;
            }
        }
        @media (min-width: 769px) {
            .character-image {
                top: 45%;
                width: 15%;
            }
        }
    </style>
</head>
<body>

    <div class="header-logo">
        <img src="asset/img/logo/driver-logo.png" alt="OTOGO Logo">
    </div>

    <img src="asset/img/driver.png" class="character-image" alt="Driver Character">

    <div class="login-container">
        <h2>Masuk akun driver</h2>
        <p>Jadi bagian OTOGO majukan transportasi umum kota Makassar</p>
        <button class="btn btn-custom">Lanjutkan dengan akun yang sudah ada</button>
        <p>Belum bergabung? <a href="#">registrasi sekarang</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
