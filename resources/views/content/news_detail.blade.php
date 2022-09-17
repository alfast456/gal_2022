@extends('layouts.app')
@section('content')
<div class="bg-gray-200">
    <section class="pt-8 pt-md-8">

        <div class="container">
            <div class="row align-items-center">
                @foreach ($news as $berita)
                <div class="col-12">

                    <!-- Card -->
                    <div class="card shadow-light-lg mb-8">
                        <div class="card-body">

                            <img class="card-img" src="{{ asset('images/news/'.$berita->thumbnail)}}" style=""
                                alt="...">

                        </div>
                    </div>


                </div> <!-- / .row -->
                <div class="row">

                    <div class="col-12 col-md-12 mb-5">

                        <!-- Heading -->
                        <h3 class="fw-bold">
                            {{ $berita->title }}
                        </h3>

                        <!-- Text -->
                        <p class="text-gray-800 mb-6 mb-md-8">
                            {{ $berita->description }}
                        </p>

                    </div>


                    <!-- Link -->
                    <a href="{{ url('/news') }}" class="fw-bold fs-sm text-decoration-none mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg> Kembali
                    </a>
                </div> <!-- / .row -->
                @endforeach
            </div> <!-- / .container -->
    </section>


    @endsection
</div>
