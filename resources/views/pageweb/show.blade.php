@extends('template-web.layout')

@section('content')
<div class="container mx-auto max-w-6xl mb-32 mt-24 p-10 my-5">
  <h1 class="text-2xl font-bold mb-8 text-center">{{ $informasi->judul_informasi }}</h1>
  <div class="grid grid-cols-1 md:grid-cols-1 gap-8">
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <div class="p-4 flex items-center">
              <div class="flex-1">
                  <p class="text-gray-700 ">{{ $informasi->isi_informasi }}</p>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection