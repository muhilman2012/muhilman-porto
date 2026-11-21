<div class="tech-loop">
    <div class="tech-window">
        <div class="tech-track">
            @foreach ([false, true] as $duplicate)
                <ul class="tech-sequence{{ $duplicate ? ' tech-copy' : '' }}" @if ($duplicate) aria-hidden="true" @else aria-label="Teknologi pilihan" @endif>
                    @foreach (config('stitch.featured_technologies') as $technology)
                        <li class="tech-badge">@include('technology-logo', ['technology' => $technology])<span>{{ $technology }}</span></li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
</div>
