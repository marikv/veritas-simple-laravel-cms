<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="rating" content="general">
    <meta name="robots" content="@yield('robots')">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:type" content="website">
    <meta name="description" property="og:description" content="@yield('description')">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">
    <meta name="twitter:url" content="{{ request()->url() }}">
    <meta name="token" content="{{ csrf_token() }}">
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('i/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('i/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('i/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('i/icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('i/icons/safari-pinned-tab.svg') }}" color="#336699">
    <link rel="shortcut icon" href="{{ asset('i/icons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#333">
    <meta name="msapplication-config" content="{{ asset('i/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#333">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset(mix('dist/css/app.css')) }}">
    @hasSection('canonical')<link rel="canonical" href="@yield('canonical')">@endif
    <script src="{{ asset(mix('dist/js/app.js')) }}"></script>
    @if (env('APP_ENV') !== 'local' && config('settings.analytics_id') !== null)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('settings.analytics_id') }}"></script>
        <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', '{{ config('settings.analytics_id') }}', {'anonymize_ip': true});</script>
    @endif
</head>
<body class="has-navbar-fixed-top---">

@include('partials.app.nav')
@yield('content')
@include('partials.app.footer')
@hasSection('scripts')@yield('scripts')@endif

<script>
    AOS.init();
</script>
</body>
</html>
