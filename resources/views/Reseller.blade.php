<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.6/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>MrBeans CoffeeBeans Shop</title>
</head>

<body>
    @include('header')

    <div class="container mx-auto px-4 m-5">
        <div class="mt-10">
            <h1 class="text-3xl font-bold mb-5">List of Resellers and Sponsors</h1>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/bni.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="BNI Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">BNI</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/garuda.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="Garuda Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">Garuda</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/gojek.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="Gojek Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">Gojek</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/indomie.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="Indomie Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">Indomie</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/kai.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="KAI Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">KAI</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/pertamina.jpg') }}"
                            class="w-full h-40 object-cover object-center" alt="Pertamina Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">Pertamina</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/pln.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="PLN Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">PLN</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/rcti.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="RCTI Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">RCTI</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/sctv.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="SCTV Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">SCTV</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/telkom.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="Telkom Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">Telkom</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/tiket.jpg') }}" class="w-full h-40 object-cover object-center"
                            alt="Tiket.com Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">Tiket.com</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-xs mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('assets/logo/tokopedia.jpg') }}"
                            class="w-full h-40 object-cover object-center" alt="Tokopedia Logo">
                        <div class="py-4 px-6">
                            <h2 class="text-xl font-semibold text-gray-800">Tokopedia</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>