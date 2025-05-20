@php
    $ProjectName = $projectName ?? 'Finobe';
    $baseUrl = url('/');
@endphp

@extends('layouts.loginapp')
@section('content')
<body class="finobe-light">
 
    <div id="app" class="container-fluid">

        <div class="row d-flex flex-column justify-content-center align-items-center mh-100vh">
            <form method="POST" action="{{ route('login') }}"
                  class="col-sm-8 col-md-6 col-lg-4 py-5 align-items-center justify-content-center d-flex flex-column">
                @csrf

                <div class="form-group text-center">
                    <div>
                        <img src="{{ asset('imgs/finobesvg.svg') }}" alt="{{ $ProjectName }}" class="img-fluid login__logo-img">
                    </div>
                    <h2 class="my-3">Login</h2>
                </div>

                <div class="form-group w-75">
                    <label for="name">Username</label>
                    <input id="name" type="text" name="name" required autofocus class="form-control" autocomplete="off">
                </div>

                <div class="form-group w-75">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required class="form-control" autocomplete="off">
                </div>

                <div class="form-group d-flex justify-content-between align-items-start w-75">
                    <button type="submit" class="btn btn-primary flex-grow-1 mr-2" name="loginbtn">Login</button>
                    <a href="{{ $baseUrl }}" class="btn btn-light border flex-grow-2 ml-2">Go Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
