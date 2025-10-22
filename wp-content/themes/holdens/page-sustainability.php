<?php
/**
 * Sustainability Template
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
                    <h1><?php the_field('hero_title'); ?></h1>
                    <?php the_field('hero_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sustainAbout">
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
                <?php the_field('model_title'); ?>
                <?php the_field('model_description'); ?>
            </div>
        </div>
    </div>
</section>

<section class="halves">
    <div class="container">
        <div class="half onScreen">
            <div class="text">
                <h3><?php the_field('progress_title'); ?></h3>
                <?php the_field('progress_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 39 39" xmlns="http://www.w3.org/2000/svg" width="39" height="39" fill="none" viewBox="0 0 39 39"><path fill="#fff" d="M19.51 26.325q2.84 0 4.827-1.99 1.988-1.992 1.988-4.835v-6.825H19.5q-2.844 0-4.834 1.988t-1.99 4.828q0 .984.284 1.918.284.935.812 1.747l-.65.674q-.447.464-.447 1.032 0 .57.447 1.016t1.016.447q.569 0 1.032-.447l.674-.65a6.9 6.9 0 0 0 1.747.813q.934.284 1.918.284M19.5 23.4q-.405 0-.772-.093a7 7 0 0 1-.73-.232l2.6-2.6q.446-.447.446-1.036 0-.59-.447-1.036t-1.036-.447-1.036.447l-2.6 2.6a7 7 0 0 1-.232-.731 3 3 0 0 1-.093-.772q0-1.638 1.131-2.769 1.13-1.131 2.77-1.131h3.9v3.9q0 1.638-1.132 2.769T19.5 23.4m0 13.65-5.484-4.266-6.92-.844-.84-6.956L1.95 19.5l4.308-5.504.837-6.9 6.9-.838L19.5 1.95l5.485 4.306 6.906.813.853 6.947L37.05 19.5l-4.265 5.484-.845 6.92-6.955.84zm0-3.697 4.347-3.372 5.444-.69.69-5.444 3.372-4.347-3.36-4.344-.697-5.452-5.451-.696L19.5 5.647l-4.347 3.372-5.443.69-.691 5.444L5.647 19.5l3.372 4.347.69 5.444 5.444.69z"/></svg>
            </div>
        </div>
        <div class="half onScreen">
            <div class="text">
                <h3><?php the_field('circular_title'); ?></h3>
                <?php the_field('circular_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" viewBox="0 0 34 34"><path fill="#fff" d="M12.805 29.042q-4.256-1.77-6.8-5.549-2.545-3.778-2.545-8.342a15 15 0 0 1 .795-4.84l-2.823 1.613L0 9.444l7.436-4.25 4.295 7.399-2.466 1.416-2.028-3.463a13.5 13.5 0 0 0-.676 2.263q-.238 1.162-.238 2.38 0 3.819 2.167 6.907 2.168 3.09 5.786 4.467zm11.651-18.653V7.556h4.056q-1.71-2.165-4.255-3.444T18.73 2.833q-2.227 0-4.176.748a14 14 0 0 0-3.579 2.007l-1.47-2.48A15.4 15.4 0 0 1 13.758.827Q16.105.001 18.73 0q3.46 0 6.383 1.397a16.3 16.3 0 0 1 5.07 3.758V1.89h2.864v8.5zM23.104 34l-7.436-4.25 4.295-7.359 2.505 1.417-2.028 3.463q4.572-.67 7.635-4.112 3.062-3.444 3.062-7.93a12.5 12.5 0 0 0-.16-2.007h2.904q.08.472.1.964.019.492.019 1.004 0 5.352-3.48 9.523t-8.808 5.234l2.824 1.613z"/></svg>
            </div>
        </div>
    </div>
</section>

<section class="sustainExample">
    <div class="anchor" id="sustainability"></div>
    <div class="container"> 
        <div class="bg onScreen"></div>       
        <div class="imageWrapper">
            <div class="inner maskBottomRight">
                <?php 
                $image = get_field('core_image');
                if($image): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="text">
            <div class="inner">
                <?php the_field('core_title'); ?>
                <?php the_field('core_description'); ?>
            </div>
        </div>        
    </div>
</section>

<section class="thirds">
    <div class="container">
        <div class="third onScreen">
            <div class="text">
                <h3><?php the_field('policy_title'); ?></h3>
                <?php the_field('policy_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 28 28"><path fill="#fff" d="M0 28V5.25L7 0l7 5.25v3.5h14V28zm2.625-2.625H5.25V22.75H2.625zm0-5.542H5.25v-2.625H2.625zm0-5.541H5.25v-2.625H2.625zm0-5.542H5.25V6.125H2.625zm6.125 0h2.625V6.125H8.75zm0 16.625h16.625v-14H8.75zm7.875-8.495v-2.625h6.125v2.625zm0 5.615V19.87h6.125v2.625zm-5.25-5.615v-2.625H14v2.625zm0 5.615V19.87H14v2.625z"/></svg>
            </div>
        </div>
        <div class="third onScreen">
            <div class="text">
                <h3><?php the_field('community_title'); ?></h3>
                <?php the_field('community_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 48 24" xmlns="http://www.w3.org/2000/svg" width="48" height="24" fill="none" viewBox="0 0 48 24"><path fill="#fff" d="M0 24v-2.65q0-1.929 2.075-3.139T7.519 17q.607 0 1.17.025.56.026 1.111.108a8.8 8.8 0 0 0-.6 1.758A8.5 8.5 0 0 0 9 20.75V24zm12 0v-3.25q0-1.6.875-2.925.874-1.325 2.475-2.325t3.825-1.5q2.225-.5 4.825-.5 2.65 0 4.875.5t3.825 1.5 2.45 2.325.85 2.925V24zm27 0v-3.25q0-.993-.175-1.872a7.7 7.7 0 0 0-.575-1.741q.55-.087 1.108-.112A26 26 0 0 1 40.5 17q3.375 0 5.438 1.189Q47.999 19.377 48 21.35V24zm-24-3h18v-.3q0-1.85-2.525-3.025T24 16.5t-6.475 1.175T15 20.75zm-7.521-5.5q-1.429 0-2.454-1.028A3.38 3.38 0 0 1 4 12q0-1.45 1.028-2.475A3.38 3.38 0 0 1 7.5 8.5q1.45 0 2.475 1.025T11 12.021q0 1.429-1.025 2.454T7.479 15.5m33 0q-1.429 0-2.454-1.028A3.38 3.38 0 0 1 37 12q0-1.45 1.028-2.475A3.38 3.38 0 0 1 40.5 8.5q1.45 0 2.475 1.025T44 12.021q0 1.429-1.025 2.454T40.478 15.5M24 12q-2.5 0-4.25-1.75T18 6q0-2.55 1.75-4.275T24 0q2.55 0 4.275 1.725T30 6q0 2.5-1.725 4.25T24 12m.017-3q1.282 0 2.133-.867.85-.868.85-2.15t-.858-2.133T24.018 3t-2.142.857T21 5.983t.867 2.143q.869.875 2.15.875"/></svg>
            </div>
        </div>
        <div class="third onScreen">
            <div class="text">
                <h3><?php the_field('tech_title'); ?></h3>
                <?php the_field('tech_description'); ?>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 32 35" xmlns="http://www.w3.org/2000/svg" width="32" height="35" fill="none" viewBox="0 0 32 35"><path fill="#fff" d="M16.066 35q-1.984 0-3.376-1.37-1.39-1.37-1.39-3.327 0-1.62.99-2.868a4.72 4.72 0 0 1 2.508-1.663v-3.741a6 6 0 0 1-1.117-.437 4 4 0 0 1-.99-.727l-3.205 1.829q.085.291.106.587t.02.618q0 1.957-1.388 3.328-1.389 1.37-3.373 1.37t-3.375-1.37-1.392-3.325 1.39-3.328 3.374-1.372a5 5 0 0 1 1.856.354q.885.352 1.517.976l3.205-1.828a4 4 0 0 1-.127-.582 4.572 4.572 0 0 1 0-1.252q.042-.303.127-.578l-3.289-1.87a4.5 4.5 0 0 1-1.518.977 5 5 0 0 1-1.855.353q-1.985 0-3.374-1.37Q0 13.017 0 11.06q0-1.956 1.389-3.327Q2.778 6.36 4.762 6.36q1.983 0 3.375 1.37t1.391 3.327q0 .333-.02.624-.022.291-.106.582l3.288 1.912q.465-.458.991-.749a5.3 5.3 0 0 1 1.117-.457V9.228a4.72 4.72 0 0 1-2.508-1.663 4.48 4.48 0 0 1-.99-2.868q0-1.957 1.388-3.327Q14.077 0 16.06 0t3.375 1.37 1.391 3.327q0 1.62-.99 2.868a4.72 4.72 0 0 1-2.509 1.663v3.783q.59.165 1.11.455.52.288.956.709l3.246-1.83a6 6 0 0 1-.126-.641 5 5 0 0 1-.042-.647q0-1.958 1.388-3.327 1.389-1.37 3.373-1.37t3.376 1.37q1.39 1.368 1.391 3.325 0 1.956-1.39 3.327-1.389 1.372-3.374 1.372a4.6 4.6 0 0 1-1.821-.353 5 5 0 0 1-1.468-.935l-3.288 1.87q.084.291.105.561t.021.603-.02.603q-.022.27-.106.56l3.246 1.871q.632-.622 1.497-.976a4.8 4.8 0 0 1 1.834-.354q1.985 0 3.374 1.37Q32 21.941 32 23.899q0 1.956-1.389 3.328t-3.373 1.372q-1.983 0-3.375-1.37T22.472 23.9q0-.328.042-.63.042-.3.126-.575l-3.246-1.87q-.421.415-.949.727a4.7 4.7 0 0 1-1.117.478v3.741a4.72 4.72 0 0 1 2.509 1.663q.99 1.246.99 2.868 0 1.957-1.388 3.327Q18.05 35 16.066 35m.042-2.536q.93 0 1.56-.62.63-.621.63-1.538a2.15 2.15 0 0 0-.63-1.562q-.63-.644-1.563-.644-.967 0-1.622.644a2.1 2.1 0 0 0-.654 1.562q0 .917.674 1.538.675.62 1.605.62M4.894 26.063q.93 0 1.56-.62.63-.621.629-1.539 0-.917-.63-1.561-.63-.645-1.562-.645-.968 0-1.623.645a2.1 2.1 0 0 0-.654 1.561q0 .918.675 1.538.674.62 1.605.62m22.387 0q.93 0 1.56-.62.63-.621.63-1.539t-.63-1.561q-.632-.645-1.563-.645-.968 0-1.622.645a2.1 2.1 0 0 0-.655 1.561q0 .918.675 1.538t1.605.62m-11.173-6.401q.93 0 1.56-.621t.63-1.538a2.15 2.15 0 0 0-.63-1.562q-.63-.645-1.563-.644-.967 0-1.622.644a2.1 2.1 0 0 0-.654 1.562q0 .917.674 1.538.675.62 1.605.62M4.81 13.219q.93 0 1.56-.621T7 11.06a2.15 2.15 0 0 0-.63-1.562q-.63-.644-1.563-.644-.968 0-1.622.644a2.1 2.1 0 0 0-.654 1.562q0 .917.674 1.538.675.62 1.605.62m22.472 0q.93 0 1.56-.621t.63-1.538a2.15 2.15 0 0 0-.63-1.562q-.632-.644-1.563-.644-.968 0-1.622.644a2.1 2.1 0 0 0-.655 1.562q0 .917.675 1.538.675.62 1.605.62m-11.173-6.36q.93 0 1.56-.62.63-.622.63-1.539a2.15 2.15 0 0 0-.63-1.562q-.63-.645-1.563-.644-.967 0-1.622.644A2.1 2.1 0 0 0 13.83 4.7q0 .917.674 1.538.675.62 1.605.62"/></svg>                
            </div>
        </div>
    </div>
</section>

<section class="sustainRooted">
    <div class="anchor" id="ourCulture"></div>
    <div class="container">   
        <div class="bg onScreen"></div>
        <div class="text">
            <div class="inner">
                <?php the_field('commitment_title'); ?>
                <?php the_field('commitment_description'); ?>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft">
                <?php 
                $commitment_image = get_field('commitment_image');
                if($commitment_image): ?>
                    <img src="<?php echo esc_url($commitment_image['url']); ?>" alt="<?php echo esc_attr($commitment_image['alt']); ?>">
                <?php endif; ?>
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
    
        const reveal = document.querySelector('.sustainHero .reveal');
        const heroShape = document.querySelector('.sustainHero .text .shape');
        const textWrapper = document.querySelector('.sustainHero .text .inner');
        const aboutIcon = document.querySelector('.sustainAbout .icon');
        const aboutText = document.querySelector('.sustainAbout .aboutText');
        
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

});
</script>
<?php get_footer(); ?>