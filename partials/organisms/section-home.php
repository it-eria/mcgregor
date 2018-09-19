<section id="about" class="home" style="background-image: url('<?php the_field('main_image'); ?>')">
    <img src="<?php the_field('main_mobile_image'); ?>" alt="image" class="d-block d-lg-none" style="width: 100%" />
    <div class="container">
        <div class="home__main">
            <div class="home__main__content">
                <h2><?php the_field('main_title'); ?></h2>
                <?php the_field('main_description'); ?>
                <a href="<?php the_permalink(16); ?>" class="home-button"><?php _e('Read More', 'custom'); ?></a>
             </div>
        </div>
    </div>
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
</section> 