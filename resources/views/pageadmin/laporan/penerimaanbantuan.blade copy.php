<!-- resources/views/laporan/penerimaanbantuan.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penerimaan Bantuan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Laporan Penerimaan Bantuan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>No KK</th>
                    <th>Alamat</th>
                    <th>Jenis Bantuan</th>
                    <th>Tanggal Penerimaan</th>
                    <th>Status Verifikasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penerimaBantuan as $penerima)
                    <tr>
                        <td>{{ $penerima->masyarakat->nama }}</td>
                        <td>{{ $penerima->masyarakat->nik }}</td>
                        <td>{{ $penerima->masyarakat->no_kk }}</td>
                        <td>{{ $penerima->masyarakat->alamat }}</td>
                        <td>{{ $penerima->bantuansosial->jenis_bantuan }}</td>
                        <td>{{ $penerima->tanggal_penerimaan }}</td>
                        <td>{{ $penerima->status_verifikasi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
