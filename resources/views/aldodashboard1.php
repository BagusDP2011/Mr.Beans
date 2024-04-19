<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5 {
        font-family: "Raleway", sans-serif;
        margin: 0;
        padding: 0;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 300px;
        background-color: #fff;
        padding-top: 20px;
        z-index: 1000;
        overflow-x: hidden;
        transition: 0.5s;
    }

    .content {
        margin-left: 300px;
        padding: 20px;
    }
</style>
</head>
<body>

<!-- Top container -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Logo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar/menu -->
<div class="sidebar">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="/w3images/avatar2.png" class="img-fluid rounded-circle" alt="Profile Picture" style="width:46px">
            </div>
            <div class="col-8">
                <span>Welcome, <strong>name</strong></span><br>
                <a href="#" class="btn btn-link"><i class="fa fa-envelope"></i></a>
                <a href="#" class="btn btn-link"><i class="fa fa-user"></i></a>
                <a href="#" class="btn btn-link"><i class="fa fa-cog"></i></a>
            </div>
        </div>
        <hr>
        <div class="container">
            <h5>Dashboard</h5>
        </div>
        <div class="container">
            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-users fa-fw"></i> Menu</a>
            <a href="#" class="btn btn-light btn-block"><i class="fa fa-address-book fa-fw"></i> Contact</a>
            <a href="#" class="btn btn-light btn-block"><i class="fa fa fa-bank fa-fw"></i> Wallet</a>
            <a href="#" class="btn btn-light btn-block"><i class="fa fa-history fa-fw"></i> History</a>
            <a href="#" class="btn btn-light btn-block"><i class="fa fa-cog fa-fw"></i> Settings</a>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="content">
    <header>
        <h5><i class="fa fa-dashboard"></i> My Dashboard</h5>
    </header>
    <!-- Your content here -->
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
