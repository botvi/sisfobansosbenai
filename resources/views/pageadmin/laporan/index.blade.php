@extends('template-admin.layout')


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Laporan /</span> Data Penerima Bantuan</h4>

    <form method="GET" action="{{ route('laporan.index') }}" class="mb-4 no-print">
        <div class="row">
            <div class="col-md-4">
                <label for="status_verifikasi" class="form-label">Status Verifikasi</label>
                <select id="status_verifikasi" name="status_verifikasi" class="form-select">
                    <option value="">Semua</option>
                    <option value="Terverifikasi" {{ request('status_verifikasi') == 'Terverifikasi' ? 'selected' : '' }}>Terverifikasi</option>
                    <option value="Belum Terverifikasi" {{ request('status_verifikasi') == 'Belum Terverifikasi' ? 'selected' : '' }}>Belum Terverifikasi</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="jenis_bantuan" class="form-label">Jenis Bantuan</label>
                <select id="jenis_bantuan" name="jenis_bantuan" class="form-select">
                    <option value="">Semua</option>
                    @foreach($jenisBantuans as $id => $jenis)
                        <option value="{{ $jenis }}" {{ request('jenis_bantuan') == $jenis ? 'selected' : '' }}>{{ $jenis }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <div class="card">
        <h5 class="card-header">Data Penerima Bantuan</h5>
        <div class="table-responsive text-nowrap p-4">
            <table id="printableTable" class="table table-bordered">
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
                    @foreach($penerimaBantuans as $penerima)
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
    </div>
</div>
@endsection
