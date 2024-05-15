

@if ($_SERVER["REQUEST_METHOD"] == "POST')
    @php
    
        $username = request()->input('username');
        $fullname = request()->input('fullName');
        $password = request()->input('password');
        $email = request()->input('email');
        $alamat = request()->input('alamat');
        $nomor = request()->input('noHp');

        $sql = "INSERT INTO user (username, fullName, password, email, alamat, noHp, role) VALUES ('$username', '$fullname', '$password', '$email', '$alamat', '$nomor', 'Guest')";
a
        $checkUserQuery = "SELECT * FROM user WHERE username='$username' OR email='$email'";
        $checkUserResult = $conn->query($checkUserQuery);

        if ($checkUserResult->num_rows > 0) {
            header('Location: regist.php?error=user_exists');
            exit();
        } else {
            if ($conn->query($sql) === TRUE) {
                $registrationSuccess = true;
            } else {
                $registrationError = true;
            }
        }

        $conn->close();
    @endphp
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mr Beans Registration</title>
    <script src="{{ asset('jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
</head>

<body>
    @if (isset($registrationSuccess) && $registrationSuccess)
        <script>
            Swal.fire({
                icon: "success",
                title: "You have been registered successfully",
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = "{{ route('login') }}";
            });
        </script>
    @endif

    @if (isset($registrationError) && $registrationError)
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Registration error occurred!",
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = "regist.php?error";
            });
        </script>
    @endif
</body>

</html>
