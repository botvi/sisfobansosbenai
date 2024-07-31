@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Masyarakat</h4>

        <div class="mb-3">
            <a href="{{ route('masyarakat.create') }}" class="btn btn-sm btn-primary">Tambah Data Masyarakat</a>
        </div>

        <div class="card">
            <h5 class="card-header">Data Masyarakat</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>NO_KK</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Status Ekonomi</th>
                            <th>Foto Ktp</th>
                            <th>Foto KK</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($masyarakats as $masyarakats)
                            <tr>
                                <td>{{ $masyarakats->nama }}</td>
                                <td>{{ $masyarakats->nik }}</td>
                                <td>{{ $masyarakats->no_kk }}</td>
                                <td>{{ $masyarakats->alamat }}</td>
                                <td>{{ $masyarakats->nomor_telepon }}</td>
                                <td>{{ $masyarakats->tanggal_lahir }}</td>
                                <td>{{ $masyarakats->jenis_kelamin }}</td>
                                <td>{{ $masyarakats->status_ekonomi }}</td>
                                <td>
                                    @if($masyarakats->foto_ktp)
                                        <a href="{{ asset($masyarakats->foto_ktp) }}" target="_blank">
                                            <img src="{{ asset($masyarakats->foto_ktp) }}" alt="Foto KTP" style="width: 100px; height: auto; cursor: pointer;">
                                        </a>
                                    @else
                                        Tidak ada foto
                                    @endif
                                </td>
                                <td>
                                    @if($masyarakats->foto_kk)
                                        <a href="{{ asset($masyarakats->foto_kk) }}" target="_blank">
                                            <img src="{{ asset($masyarakats->foto_kk) }}" alt="Foto KK" style="width: 100px; height: auto; cursor: pointer;">
                                        </a>
                                    @else
                                        Tidak ada foto
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('masyarakat.edit', $masyarakats->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('masyarakat.destroy', $masyarakats->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda tidak akan dapat mengembalikan ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
