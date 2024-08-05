@extends('template-web.layout')

@section('content')
<div class="mx-auto max-w-6xl p-10 mt-24 my-5">
    <h1 class="text-2xl font-bold mb-8 text-center">{{ $berita->title }}</h1>
    
    <section
        class="relative bg-cover bg-center h-96"
        style="background-image: url('{{ asset($berita->image) }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gray-900 opacity-60"></div>
    </section>

    <section class="p-10">
        <h2 class="text-2xl font-bold mb-4">{{ $berita->description }}</h2>
       <br>
        <p class="text-gray-700 text-justify">
            {!! nl2br(e($berita->content)) !!}
        </p>
    </section>
</div>
@endsection
