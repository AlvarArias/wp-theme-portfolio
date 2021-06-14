<?php

get_header();

echo '<h2>Pagina test</h2>';
while(have_posts()) {

    the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    
    <?php the_content(); ?>
    
    <?php };
get_footer();

?>