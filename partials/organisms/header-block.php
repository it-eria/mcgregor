<header>
    <div class="container">
        <nav>
            <div id="toggle">
                <div class="span" id="one"></div>
                <div class="span" id="two"></div>
                <div class="span" id="three"></div>
            </div>  
        <?php include get_template_directory() . '/partials/molecules/header-logo.php'; ?>
            <?php
                wp_nav_menu( array(
                    'theme_location'  => '',
                    'menu'            => '',
                    'container'       => 'ul',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu', 
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) );
            ?> 
            <div class="mobile-home-social d-lg-none d-block ">
                <?php include get_template_directory() . '/partials/molecules/social-header.php'; ?>
            </div>
        </nav>
        <div id="resize">
        <?php
                wp_nav_menu( array(
                    'theme_location'  => '',
                    'menu'            => '',
                    'container'       => 'ul',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) );
            ?>
        </div>
    </div>
</header>

<!--add by ira.che 10.10.2018-->
<!--<div id="loader-wrapper"><div id="loader"></div></div>-->
<!---end of add by ira.che 10.10.2018--->