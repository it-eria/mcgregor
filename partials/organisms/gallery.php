<section class="pb-5">
    <div class="container">
        <div class="title-default">
            <h2><?php _e('Gallery', 'custom'); ?></h2>
        </div>
        <div class="gallery-slider">
        <?php 
        $images = get_field('gallery_with_me');
        if( $images ): 
        foreach( $images as $image ): ?>
        <img src="<?php echo $image['url']; ?>" alt="img" />     
        <?php endforeach; 
        endif; ?>         
        </div>
        <div class="nav-arrows-container">
            <div id="other-news-left">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/gallery-left-arrow.png" alt="img" />
            </div>
            <div class="dots-container"></div>
            <div id="other-news-right">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/gallery-right-arrow.png" alt="img" />
            </div>
        </div>
    </div>
</section>