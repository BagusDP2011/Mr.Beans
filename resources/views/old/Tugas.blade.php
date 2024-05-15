<html>
<table style="border: 1px solid black;">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Harga</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $datas)
        <tr>
            <td>{{ $datas['id'] }}</td>
            <td>{{ $datas['nama'] }}</td>
            <td>{{ $datas['harga'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</html>