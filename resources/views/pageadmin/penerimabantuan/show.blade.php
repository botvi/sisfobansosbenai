@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Details /</span> Masyarakat Details</h4>

    <div class="card">
        <h5 class="card-header">Detail Masyarakat</h5>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <td>{{ $masyarakat->nama }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $masyarakat->nik }}</td>
                </tr>
                <tr>
                    <th>NO_KK</th>
                    <td>{{ $masyarakat->no_kk }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $masyarakat->alamat }}</td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <td>{{ $masyarakat->nomor_telepon }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $masyarakat->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $masyarakat->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Status Ekonomi</th>
                    <td>{{ $masyarakat->status_ekonomi }}</td>
                </tr>
                <tr>
                    <th>Foto KTP</th>
                    <td>
                        @if($masyarakat->foto_ktp)
                            <a href="{{ asset($masyarakat->foto_ktp) }}" target="_blank">
                                <img src="{{ asset($masyarakat->foto_ktp) }}" alt="Foto KTP" style="width: 100px; height: auto; cursor: pointer;">
                            </a>
                        @else
                            Tidak ada foto
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Foto KK</th>
                    <td>
                        @if($masyarakat->foto_kk)
                            <a href="{{ asset($masyarakat->foto_kk) }}" target="_blank">
                                <img src="{{ asset($masyarakat->foto_kk) }}" alt="Foto KK" style="width: 100px; height: auto; cursor: pointer;">
                            </a>
                        @else
                            Tidak ada foto
                        @endif
                    </td>
                </tr>
            </table>
            <div class="mt-3">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
