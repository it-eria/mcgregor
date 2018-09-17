<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
<div class="main">   
    <?php get_template_part("partials/organisms/section-home"); ?>
    <?php get_template_part("partials/organisms/section-books"); ?>
    <?php get_template_part("partials/organisms/section-speaking"); ?>
    <?php get_template_part("partials/organisms/section-consulting"); ?>
    <?php get_template_part("partials/organisms/section-linkedin"); ?>
    <?php get_template_part("partials/organisms/section-contact"); ?> 
</div>    
<?php get_footer(); ?>  