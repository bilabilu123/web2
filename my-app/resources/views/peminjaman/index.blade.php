<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Peminjaman</title>
</head>

<body>
    <h1>Daftar Peminjaman</h1>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>ruang id</th>
                <th>pegawai id</th>
                <th>tanggal</th>
                <th>jam mulai</th>
                <th>jam akhir</th>
                <th>keterangan</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($peminjamans as $peminjaman)
        <tr>
            <td>{{ $peminjaman->id }}</td>
            <td>{{ $peminjaman->ruang }}</td>
            <td>{{ $peminjaman->pegawai }}</td>
            <td>{{ $peminjaman->tanggal }}</td>
            <td>{{ $peminjaman->jam_mulai }}</td>
            <td>{{ $peminjaman->jam_akhir }}</td>
            <td>{{ $peminjaman->keterangan }}</td>

        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>
