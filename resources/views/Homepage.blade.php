<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <title>MrBeans CoffeeBeans Shop</title>
</head>

<body class="bg-gray-100">

  <!-- Header -->
  @include('header')

  <!-- Isi -->
  <div class="w-full">
    <a href="{{ route('products') }}">
      <img src="{{ asset('/assets/logo/index1.png') }}" alt="Index poster" width="100%">
    </a>
  </div>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($produk as $data)
      <div class="max-w-xs rounded overflow-hidden shadow-lg">
        <img class="w-full" src='{{ $data["gambar"] }}' alt="{{ $data['namaProduk'] }}">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">{{ $data['namaProduk'] }}</div>
          <p class="text-gray-700 text-base">{{ $data['deskripsi'] }}</p>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
      {{ $produk->links() }}
    </div>
  </div>

  <!-- About Section -->
  <div class="container mx-auto max-w-7xl py-5 text-center">
    <h3 class="text-3xl font-bold mb-4">Tentang Kami</h3>
    <h3 class="text-3xl font-bold mb-8">Mr.Beans Coffee</h3>
    <img src="https://i.pinimg.com/564x/36/6f/9c/366f9c6cb274d3ae92458520e5087831.jpg" class="mx-auto mb-8" style="height:400px; width:600px;">
    <div class="max-w-3xl mx-auto">
      <h4 class="text-xl font-bold mb-2">Siapakah Kami?</h4>
      <h6 class="italic mb-4">Kopi tidak bertanya, tapi kopi mengerti</h6>
      <p class="mb-8">Kopi itu mampu menghasilkan reaksi macam-macam. Dan dia benar. Kopi tiwus telah membuatku sadar, bahwa aku ini barista terburuk. Bukan cuma sok tahu, mencoba membuat filosofi dari kopi lalu memperdagangkannya, tapi yang paling parah, aku sudah merasa membuat kopi paling sempurna di dunia.</p>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto max-w-7xl px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-2xl font-bold mb-4">CARI KAMI</h3>
          <p>Mencari pemberhentian atau stasiun terdekat untuk ke Politeknik Negeri Batam? Coba lihat daftar pemberhentian terdekat dari tujuan mu. Halte Masjid Raya B.</p>
          <ul class="mt-4">
            <li>Halte Masjid Raya B, Berjalan 8 menit</li>
          </ul>
          <p>Jalur Bis ke Politeknik Negeri Batam</p>
          <ul>
            <li>KOR 2 : Batam Center</li>
            <li>KOR 6 : Tanjung Piayu</li>
          </ul>
          <p>Powered by <a href="{{ route('home') }}" class="underline">Mr.Beans Coffee</a></p>
        </div>
        <div class="md:text-right">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0579150832177!2d104.04588161016915!3d1.1186404622714714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sen!2sid!4v1700911546748!5m2!1sen!2sid" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </footer>

  @include('footer')
</body>

</html>