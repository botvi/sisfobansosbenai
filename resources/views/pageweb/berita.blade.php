@extends('template-web.layout')

@section('content')
<div class="mx-auto mt-24 max-w-6xl p-10 my-5">
  <h1 class="text-2xl font-bold mb-8 text-center">Berita</h1>
  <div id="kegiatan-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @if($beritas->isEmpty())
      <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center">
        <p class="text-gray-700">Tidak ada Berita yang tersedia saat ini.</p>
      </div>
    @else
      @foreach($beritas as $berita)
        <div class="bg-white shadow-md rounded-md overflow-hidden">
          @if($berita->image)
            <img src="{{ asset($berita->image) }}" alt="{{ $berita->title }}" class="w-full h-48 object-cover" />
          @endif
          <div class="p-4">
            <h2 class="text-xl font-bold mb-2">{{ $berita->title }}</h2>
            <p class="text-gray-700 text-justify">{{ $berita->description }}</p>
            <a href="{{ route('webberitas.show', $berita->id) }}" class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Baca Selengkapnya</a>
          </div>
        </div>
      @endforeach
    @endif
  </div>
</div>
@endsection
