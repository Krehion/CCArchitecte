<?php
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
        <article>
            <div><?php the_content(); ?></div>
        </article>
        <?php
    endwhile;
endif;
get_footer();
?>
