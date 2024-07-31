@extends('template-web.layout')

@section('content')
<div class="container mx-auto max-w-6xl mb-32 mt-24 p-10 my-5">
  <h1 class="text-2xl font-bold mb-8 text-center">Informasi</h1>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @if($informasi->isEmpty())
      <div class="col-span-1 md:col-span-3 text-center">
        <p class="text-gray-700">Tidak ada informasi yang tersedia saat ini.</p>
      </div>
    @else
      @foreach($informasi as $informasi)
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <div class="p-4 flex items-center">
              <div class="mr-4">
                  <i class="fas fa-newspaper text-gray-800 text-6xl"></i>
              </div>
              <div class="flex-1">
                  <h3 class="text-xl font-bold mb-2">{{ $informasi->judul_informasi }}</h3>
                  <p class="text-gray-700 line-clamp-5 ">{{ $informasi->isi_informasi }}</p>
                  <a href="{{ route('informasidetail.show', $informasi->id) }}" class="block bg-gray-800 text-white p-2 rounded-md mt-4 text-center hover:bg-yellow-500 transition duration-300">LIHAT</a>
              </div>
          </div>
      </div>
      @endforeach
    @endif
  </div>
</div>
@endsection