@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Edit Data Penerima Bantuan</h4>

    <div class="card">
        <h5 class="card-header">Edit Data Penerima Bantuan</h5>
        <div class="card-body">
            <form action="{{ route('penerima_bantuan.update', $penerimaBantuan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id_masyarakat" class="form-label">Nama Masyarakat</label>
                    <select class="form-select" id="id_masyarakat" name="id_masyarakat" required>
                        @foreach($masyarakats as $masyarakat)
                        <option value="{{ $masyarakat->id }}" {{ $masyarakat->id == $penerimaBantuan->id_masyarakat ? 'selected' : '' }}>{{ $masyarakat->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_bantuansosial" class="form-label">Nama Bantuan Sosial</label>
                    <select class="form-select" id="id_bantuansosial" name="id_bantuansosial" required>
                        @foreach($bantuansosials as $bantuansosial)
                        <option value="{{ $bantuansosial->id }}" {{ $bantuansosial->id == $penerimaBantuan->id_bantuansosial ? 'selected' : '' }}>{{ $bantuansosial->jenis_bantuan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_penerimaan" class="form-label">Tanggal Penerimaan</label>
                    <input type="date" class="form-control" id="tanggal_penerimaan" name="tanggal_penerimaan" value="{{ $penerimaBantuan->tanggal_penerimaan }}" required>
                </div>
                <div class="mb-3">
                    <label for="status_verifikasi" class="form-label">Status Verifikasi</label>
                    <select class="form-select" id="status_verifikasi" name="status_verifikasi" required>
                        <option value="terverifikasi" {{ $penerimaBantuan->status_verifikasi == 'terverifikasi' ? 'selected' : '' }}>Terverifikasi</option>
                        <option value="belum diverifikasi" {{ $penerimaBantuan->status_verifikasi == 'belum diverifikasi' ? 'selected' : '' }}>Belum Diverifikasi</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
