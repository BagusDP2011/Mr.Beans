<meta name="csrf-token" content="{{{ csrf_token() }}}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

@include('AdminDashboardHeader')
<div class="ml-64 p-8">
    <header>
        @include('Session')
        <h5 class="text-lg font-semibold"><i class="fa fa-usd"></i><i class="fa fa-usd"></i><i class="fa fa-usd mr-5"></i>List Penjualan</h5>
    </header>

    <body>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-6 mt-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-black">
                <thead class="text-xs text-gray-700 uppercase bg-gray-400 border-2 border-black dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">No Resi</th>
                        <th scope="col" class="py-3 px-6" colspan="4">Product Names</th>
                        <th scope="col" class="py-3 px-6">User Name</th>
                        <th scope="col" class="py-3 px-6">Nomor Telepon</th>
                        <th scope="col" class="py-3 px-6">Alamat</th>
                        <th scope="col" class="py-3 px-6">Total Harga</th>
                        <th scope="col" class="py-3 px-6">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    @foreach($TH as $transactionHistory)
                    <tr class="border border-black">
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
                        <td class="py-4 px-6">{{ 'Rp. ' . number_format($transactionHistory->totalHarga) }}</td>
                        @if ($transactionHistory->status == 'Success')
                        <td class="py-4 px-6 text-green-500 font-bold">{{ $transactionHistory->status }}</td>
                        @else
                        <td class="py-4 px-6 text-red-500 font-bold">{{ $transactionHistory->status }}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- <div class="fixed bottom-10 right-10"> -->
            {{ $TH->links() }}
        </div>
    </body>
</div>
<div class="items-end self-end mr-10 mb-5">
    <form action="{{ route('cetak.penjualan') }}" method="GET">
        @csrf
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow-md hover:bg-blue-600">
            Cetak Resi
        </button>
    </form>
</div>
@include('AdminDashboardFooter')