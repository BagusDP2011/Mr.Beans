<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Beans Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/keranjang.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    @include('header') <!-- Include header.blade.php -->

    <!-- Isi  -->
    <div class="wrapper text-center" style="margin-top:100px;">
        <p style="font-size: 30px;"><b>KERANJANG SAYA</b></p>
    </div>
    <div class="container-fluid table-container">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-secondary text-white text-center" style="font-weight: bold;">
                        <td>No</td>
                        <td>Nama Barang</td>
                        <td>Harga </td>
                        <td>Quantity </td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $id = session('userID', 0); // Ambil userID dari session, default 0 jika tidak ada
                    $query = DB::table('cart')
                        ->join('produk', 'cart.produkID', '=', 'produk.produkID')
                        ->where('cart.userID', $id)
                        ->orderBy('produk.produkID', 'ASC')
                        ->get();
                    $no = 1;
                    $totalharga = 0;
                    @endphp

                    @foreach ($query as $data)
                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->namaProduk }}</td>
                        <td>Rp. {{ number_format($data->harga) }}</td>
                        <td>{{ $data->quantity }} pcs</td>
                        <td>
                            <a href="{{ route('add.cart', ['id' => $data->produkID]) }}" class="btn btn-primary tambah-btn float-end">Tambah</a>
                            <a href="{{ route('delete.cart', ['id' => $data->produkID]) }}" class="btn btn-danger float-end btn-delete" onclick="return confirm('Yakin???')">Hapus</a>
                        </td>
                        @php
                        $totalharga += ($data->harga * $data->quantity);
                        @endphp
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4 text-right">
                    <p class="text-end">Total harga = Rp. {{ number_format($totalharga) }}</p>
                    <form action="{{ route('konfirmasi') }}" method="POST">
                        @csrf <!-- CSRF protection -->
                        <input type="hidden" name="userID" value="{{ session('userID') }}">
                        @if(isset($quantity))
                            <input type="hidden" name="quantity" value="{{ $quantity }}">
                        @else
                            <input type="hidden" name="quantity" value="0"> 
                        @endif
                        <input type="hidden" name="totalharga" value="{{ $totalharga }}">
                        <button type="submit" class="btn btn-primary float-end">Bayar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
