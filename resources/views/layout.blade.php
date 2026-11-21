<!doctype html>
<html lang="id" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if ($containerId = config('services.google_tag_manager.container_id'))
        <script defer src="/assets/tag-manager.js" data-container-id="{{ $containerId }}"></script>
    @elseif ($measurementId = config('services.google_analytics.measurement_id'))
        <script defer src="/assets/analytics.js" data-measurement-id="{{ $measurementId }}"></script>
    @endif
    @include('seo-head')
    <meta name="theme-color" content="#f7f9fb">
    <link rel="icon" href="/favicon.ico" sizes="16x16 32x32 48x48">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon-96.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon-192.png">
    <link rel="icon" type="image/svg+xml" sizes="any" href="/assets/mark.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="preload" as="font" type="font/woff2" crossorigin href="{{ asset('assets/plus-jakarta-sans.woff2') }}">
    <link rel="preload" as="font" type="font/woff2" crossorigin href="{{ asset('assets/material-symbols.woff2') }}">
    <link rel="stylesheet" href="{{ asset('assets/site.css') }}?v={{ filemtime(public_path('assets/site.css')) }}">
</head>
<body @class(['portfolio-home' => request()->routeIs('home')])>
@if ($containerId)
    <noscript><iframe hidden width="0" height="0" title="Google Tag Manager" src="https://www.googletagmanager.com/ns.html?id={{ $containerId }}"></iframe></noscript>
@endif
<div class="opening-screen" aria-hidden="true">
    <div class="opening-mark">
        <img src="{{ asset('assets/mark.svg') }}" alt="" width="64" height="64">
    </div>
</div>
<a class="skip" href="#main">Lewati ke konten</a>
<header class="masthead">
    <div class="shell header-inner">
        @include('brand')
        <nav class="desktop-nav" aria-label="Navigasi utama">
            @foreach (config('stitch.navigation') as $name => [$label])
                <a href="{{ route($name) }}" @if (request()->routeIs($name)) aria-current="page" @endif>{{ $label }}</a>
            @endforeach
        </nav>
        <a class="button contact-button" href="mailto:{{ config('portfolio.email') }}"><span class="icon" aria-hidden="true">mail</span><span>Hubungi <span class="desktop-word">Saya</span></span></a>
    </div>
</header>
<main id="main">
    @yield('content')
</main>
<footer class="footer">
    <div class="shell footer-grid">
        <div>@include('brand')<p>Pembuatan dan pengembangan website, integrasi sistem, serta konsultasi kendala aplikasi dan server.</p></div>
        <div><h2>Navigasi</h2>
            @foreach (config('stitch.navigation') as $name => [$label])
                <a href="{{ route($name) }}">{{ $label }}</a>
            @endforeach
        </div>
        <div><h2>Kontak</h2>
            <a href="mailto:{{ config('portfolio.email') }}">{{ config('portfolio.email') }}</a>
            <a href="{{ config('portfolio.github') }}">GitHub</a>
            <a href="{{ config('portfolio.linkedin') }}">LinkedIn</a>
        </div>
        <small class="footer-credit">
            <span>&copy; {{ now('Asia/Jakarta')->year }} {{ config('portfolio.name') }}</span>
            <span lang="en">Made with <span class="footer-heart" role="img" aria-label="love">&#9829;</span> by Hilman</span>
        </small>
    </div>
</footer>
<nav class="mobile-nav" aria-label="Navigasi mobile">
    @foreach (config('stitch.navigation') as $name => [$label, $short, $icon])
        <a href="{{ route($name) }}" @if (request()->routeIs($name)) aria-current="page" @endif><span class="icon" aria-hidden="true">{{ $icon }}</span><span>{{ $short }}</span></a>
    @endforeach
</nav>
</body>
</html>
