<?php
/* 
Plugin Name: Theme Styles
Plugin URI: http://quanticalabs.com
Description: CSS theme styles for QuanticaLabs themes.
Author: QuanticaLabs
Version: 2.1
Author URI: http://quanticalabs.com
*/

require_once(plugin_dir_path(__FILE__).'include.php');

/******************************************************************************/

$ThemeStyle=new TSThemeStyle();

TSInclude::includeFile(get_template_directory().'/ts_config.php');

$ThemeStyle->prepareLibrary();

register_activation_hook(__FILE__,array($ThemeStyle,'pluginActivation'));

if(is_admin())
{
	add_action('admin_init',array($ThemeStyle,'adminInit'));
	add_action('admin_menu',array($ThemeStyle,'adminMenuInit'));
	
	add_action('wp_ajax_admin_save_panel',array($ThemeStyle,'adminSavePanel'));
	
	add_action('admin_notices',array($ThemeStyle,'adminNotice'));
}
else 	 
{	
	add_action('wp_enqueue_scripts',array($ThemeStyle,'publicInit'));
}

load_plugin_textdomain(PLUGIN_THEME_STYLE_DOMAIN,false,dirname(plugin_basename(__FILE__)).'/languages/');