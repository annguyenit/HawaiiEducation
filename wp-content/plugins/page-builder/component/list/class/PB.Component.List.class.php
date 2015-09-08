<?php

/******************************************************************************/
/******************************************************************************/

class PBComponentList extends PBComponent
{
	/**************************************************************************/

	function __construct()
	{
		$this->bullet=array();
		$this->bullet['file']=array();
		
		$bullet=(array)PBComponentData::get($this->getComponentId(),'bullet');

		$this->bullet['url']=$bullet['url'];
		$this->bullet['url_retina']=$bullet['url_retina'];
		
		$this->bullet['path']=$bullet['path'];
		$this->bullet['css_class']=$bullet['css_class'];
			
		$file=PBFile::scanDir($bullet['path']);
		if(is_array($file)) $this->bullet['file']=array_combine($file,$file);

		$this->style=array
		(
			'list'																=>	array
			(
				'use'															=>	2,
				'path'															=>	$this->getStyleURL(),
				'file'															=>	'style.css'
			)
		);	
		
		$this->component=array
		(
			'name'																=>	__('List',PLUGIN_PAGE_BUILDER_DOMAIN),
			'description'														=>	__('Displays list',PLUGIN_PAGE_BUILDER_DOMAIN),
			'structure'															=>	array
			(
				'window'														=>	array
				(
					'title'														=>	__('List',PLUGIN_PAGE_BUILDER_DOMAIN)
				),
				'element'														=>	array
				(
					array
					(
						'id'													=>	'bullet',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('Bullet',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('Select bullet of the list element',PLUGIN_PAGE_BUILDER_DOMAIN)
							),
							'element'											=>	array
							(
								'type'											=>	'select-one',
								'dictionary'									=>	array
								(
									'source'									=>	$this->bullet['file']
								)
							)
						)
					),
					array
					(
						'id'													=>	'list',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('List',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('Content of the list',PLUGIN_PAGE_BUILDER_DOMAIN)
							),
							'element'											=>	array
							(
								'type'											=>	'editor'
							)
						),
						'visibility'											=>	1,
						'shortcode'												=>	array
						(
							'path'												=>	'@content'
						)
					),					
					array
					(
						'id'													=>	'css_class',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('CSS class',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('List of CSS classes defined in CSS files separated by space.',PLUGIN_PAGE_BUILDER_DOMAIN)
							)
						)
					),					
				)
			)
		);	

		parent::__construct();
	}
	
	/**************************************************************************/
	
	function createCSS($code=null,$retina=false)
	{
		$CSS=new PBCSS();

		$key=$retina ? 'url_retina' : 'url';
			
		$codeCurrent=null;
		foreach($this->bullet['file'] as $file)
		{
			$codeCurrent.=$CSS->create(array
			(
				'selector'	=>	array
				(
					$this->bullet['css_class'].' div.pb-list.pb-list-'.PBHelper::createHash($file).' ul li'
				),
				'property'	=>	array
				(
					'background-image'	=>	$this->bullet[$key].$file,
				)
			));		
		}
		
		if($retina) $codeCurrent=$CSS->getRetinaMediaQuery($codeCurrent);
		
		$code.=$codeCurrent;
		
		if((PBData::get('retina_ready')==1) && (!$retina))
		{
			$this->createCSS($code,true);
			return;
		}
		
		PBComponentData::set($this->getComponentId(),'css',$code);
	}

	/**************************************************************************/
	
	function processShortcodeList($attribute,$content,$tag)
	{
		$attribute=$this->processAttribute($tag,$attribute);
		
		$Validation=new PBValidation();
		
		$classBullet=null;
		if($Validation->isNotEmpty($attribute['bullet']))
			$classBullet='pb-list-'.PBHelper::createHash($attribute['bullet']);
		
		$class=array('pb-list',$classBullet,$attribute['css_class']);

		$html='<div'.PBHelper::createClassAttribute($class).'>'.PLUGIN_PAGE_BUILDER_SHORTCODE_CONTENT.'</div>';
		
		return(PBHelper::formatHTML($html,$content));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/