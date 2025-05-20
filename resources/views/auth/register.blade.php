@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <br><br>
            @if (!$showForm)
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ url('/imgs/finobesvg.svg') }}" class="mb-4" style="max-width:75px">
                        <h4>Welcome to {{ config('app.name') }}!</h4>
                        <p class="mb-1">
                            Remember to read our <a href="{{ url('/legal/rules') }}">rules</a> and 
                            <a href="{{ url('/legal/terms') }}">terms of service</a> first.
                        </p>
                        Now, a question before we start: <strong>Are you 13 years of age or older?</strong>
                        <p></p>
                        <p class="mt-4">
                            <a href="https://google.com" class="btn btn-danger mr-1" style="text-transform:none">no, I'm not 13+</a>
                            <a href="{{ route('register.form') }}" class="btn btn-primary" style="text-transform:none">yes, I'm 13 or older</a>
                        </p>
                    </div>
                </div>
            @else
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-center">{{ $error }}</div>
                    @endforeach
                @endif

                <div class="alert alert-warning rounded text-center">
                    We don't care what password you use, just make it unique.
                </div>

                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">Username</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    <small class="form-text text-muted">Use a username that conforms to our rules.</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    <small class="form-text text-muted">You'll need to verify your email - give us a valid one.</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    <small class="form-text text-muted">Passwords should be 6 or more characters.</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password_confirmation" class="col-md-3 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                    <small class="form-text text-muted">We don't like email confirmation fields, but we don't like typos even more.</small>
                                </div>
                            </div>

                            <p class="text-center">
                                By creating an account, <b>you agree to our 
                                <a href="{{ url('/legal/terms') }}">terms of service</a>, 
                                <a href="{{ url('/legal/rules') }}">rules</a>, and 
                                <a href="{{ url('/legal/privacy') }}">privacy policy</a>.</b>
                            </p>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary" style="text-transform:none">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
