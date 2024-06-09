<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Pending</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/TailwindStyles.css') }}">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                window.location.href = "{{ route('home') }}";
            }, 5000);
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
                        <circle cx="12" cy="12" r="10" />
                        <line x1="12" y1="8" x2="12" y2="12" />
                        <line x1="12" y1="16" x2="12" y2="16.01" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h1 class="text-xl font-semibold text-gray-800">Payment Pending</h1>
                    <p class="mt-1 text-gray-600">Pembayaran kamu sedang diproses.</p>
                    <p class="mt-1 text-gray-600">Mengalihkan ke halaman utama!</p>
                    <div class="flex items-center text-center align-center self-center mt-1 mb-2">
                        <div class="inline-block h-8 w-8 border-4 border-slate-800 border-solid border-t-transparent rounded-full animate-spin px-2" role="status" style="border-top-color: blue;"></div>
                        <div id="countdown" class="mx-4 text-center"></div>
                    </div>
                    <button onclick="window.location.href=`{{ route('home') }}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2">Klik untuk mempercepat...</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var timeleft = 5;
        var downloadTimer = setInterval(function() {
            if (timeleft <= 0) {
                clearInterval(downloadTimer);
                document.getElementById("countdown").innerHTML = " Sedang proses dialihkan...";
            } else {
                document.getElementById("countdown").innerHTML = " Dalam " + timeleft + " detik";
            }
            timeleft -= 1;
        }, 1000);
    </script>
</body>

</html>