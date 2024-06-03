@php
$user = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- Link to Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Link to Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-gray-100">

<!-- Top container -->
<nav class="bg-gray-900 text-white">
    <div class="container mx-auto py-2">
        <button class="block lg:hidden focus:outline-none">
            <i class="fa fa-bars"></i>
        </button>
        <div class="hidden lg:flex items-center justify-between">
            Empty
            <img src="{{ asset('./assets/old/Logo MB Transparent.png') }}" class="rounded-full w-16 h-16" alt="Profile Picture">
        </div>
    </div>
</nav>

<!-- Sidebar/menu -->
<div class="flex flex-col bg-white w-64 h-screen shadow-lg fixed top-0 left-0 transition-all duration-500 z-50">
    <div class="p-4 flex items-center">
        <img src="{{ asset('./assets/additional/avatar.jpg') }}" class="rounded-lg w-16 h-16" alt="Profile Picture">
        <div class="ml-4">
            <span class="block font-semibold">Welcome, <strong>Admin</strong></span>
            <div class="flex mt-1">
                <a href="#" class="mr-2 text-gray-600 hover:text-gray-900"><i class="fa fa-envelope"></i></a>
                <a href="#" class="mr-2 text-gray-600 hover:text-gray-900"><i class="fa fa-user"></i></a>
                <a href="#" class="text-gray-600 hover:text-gray-900"><i class="fa fa-cog"></i></a>
            </div>
        </div>
    </div>
    <hr class="my-2">
    <div class="p-4">
        <h5 class="font-semibold">Dashboard</h5>
        @php
        $menus = ['Dashboard', 'Produk', 'Penjualan', 'Resi', 'Users'];
        @endphp
        @foreach($menus as $menu)
            <a href="#" class="block py-2 px-4 mt-2 bg-gray-200 text-gray-800 rounded-lg text-center hover:bg-gray-300">{{ $menu }}</a>
        @endforeach
    </div>
</div>