<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Pending</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set timeout to redirect to the dashboard after 5 seconds
            setTimeout(function () {
                window.location.href = "{{ route('home') }}";
            }, 5000); // 5000 milliseconds = 5 seconds
        });
    </script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    @include('header')

    <div class="max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4">
            <div class="flex items-center">
                <div class="bg-yellow-500 text-white rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12" y2="16.01"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h1 class="text-xl font-semibold text-gray-800">Payment Pending</h1>
                    <p class="mt-1 text-gray-600">Pembayaran kamu sedang diproses.</p>
                    <p class="mt-1 text-gray-600">Kamu akan dialihkan ke halaman utama dalam 5 detik...</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
