<?php
/**
 * Timetables Template
 */

get_header(); ?>

<section class="hero justText withSmall">
    <div class="container">
        <div class="text">
            <h1 style="opacity:0;" class="withSmall"><span class="smallPink">What's On</span><br>Class Timetables</h1>
        </div>
        <div class="description" style="opacity:0;transform:translateY(50px);">
            <p>Ready to join a class? View our timetables and book through LegitFit. Simply create your account or log in to reserve your spot and access all our classes in one convenient location.</p>
        </div>
    </div>
</section>
<div class="introGradient borderBottom">
    <section class="studio manchester" style="opacity:0;transform:translateY(50px);">
        <div class="container">
            <div class="top">
                <div class="text">
                    <h2>Manchester Studio</h2>
                    <p>18 Lloyd street, <br>Lloyd house, <br>Manchester, <br>M2 5WA</p>
                </div>
                <div class="timeTable">
                    <iframe width="100%" height="800" frameborder="0" src="https://legitfit.com/t/sculptinhaus" title="LegitFit Public Timetable"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="studio wilmslow onScreen">
        <div class="container">
            <div class="top">
                <div class="text">
                    <h2>Wilmslow Studio</h2>
                    <p>12 Alderley Rd, <br>Wilmslow <br>SK9 1JX</p>
                </div>
                <div class="timeTable">
                    <iframe width="100%" height="700" frameborder="0" src="https://legitfit.com/t/sculptinhauswilmslow" title="LegitFit Public Timetable"></iframe>
                </div>
            </div>
        </div>
    </section>
    
</div>

<section class="ctaSec">
    <div class="container">
        
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
        tl.to('.manchester', { y: 0, opacity: 1, duration: .5 }, "-=0.25");

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