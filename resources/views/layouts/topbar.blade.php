{{-- random 2025 --}}
{{-- topbar --}}

@php
    $extraBtn = null;
    $projectName = $projectName ?? 'Finobe';
@endphp

@if (!empty($FinobeToken) && !empty($loggedIn))
    @if ($loggedIn->userRank === 'admin')
        @php
         // i hate php.
            $extraBtn = "<li class='nav-item'><a href='" . url('/admin') . "' class='nav-link'>Admin Panel</a></li>";
        @endphp
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-faded navbar-static-top">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('imgs/finobesvg.svg') }}" alt="{{ $projectName }}" class="navbar-brandimg d-inline-block mr-2" style="width: auto;">
                {{ $projectName }}
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item"><a href="{{ url('/user/' . $loggedIn->userId) }}" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="{{ url('/places') }}" class="nav-link">Games</a></li>
                    <li class="nav-item"><a href="{{ url('/catalog') }}" class="nav-link">Catalog</a></li>
                    <li class="nav-item"><a href="{{ url('/forum') }}" class="nav-link">Forum</a></li>
                    <li class="nav-item"><a href="{{ url('/users') }}" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
                    {!! $extraBtn !!}
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle"><strong>More</strong></a>
                        <div class="navbar-nobelium-dropdown dropdown-menu">
                            <a href="{{ url('/wiki/') }}" class="dropdown-item">Blog</a>
                            <a href="{{ url('/videos') }}" class="dropdown-item">Discord</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav my-2 my-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/app/inbox') }}" class="nav-link">
                            <i class="far align-middle fa-envelope mr-1"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-notifications">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">
                            <i class="far fa-bell align-middle mr-1"></i>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header"><span class="align-middle">Messages</span></div>
                            <div class="dropdown-divider"></div>
                            <div class="navbar-notification-list">
                                <a href="#" class="notification-title notification-link dropdown-item">
                                    <i class="far fa-envelope align-center fa-fw"></i> TestMsgPreview
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">
                            <i class="fas fa-users align-middle"></i> <span>&nbsp;</span>
                        </a>
                        <div class="navbar-nobelium-dropdown dropdown-menu dropdown-menu-right">
                            <a href="{{ url('/app/inbox') }}" class="dropdown-item">Messages</a>
                            <a href="{{ url('/app/friends') }}" class="dropdown-item">Friends</a>
                        </div>
                    </li>
                    <li class="nav-item nav-link n-money-text" data-toggle="tooltip" data-placement="bottom" data-original-title="{{ $loggedIn->userDius . ' ' . ($currencyName ?? 'Cash') }}">
                        <a>
                            <img src="{{ $currencyIcon ?? asset('imgs/currency.svg') }}" alt="{{ $currencyName ?? 'Cash' }}" class="img-responsive align-middle" width="20" height="20">
                            {{ $loggedIn->userDius }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">
                            <i class="far align-middle fa-user mr-1"></i> {{ $loggedIn->userName }}
                            <span class="caret"></span>
                        </a>
                        <div class="navbar-nobelium-dropdown dropdown-menu dropdown-menu-right">
                            <a href="{{ url('/create') }}" class="dropdown-item"><i class="fas fa-fw fa-plus align-middle mr-1"></i> Create</a>
                            <a href="{{ url('/character') }}" class="dropdown-item"><i class="fas fa-fw fa-user align-middle mr-1"></i> Character</a>
                            <a href="{{ url('/app/settings') }}" class="dropdown-item"><i class="fas fa-fw fa-wrench align-middle mr-1"></i> Settings</a>
                            <a href="{{ url('/app/logout') }}" class="dropdown-item"><i class="fas fa-fw fa-sign-out-alt align-middle mr-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="nav-scroller navbar-light bg-faded mb-3">
        <div class="container">
            <nav class="nav nav-underline nav-scroller-inner">
                <a class="nav-link" href="{{ url('/create') }}"><i class="far align-middle fa-fw fa-plus mr-1"></i> Create</a>
                <a class="nav-link" href="{{ url('/app/character') }}"><i class="far align-middle fa-fw fa-user mr-1"></i> Avatar</a>
                <a class="nav-link" href="{{ url('/trades') }}"><i class="far fa-fw align-middle fa-exchange-alt mr-1"></i> Trades</a>
            </nav>
        </div>
    </div>
@else
    <nav class="navbar navbar-expand-lg navbar-light bg-faded navbar-static-top">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('imgs/finobesvg.svg') }}" alt="{{ $projectName }}" class="navbar-brandimg d-inline-block mr-2" style="width: auto;">
                {{ $projectName }}
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggler navbar-toggler-right">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav mr-auto"></ul>
                <ul class="nav navbar-nav my-2 my-lg-0">
                    <li class="nav-item"><a href="{{ url('/app/login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item">
                        <div class="us">
                            <a href="{{ url('/app/register') }}" class="nav-link">Register</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endif
