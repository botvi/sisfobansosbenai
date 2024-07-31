@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail /</span> Arsip Data Penerima Bantuan</h4>

    <div class="card">
        <h5 class="card-header">Detail Arsip Data Penerima Bantuan</h5>
        <div class="card-body">
            <table class="table table-bordered">
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
                        <td>Rp{{ number_format($arsip->jumlah_bantuan) }}</td>
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
            <a href="{{ route('arsip_penerima_bantuan.index') }}" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('arsip_penerima_bantuan.print', $arsip->id) }}" class="btn btn btn-success mt-3"><i class='bx bxs-printer'></i> Print</a>
        </div>
    </div>
</div>
@endsection
