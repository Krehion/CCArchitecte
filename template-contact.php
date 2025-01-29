<?php
/*
Template Name: Contact
*/
get_header();
?>

<section class="contact-section">
<div class="contact-bkgd"></div>
<div class="contact-container">
        <div class="separator"></div>
        <h1 class="page-title">Contact</h1>
        <div class="max-width-container contact-info">
            <?php
            // This will allow the client to edit the paragraph via the Block Editor
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content(); // This allows Gutenberg blocks for text content
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>