<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>

<body>
    <div class="ml-64 p-8">
        <center>
            <img src="./assets/pdf/header.png" alt="Header PDF" width="720px">
        </center>
        <center>
            <h1 class="text-center font-bold">List Daftar Produk</h1>
        </center>
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $data)
                <tr style="padding: 8px 12px; border: 1px solid #ddd;">
                    <td>
                        <center>
                            <img src="{{ $data['gambar'] }}" alt="{{ $data['namaProduk'] }}" width="50px">
                        </center>
                    </td>
                    <td>{{ $data['namaProduk'] }}</td>
                    <td>Rp. {{ number_format($data['harga']) }}</td>
                    <td>{{ $data['stock'] }} Quantity</td>
                    <td>{{ $data['deskripsi'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>