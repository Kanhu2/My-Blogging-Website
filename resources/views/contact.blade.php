<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog - Contact</title>
    <link rel="stylesheet" href="{{ asset('css/contactstyle.css') }}">
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

    <!-- Contact Section -->
    <div class="container">
        <h2 class="section-title">Contact Us</h2>

        <section class="contact-intro">
            <div class="contact-grid">
                <div class="contact-copy">
                    <h3 class="contact-title">We’d love to hear from you</h3>
                    <p class="contact-text">Have a question, feedback, or a topic you want us to cover? Send a message
                        and we’ll reply as soon as possible.</p>
                    <div class="contact-note">
                        <div class="contact-note__icon"><i class="fa-regular fa-circle-check"></i></div>
                        <div class="contact-note__body">
                            <div class="contact-note__title">Quick response</div>
                            <div class="contact-note__text">Usually within 24-48 hours (working days).</div>
                        </div>
                    </div>

                    <div class="contact-note" style="margin-top: 5px">
                        <div class="contact-note__icon"><i class="fa-solid fa-lightbulb"></i></div>
                        <div class="contact-note__body">
                            <div class="contact-note__title">Topic suggestions welcome</div>
                            <div class="contact-note__text">Tell us what you want to learn—we’ll try to write a post
                                about it.</div>
                        </div>
                    </div>
                </div>

                <div class="blog-info-card">
                    <h3 class="blog-info-title">About this blog</h3>
                    <p class="blog-info-text">LaraBlog is focused on practical Laravel learning—simple explanations,
                        real examples, and clean UI ideas that you can use in your own projects.</p>
                    <div class="blog-info-list">
                        <div class="blog-info-item"><i class="fa-solid fa-code"></i> Laravel + PHP tips</div>
                        <div class="blog-info-item"><i class="fa-solid fa-screwdriver-wrench"></i> Fixes for common
                            errors</div>
                        <div class="blog-info-item"><i class="fa-solid fa-palette"></i> Modern UI design sections</div>
                    </div>
                    {{-- <a href="/blog" class="btn btn-primary blog-info-btn">Explore Articles</a> --}}
                </div>
            </div>
        </section>

        <section class="contact-details">
            <div class="section-head">
                <h3 class="details-title">Contact details</h3>
                <p class="details-subtitle">Use any of the options below, whichever is easiest for you.</p>
            </div>

            <div class="details-grid">
                <div class="detail-card">
                    <div class="detail-icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="detail-body">
                        <div class="detail-label">Phone</div>
                        <div class="detail-value">+91 7609835687</div>
                        <div class="detail-hint">Mon–Fri, 10AM–6PM</div>
                    </div>
                </div>
                <div class="detail-card">
                    <div class="detail-icon"><i class="fa-regular fa-envelope"></i></div>
                    <div class="detail-body">
                        <div class="detail-label">Email</div>
                        <div class="detail-value">kanhukk914@gmail.com</div>
                        <div class="detail-hint">We reply within 24–48 hours</div>
                    </div>
                </div>
                <div class="detail-card">
                    <div class="detail-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="detail-body">
                        <div class="detail-label">Address</div>
                        <div class="detail-value">Kiit Square, Bhubaneswar, Odisha</div>
                        <div class="detail-hint">Open in Google Maps</div>
                    </div>
                </div>
                <div class="detail-card">
                    <div class="detail-icon"><i class="fa-regular fa-clock"></i></div>
                    <div class="detail-body">
                        <div class="detail-label">Hours</div>
                        <div class="detail-value">Mon–Sat</div>
                        <div class="detail-hint">10:00 AM – 6:00 PM</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('footer')

</body>

</html>
