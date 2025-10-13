<section class="contactFormSec">
    <div class="anchor" id="getInTouch"></div>
    <div class="container">
        <div class="inner onScreen">
            <div class="title">
                <?php the_field('get_in_touch', 2); ?>
            </div>
            <div class="bottom">
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="208520d" title="Contact form"]'); ?>
                </div>
                <div class="text">
                    <?php the_field('get_in_touch_description', 2); ?>
                </div>
            </div>
        </div>
    </div>
</section>