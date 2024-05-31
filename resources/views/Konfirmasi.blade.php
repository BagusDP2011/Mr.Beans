<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Beans Konfirmasi Pembayaran</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="font-sans antialiased">
    @include('header')

    <!-- Isi  -->
    <div class="wrapper-konfirmasi flex flex-col items-center justify-center bg-yellow-100 rounded-2xl">
        <div class="bg-warning py-3 font-bold w-full rounded-2xl text-center">MOHON SEGERA SELESAIKAN PEMBAYARAN</div>
        <div class="container text-center align-center">
            <?php $tomorrowDate = new DateTime('tomorrow'); ?>
            <p class="py-2">Transfer dana sebelum tanggal <b>{{ $tomorrowDate->format('d-M-Y') }}</b></p>
            <div class="timer flex justify-center items-center">
                <ul class="countdown flex">
                    <li><i id="days">00</i>Day</li>
                    <li><i id="hours">00</i>Hour</li>
                    <li><i id="minutes">00</i>Min</li>
                    <li><i id="seconds">00</i>Sec</li>
                </ul>
            </div>
            <script>
                function countdown(endDate) {
                    let interval = setInterval(function() {
                        let now = new Date().getTime();
                        let distance = endDate - now;

                        if (distance <= 0) {
                            clearInterval(interval);
                            document.getElementById('countdown').innerHTML = "<li>Countdown Finished</li>";
                            return;
                        }

                        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        document.getElementById('days').innerHTML = formatTime(days);
                        document.getElementById('hours').innerHTML = formatTime(hours);
                        document.getElementById('minutes').innerHTML = formatTime(minutes);
                        document.getElementById('seconds').innerHTML = formatTime(seconds);
                    }, 1000);
                }

                function formatTime(time) {
                    return time < 10 ? "0" + time : time;
                }

                let tomorrow = "{{ date('Y-m-d', strtotime('+1 day')) }}";
                let endDate = new Date(tomorrow).getTime();
                countdown(endDate);
            </script>

            <p class="mt-3 pt-3 w-full text-center" style="border-top: 2px solid black;">JUMLAH YANG HARUS DI BAYAR</p>
            @if ($totalHarga !== null)
            <?php $totalHargaBayar = $totalHarga + rand(0, 200); ?>
            <p class="text-blue-600 text-3xl py-2 font-bold">Total Harga : Rp. {{ number_format($totalHargaBayar) }}</p>
            @else
            <p>Total Harga is tidak tersedia.</p>
            @endif
            <h6>Harap transfer sesuai jumlah pembayaran dengan digit terakhirnya.</h6>
            <h6>Jika jumlah pembayaran tidak sesuai, proses verifikasi pembayaran anda akan terhambat.</h6>

            <div class="my-3 w-full text-center" style="border-top: 2px solid black;"></div>

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
            @include('PaymentGatewayMidtrans')

            <form class="mb-4" action="lastProcess.php" method="POST">
                @isset($produkIDs)
                @foreach ($produkIDs as $produkID)
                <input type="hidden" name="produkIDs[]" value="{{ $produkID }}">
                @endforeach
                @endisset

                @isset($produkID)
                <input type="hidden" name="produkID" value="{{ $produkID }}">
                @else
                <input type="hidden" name="produkID" value="0"> <!-- Nilai default jika $produkID tidak terdefinisi -->
                @endisset

                @isset($totalHargaBayar)
                <input type="hidden" name="totalHargaBayar" value="{{ $totalHargaBayar }}">
                @else
                <input type="hidden" name="totalHargaBayar" value="0"> <!-- Nilai default jika $totalHargaBayar tidak terdefinisi -->
                @endisset

                <input type="hidden" name="tanggalBayar" value="{{ date('Y-m-d') }}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold pb-2 px-4 rounded mt-8">Batalkan dan Kembali ke Halaman Utama</button>
            </form>
        </div>
    </div>
    @include('footer')

</body>

</html>