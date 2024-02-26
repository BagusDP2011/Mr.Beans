@include('koneksi')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>MrBeans CoffeeBeans Shop</title>
</head>

<body>
  @include('header')

  <div class="row mt-5 no-gutters">
    <div class="col-md-12">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 500px;">
            <img src="assets/carousel/1.png" class="d-block w-100 h-100" alt="Kofee Poster" />
          </div>
          <div class="carousel-item" style="height: 500px;">
            <img src="assets/carousel/2.png" class="d-block w-100 h-100" alt="Kofee Poster" />
          </div>
          <div class="carousel-item" style="height: 500px;">
            <img src="assets/carousel/3.png" class="d-block w-100 h-100" alt="Kofee Poster" />
          </div>
          <div class="carousel-item" style="height: 500px;">
            <img src="assets/carousel/4.png" class="d-block w-100 h-100" alt="Kofee Poster" />
          </div>
          <div class="carousel-item" style="height: 500px;">
            <img src="assets/carousel/5.png" class="d-block w-100 h-100" alt="Kofee Poster" />
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>

      <div class="row">
        <div class="col-md-2 bg-light">
          <div id="accordion">
            <div class="list-group list-group-flush p-2 pt-5" id="categoryList">
              <div class="list-group-item bg-warning" data-bs-toggle="collapse" data-bs-target="#coffeeSelection" aria-expanded="true">
                <i class="fas fa-list"></i> Categories
              </div>
              <div id="coffeeSelection" class="collapse show" data-bs-parent="#categoryList">
                <a href="#" class="list-group-item"><i class="fas fa-angle-right"></i> Coffee Selection</a>
                <a href="#" class="list-group-item"><i class="fas fa-angle-right"></i> Tea Selection</a>
                <a href="#" class="list-group-item"><i class="fas fa-angle-right"></i> Pastries and Snacks</a>
                <a href="#" class="list-group-item"><i class="fas fa-angle-right"></i> Desserts</a>
                <a href="#" class="list-group-item"><i class="fas fa-angle-right"></i> Cold Beverages</a>
                <a href="#" class="list-group-item"><i class="fas fa-angle-right"></i> Milk Alternatives</a>
                <a href="#" class="list-group-item"><i class="fas fa-angle-right"></i> Beverage Add-Ons</a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-10 mb-5">
          <h4 class="text-center font-weight-bold m-4">Coffee Selection</h4>
          @if (isset($_SESSION['userID']) && ($_SESSION['userID'] == '1' || $_SESSION['userID'] == 1))
          <a href="tambahProductHTML.php">
            <button class="btn btn-info" name="tambahBtn">+ Tambah Produk</button>
          </a>
          @endif

          <div class="row mx-auto">
            @foreach ($produk as $data)
              <div class="card ml-2 mr-2" style="width: 16rem">
                <form method="post" action="addToCart.php">
                  <img src='{{ $data["gambar"] }}' alt="{{ $data['namaProduk'] }}" class="card-img-top">
                  <div class="card-body bg-light">
                    <h5 class="card-title">{{ $data['namaProduk'] }}</h5>
                    <center>
                      <input type="hidden" name="produkID" value="{{ $data['produkID'] }}">
                      <p>Harga = Rp. {{ number_format($data['harga']) }}</p>
                      <p>Stock = {{ $data['stock'] }} Quantity</p> <br>
                      <p>Deskripsi:</p>
                      <p class="card-text">{{ $data['deskripsi'] }}</p>

                      @if (isset($_SESSION['userID']) && ($_SESSION['userID'] != '1' || $_SESSION['userID'] != 1))
                        <button type="submit" class="btn btn-success" name="beli">Beli</button>
                      @endif
                </form>
                @if (isset($_SESSION['userID']))
                  @if ($_SESSION['userID'] === '1' || $_SESSION['userID'] === 1)
                    <form method="post" action="deleteProduct.php">
                      <input type="hidden" name="produkID" value="{{ $data['produkID'] }}">
                      <button type="submit" class="btn btn-danger" name="deleteBtn">Delete</button>
                    </form>
                  @endif
                @endif
                </center>
              </div>
          </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="copyright text-center text-white font-weight-bold bg-warning p-2">
        <h3 class="d-inline-block mr-2">DEVELOP BY: MrBeans Teams </h3>
        <i class="far fa-copyright"></i>
      </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#carouselExampleControls").carousel();
      });
    </script>
</body>

</html>
