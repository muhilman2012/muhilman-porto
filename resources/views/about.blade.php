@extends('layout')

@section('title', 'Tentang Saya · Muhammad Hilman')

@section('content')
<section class="shell page-hero profile about-hero">
    <div>
        <p class="eyebrow">Jakarta, Indonesia</p>
        <h1>Muhammad Hilman.<br><em>{{ config('portfolio.role') }}</em></h1>
        <p class="lead">Saya mengembangkan website dan aplikasi untuk kebutuhan organisasi dan operasional. Sebagai programmer di Sekretariat Wakil Presiden, saya juga mengerjakan integrasi layanan dan pemeliharaan Lapor Mas Wapres.</p>
        <div class="actions"><a class="button" href="{{ route('experience') }}">Lihat pengalaman <span aria-hidden="true">→</span></a></div>
    </div>
    @include('runner')
</section>
<section class="band tinted">
    <div class="shell">
        <header class="section-head"><h2>Cara saya bekerja</h2></header>
        <div class="grid three">
            <article class="card"><span class="icon tile" aria-hidden="true">account_tree</span><h3>Mulai dari kebutuhan</h3><p>Saya memetakan siapa yang menggunakan website, apa yang perlu mereka lakukan, dan bagaimana pekerjaan berpindah antarperan.</p></article>
            <article class="card"><span class="icon tile" aria-hidden="true">troubleshoot</span><h3>Telusuri penyebab masalah</h3><p>Saya memeriksa gejala dan catatan aplikasi untuk memahami kendala sebelum menentukan perbaikan.</p></article>
            <article class="card"><span class="icon tile" aria-hidden="true">build</span><h3>Siapkan pemeliharaan</h3><p>Saya mendokumentasikan cara menjalankan aplikasi dan memeriksa fungsi penting setelah perubahan.</p></article>
        </div>
    </div>
</section>
<section class="band shell">
    <header class="section-head"><h2>Perjalanan kerja</h2></header>
    <div class="timeline">
        <article class="card"><span class="tag">Programmer</span><h3>Sekretariat Wakil Presiden</h3><p>Mengembangkan dan merawat Lapor Mas Wapres serta menginisiasi modernisasi v2 setelah mengevaluasi tahun pertama operasional.</p></article>
        <article class="card"><span class="tag">Freelance Web Developer</span><h3>PSP4</h3><p>Mengembangkan aplikasi web menggunakan Laravel.</p></article>
    </div>
</section>
@include('cta')
@endsection

