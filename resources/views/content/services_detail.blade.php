@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
@section('content')
<div class="bg-gray-200">
    <div class="container-fluid">
        <div class="p-4 p-md-5" style="background-image: url({{ asset('img/covers/cover-5.jpg') }}); height:200px">
            <div class="col-md-6 px-0">
                <h1 class="text-white fw-bold border-bottom">Layanan Detail</h1>
            </div>
        </div>
    </div>

    <section class="pt-8 pt-md-11">
        @foreach ($service as $layanan)
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-8">

                    <!-- Link -->
                    <a href="{{ route('service') }}" class="fw-bold fs-sm text-decoration-none mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg> Kembali
                    </a>




                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-12 col-md-8">

                    <!-- Heading -->
                    <h1 class="display-4 mb-2">
                        {{ $layanan->title }}
                    </h1>

                    <!-- Text -->
                    <p class="text-gray-800 mb-6 mb-md-8">
                        {{ $layanan->description }}
                    </p>

                    <!-- Submit -->
                    <a href="{{ route('transaction_detail') }}" class="btn btn-primary mb-6 mb-md-0 lift">
                        Lanjutkan Pemesanan
                    </a>

                </div>
                <div class="col-12 col-md-4">

                    <!-- Card -->
                    <div class="card shadow-light-lg mb-5">
                        <div class="card-body">

                            <img class="card-img" src="{{ asset('images/service/'.$layanan->thumbnail)}}" style="height: 300px;" alt="...">

                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        @endforeach
    </section>


    <section class="pt-8 pt-md-11">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Heading -->
                    <h2 class="fw-bold">
                        Testimoni Pelanggan
                    </h2>
                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner py-5 text-center">
                            @forelse ($result as $res)
                            <div class="carousel-item active">
                                <div class="card bg-gray-200 mb-5">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <i class="bi bi-chat-right-quote fs-1 text-primary"></i>
                                                <figure class="text-cent col-md-6 offset-md-3 mt-4">
                                                    <blockquote class="blockquote">
                                                        <p>{{ $res->text }}</p>
                                                    </blockquote>
                                                    <figcaption class="blockquote-footer mt-2">{{ $res->name }}</figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="carousel-item active">
                                <div class="carousel-item active">
                                    <div class="card bg-gray-200 mb-5">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    {{-- <h5 class="card-title">No Testimoni</h5> --}}
                                                    <p class="card-text">Belum ada testimoni</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <section class="pt-8 pt-md-11 pb-8 pb-md-10">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Card -->
                    <div class="card card-border border-primary shadow-light-lg">
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>

                            @endif
                            <!-- Form -->
                            <form action="{{ route('review-store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input type="hidden" name="id_service" value="{{ $layanan->id_service }}">
                                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                        <div class="form-group mb-5">
                                            <label class="form-label" for="applyName">Nama</label>
                                            <input class="form-control" id="applyName" type="text" name="name"
                                                placeholder="Full name">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">

                                        <div class="form-group mb-5">
                                            <label class="form-label" for="applyEmail">Email</label>
                                            <input class="form-control" id="applyEmail" type="text" name="email"
                                                placeholder="hello@domain.com">
                                        </div>

                                    </div>
                                </div> <!-- / .row -->

                                <div class="row">
                                    <div class="col-12">

                                        <div class="form-group mb-5">
                                            <label class="form-label" for="applyMessage">Testimoni</label>
                                            <textarea class="form-control" id="applyMessage" rows="5"
                                                placeholder="Isilah Testimoni" name="text"></textarea>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                                <div class="row align-items-center">
                                    <div class="col-12 col-md">

                                        <!-- Submit -->
                                        <button type="submit" class="btn btn-primary mb-6 mb-md-0 lift">
                                            Unggah Testimoni
                                        </button>

                                    </div>
                                </div> <!-- / .row -->
                            </form>

                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    @endsection
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

{{-- @forelse ($result as $res)
                        <div id="carouselExampleCaptions-{{ $res->id_review }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions-{{ $res->id_review }}" data-bs-slide-to="{{ $res->id_review }}"
                                    class="" aria-label="Slide {{ $res->id_review }}"></button>
                            </div>
                            <div class="carousel-inner py-5 text-center">

                                <div class="carousel-item">
                                    <i class="bi bi-chat-right-quote fs-1 text-primary"></i>
                                    <figure class="text-cent col-md-6 offset-md-3 mt-4">
                                        <blockquote class="blockquote">
                                            <p>{{ $res->text }}</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-2">{{ $res->name }}</figcaption>
                                    </figure>
                                </div>

                            </div>
                        </div>

                        @empty
                        <div class="text-center">
                            <h1 class="text-gray-800">Belum ada testimoni</h1>
                        </div>

                        @endforelse --}}
