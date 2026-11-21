@extends('layout')

@section('title', 'Pengalaman & Solusi · Muhammad Hilman')

@section('content')
<header class="shell page-hero">
    <p class="eyebrow">Studi Kasus</p>
    <h1>Website &amp; aplikasi untuk <em>kebutuhan organisasi dan operasional</em></h1>
    <p class="lead">Proyek untuk layanan publik, pengelolaan fasilitas, penjurian acara, dan website organisasi.</p>
</header>
<section class="shell feature-wrap">
    <article class="card feature">
        <div><span class="tag">GovTech</span><h2>Lapor Mas Wapres</h2><p>Membangun alur penerimaan, verifikasi, klasifikasi, dan pelacakan aduan. Pengembangan v2 memperbarui arsitektur dan antarmuka untuk mendukung pekerjaan pengelola.</p><a class="text-link" href="{{ route('project', 'lapor-mas-wapres') }}">Baca studi kasus <span aria-hidden="true">→</span></a></div>
        @include('case-process')
    </article>
</section>
<section class="band tinted">
    <div class="shell"><header class="section-head"><h2>Studi kasus lainnya</h2></header>@include('project-grid', ['featured' => 'lapor-mas-wapres'])</div>
</section>
@include('cta')
@endsection
