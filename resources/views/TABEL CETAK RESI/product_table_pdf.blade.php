<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Daftar Produk</h2>
    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $data)
            <tr>
                <td><img src="{{ $data['gambar'] }}" alt="{{ $data['namaProduk'] }}"></td>
                <td>{{ $data['namaProduk'] }}</td>
                <td>Rp. {{ number_format($data['harga']) }}</td>
                <td>{{ $data['stock'] }} Quantity</td>
                <td>{{ $data['deskripsi'] }}</td>
                <td><!-- Tombol Aksi --></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
