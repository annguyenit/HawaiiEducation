<?php

/******************************************************************************/
/******************************************************************************/

class TSInclude
{
	/**************************************************************************/
	
	static function isPHPFile($path)
	{
		return(strtolower(mb_substr($path,-3,3,'UTF-8'))=='php' ? true : false);
	}
	
	/**************************************************************************/
	
	static function includeClass($path,$class=array())
	{
		foreach($class as $className)
		{
			if(class_exists($className)) return(false);
		}
		
		return(self::includeFile($path));
	}
	
	/**************************************************************************/
	
	static function includeFile($path)
	{
		if(TSFile::fileExist($path)!==true) return(false);
		if(self::isPHPFile($path)!==true) return(false);
		
		require_once($path);
		
		return(true);
	}
	
	/**************************************************************************/
	
	static function includeFileFromDir($path)
	{
		$file=TSFile::scanDir($path);
		if($file===false) return(false);
		
		foreach($file as $value)
			self::includeFile($path.$value);
		
		return(true);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/