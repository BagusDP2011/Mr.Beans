

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('header')

    <div class="wrap">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">
                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400 font-bold" role="alert">
                    <svg class="flex-shrink-0 inline w-2 h-2 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">ERROR!</span> {{session('error')}}
                    </div>
                </div>
            </div>
        @endif
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

    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script>
        // JavaScript code to display SweetAlert based on PHP conditions
        function showAlertBasedOnError(error) {
            if (error === 'user_exists') {
                // Display an alert indicating the user or email already exists
                Swal.fire({
                    title: 'Error!',
                    text: 'Username or email already exists.',
                    icon: 'error',
                    button: 'OK',
                });
            } else if (error === 'database_error') {
                // Display an alert indicating a database error
                Swal.fire({
                    title: 'Error!',
                    text: 'Database error occurred.',
                    icon: 'error',
                    button: 'OK',
                });
            } else if (error === 'wrong') {
                // Display an alert indicating a database error
                Swal.fire({
                    title: 'Error!',
                    text: 'Adding database error. Please contact admin.',
                    icon: 'error',
                    button: 'OK',
                });
            }
        }

        // Call the function to show an alert based on the error parameter
        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
            const errorParam = urlParams.get('error');
            if (errorParam) {
                showAlertBasedOnError(errorParam);
            }
        };
    </script>
</body>

</html>
