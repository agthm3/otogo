<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aga Kareba!</title>
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <div class="header">
        <h4>Aga Kareba!</h4>
        <h5>Yusuf Manshur</h5>
        <img src="asset/img/logo/logo-navbar.png" alt="Logo">
    </div>

    @yield('content')

    <div class="nav-bar">
        <a href="#"><img src="asset/img/icon/home-on.png" alt="Home"></a>
        <a href="#"><img src="asset/img/icon/ticket-off.png" alt="ticket"></a>
        <a href="#"><img src="asset/img/icon/settings-off.png" alt="Setting"></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
