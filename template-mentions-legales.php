<?php
/*
Template Name: Mentions légales
*/
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
        <article class="mentions-legales">
        <div class="separator"></div>
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        </article>
        <?php
    endwhile;
endif;
get_footer();
?>