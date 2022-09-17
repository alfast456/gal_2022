@extends('layouts.app')
@section('content')
<div class="bg-gray-200">
    <div class="container-fluid">
        <div class="p-4 p-md-5" style="background-image: url({{ asset('img/covers/cover-5.jpg') }}); height:200px">
            <div class="col-md-6 px-0">
                <h1 class="text-white fw-bold border-bottom">News</h1>
            </div>
        </div>
    </div>

    <section class="pt-8 pt-md-11 mb-8">
        <div class="container">
            <div class="row justify-content-center">

                <div class="row">
                    @forelse ($news as $berita)
                    <div class="col-12 col-md-4 mb-5 aos-init aos-animate" data-aos="fade-up">

                        <!-- Card -->
                        <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

                            <!-- Image -->
                            <img src="{{ asset('images/news/'.$berita->thumbnail)}}" alt="..." class="card-img-top">

                            <!-- Shape -->
                            <div class="position-relative">
                                <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor">
                                        </path>
                                    </svg> </div>
                            </div>

                            <!-- Body -->
                            <div class="card-body position-relative">


                                <!-- Heading -->
                                <h3>
                                    {{ $berita->title }}
                                </h3>

                                <!-- Text -->
                                <p class="text-muted">
                                    {{ Str::limit($berita->description, 50) }}
                                </p>

                                <!-- Link -->
                                <a href="{{ route('news-detail',$berita->id_news) }}" class="fw-bold text-decoration-none">
                                    READ MORE <i class="fe fe-arrow-right ms-3"></i>
                                </a>

                            </div>

                        </div>

                    </div>
                    @empty

                    @endforelse


                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </div>
    </section>
</div>
@endsection
