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
  <div class="row mt-5 no-gutters">
    <div class="col-md-12">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset("/assets/carousel/1.png") }}" class="d-block w-100 h-100" alt="Kofee Poster">
          </div>
          <div class="carousel-item">
            <img src="{{ asset("/assets/carousel/2.png") }}" class="d-block w-100 h-100" alt="Kofee Poster">
          </div>
          <div class="carousel-item">
            <img src="{{ asset("/assets/carousel/3.png") }}" class="d-block w-100 h-100" alt="Kofee Poster">
          </div>
          <div class="carousel-item">
            <img src="{{ asset("/assets/carousel/4.png") }}" class="d-block w-100 h-100" alt="Kofee Poster">
          </div>
          <div class="carousel-item">
            <img src="{{ asset("/assets/carousel/5.png") }}" class="d-block w-100 h-100" alt="Kofee Poster">
          </div>
        </div>
        <a class="carousel-control-prev" href="{{ url("#carouselExampleControls") }}" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="{{ url("#carouselExampleControls") }}" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <a href="{{ url("products.php") }}">
      <img src="{{ asset("/assets/logo/index1.png") }}" alt="Index poster" width="100%">
    </a>
  </div>

  <center>
    <div class="col-md-12 p-5 bg-warning" style="width: 100%;">
      <p style="font-weight: bold; font-size:x-large;">Tentang Kami</p>
      <p>Selamat datang di Mr. Beans Coffee Shop! Kami adalah penyedia biji kopi berkualitas tinggi yang berkomitmen untuk memberikan pengalaman kopi terbaik kepada pelanggan kami.
        Dengan dedikasi terhadap kualitas, keberlanjutan, dan inovasi, kami menjalani perjalanan kami untuk membawa cita rasa kopi terbaik ke setiap cangkir.

        Kami bekerja erat dengan para petani kopi di seluruh dunia, memilih biji kopi secara teliti dari sumber-sumber terbaik. Setiap biji dipilih secara hati-hati,
        diproses dengan cermat, dan disempurnakan oleh para ahli roasting kami untuk menghasilkan rasa kopi yang kaya, kompleks, dan memikat.

        Dengan fokus pada keberlanjutan, kami memastikan setiap langkah dalam rantai pasokan kami menghormati lingkungan dan mendukung kesejahteraan para petani lokal.
        Kami juga berkomitmen untuk memberikan kontribusi positif pada komunitas tempat kami beroperasi.

        Kami percaya bahwa setiap cangkir kopi adalah cerminan dari perjalanan panjang biji kopi dari ladang hingga ke tangan Anda. Kami tidak hanya menyediakan kopi;
        kami membawa pengalaman dan cerita di setiap tegukan, mempersembahkan aroma dan rasa yang luar biasa.

        Bergabunglah dengan kami di Mr. Beans Coffee Shop untuk menikmati kopi berkualitas terbaik yang menghadirkan kelezatan setiap hari. Mari kita nikmati kopi dalam
        segala kemuliaannya dan nikmati perjalanan rasa yang tak terlupakan bersama-sama!</p>
    </div>
    <div class="col-md-12 p-5 bg-warning" style="width: 100%;">
      <p style="font-weight: bold; font-size:x-large;">Frequently Asked Question</p>
      <p>
        <b>1. Apa yang membuat kopi dari Mr-Beans istimewa?</b><br>
        Kami menghadirkan kopi berkualitas tinggi dari berbagai belahan dunia.<br> Biji kopi dipilih secara cermat dan dipanggang dengan teliti untuk memberikan rasa yang khas dan berkualitas tinggi. <br>
        <b>2. Apakah Mr-Beans memiliki opsi pengiriman?</b> <br>
        Ya, kami menawarkan layanan pengiriman untuk kopi kami ke seluruh wilayah dalam dan luar kota.<br> Pelanggan dapat memesan secara online dan memilih opsi pengiriman sesuai kebutuhan. <br>
        <b>3. Apakah ada program keanggotaan atau loyalty?</b> <br>
        Kami memiliki program keanggotaan yang memungkinkan pelanggan untuk mengumpulkan poin setiap kali mereka berbelanja.<br> Poin tersebut bisa ditukarkan dengan diskon atau produk gratis di masa mendatang. <br>
        <b>4. Apakah Mr-Beans menyediakan kelas atau seminar kopi?</b> <br>
        Ya, kami secara berkala mengadakan kelas dan seminar kopi yang membahas tentang proses menyeduh kopi yang sempurna, perbedaan biji kopi, dan cara menikmati kopi dengan lebih baik. <br>
        <b>5. Bagaimana cara saya menghubungi layanan pelanggan jika saya memiliki pertanyaan atau keluhan?</b> <br>
        Anda dapat menghubungi tim layanan pelanggan kami melalui telepon, email, atau langsung datang ke toko kami selama jam operasional.<br> Kami selalu siap membantu dengan pertanyaan atau masukan yang Anda miliki. <br>
        <b>6. Apakah Mr-Beans memiliki kemitraan untuk bisnis atau pengecer?</b> <br>
        Kami senang menjalin kemitraan dengan bisnis atau pengecer.<br> Silakan hubungi kami untuk informasi lebih lanjut tentang kemungkinan kerjasama dan penawaran khusus untuk mitra bisnis. <br>
        <b>7. Bagaimana cara saya mengetahui informasi terbaru tentang promosi atau penawaran dari Mr-Beans?</b> <br>
        Anda dapat mengunjungi situs web kami secara teratur atau mengikuti akun media sosial kami untuk mendapatkan update terbaru tentang promosi, diskon, atau acara kopi yang kami adakan. <br>
        <b>8. Apakah ada panduan untuk menyeduh kopi yang benar?</b> <br>
        Kami menyediakan panduan langkah demi langkah tentang cara menyeduh kopi yang sempurna untuk berbagai jenis alat penyeduh.<br> Panduan ini bisa diakses di situs web kami atau di toko kami. <br>
      </p>
    </div>
  </center>

  <div class="row bg-secondary pl-5 pt-5 pb-5 pr-5">
    <div class="col-md-6" style="max-width: 100%; margin-left: 50px;">
      <h2>Transportasi Umum ke Politeknik Negeri Batam</h2>
      <p style="word-wrap: break-word;">
        Ingin tahu bagaimana caranya sampai ke Politeknik Negeri Batam, Indonesia? Moovit helps you membantumu menemukan cara teerbaik untuk sampai ke Politeknik Negeri Batam
        dengan petunjuk langkah demi langkah dari stasiun transportasi umum terdekat.
        Moovit menyediakan peta gratis dan panduan langsung untuk membantumu bepergian di kotamu. Melihat jadwal, rute, jadwal waktu dan mencari tahu berapa lama untuk
        sampai ke Politeknik Negeri Batam secara langsung. <br> <br>

        Mencari pemberhentian atau stasiun terdekat untuk ke Politeknik Negeri Batam? Coba lihat daftar pemberhentian terdekat dari tujuan mu. Halte Masjid Raya B. <br> <br>
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

      Bis:KOR 2
      Ingin melihat apakah ada rute lain yang dapat membawa mu lebih cepat ke tujuan? Moovit akan membantumu mencari rute dan waktu alternatif.
      Dapatkan arah dari dan arah ke Politeknik Negeri Batam dengan mudah melalui Moovit app atau Situs Web.
      Kami membuat perjalanan ke Politeknik Negeri Batam mudah, alasan itu lah yang membuat jutaan 1.5 pengguna, termasuk pengguna di Batam,
      percaya kepada Moovit sebagai app Transportasi Umum terbaik. Kamu tidak perlu mengunduh app untuk bis atau kereta secara terpisah, Moovit adalah app Transportasi
      Umum yang semua ada didalamnya akan membantumu mencari jadwal terbaik bis dan kereta. <br><br>

      Untuk informasi harga Bis, biaya dan tarif perjalanan ke Politeknik Negeri Batam, silakan periksa aplikasi Moovit.
      Gunakan aplikasi untuk menavigasi ke tempat-tempat populer termasuk ke bandara, rumah sakit, stadion, toko kelontong, mal, kedai kopi, sekolah, perguruan tinggi, dan universitas. </p>
    </div>
    <div class="col-md-5 pt-3 pl-3">
      <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0579150832177!2d104.04588161016915!3d1.1186404622714714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sen!2sid!4v1700911546748!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </center>
    </div>
  </div>

  <footer class="bg-dark text-white pl-5 pr-5">
    <div class="row">
      <div class="col-md-4">
        <h3>LAYANAN PELANGGAN</h3>
        <p>
          Mr-Beans Coffee Beans Shop menawarkan layanan pelanggan yang unggul dengan staf terlatih dalam pengetahuan kopi
          yang mendalam, program keanggotaan untuk loyalitas pelanggan, penawaran khusus, dan konsistensi dalam kualitas produk.
          Mereka berkomitmen untuk menciptakan pengalaman di toko yang menyenangkan, tanggap terhadap keluhan, dan memperkuat
          hubungan dengan pelanggan melalui berbagai saluran komunikasi untuk memastikan kepuasan dan kepercayaan yang berkelanjutan.</p>
      </div>

      <!-- <div class="col-md-3">
        <h3>TENTANG KAMI</h3>
        <p>
          Mr-Beans Coffee Beans Shop menawarkan layanan pelanggan yang unggul dengan staf terlatih dalam pengetahuan kopi yang mendalam,
          program keanggotaan untuk loyalitas pelanggan, penawaran khusus, dan konsistensi dalam kualitas produk. Mereka berkomitmen
          untuk menciptakan pengalaman di toko yang menyenangkan, tanggap terhadap keluhan, dan memperkuat hubungan dengan pelanggan
          melalui berbagai saluran komunikasi untuk memastikan kepuasan dan kepercayaan yang berkelanjutan.</p>
      </div> -->
      <div class="col-md-4">
        <h3>MITRA KERJA SAMA</h3>
        <p>Dalam kemitraan kami di Mr-Beans Coffee Beans Shop, kami menawarkan kepada mitra kesempatan untuk terlibat dalam menjual
          dan mempromosikan kualitas biji kopi terbaik. Kami berkomitmen untuk mendukung mitra kami dengan pengetahuan yang mendalam
          tentang produk kami, memberikan akses ke program keanggotaan yang dapat meningkatkan loyalitas pelanggan, serta menyediakan
          penawaran khusus dan dukungan pemasaran untuk memperluas jangkauan pasar bersama. Dalam setiap kemitraan, kami bertujuan
          untuk menciptakan kolaborasi yang saling menguntungkan dan membangun hubungan jangka panjang yang berfokus pada kualitas,
          kepuasan pelanggan, dan pertumbuhan bersama.</p>
      </div>
      <div class="col-md-4">
        <h3>HUBUNGI KAMI</h3>
        <p>Untuk informasi lebih lanjut tentang produk kami, pertanyaan, atau kerjasama, silakan hubungi tim kami di Mr-Beans
          Coffee Beans Shop melalui berbagai saluran komunikasi yang kami sediakan. Anda dapat menghubungi kami melalui telepon
          di nomor layanan pelanggan kami yang tersedia pada jam operasional, mengirimkan email ke alamat kami, atau datang
          langsung ke toko kami untuk berdiskusi secara langsung. Kami juga aktif di berbagai platform media sosial dan pesan
          instan, sehingga Anda dapat tetap terhubung dengan kami melalui kanal tersebut. Kami siap membantu dengan informasi
          yang dibutuhkan, mempertimbangkan kemitraan baru, atau mendengarkan masukan dari pelanggan kami untuk terus
          meningkatkan layanan kami.</p>
      </div>
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
