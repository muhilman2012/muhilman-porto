<div class="grid two">
    @foreach (config('portfolio.projects') as $slug => $project)
        @continue(($featured ?? null) === $slug)
        <article class="case-card" data-project="{{ $slug }}">
            @if ($slug === 'lmw-whatsapp-api')
                <header class="case-banner case-banner-integration">
                    <span class="tag">{{ $project['category'] }}</span>
                    <h3>{{ $project['title'] }}</h3>
                    <div class="api-flow" role="img" aria-label="WhatsApp API dan Mekari terhubung ke backend Laravel Lapor Mas Wapres">
                        <div class="api-flow-sources">
                            <span>WhatsApp API</span>
                            <span>Mekari</span>
                        </div>
                        <span class="api-flow-arrow" aria-hidden="true">→</span>
                        <div class="api-flow-target"><span>Laravel</span><strong>Backend LMW</strong></div>
                    </div>
                </header>
            @else
                <header class="case-banner">
                    <span class="tag">{{ $project['category'] }}</span>
                    <h3>{{ $project['title'] }}</h3>
                    <span class="icon case-symbol" aria-hidden="true">{{ $project['icon'] }}</span>
                </header>
            @endif
            <div class="case-body">
                <p>{{ $project['summary'] }}</p>
                <a class="text-link case-link" href="{{ route('project', $slug) }}" aria-label="Baca studi kasus {{ $project['title'] }}">
                    Baca studi kasus <span aria-hidden="true">→</span>
                </a>
            </div>
        </article>
    @endforeach
</div>
