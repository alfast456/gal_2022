<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- icon css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico" type="image/x-icon') }}" />

    <!-- Map CSS -->
    <link rel="stylesheet" href="{{ asset('mapbox-gl-js/v0.53.0/mapbox-gl.css') }}" />

    <!-- Libs CSS -->
    {{-- <link href="{{ url('https://github.com/alfast456/landkit/tree/main/assets/css/libs.bundle.css') }}"
    rel="stylesheet"/> --}}

    <!-- Theme CSS -->
    <link href="{{ asset('css/theme.bundle.css') }}" rel="stylesheet" />

    <!-- Title -->
    <title>Landkit</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-156446909-2");
    </script>
</head>

<body class="pt-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header h2 fw-bold" style="text-align: center">{{ __('Silahkan Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingatkan saya') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4 mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Masuk') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa kata sandi ?') }}
                                    </a>
                                    @endif
                                </div>
                                <div class="col-md-8 offset-md-4">
                                @if (Route::has('register'))
                                Belum punya akun ? <a href="{{ route('register') }}">Buat akun baru</a>
                                {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a> --}}
                        @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('mapbox-gl-js/v0.53.0/mapbox-gl.js') }}"></script>

    {{-- <!-- Vendor JS -->
    <script src="{{ asset('js/vendor.bundle.js') }}"></script> --}}

    <!-- Theme JS -->
    <script src="{{ asset('js/theme.bundle.js') }}"></script>
</body>

</html>
