<?php if( have_rows('speaking') ): ?>
<section id="speaking" data-number="" class="speaking" style="background-image: url('<?php the_field('speaking_background_image', 'option'); ?>')">
    <div class="container">
        <div class="speaking__main">
        <?php   
            $box_title = "Speaking";
            $custom_class = '';
            include get_template_directory() . '/partials/molecules/title-h2-default.php';
            ?>
            <div class="speaking__main__block"> 
    <?php while( have_rows('speaking') ): the_row(); 
        $description = get_sub_field('description');
        $mail_url = get_sub_field('mail_url'); 
        $image = get_sub_field('image');     
        include get_template_directory() . '/partials/molecules/speaking-content-info.php'; ?>
        <div class="speaking__main__posts scroll-me-all-night-long col-lg-6 col-12" data-js="scroll-bar">
<?php if( have_rows('quote') ): 
     include get_template_directory() . '/partials/molecules/speaking-content-with-links.php'; 
     endif; ?>
        </div>   
    <?php endwhile; ?>                 
            </div> 
        </div>
    </div>
    <?php if(is_front_page()){?>
    <div class="home__copyright">
        <div class="container">
            <?php include get_template_directory() . '/partials/molecules/copyright.php'; ?>
        </div>
    </div>
    <?php }
    else {} ?>
</section>
<?php endif; ?>