@include('AdminDashboardHeader')
<div class="ml-64 p-8">
    <header>
        @include('Session')
        <h5 class="text-lg font-semibold"><i class="fa fa-shopping-basket mr-5"></i>List Produk</h5>
    </header>

    <div class="flex justify-end mb-4">
        <button class="bg-blue-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded flex items-center" data-modal-target="#tambahProdukModal" data-modal-toggle="tambahProdukModal">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
            </svg>
            <span class="ml-2">Tambah Produk</span>
        </button>
    </div>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-black">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 border-2 border-black dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">Gambar</th>
                    <th scope="col" class="py-3 px-6">Nama Produk</th>
                    <th scope="col" class="py-3 px-6">Harga</th>
                    <th scope="col" class="py-3 px-6">Stock</th>
                    <th scope="col" class="py-3 px-6">Deskripsi</th>
                    <th scope="col" class="py-3 px-6">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200 dark:bg-gray-800 dark:border-gray-700">
                @foreach ($produk as $index => $data)
                <tr class="border border-black">
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
                    <td class="px-6 py-4">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center" data-modal-target="#editModal-{{ $index }}" data-modal-toggle="editModal-{{ $index }}">
                            Edit
                        </button>
                        <form action="{{ route('AdminDeleteProduct', $data->produkID) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white hover:text-red-300 font-bold py-2 px-4 rounded flex items-center">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div id="editModal-{{ $index }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-blue-300 rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 bg-blue-400">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Edit Produk
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editModal-{{ $index }}">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <form id="editForm-{{ $index }}" action="{{ route('AdminUpdateProduct', ['produkID' => $data['produkID']]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4">
                                        <label for="namaProduk-{{ $index }}" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk:</label>
                                        <input type="text" name="namaProduk" id="namaProduk-{{ $index }}" value="{{ $data['namaProduk'] }}" placeholder="Nama Produk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    </div>
                                    <div class="mb-4">
                                        <label for="harga-{{ $index }}" class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                                        <input type="text" name="harga" id="harga-{{ $index }}" value="{{ $data['harga'] }}" placeholder="Harga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    </div>
                                    <div class="mb-4">
                                        <label for="stock-{{ $index }}" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
                                        <input type="text" name="stock" id="stock-{{ $index }}" placeholder="Stock" value="{{ $data['stock'] }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    </div>
                                    <div class="mb-4">
                                        <label for="deskripsi-{{ $index }}" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
                                        <input type="textarea" name="deskripsi" id="deskripsi-{{ $index }}" placeholder="Deskripsi" value="{{ $data['deskripsi'] }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    </div>
                                    <div class="mb-4">
                                        <label for="gambar-{{ $index }}" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
                                        <input type="text" name="gambar" id="gambar-{{ $index }}" placeholder="Link URL Gambar" value="{{ $data['gambar'] }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    </div>
                                </form>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 bg-blue-400">
                                <button type="submit" form="editForm-{{ $index }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Produk</button>
                                <button data-modal-hide="editModal-{{ $index }}" type="button" class="text-white bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $produk->links() }}


    <!-- Tambah Produk Modal -->
    <div id="tambahProdukModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-blue-300 rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 bg-blue-400">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Produk Baru
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tambahProdukModal">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form id="tambahProdukForm" action="{{ route('AdminTambahProduct') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="namaProduk" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk:</label>
                            <input type="text" name="namaProduk" id="namaProduk" placeholder="Nama Produk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                            <input type="text" name="harga" id="harga" placeholder="Harga Barang" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
                            <input type="text" name="stock" id="stock" placeholder="Stock" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
                            <input type="textarea" name="deskripsi" id="deskripsi" placeholder="Deskripsi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
                            <input type="text" name="gambar" id="gambar" placeholder="Link URL Gambar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 bg-blue-400">
                    <button type="submit" form="tambahProdukForm" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Produk</button>
                    <button data-modal-hide="tambahProdukModal" type="button" class="text-white bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Batalkan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="items-end self-end mr-10 mb-5">
    <form action="{{ route('cetak.product') }}" method="GET">
        @csrf
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow-md hover:bg-blue-600">
            Cetak Resi
        </button>
    </form>
</div>
@include('AdminDashboardFooter')

<!-- Include the Flowbite JS file -->
<script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the 'Tambah Produk' modal
        var tambahProdukModalElement = document.getElementById('tambahProdukModal');
        if (tambahProdukModalElement) {
            new Modal(tambahProdukModalElement);
        }

        // Initialize each 'Edit' modal dynamically
        var editModals = document.querySelectorAll('[id^=editModal-]');
        editModals.forEach(function(modalElement) {
            new Modal(modalElement);
        });
    });
</script>
