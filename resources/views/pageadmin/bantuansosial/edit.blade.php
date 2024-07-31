@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Bantuan Sosial /</span> Edit</h4>

        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Data Bantuan Sosial</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bantuan_sosial.update', $bantuanSosial->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="jenis_bantuan" class="form-label">Jenis Bantuan:</label>
                                <input type="text" id="jenis_bantuan" name="jenis_bantuan" class="form-control" value="{{ $bantuanSosial->jenis_bantuan }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_penyaluran" class="form-label">Tanggal Penyaluran:</label>
                                <input type="date" id="tanggal_penyaluran" name="tanggal_penyaluran" class="form-control" value="{{ $bantuanSosial->tanggal_penyaluran }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_bantuan" class="form-label">Jumlah Bantuan:</label>
                                <input type="number" id="jumlah_bantuan" name="jumlah_bantuan" class="form-control" value="{{ $bantuanSosial->jumlah_bantuan }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="sumber_dana" class="form-label">Sumber Dana:</label>
                                <input type="text" id="sumber_dana" name="sumber_dana" class="form-control" value="{{ $bantuanSosial->sumber_dana }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="syarat_penerima" class="form-label">Syarat Penerima:</label>
                                <textarea rows="3" id="syarat_penerima" name="syarat_penerima" class="form-control" required>{{ $bantuanSosial->syarat_penerima }}</textarea>
                            </div>
                            
                          
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
