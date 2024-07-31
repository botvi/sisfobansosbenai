@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Informasi /</span> Tambah Informasi</h4>

    <form method="POST" action="{{ route('informasi.store') }}">
        @csrf
        <div class="mb-3">
            <label for="judul_informasi" class="form-label">Judul Informasi</label>
            <input type="text" id="judul_informasi" name="judul_informasi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="isi_informasi" class="form-label">Isi Informasi</label>
            <textarea id="isi_informasi" name="isi_informasi" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
