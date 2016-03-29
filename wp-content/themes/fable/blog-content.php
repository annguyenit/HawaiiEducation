<?php
		global $post,$fable_parentPost;

		$Blog=new ThemeBlog();
		$Page=new ThemePage();
		$Post=new ThemePost();
		$Validation=new ThemeValidation();
		$WidgetArea=new ThemeWidgetArea();
		
		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($fable_parentPost->post,true,true);

		$query=$Blog->getPost();
		$postCount=count($query->posts);

		if($postCount)
		{
?>
		<div class="theme-clear-fix">
			
			<ul class="theme-reset-list theme-clear-fix theme-blog">
<?php
			while($query->have_posts())
			{
				$query->the_post();
				
				$excerpt=apply_filters('the_content',get_the_excerpt());
				
				$option=ThemeOption::getPostMeta($post);
				
				ThemeHelper::removeUIndex($option,'post_type');

				$visibleOption=array();

				$visibleOption['post_tag_visible']=ThemeOption::getGlobalOption($post,'post_tag_visible');
				$visibleOption['post_author_visible']=ThemeOption::getGlobalOption($post,'post_author_visible');
				$visibleOption['post_category_visible']=ThemeOption::getGlobalOption($post,'post_category_visible');
				$visibleOption['post_comment_count_visible']=ThemeOption::getGlobalOption($post,'post_comment_count_visible') && comments_open(get_the_id());		
?>
				<li id="post-<?php the_ID(); ?>" <?php post_class('theme-clear-fix theme-post theme-post-type-'.(is_sticky() ? 'sticky' : $option['post_type'])); ?>>
<?php
				$Post->formatPostDate($post->post_date,$day,$month,$year);
				$headerImportance=$widgetAreaData['location']==0 ? 2 : 4;
?>
					<div class="theme-post-section-header">
						<h<?php echo $headerImportance; ?> class="theme-post-header">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h<?php echo $headerImportance; ?>>
<!--                                                <div class="theme-post-date">
                                                    <?php 
//                                                        $currentlang = get_bloginfo('language');
//                                                        if ($currentlang == 'vi') {
//                                                            echo $day.'/'.$month.'/'.$year;
//                                                        }elseif($currentlang == 'en-US') {
//                                                            echo $month.' '.$day.', '.$year;  
//                                                        }
                                                    ?>
                                                </div>-->
					</div>
<?php
				switch($option['post_type'])
				{
					case 'audio':
					case 'video':
					case 'image_slider':
						
						if($option['post_type']=='image_slider')
							$option['post_type_preambule']=preg_replace('/\[pb_nivo_slider/','[pb_nivo_slider url="'.get_permalink().'" ',$option['post_type_preambule']);
						
						$preambule=do_shortcode($option['post_type_preambule']);
						if($Validation->isNotEmpty($preambule))
						{
?>
					<div class="theme-post-section-icon">
						<div class="theme-post-icon"></div>
					</div>
					
					<div class="theme-post-section-preambule">
						<?php echo $preambule; ?>
					</div>
<?php
						
						}
						
					break;
				
					default:
						
						/*if(has_post_thumbnail())
						{					
?>
					<div class="theme-post-section-icon">
						<div class="theme-post-icon theme-post-icon"></div>
					</div>
					
					<div class="theme-post-section-preambule">
						<div class="pb-image-box pb-image-preloader pb-image-preloader-animation-enable pb-image-hover pb-image-hover-type-fade">
							<a href="<?php the_permalink(); ?>" class="pb-image">
								<?php echo get_the_post_thumbnail(get_the_ID(),$Page->getImageClass($widgetAreaData['location'])); ?>
								<span><span><span></span></span></span>
							</a>
						</div>
					</div>
<?php						
						}*/						
				}
				
				if(in_array(true,$visibleOption))
				{
?>
					<div class="theme-post-section-meta">
						
						<div class="theme-post-meta">
<?php
					if($visibleOption['post_tag_visible']==1) echo $Post->createTagList();
					if($visibleOption['post_category_visible']==1) echo $Post->createCategoryList();
					
					if($visibleOption['post_author_visible']==1)
					{
?>
							<div class="theme-post-meta-author"><?php the_author(); ?></div>
<?php
					}
					if($visibleOption['post_comment_count_visible']==1)
					{
?>
							<div class="theme-post-meta-comment-count"><a href="<?php the_permalink(); ?>#comments"><?php comments_number(); ?></a></div>							
<?php
					}
?>
						</div>
						
					</div>
<?php
				}
?>
					<div class="theme-post-section-content">
						<div class="theme-post-content"><?php echo $excerpt; ?></div>
					</div>
					
					<div class="theme-post-section-button">
						<a href="<?php the_permalink(); ?>" class="theme-post-button-continue"><?php esc_html_e('Continue reading',THEME_DOMAIN); ?><i class="pb-button-arrow pb-button-arrow-right"></i></a>
					</div>	
					
					<div class="theme-post-section-divider">
						<div class="theme-post-divider"></div>
					</div>

				</li>
<?php
			}
?>
			</ul>

			<?php echo $Blog->createPagination($query); ?>

		</div>
<?php
		}
		else echo do_shortcode('[pb_notice icon="bell_alt.png" icon_bg_color="FE6500"][pb_notice_first_line]'.__('Error',THEME_DOMAIN).'[/pb_notice_first_line][pb_notice_second_line]'.__('No post found.',THEME_DOMAIN).'[/pb_notice_second_line][/pb_notice]');