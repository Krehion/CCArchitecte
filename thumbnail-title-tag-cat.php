<?php
/**
 * Custom skin created by Blandine Housset
 * @var $thumbnail
 * @var $post_link
 * @var $title
 * @var $img_origin
 * @var $ico_gallery
 * @var $disable_link
 */
?>
<div class="grid-post-item thumbnail" data-thumbnail-only="1">
    <div class="thumbnail-image" data-img="<?php echo esc_url($thumbnail); ?>">
        <?php if(!empty($thumbnail)): ?>
            <img src="<?php echo esc_attr($thumbnail); ?>" alt="<?php echo esc_html($title); ?>" >
        <?php endif; ?>
        <div class="hover-outer transition-30">
            <?php if($disable_link != 'true'): ?>
                <a href="<?php echo esc_attr($post_link); ?>" title="<?php echo esc_html($title); ?>"></a>
            <?php endif; ?>
            <div class="hover-inner transition-50">
                <?php if(!empty($title)): ?>
                    <div class="post-title">
                        <?php echo esc_html($title); ?>
                        <span class="post-tags"> | <?php 
                            $tag_names = wp_list_pluck(get_the_tags(), 'name');
                            echo esc_html(implode(', ', $tag_names)); 
                            ?></span>
                    </div>
                <?php endif; ?>
                <div class="post-category"><?php 
                    $category_names = wp_list_pluck(get_the_category(), 'name');
                    echo esc_html(implode(', ', $category_names)); 
                    ?></div>
            </div>
        </div>
    </div>
</div>
