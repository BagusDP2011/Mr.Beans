<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Beans Konfirmasi Pembayaran</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/TailwindStyles.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="font-sans antialiased">
    @include('header')

    <!-- Isi  -->
    <div class="wrapper-konfirmasi flex flex-col items-center justify-center bg-yellow-100 rounded-2xl grid grid-cols-3 gap-3">
        <div id="col1" class="col-span-1">
            <center>

                <div id="container kopi-uap">
                    <div class="steam" id="steam1"> </div>
                    <div class="steam" id="steam2"> </div>
                    <div class="steam" id="steam3"> </div>
                    <div class="steam" id="steam4"> </div>

                    <div id="cup">
                        <div id="cup-body">
                            <div id="cup-shade"></div>
                        </div>
                        <div id="cup-handle"></div>
                    </div>

                    <div id="saucer"></div>

                    <div id="shadow"></div>
                </div>
        </div>
        </center>
        <div id="col2" class="border-l-2 border-black px-4 my-4 col-span-2 text-center">
            <div class="bg-warning py-3 font-bold w-full rounded-2xl">MOHON SEGERA SELESAIKAN PEMBAYARAN</div>

            <p class="mt-3 pt-3 w-full" style="border-top: 2px solid black;">JUMLAH YANG HARUS DI BAYAR</p>
            @if (isset($totalHarga) && $totalHarga !== null)
            <p class="text-blue-600 text-3xl py-2 font-bold">Total Harga : Rp. {{ number_format($totalHargaBayar) }}</p>
            <h6>Harap transfer sesuai jumlah pembayaran dengan sesuai.</h6>
            <h6>Jika jumlah pembayaran tidak sesuai, proses verifikasi pembayaran anda akan terhambat.</h6>
            @else
            <p class="text-3xl py-2 font-bold">Total Harga is tidak tersedia.</p>
            <h6>Ada kemungkinan anda mengakses link ini tanpa melakukan pembelian.</h6>
            <h6>Silahkan login terlebih dahulu, pergi ke keranjang anda, dan klik tombol bayar untuk melakukan pembayaran.</h6>
            @endif

            <div class="my-3 w-full" style="border-top: 2px solid black;"></div>

            <div class="grid grid-cols-2 gap-4 justify-center">
                <div class="text-center">
                    <img src="{{ asset('assets/logo-bni.png') }}" alt="Logo BNI" class="w-32 h-16 mx-auto">
                    <h6>Bank BNI</h6>
                    <h6>Atas Nama: Mr. Beans</h6>
                    <h6>906-245-818</h6>
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/logo-bri.png') }}" alt="Logo BRI" class="w-48 h-16 mx-auto">
                    <h6>Bank BRI</h6>
                    <h6>Atas Nama: Mr. Beans</h6>
                    <h6>0174-0109-7205-507</h6>
                </div>
            </div>
            @if (isset($totalHarga) && $totalHarga !== null)
            @include('PaymentGatewayMidtrans')
            @else
            <data id="divkosong"></data>
            @endif
            <button type="submit" onclick="window.location.href=`{{ route('products') }}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold pb-2 px-4 my-4 rounded mt-8">Batalkan dan Kembali ke Halaman Produk</button>
        </div>
    </div>
    @include('footer')
</body>

</html>