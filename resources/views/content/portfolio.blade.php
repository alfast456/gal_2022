@extends('layouts.app')
@section('content')
<div class="bg-gray-200">
    <div class="container-fluid">
        <div class="p-4 p-md-5" style="background-image: url({{ asset('img/covers/cover-5.jpg') }}); height:200px">
            <div class="col-md-6 px-0">
                <h1 class="text-white fw-bold border-bottom">Portfolio</h1>
            </div>
        </div>
    </div>

    <section class="py-4 py-md-8">
        <div class="container-fluid px-7">
            <h3 class=" fw-bold mb-5">Few of our projects</h3>
            <div class="row" id="portfolio" data-isotope="{&quot;layoutMode&quot;: &quot;masonry&quot;}" style="">

                @forelse ($portfolio as $portofolio)
                <div class="col-12 col-md-4 " style="">


                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="{{ asset('images/portfolio/'.$portofolio->thumbnail)}}"
                                style="height: 400px; width:400px; " alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor">
                                        </path>
                                    </svg> </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">{{ $portofolio->title }}</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">{{ $portofolio->description }}</h4>

                            </div>
                        </div>

                    </a>


                </div>
                @empty
                <div class="col-12 col-md-12 " style="">
                    <div class="card shadow-light-lg mb-7">
                        <div class="card-body">
                            {{-- <h6 class="text-uppercase mb-1 text-muted">Belum ada data</h6> --}}
                            <h4 class="mb-0">Belum ada datanya</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</div>
@endsection
