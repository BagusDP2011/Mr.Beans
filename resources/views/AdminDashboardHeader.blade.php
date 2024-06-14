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
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:100" rel="stylesheet">

    <style>
        #clock {
            width: 100%;
            position: absolute;
            font-size: 14px;
            color: white;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            margin-top: 25px;
        }

        h4 {
            width: 100%;
            margin-bottom: 25px;
            position: absolute;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            color: white;
            font-family: 'Oswald', sans-serif;
            letter-spacing: 5px;
        }
    </style>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen overflow-x-hidden" onload="realtimeClock()">

    <!-- Top container -->
    <nav class="bg-gray-900 text-white">
        <div class="container mx-auto py-2">
            <button class="block lg:hidden focus:outline-none">
                <i class="fa fa-bars"></i>
            </button>
            <div class="hidden lg:flex items-center justify-between">
                Empty
                <h4>REAL TIME CLOCK</h4>
                <div id="clock"></div>
                <img src="{{ asset('./assets/old/Logo MB Transparent.png') }}" class="rounded-full w-16 h-16" alt="Logo Mr Beans">
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
            <h5 class="font-semibold">Dashboard Menu</h5>
            <!-- $menus = ['Dashboard', 'Products', 'Penjualan', 'Resi', 'User']; -->
            @php
            $menus = ['Dashboard', 'Products', 'Penjualan', 'User'];
            @endphp
            @foreach($menus as $menu)
            <a href="{{ route('Admin' . $menu) }}" class="block py-2 px-4 mt-2 bg-gray-200 text-gray-800 rounded-lg text-center hover:bg-gray-300">{{ $menu }}</a>
            @endforeach
            <a href="{{ route('actionlogout') }}" class="block py-2 px-4 mt-2 bg-red-200 text-gray-800 rounded-lg text-center hover:bg-red-300">Logout</a>
        </div>
        <footer class="w-full bg-gray-200" style="margin-top: 10px;">
            <div style="width:100%;height:0;">
                <center>
                    <img src="{{ asset('assets/gif/kopi.gif') }}" alt="Animasi Kopi" width="50%" class="flex justify-center items-center flex-col">
                    <h1 class="font-bold text-center mt-4">
                        ~ Jangan lupa ngopi dulu ~
                    </h1>
                </center>
            </div>
        </footer>
    </div>

    <script>
        function realtimeClock() {

            var rtClock = new Date();

            var hours = rtClock.getHours();
            var minutes = rtClock.getMinutes();
            var seconds = rtClock.getSeconds();

            var amPm = (hours < 12) ? "AM" : "PM";

            hours = (hours > 12) ? hours - 12 : hours;

            hours = ("0" + hours).slice(-2);
            minutes = ("0" + minutes).slice(-2);
            seconds = ("0" + seconds).slice(-2);

            document.getElementById('clock').innerHTML =
                hours + "  :  " + minutes + "  :  " + seconds + " " + amPm;
            var t = setTimeout(realtimeClock, 500);

        }
    </script>