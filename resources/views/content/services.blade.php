@extends('layouts.app')
@section('content')
<div class="bg-gray-200">
    <div class="container-fluid">
        <div class="p-4 p-md-5" style="background-image: url({{ asset('img/covers/cover-5.jpg') }}); height:200px">
            <div class="col-md-6 px-0">
                <h1 class="text-white fw-bold border-bottom">Services</h1>
            </div>
        </div>
    </div>

    <!-- INTEGRATION -->
    <section class="py-8 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Preheading -->
                    <h2 class=" fw-bold">
                        We Are Here To Provide
                    </h2>

                    <!-- Heading -->
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum perspiciatis, enim repellat
                        expedita
                        repellendus magni dolore quia omnis ut! Accusantium officia, fuga quasi soluta veritatis
                        laboriosam
                        eius totam laborum ducimus.
                    </p>

                </div>
            </div> <!-- / .row -->

        </div> <!-- / .container -->
    </section>

    <div class="container">
        @forelse ($service as $layanan)
        @if ($layanan->id_service % 2 == 1)
        <div class="p-4 p-md-5 row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">{{ $layanan->title }}</h2>
                <p class="lead">{{ $layanan->description }}</p>
                    <a target="_blank" class="btn btn-primary ml-auto mb-2" href="https://wa.me/6281219103438?text=Halo%20Saya%20tertarik%20dengan%20layanan%20{{ $layanan->title }}">
                        Contact Us</a>
            </div>
            <div class="col-md-5">
                {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
                <div class="card" style="width: 20rem;">
                    <div class="card-body border  border-2">
                        <img src="{{ asset('images/service/icon/'.$layanan->icon)}}" alt="Card image cap">
                        <h5 class="card-title">{{ $layanan->title }}</h5>
                        <img class="featurette-image img-fluid mx-auto"
                            src="{{ asset('images/service/'.$layanan->thumbnail)}}" style="height: 300px;" alt="...">
                    </div>
                </div>
            </div>
        </div>

        @else
        <div class="p-4 p-md-5 row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading fw-normal lh-1">{{ $layanan->title }}</h2>
              <p class="lead">{{ $layanan->description }}</p>
              <a target="_blank" class="btn btn-primary ml-auto mb-2" href="https://wa.me/6281219103438?text=Halo%20Saya%20tertarik%20dengan%20layanan%20{{ $layanan->title }}">
                Contact Us</a>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="card" style="width: 20rem;">
                    <div class="card-body border  border-2">
                        <img src="{{ asset('images/service/icon/'.$layanan->icon)}}" alt="Card image cap">
                        <h5 class="card-title">{{ $layanan->title }}</h5>
                        <img class="featurette-image img-fluid mx-auto"
                            src="{{ asset('images/service/'.$layanan->thumbnail)}}" style="height: 300px;" alt="...">
                    </div>
                </div>
            </div>
          </div>
        @endif

        @empty
        <div class="p-4 p-md-5 mb-4 row align-items-center ">
            <div class="col-12 col-md-7 col-lg-7">

                <!-- Heading -->
                <h2 class="fw-bold">
                    Layanan Tidak Tersedia
                </h2>
            </div>
        @endforelse

    </div>
</div>
@endsection
