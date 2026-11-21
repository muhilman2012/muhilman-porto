@php
    $logo = match ($technology) {
        'PHP', 'PHP 8.3+' => 'php',
        'Laravel' => 'laravel',
        'MySQL' => 'mysql',
        'Livewire' => 'livewire',
        'Docker' => 'docker',
        'Nginx' => 'nginx',
        'Linux' => 'linux',
        'Git' => 'git',
        'JavaScript' => 'javascript',
        'Bootstrap' => 'bootstrap',
        'Postman' => 'postman',
        'Redis' => 'redis',
        'Tailwind CSS' => 'tailwindcss',
        'Alpine.js' => 'alpinedotjs',
        'Vite' => 'vite',
        'MinIO' => 'minio',
        'Laravel Reverb' => 'laravel',
        default => null,
    };
@endphp
@if ($logo)
    <img class="tech-logo" src="{{ asset('assets/tech/'.$logo.'.svg') }}" width="24" height="24" alt="" loading="lazy" decoding="async">
@endif

