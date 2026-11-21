@extends('layout')

@section('title', 'Tech Stack · Muhammad Hilman')

@section('content')
<header class="shell page-hero">
    <p class="eyebrow">Tech Stack</p>
    <h1>Perangkat untuk membangun dan merawat aplikasi</h1>
    <p class="lead">Saya menggunakan perangkat berikut untuk mengerjakan website, integrasi layanan, dan pemeliharaan aplikasi. Spesialisasi pengembangan aplikasi saya adalah PHP dan Laravel.</p>
</header>
<div class="shell topology-wrap">@include('tech-loop')</div>
<section class="shell topology-wrap">
    <div class="card topology">
        <span class="kicker">Diagram konseptual</span><h2>Alur request aplikasi Laravel</h2>
        <ol aria-label="Alur request">
            <li>Browser<small>HTTPS</small></li><li>Nginx<small>Reverse proxy</small></li><li>Laravel<small>Logika aplikasi</small></li><li>MySQL<small>Penyimpanan data</small></li>
        </ol>
    </div>
</section>
<section class="band tinted">
    <div class="shell">
        <header class="section-head"><h2>Katalog teknologi</h2></header>
        <div class="grid two">
            @foreach (config('stitch.stack') as [$icon, $title, $items])
                <article class="card service-card">
                    <span class="icon tile" aria-hidden="true">{{ $icon }}</span><h3>{{ $title }}</h3>
                    <ul class="service-list">@foreach ($items as $item)<li class="technology-item">@include('technology-logo', ['technology' => $item])<span>{{ $item }}</span></li>@endforeach</ul>
                </article>
            @endforeach
        </div>
    </div>
</section>
@include('cta')
@endsection

