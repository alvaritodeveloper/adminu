<!DOCTYPE html>
<html data-bs-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
</head>

<body class="page-top">
    <div id="wrapper">
        <x-partials.sidebar />
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <x-partials.topbar />
                {{ $slot }}
            </div>
            <x-partials.footer />
        </div>
        <x-partials.scrolltop />
        @isset($modal)
            {{ $modal }}
        @endisset
        @empty($modal)
            <x-partials.modal />
        @endempty
    </div>
</body>

</html>
