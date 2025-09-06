<?php
/**
 * Retreats Template
 */

get_header(); ?>

<section class="hero justText withSmall">
    <div class="container">
        <div class="text">
            <h1 style="opacity:0;" class="withSmall"><span class="smallPink">Pure Indulgence</span><br>Sculpt's Luxury Pilates Retreats</h1>
        </div>
        <div class="description" style="opacity:0;transform:translateY(50px);">
            <p>Escape the hustle and bustle of daily life with our rejuvenating Pilates retreats. Immerse yourself in tranquillity and wellness, designed to refresh your mind and body without the headaches of everyday life.</p>
        </div>
    </div>
</section>
<div class="introGradient borderBottom">
    <section class="fullImage" style="opacity:0;transform:translateY(50px);">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/retreats.jpg" alt="Sculpt in Haus Reformer Pilates Teacher Luxury Pilates Retreats">
        </div>
    </section>
   
<?php
// Get current date for comparison
$today = date('Y-m-d');

// Get all retreats first, then filter by date in PHP
$all_retreats = new WP_Query(array(
    'post_type' => 'retreats',
    'posts_per_page' => -1,
    'meta_key' => 'start_date',
    'orderby' => 'meta_value',
    'order' => 'ASC'
));

$upcoming_retreats = array();
$past_retreats = array();

if ($all_retreats->have_posts()) {
    while ($all_retreats->have_posts()) {
        $all_retreats->the_post();
        
        $start_date = get_field('start_date');
        if ($start_date) {
            // Convert ACF date from d/m/Y to Y-m-d for comparison
            $date_obj = DateTime::createFromFormat('d/m/Y', $start_date);
            if ($date_obj) {
                $formatted_date = $date_obj->format('Y-m-d');
                
                if ($formatted_date >= $today) {
                    $upcoming_retreats[] = get_post();
                } else {
                    $past_retreats[] = get_post();
                }
            }
        }
    }
    wp_reset_postdata();
}

// Sort upcoming retreats by date (closest first)
usort($upcoming_retreats, function($a, $b) {
    $date_a = DateTime::createFromFormat('d/m/Y', get_field('start_date', $a->ID));
    $date_b = DateTime::createFromFormat('d/m/Y', get_field('start_date', $b->ID));
    return $date_a <=> $date_b;
});

// Sort past retreats by date (most recent first)
usort($past_retreats, function($a, $b) {
    $date_a = DateTime::createFromFormat('d/m/Y', get_field('start_date', $a->ID));
    $date_b = DateTime::createFromFormat('d/m/Y', get_field('start_date', $b->ID));
    return $date_b <=> $date_a;
});
?>

<section class="allRetreats">
    <div class="container">
        <div class="titleWrapper">
            <h2>Upcoming Retreats</h2>
        </div>
        <div class="retreatsWrapper">
            <?php if (!empty($upcoming_retreats)) : ?>
                <?php foreach ($upcoming_retreats as $retreat) : ?>
                    <div class="retreat onScreen">
                        <div class="left">
                            <div class="imageWrapper">
                                <?php
                                $main_image = get_field('main_image', $retreat->ID);
                                if ($main_image) :
                                ?>
                                    <img src="<?php echo esc_url($main_image['sizes']['custom_medium']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="right">
                            <h3><?php echo get_the_title($retreat->ID); ?></h3>
                            <div class="retreat-dates">
                                <?php 
                                $start_date = get_field('start_date', $retreat->ID);
                                $end_date = get_field('end_date', $retreat->ID);
                                
                                if ($start_date && $end_date) {
                                    $start_formatted = DateTime::createFromFormat('d/m/Y', $start_date)->format('jS M');
                                    $end_formatted = DateTime::createFromFormat('d/m/Y', $end_date)->format('jS M Y');
                                    echo '<p>' . $start_formatted . ' - ' . $end_formatted . '</p>';
                                }
                                ?>
                            </div>
                            <div class="retreat-description">
                                <?php 
                                $short_teaser = get_field('short_teaser_intro', $retreat->ID);
                                if ($short_teaser) {
                                    echo '<p>' . $short_teaser . '</p>';
                                }
                                ?>
                            </div>
                            <a href="<?php echo get_permalink($retreat->ID); ?>" class="button pink"><span>Find out more</span></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No upcoming retreats scheduled.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php if (!empty($past_retreats)) : ?>

<section class="pastRetreats">
    <div class="container">
        <div class="titleWrapper">
            <h2>Past Retreats</h2>
        </div>
        <div class="retreatsWrapper">
                <?php foreach ($past_retreats as $retreat) : ?>
                    <div class="retreat onScreen">
                        <div class="left">
                            <div class="imageWrapper">
                                <?php
                                $main_image = get_field('main_image', $retreat->ID);
                                if ($main_image) :
                                ?>
                                    <img src="<?php echo esc_url($main_image['sizes']['custom_medium']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="right">
                            <h3><?php echo get_the_title($retreat->ID); ?></h3>
                            <div class="retreat-dates">
                                <?php 
                                $start_date = get_field('start_date', $retreat->ID);
                                $end_date = get_field('end_date', $retreat->ID);
                                
                                if ($start_date && $end_date) {
                                    $start_formatted = DateTime::createFromFormat('d/m/Y', $start_date)->format('jS M');
                                    $end_formatted = DateTime::createFromFormat('d/m/Y', $end_date)->format('jS M Y');
                                    echo '<p>' . $start_formatted . ' - ' . $end_formatted . '</p>';
                                }
                                ?>
                            </div>
                            <div class="retreat-description">
                                <?php 
                                $short_teaser = get_field('short_teaser_intro', $retreat->ID);
                                if ($short_teaser) {
                                    echo '<p>' . $short_teaser . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

</div>

<section class="ctaSec">
    <div class="container onScreen">
        <div class="titleWrapper">
            <h2 class="pink">Be the first to hear about Our upcoming Retreats</h2>
        </div>
        <p>Simply email us to receive exclusive updates on upcoming retreats and wellness experiences.</p>
        <a href="<?php echo home_url('/contact-us'); ?>" class="button pink"><span>Register Interest</span></a>
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
        tl.to('.fullImage', { y: 0, opacity: 1, duration: .5 }, "-=0.25");

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