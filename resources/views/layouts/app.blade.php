<!-- Stored in resources/views/layouts/master.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- icon css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" />

    <!-- Map CSS -->
    <link rel="stylesheet" href="{{ asset('mapbox-gl-js/v0.53.0/mapbox-gl.css') }}" />

    <!-- Libs CSS -->
    {{-- <link href="{{ url('https://github.com/alfast456/landkit/tree/main/assets/css/libs.bundle.css') }}"
    rel="stylesheet"/> --}}

    <!-- Theme CSS -->
    <link href="{{ asset('css/theme.bundle.css') }}" rel="stylesheet" />


<body class="pt-10">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white border-bottom">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand text-black" href="index-2.html" style="font-size: 17px">
                <img src="{{ asset('logo.png') }}" class="navbar-brand-img" alt="...">GAL AVIA KARYA
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{--
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-expanded="false" aria-controls="navbarCollapse">
                <span class="navbar-toggler-icon"></span>
              </button> --}}


            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-x"></i>
                </button>
                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " id="navbarPages" href="{{ url('/about') }}" aria-expanded="false">
                            About
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " id="navbarAccount" href="{{ url('/news') }}" aria-expanded="false">
                            News
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " id="navbarDocumentation" href="{{ url('/portfolio') }}"
                            aria-expanded="false">
                            Portfolio
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " id="navbarDocumentation" href="{{ url('/service') }}"
                            aria-expanded="false">
                            Services
                        </a>
                    </li>
                </ul>

                <!-- Button -->
                <a class="navbar-btn btn btn-sm lift ms-auto" href="https://themes.getbootstrap.com/product/landkit/"
                    target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
                <a class="navbar-btn btn btn-sm lift ms-1" href="https://themes.getbootstrap.com/product/landkit/"
                    target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                </a>


            </div>

        </div>
    </nav>
    <!-- END NAVBAR -->

    @yield('content')

    <!-- FOOTER -->
    <footer class="py-8 bg-white border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">

                    <h4 class="fw-bold text-uppercase text-gray-700">About Us</h6>
                        <h6 class="text-reset text-justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book.

                        </h6>



                </div>
                <div class="col-12 col-md-4 col-lg-4">

                    <!-- Heading -->
                    <h4 class="fw-bold text-uppercase text-gray-700">
                        Services
                    </h4>

                    <!-- List -->
                    <ul class="list-unstyled mb-6 mb-md-8 mb-lg-0">
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                Media Placement
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                Creative Campaign
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                Creative Content Production
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                GAL AVIA Official Partner
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                Event Organizer
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="text-reset">
                                KOL Management
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-12 col-md-4 col-lg-2">

                    <!-- Heading -->
                    <h4 class="fw-bold text-uppercase text-gray-700">
                        Quick Links
                    </h4>

                    <!-- List -->
                    <ul class="list-unstyled mb-6 mb-md-8 mb-lg-0">
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                Home
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                About
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                News
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" class="text-reset">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/services') }}" class="text-reset">
                                Services
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-12 col-md-4 col-lg-3">

                    <!-- Heading -->
                    <h4 class="fw-bold text-uppercase text-gray-700">
                        Contact Us
                    </h4>

                    <!-- List -->
                    <ul class="list-unstyled mb-6 mb-md-8 mb-lg-0">
                        <li class="mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <a href="#!" class="text-reset text-justify">
                                Tanjunganom Rt.04 / Rw.01, Kec. Kaliwiro, Kab. Wonosobo, 56364
                            </a>
                        </li>
                        <li class="mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            <a href="#!" class="text-reset">
                                0812-898-9090
                            </a>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                            <a href="#!" class="text-reset">
                                bagus@gmail.com
                            </a>
                        </li>
                    </ul>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>
    <div class="position-fixed bottom-0 end-0 p-10">
        <a class="navbar-btn btn btn-sm btn-primary lift ms-auto"
            href="https://themes.getbootstrap.com/product/landkit/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg>
        </a>
    </div>
    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src="{{ asset('mapbox-gl-js/v0.53.0/mapbox-gl.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('js/vendor.bundle.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('js/theme.bundle.js') }}"></script>

</body>


</html>
