<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
    <style>
        @media print {

            /* CSS untuk mengatur tampilan saat dicetak */
            body {
                padding: 20px;
                font-family: Arial, sans-serif;
            }

            #table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 20px;
            }

            #table th,
            #table td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
            }

            #table th {
                background-color: #f2f2f2;
            }
        }

        /* CSS tambahan untuk desain tabel */
        #table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0 auto;
            width: 100%;
        }

        #table th,
        #table td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        #table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        #table td {
            text-align: left;
        }
    </style>
</head>

<body>
    <table class="table table-borderless text-center"
        style="border-width:0px!important; border:none; text-align:center; width:100%">
        <tbody>
            <tr>
                <td>
                    <h4>
                        DATA MASYARAKAT PENERIMA BANTUAN SOSIAL<br />
                        DESA PULAU LANCANG, KEC. BENAI, KAB. KUANTAN SINGINGI</h4>

                    <p style="margin-left:0px; margin-right:0px">Alamat : Desa Pulau Lancang, Benau, Kode Pos : 29566, No. Telp :
                        +123456</p>
                </td>
            </tr>
        </tbody>
    </table>

    <div
        style="background:#000000; cursor:text; height:4px; margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; width:100%">
        &nbsp;</div>

    <div style="background:#000000; cursor:text; height:2px; margin-top:2px; width:100%">&nbsp;</div>

    <table id="table">
        <tbody>
            <tr>
                <th>Nama</th>
                <td>{{ $arsip->nama }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>{{ $arsip->nik }}</td>
            </tr>
            <tr>
                <th>No KK</th>
                <td>{{ $arsip->no_kk }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $arsip->alamat }}</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>{{ $arsip->nomor_telepon }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $arsip->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $arsip->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Status Ekonomi</th>
                <td>{{ $arsip->status_ekonomi }}</td>
            </tr>
            <tr>
                <th>Foto KTP</th>
                <td>
                    @if($arsip->foto_ktp)
                        <a href="{{ asset($arsip->foto_ktp) }}" target="_blank">
                            <img src="{{ asset($arsip->foto_ktp) }}" alt="Foto KTP" style="width: 100px; height: auto; cursor: pointer;">
                        </a>
                    @else
                        Tidak ada foto
                    @endif
                </td>
            </tr>
            <tr>
                <th>Foto KK</th>
                <td>
                    @if($arsip->foto_kk)
                        <a href="{{ asset($arsip->foto_kk) }}" target="_blank">
                            <img src="{{ asset($arsip->foto_kk) }}" alt="Foto KK" style="width: 100px; height: auto; cursor: pointer;">
                        </a>
                    @else
                        Tidak ada foto
                    @endif
                </td>
            </tr>
            <tr>
                <th>Jenis Bantuan</th>
                <td>{{ $arsip->jenis_bantuan }}</td>
            </tr>
            <tr>
                <th>Tanggal Penyaluran</th>
                <td>{{ $arsip->tanggal_penyaluran }}</td>
            </tr>
            <tr>
                <th>Jumlah Bantuan</th>
                <td>Rp{{number_format ($arsip->jumlah_bantuan) }}</td>
            </tr>
            <tr>
                <th>Sumber Dana</th>
                <td>{{ $arsip->sumber_dana }}</td>
            </tr>
            <tr>
                <th>Syarat Penerima</th>
                <td>{{ $arsip->syarat_penerima }}</td>
            </tr>
            <tr>
                <th>Tanggal Penerimaan</th>
                <td>{{ $arsip->tanggal_penerimaan }}</td>
            </tr>
            <tr>
                <th>Status Verifikasi</th>
                <td>{{ $arsip->status_verifikasi }}</td>
            </tr>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>