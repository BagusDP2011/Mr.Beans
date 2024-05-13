<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Beans Login</title>
    <!-- <link rel="stylesheet" href="css/login.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('header')

    <!-- Isi  -->
    <div class="wrapper-kosong">
        <center>

            <p class="bg-warning pt-5 pb-5 font-weight-bold">MOHON SEGERA SELESAIKAN PEMBAYARAN</p>
            <?php $tomorrowDate = new DateTime('tomorrow'); ?>
            <p>Transfer dana sebelum tanggal <b>{{ $tomorrowDate->format('d-M-Y') }}</b></p>
            <div class="timer">
                <!-- <p>Remaining</p> -->
                <ul class="timer countdown" id="countdown">
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

            <div class="ml-5 mr-5" style="border-top: 2px solid black;"></div>
            <br>
            <p>JUMLAH YANG HARUS DI BAYAR</p>
            @if (isset($totalharga))
            <?php $totalhargabayar = $totalharga + rand(0, 200); ?>
            <p style="font-size:30px; font-weight:bold; color: blue;">Total Harga : Rp. {{ number_format($totalhargabayar) }}</p>
            @else
            <p>Total Harga is tidak tersedia.</p>
            @endif

            <h6>Harap transfer sesuai jumlah pembayaran dengan digit terakhirnya.</h6>
            <h6>Jika jumlah pembayaran tidak sesuai, proses verifikasi pembayaran anda akan terhambat.</h6>
            <br>
            <div class="ml-5 mr-5" style="border-top: 2px solid black;"></div>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-5 text-center">
                    <img src="{{ asset('assets/logo-bni.png') }}" alt="Logo BNI" width="200px" height="100px">
                    <h6>Bank BNI</h6>
                    <h6>Atas Nama: Mr. Beans</h6>
                    <h6>906-245-818</h6>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{ asset('assets/logo-bri.png') }}" alt="Logo BRI" width="300px" height="100px">
                    <h6>Bank BRI</h6>
                    <h6>Atas Nama: Mr. Beans</h6>
                    <h6>0174-0109-7205-507</h6>
                </div>
            </div>
            <br>
            <form action="lastProcess.php" method="POST">
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

                @isset($quantity)
                    <input type="hidden" name="quantity" value="{{ $quantity }}">
                @else
                    <input type="hidden" name="quantity" value="0"> <!-- Nilai default jika $quantity tidak terdefinisi -->
                @endisset

                @isset($totalhargabayar)
                    <input type="hidden" name="totalHargaBayar" value="{{ $totalhargabayar }}">
                @else
                    <input type="hidden" name="totalHargaBayar" value="0"> <!-- Nilai default jika $totalhargabayar tidak terdefinisi -->
                @endisset

                <input type="hidden" name="tanggalBayar" value="{{ date('Y-m-d') }}">
                <button type="submit">Kembali ke Halaman Utama</button>
            </form>

        </center>
    </div>
    @include('footer')
</body>

</html>
