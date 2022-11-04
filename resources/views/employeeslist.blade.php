<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees List</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container text-center p-4">
        <h1>Employees List</h1>
        <table class="table ">
            <thead>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tgl Lahir</th>
                <th>Jabatan</th>
                <th>Tgl Masuk</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
