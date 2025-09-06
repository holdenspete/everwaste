<?php
/**
 * Work With Us Template
 */

get_header(); ?>

<section class="hero justText">
    <div class="container">
        <div class="text" style="opacity:0;">
            <h1 class="smallHeaderOne">Work With Sculpt</h1>
            <h2 class="headerOne">Looking to collaborate?</h2>
        </div>
        <div class="description" style="opacity:0;transform:translateY(50px);">
            <p>Sculpt could be your next partner. We are always looking for opportunities to team up with local businesses and our favourite brands.</p>
        </div>
    </div>
</section>
<div class="introGradient borderBottom">
    
    <section class="textImage community" style="opacity:0;transform:translateY(50px);">
        <div id="community" class="scrollTo"></div>
        <div class="container">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/collab.jpg" alt="Collaborate with Sculpt in Haus Reformer Pilates studio">
            </div>
            <div class="text">
                <div class="inner white">
                    <h2>Partner with Us for Unique Opportunities</h2>
                    <p>At Sculpt, we believe in the power of collaboration. Join us in creating exceptional experiences that inspire and uplift your community.</p>
                    <h3>Partnership Opportunities</h3>
                    <p>We welcome all brands that align with our values and vision.</p>
                    <p>Contact us to explore potential collaborations and partnerships.</p>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="ctaSec">
    <div class="container onScreen">
        <div class="titleWrapper">
            <h2 class="pink">Collaborate With Sculpt</h2>
        </div>
        <p>If you are a brand that wants to join forces, email Sculpt and we can get the conversation started.</p>
        <a href="<?php echo home_url('/contact-us'); ?>" class="button pink"><span>Contact Us</span></a>
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
        const text = document.querySelector('.hero .text');
        const h1 = document.querySelector('.hero h1');
        const h2 = document.querySelector('.hero h2');
        if (h1 && window.SplitText) {
            const split = new SplitText([h1, h2], { type: "words,chars" });
            gsap.set(split.chars, { y: 80, opacity: 0 });
            gsap.set(text, { opacity: 1 });
            tl.to(split.chars, {
                y: 0,
                opacity: 1,
                duration: 0.6,
                stagger: 0.03,
                ease: "power3.out"
            });
        }
        tl.to('.description', { y: 0, opacity: 1, duration: .5 }, "-=0.65");
        tl.to('.community', { y: 0, opacity: 1, duration: .5 }, "-=0.25");

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