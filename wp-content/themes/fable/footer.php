<div class="language-switcher">
    <a href='/' class='flag-vi <?php echo 'vi' == pll_current_language() ? 'active' : '' ?>'></a>
    <a href='/en/home' class='flag-en <?php echo 'en' == pll_current_language() ? 'active' : '' ?>'></a>
</div>

<?php 
    if ('vi' == pll_current_language()) {
        $text = 'Đăng ký khóa học';
        $class_trigger = 'trigger-open-popup-vi';
    }
    if ('en' == pll_current_language()) {
        $text = "Register courses";
        $class_trigger = 'trigger-open-popup-en';
    }
?>
<a class="register-course <?php echo $class_trigger; ?>"><?php echo $text; ?></a>
<?php
		global $fable_parentPost;

		$Page=new ThemePage();
		$Validation=new ThemeValidation();
		$WidgetArea=new ThemeWidgetArea();

		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($fable_parentPost->post,true,true);
		$class=$WidgetArea->getWidgetAreaCSSClass($widgetAreaData);

		$template=$Page->getCurrentTemplate();
		
		if($template!='main.php')
		{
			if($widgetAreaData['location']==1)
			{
?>
						</div>
<?php
			}
			elseif($widgetAreaData['location']==2)
			{
?>
						</div>
						<div class="theme-column-right"><?php $WidgetArea->create($widgetAreaData); ?></div>	
<?php
			}
		}
?>
					</div>
				
				</div>
<?php
		$widgetAreaFooterEnable=false;
		if(ThemeOption::getOption('footer_top_enable')==1)
		{
			$widgetAreaData=$WidgetArea->getWidgetAreaByPost($fable_parentPost->post,false,true);
			$layout=$WidgetArea->setWidgetAreaLayout($widgetAreaData['id']);
			
			if($widgetAreaData['id'] && $widgetAreaData['location'])
				$widgetAreaFooterEnable=true;
		}
		
		if((ThemeOption::getOption('footer_enable')==1) && (($widgetAreaFooterEnable) || (ThemeOption::getGlobalOption($post,'footer_bottom_enable')==1)))
		{
?>
				<div class="theme-footer theme-clear-fix">
<?php
			if($widgetAreaFooterEnable)
			{
				$style=array();
				
				if($Validation->isNotEmpty(ThemeOption::getOption('footer_top_background_image_src')))
				{
					$style['background-image']='url(\''.ThemeOption::getOption('footer_top_background_image_src').'\')';
					
					$style['background-repeat']=ThemeOption::getOption('footer_top_background_image_repeat');
				
					if($Validation->isNotEmpty(ThemeOption::getOption('footer_top_background_image_position')))
						$style['background-position']=ThemeOption::getOption('footer_top_background_image_position');
				
					$style['background-size']=ThemeOption::getOption('footer_top_background_image_size_1');
					if(in_array($style['background-size'],array('length','percentage')))
						$style['background-size']=ThemeOption::getOption('footer_top_background_image_size_2');				
				}
?>
					<div class="theme-footer-top theme-clear-fix"<?php echo ThemeHelper::createStyleAttribute($style); ?>>

						<div class="theme-main <?php echo $layout; ?>">
							<?php $WidgetArea->create($widgetAreaData); ?>
						</div>
						
						<?php $WidgetArea->unsetWidgetAreaLayout(); ?>
						
					</div>
<?php
			}
			if(ThemeOption::getGlobalOption($post,'footer_bottom_enable')==1)
			{
				$content=ThemeOption::getOption('footer_bottom_content');
				if($Validation->isNotEmpty($content))
				{
?>
					<div class="theme-footer-bottom theme-clear-fix">
						<div class="theme-main theme-clear-fix">
							<?php echo do_shortcode($content); ?>
                                                        <?php 
                                                            $currentlang = get_bloginfo('language');
                                                            if ($currentlang == 'vi') {
                                                        ?>
                                                                <div class="aligncenter pb-margin-top-20"><?php echo 'Công ty TNHH Hawaii. Copyright © 2015 đã đăng ký bản quyền'; ?></div>
                                                        <?php
                                                            }elseif($currentlang == 'en-US') {
                                                        ?>
                                                                <div class="aligncenter pb-margin-top-20"><?php echo 'Copyright © 2015 Hawaii Co.,Ltd - All rights reserved.'; ?></div>
                                                        <?php
                                                            }
                                                        ?>
                                                        
						</div>
					</div>
<?php
				}
			}
?>
				</div>
<?php
		}
		
		if($Validation->isNotEmpty(ThemeOption::getOption('custom_js_code')))
		{
?>
				<script type="text/javascript">
					<?php echo ThemeOption::getOption('custom_js_code'); ?>
				</script>
<?php
		}
		
		if(ThemeOption::getOption('go_to_page_top_enable')==1)
		{
?>
				<a href="#<?php echo esc_attr(ThemeOption::getOption('go_to_page_top_hash')); ?>" id="theme-go-to-top"></a>
<?php
		}
		
		wp_footer();
?>
			</body>
			
		</html>
<?php 
		ob_end_flush();