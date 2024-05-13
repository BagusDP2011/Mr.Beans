

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Beans Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
</head>

<body>
@include('header')

    <!-- Isi  -->
    <div class="wrapper">
    @if(session('error'))
        <div class="alert alert-error">
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400 font-bold" role="alert">
                <svg class="flex-shrink-0 inline w-2 h-2 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">ERROR!</span> {{session('error')}}
                </div>
            </div>
        </div>
    @endif

        <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <h1 style="font-weight: bold;">Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" class="form-control" name="username" required />
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" class="form-control" name="password" required />
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