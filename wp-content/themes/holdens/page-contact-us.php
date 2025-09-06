<?php
/**
 * Contact Us Template
 */

get_header(); ?>

<section class="hero">
    <div class="container">
        <div class="text">
            <h1 style="opacity:0;">Medium length hero headline goes here</h1>
        </div>
        <div class="description" style="opacity:0;transform:translateY(50px);">
            <p>Lorem ipsum dolor sit amet, conctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="formWrapper">
            <?php echo do_shortcode('[contact-form-7 id="bd02476" title="Contact form"]'); ?>
        </div>
    </div>
</section>
<div class="introGradient borderBottom">
    <div class="places" style="opacity:0;transform:translateY(50px);">
        <div class="container">
            <div class="place">
                <div class="text">
                    <div class="top">
                        <h2>Manchester Address</h2>
                    </div>
                    <div class="bottom">
                        <p>1 High Street, <br>High House, <br>Manchester, <br>M2 5WA</p>
                        <a href="https://www.google.com/maps/" target="_blank" class="button darkGreen">Open in Maps<svg xmlns="http://www.w3.org/2000/svg" width="25" height="32" fill="none"><g fill="#F3F3F3" clip-path="url(#a)"><path d="M15.736 25.253c2.841-4.05 6.77-10.539 6.77-15.442a9.718 9.718 0 0 0-2.96-6.886A10.111 10.111 0 0 0 12.5.08a10.11 10.11 0 0 0-7.047 2.845 9.718 9.718 0 0 0-2.96 6.886c0 4.905 3.932 11.396 6.773 15.445C4.284 25.593 0 26.716 0 28.571 0 30.823 6.288 32 12.5 32 18.71 32 25 30.822 25 28.571c0-1.855-4.279-2.98-9.264-3.318ZM3.482 9.811a8.758 8.758 0 0 1 2.67-6.203A9.112 9.112 0 0 1 12.5 1.045c2.378 0 4.66.922 6.35 2.563a8.758 8.758 0 0 1 2.668 6.203c0 6.328-7.251 15.901-9.019 18.14-1.766-2.239-9.018-11.81-9.018-18.14ZM12.5 31.03C5.473 31.03.989 29.574.989 28.571c0-.872 3.42-2.082 8.944-2.38a61.377 61.377 0 0 0 2.183 2.85.494.494 0 0 0 .383.177.503.503 0 0 0 .384-.178c.116-.14.999-1.217 2.185-2.851 5.525.298 8.942 1.51 8.942 2.382.001 1.003-4.483 2.459-11.51 2.459Z"/><path d="M17.939 9.898a5.259 5.259 0 0 0-.917-2.963 5.418 5.418 0 0 0-2.441-1.964 5.54 5.54 0 0 0-3.143-.303 5.474 5.474 0 0 0-2.785 1.46 5.302 5.302 0 0 0-1.489 2.73 5.236 5.236 0 0 0 .31 3.081 5.357 5.357 0 0 0 2.003 2.394 5.517 5.517 0 0 0 6.867-.665 5.287 5.287 0 0 0 1.595-3.77Zm-9.89 0c0-.863.26-1.707.75-2.424a4.433 4.433 0 0 1 1.997-1.608 4.534 4.534 0 0 1 2.572-.248 4.479 4.479 0 0 1 2.28 1.194 4.338 4.338 0 0 1 1.217 2.235 4.285 4.285 0 0 1-.253 2.521 4.384 4.384 0 0 1-1.64 1.959 4.515 4.515 0 0 1-5.618-.545A4.327 4.327 0 0 1 8.05 9.898Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h25v32H0z"/></clipPath></defs></svg></a>
                    </div>
                </div>
                <div class="imageWrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office.jpg" alt="Manchester Office">
                </div>
            </div>
            <div class="place">
                <div class="text">
                    <div class="top">
                        <h2>Manchester Address</h2>
                    </div>
                    <div class="bottom">
                        <p>1 High Street, <br>High House, <br>Manchester, <br>M2 5WA</p>
                        <a href="https://www.google.com/maps/" target="_blank" class="button darkGreen">Open in Maps<svg xmlns="http://www.w3.org/2000/svg" width="25" height="32" fill="none"><g fill="#F3F3F3" clip-path="url(#a)"><path d="M15.736 25.253c2.841-4.05 6.77-10.539 6.77-15.442a9.718 9.718 0 0 0-2.96-6.886A10.111 10.111 0 0 0 12.5.08a10.11 10.11 0 0 0-7.047 2.845 9.718 9.718 0 0 0-2.96 6.886c0 4.905 3.932 11.396 6.773 15.445C4.284 25.593 0 26.716 0 28.571 0 30.823 6.288 32 12.5 32 18.71 32 25 30.822 25 28.571c0-1.855-4.279-2.98-9.264-3.318ZM3.482 9.811a8.758 8.758 0 0 1 2.67-6.203A9.112 9.112 0 0 1 12.5 1.045c2.378 0 4.66.922 6.35 2.563a8.758 8.758 0 0 1 2.668 6.203c0 6.328-7.251 15.901-9.019 18.14-1.766-2.239-9.018-11.81-9.018-18.14ZM12.5 31.03C5.473 31.03.989 29.574.989 28.571c0-.872 3.42-2.082 8.944-2.38a61.377 61.377 0 0 0 2.183 2.85.494.494 0 0 0 .383.177.503.503 0 0 0 .384-.178c.116-.14.999-1.217 2.185-2.851 5.525.298 8.942 1.51 8.942 2.382.001 1.003-4.483 2.459-11.51 2.459Z"/><path d="M17.939 9.898a5.259 5.259 0 0 0-.917-2.963 5.418 5.418 0 0 0-2.441-1.964 5.54 5.54 0 0 0-3.143-.303 5.474 5.474 0 0 0-2.785 1.46 5.302 5.302 0 0 0-1.489 2.73 5.236 5.236 0 0 0 .31 3.081 5.357 5.357 0 0 0 2.003 2.394 5.517 5.517 0 0 0 6.867-.665 5.287 5.287 0 0 0 1.595-3.77Zm-9.89 0c0-.863.26-1.707.75-2.424a4.433 4.433 0 0 1 1.997-1.608 4.534 4.534 0 0 1 2.572-.248 4.479 4.479 0 0 1 2.28 1.194 4.338 4.338 0 0 1 1.217 2.235 4.285 4.285 0 0 1-.253 2.521 4.384 4.384 0 0 1-1.64 1.959 4.515 4.515 0 0 1-5.618-.545A4.327 4.327 0 0 1 8.05 9.898Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h25v32H0z"/></clipPath></defs></svg></a>
                    </div>
                </div>
                <div class="imageWrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office.jpg" alt="Manchester Office">
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(SplitText) 
    

    // GSAP timeline for .reveal
    if (window.gsap) {
        const tl = gsap.timeline();
        // You can add more animations to the timeline as needed
        const h1 = document.querySelector('.hero h1');
        if (h1 && window.SplitText) {
            const split = new SplitText(h1, { type: "words,chars" });
            gsap.set(split.chars, { y: 80, opacity: 0 });
            gsap.set(h1, { opacity: 1 });
            tl.to(split.chars, {
                y: 0,
                opacity: 1,
                duration: 0.6,
                stagger: 0.03,
                ease: "power3.out"
            });
        }
        tl.to('.description', { y: 0, opacity: 1, duration: .5 }, "-=0.65");
        tl.to('.places', { y: 0, opacity: 1, duration: .5 }, "-=0.25");

    }

    const onScreenElements = document.querySelectorAll('.onScreen');
    if ('IntersectionObserver' in window && onScreenElements.length) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        onScreenElements.forEach(el => observer.observe(el));
    }
});
</script>


<?php get_footer(); ?>