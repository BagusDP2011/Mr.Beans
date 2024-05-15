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
    <div class="container mx-auto py-4">
        <button class="block lg:hidden focus:outline-none">
            <i class="fa fa-bars"></i>
        </button>
        <div class="hidden lg:flex items-center justify-between">
            <a class="text-lg font-semibold" href="#">Logo</a>
        </div>
    </div>
</nav>

<!-- Sidebar/menu -->
<div class="flex flex-col bg-white w-64 h-screen shadow-lg fixed top-0 left-0 transition-all duration-500 z-50">
    <div class="p-4 flex items-center">
        <img src="/w3images/avatar2.png" class="rounded-full w-12 h-12" alt="Profile Picture">
        <div class="ml-4">
            <span class="block font-semibold">Welcome, <strong>name</strong></span>
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
        <a href="#" class="block py-2 px-4 mt-2 bg-blue-500 text-white rounded-lg text-center hover:bg-blue-600">Menu</a>
        <a href="#" class="block py-2 px-4 mt-2 bg-gray-200 text-gray-800 rounded-lg text-center hover:bg-gray-300">Contact</a>
        <a href="#" class="block py-2 px-4 mt-2 bg-gray-200 text-gray-800 rounded-lg text-center hover:bg-gray-300">Wallet</a>
        <a href="#" class="block py-2 px-4 mt-2 bg-gray-200 text-gray-800 rounded-lg text-center hover:bg-gray-300">History</a>
        <a href="#" class="block py-2 px-4 mt-2 bg-gray-200 text-gray-800 rounded-lg text-center hover:bg-gray-300">Settings</a>
    </div>
</div>

<!-- Page content -->
<div class="ml-64 p-8">
    <header>
        <h5 class="text-lg font-semibold"><i class="fa fa-dashboard"></i> My Dashboard</h5>
    </header>
    <!-- Your content here -->
</div>

<!-- Tailwind CSS and dependencies -->
<!-- You may need to add additional JavaScript dependencies based on your Tailwind CSS configuration -->
<!-- For example, to enable dark mode: <script src="https://cdn.tailwindcss.com/versions/2.2.19/tailwind-dark.min.js"></script> -->
</body>
</html>
