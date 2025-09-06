<?php
/**
 * FAQs Template
 */

get_header(); ?>

<section class="hero justText">
    <div class="container">
        <div class="text" style="opacity:0;">
            <h1 class="headerOne">Frequently Asked Questions</h1>
        </div>
        <div class="description" style="opacity:0;transform:translateY(50px);">
            <p>Welcome to our FAQ section, where we address your most pressing inquiries. Here, you'll find valuable insights about our studio, classes, and policies to enhance your experience.</p>
        </div>
    </div>
</section>
<div class="introGradient borderBottom">
    
    <section class="faqWrapper">
        <div class="container">
        <?php if( have_rows('faq') ): ?>
        <div class="faq-accordion">
        <?php $i = 0; while( have_rows('faq') ): the_row();
        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        $is_active = $i === 0 ? '' : '';
        ?>
        <div class="faq-item <?php echo $is_active; ?>">
        <button class="faq-question" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>" aria-controls="faq-answer-<?php echo $i; ?>" id="faq-question-<?php echo $i; ?>">
        <?php echo esc_html($question); ?>
        <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer" id="faq-answer-<?php echo $i; ?>">
        <div class="faq-answer-content">
        <?php echo wp_kses_post($answer); ?>
        </div>
        </div>
        </div>
        <?php $i++; endwhile; ?>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.faq-item');
            
            items.forEach((item, idx) => {
                const btn = item.querySelector('.faq-question');
                
                btn.addEventListener('click', function() {
                    const isCurrentlyActive = item.classList.contains('active');
                    
                    // Close all items first
                    items.forEach((otherItem) => {
                        const otherQuestion = otherItem.querySelector('.faq-question');
                        otherItem.classList.remove('active');
                        otherQuestion.setAttribute('aria-expanded', 'false');
                    });
                    
                    // If the clicked item wasn't active, open it
                    if (!isCurrentlyActive) {
                        item.classList.add('active');
                        btn.setAttribute('aria-expanded', 'true');
                    }
                });
            });
        });
        </script>
        <?php endif; ?>
        </div>
        </section>
</div>

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
            const text = document.querySelector('.hero .text');
            const h1 = document.querySelector('.hero h1');
            if (h1 && window.SplitText) {
                const split = new SplitText([h1], { type: "words,chars" });
                gsap.set(split.chars, { y: 80, opacity: 0 });
                gsap.set(text, { opacity: 1 });
                tl.to(split.chars, {
                    y: 0,
                    opacity: 1,
                    duration: 0.6,
                    stagger: 0.03,
                    ease: "power3.out"
                });
            }
            tl.to('.description', { y: 0, opacity: 1, duration: .5 }, "-=0.65");

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