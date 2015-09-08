		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Import Google fonts',THEME_DOMAIN); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Click to refresh list of Google fonts.',THEME_DOMAIN); ?><br/>
					<?php esc_html_e('These data are updated automatically every 12 hours. Use this option only when fonts aren\'t visible in theme.',THEME_DOMAIN); ?>
				</span>
				<input type="button" name="<?php ThemeHelper::getFormName('import_google_font'); ?>" id="<?php ThemeHelper::getFormName('import_google_font'); ?>" class="to-button margin-0" value="<?php esc_attr_e('Import',THEME_DOMAIN); ?>"/>
			</li>
		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				$('#<?php ThemeHelper::getFormName('import_google_font'); ?>').bind('click',function(e) 
				{
					e.preventDefault();
					$('#action').val('theme_admin_option_page_import_google_font');
					$('#to_form').submit();
					$('#action').val('theme_admin_option_page_save');
				});
			});
		</script>