<?php

/******************************************************************************/
/******************************************************************************/

require_once('include.php');

$Theme=new Theme();

if(is_admin()) require_once('admin/functions.php');
else require_once('public/functions.php');

add_action('after_setup_theme',array($Theme,'setupTheme'));
add_action('switch_theme',array($Theme,'switchTheme'));

add_filter( 'wpcf7_form_class_attr', 'he_wpcf7_add_class_attr' );

function he_wpcf7_add_class_attr( $class ) {
	$class .= ' pb-contact-form';
	return $class;
}

add_action('after_setup_theme','remove_core_updates');
function remove_core_updates()
{
    if(! current_user_can('update_core')){return;}
    add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
    add_filter('pre_option_update_core','__return_null');
    add_filter('pre_site_transient_update_core','__return_null');
}

remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');

function remove_core_updates2(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates2');
add_filter('pre_site_transient_update_plugins','remove_core_updates2');
add_filter('pre_site_transient_update_themes','remove_core_updates2');

/******************************************************************************/
/******************************************************************************/