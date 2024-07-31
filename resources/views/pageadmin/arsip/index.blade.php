@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Arsip Data Penerima Bantuan</h4>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Arsip Data Penerima Bantuan</h5>
        <div class="table-responsive text-nowrap p-4">
            <table id="example" class="display compact nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No KK</th>
                        <th>Alamat</th>
                        <th>Jenis Bantuan</th>
                        <th>Tanggal Penerimaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($arsipPenerimaBantuans as $arsip)
                    <tr>
                        <td>{{ $arsip->nama }}</td>
                        <td>{{ $arsip->nik }}</td>
                        <td>{{ $arsip->no_kk }}</td>
                        <td>{{ $arsip->alamat }}</td>
                        <td>{{ $arsip->jenis_bantuan }}</td>
                        <td>{{ $arsip->tanggal_penerimaan }}</td>
                        <td>
                            <a href="{{ route('arsip_penerima_bantuan.detail', $arsip->id) }}" class="btn btn-sm btn-primary">Detail</a>
                            <form action="{{ route('arsip_penerima_bantuan.keluarkan', $arsip->id) }}" method="POST" class="d-inline keluarkan-form">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Keluarkan</button>
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
        const keluarkanForms = document.querySelectorAll('.keluarkan-form');

        keluarkanForms.forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data akan dikembalikan ke tabel penerima bantuan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, kembalikan!',
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
