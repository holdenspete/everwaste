<?php
/**
 * Contact Us Template
 */

get_header(); ?>

<section class="aboutHero">
    <div class="container">   
        <div class="bg" style="opacity:0;"></div>
        <div class="text">
            <div class="inner" style="opacity:0;transform:translateY(50px);">
                <?php the_field('hero_title'); ?>
                <?php the_field('hero_description'); ?>
                <p class="email"><a href="mailto:<?php the_field('hero_email'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="21" fill="none" viewBox="0 0 27 21"><path fill="#fe0" d="M2.7 21a2.64 2.64 0 0 1-1.907-.771Q0 19.458 0 18.375V2.625Q0 1.542.793.771A2.64 2.64 0 0 1 2.7 0h21.6q1.113 0 1.907.771.793.771.793 1.854v15.75q0 1.083-.793 1.854A2.64 2.64 0 0 1 24.3 21zm10.8-9.187L2.7 5.25v13.125h21.6V5.25zm0-2.626 10.8-6.562H2.7zM2.7 5.25V2.625v15.75z"/></svg><?php the_field('hero_email'); ?></a></p>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft" style="opacity:0;">
                <?php 
                $hero_image = get_field('hero_image');
                if($hero_image): ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<div class="contactWrap" style="opacity:0;">
    <?php include 'contactForm.php'; ?>
</div>
<section class="map">
    <div class="container">        
        <div class="titleWrapper">
            <h3><strong>Our locations.</strong></h3>
        </div>
        <?php include 'map.php'; ?>
    </div>
</section>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(SplitText) 
   
    // GSAP timeline for .reveal
    if (window.gsap) {
        const tl = gsap.timeline();
    
        const image = document.querySelector('.aboutHero .imageWrapper .inner');
        const reveal = document.querySelector('.aboutHero .bg');
        const textWrapper = document.querySelector('.aboutHero .text .inner');
        const contactWrap = document.querySelector('.contactWrap');
        
        tl.to(image, { opacity: 1, duration: 1, delay: .25 });
        tl.to(reveal, { opacity: 0.7, duration: .5, left: "-12%", ease: "expo.out" }, "-=0.5");
        tl.to(textWrapper, { opacity: 1, duration: .3, y: 0 }, "-=0.3");
        tl.to(contactWrap, { opacity: 1, duration: .5 }, "-=0.25");
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