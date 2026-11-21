@extends('layout')

@section('title', $project['title'].' · '.config('portfolio.name'))
@section('description', $project['summary'])

@section('content')
<article class="shell page-hero detail">
    <a class="text-link back" href="{{ route('experience') }}"><span aria-hidden="true">←</span> Semua studi kasus</a>
    <p class="eyebrow">{{ $project['category'] }}</p>
    <h1>{{ $project['title'] }}</h1>
    <p class="lead">{{ $project['summary'] }}</p>
    <dl class="project-role"><dt>Peran</dt><dd>{{ $project['role'] }}</dd></dl>
    @foreach ($project['details'] as $heading => $description)
        <section class="card detail-section"><h2>{{ $heading }}</h2><p>{{ $description }}</p></section>
    @endforeach
    @foreach ($project['related'] ?? [] as $slug => $label)
        <p><a class="text-link" href="{{ route('project', $slug) }}">{{ $label }} <span aria-hidden="true">→</span></a></p>
    @endforeach
    @isset ($project['link'])
        <a class="button" href="{{ $project['link'] }}">{{ $project['link_label'] }} <span aria-hidden="true">↗</span></a>
    @endisset
</article>
@include('cta')
@endsection
