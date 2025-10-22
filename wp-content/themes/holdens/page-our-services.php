<?php
/**
 * Our Services Template
 */

get_header(); ?>


<section class="servicesHero">
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
                    <h1><?php the_field('hero_title'); ?></h1>
                    <?php the_field('hero_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rootedServices" style="opacity: 0;">
    <div class="container">   
        <div class="bg onScreen"></div>
        
        <div class="text">
            <div class="inner">
                <?php the_field('recovery_title'); ?>
                <?php the_field('recovery_description'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>our-services/recover-recycle" class="button yellow">Learn more</a>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft">
                <?php 
                $recovery_image = get_field('recovery_image');
                if($recovery_image): ?>
                    <img src="<?php echo esc_url($recovery_image['url']); ?>" alt="<?php echo esc_attr($recovery_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="servicesCommitted">
    <div class="container"> 
        <div class="bg onScreen"></div>       
        <div class="imageWrapper">
            <div class="inner maskBottomRight">
                <?php 
                $landfill_image = get_field('landfill_image');
                if($landfill_image): ?>
                    <img src="<?php echo esc_url($landfill_image['url']); ?>" alt="<?php echo esc_attr($landfill_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="text">
            <div class="inner">
                <?php the_field('landfill_title'); ?>
                <?php the_field('landfill_description'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>our-services/disposal-landfill" class="button yellow">Learn more</a>
            </div>
        </div>        
    </div>
</section>

<section class="servicesPowered">
    <div class="container">   
        <div class="bg onScreen"></div>
        <div class="text">
            <div class="inner">
                <?php the_field('hazard_title'); ?>
                <?php the_field('hazard_description'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>our-services/hazardous-waste-management" class="button yellow">Learn more</a>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft">
                <?php 
                $hazard_image = get_field('hazard_image');
                if($hazard_image): ?>
                    <img src="<?php echo esc_url($hazard_image['url']); ?>" alt="<?php echo esc_attr($hazard_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="example">
    <div class="container"> 
        <div class="bg onScreen"></div>       
        <div class="imageWrapper">
            <div class="inner maskBottomRight">
                <?php 
                $collections_image = get_field('collections_image');
                if($collections_image): ?>
                    <img src="<?php echo esc_url($collections_image['url']); ?>" alt="<?php echo esc_attr($collections_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="text">
            <div class="inner">
                <?php the_field('collections_title'); ?>
                <?php the_field('collections_description'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>our-services/collections-skips" class="button yellow">Learn more</a>
            </div>
        </div>        
    </div>
</section>

<?php include 'contactForm.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(SplitText) 
   
    // GSAP timeline for .reveal
    if (window.gsap) {
        const tl = gsap.timeline();
    
        const reveal = document.querySelector('.servicesHero .reveal');
        const heroShape = document.querySelector('.servicesHero .text .shape');
        const textWrapper = document.querySelector('.servicesHero .text .inner');
        const rootedServices = document.querySelector('.rootedServices');
        
        tl.to(reveal, { opacity: 0, duration: .5, delay: 1.25 });
        tl.to(heroShape, { right: '0%', duration: .5, ease: "expo.out" });
        tl.to(textWrapper, { opacity: 1, duration: .3 }, "-=0.25");
        tl.to(rootedServices, { opacity: 1, duration: .3 }, "-=0.3");
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