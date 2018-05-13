<div class="post-preview">
    <a href="{{ $post->url }}" target="_blank">
        <h2 class="post-title">
            {{ $post->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ $post->subtitle }}
        </h3>
    </a>
    <p class="post-meta">Posted in
        <a href="#">Medium</a>
        on {{ $post->published_at->format('Y-m-d') }}
    </p>
</div>
