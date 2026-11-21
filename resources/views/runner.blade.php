<figure class="portrait runner">
    <img src="{{ asset('assets/hilman-run-720.webp') }}"
         srcset="{{ asset('assets/hilman-run-360.webp') }} 360w, {{ asset('assets/hilman-run-720.webp') }} 720w, {{ asset('assets/hilman-run-960.webp') }} 960w"
         sizes="(max-width: 650px) calc(100vw - 32px), 400px"
         width="720" height="864" alt="Muhammad Hilman berlari dengan busana tradisional"
         @if (($priority ?? false) || request()->routeIs('about')) fetchpriority="high" @else loading="lazy" @endif decoding="async">
    @if ($showCaption ?? true)
        <figcaption>Muhammad Hilman <small>Di lintasan lari</small></figcaption>
    @endif
</figure>

