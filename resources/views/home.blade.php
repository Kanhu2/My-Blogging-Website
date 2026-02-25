<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog - Home</title>
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}">
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
        <h2 class="section-title">Featured Posts</h2>
        <div class="featured-posts">
            <!-- All Posts -->
            @foreach ($post as $posts)
                <div class="post-card">
                    <div class="post-image">
                        <img src="img/{{ $posts->image }}" alt="Laravel Tips">
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span>{{ $posts->created_at }}</span>
                        </div>
                        <h3 class="post-title">{{ $posts->title }}</h3>
                        <p class="post-excerpt">{{ Str::limit($posts->description, 100) }}...</p>
                        <a href="{{ route('fullpost', $posts->id) }}" class="read-more">Read More →</a>
                    </div>
                </div>
            @endforeach
        </div>

        <section class="content-callout">
            <div class="callout-card">
                <div class="callout-text">
                    <h3>Build better apps with Laravel.</h3>
                    <p>Short tutorials, tips, and real-world solutions—designed to help you ship faster and write cleaner code.</p>
                </div>
                <div class="callout-actions">
                    <a href="/blog" class="btn btn-primary callout-btn">Explore Articles</a>
                    <a href="/contact" class="callout-link">Get in touch <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <!-- Categories -->
        {{-- <h2 class="section-title">Browse Categories</h2>
        <div class="categories">
            <a href="/category/laravel" class="category-tag">Laravel</a>
            <a href="/category/php" class="category-tag">PHP</a>
            <a href="/category/javascript" class="category-tag">JavaScript</a>
            <a href="/category/vue" class="category-tag">Vue.js</a>
            <a href="/category/tailwind" class="category-tag">Tailwind CSS</a>
            <a href="/category/testing" class="category-tag">Testing</a>
            <a href="/category/deployment" class="category-tag">Deployment</a>
            <a href="/category/performance" class="category-tag">Performance</a>
        </div> --}}

        <!-- Newsletter -->
        {{-- <div class="newsletter">
            <h3>Subscribe to our Newsletter</h3>
            <p>Get the latest articles and news delivered to your inbox every week. No spam, ever.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div> --}}
    </div>

    <!-- Footer -->
    @include('footer')

</body>

</html>
