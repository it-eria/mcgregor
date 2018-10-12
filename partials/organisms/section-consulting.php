<section id="consulting" data-number="" class="consulting" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/consulting-bg.jpg')">
    <div class="container">
        <div class="consulting__content">
        <?php   
            $box_title = get_the_title(20);
            $custom_class = '';
            include get_template_directory() . '/partials/molecules/title-h2-default.php';
             $my_query = new WP_Query('page_id=20');
                while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID;?> 
            <div class="consulting__content__main">
                <div class="consulting__content__main__info col-12 col-lg-8 ">
                    <?php the_content(); ?>
                </div> 
                <div class="consulting__content__main__image-bg col-12 col-lg-4">
                <?php the_post_thumbnail('full'); ?>
                </div>
            </div>
            <?php endwhile; 
             wp_reset_query(); ?> 
        </div>
    </div>
<?php if(is_front_page()){ ?>  
    <div class="home__copyright">
        <div class="container">
        <?php include get_template_directory() . '/partials/molecules/copyright.php'; ?>            
        </div>
    </div>
    <?php }    
    else { ?>
<!--        <style>-->
<!--        .consulting {-->
<!--            height: 97vh;-->
<!--        }-->
<!--        </style>-->
    <?php }
    ?>  
</section>