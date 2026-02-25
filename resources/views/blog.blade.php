<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog - Blog</title>
    <link rel="stylesheet" href="{{ asset('css/blogstyle.css') }}">
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

    <div class="container">
        <section class="blog-categories">
            <h2 class="section-title">Browse by Topic</h2>
            <div class="category-grid">
                <div class="topic-card topic-card--laravel">
                    <div class="topic-card__icon"><i class="fa-brands fa-laravel"></i></div>
                    <h3 class="topic-card__title">Laravel</h3>
                    <p class="topic-card__text">Routing, Eloquent, validation, auth, and real project tips.</p>
                    <a href="#" class="topic-card__link">Explore Laravel <span aria-hidden="true">→</span></a>
                </div>

                <div class="topic-card topic-card--php">
                    <div class="topic-card__icon"><i class="fa-brands fa-php"></i></div>
                    <h3 class="topic-card__title">PHP</h3>
                    <p class="topic-card__text">Core concepts, clean code, OOP patterns, and best practices.</p>
                    <a href="#" class="topic-card__link">Explore PHP <span aria-hidden="true">→</span></a>
                </div>

                <div class="topic-card topic-card--web">
                    <div class="topic-card__icon"><i class="fa-solid fa-globe"></i></div>
                    <h3 class="topic-card__title">Web Development</h3>
                    <p class="topic-card__text">UI sections, performance, SEO basics, and modern dev workflow.</p>
                    <a href="#" class="topic-card__link">Explore Web Dev <span aria-hidden="true">→</span></a>
                </div>

                <div class="topic-card topic-card--js">
                    <div class="topic-card__icon"><i class="fa-brands fa-js"></i></div>
                    <h3 class="topic-card__title">JavaScript</h3>
                    <p class="topic-card__text">DOM basics, async patterns, small utilities, and everyday JS tips.</p>
                    <a href="#" class="topic-card__link">Explore JavaScript <span aria-hidden="true">→</span></a>
                </div>

                <div class="topic-card topic-card--vue">
                    <div class="topic-card__icon"><i class="fa-brands fa-vuejs"></i></div>
                    <h3 class="topic-card__title">Vue.js</h3>
                    <p class="topic-card__text">Components, state, routing, and building clean UI with Vue.</p>
                    <a href="#" class="topic-card__link">Explore Vue <span aria-hidden="true">→</span></a>
                </div>

                <div class="topic-card topic-card--testing">
                    <div class="topic-card__icon"><i class="fa-solid fa-vial"></i></div>
                    <h3 class="topic-card__title">Testing</h3>
                    <p class="topic-card__text">Unit tests, feature tests, and reliable workflows for your apps.</p>
                    <a href="#" class="topic-card__link">Explore Testing <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <section class="blog-callout">
            <div class="blog-callout__card">
                <div class="blog-callout__text">
                    <h3>Learn faster with short, practical posts</h3>
                    <p>Each article is written to be simple, clean, and useful—so you can apply it directly in your projects.</p>
                </div>
                <div class="blog-callout__actions">
                    <a href="/" class="btn btn-primary blog-callout__btn">Go to Home</a>
                    <a href="/contact" class="blog-callout__link">Suggest a topic <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>
    </div>


    <!-- Footer -->
    @include('footer')

</body>

</html>
