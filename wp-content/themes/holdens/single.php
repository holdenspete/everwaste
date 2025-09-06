<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <section class="hero">
        <div class="container">
            <div class="backWrapper">
                <?php
                // Check if user came from the news page
                $came_from_news = false;
                $back_text = 'News';
                $back_class = 'link-to-news';

                if (isset($_SERVER['HTTP_REFERER'])) {
                    $referrer = $_SERVER['HTTP_REFERER'];
                    $news_url = home_url('/news');
                    
                    // Check if referrer contains the news URL
                    if (strpos($referrer, $news_url) !== false) {
                        $came_from_news = true;
                        $back_text = 'Back';
                        $back_class = 'back-button';
                    } else {
                        $came_from_news = false;
                        $back_text = 'News';
                        $back_class = 'link-to-news';
                    }
                } else {
                    $came_from_news = false;
                    $back_text = 'News';
                    $back_class = 'link-to-news';
                }
                ?>

                <a href="<?php echo esc_url(home_url('/news')); ?>" 
                class="backTo <?php echo $back_class; ?>" 
                <?php if ($came_from_news): ?>onclick="event.preventDefault(); window.history.back();"<?php endif; ?>>
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none">
                        <path fill="#010101" d="M10.89 3.55a.75.75 0 0 0-.074.983l.067.077 4.575 4.64H3.75a.75.75 0 0 0-.094 1.494l.094.006h11.708l-4.575 4.64a.75.75 0 0 0-.06.984l.067.077a.75.75 0 0 0 .984.06l.077-.068 5.833-5.916a.75.75 0 0 0 .066-.977l-.066-.077-5.833-5.916a.75.75 0 0 0-1.06-.008Z"/>
                    </svg>
                    <?php echo $back_text; ?>
                </a>
            </div>
            <div class="cats">
                <?php
                $categories = get_the_category();
                if ($categories) {
                    foreach ($categories as $category) {
                        echo '<span class="cat">' . esc_html($category->name) . '</span>';
                    }
                }
                ?>
            </div>
            <div class="read">
                <span><?php the_field('read_time'); ?> min read</span>
            </div>
            <div class="text">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="share">
                <span>Share:</span>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="linkedin-share">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="#717171" d="M3.429 5.857H0v9.429h3.429V5.857ZM1.714 4.143a1.714 1.714 0 1 0 0-3.429 1.714 1.714 0 0 0 0 3.429ZM11.573 5.214a3.834 3.834 0 0 0-3 1.46v-.817H5.145v9.429h3.428v-6a1.715 1.715 0 0 1 3.429 0v6h3.428V9.072a3.857 3.857 0 0 0-3.857-3.858Z"/></svg>
                </a>
                <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>" 
                    class="email-share">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="none"><g clip-path="url(#a)"><path fill="#5F6368" d="m23.61 13.293-10.087 13.33a.99.99 0 0 1-.866.399c-.356-.016-.625-.183-.809-.5l-6.5-11.259c-.183-.317-.193-.634-.029-.95a.99.99 0 0 1 .78-.551l16.586-2.07c.453-.05.787.113 1.004.488.216.375.19.746-.079 1.113Zm-10.78 10.93 7.763-10.256L7.83 15.562l1.75 3.031 5.947-1.7-4.447 4.298 1.75 3.031Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 12 20.785 0l12 20.785-20.785 12z"/></clipPath></defs></svg>
                </a>
            </div>
            <div class="mainImage">
                <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                } 
                ?>
            </div>
        </div>
    </section>

    <div class="introGradient">
        <section class="textWrapper">
            <div class="container" style="opacity:0;transform:translateY(50px);">
                <?php the_content(); ?> 
                <div class="shareWrapper">
                    <div class="share">
                        <span>Share:</span>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="linkedin-share">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="#717171" d="M3.429 5.857H0v9.429h3.429V5.857ZM1.714 4.143a1.714 1.714 0 1 0 0-3.429 1.714 1.714 0 0 0 0 3.429ZM11.573 5.214a3.834 3.834 0 0 0-3 1.46v-.817H5.145v9.429h3.428v-6a1.715 1.715 0 0 1 3.429 0v6h3.428V9.072a3.857 3.857 0 0 0-3.857-3.858Z"/></svg>
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>" 
                            class="email-share">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="none"><g clip-path="url(#a)"><path fill="#5F6368" d="m23.61 13.293-10.087 13.33a.99.99 0 0 1-.866.399c-.356-.016-.625-.183-.809-.5l-6.5-11.259c-.183-.317-.193-.634-.029-.95a.99.99 0 0 1 .78-.551l16.586-2.07c.453-.05.787.113 1.004.488.216.375.19.746-.079 1.113Zm-10.78 10.93 7.763-10.256L7.83 15.562l1.75 3.031 5.947-1.7-4.447 4.298 1.75 3.031Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 12 20.785 0l12 20.785-20.785 12z"/></clipPath></defs></svg>
                        </a>
                    </div> 
                </div>              
            </div>
        </section>
        <?php include 'related.php'; ?>
    </div>
    

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
            const split = new SplitText(h1, { type: "words,chars" });
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
        tl.to('.introGradient .textWrapper .container', { y: 0, opacity: 1, duration: .5 }, "-=0.65");
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