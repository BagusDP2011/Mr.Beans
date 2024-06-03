@php
$user = Auth::user();
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3">
    <div class="container mx-auto">
        <h3>
            <img src="{{ asset('./assets/old/Logo MB Transparent.png') }}" alt="Logo" width="50px" height="50px" />
        </h3>
        <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">MrBeans CoffeeBeans Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto font-bold">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">PRODUK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reseller') }}">RESELLER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">HUBUNGI KAMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('help') }}">BANTUAN</a>
                </li>
                <li class="nav-item font-normal">
                    @if(!$user)
                    <div class="flex items-center mt-2">
                        <a class="mr-2 ml-5" href="{{ route('login') }}">Login</a>
                        <span class="mr-2">/</span>
                        <a href="{{ route('register') }}">Register</a>
                    </div>
                    @else
                    <div class="flex items-center">
                        <div class="dropdown mr-2 ml-5">
                            <a class="nav-link dropdown-toggle ml-auto flex items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="ml-auto flex items-center">Hello,&nbsp;<h2 class="font-bold">{{$user->fullName}}!</h2></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('actionlogout') }}" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
                                <a class="dropdown-item" href="{{ route('cart') }}">Cart</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>