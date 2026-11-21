@extends('layout')

@section('title', 'Layanan · Muhammad Hilman')

@section('content')
<header class="shell page-hero">
    <p class="eyebrow">Layanan</p>
    <h1>Pembuatan Website &amp; Konsultasi Teknis</h1>
    <p class="lead">Bantuan untuk membangun website baru, mengembangkan fitur, menghubungkan layanan, dan menangani kendala aplikasi maupun server.</p>
</header>
<section class="band tinted">
    <div class="shell">
        <header class="section-head"><h2>Empat bidang layanan</h2></header>
        <div class="grid two">
            @foreach (config('stitch.services') as $index => [$icon, $title, $text, $items])
                <article class="card service-card" id="layanan-{{ $index + 1 }}">
                    <span class="icon tile" aria-hidden="true">{{ $icon }}</span>
                    <h3>{{ $title }}</h3><p>{{ $text }}</p>
                    <ul class="service-list">@foreach ($items as $item)<li>{{ $item }}</li>@endforeach</ul>
                    <a class="text-link" href="mailto:{{ config('portfolio.email') }}?subject={{ rawurlencode($title) }}">Diskusikan kebutuhan <span aria-hidden="true">→</span></a>
                </article>
            @endforeach
        </div>
    </div>
</section>
<section class="band shell">
    <header class="section-head"><h2>Alur kerja</h2></header>
    <ol class="grid four steps">
        <li class="card"><h3>Diagnosis</h3><p>Petakan kebutuhan, kendala, dan alur yang sudah ada.</p></li>
        <li class="card"><h3>Desain solusi</h3><p>Sepakati lingkup, dependensi, dan kriteria penerimaan.</p></li>
        <li class="card"><h3>Implementasi</h3><p>Bangun bagian yang disepakati, uji alur utama, lalu tinjau hasilnya.</p></li>
        <li class="card"><h3>Deployment</h3><p>Siapkan rilis dan dokumentasikan cara menjalankannya.</p></li>
    </ol>
</section>
<section class="band tinted">
    <div class="shell faq">
        <header class="section-head center"><h2>Pertanyaan seputar layanan</h2></header>
        @foreach (config('stitch.questions') as $question => $answer)
            <details><summary>{{ $question }}</summary><p>{{ $answer }}</p></details>
        @endforeach
    </div>
</section>
@include('cta')
@endsection

