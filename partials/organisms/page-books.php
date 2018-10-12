<section class="book-page">
    <div class="container flex-style-resolutions">
        <div class="book-page__main">
        <?php         
        $wpb_all_query = new WP_Query(array('post_type'=>'books_wrapper', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
            <div class="book-page__main__image col-12 col-lg-5">
            <?php the_post_thumbnail('full'); 
        $hero = get_field('images_on_left');	        
        if( $hero ): 
         if( $hero['first_image'] ): ?><img src="<?php echo $hero['first_image']; ?>" alt="" /><?php endif; 
         if( $hero['last_image'] ): ?><img src="<?php echo $hero['last_image']; ?>" alt="" /><?php endif; 
         endif; ?>
            </div>
            <div class="book-page__main__content col-12 col-lg-6">
                <div class="book-page__main__content__info">
                    <h2><?php the_title(); ?></h2>
                    <h4><?php the_field('book_subtitle'); ?></h4>
                    <a href="<?php the_field('url_for_book'); ?>"><?php the_field('url_for_book'); ?></a>
                    <?php
                    if(get_field('link_download_pdf')){
                        ?><p><a target="_blank" href="<?php echo get_field('link_download_pdf'); ?>" class="books-button"><?php _e('For free PDF of this book', 'custom'); ?></a></p>
                    <?php }
                    if(get_field('link_download_epub')){
                        ?><p><a target="_blank" href="<?php echo get_field('link_download_epub'); ?>" class="books-button"><?php _e('For free download this book in EPUB', 'custom'); ?></a></p><?php
                    }
                    ?>
                </div>
            <?php if( have_rows('book_description_container') ): 
            while( have_rows('book_description_container') ): the_row(); 
                $title = get_sub_field('title');
                $description = get_sub_field('description'); ?>
                <div class="book-page__main__content__description">
                <?php if( $title ): ?>
                    <h5><?php echo $title; ?></h5>
                <?php endif; 
                 if( $description ): ?>
                <?php echo $description; 
                endif; ?>                    
                </div>
            <?php endwhile; 
            endif; ?>
            </div>
            <?php endif; 
            wp_reset_query(); ?>
        </div>
    </div>
</section>