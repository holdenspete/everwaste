<section class="relatedBlogs">
    <div class="container">
        <div class="titleWrapper">
            <h3>Related Blogs</h3>
        </div>
        <div class="postsWrapper">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : ?>
                <div class="posts-grid">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php 
                            $categories = get_the_category();
                            $category_slugs = array();
                            if ($categories) {
                                foreach($categories as $category) {
                                    $category_slugs[] = $category->slug;
                                }
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>" class="post-item card" data-category="<?php echo implode(' ', $category_slugs); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="post-content">
                                    <h2><?php the_title(); ?></h2>
                                    <p>
                                        <?php 
                                            $excerpt = wp_trim_words(get_the_excerpt(), 16, '...');
                                            echo $excerpt;
                                        ?>
                                    </p>
                                    <div class="post-categories">
                                        <?php
                                        $categories = get_the_category();
                                        if ($categories) {
                                            foreach($categories as $category) {
                                                echo esc_html($category->name) . ' ';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="read">
                                        <span><?php the_field('read_time'); ?> min read</span>
                                        <!-- <span>7 min read</span> -->
                                    </div>
                                    <div class="button readButton">Read blog</div>
                                </div>
                            </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata();
            else : ?>
                
            <?php endif; ?>
        </div>
        <a href="<?php echo esc_url(home_url('/news')); ?>" 
        class="backTo <?php echo $back_class; ?>" 
        <?php if ($came_from_news): ?>onclick="event.preventDefault(); window.history.back();"<?php endif; ?>>
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none">
                <path fill="#010101" d="M10.89 3.55a.75.75 0 0 0-.074.983l.067.077 4.575 4.64H3.75a.75.75 0 0 0-.094 1.494l.094.006h11.708l-4.575 4.64a.75.75 0 0 0-.06.984l.067.077a.75.75 0 0 0 .984.06l.077-.068 5.833-5.916a.75.75 0 0 0 .066-.977l-.066-.077-5.833-5.916a.75.75 0 0 0-1.06-.008Z"/>
            </svg>
            <?php echo $back_text; ?>
        </a>
    </div>
</section>