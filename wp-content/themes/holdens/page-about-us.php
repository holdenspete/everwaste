<?php
/**
 * About Us Template
 */

get_header(); ?>

<section class="hero">
    <div class="container">
        <div class="text">
            <h1 style="opacity:0;" class="withSmall"><span class="smallPink">Manchester &amp; Wilmslow's</span><br>Premier Boutique Pilates Studio</h1>
        </div>
        <div class="images" style="opacity:0;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutHero.png" alt="Sculpt in Haus Reformer Pilates">
        </div>
        <a class="down" href="#community">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69 69" width="69" height="69" fill="none"><circle cx="34.5" cy="34.5" r="34" fill="#C4729E" stroke="#fff"/><circle cx="34.893" cy="22.076" r="2.438" fill="#fff" transform="rotate(90 34.893 22.076)"/><circle cx="34.893" cy="22.076" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 34.893 22.076)"/><circle cx="34.893" cy="28.288" r="2.438" fill="#fff" transform="rotate(90 34.893 28.288)"/><circle cx="34.893" cy="28.288" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 34.893 28.288)"/><circle cx="34.893" cy="34.499" r="2.438" fill="#fff" transform="rotate(90 34.893 34.5)"/><circle cx="34.893" cy="34.499" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 34.893 34.5)"/><circle cx="34.893" cy="40.712" r="2.438" fill="#fff" transform="rotate(90 34.893 40.712)"/><circle cx="34.893" cy="40.712" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 34.893 40.712)"/><circle cx="34.893" cy="46.924" r="2.438" fill="#fff" transform="rotate(90 34.893 46.924)"/><circle cx="34.893" cy="46.924" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 34.893 46.924)"/><circle cx="27.816" cy="40.555" r="2.438" fill="#fff" transform="rotate(90 27.816 40.555)"/><circle cx="27.816" cy="40.555" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 27.816 40.555)"/><circle cx="41.971" cy="40.555" r="2.438" fill="#fff" transform="rotate(90 41.97 40.555)"/><circle cx="41.971" cy="40.555" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 41.97 40.555)"/><circle cx="22.863" cy="35.601" r="2.438" fill="#fff" transform="rotate(90 22.863 35.601)"/><circle cx="22.863" cy="35.601" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 22.863 35.601)"/><circle cx="46.924" cy="35.601" r="2.438" fill="#fff" transform="rotate(90 46.924 35.601)"/><circle cx="46.924" cy="35.601" r="1.938" stroke="#fff" stroke-opacity=".1" transform="rotate(90 46.924 35.601)"/></svg>
        </a>
    </div>
</section>
<div class="communityGradient borderBottom">
    <section class="textImage community">
        <div id="community" class="scrollTo"></div>
        <div class="container">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/community.jpg" alt="Sculpt in Haus Reformer Pilates">
            </div>
            <div class="text">
                <div class="inner white">
                    <h2>We Are A Community. <br>We Are Sculpt.</h2>
                    <p>More than just a Pilates Studio, Sculpt in Haus encourages it's members to join in the regular social events that Sculpt hosts, making this much more than just a place of fitness, but a genuine community.</p>
                    <p>Established by Amy Hughes, ultra-marathon runner and fitness instructor, the studio provides a wide-range of classes designed for every fitness level, featuring individual and group classes of both Mat and Reformer Pilates. Sculpt also offers corporate classes, both in-studio and at your place of business.</p>
                    <p>Women's Health magazine acknowledged the studio as one of the top Reformer Pilates studios in the UK.</p>
                </div>
            </div>
        </div>
    </section>
</div>


<section class="ctaSec">
    <div class="container onScreen">
        <div class="titleWrapper">
            <h2 class="pink">Join The Team</h2>
        </div>
        <p>Think you've got what it takes to be part of the fantastic Sculpt team? Send us your CV!</p>
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
        tl.to('.images', { opacity: 1, duration: .5 });

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