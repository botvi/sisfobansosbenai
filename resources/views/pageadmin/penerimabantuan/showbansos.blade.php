@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Details /</span> Bantuan Sosial Details</h4>

    <div class="card">
        <h5 class="card-header">Detail Bantuan Sosial</h5>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Jenis Bantuan</th>
                    <td>{{ $bansos->jenis_bantuan }}</td>
                </tr>
                <tr>
                    <th>Tanggal Penyaluran</th>
                    <td>{{ $bansos->tanggal_penyaluran }}</td>
                </tr>
                <tr>
                    <th>Jumlah Bantuan</th>
                    <td>Rp {{ number_format($bansos->jumlah_bantuan) }}</td>
                </tr>
                <tr>
                    <th>Sumber Dana</th>
                    <td>{{$bansos->sumber_dana }}</td>
                </tr>
                <tr>
                    <th>Syarat Penerima</th>
                    <td>{{ $bansos->syarat_penerima }}</td>
                </tr>
               
            </table>
            <div class="mt-3">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
