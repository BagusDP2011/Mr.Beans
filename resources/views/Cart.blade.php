<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Beans Keranjang</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/keranjang.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    @include('header')
    <!-- Isi  -->
    <div class="wrapper text-center mt-16">
        <p class="text-2xl font-bold">KERANJANG SAYA</p>
        @php
        $asd = auth()->user()->userID;
        echo $asd;
        @endphp
    </div>
    <div class="container mx-auto table-container mt-3">
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
                    auth()->check();
                    $id = auth()->user()->userID;
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
                            <form action="{{ route('ActionSendToCart', ['produkID' => $data->produkID, 'quantity' => $data->quantity]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn bg-blue-500 text-white px-4 py-2 rounded">Tambah</button>
                            </form>

                            <form action="{{ route('ActionDeleteFromCart', ['cartID' => $data->cartID]) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Yakin untuk hapus???')">Hapus</button>
                            </form>

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
            <form action="{{ route('CartAction', ['userID' => auth()->user()->userID, 'totalHarga' => $totalharga]) }}" method="POST" class="flex justify-end mt-4">
                @csrf <!-- CSRF protection -->
                <input type="hidden" name="userID" value="{{ auth()->user()->userID }}">
                <input type="hidden" name="totalharga" value="{{ $totalharga }}">
                <button type="submit" class="btn bg-blue-500 text-white px-4 py-2 rounded">Bayar</button>
            </form>
        </div>
    </div>
    @include('footer')
</body>

</html>