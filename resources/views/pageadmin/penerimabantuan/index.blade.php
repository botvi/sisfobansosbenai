@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Penerima Bantuan</h4>

    <div class="mb-3">
        <a href="{{ route('penerima_bantuan.create') }}" class="btn btn-sm btn-primary">Tambah Data Penerima Bantuan</a>
    </div>

    <div class="card">
        <h5 class="card-header">Data Penerima Bantuan</h5>
        <div class="table-responsive text-nowrap p-4">
            <table id="example" class="display compact nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Masyarakat</th>
                        <th>Nama Bantuan Sosial</th>
                        <th>Tanggal Penerimaan</th>
                        <th>Status Verifikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($penerimaBantuans as $penerima)
                    <tr>
                        <td><u><a href="{{ route('penerima_bantuan.show', $penerima->masyarakat->id) }}">{{ $penerima->masyarakat->nama }}</a></td>
                        <td><u><a href="{{ route('bantuan_sosial.show', $penerima->bantuansosial->id) }}">{{ $penerima->bantuansosial->jenis_bantuan }}</a></td>
                        <td>{{ $penerima->tanggal_penerimaan }}</td>
                        <td>
                            @if($penerima->status_verifikasi == 'Terverifikasi')
                                <span class="badge bg-success">Terverifikasi</span>
                            @elseif($penerima->status_verifikasi == 'Belum diverifikasi')
                                <span class="badge bg-danger">Belum Diverifikasi</span>
                            @endif
                        </td>
                        
                        <td>
                            <a href="{{ route('penerima_bantuan.edit', $penerima->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('penerima_bantuan.destroy', $penerima->id) }}" method="POST" class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            <form action="{{ route('penerima_bantuan.arsipkan', $penerima->id) }}" method="POST" class="d-inline arsip-form">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-primary">Arsipkan</button>
                            </form>
                            <a href="{{ route('penerima-bantuan.print', $penerima->id) }}" class="btn btn-sm btn-secondary">Print</a>
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
        const arsipForms = document.querySelectorAll('.arsip-form');

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

        arsipForms.forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data akan diarsipkan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, arsipkan!',
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
