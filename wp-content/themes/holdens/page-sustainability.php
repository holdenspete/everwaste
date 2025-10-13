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
                <img class="heroTab" src="/wp-content/themes/holdens/assets/images/hero.jpg" alt="Everwaste - Specialist Waste Solutions">
                <img class="heroMob" src="/wp-content/themes/holdens/assets/images/heroMobile.jpg" alt="Everwaste - Specialist Waste Solutions">
            </div>
            <iframe 
                class="mobVid"
                id="vimeoPlayer"
                src="https://player.vimeo.com/video/1117466915?badge=0&amp;&amp;autoplay=1&amp;loop=1&amp;autopause=0&amp;muted=1&amp;background=1" 
                allow="autoplay; fullscreen; picture-in-picture" 
                allowfullscreen="" 
                title="Everwaste - Specialist Waste Solutions" 
                data-ready="true" 
                frameborder="0"></iframe>
            <iframe 
                class="tabVid"
                id="vimeoPlayer"
                src="https://player.vimeo.com/video/1115441329?badge=0&amp;&amp;autoplay=1&amp;loop=1&amp;autopause=0&amp;muted=1&amp;background=1" 
                allow="autoplay; fullscreen; picture-in-picture" 
                allowfullscreen="" 
                title="Everwaste - Specialist Waste Solutions" 
                data-ready="true" 
                frameborder="0"></iframe>
            <div class="text">
                <div class="shape" style="right: 150%;"></div>
                <div class="inner" style="opacity: 0;">                    
                    <h1><?php the_field('hero_title'); ?></h1>
                    <?php the_field('hero_description'); ?>
                </div>
            </div>
        </div>
        
        <script src="https://player.vimeo.com/api/player.js"></script>
        <script>
            var player = new Vimeo.Player('vimeoPlayer');
            player.ready().then(function() {
                document.getElementById('vimeoPlayer').classList.add('loaded');
            });
        </script>
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
                <h2 class="green"><?php the_field('model_title'); ?></h2>
                <?php the_field('model_description'); ?>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/example.jpg" alt="Everwaste - Sustainability that leads by example.">
            </div>
        </div>
        <div class="text">
            <div class="inner">
                <h2 class="green"><?php the_field('core_title'); ?></h2>
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
                <svg viewBox="0 0 32 23" xmlns="http://www.w3.org/2000/svg" width="32" height="23" fill="none" viewBox="0 0 32 23"><path fill="#fff" d="M16.073 23q-4.873 0-8.291-3.342T4.364 11.5v-.252l-2.328 2.3L0 11.536l5.818-5.75 5.818 5.75L9.6 13.548l-2.327-2.3v.252q0 3.594 2.563 6.11 2.564 2.515 6.237 2.515.945 0 1.854-.216.909-.215 1.782-.646l2.182 2.156a12 12 0 0 1-2.836 1.186 11.3 11.3 0 0 1-2.982.395m10.109-5.786-5.818-5.75L22.4 9.452l2.327 2.3V11.5q0-3.594-2.563-6.11-2.564-2.514-6.237-2.515-.945 0-1.854.216a8.4 8.4 0 0 0-1.782.646l-2.182-2.156A12 12 0 0 1 12.945.395Q14.4 0 15.927 0q4.873 0 8.291 3.342t3.418 8.158v.252l2.328-2.3L32 11.464z"/></svg>
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
                <h2 class="green"><?php the_field('commitment_title'); ?></h2>
                <?php the_field('commitment_description'); ?>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rooted.jpg" alt="Everwaste - Powered by People">
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