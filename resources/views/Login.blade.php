@include('koneksi')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Beans Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
</head>

<body>
@include('header')

    <!-- Isi  -->
    <div class="wrapper">
        <form action="">
            <h1 style="font-weight: bold;">Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required />
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required />
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember-forgot d-flex justify-content-between">
                <div>
                    <input type="checkbox">Remember me </input>
                </div>
                <a href="#" class="text-right ml-5">Forgot password</a>
            </div>
            <br>
            <center>
                <button type="submit" class="btn">Login</button>
            </center>

            <div class="register-link">
                <p>Tidak punya akun? Silahkan <a href="{{ route('register') }}">register!</a></p>
            </div>
        </form>
    </div>
</body>

</html>