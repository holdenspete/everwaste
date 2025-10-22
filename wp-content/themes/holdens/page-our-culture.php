<?php
/**
 * Our Culture Template
 */

get_header(); ?>

<section class="sustainHero">
    <div class="container">
        <div class="videoWrapper">
            <div class="reveal"></div>
            <div class="bgImage">
                <?php 
                $hero_image = get_field('hero_image');
                if($hero_image): ?>
                    <img class="heroTab" src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>">
                <?php endif; ?>
                <?php 
                $hero_image_mobile = get_field('hero_image_mobile');
                if($hero_image_mobile): ?>
                    <img class="heroMob" src="<?php echo esc_url($hero_image_mobile['url']); ?>" alt="<?php echo esc_attr($hero_image_mobile['alt']); ?>">
                <?php endif; ?>
            </div>
            <div class="text">
                <div class="shape" style="right: 150%;"></div>
                <div class="inner" style="opacity: 0;">                    
                    <?php the_field('hero_title'); ?>
                    <?php the_field('hero_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cultureAbout">
    <div class="container">  
        <svg style="opacity: 0;transform: translateY(100px);" class="icon" preserveAspectRatio="none" width="1087" height="560" viewBox="0 0 1087 560" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-198.891 557.498C-197.764 559.069 -195.949 560 -194.016 560L1083.15 560C1085.6 560 1087.02 557.236 1085.59 555.251L688.891 2.50159C687.764 0.931213 685.949 0 684.016 0L-593.154 0C-595.597 0 -597.016 2.76428 -595.592 4.74921L-198.891 557.498Z" fill="url(#paint0_linear_9046_2771)" fill-opacity="0.5"/>
            <defs>
            <linearGradient id="paint0_linear_9046_2771" x1="535.672" y1="458.5" x2="826.055" y2="-206.626" gradientUnits="userSpaceOnUse">
            <stop stop-color="#000833"/>
            <stop offset="1" stop-color="#1900FF"/>
            </linearGradient>
            </defs>
        </svg>
      
        <div class="text aboutText" style="opacity: 0;transform: translateY(100px);">
            <div class="inner">
                <?php the_field('knowledge_title'); ?>
                <?php the_field('knowledge_description'); ?>
            </div>
        </div>
    </div>
</section>

<section class="halves">
    <div class="container">
        <div class="half onScreen">
            <div class="text">
                <h3><?php the_field('growing_title'); ?></h3>
                <?php the_field('growing_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 33 33" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="none" viewBox="0 0 33 33"><path fill="#fff" d="M14.667 33V18.38q-2.934 0-5.638-1.124a14.6 14.6 0 0 1-4.766-3.185A14.3 14.3 0 0 1 1.1 9.304 14.8 14.8 0 0 1 0 3.667V0h3.667q2.888 0 5.591 1.123a14.6 14.6 0 0 1 4.767 3.185 14 14 0 0 1 2.36 3.117 15.6 15.6 0 0 1 1.444 3.62q.23-.32.504-.618.276-.297.596-.619a14.6 14.6 0 0 1 4.767-3.185A14.6 14.6 0 0 1 29.333 5.5H33v3.667a14.6 14.6 0 0 1-1.123 5.637 14.6 14.6 0 0 1-3.185 4.767 14.35 14.35 0 0 1-4.744 3.162 14.7 14.7 0 0 1-5.615 1.1V33zm0-18.333q0-2.2-.848-4.194a11.2 11.2 0 0 0-2.407-3.552A11.2 11.2 0 0 0 7.86 4.515a10.6 10.6 0 0 0-4.193-.848q0 2.2.825 4.216a10.8 10.8 0 0 0 2.383 3.575 10.8 10.8 0 0 0 3.575 2.384q2.016.825 4.217.825m3.666 5.5q2.2 0 4.194-.825a10.9 10.9 0 0 0 3.552-2.384 11.1 11.1 0 0 0 2.406-3.575q.848-2.016.848-4.216-2.2 0-4.216.848a11.1 11.1 0 0 0-3.575 2.406 10.85 10.85 0 0 0-3.209 7.746"/></svg>
            </div>
        </div>
        <div class="half onScreen">
            <div class="text">
                <h3><?php the_field('people_title'); ?></h3>
                <?php the_field('people_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 34 33" xmlns="http://www.w3.org/2000/svg" width="34" height="33" fill="none" viewBox="0 0 34 33"><path fill="#fff" d="m11.645 25.749 5.355-3.3 5.355 3.343-1.402-6.253 4.717-4.168-6.205-.564L17 8.9l-2.465 5.862-6.205.565 4.717 4.212zM6.503 33l2.762-12.201L0 12.592l12.24-1.085L17 0l4.76 11.507L34 12.592 24.735 20.8 27.497 33 17 26.53z"/></svg>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="containerInner">
            <div class="titleWrapper">
                <h2><?php the_field('testimonials_title'); ?></h2>
            </div>
            <div class="testimonialsWrapper onScreen">
                <?php if( have_rows('testimonials') ): ?>
                    <?php while( have_rows('testimonials') ): the_row(); ?>
                        <div class="testimonial">
                            <div class="inner">
                                <div class="top">
                                    <h4><?php the_sub_field('author'); ?></h4>
                                    <h5><?php the_sub_field('author_position'); ?></h5>
                                </div>
                                <div class="copy">
                                    <?php the_sub_field('testimonial'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="start">
    <div class="container">
        <div class="inner onScreen">
            <div class="title">
                <h3><?php the_field('start_title'); ?></h3>
            </div>
            <div class="bottom">
                <div class="text">
                    <?php the_field('start_description'); ?>
                    <a href="mailto:enquiries@everwaste.co.uk" class="email"><svg viewBox="0 0 35 27" xmlns="http://www.w3.org/2000/svg" width="35" height="27" fill="none" viewBox="0 0 35 27"><path fill="#fff" d="M3.5 27q-1.443 0-2.472-.991Q0 25.017 0 23.625V3.375Q0 1.983 1.028.991 2.057.001 3.5 0h28q1.443 0 2.472.991Q35 1.983 35 3.375v20.25q0 1.392-1.028 2.384-1.029.99-2.472.991zm14-11.812L3.5 6.75v16.875h28V6.75zm0-3.376 14-8.437h-28zM3.5 6.75V3.375v20.25z"/></svg>enquiries@everwaste.co.uk</a>
                </div>
            </div>
        </div>
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
    
        const reveal = document.querySelector('.sustainHero .reveal');
        const heroShape = document.querySelector('.sustainHero .text .shape');
        const textWrapper = document.querySelector('.sustainHero .text .inner');
        const aboutIcon = document.querySelector('.cultureAbout .icon');
        const aboutText = document.querySelector('.cultureAbout .aboutText');
        
        tl.to(reveal, { opacity: 0, duration: .5, delay: 1.25 });
        tl.to(heroShape, { right: '0%', duration: .5, ease: "expo.out" });
        tl.to(textWrapper, { opacity: 1, duration: .3 }, "-=0.25");
        tl.to(aboutIcon, { y: 0, opacity: .7, duration: .3 }, "-=0.4");
        tl.to(aboutText, { y: 0, opacity: 1, duration: .3 }, "-=0.3");
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

    // Initialize Slick Slider for testimonials
    if (typeof jQuery !== 'undefined' && jQuery.fn.slick) {
        jQuery('.testimonialsWrapper').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            arrows: true,
            dots: false,
            adaptiveHeight: false,
            prevArrow: '<button type="button" class="slick-prev"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="14.5" cy="14.5" r="13.5" stroke="#FFEE00" stroke-width="2"/><path d="M11.8926 9.02246L17.5105 14.6404" stroke="#FFEE00" stroke-width="2" stroke-linecap="round"/><path d="M11.8926 20.2587L17.5105 14.6407" stroke="#FFEE00" stroke-width="2" stroke-linecap="round"/></svg></button>',
            nextArrow: '<button type="button" class="slick-next"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="14.5" cy="14.5" r="13.5" stroke="#FFEE00" stroke-width="2"/><path d="M11.8926 9.02246L17.5105 14.6404" stroke="#FFEE00" stroke-width="2" stroke-linecap="round"/><path d="M11.8926 20.2587L17.5105 14.6407" stroke="#FFEE00" stroke-width="2" stroke-linecap="round"/></svg></button>',
            responsive: [
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 2,
                        adaptiveHeight: false,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        adaptiveHeight: true,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

});
</script>
<?php get_footer(); ?>