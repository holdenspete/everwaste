<?php get_header(); ?>


<?php while (have_posts()) : the_post(); ?>

    <section class="hero justText withSmall">
        <div class="container">
            <div class="text">
                <h1 style="opacity:0;" class="withSmall"><span class="smallPink">Sculpt Retreat</span><br><?php the_title(); ?></h1>
            </div>
            <div class="retreat-dates" style="opacity:0;transform:translateX(-50px);">
                <?php 
                $start_date = get_field('start_date');
                $end_date = get_field('end_date');
                
                if ($start_date && $end_date) {
                    $start_formatted = DateTime::createFromFormat('d/m/Y', $start_date)->format('jS M');
                    $end_formatted = DateTime::createFromFormat('d/m/Y', $end_date)->format('jS M Y');
                    echo '<p>' . $start_formatted . ' - ' . $end_formatted . '</p>';
                }
                ?>
            </div>

            <div class="description" style="opacity:0;transform:translateY(50px);">
                <p><?php the_field('short_teaser_intro'); ?></p>
            </div>
        </div>
    </section>

    <div class="introGradient borderBottom">
        <section class="fullImage" style="opacity:0;">
            <div class="container">
                 <?php 
                $main_image = get_field('main_image');
                if ($main_image): ?>
                    <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>">
                <?php endif; ?>
            </div>
        </section>

        <?php if (have_rows('text_and_image')): ?>
            <?php while (have_rows('text_and_image')): the_row(); ?>
                <?php
                static $section_index = 0;
                $section_index++;
                $reverse_class = ($section_index % 2 === 0) ? ' reverse' : '';
                ?>
                <section class="onScreen textImage<?php echo $reverse_class; ?>">
                    <div class="container">
                        <div class="image">
                            <?php 
                            $side_image = get_sub_field('side_image');
                            if ($side_image): ?>
                                <img src="<?php echo esc_url($side_image['url']); ?>" alt="<?php echo esc_attr($side_image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <div class="inner">
                                <?php the_sub_field('text_section'); ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
        <section class="pricing">
            <div class="container">
                <div class="inner onScreen">
                    <h2>Pricing</h2>
                    <?php if (have_rows('pricing')): ?>
                        <div class="pricing-list">
                            <?php while (have_rows('pricing')): the_row(); ?>
                                <div class="pricing-item">
                                    <div class="price-amount">
                                        <?php the_sub_field('price_amount'); ?>
                                    </div>
                                    <div class="price-title">
                                        <h5><?php the_sub_field('price_title'); ?></h5>
                                    </div>
                                    <div class="price-description">
                                        <?php the_sub_field('price_description'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
        // Get retreat FAQs in custom order
        $retreat_faqs = get_posts(array(
            'post_type' => 'retreat_faqs',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_status' => 'publish'
        ));
        ?>

        <section class="faqWrapper">
            <div class="container">
                <div class="titleWrapper">
                    <h3>Got some questions?</h3>
                    <h2>FAQs</h2>
                </div>
                <?php if( $retreat_faqs ): ?>
                    <div class="faq-accordion onScreen">
                        <?php $i = 0; foreach( $retreat_faqs as $faq ): 
                            $question = get_the_title($faq->ID);
                            $answer = apply_filters('the_content', $faq->post_content);
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
                        <?php $i++; endforeach; ?>
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


    <section class="ctaSec">
        <div class="container onScreen">
            <div class="titleWrapper">
                <h2 class="pink">Secure your spot</h2>
            </div>
            <p>All that is required to guarantee your place is a £500 deposit. Spots are allocated on a first come first serve basis.</p>
            <a href="<?php echo home_url('/contact-us'); ?>" class="button pink"><span>Sign Up Now</span></a>
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
        const h1 = document.querySelector('.hero h1');

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
        tl.to('.description', { y: 0, opacity: 1, duration: .5 }, "-=0.65");
        tl.to('.retreat-dates', { x: 0, opacity: 1, duration: .5 }, "-=0.75");
        tl.to('.fullImage', { opacity: 1, duration: .5 });

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