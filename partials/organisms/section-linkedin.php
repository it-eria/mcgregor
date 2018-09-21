<section id="media" data-number="" class="linkedin-media" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/media-bg.jpg')">
    <div class="container flex-style-resolutions">
        <div class="linkedin-media__main">
            <div class="linkedin-media__main__content col-12 col-lg-6">
                <div class="title-default">
                    <h2>Linkedin</h2>
                </div>
                <?php // echo do_shortcode('[li_card]'); ?>
                <?php echo do_shortcode('[li_profile]'); ?>
                <div class="linkedin-media__main__content__image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/media-image.png')"></div>
            </div>
            <div class="linkedin-media__main__media col-12 col-lg-6">
                <div class="linkedin-media__main__media__title">
                    <h2>Media</h2>
                </div>
 <div class="linkedin-media__main__media__posts scroll-me-all-night-long" data-js="scroll-bar">
<?php
$currentID = get_the_ID();
$args = array(
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category' => 3,
    'post__not_in' => array($currentID)
);
$wp_query = null;
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : ?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="linkedin-media__main__media__posts__item">
                        <div class="linkedin-media__main__media__posts__item__news">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/news-image-left.png" alt="image" />
                            <p><?php echo get_cat_name(3); ?></p>
                            <a target="_blank" href="<?php the_field('news_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/news-image-right.png" alt="image" /></a>
                        </div>
                        <div class="linkedin-media__main__media__posts__item__description">
                            <p><?php the_title(); ?> </p>
                            <a target="_blank" href="<?php the_field('news_url'); ?>"><?php the_field('news_url'); ?></a>
                        </div>
                        <div class="linkedin-media__main__media__posts__item__time">
                            <p><?php the_field('news_date'); ?></p>
                        </div>
                    </div>
<?php endwhile; 
 endif; 
wp_reset_query(); ?> 
</div>
            </div>
        </div> 
    </div>

    <?php if(is_front_page()){?>
    <div class="home__copyright">
        <div class="container">
            <div class="home__copyright__content">
                <div class="home__copyright__content__info">
                    <p><?php the_field('copyright', 'option'); ?></p>
                </div>
                <div class="home__copyright__content__social">
                <?php include get_template_directory() . '/partials/molecules/social-header.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <?php } 

    else { ?>
<style>
.about__copyright-default {
    bottom: 0;
}

.linkedin-media {
    padding: 80px 0;
}
</style>
    <?php }?>
</section>