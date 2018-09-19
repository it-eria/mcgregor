
    <section class="about__block" style="background-image: url('<?php the_field('about_background_image', 'option'); ?>')">
        <div class="container"> 
            <div class="about__block__main">                
            <?php $my_query = new WP_Query('page_id=16');
                while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID;?>
                <div class="about__block__main__info col-12 col-lg-6">                
                <?php   
            $box_title = get_the_title(16);
            $custom_class = '';
            include get_template_directory() . '/partials/molecules/title-h2-default.php';?>                      
                  
                     <?php the_content(); ?>
                </div>               
                <div class="about__block__main__image col-12 col-lg-5">
                <?php the_post_thumbnail('full'); ?>
                </div>
                <?php endwhile; 
             wp_reset_query(); ?>
            </div>
        </div>
    </section>
