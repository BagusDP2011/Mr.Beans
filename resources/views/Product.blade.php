<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.6/dist/tailwind.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <title>MrBeans CoffeeBeans Shop</title>
</head>

<body class="bg-gray-100 mt-10">
  @include('header')

  <div class="grid grid-cols-1 md:grid-cols-10">
    <!-- Categories -->
    <div class="col-span-1 md:col-span-2 bg-grey-200">
      <div id="accordion" class="p-2 pt-5">
        <div class="bg-yellow-400 p-2 cursor-pointer mb-3" data-bs-toggle="collapse" data-bs-target="#coffeeSelection" aria-expanded="true">
          <i class="fas fa-list"></i> Categories
        </div>
        <div id="coffeeSelection" class="collapse show" data-bs-parent="#accordion">
          <a href="#" class="block px-4 py-2 border-b hover:bg-gray-100"><i class="fas fa-angle-right"></i> Coffee Selection</a>
          <a href="#" class="block px-4 py-2 border-b hover:bg-gray-100"><i class="fas fa-angle-right"></i> Tea Selection</a>
          <a href="#" class="block px-4 py-2 border-b hover:bg-gray-100"><i class="fas fa-angle-right"></i> Pastries and Snacks</a>
          <a href="#" class="block px-4 py-2 border-b hover:bg-gray-100"><i class="fas fa-angle-right"></i> Desserts</a>
          <a href="#" class="block px-4 py-2 border-b hover:bg-gray-100"><i class="fas fa-angle-right"></i> Cold Beverages</a>
          <a href="#" class="block px-4 py-2 border-b hover:bg-gray-100"><i class="fas fa-angle-right"></i> Milk Alternatives</a>
          <a href="#" class="block px-4 py-2 border-b hover:bg-gray-100"><i class="fas fa-angle-right"></i> Beverage Add-Ons</a>
        </div>
      </div>
    </div>

    <!-- Products -->
    <div class="col-span-1 md:col-span-8 bg-white">
      <h4 class="text-center font-bold m-4">Coffee Selection</h4>
      @if (auth()->check() && (auth()->user()->role == 'admin'))
      <a href="tambahProductHTML.php">
        <button class="btn btn-info" name="tambahBtn">+ Tambah Produk</button>
      </a>
      @endif

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($produk as $data)
        <div class="card mx-auto mb-4 max-w-sm" style="width: 18rem;">
          <form method="post" action="addToCart.php">
            <img src='{{ $data["gambar"] }}' alt="{{ $data['namaProduk'] }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{ $data['namaProduk'] }}</h5>
              <input type="hidden" name="produkID" value="{{ $data['produkID'] }}">
              <p class="card-text">Harga = Rp. {{ number_format($data['harga']) }}</p>
              <p class="card-text">Stock = {{ $data['stock'] }} Quantity</p>
              <p class="card-text">Deskripsi:</p>
              <p class="card-text">{{ $data['deskripsi'] }}</p>
              @if (auth()->check() && (auth()->user()->role != 'admin'))
              <button type="submit" class="btn btn-success" name="beli">Beli</button>
              @endif
          </form>
          @if (auth()->check() && (auth()->user()->id == 'admin'))
          <form method="post" action="deleteProduct.php">
            <input type="hidden" name="produkID" value="{{ $data['produkID'] }}">
            <button type="submit" class="btn btn-danger" name="deleteBtn">Delete</button>
          </form>
          @endif
        </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>

  @include('footer')

  <!-- Jangan di hapus script! Dipakai walaupun pakai Tailwind -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#carouselExampleControls').carousel();
    });
  </script>

</body>

</html>