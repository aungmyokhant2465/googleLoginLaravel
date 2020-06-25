<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Socialite Google Login - w3alert.com</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <style>
        .error{ color:red; }
    </style>

</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->avatar)
                        <img src="{{ Auth::user()->avatar }}" class="rounded" alt="hello" width="208px">
                    @else
                        <img src="{{ asset('public/images/no-image.png') }}" class="rounded" alt="hello" width="208px">
                    @endif
                    <h2 class="mt-3">Welcome - {{ ucwords(Auth::user()->name) }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>