<!DOCTYPE html>
<html class="<?php if(is_front_page()) { echo ''; } else { echo 'overflow-visible'; }?>" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/favicon.jpg"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/aos.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/slick.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_.css?v=2.2">
    <?php if(is_front_page()) { echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/loader-home.css">'; } ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/home_tabs.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<?php if(is_front_page()){?><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/onepage-scroll.css"><?php }?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/css/vendors/bootstrap-theme.min.css">
    <?php wp_head(); ?>
</head>
<body class="<?php if(is_front_page()) { echo 'wrapper'; } else { echo 'overflow-visible'; }?>">
<?php get_template_part("partials/organisms/header-block"); ?>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>