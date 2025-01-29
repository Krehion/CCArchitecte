<?php
/*
Template Name: À propos
*/
get_header();
?>

<section class="a-propos-section">
    <div class="a-propos-bkgd"></div>
    <div class="a-propos-container">
        <div class="separator"></div>
        <h1 class="page-title">Cécile Courgneau Architecte</h1>
        <div class="max-width-container">
            <div class="half-width-container">
                <?php
                // This will allow the client to replace the image via the Block Editor
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full', array( 'class' => 'editable-img' ) );
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/Cecile_Courgneau_Architecte_Claire_Gaillard50.jpg" alt="Portrait de Cécile Courgneau" class="editable-img">';
                }
                ?>
            </div>

            <div class="half-width-container vertical-center-container a-propos-paragraph">
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
    </div>
</section>

<?php get_footer(); ?>