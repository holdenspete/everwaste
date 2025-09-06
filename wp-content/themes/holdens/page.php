<?php
/**
 * Default Page Template
 * Used for About, Contact, Services, etc.
 */

get_header(); ?>

<style>
.site-footer::before {
    background-color: #102210;
}
h1 {
    margin-top: 3rem;
    text-align: center;
    margin-bottom: 3rem;
}
.page-content .container h2, .page-content .container h3 {
    margin-top: 2rem;
    margin-bottom: 3rem;
} {
    padding-left: 1.5rem;
}
.page-content .container ul {
    padding-left: 1.5rem;
}
.page-content .container {
    padding-top: 3rem;
    padding-bottom: 6rem;
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
}
</style>

<?php while (have_posts()) : the_post(); ?>

    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <h1 style="opacity:0;" class="page-title"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="page-content" style="opacity:0;transform:translateY(50px);">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>

<?php endwhile; ?>

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
            
            const h1 = document.querySelector('.page-hero h1');
            
            if (h1 && window.SplitText) {
                const split = new SplitText([h1], { type: "words,chars" });
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
            tl.to('.page-content', { y: 0, opacity: 1, duration: .5 }, "-=0.65");

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