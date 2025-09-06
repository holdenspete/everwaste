<?php
/**
 * Sculpt Academy Template
 */

get_header(); ?>

<section class="hero justText">
    <div class="container">
        <div class="text">
            <h1 style="opacity:0;">The Home Of<br> <span>Pilates Education</span></h1>
        </div>
        <div class="description" style="opacity:0;transform:translateY(50px);">
            <p>Join us at Sculpt Academy, where we empower you to achieve your pilates goals through our teacher training academy. Launch your Pilates career through the expert guidance of our master trainers.</p>
            <a href="<?php echo home_url('/contact-us'); ?>" class="button pink"><span>Sign Up</span></a>
        </div>
    </div>
</section>
<div class="introGradient borderBottom">
    <section class="fullImage" style="opacity:0;transform:translateY(50px);">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/academy-wide.jpg" alt="Sculpt in Haus Reformer Pilates Teacher Training Academy">
        </div>
    </section>
    <section class="textImage community reverse" style="opacity:0;transform:translateY(50px);">
        <div id="community" class="scrollTo"></div>
        <div class="container">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/amy-dumbbell.jpg" alt="Sculpt in Haus Reformer Pilates Teacher Training Academy">
            </div>
            <div class="text">
                <div class="inner">
                    <h2>Teacher Training with Our Master Trainers</h2>
                    <p>At Sculpt Academy, we provide an extensive training programme led by master trainers, ensuring a transformative Pilates journey. Our distinctive approach merges time-honoured methods with cutting-edge strategies, guaranteeing exceptional outcomes for every participant.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="ctaSec">
    <div class="container onScreen">
        <div class="titleWrapper">
            <h2 class="pink">Unlock Your <br>Pilates Potential Today</h2>
        </div>
        <p>Request our brochure to discover how Sculpt Academy can kickstart your Pilates journey.</p>
        <script>
        var encoded = "c2N1bHB0aW5oYXVzQGdtYWlsLmNvbQ==";
        var email = atob(encoded);
        document.write('<a href="mailto:' + email + '?subject=Sculpt%20Academy%20Brochure%20Request" class="button pink"><span>Request Brochure</span></a>');
        </script>
    </div>
</section>

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
        tl.to('.fullImage', { y: 0, opacity: 1, duration: .5 }, "-=0.5");
        tl.to('.community', { y: 0, opacity: 1, duration: .5 }, "-=0.5");

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