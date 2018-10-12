<section id="media" data-number="" class="linkedin-media"
         style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/media-bg.jpg')">
    <div class="container flex-style-resolutions">
        <div class="linkedin-media__main">
            <div class="linkedin-media__main__content col-12 col-lg-6">
                <div class="title-default">
                    <h2>Linkedin</h2>
                </div>
                <?php
                //add by ira.che 10.10.2018
                echo do_shortcode('[li_card]');
                $linkedin_code = get_field("linkedin_embed_code");
                if ($linkedin_code) {
                    echo $linkedin_code;
                } else {
                    echo '<iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6452304837953548288" height="653" width="504" frameborder="0" allowfullscreen=""></iframe>';
                }
                echo '<a href="https://www.linkedin.com/in/jlmcgregor/detail/recent-activity/" target="_blank">' . _("Look recent posts") . '</a>';
                //end of add by ira.che 10.10.2018
                ?>
                <?php // echo do_shortcode('[li_card]'); ?>
                <!--                --><?php //echo do_shortcode('[li_profile]'); ?>
                <!-- <div class="linkedin-media__main__content__image" style="background-image: url('<?php // echo get_stylesheet_directory_uri(); ?>/*/html_template/build/assets/img/media-image.png')"></div>-->
            </div>
            <div class="linkedin-media__main__media col-12 col-lg-6">
                <div class="linkedin-media__main__media__title">
                    <h2>Media</h2>
                </div>
                <div class="linkedin-media__main__media__posts scroll-me-all-night-long" data-js="scroll-bar">
                    <?php

                    //echo do_shortcode('[li_recommendations]');
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
                        <div class="tab">
                        <input id="id-media" type="checkbox" name="tabs" class="d-lg-none d-block">
                        <label for="id-media">Media news</label>
                        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                                <div class="tab-content">

                                    <div class="linkedin-media__main__media__posts__item">
                                        <div class="linkedin-media__main__media__posts__item__news">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/news-image-left.png"
                                                 alt="image"/>
                                            <p><?php echo get_cat_name(3); ?></p>
                                            <a target="_blank" href="<?php the_field('news_url'); ?>"><img
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/news-image-right.png"
                                                        alt="image"/></a>
                                        </div>
                                        <div class="linkedin-media__main__media__posts__item__description">
                                            <p><?php the_title(); ?> </p>
                                            <a target="_blank"
                                               href="<?php the_field('news_url'); ?>"><?php the_field('news_url'); ?></a>
                                        </div>
                                        <div class="linkedin-media__main__media__posts__item__time">
                                            <p><?php the_field('news_date'); ?></p>
                                        </div>
                                    </div>
                                </div>



                            <!--                            <div class="linkedin-media__main__media__posts__item">-->
                            <!--                                <div class="linkedin-media__main__media__posts__item__news">-->
                            <!--                                    <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/html_template/build/assets/img/news-image-left.png"-->
                            <!--                                         alt="image"/>-->
                            <!--                                    <p>--><?php //echo get_cat_name(3); ?><!--</p>-->
                            <!--                                    <a target="_blank" href="--><?php //the_field('news_url'); ?><!--"><img-->
                            <!--                                                src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/html_template/build/assets/img/news-image-right.png"-->
                            <!--                                                alt="image"/></a>-->
                            <!--                                </div>-->
                            <!--                                <div class="linkedin-media__main__media__posts__item__description">-->
                            <!--                                    <p>--><?php //the_title(); ?><!-- </p>-->
                            <!--                                    <a target="_blank"-->
                            <!--                                       href="--><?php //the_field('news_url'); ?><!--">--><?php //the_field('news_url'); ?><!--</a>-->
                            <!--                                </div>-->
                            <!--                                <div class="linkedin-media__main__media__posts__item__time">-->
                            <!--                                    <p>--><?php //the_field('news_date'); ?><!--</p>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        <?php endwhile; ?>
                        </div>
                    <?php endif;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>

    <?php if (is_front_page()) { ?>
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

    <?php } else { ?>
        <style>
            .about__copyright-default {
                bottom: 0;
            }

            .linkedin-media {
                padding: 80px 0;
            }
        </style>
    <?php } ?>
</section>