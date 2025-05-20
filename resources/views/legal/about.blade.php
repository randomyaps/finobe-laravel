{{-- random 2025 --}}
@extends('layouts.app')

@section('content')

<style>.badge-shen{background:#f5c177;color:#000;}.badge-iago{background:#6f5e56;color:#fff;}</style>
            <style>
        .alert-padding {
            display: none;
        }

        .alert {
            margin-bottom: 0;
        }
        
        .banner {
                            background: url(/imgs/bannerlate2019-2.jpg) no-repeat center center;
                background: url(/imgs/bannerlate2019-2.jpg) no-repeat center center, -webkit-linear-gradient(top left, #312a6c, #852d91);
                background: url(/imgs/bannerlate2019-2.jpg) no-repeat center center, -moz-linear-gradient(top left, #312a6c, #852d91);
                        background-size: cover;
            margin: 0;
            padding: 0;
            color: #fff;
            display: flex;
             width: 100vw;
        margin-left: calc(-50vw + 50%);
        margin-right: calc(-50vw + 50%);
        }

        .banner > .container {
            display: flex;
            flex-direction: column;
            align-self: center;
        }

        .banner h4 {
            text-shadow: 1px 1px 4px #000;
        }

        .banner, .banner > .container, .banner > .container > .row, .banner > .container > .row > div {
                            height: calc(100vh - 60px);
                        min-height: 350px;
        }

        .banner .down-arrow {
            color: #ececec;
        }

        .ending {
            text-align: center;
            font-size: 24px;
            font-weight: 300;
        }

        .ending > .left-line, .ending > .right-line {
            border-top: 1px solid #989898;
            flex: 1;
        }

        .ending > p {
            flex: 2;
        }
    </style>

<div class="banner mb-4">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
        <img class="mb-4" src="{{ asset('imgs/finnobe3logo.png') }}" alt="Finobe" style="max-width:120px">
        <h4>About Us</h4>
        <h3 class="mt-4 mb-0 down-arrow"><i class="far fa-chevron-down"></i></h3>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">

            <div class="card">
                <div class="card-header bg-primary text-light">
                    Who are we?
                </div>
                <div class="card-body">
                    <p>Welcome to Finobe! We aim to be the best revival out there (or "private server", if you prefer that term) for old versions of a popular game-creation and social MMO. We currently offer two versions: 2012 and modified 2016. Developers are free to do anything that conforms to our <a href="/legal/rules">rules</a>.</p>
                    <p>In general, these are the limitations we impose on our users:</p>
                    <ul>
                        <li>You can curse (use profanity), as long as it's not a slur.</li>
                        <li>Only users that are 13 years of age or older are allowed.</li>
                        <li>There is a primitive opt-out filter system. You can disable it in the <a href="/app/settings/security">settings panel</a>.</li>
                        <li>Games can have blood and gore.</li>
                    </ul>
                    <p>If you want to see moderation actions on users, we have a ban log that you can access <a href="/transparency/bans">here</a>. In addition, many additions or changes to the site are done by polling active users and asking them to vote in a semi-democratic way.</p>
                    <p class="mb-0">Generally speaking, Finobe is a <strong>not-for-profit website</strong>. While we have advertisements on the website, the revenue is used to pay for our monthly server costs.</p>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-primary text-light">
                    What is unique about Finobe?
                </div>
                <div class="card-body">
                    <p>Finobe has many features developed over the span of 3 years, like trading and reselling items. We have a virtual currency called Diu (denoted by the <img src="{{ asset('imgs/diu_16.png') }}" alt="Diu" title="Diu" class="img-responsive align-middle"> icon) which controls all of these features.</p>
                    <p>We also have a <a href="/forum">forum</a>, where users can talk and discuss things that are going on.</p>
                    <p class="mb-0">Finally, we have a fully-fledged and feature-packed <a href="/catalog">catalog system</a> where you can obtain items familiar to you. We aim to have one of the largest collections of wearable items for your character.</p>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-primary text-light">
                    Why is Finobe still a thing?
                </div>
                <div class="card-body">
                    <p>As stated above, we aim to be the best revival. Other revivals may have (subjectively) better communities at the cost of having worse code, leading to vulnerabilities being discovered and exploited, or have staff members that do not understand how maintaining a large community works.</p>
                    <p>Of course, having been up for multiple years, Finobe has created many so-called enemies. We advise players and non-players alike to take criticism of Finobe with a grain of salt. We admit that there is valid criticism of Finobe, but much hate comes from banned players that have been banned for valid reasons.</p>
                    <p class="mb-0">We believe that there is no true competitor to Finobe at this very moment. Finobe is very stable as well, as it does not follow the "cycle of projects" that leaves projects dead after a month.</p>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-primary text-light">
                    Who works on Finobe?
                </div>
                <div class="card-body">
                    <p>We have a number of developers that work on different areas.</p>
                    <p>The development of the website and 2016 client is mostly done by <a href="/user/1">Raymonf</a>, with occasional contributions from people like <a href="/user/2">davi</a>, <a href="/user/79820">Nexure</a> (SuperPosition), and <a href="/user/380">coke</a>.</p>
                    <p>The anti-cheat system used by Finobe is mostly developed by <a href="/user/73738">Slappy826</a>. It is non-intrusive and only logs when a cheat is detected. We do not store any data from your system that is not related to cheat detection.</p>
                    <p class="mb-0">We make numerous performance optimizations to Finobe every week, which results in what we believe to be the best experience on a revival in terms of performance.</p>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-primary text-light">
                    How do I get started?
                </div>
                <div class="card-body">
                    <p>Unfortunately, Finobe is currently <strong>invite-only</strong>. To join, you'll need an <i>invite key</i>.</p>
                    <p class="mb-0">The administrators do not give out invite keys. To join Finobe, you'll need to obtain one from a friend. If you do not have a friend that is in Finobe, there is unfortunately no other way to join.</p>
                </div>
            </div>

            <div class="align-items-center d-flex ending flex-row justify-content-between mb-4 mt-5">
                <div class="left-line"></div>
                <p class="mb-0">
                    That is all. We are
                    <img class="d-inline align-middle pl-1" src="{{ asset('imgs/finnobe3logo.png') }}" alt="" style="height: 28px">
                    Finobe.
                </p>
                <div class="right-line"></div>
            </div>

        </div>
    </div>
</div>

@endsection
