@include('header')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="fontawesome/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset("/css/index.css") }}">
  <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
  <title>MrBeans CoffeeBeans Shop</title>
</head>

<body>
  @include('header')

  <!-- Isi -->
  <div class="row mb-5">
    <a href="{{ url("products.php") }}">
      <img src="{{ asset("/assets/logo/index1.png") }}" alt="Index poster" width="100%">
    </a>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      @foreach ($produk as $data)
      <div class="col-md-3 mb-4">
        <div class="card" style="width: 16rem;">
          <img src='{{ $data["gambar"] }}' alt="{{ $data['namaProduk'] }}" class="card-img-top">
          <div class="card-body bg-light">
            <h5 class="card-title text-center">{{ $data['namaProduk'] }}</h5>
            <input type="hidden" name="produkID" value="{{ $data['produkID'] }}">
            <!-- <p>Harga = Rp. {{ number_format($data['harga']) }}</p>
          <p>Stock = {{ $data['stock'] }} Quantity</p> <br> -->
            <p class="card-text text-center">Deskripsi:</p>
            <p class="card-text text-center">{{ $data['deskripsi'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-md-12">
        <div aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item {{ $produk->onFirstPage() ? 'disabled' : '' }}">
              <a class="page-link" href="{{ $produk->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            @for ($i = 1; $i <= $produk->lastPage(); $i++)
              <li class="page-item {{ $i == $produk->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $produk->url($i) }}">{{ $i }}</a>
              </li>
              @endfor
              <li class="page-item {{ $produk->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $produk->nextPageUrl() }}" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>

  <hr id="about">

  <!-- About Section -->
  <div class="container py-5 text-center" style="max-width: 1080px;">
    <h3>Tentang Kami </h3>
    <h3> Mr.Beans Coffee</h3>
    <img src="https://i.pinimg.com/564x/36/6f/9c/366f9c6cb274d3ae92458520e5087831.jpg" class="mt-4" width="750" height="450">
    <div class="mt-5">
      <h4><b>Siapakah Kami?</b></h4>
      <h6><i>Kopi tidak bertanya, tapi kopi mengerti</i></h6>
      <p class="mt-4">Kopi itu mampu menghasilkan reaksi macam-macam. Dan dia benar. Kopi tiwus telah membuatku sadar, bahwa aku ini barista terburuk. Bukan cuma sok tahu, mencoba membuat filosofi dari kopi lalu memperdagangkannya, tapi yang paling parah, aku sudah merasa membuat kopi paling sempurna di dunia.</p>
    </div>
  </div>


  <hr>

  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="row pl-5 pt-5 pb-5 pr-5">
      <div class="col-md-6" style="max-width: 100%; margin-left: 50px;">
        <h3 class="text-center">CARI KAMI</h3>
        <h5>Transportasi Umum ke Politeknik Negeri Batam</h5>
        <p style="word-wrap: break-word;">
          <!-- Alamat : Jl. Banceuy No. 51 <br>
        Bandung 40111 <br>
        No. Telepon : +62 22 4230473 <br>
        Email : info@kopiaroma.id<br/> -->

          Mencari pemberhentian atau stasiun terdekat untuk ke Politeknik Negeri Batam? Coba lihat daftar pemberhentian terdekat dari tujuan mu. Halte Masjid Raya B. <br /> <br>
          Pemberhentian Bis dekat Politeknik Negeri Batam
        <ul>
          <li>
            Halte Masjid Raya B, Berjalan 8 menit,
          </li>
        </ul>

        Jalur Bis ke Politeknik Negeri Batam
        <ul>
          <li>
            KOR 2 : Batam Center
          </li>
          <li>
            KOR 6 : Tanjung Piayu <br>
          </li>
        </ul>
        </p>
        <p>Powered by <a href="{{ route('home') }}" target="_blank">Mr.Beans Coffee</a></p>
      </div>
      <div class="col-md-5 pt-3 pl-3">
        <center>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0579150832177!2d104.04588161016915!3d1.1186404622714714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sen!2sid!4v1700911546748!5m2!1sen!2sid" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </center>
      </div>
  </footer>

  <div class="copyright text-center text-white font-weight-bold bg-warning p-2">
    <h3 class="d-inline-block mr-2"> DEVELOP BY: MrBeans Teams </h3><i class="far fa-copyright"></i>
  </div>


  <script src="{{ asset("/js/jquery-3.6.0.min.js") }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#carouselExampleControls').carousel();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      const urlParams = new URLSearchParams(window.location.search);
      const successParam = urlParams.get('success');

      if (successParam === 'true') {
        Swal.fire({
          icon: 'info',
          title: 'Success!',
          text: 'Terima kasih atas pembelian. Nantikan barang anda dalam waktu 3-5 hari kerja.',
          confirmButtonText: 'OK'
        });
      }
    });
  </script>

</body>

</html>