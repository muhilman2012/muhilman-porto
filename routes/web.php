<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/layanan', 'services')->name('services');
Route::view('/tentang-saya', 'about')->name('about');
Route::view('/tech-stack', 'stack')->name('stack');
Route::view('/pengalaman-solusi', 'experience')->name('experience');

Route::get('/proyek/{slug}', function (string $slug) {
    $projects = config('portfolio.projects');
    abort_unless(isset($projects[$slug]), 404);

    return view('project', ['project' => $projects[$slug]]);
})->name('project');

Route::get('/robots.txt', function () {
    return response("User-agent: *\nAllow: /\nSitemap: ".config('seo.url')."/sitemap.xml\n")
        ->header('Content-Type', 'text/plain; charset=UTF-8');
});

Route::get('/sitemap.xml', function () {
    $paths = [];
    foreach (array_keys(config('seo.descriptions')) as $name) {
        $paths[] = route($name, absolute: false);
    }
    foreach (array_keys(config('portfolio.projects')) as $slug) {
        $paths[] = route('project', ['slug' => $slug], absolute: false);
    }

    return response()->view('sitemap', ['paths' => $paths])
        ->header('Content-Type', 'application/xml; charset=UTF-8');
});
