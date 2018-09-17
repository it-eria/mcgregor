<?php
$wpb_all_query = new WP_Query(array('post_type' => 'books_wrapper', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
<?php if ($wpb_all_query->have_posts()) : ?>
<section id="books" data-number="" class="books <?php if(!is_front_page()){?>pad-t-75<?php }?>" style="background-image: url('<?php the_field('books_background_image', 'option'); ?>')">
    <div class="container"> 
        <div class="books__content">
            <div class="title-default">
                <h2><?php _e('Books', 'custom'); ?></h2>
            </div>
            <div class="books__content__block">
                <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                      <div class="books__content__block__main  col-12 col-lg-4">
                      <div class="books__content__block__main__item ">
                          <div class="books__content__block__main__item__image-book d-block ">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full'); ?>
                          </div>
                          <div class="books__content__block__main__item__book-info ">
                              <a target="_blank" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                              <?php the_content(); ?>
                              <a target="_blank" href="<?php the_permalink(); ?>" class="books-button"><?php _e('Read more', 'custom'); ?></a>
                          </div> 
                      </div>
                      <div class="books__content__block__main__link">
                          <a target="_blank" href="<?php the_field('url_for_book'); ?>"><?php the_field('url_for_book'); ?></a>
                      </div>
                  </div>
               <?php endwhile; ?> 
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
    <?php }?>
</section>
<?php endif;
wp_reset_query(); ?>