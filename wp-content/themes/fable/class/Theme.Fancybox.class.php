<?php

/******************************************************************************/
/******************************************************************************/

class ThemeFancybox
{
	/**************************************************************************/

	function __construct()
	{
		$this->transitionType=array
		(
			'elastic'	=>	array(__('Elastic',THEME_DOMAIN)),
			'fade'		=>	array(__('Fade',THEME_DOMAIN)),
			'none'		=>	array(__('None',THEME_DOMAIN)),
		);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/