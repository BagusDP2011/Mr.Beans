<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'My App')</title>
</head>

<header>
    @include('Bagus.components.header')
</header>

<body>
    <h1>List Produk</h1>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>
</body>

<footer>
    @include('Bagus.components.footer')
</footer>

</html>