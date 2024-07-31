@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Bantuan Sosial</h4>

        <div class="mb-3">
            <a href="{{ route('bantuan_sosial.create') }}" class="btn btn-sm btn-primary">Tambah Data Bantuan Sosial</a>
        </div>

        <div class="card">
            <h5 class="card-header">Data Bantuan Sosial</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Jenis Bantuan</th>
                            <th>Tanggal Penyaluran</th>
                            <th>Jumlah Bantuan</th>
                            <th>Sumber Dana</th>
                            <th>Syarat Penerima</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($bantuanSosials as $bantuan)
                            <tr>
                                <td>{{ $bantuan->jenis_bantuan }}</td>
                                <td>{{ $bantuan->tanggal_penyaluran }}</td>
                                <td>Rp{{ number_format ($bantuan->jumlah_bantuan) }}</td>
                                <td>{{ $bantuan->sumber_dana }}</td>
                                <td>{{ $bantuan->syarat_penerima }}</td>
                                <td>
                                    <a href="{{ route('bantuan_sosial.edit', $bantuan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('bantuan_sosial.destroy', $bantuan->id) }}" method="POST" class="d-inline delete-form">
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
