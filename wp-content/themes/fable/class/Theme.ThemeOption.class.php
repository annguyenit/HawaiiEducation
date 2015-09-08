<?php

/******************************************************************************/
/******************************************************************************/

class ThemeOption
{
	/**************************************************************************/
	
	static function createOption($refresh=false)
	{
		$GlobalData=new ThemeGlobalData();
		return($GlobalData->setGlobalData(THEME_OPTION_GLOBAL_ARRAY_KEY,array('ThemeOption','createOptionObject'),$refresh));				
	}
	
	/**************************************************************************/
	
	static function createOptionObject()
	{	
		return((array)get_option(THEME_OPTION_PREFIX));
	}
	
	/**************************************************************************/
	
	static function refreshOption()
	{
		return(self::createOption(true));
	}
	
	/**************************************************************************/
	
	static function getOption($name)
	{
		global $fable_globalData;

		self::createOption();

		if(!array_key_exists($name,$fable_globalData[THEME_OPTION_GLOBAL_ARRAY_KEY])) return(null);
		return($fable_globalData[THEME_OPTION_GLOBAL_ARRAY_KEY][$name]);		
	}
	
	/**************************************************************************/
	
	static function getGlobalOption($post,$name)
	{
		self::createOption();

		$value=0;
		if(is_object($post)) 
		{
			$option=self::getPostMeta($post);

			if(array_key_exists($name,(array)$option)) $value=$option[$name];
			if($value==-1) $value=self::getOption($name);
		}
		else $value=self::getOption($name);
			
		return($value);
	}
	
	/**************************************************************************/
	
	static function getOptionObject()
	{
		global $fable_globalData;
		return($fable_globalData[THEME_OPTION_GLOBAL_ARRAY_KEY]);
	}
	
	/**************************************************************************/
	
	static function updateOption($option)
	{
		$nOption=array();
		foreach($option as $index=>$value) $nOption[$index]=$value;
		
		$oOption=self::refreshOption();

		update_option(THEME_OPTION_PREFIX,array_merge($oOption,$nOption));
		
		self::refreshOption();
	}
	
	/**************************************************************************/
	
	static function resetOption()
	{
		update_option(THEME_OPTION_PREFIX,array());
		self::refreshOption();		
	}
	
	/**************************************************************************/
	
	static function getPostMeta($post)
	{
		$id=is_object($post) ? $post->ID : (int)$post;
		return(get_post_meta($id,THEME_OPTION_PREFIX,true));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/