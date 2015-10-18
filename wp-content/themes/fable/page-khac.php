<?php
$cateObj = get_category_by_slug('khac');
$categoryIds = $cateObj->term_id;
$postObj = new ThemeBlog();
$postObj->setCategoryIds($categoryIds);
$data = $postObj->getPost();
?>
<div class="pb-team pb-team-template-2 pb-clear-fix" id="pb_team_<?php echo $cateObj->term_id ?>">
    <ul class="pb-layout-50x50 pb-reset-list pb-clear-fix">
<?php
$count = 0;
if ( $data->have_posts() ) : while ( $data->have_posts() ) : $data->the_post(); ?>
<?php 
    $full = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 2);
?>
    <li class="pb-layout-column-<?php echo $count++%2==0 ? 'left' :'right' ?>" style="visibility: visible;">
        <div class="pb-layout-50x50 pb-clear-fix">
            <div class="pb-layout-column-left" style="visibility: visible;">
                <div class="pb-image-box pb-image-preloader-animation-enable pb-image-hover pb-image-hover-type-fade pb-image-text-enable" style="height: auto; background-image: none;">
                    <a href="<?php echo get_post_permalink(); ?>" style="opacity: 1;">
                        <img src="<?php echo NULL !== $thumbnail[0] ? $thumbnail[0] : 'http://placehold.it/246x263'; ?>" alt="">
                    </a>
                <div class="pb-image-text" style="opacity: 1;">
                    <h6 class="pb-image-text-caption"><a style="text-decoration: none;" href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a></h6>
                </div>
                </div>
            </div>

            <div class="pb-layout-column-right" style="visibility: visible;">
                <div class="pb-team-quote-box"></div>
                <div class="pb-team-text-box">
                    <p><?php echo the_excerpt_max_charlength(200); ?></p>
                </div>
            </div>
        </div>
    </li>
<?php endwhile; endif; ?>
    </ul>			
</div>
<?php wp_reset_query(); ?>
        
