{{-- random 2025 --}}
{{-- header --}}
@php
    $ProjectName = $projectName ?? 'Finobe';
    $baseUrl = url('/')
    $title = $ProjectName;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Finobe' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/usetypekit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-pro-v5.10.1/css/all.css') }}">
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @include('layouts.topbar') 
    <div class="container">
        @yield('content')
    </div>
   @include('layouts.footer')
</body>
</html>
