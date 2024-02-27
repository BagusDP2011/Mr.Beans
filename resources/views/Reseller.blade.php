@php
    $fullname = session('fullname', 'Guest');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>MrBeans CoffeeBeans Shop</title>
</head>

<body>
    @include('header')

    <div class="row mt-5 no-gutters justify-content-center">
        <div class="col-md-11 m-5">
            <h1>List of Resellers and Sponsors</h1>
            <div class="row text-center">
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/bni.jpg') }}" class="card-img-top" alt="BNI Logo">
                        <div class="card-body">
                            <h5 class="card-title">BNI</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/garuda.jpg') }}" class="card-img-top" alt="Garuda Logo">
                        <div class="card-body">
                            <h5 class="card-title">Garuda</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/gojek.jpg') }}" class="card-img-top" alt="Gojek Logo">
                        <div class="card-body">
                            <h5 class="card-title">Gojek</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/indomie.jpg') }}" class="card-img-top" alt="Indomie Logo">
                        <div class="card-body">
                            <h5 class="card-title">Indomie</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/kai.jpg') }}" class="card-img-top" alt="KAI Logo">
                        <div class="card-body">
                            <h5 class="card-title">KAI</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/pertamina.jpg') }}" class="card-img-top" alt="Pertamina Logo">
                        <div class="card-body">
                            <h5 class="card-title">Pertamina</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/pln.jpg') }}" class="card-img-top" alt="PLN Logo">
                        <div class="card-body">
                            <h5 class="card-title">PLN</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/rcti.jpg') }}" class="card-img-top" alt="RCTI Logo">
                        <div class="card-body">
                            <h5 class="card-title">RCTI</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/sctv.jpg') }}" class="card-img-top" alt="SCTV Logo">
                        <div class="card-body">
                            <h5 class="card-title">SCTV</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/telkom.jpg') }}" class="card-img-top" alt="Telkom Logo">
                        <div class="card-body">
                            <h5 class="card-title">Telkom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/tiket.jpg') }}" class="card-img-top" alt="Tiket.com Logo">
                        <div class="card-body">
                            <h5 class="card-title">Tiket.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="{{ asset('assets/logo/tokopedia.jpg') }}" class="card-img-top" alt="Tokopedia Logo">
                        <div class="card-body">
                            <h5 class="card-title">Tokopedia</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Uncomment the following lines if not already included in your layout file -->
{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#carouselExampleControls').carousel();
    });
</script>


    </div>

</body>

</html>
