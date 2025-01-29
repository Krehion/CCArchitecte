<?php
/*
Template Name: Article Custom
Template Post Type: post
*/
?>

<?php
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
        <article>
            <?php echo do_shortcode('[meta_gallery_slider show_caption="false" show_title="false" autoplay="true" autoplay_speed="5000" slider_height="700"]'); ?> 
            <p class="article-photographer">Crédit photo : 
                <span class="editable-content credit-photo">
                    <?php
                    // Output content for the "Crédit photo" section
                    echo get_post_meta(get_the_ID(), 'credit_photo', true);
                    ?>
                </span>
            </p>
            <div class="separator separator-article"></div>
            <h1 class="article-title"><?php the_title(); ?><span class="article-tags"> | <?php $tag_names = wp_list_pluck(get_the_tags(), 'name'); echo esc_html(implode(', ', $tag_names)); ?></span></h1>
            <p class="article-category"><?php $category_names = wp_list_pluck(get_the_category(), 'name'); echo esc_html(implode(', ', $category_names)); ?></p>

            <section class="article-container">            
                <div class="article-table-cell">
                    <h3 class="article-info">Lieu</h3>
                    <div class="editable-content lieu-content">
                        <?php
                        // Output content for the "Lieu" section
                        echo get_post_meta(get_the_ID(), 'lieu_content', true);
                        ?>
                    </div>
                </div>
                <div class="article-table-cell">
                    <h3 class="article-info">Surface</h3>
                    <div class="editable-content surface-content">
                        <?php
                        // Output content for the "Surface" section
                        echo get_post_meta(get_the_ID(), 'surface_content', true);
                        ?>
                    </div>
                </div>
                <div class="article-table-cell">
                    <h3 class="article-info">Programme</h3>
                    <div class="editable-content programme-content">
                        <?php
                        // Output content for the "Programme" section
                        echo get_post_meta(get_the_ID(), 'programme_content', true);
                        ?>
                    </div>
                </div>
                <div class="article-table-cell">
                    <h3 class="article-info">Mission</h3>
                    <div class="editable-content mission-content">
                        <?php
                        // Output content for the "Mission" section
                        echo get_post_meta(get_the_ID(), 'mission_content', true);
                        ?>
                    </div>
                </div>
                <div class="article-table-cell">
                    <h3 class="article-info">Livraison</h3>
                    <div class="editable-content livraison-content">
                        <?php
                        // Output content for the "Livraison" section
                        echo get_post_meta(get_the_ID(), 'livraison_content', true);
                        ?>
                    </div>
                </div>
            </section>
        </article>
        <?php
    endwhile;
endif;
get_footer();
