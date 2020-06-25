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

<div class="container mt-5">

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <a href="{{ url('/auth/google') }}" class="btn btn-primary"><i class="fa fa-google"></i> Google</a>
        </div>
        <div class="col-md-8 offset-md-4">
            <a href="{{ url('/auth/facebook/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
        </div>
    </div>
</div>
</body>