@extends('layouts.app')
@section('content')
<!-- WELCOME -->
<div class="bg-gray-200">


    <section class=" bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 text-center" data-aos="fade-up">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/illustrations/illustration-8.png') }}"
                                    class="d-block w-100 h-60" style="height: 300px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/illustrations/illustration-9.png') }}"
                                    class="d-block w-100 h-60" style="height: 300px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/illustrations/illustration-7.png') }}"
                                    class="d-block w-100 h-60" style="height: 300px;" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" /></svg> </div>
    </div>

    <!-- PRICING -->
    <section class="mt-n8">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">

                    <!-- Card -->
                    <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
                        <div class="card-body">



                            <!-- Heading -->
                            <h4 class="fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                    <path
                                        d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                </svg>
                                Shared instance
                            </h4>

                            <!-- Text -->
                            <p class="text-muted">
                                Affordable, scalable and performant. The perfect solution for small apps.
                            </p>

                            <!-- Link -->
                            <a href="#!" class="btn btn-sm btn-primary fs-sm fw-bold text-decoration-none">
                                Baca Selengkapnya
                            </a>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

                    <!-- Card -->
                    <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
                        <div class="card-body">



                            <!-- Heading -->
                            <h4 class="fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                Shared cluster
                            </h4>

                            <!-- Text -->
                            <p class="text-muted">
                                A mid-sized solution for businesses undergoing rapid user growth.
                            </p>

                            <!-- Link -->
                            <a href="#!" class="btn btn-sm btn-primary fs-sm fw-bold text-decoration-none">
                                Baca Selengkapnya
                            </a>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="150">

                    <!-- Card -->
                    <div class="card shadow-light-lg lift lift-lg">
                        <div class="card-body">


                            <!-- Heading -->
                            <h4 class="fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg>
                                Dedicated cluster
                            </h4>

                            <!-- Text -->
                            <p class="text-muted">
                                A farm of machines entirely dedicated to your company's storage needs.
                            </p>

                            <!-- Link -->
                            <a href="#!" class="btn btn-sm btn-primary fs-sm fw-bold text-decoration-none ">
                                Baca Selengkapnya
                            </a>

                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- CONTROL -->
    <section class="pt-8 pt-md-11">
        @foreach ($about as $tentang)
<div class="container">
    <div class="p-4 p-md-5 mb-4 row align-items-center ">
        <div class="col-12 col-md-5 col-lg-6">

            <div class=" position-relative">

                <!-- Image -->
                <div class="img-skewed img-skewed-start">

                    <!-- Image -->
                    <img src="{{ asset('images/about/'.$tentang->thumbnail) }}" class="screenshot img-fluid"
                        style="height: 300px; width:400px;" alt="...">

                </div>

            </div>

        </div>
        <div class="col-12 col-md-7 col-lg-6">

            <!-- Text -->
            <p class="fs-lg mb-6">
                {{ $tentang->about_content }}
            </p>

            <!-- List -->
            <div class="d-flex">

                <!-- Icon -->
                <div class="icon text-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M0 0h24v24H0z"></path>
                            <path
                                d="M12 8H8a4 4 0 00-4 4v1a3 3 0 003 3v2a5 5 0 01-5-5v-1a6 6 0 016-6h4V4.728a.5.5 0 01.8-.4l2.856 2.133a.5.5 0 01-.001.802l-2.857 2.121A.5.5 0 0112 8.983V8z"
                                fill="#335EEA"></path>
                            <path
                                d="M12.058 16H16a4 4 0 004-4v-1a3 3 0 00-3-3V6a5 5 0 015 5v1a6 6 0 01-6 6h-3.942v.983a.5.5 0 01-.798.401l-2.857-2.12a.5.5 0 010-.803l2.856-2.134a.5.5 0 01.8.401V16z"
                                fill="#335EEA" opacity=".3"></path>
                        </g>
                    </svg> </div>

                <div class="ms-5">

                    <!-- Heading -->
                    <h4 class="mb-1">
                        Visi
                    </h4>

                    <!-- Text -->
                    <p class="mb-6">
                        {{ $tentang->visi }}
                    </p>

                </div>

            </div>
            <div class="d-flex">

                <!-- Icon -->
                <div class="icon text-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M0 0h24v24H0z"></path>
                            <path
                                d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z"
                                fill="#335EEA"></path>
                            <rect fill="#335EEA" opacity=".3" transform="rotate(15 12 12)" x="11" y="4" width="2"
                                height="16" rx="1"></rect>
                        </g>
                    </svg> </div>

                <div class="ms-5">

                    <!-- Heading -->
                    <h4 class="mb-1">
                        Misi
                    </h4>

                    <!-- Text -->
                    <p class="mb-6 mb-md-0">
                        {!!$tentang->misi !!}
                    </p>

                </div>

            </div>

        </div>
    </div>
</div>
@endforeach
    </section>


    <!-- INTEGRATION -->
    <section class="py-8 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Preheading -->
                    <h5 class=" text-gray-500 fw-bold">
                        Apa Yang Kita Lakukan
                    </h5>

                    <!-- Heading -->
                    <h3 class="fw-bold">
                        Layanan Kami
                    </h3>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                @forelse ($service as $layanan)
                <div class="col-sm-4 mb-6">
                    <div class="card h-100">
                        <div class="card-body border border-2">
                            <img src="{{ asset('images/service/icon/'.$layanan->icon) }}" alt="{{ $layanan->title }}"
                                class="img-fluid mb-3">
                            <h5 class="card-title">{{ $layanan->title }}</h5>
                            <p class="card-text">{{ Str::limit($layanan->description, 100) }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-sm-4">
                    <div class="card h-100">
                        <div class="card-body border border-2">
                            <h5 class="card-title">tidak ada service</h5>
                        </div>
                    </div>
                </div>

                @endforelse
            </div>




        </div> <!-- / .container -->
    </section>

</div>
@endsection
