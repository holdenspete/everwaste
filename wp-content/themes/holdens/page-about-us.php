<?php
/**
 * About Us Template
 */

get_header(); ?>

<section class="aboutHero">
    <div class="container">   
        <div class="bg"></div>
        <div class="text">
            <div class="inner" style="opacity:0;transform:translateY(50px);">
                <?php the_field('hero_title'); ?>
                <?php the_field('hero_description'); ?>
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

<section class="aboutWhy" style="opacity:0;">
    <div class="container"> 
        <div class="imageWrapper">
            <div class="inner maskBottomRight">
                <?php 
                $why_image = get_field('why_image');
                if($why_image): ?>
                    <img src="<?php echo esc_url($why_image['url']); ?>" alt="<?php echo esc_attr($why_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="text">
            <div class="inner">
                <?php the_field('why_title'); ?>
                <?php the_field('why_description'); ?>
            </div>
        </div>        
    </div>
</section>

<section class="sustainability">
    <div class="container">   
        <div class="bg onScreen"></div>
        <div class="text">
            <div class="inner">
                <?php the_field('sustainability_title'); ?>
                <?php the_field('sustainability_description'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>sustainability" class="button green">Learn more</a>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft">
                <?php 
                $sustainability_image = get_field('sustainability_image');
                if($sustainability_image): ?>
                    <img src="<?php echo esc_url($sustainability_image['url']); ?>" alt="<?php echo esc_attr($sustainability_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="aboutCommitted">
    <div class="container"> 
        <div class="bg onScreen"></div>       
        <div class="imageWrapper">
            <div class="inner maskBottomRight">
                <?php 
                $committed_image = get_field('committed_image');
                if($committed_image): ?>
                    <img src="<?php echo esc_url($committed_image['url']); ?>" alt="<?php echo esc_attr($committed_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="text">
            <div class="inner">
                <?php the_field('committed_title'); ?>
                <?php the_field('committed_description'); ?>
            </div>
        </div>        
    </div>
</section>

<section class="aboutPowered">
    <div class="container">   
        <div class="bg onScreen"></div>
        <div class="text">
            <div class="inner">
                <?php 
                $powered_title = get_field('powered_title');
                $powered_description = get_field('powered_description');
          
                if($powered_title) {
                    echo $powered_title;
                }
                if($powered_description) {
                    echo $powered_description;
                }
                ?>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft">
                <?php 
                $powered_image = get_field('powered_image');
                if($powered_image): ?>
                    <img src="<?php echo esc_url($powered_image['url']); ?>" alt="<?php echo esc_attr($powered_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="accreds">
    <div class="container">
        <div class="title">
            <h2>Our accreditations.</h2>
        </div>
        <div class="logos">
            <div class="logo onScreen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SafeContractor-colour.png" alt="Alcumus Safe Contractor">
            </div>
            <div class="logo onScreen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CIWM.jpg" alt="CIWM Affiliate Organisation 2024">
            </div>
        </div>
    </div>
</section>

<section class="halves">
    <div class="container">
        <div class="half onScreen">
            <div class="text">
                <h3><?php the_field('advanced_title'); ?></h3>
                <?php the_field('advanced_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none" viewBox="0 0 26 26"><path fill="#fff" d="M11.926 26a1.06 1.06 0 0 1-.775-.311 1.04 1.04 0 0 1-.315-.772V14.67L.239 1.76Q-.166 1.22.116.61t.98-.61h23.808q.699 0 .98.61t-.123 1.15L15.164 14.67v10.247q0 .46-.31.771a1.04 1.04 0 0 1-.77.312zM13 12.188l7.305-8.938H5.65z"/></svg>
            </div>
        </div>
        <div class="half onScreen">
            <div class="text">
                <h3><?php the_field('resource_title'); ?></h3>
                <?php the_field('resource_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 26 34" xmlns="http://www.w3.org/2000/svg" width="26" height="34" fill="none" viewBox="0 0 26 34"><path fill="#fff" d="M13 34 1.167 24.917a3 3 0 0 1-.875-1.063A3 3 0 0 1 0 22.542V3Q0 1.763.881.881A2.9 2.9 0 0 1 3 0h20q1.237 0 2.119.881.88.882.881 2.119v19.542q0 .709-.292 1.312a3 3 0 0 1-.875 1.063zm0-3.792L23 22.5V3H3v19.5zM11.25 20l9.167-9.208-2.125-2.125-7.042 7.083-3.542-3.542-2.125 2.125zM13 3H3h20z"/></svg>
            </div>
        </div>
    </div>
</section>

<?php include 'contactForm.php'; ?>

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
        const why = document.querySelector('.aboutWhy');
        
        tl.to(image, { opacity: 1, duration: 1, delay: .25 });
        tl.to(reveal, { opacity: 0.7, duration: .5, left: 0, ease: "expo.out" }, "-=0.5");
        tl.to(textWrapper, { opacity: 1, duration: .3, y: 0 }, "-=0.3");
        tl.to(why, { opacity: 1, duration: .5 }, "-=0.25");
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