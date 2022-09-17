@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
@section('content')
<div class="bg-gray-200">
<div class="container-fluid">
    <div class="p-4 p-md-5 mb-4" style="background-image: url({{ asset('img/covers/cover-5.jpg') }}); height:200px">
        <div class="col-md-6 px-0">
            <h1 class="text-white fw-bold border-bottom">About Us</h1>

        </div>
    </div>
</div>

@foreach ($about as $tentang)
<div class="container">
    <div class="p-4 p-md-5 mb-4 row align-items-center ">
        <div class="col-12 col-md-5 col-lg-6">

            <div class=" position-relative">

                <!-- Image -->
                <div class="img-skewed img-skewed-start">

                    <!-- Image -->
                    <img src="{{ asset('images/about/'.$tentang->thumbnail) }}" class="screenshot img-fluid"
                        style="height: 500px; width:400px;" alt="...">

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
                        Our Vision
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
                        Our Mission
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

<section class="py-8 py-md-11">
    <div class="container">
        <div class="col-md-6 px-0 mb-5">
            <h4 class="fw-bold border-bottom">Our Staff</h4>
        </div>
        <div class="row">
            @foreach ($staff as $item)
            <div class="col-12 col-md-4 text-center aos-init aos-animate" data-aos="fade-up">

                <!-- Icon -->
                <img src="{{ asset('images/staff/'.$item->thumbnail) }}" class="rounded mb-4"
                    style="height: 250px; width:250px;" alt="...">

                <!-- Heading -->
                <h3>
                    {{ $item->name }}
                </h3>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-0">
                    {{ $item->position }}
                </p>
                <!-- Icon -->
                <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                    <li class="list-inline-item list-social-item me-3">
                        <a target="_blank" href="{{ $item->link_ig }}" class="text-decoration-none">
                            <h3 class="fab fa-instagram text-muted"></h3>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item me-3">
                        <a target="_blank" href="{{ $item->link_fb }}" class="text-decoration-none">
                            <h3 class="fab fa-facebook-f text-muted"></h3>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item me-3">
                        <a target="_blank" href="{{ $item->link_twitter }}" class="text-decoration-none">
                            <h3 class="fab fa-twitter text-muted"></h3>
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item">
                        <a target="_blank" href="{{ $item->link_wa }}" class="text-decoration-none">
                            <h3 class="fab fa-whatsapp text-muted"></h3>
                        </a>
                    </li>
                </ul>
            </div>
            @endforeach
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
</div>
@endsection
