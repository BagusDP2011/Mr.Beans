@include('koneksi')

@if ($_SERVER["REQUEST_METHOD"] == "POST")
    {{-- Get form data --}}
    @php
        $username = request()->input('username');
        $fullname = request()->input('fullName');
        $password = request()->input('password');
        $email = request()->input('email');
        $alamat = request()->input('alamat');
        $nomor = request()->input('noHp');

        // Insert user data into the database
        $sql = "INSERT INTO user (username, fullName, password, email, alamat, noHp, role) VALUES ('$username', '$fullname', '$password', '$email', '$alamat', '$nomor', 'Guest')";

        $checkUserQuery = "SELECT * FROM user WHERE username='$username' OR email='$email'";
        $checkUserResult = $conn->query($checkUserQuery);

        if ($checkUserResult->num_rows > 0) {
            // Username or email already exists, return an error
            header("Location: regist.php?error=user_exists");
            exit();
        } else {
            if ($conn->query($sql) === TRUE) {
                // Successful registration
                $registrationSuccess = true;
            } else {
                // Handle registration error
                $registrationError = true;
            }
        }

        // Close the database connection
        $conn->close();
    @endphp
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mr Beans Registration</title>
    <!-- Include SweetAlert2 -->
    <script src="{{ asset('jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
</head>

<body>
    <script>
        // JavaScript code to display SweetAlert based on PHP conditions
        @if (isset($registrationSuccess) && $registrationSuccess)
            Swal.fire({
                // position: "top-end",
                icon: "success",
                title: "You have been registered successfully",
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = "{{ route('login') }}";
            });
        @endif

        @if (isset($registrationError) && $registrationError)
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Registration error occurred!",
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = "regist.php?error";
            });
        @endif
    </script>
</body>

</html>
