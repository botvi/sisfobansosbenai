@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Informasi /</span> Daftar Informasi</h4>

    <a href="{{ route('informasi.create') }}" class="btn btn-primary mb-4">Tambah Informasi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <h5 class="card-header">Daftar Informasi</h5>
        <div class="table-responsive text-nowrap p-4">
            <table id="example" class="display compact nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Judul Informasi</th>
                        <th>Isi Informasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($informasi as $info)
                    <tr>
                        <td>{{ $info->judul_informasi }}</td>
                        <td>{{ Str::limit($info->isi_informasi, 50) }}</td>
                        <td>
                            <a href="{{ route('informasi.edit', $info->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('informasi.destroy', $info->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
