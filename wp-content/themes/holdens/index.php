<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title">Medium length hero headline goes here</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
        </div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-wrapper">
            <div class="filter">
                <?php
                $categories = get_categories();
                if ($categories) : ?>
                    <ul class="category-filter">
                        <li><a href="#" class="active" data-category="all">All</a></li>
                        <?php foreach ($categories as $category) : ?>
                            <li><a href="#" data-category="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="postsWrapper">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 12,
                    'paged' => $paged
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

                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'total' => $query->max_num_pages,
                            'current' => $paged,
                            'prev_text' => 'Prev',
                            'next_text' => 'Next'
                        ));
                        ?>
                    </div>
                    <?php wp_reset_postdata();
                else : ?>
                    <div class="posts-grid">
                        <p>No posts found.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<style>
.loading {
    text-align: center;
    padding: 40px;
    width: 100%;
    font-size: 18px;
}
</style>
<?php get_footer(); ?>