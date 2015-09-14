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

/******************************************************************************/
/******************************************************************************/