<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog - Home</title>
    <link rel="stylesheet" href="{{ asset('css/fullpoststyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Header -->
    @include('header')

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to LaraBlog</h1>
            <p>Discover amazing articles, tutorials, and insights about web development, Laravel, and modern PHP
                practices.</p>
            <a href="/blog" class="btn btn-primary">Browse Articles</a>
        </div>
    </section>

    <!-- Featured Posts -->
    <div class="container">
        <h2 class="section-title">Post Details</h2>
        <div class="featured-posts">
            <!-- Single Post -->

            <section class="post-details">
                <div class="post-layout">
                    <div class="post-main">
                        <h1 class="post-heading">{{ $post->title }}</h1>
                        <div class="post-body">
                            {!! $post->description !!}
                        </div>
                    </div>

                    <aside class="post-side">
                        <div class="post-meta-right">
                            <div class="post-date">
                                <i class="fa-regular fa-calendar"></i>
                                <span>{{ $post->created_at->format('F j, Y') }}</span>
                            </div>
                        </div>

                        @if ($post->image)
                            <div class="post-banner">
                                <img src="{{ asset('img/' . $post->image) }}" alt="{{ $post->title }}">
                            </div>
                        @endif
                    </aside>
                </div>
            </section>
        </div>

        <!-- Add Comments Here -->
        <section class="comments-wrap">
            <div class="comments-card">
                <livewire:comments :model="$post" />
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('footer')

</body>

</html>
