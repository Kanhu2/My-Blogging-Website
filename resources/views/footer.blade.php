<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3>About LaraBlog</h3>
                <p>A blog dedicated to Laravel, PHP, and modern web development practices. We share tutorials, tips,
                    and industry insights.</p>
                <div class="social-links">
                    {{-- <a href="#"><i class="fab fa-twitter"></i></a> --}}
                    <a href="https://github.com/Kanhu2" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/kanhu2" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact</a></li>
                    {{-- <li><a href="/privacy">Privacy Policy</a></li> --}}
                </ul>
            </div>
            <div class="footer-column">
                <h3>Categories</h3>
                <ul class="footer-links">
                    <li><a href="/blog">Laravel</a></li>
                    <li><a href="/blog">PHP</a></li>
                    <li><a href="/blog">JavaScript</a></li>
                    {{-- <li><a href="/category/vue">Vue.js</a></li> --}}
                    <li><a href="/blog">Testing</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; {{ date('Y') }} LaraBlog. All rights reserved. Built with Laravel.</p>
        </div>
    </div>
</footer>
