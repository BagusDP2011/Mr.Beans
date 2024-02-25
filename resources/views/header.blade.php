@include('koneksi')
{{-- session_start() --}}

@php
    $fullname = session('fullname', 'Guest');
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset("/css/index.css") }}">
<link rel="stylesheet" href="{{ asset("/css/style.css") }}">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="padding: 5px">
    <div class="container" style="max-width: 100%">
        <h3>
            <img src="{{ asset("./assets/old/Logo MB Transparent.png") }}" alt="Logo" width="50px" height="50px" />
        </h3>
        <a class="navbar-brand font-weight-bold" href="{{ route('home') }}" style="font-size: 20px">MrBeans CoffeeBeans Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <!-- <img src="" alt="" /> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 16px">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}" name="pageBeranda">BERANDA</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('products') }}" name="pageProduk">PRODUK</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('reseller') }}" name="pageReseller">RESELLER</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('contact') }}" name="pageHubungi">HUBUNGI KAMI</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('help') }}" name="pageBantuan">BANTUAN</a>
                </li>
            </ul>
            <div class="row">
                <div class=" mt-1">
                    @if ($fullname === "Guest")
                        <!-- Show login and register links for guests -->
                        <a href="{{ route('login') }}" name="pageLogin">Login</a> /
                        <a href="{{ route('register') }}" name="pageRegister">Register</a>
                    @endif
                    @if ($fullname !== "Guest")
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            Hello, <b class="ml-5">{{ $fullname }}! &nbsp</b>
                            <a href="logoutForm.php" name="logoutBtn" onclick="return confirm('Are you sure you want to logout?')">Logout</a> &nbsp
                            <a href="{{ route('cart') }}" name="cart">
                                <i class="fas fa-cart-plus ml-3 mr-3" name="cart"></i>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
