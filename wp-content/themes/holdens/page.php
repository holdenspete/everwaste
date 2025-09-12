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
    margin-top: 3rem;
    margin-bottom: 2.5rem;
} 

.page-content .container p {
    margin-bottom: 2rem;
}
.page-content .container ul {
    padding-left: 1.5rem;
    margin-bottom: 2rem;
}
.page-content .container {
    padding-top: 3rem;
    padding-bottom: 6rem;
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
}

@media (min-width: 1100px) {
    .page-content .container ul li {
        font-size: 1.15rem;
    }   
}
</style>

<?php while (have_posts()) : the_post(); ?>

    <section class="page-hero" style="opacity:0;transform:translateY(50px);">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-title"><?php the_title(); ?></h1>
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
            tl.to('.page-hero', { y: 0, opacity: 1, duration: .5 });
            tl.to('.page-content', { y: 0, opacity: 1, duration: .5 }, "-=0.5");
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