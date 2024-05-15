@include('AdminDashboardHeader')
<div class="ml-64 p-8">
    <header>
        <h5 class="text-lg font-semibold"><i class="fa fa-dashboard mr-5"></i>List Produk</h5>
    </header>

    <body>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Gambar
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama Produk
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Harga
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Stock
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Deskripsi
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">
                            <img src='{{ $data["gambar"] }}' alt="{{ $data['namaProduk'] }}" class="w-24 h-24 object-cover">
                        </td>
                        <td class="py-4 px-6">
                            {{ $data['namaProduk'] }}
                        </td>
                        <td class="py-4 px-6">
                            Rp. {{ number_format($data['harga']) }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data['stock'] }} Quantity
                        </td>
                        <td class="py-4 px-6">
                            {{ $data['deskripsi'] }}
                        </td>
                        <td class="py-4 px-6">
                            @if (auth()->check() && (auth()->user()->role != 'admin'))
                            <form method="post" action="addToCart.php">
                                <input type="hidden" name="produkID" value="{{ $data['produkID'] }}">
                                <button type="submit" class="btn btn-success" name="beli">Beli</button>
                            </form>
                            @endif
                            @if (auth()->check() && (auth()->user()->id == 'admin'))
                            <form method="post" action="deleteProduct.php">
                                <input type="hidden" name="produkID" value="{{ $data['produkID'] }}">
                                <button type="submit" class="btn btn-danger" name="deleteBtn">Delete</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</div>
@include('AdminDashboardFooter')
