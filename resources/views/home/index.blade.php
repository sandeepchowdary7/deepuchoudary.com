@component('layouts.app')
  <section class="introduction">
    <p class="mb-4">
      I'm a <strong> Full-Stack web designer</strong> and <strong>developer.</strong>
    </p>
    <p class="mb-4">
      A big fan for<strong> <a href="https://laracasts.com">Laracasts</a>.</strong> Love to build <strong>websites</strong>, <strong> blogs </strong> and <strong>applications</strong> with <strong>Laravel</strong>, <strong>PHP</strong>, <strong>Drupal</strong>, <strong>WordPress</strong>, <strong>JavaScript Frameworks</strong>, <strong>HTML</strong> and <strong>CSS</strong>.
    </p>
    <p>
      Wanna become <strong>Certified Prefessional Developer</strong>
      <!-- <strong><a href="{{ route('posts') }}">blog</a></strong>, -->
      and also contribute for <strong>More Open-Source Projects</strong>.
    </p>
  </section>

  @include('partials.postList', [
    'title' => 'Latest posts',
    'posts' => $posts,
  ])

  <p class="markup | mt-8 text-sm md:text-xs">
    <a href="{{ route('posts') }}">
      All posts
    </a>
  </p>
@endcomponent
