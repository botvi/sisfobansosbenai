@extends('template-web.layout')

@section('content')
<div class="container mx-auto max-w-6xl mb-32 mt-24 p-10 my-5">
    <h1 class="text-2xl font-bold mb-8 text-center">Hasil Pencarian</h1>
    
    @if($penerimaBantuan->isEmpty())
        <p class="text-center">Tidak ada data yang ditemukan.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No KK</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nomor Telepon</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Lahir</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Ekonomi</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Bantuan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Penyaluran</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Bantuan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sumber Dana</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Syarat Penerima</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Penerimaan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Verifikasi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($penerimaBantuan as $penerima)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $penerima->masyarakat->nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->masyarakat->nik }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->masyarakat->no_kk }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->masyarakat->alamat }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->masyarakat->nomor_telepon }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->masyarakat->tanggal_lahir }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->masyarakat->jenis_kelamin }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->masyarakat->status_ekonomi }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->bantuansosial->jenis_bantuan }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->bantuansosial->tanggal_penyaluran }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp{{ number_format ($penerima->bantuansosial->jumlah_bantuan) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->bantuansosial->sumber_dana }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->bantuansosial->syarat_penerima }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->tanggal_penerimaan }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $penerima->status_verifikasi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
