<!doctype html>
<html lang="id" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('seo-head')
    <meta name="theme-color" content="#f7f9fb">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/mark.svg') }}">
    <link rel="preload" as="font" type="font/woff2" crossorigin href="{{ asset('assets/plus-jakarta-sans.woff2') }}">
    <link rel="preload" as="font" type="font/woff2" crossorigin href="{{ asset('assets/material-symbols.woff2') }}">
    <link rel="stylesheet" href="{{ asset('assets/site.css') }}?v={{ filemtime(public_path('assets/site.css')) }}">
</head>
<body @class(['portfolio-home' => request()->routeIs('home')])>
@if (request()->routeIs('home'))
    <div class="opening-screen" aria-hidden="true">
        <div class="opening-mark">
            <img src="{{ asset('assets/mark.svg') }}" alt="" width="64" height="64">
        </div>
    </div>
@endif
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
        <small>© {{ now()->year }} {{ config('portfolio.name') }}</small>
    </div>
</footer>
<nav class="mobile-nav" aria-label="Navigasi mobile">
    @foreach (config('stitch.navigation') as $name => [$label, $short, $icon])
        <a href="{{ route($name) }}" @if (request()->routeIs($name)) aria-current="page" @endif><span class="icon" aria-hidden="true">{{ $icon }}</span><span>{{ $short }}</span></a>
    @endforeach
</nav>
</body>
</html>
