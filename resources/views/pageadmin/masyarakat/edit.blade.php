@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Masyarakat /</span> Edit</h4>

        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Data Masyarakat</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('masyarakat.update', $masyarakat->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" id="nama" name="nama" class="form-control" value="{{ $masyarakat->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK:</label>
                                <input type="text" id="nik" name="nik" class="form-control" value="{{ $masyarakat->nik }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_kk" class="form-label">No KK:</label>
                                <input type="text" id="no_kk" name="no_kk" class="form-control" value="{{ $masyarakat->no_kk }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat:</label>
                                <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $masyarakat->alamat }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                                <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" value="{{ $masyarakat->nomor_telepon }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ $masyarakat->tanggal_lahir }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-laki" {{ $masyarakat->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ $masyarakat->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_ekonomi" class="form-label">Status Ekonomi:</label>
                                <select id="status_ekonomi" name="status_ekonomi" class="form-control" required>
                                    <option value="Miskin" {{ $masyarakat->status_ekonomi == 'Miskin' ? 'selected' : '' }}>Miskin</option>
                                    <option value="Menengah Kebawah" {{ $masyarakat->status_ekonomi == 'Menengah Kebawah' ? 'selected' : '' }}>Menengah Kebawah</option>
                                </select>
                            </div>
                           
                            <div class="mb-3">
                                <label for="foto_ktp" class="form-label">Fot KTP:</label>
                                <input type="file" id="foto_ktp" name="foto_ktp" class="form-control">
                                @if($masyarakat->foto_ktp)
                                    <img src="{{ asset($masyarakat->foto_ktp) }}" width="100">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="foto_kk" class="form-label">Fot KK:</label>
                                <input type="file" id="foto_kk" name="foto_kk" class="form-control">
                                @if($masyarakat->foto_kk)
                                    <img src="{{ asset($masyarakat->foto_kk) }}" width="100">
                                @endif
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
