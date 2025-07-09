<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-login">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6 offset-md-6">
                <div class="text-center">
                    <img src="{{ asset('assets/img/codeflix_logo.png') }}" alt="codeflix-title">
                    <h3 class="codeflix-sign-in">@yield('page-title')</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
