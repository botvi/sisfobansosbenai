@extends('template-web.layout')

@section('content')
<div class="mx-auto max-w-6xl p-10 mt-24 my-5">
    <h1 class="text-2xl font-bold mb-8 text-center">Tentang</h1>
    <div class="p-10 flex flex-col md:flex-row items-center md:items-start">
        <img
            src="{{ asset('env') }}/bansos.png" 
            alt="Filosofi Satgas PPKS"
            class="mb-4 md:mb-0 md:mr-4 w-full md:w-1/3 rounded-md shadow-md"
        />
        <div class="text-gray-700 md:w-2/3">
            <h3 class='font-bold text-base'>Tentang Sistem Informasi Bantuan Sosial Masyarakat Pada Kantor Desa Pulau Lancang</h3>
            <p class='text-sm text-justify'>
                Sistem Informasi Bantuan Sosial Masyarakat adalah platform yang dirancang untuk membantu masyarakat Desa Pulau Lancang dalam mengakses informasi terkait bantuan sosial. <br><br>
                Platform ini bertujuan untuk meningkatkan transparansi dan efisiensi dalam distribusi bantuan sosial, serta memastikan bahwa bantuan dapat tepat sasaran dan diterima oleh mereka yang membutuhkan. <br><br>
                Dengan adanya sistem ini, masyarakat dapat dengan mudah melihat jenis-jenis bantuan yang tersedia, persyaratan yang diperlukan, dan cara untuk mengajukan permohonan bantuan. Selain itu, petugas desa juga dapat mengelola data penerima bantuan dengan lebih mudah dan akurat.
            </p>
        </div>
    </div>
</div>
@endsection
