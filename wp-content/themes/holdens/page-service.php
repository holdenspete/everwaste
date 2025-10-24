<?php
/**
 * Service Template
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

<section class="serviceAbout">
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
                <?php the_field('section_1_title'); ?>
                <?php the_field('section_1_description'); ?>
            </div>
        </div>
    </div>
</section>

<section class="thirds">
    <div class="container">
        <div class="third onScreen">
            <div class="text">
                <h3><?php the_field('section_2_block_1_title'); ?></h3>
                <?php the_field('section_2_block_1_description'); ?>
            </div>
            <div class="svgWrapper">
                <?php echo get_field('section_2_block_1_icon', false, false); ?>
            </div>
        </div>
        <div class="third onScreen">
            <div class="text">
                <h3><?php the_field('section_2_block_2_title'); ?></h3>
                <?php the_field('section_2_block_2_description'); ?>
            </div>
            <div class="svgWrapper">
                <?php echo get_field('section_2_block_2_icon', false, false); ?>
            </div>
        </div>
        <div class="third onScreen">
            <div class="text">
                <h3><?php the_field('section_2_block_3_title'); ?></h3>
                <?php the_field('section_2_block_3_description'); ?>
            </div>
            <div class="svgWrapper">
                <?php echo get_field('section_2_block_3_icon', false, false); ?>
            </div>
        </div>
    </div>
</section>

<section class="rootedServices">
    <div class="container">   
        <div class="bg onScreen"></div>
        <div class="text">
            <div class="inner">
                <?php the_field('section_3_title'); ?>
                <?php the_field('section_3_description'); ?>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft">
                <?php 
                $section_3_image = get_field('section_3_image');
                if($section_3_image): ?>
                    <img src="<?php echo esc_url($section_3_image['url']); ?>" alt="<?php echo esc_attr($section_3_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php 
$section_4_image = get_field('section_4_image');
if($section_4_image): ?>
<section class="example">
    <div class="container"> 
        <div class="bg onScreen"></div>       
        <div class="imageWrapper">
            <div class="inner maskBottomRight">                
                <img src="<?php echo esc_url($section_4_image['url']); ?>" alt="<?php echo esc_attr($section_4_image['alt']); ?>">
            </div>
        </div>
        <div class="text">
            <div class="inner">
                <?php the_field('section_4_title'); ?>
                <?php the_field('section_4_description'); ?>
            </div>
        </div>        
    </div>
</section>
<?php endif; ?>

<section class="why">
    <div class="container">
        <div class="inner onScreen">
            <div class="title">
                <?php the_field('why_title'); ?>
            </div>
            <div class="bottom">
                <?php the_field('why_bullets'); ?>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div class="container">
        <?php if (is_page(12)) { ?>
            <div class="titleWrapper">
                <h3>Where to find our <strong>waste disposal &amp; landfill sites.</strong></h3>
            </div>
        <?php } else { ?>
            <div class="titleWrapper">
                <h3><strong>Our locations.</strong></h3>
            </div>
        <?php } ?>
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
    
        const reveal = document.querySelector('.sustainHero .reveal');
        const heroShape = document.querySelector('.sustainHero .text .shape');
        const textWrapper = document.querySelector('.sustainHero .text .inner');
        const serviceIcon = document.querySelector('.serviceAbout .icon');
        const serviceText = document.querySelector('.serviceAbout .aboutText');
        
        tl.to(reveal, { opacity: 0, duration: .5, delay: 1.25 });
        tl.to(heroShape, { right: '-10%', duration: .5, ease: "expo.out" });
        tl.to(textWrapper, { opacity: 1, duration: .3 }, "-=0.25");
        tl.to(serviceIcon, { y: 0, opacity: .7, duration: .3 }, "-=0.4");
        tl.to(serviceText, { y: 0, opacity: 1, duration: .3 }, "-=0.3");
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