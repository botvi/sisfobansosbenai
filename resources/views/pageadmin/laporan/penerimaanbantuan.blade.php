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

            #signature {
                text-align: right;
                margin-top: 50px;
                margin-right: 20px;
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

        /* Signature placement */
        #signature {
            text-align: right;
            margin-top: 50px;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <table class="table table-borderless text-center" style="border-width:0px!important; text-align:center; width:100%">
        <tbody>
            <tr>
                <td>
                    <h4>
                        <img src="{{ asset('env') }}/bansos.png" alt="" width="100px" height="auto" srcset="">
                    </h4>
                </td>
                <td>
                    <h4>
                        PEMERINTAH DESA PULAU LANCANG<br />
                        KECAMATAN BENAI <br>KABUPATEN KUANTAN SINGINGI
                    </h4>
                </td>
                <td>
                    <h4>
                        <img src="https://kuansing.go.id/uploads/images/LOGO_KUANTAN_SINGINGI.png" alt="" width="50px" height="auto" srcset="">
                    </h4>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="background:#000000; height:4px; margin:0; width:100%"></div>
    <div style="background:#000000; height:2px; margin-top:2px; width:100%"></div>

    <h5 style="text-align:center; margin-top:20px;">LAPORAN DATA PENERIMA BANTUAN SOSIAL</h5>

    <table id="table">
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

    <div id="signature">
        <p>Benai, {{ \Carbon\Carbon::now()->format('d F Y') }}</p>
        <p>Kepala Desa Pulau Lancang</p>
        <br><br><br>
        <p><strong>-------------------------</strong></p>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>
