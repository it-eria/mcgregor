<section id="contact" data-number="" class="contact" style="background-image: url('<?php echo get_the_post_thumbnail_url(26, 'full'); ?>')">
    <div class="container">
        <div class="contact__main">
            <?php   
                $box_title = get_the_title(26);
                $custom_class = '';
                include get_template_directory() . '/partials/molecules/title-h2-default.php';
                $my_query = new WP_Query('page_id=26');
                    while ($my_query->have_posts()) : $my_query->the_post();
                    $do_not_duplicate = $post->ID;?>
                    <div class="contact__main__description col-lg-5 col-sm-12">
                        <?php the_content(); ?>
                    </div>
            <?php endwhile; 
            wp_reset_query(); ?>
        </div> 
    </div> 
    <?php if(is_front_page()){?>
    <div class="home__copyright d-block d-lg-block">
        <div class="container"> 
           <?php include get_template_directory() . '/partials/molecules/copyright.php'; ?>
        </div>
    </div>
    <?php }
    else { ?>
    <style>.contact {height: 97vh;}</style>
    <?php }?>
</section>