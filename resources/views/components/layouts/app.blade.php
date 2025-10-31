<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} | Intern PHP Source</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/static/BW_logo.jpg') }}">

    <!-- CSS Files -->
    @vite(['resources/css/app.css', 'resources/css/common.css'])
    @stack('styles')
</head>

<body class="layout-fluid">
    <div class="page">
        <x-partials.menu />
        <div class="page-wrapper">
            <div class="page-header">
                <div class="container-xl">
                    {{-- Page header --}}
                </div>

            </div>
            <div class="page-body">
                <div class="container-xl">
                    {{ $slot }}
                </div>
            </div>
            <x-partials.footer />
        </div>
        <x-loading />
    </div>
    <!-- JS Files -->
    @vite(['resources/js/app.js', 'resources/js/common.js', 'resources/js/lib/jquery-validation/additional-setting.js'])
    @stack('scripts')
</body>

</html>
