@php
    $title = trim(html_entity_decode($__env->yieldContent('title', config('portfolio.name').' · '.config('portfolio.role'))));
    $description = trim(html_entity_decode($__env->yieldContent('description', config('seo.descriptions.'.request()->route()->getName(), config('seo.descriptions.home')))));
    $siteUrl = config('seo.url');
    $canonical = $siteUrl.'/'.ltrim(request()->path(), '/');
    $image = $siteUrl.config('seo.image');
    $imageAlt = config('seo.image_alt');
@endphp
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="author" content="{{ config('portfolio.name') }}">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="{{ $canonical }}">
<meta property="og:type" content="{{ request()->routeIs('project') ? 'article' : 'website' }}">
<meta property="og:locale" content="id_ID">
<meta property="og:site_name" content="{{ config('portfolio.name') }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="640">
<meta property="og:image:height" content="640">
<meta property="og:image:alt" content="{{ $imageAlt }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:image:alt" content="{{ $imageAlt }}">

