@include('AdminDashboardHeader')
<div class="ml-64 p-8">
    <header>
        @include('Session')
        <h5 class="text-lg font-semibold"><i class="fa fa-dashboard mr-5"></i>List Penjualan</h5>
    </header>

    <body>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-6 mt-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <!-- <th scope="col" class="py-3 px-6">Transaction ID</th> -->
                        <th scope="col" class="py-3 px-6">No Resi</th>
                        <th scope="col" class="py-3 px-6" colspan="4">Product Names</th>
                        <th scope="col" class="py-3 px-6">User Name</th>
                        <th scope="col" class="py-3 px-6">Nomor Telepon</th>
                        <th scope="col" class="py-3 px-6">Alamat</th>
                        <th scope="col" class="py-3 px-6">Total Harga</th>
                        <!-- <th scope="col" class="py-3 px-6">Product IDs</th> -->
                        <th scope="col" class="py-3 px-6">Status</th>
                        <!-- <th scope="col" class="py-3 px-6">User ID</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($TH as $transactionHistory)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <!-- <td class="py-4 px-6">{{ $transactionHistory->THID }}</td> -->
                        <td class="py-4 px-6">{{ $transactionHistory->order_id }}</td>
                        <td class="py-4 px-6" colspan="4">
                            @if($transactionHistory->products->isNotEmpty())
                            @foreach($transactionHistory->products as $product)
                            {{ $product->namaProduk }}@if(!$loop->last), @endif
                            @endforeach
                            @else
                            N/A
                            @endif
                        </td>
                        <td class="py-4 px-6">{{ $transactionHistory->user->fullName ?? 'N/A' }}</td>
                        <td class="py-4 px-6">{{ $transactionHistory->user->noHp ?? 'N/A' }}</td>
                        <td class="py-4 px-6">{{ $transactionHistory->user->alamat ?? 'N/A' }}</td>
                        <!-- <td class="py-4 px-6">{{ implode(', ', (array) $transactionHistory->produkID) }}</td> -->
                        <td class="py-4 px-6">{{ $transactionHistory->totalHarga }}</td>
                        <td class="py-4 px-6">{{ $transactionHistory->status }}</td>
                        <!-- <td class="py-4 px-6">{{ $transactionHistory->userID }}</td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="fixed bottom-10 right-10">
                <button id="btnCetakResi" class="bg-blue-500 text-white px-4 py-2 rounded shadow-md hover:bg-blue-600">
                    Cetak Resi
                </button>
            </div>
            <script>
    const btnCetakResi = document.getElementById('btnCetakResi');
    btnCetakResi.addEventListener('click', async () => {
        try {
            const response = await fetch('/cetak/resi-penjualan', {
                method: 'GET',
            });

            if (!response.ok) {
                throw new Error('Gagal menghasilkan resi PDF');
            }

            const blob = await response.blob();
            const url = window.URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.target = '_blank';
            link.click();
        } catch (error) {
            console.error(error);
            alert('Terjadi kesalahan saat mencetak resi');
        }
    });
</script>

        </div>
    </body>
</div>
@include('AdminDashboardFooter')