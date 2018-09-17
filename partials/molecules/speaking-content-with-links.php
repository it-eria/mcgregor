<?php while( have_rows('quote') ): the_row(); 
$quote_item = get_sub_field('quote_item');
$quote_url = get_sub_field('quote_url');
?>
<div class="speaking__main__posts__item">
    <?php if( $quote_item ): ?>
        <p><?php echo $quote_item; ?></p>
    <?php endif; 
     if( $quote_url ): ?>
        <a target="_blank" href="<?php echo $quote_url; ?>"><?php echo $quote_url; ?></a>
    <?php endif; ?>
</div>
<?php endwhile; ?>