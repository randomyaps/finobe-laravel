{{-- random 2025 --}}
{{-- I hate comments here. --}}
{{-- ProjectName is not defined, --}} 
{{-- I'll  fix that later. --}}
{{-- Whatever, the fallback works --}}

@extends('layouts.app')

@section('content')
<style>
    .nav-scroller.mb-3, .navbar.mb-3 {
        margin-bottom: 0rem !important;
    }

    .alert-padding {
        display: none;
    }

    .alert {
        margin-bottom: 0;
    }

    .home-main-content {
        background: url('/imgs/xmas_small.jpg') no-repeat center center, linear-gradient(to bottom right, #312a6c, #852d91);
        background-size: cover;
        height: 300px;
        color: #ececec;
        display: flex;

        /* this took a long time to fix.. */
        width: 100vw;
        margin-left: calc(-50vw + 50%);
        margin-right: calc(-50vw + 50%);
    }

    .home-main-content > .container {
        display: flex;
        flex-direction: column;
        align-self: center;
    }
</style>

<div class="home-main-content">
    <div class="container d-flex justify-content-center">
        {{-- todo: fix this, user can be not empty but have invalid data. --}}
        @if(!empty($user))
            <h1 class="mb-4 home-text">Hi there, {{ $user->name }}</h1>
            <p><a href="{{ url('/places') }}" class="btn btn-success btn-lg mt-3 mr-2">join a game ></a></p>
        @else
            <h1 class="mb-4 home-text">We do what {{ $ProjectName ?? 'Finobe' }} does</h1>
            <p class="home-text">{{ $ProjectName ?? 'Finobe' }} puts games on your not-phone.</p>
            <p><a href="{{ url('/register') }}" class="btn btn-primary btn-lg mt-3 mr-2">Get started &rsaquo;</a></p>
        @endif
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-6 mb-2">
            <a href="{{ $DiscordJoin ?? '#' }}" class="catalog-card">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            <img style="max-width:30px;max-height:30px" class="img-inline align-middle mr-1" src="{{ asset('imgs/discordsvg.svg') }}">
                            Discord
                        </h3>
                        <p class="text-muted mb-0">Join our Discord server and talk to people in our community!</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 mb-2">
            <a href="{{ $Twitter ?? '#' }}" class="catalog-card">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            <img style="max-width:30px;max-height:30px" class="img-inline align-middle mr-1" src="{{ asset('imgs/twittersvg.svg') }}">
                            Twitter
                        </h3>
                        <p class="text-muted mb-0">We tweet whenever we post a video, and may even hint at some upcoming events on our Twitter.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
