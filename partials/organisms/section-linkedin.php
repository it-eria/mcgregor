<section id="media" data-number="" class="linkedin-media" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/media-bg.jpg')">
    <div class="container flex-style-resolutions">
        <div class="linkedin-media__main">
            <div class="linkedin-media__main__content col-12 col-lg-6">
                <div class="title-default">
                    <h2>Linkedin</h2>
                </div>
                <div class="linkedin-media__main__content__post">
                    <div class="linkedin-media__main__content__post__image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/author-image.jpg')">
                    </div>
                    <div class="linkedin-media__main__content__post__name">
                        <h2>James McGregor</h2>
                        <p>James McGregor is an American author, journalist and businessman who has lived in China for more than 25 years.<br> Jing’an District, Shanghai, China</p>
                    </div>
                    <div class="linkedin-media__main__content__post__follow">
                        <a href="#"><i class="fa fa-plus"></i>Follow</a>
                    </div>
                </div>
                <div class="linkedin-media__main__content__description scroll-me-all-night-long" data-js="scroll-bar">

                    <p>The Business Roundtable tries to get talks going on the real issues. Mr. Bolten says the Business Roundtable’s plan reflects the growing frustration of U.S. CEOs in dealing with the Chinese government. A lot of our businesses were
                        in the same place as previous administrations in hoping and expecting that China’s entry into the World Trade Organization [in 2001] would be the beginning of a steady and irreversible progress toward China becoming part of the
                        international trading system, like the Western proponents of democratic capitalism,” Mr. Bolten said. “They have been disappointed that progress hasn’t occurred. If anything, there’s been a regression.” <br> <span><img src='<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/earth-image.png'/><a href='#'>See translation</a></span></p>


                    <p>The Business Roundtable tries to get talks going on the real issues. Mr. Bolten says the Business Roundtable’s plan reflects the growing frustration of U.S. CEOs in dealing with the Chinese government. A lot of our businesses were
                        in the same place as previous administrations in hoping and expecting that China’s entry into the World Trade Organization [in 2001] would be the beginning of a steady and irreversible progress toward China becoming part of the
                        international trading system, like the Western proponents of democratic capitalism,” Mr. Bolten said. “They have been disappointed that progress hasn’t occurred. If anything, there’s been a regression.” <br> <span><img src='<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/earth-image.png'/><a href='#'>See translation</a></span></p>

                </div>
                <div class="linkedin-media__main__content__image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/media-image.png')">
                </div>
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
                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/news-image-right.png" alt="image" /></a>
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