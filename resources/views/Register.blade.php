<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mr Beans Registration</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/regist.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('headerRegisterLogin')

    <div class="wrap">
        @include('SessionRegisterLogin')
        <form action="{{ route('actionregister') }}" id="form" method="post">
            @csrf <!-- CSRF protection -->
            <h1 class="font-bold">Registrasi</h1>
            <div class="input-box d-flex justify-content-between">
                <input type="text" placeholder="Username" id="username" name="username" />
                <input type="text" placeholder="Full Name" id="fullName" name="fullName" />
            </div>

            <div class="input-box d-flex justify-content-between">
                <input type="password" placeholder="Password" id="password" name="password" />
                <input type="email" placeholder="Email" id="email" name="email" />
            </div>

            <div class="input-box d-flex justify-content-between">
                <input type="textarea" placeholder="Alamat" id="alamat" name="alamat" />
                <input type="number" placeholder="No Phone" id="noHp" name="noHp" />
            </div>

            <button type="submit" class="btn" onclick="cek_data(); return false">
                SUBMIT
            </button>

            <center>
                <p class="pb-5">
                    Mempunyai akun? Silahkan <a href="{{ route('login') }}"> login disini!</a>
                </p>
            </center>
        </form>
    </div>
</body>

</html>