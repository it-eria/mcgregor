<!-- Jquery -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/jquery-3.3.1.js"></script>
    <!-- Slick slider -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/slick.min.js"></script>
    <!-- Animate on scroll -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/aos.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/bootstrap.js"></script>
    <!-- onepage -->
    <?php if(is_front_page()) { ?>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/jquery.onepage-scroll_new.js"></script>
        <script>
            $(".main").onepage_scroll({
                responsiveFallback: 992,
                sectionContainer: "section",
                easing: "ease",
                animationTime: 800,
                pagination: false,
                updateURL: false,
                beforeMove: function(index) {
                    $('*[data-js="scroll-bar"]').mouseenter(function(e) {
                        $.fn.disable();
                    }).mouseleave(function(e) {
                        $.fn.enable();
                    });
                },
                afterMove: function(index) {
                    var windowWidth = $(window).width();
                    $('body').width(--windowWidth);
                    $('body').width(++windowWidth);
                },
                loop: false,
                keyboard: true,
                direction: "vertical"
            });
        </script>

    <?php }?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/script.min.js?v=1.2"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/partials/custom.js?v=1.7"></script>
<?php wp_footer(); ?>
</body>
</html>