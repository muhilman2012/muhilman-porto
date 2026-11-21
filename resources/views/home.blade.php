@extends('layout')

@section('content')
<section class="hero-band">
    <div class="shell hero">
        <div>
            <p class="eyebrow">Muhammad Hilman · Web Developer</p>
            <h1>Pembuatan Website &amp; Konsultasi Teknis</h1>
            <p class="lead">Saya membantu membangun dan mengembangkan website, mengintegrasikan layanan, serta menelusuri kendala aplikasi dan server.</p>
            <div class="actions">
                <a class="button" href="mailto:{{ config('portfolio.email') }}"><span class="icon" aria-hidden="true">mail</span> Diskusikan Kebutuhan Anda <span aria-hidden="true">→</span></a>
                <a class="button secondary" href="#portofolio">Lihat Studi Kasus <span aria-hidden="true">→</span></a>
            </div>
            <div class="focus-list">
                <span><i class="icon" aria-hidden="true">code</i> Website &amp; Aplikasi</span>
                <span><i class="icon" aria-hidden="true">hub</i> Integrasi Sistem</span>
                <span><i class="icon" aria-hidden="true">plumbing</i> Konsultasi Teknis</span>
            </div>
        </div>
        <div class="hero-visual">
            @include('runner', ['priority' => true, 'showCaption' => false])
            <div class="terminal-scene hero-terminal">
                @include('terminal')
            </div>
        </div>
    </div>
</section>

<section id="portofolio" class="band tinted">
    <div class="shell">
        <header class="section-head center"><span class="kicker">Portofolio</span><h2>Studi Kasus &amp; Solusi</h2></header>
        <article class="featured-case">
            <div>
                <span class="tag">Proyek unggulan</span>
                <h3>Lapor Mas Wapres</h3>
                <p>Modernisasi aplikasi pengelolaan pengaduan, dengan perubahan pada arsitektur, alur verifikasi, dan antarmuka pengelola.</p>
                <a class="text-link" href="{{ route('project', 'lapor-mas-wapres') }}">Baca studi kasus LMW <span aria-hidden="true">→</span></a>
            </div>
            @include('case-process')
        </article>
        @include('project-grid', ['featured' => 'lapor-mas-wapres'])
    </div>
</section>

<section class="band tinted home-services">
    <div class="shell">
        <header class="section-head"><div><span class="kicker">Layanan</span><h2>Website, Integrasi &amp; Konsultasi Teknis</h2></div><p>Dari website baru hingga perbaikan aplikasi yang sudah berjalan.</p></header>
        <div class="grid three">
            @foreach (array_slice(config('stitch.services'), 0, 3) as $index => [$icon, $title, $text, $items])
                <article class="card home-service-card" data-service="{{ $icon }}">
                    <div class="home-service-top">
                        <span class="icon tile" aria-hidden="true">{{ $icon }}</span>
                        <span class="home-service-motif" aria-hidden="true"><i></i><i></i><i></i></span>
                    </div>
                    <h3>{{ $title }}</h3>
                    <p>{{ $text }}</p>
                    <ul class="home-service-list">
                        @foreach (array_slice($items, 0, 2) as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <div class="home-service-footer">
                        <a class="text-link home-service-link" href="{{ route('services') }}#layanan-{{ $index + 1 }}" aria-label="Lihat layanan {{ $title }}">
                            Lihat layanan <span class="home-service-arrow" aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="band shell" aria-labelledby="home-profile-title">
    <div class="profile home-profile">
        <figure class="home-profile-photo">
            <img src="{{ asset('assets/hilman.png') }}" width="460" height="460" alt="Foto Muhammad Hilman" loading="lazy" decoding="async">
            <figcaption>Muhammad Hilman</figcaption>
        </figure>
        <div class="profile-content">
            <span class="kicker">Tentang saya</span>
            <h2 id="home-profile-title">Saya Hilman, web developer yang juga berlari</h2>
            <p class="lead">Saya mengerjakan website organisasi dan aplikasi operasional. Salah satu proyek saya adalah Lapor Mas Wapres, yang mencakup alur pengaduan dan integrasi antar layanan.</p>
            <p class="profile-note">Lari melatih saya menjaga ritme dan mengevaluasi proses. Di proyek, saya menerapkan kebiasaan itu saat menguji perubahan dan menelusuri masalah produksi.</p>
            <dl class="profile-points">
                <div><dt><span class="icon" aria-hidden="true">code</span> Website</dt><dd>Membangun halaman publik, panel pengelolaan, dan alur kerja aplikasi.</dd></div>
                <div><dt><span class="icon" aria-hidden="true">hub</span> Integrasi</dt><dd>Menghubungkan kanal WhatsApp dan menyinkronkan data antar aplikasi.</dd></div>
                <div><dt><span class="icon" aria-hidden="true">dns</span> Pemeliharaan</dt><dd>Menelusuri kendala aplikasi dan server serta memeriksa hasil perbaikannya.</dd></div>
            </dl>
            <div class="home-profile-actions">
                <a class="button" href="{{ route('about') }}">Tentang saya <span aria-hidden="true">→</span></a>
                <a class="button secondary" href="{{ route('project', 'lapor-mas-wapres') }}">Lihat studi kasus LMW <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </div>
</section>

<section class="band shell">
    <header class="section-head"><div><span class="kicker">Teknologi &amp; alat bantu</span><h2>Tech Stack</h2></div><a class="text-link" href="{{ route('stack') }}">Lihat tech stack <span aria-hidden="true">→</span></a></header>
    @include('tech-loop')
</section>
@include('cta')
@endsection
