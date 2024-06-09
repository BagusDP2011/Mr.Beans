<div class="ml-64 p-8">
    <header>
        <h5 class="text-lg font-semibold"><i class="fa fa-dashboard mr-5"></i>List Penjualan</h5>
    </header>

    <body>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-6 mt-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" border="1">
                <thead>
                    <tr>
                        <th scope="col">No Resi</th>
                        <th scope="col" colspan="4">Product Names</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($TH as $transactionHistory)
                    <tr>
                        <td>{{ $transactionHistory->order_id }}</td>
                        <td colspan="4">
                            @if($transactionHistory->products && $transactionHistory->products->isNotEmpty())
                            @foreach($transactionHistory->products as $product)
                            {{ $product->namaProduk }}@if(!$loop->last), @endif
                            @endforeach
                            @else
                            N/A
                            @endif
                        </td>
                        <td>{{ $transactionHistory->user->fullName ?? 'N/A' }}</td>
                        <td>{{ $transactionHistory->user->noHp ?? 'N/A' }}</td>
                        <td>{{ $transactionHistory->user->alamat ?? 'N/A' }}</td>
                        <td>{{ $transactionHistory->totalHarga }}</td>
                        <td>{{ $transactionHistory->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="fixed bottom-10 right-10">