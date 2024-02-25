<?php
include("koneksi.php");
// session_start();

if (isset($_SESSION['fullname'])) {
    $fullname = $_SESSION['fullname'];
} else {
    $fullname = "Guest";
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="padding: 5px">
    <div class="container" style="max-width: 100%">
        <h3>
            <img src="./assets/old/Logo MB Transparent.png" alt="Logo" width="50px" height="50px" />
        </h3>
        <a class="navbar-brand font-weight-bold" href="/./index.php" style="font-size: 20px">MrBeans CoffeeBeans Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <!-- <img src="" alt="" /> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 16px">
                <li class="nav-item active">
                    <a class="nav-link" href="/./index.php" name="pageBeranda">BERANDA</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/./products.php" name="pageProduk">PRODUK</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/./reseller.php"  name="pageReseller">RESELLER</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/./contact.php"  name="pageHubungi">HUBUNGI KAMI</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/./help.php"  name="pageBantuan">BANTUAN</a>
                </li>
            </ul>
            <div class="row">
                <div class=" mt-1">
                    <?php if ($fullname === "Guest") : ?>
                        <!-- Show login and register links for guests -->
                        <a href="login.php"  name="pageLogin">Login</a> /
                        <a href="regist.php"  name="pageRegister">Register</a>
                    <?php endif; ?>
                    <?php if ($fullname !== "Guest") : ?>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            Hello, <b class="ml-5"><?php echo $fullname; ?>! &nbsp</b>
                            <a href="logoutForm.php" name="logoutBtn" onclick="return confirm('Are you sure you want to logout?')">Logout</a> &nbsp
                            <a href="cart.php" name="cart">
                                <i class="fas fa-cart-plus ml-3 mr-3" name="cart"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</nav>

