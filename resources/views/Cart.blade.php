<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Beans Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/keranjang.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Remove Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" /> -->
</head>

<body>
    @include('header') <!-- Include header.blade.php -->

    <!-- Isi  -->
    <div class="wrapper text-center mt-24">
        <p class="text-2xl font-bold">KERANJANG SAYA</p>
    </div>
    <div class="container mx-auto table-container">
        <div class="w-full md:w-2/3 mx-auto">
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-600 text-white text-center font-bold">
                        <th class="p-2">No</th>
                        <th class="p-2">Nama Barang</th>
                        <th class="p-2">Harga</th>
                        <th class="p-2">Quantity</th>
                        <th class="p-2">Aksi</th>
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
                    <tr class="text-center border-t">
                        <td class="p-2">{{ $no++ }}</td>
                        <td class="p-2">{{ $data->namaProduk }}</td>
                        <td class="p-2">Rp. {{ number_format($data->harga) }}</td>
                        <td class="p-2">{{ $data->quantity }} pcs</td>
                        <td class="p-2 flex justify-center space-x-2">
                            <a href="{{ route('add.cart', ['id' => $data->produkID]) }}" class="btn bg-blue-500 text-white px-4 py-2 rounded">Tambah</a>
                            <a href="{{ route('delete.cart', ['id' => $data->produkID]) }}" class="btn bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Yakin???')">Hapus</a>
                        </td>
                        @php
                        $totalharga += ($data->harga * $data->quantity);
                        @endphp
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="flex justify-end mt-4">
                <p class="text-right">Total harga = Rp. {{ number_format($totalharga) }}</p>
            </div>
            <form action="{{ route('konfirmasi') }}" method="POST" class="flex justify-end mt-4">
                @csrf <!-- CSRF protection -->
                <input type="hidden" name="userID" value="{{ session('userID') }}">
                @if(isset($quantity))
                    <input type="hidden" name="quantity" value="{{ $quantity }}">
                @else
                    <input type="hidden" name="quantity" value="0"> 
                @endif
                <input type="hidden" name="totalharga" value="{{ $totalharga }}">
                <button type="submit" class="btn bg-blue-500 text-white px-4 py-2 rounded">Bayar</button>
            </form>
        </div>
    </div>
    @include('footer')
</body>

</html>
