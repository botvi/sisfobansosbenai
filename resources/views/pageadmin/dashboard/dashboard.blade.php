@extends('template-admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat Datang di Dashboard Admin 🎉</h5>
                                <p class="mb-4">
                                    Sistem Informasi Bansos masyarakat di Kantor Desa Pulau Lancang.
                                </p>

                               
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('env') }}/bansos.png" class="mb-4" width="130px" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
    </div>
@endsection
