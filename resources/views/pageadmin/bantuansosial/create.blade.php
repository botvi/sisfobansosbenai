@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Bantuan Sosial /</span> Create</h4>

        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Bantuan Sosial</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bantuan_sosial.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="jenis_bantuan" class="form-label">Jenis Bantuan:</label>
                                <input type="text" id="jenis_bantuan" name="jenis_bantuan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_penyaluran" class="form-label">Tanggal Penyaluran:</label>
                                <input type="date" id="tanggal_penyaluran" name="tanggal_penyaluran" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_bantuan" class="form-label">Jumlah Bantuan:</label>
                                <input type="number" id="jumlah_bantuan" name="jumlah_bantuan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="sumber_dana" class="form-label">Sumber Dana:</label>
                                <input type="text" id="sumber_dana" name="sumber_dana" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="sumber_dana" class="form-label">Syarat Penerima:</label>
                                <textarea rows="3" id="syarat_penerima" name="syarat_penerima" class="form-control" required></textarea>
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
