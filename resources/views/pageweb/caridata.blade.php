@extends('template-web.layout')

@section('content')
<div class="container mx-auto max-w-6xl mb-32 mt-24 p-10 my-5">
  <h1 class="text-2xl font-bold mb-8 text-center">Cari data anda!</h1>
  <div class="grid grid-cols-1 md:grid-cols-1 gap-8">
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <div class="p-4 flex items-center justify-center">
              
            <form class="flex items-center max-w-md w-full" method="GET" action="{{ route('pencarian') }}">   
                <label for="name-search" class="sr-only">Nama</label>
                <div class="relative w-full me-2">
                    <input type="text" id="name-search" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama anda..." required />
                </div>
                
                <label for="nik-search" class="sr-only">NIK</label>
                <div class="relative w-full me-2">
                    <input type="text" id="nik-search" name="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan NIK anda..." required />
                </div>
                
                <button type="submit" class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Cari</span>
                </button>
            </form>

          </div>
      </div>
  </div>
</div>
@endsection
