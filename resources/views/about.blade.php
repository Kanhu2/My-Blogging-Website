<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog - About</title>
    <link rel="stylesheet" href="{{ asset('css/aboutstyle.css') }}">
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
        <div class="about-intro">
            <div class="about-intro__text">
                <h2 class="section-title section-title--left">About LaraBlog</h2>
                <p class="about-lead">LaraBlog is a simple space where we share practical Laravel knowledge, clean coding habits, and real project experience.</p>
                <div class="about-points">
                    <div class="about-point"><i class="fa-solid fa-check"></i> Beginner-friendly explanations</div>
                    <div class="about-point"><i class="fa-solid fa-check"></i> Real-world examples & code patterns</div>
                    <div class="about-point"><i class="fa-solid fa-check"></i> Performance & best practices</div>
                </div>
                <div class="about-actions">
                    <a href="/blog" class="btn btn-primary about-btn">Browse Articles</a>
                    <a href="/contact" class="about-link">Contact us <span aria-hidden="true">→</span></a>
                </div>
            </div>

            <div class="about-intro__visual">
                <div class="about-card">
                    <div class="about-card__icon"><i class="fa-solid fa-layer-group"></i></div>
                    <h3 class="about-card__title">Learn by building</h3>
                    <p class="about-card__text">Short lessons, templates, and tips you can apply directly in your Laravel projects.</p>
                </div>
            </div>
        </div>

        <div class="about-stats">
            <div class="stat">
                <div class="stat__number">Weekly</div>
                <div class="stat__label">New posts</div>
            </div>
            <div class="stat">
                <div class="stat__number">Laravel</div>
                <div class="stat__label">Focused content</div>
            </div>
            <div class="stat">
                <div class="stat__number">Clean</div>
                <div class="stat__label">Code first</div>
            </div>
        </div>

        <div class="about-values">
            <h2 class="section-title">What you’ll find here</h2>
            <div class="value-grid">
                <div class="value-card">
                    <div class="value-card__icon"><i class="fa-solid fa-bolt"></i></div>
                    <h3 class="value-card__title">Fast solutions</h3>
                    <p class="value-card__text">Fix common Laravel issues quickly with clear steps and examples.</p>
                </div>
                <div class="value-card">
                    <div class="value-card__icon"><i class="fa-solid fa-shield"></i></div>
                    <h3 class="value-card__title">Best practices</h3>
                    <p class="value-card__text">Security, validation, architecture, and maintainable patterns.</p>
                </div>
                <div class="value-card">
                    <div class="value-card__icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                    <h3 class="value-card__title">Modern UI tips</h3>
                    <p class="value-card__text">Simple design ideas to make your projects look professional.</p>
                </div>
            </div>
        </div>

        <div class="about-cta">
            <div class="about-cta__card">
                <div class="about-cta__text">
                    <h3>Want to collaborate or suggest a topic?</h3>
                    <p>Send your idea—we’ll try to turn it into a helpful post.</p>
                </div>
                <a href="/contact" class="btn btn-primary about-btn">Message us</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('footer')

</body>

</html>
