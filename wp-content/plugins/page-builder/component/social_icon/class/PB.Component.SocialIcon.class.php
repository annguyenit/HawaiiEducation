<?php

/******************************************************************************/
/******************************************************************************/

class PBComponentSocialIcon extends PBComponent
{
	/**************************************************************************/

	function __construct()
	{
		$Window=new PBWindow();
		
		$this->icon_url=PBComponentData::get($this->getComponentId(),'icon_url');
		$this->icon_path=PBComponentData::get($this->getComponentId(),'icon_path');
		$this->icon_file=PBComponentData::setFile($this->getComponentId(),'icon_file',$this->icon_path);
		
		$this->style=array
		(
			'social-icon'														=>	array
			(
				'use'															=>	2,
				'path'															=>	$this->getStyleURL(),
				'file'															=>	'style.css'
			)
		);	

		$this->script=array
		(
			'social-icon'														=>	array
			(
				'use'															=>	2,
				'path'															=>	$this->getScriptURL(),
				'file'															=>	'PB.SocialIcon.js'
			)
		);	
		
		$this->social=array();
		
		foreach($this->icon_file as $value)
		{
			$pathinfo=pathinfo($this->icon_path.$value);
			
			$id=$pathinfo['filename'];
			$name=ucfirst(preg_replace(array('/-/','/_/'),' ',$pathinfo['filename']));
			
			$this->social[$id]=array($name,$value);
		}
		
		$group=array
		(
			1																	=>	array
			(
				'header'														=>	__('Dimension',PLUGIN_PAGE_BUILDER_DOMAIN),
				'subheader'														=>	__('Dimension (width,height) of the icon in pixels',PLUGIN_PAGE_BUILDER_DOMAIN)
			),
			2																	=>	array
			(
				'header'														=>	__('Normal state',PLUGIN_PAGE_BUILDER_DOMAIN),
				'subheader'														=>	__('Styles for normal state',PLUGIN_PAGE_BUILDER_DOMAIN)
			),
			3																	=>	array
			(
				'header'														=>	__('Hover state',PLUGIN_PAGE_BUILDER_DOMAIN),
				'subheader'														=>	__('Styles for hover state',PLUGIN_PAGE_BUILDER_DOMAIN)
			),
			4																	=>	array
			(
				'header'														=>	__('Border radius',PLUGIN_PAGE_BUILDER_DOMAIN),
				'subheader'														=>	__('Border radius in order: top left, top right, bottom right, bottom left',PLUGIN_PAGE_BUILDER_DOMAIN)
			),
		);
		
		$start=count($group)+1;
		$i=$start;
		
		foreach($this->social as $index=>$value)
		{
			$group[$i]=array
			(
				'header'														=>	$value[0],
				'subheader'														=>	sprintf(__('Settings for %s',PLUGIN_PAGE_BUILDER_DOMAIN),$value[0])				
			);
			
			$i++;
		}
		
		$this->component=array
		(
			'name'																=>	__('Social Icons',PLUGIN_PAGE_BUILDER_DOMAIN),
			'description'														=>	__('Displays Social Icons',PLUGIN_PAGE_BUILDER_DOMAIN),
			'structure'															=>	array
			(
				'window'														=>	array
				(
					'title'														=>	__('Social Icons',PLUGIN_PAGE_BUILDER_DOMAIN)
				),
				'ui'															=>	array
				(
					'panel'														=>	array
					(
						1														=>	array
						(
							'header'											=>	__('General',PLUGIN_PAGE_BUILDER_DOMAIN)
						),
						2														=>	array
						(
							'header'											=>	__('Styles',PLUGIN_PAGE_BUILDER_DOMAIN)
						),
						3														=>	array
						(
							'header'											=>	__('Profiles',PLUGIN_PAGE_BUILDER_DOMAIN)
						)	
					),
					'group'														=>	$group
				),	
				'element'														=>	array
				(
					array
					(
						'id'													=>	'target',
						'ui'													=>	array
						(
							'panel'												=>	1,
							'text'												=>	array
							(
								'header'										=>	__('Target of the links',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'type'											=>	'radio',
								'dictionary'									=>	array
								(
									'source'									=>	PBHelper::extractDictionary($Window->linkTarget)
								)
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	'_blank'
						)
					),
					array
					(
						'id'													=>	'css_class',
						'ui'													=>	array
						(
							'panel'												=>	1,
							'text'												=>	array
							(
								'header'										=>	__('CSS class',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('List of CSS classes defined in CSS files separated by space',PLUGIN_PAGE_BUILDER_DOMAIN)
							)
						),
					),
					array
					(
						'id'													=>	'native_color_enable',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'text'												=>	array
							(
								'header'										=>	__('Native colors',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	array(__('Use native colors for social icons (for both states: normal and hover)',PLUGIN_PAGE_BUILDER_DOMAIN))
							),
							'element'											=>	array
							(
								'type'											=>	'choice-2'
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	'0'
						)
					),	
					array
					(
						'id'													=>	'width',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	1,
							'text'												=>	array
							(
								'label'											=>	__('Width in pixels',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'attribute'										=>	array
								(
									'maxlength'									=>	'3'
								)
							),
						)
					),					
					array
					(
						'id'													=>	'height',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	1,
							'text'												=>	array
							(
								'label'											=>	__('Height in pixels',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'attribute'										=>	array
								(
									'maxlength'									=>	'3'
								)
							),
						)
					),		
					array
					(
						'id'													=>	'border_radius_top_left',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	4,
							'text'												=>	array
							(
								'label'											=>	__('Top left in pixels:',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'attribute'										=>	array
								(
									'maxlength'									=>	'3'
								)
							),
						)
					),					
					array
					(
						'id'													=>	'border_radius_top_right',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	4,
							'text'												=>	array
							(
								'label'											=>	__('Top right in pixels:',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'attribute'										=>	array
								(
									'maxlength'									=>	'3'
								)
							),
						)
					),
					array
					(
						'id'													=>	'border_radius_bottom_right',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	4,
							'text'												=>	array
							(
								'label'											=>	__('Bottom right in pixels:',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'attribute'										=>	array
								(
									'maxlength'									=>	'3'
								)
							),
						)
					),
					array
					(
						'id'													=>	'border_radius_bottom_left',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	4,
							'text'												=>	array
							(
								'label'											=>	__('Bottom left in pixels',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'attribute'										=>	array
								(
									'maxlength'									=>	'3'
								)
							),
						)
					),						
					array
					(
						'id'													=>	'border_width',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	2,
							'text'												=>	array
							(
								'label'											=>	__('Border width in pixels',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'attribute'										=>	array
								(
									'maxlength'									=>	'3'
								)
							),
						)
					),
					array
					(
						'id'													=>	'border_color',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	2,
							'text'												=>	array
							(
								'label'											=>	__('Border color in HEX',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'type'											=>	'color-picker'
							)
						)
					),
					array
					(
						'id'													=>	'bg_color',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	2,
							'text'												=>	array
							(
								'label'											=>	__('Background color in HEX',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'type'											=>	'color-picker'
							)
						)
					),	
					array
					(
						'id'													=>	'border_width_hover',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	3,
							'text'												=>	array
							(
								'label'											=>	__('Border width in pixels',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'attribute'										=>	array
								(
									'maxlength'									=>	'3'
								)
							),
						)
					),
					array
					(
						'id'													=>	'border_color_hover',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	3,
							'text'												=>	array
							(
								'label'											=>	__('Border color in HEX',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'type'											=>	'color-picker'
							)
						)
					),
					array
					(
						'id'													=>	'bg_color_hover',
						'ui'													=>	array
						(
							'panel'												=>	2,
							'group'												=>	3,
							'text'												=>	array
							(
								'label'											=>	__('Background color in HEX',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'type'											=>	'color-picker'
							)
						)
					),						
				)
			)
		);
		
		$i=$start;
		
		foreach($this->social as $index=>$value)
		{
			array_push($this->component['structure']['element'],
	
				array
				(
					'id'														=>	'profile_'.$index.'_url',
					'ui'														=>	array
					(
						'panel'													=>	3,
						'group'													=>	$i,
						'text'													=>	array
						(
							'label'												=>	__('URL',PLUGIN_PAGE_BUILDER_DOMAIN)
						)
					)
				),				
				array
				(
					'id'														=>	'profile_'.$index.'_order',
					'ui'														=>	array
					(
						'panel'													=>	3,
						'group'													=>	$i,
						'text'													=>	array
						(
							'label'												=>	__('Order',PLUGIN_PAGE_BUILDER_DOMAIN)
						),
						'element'												=>	array
						(
							'attribute'											=>	array
							(
								'maxlength'										=>	'2'
							)
						)
					),
				)			
			);
			
			$i++;
		}
		
		parent::__construct();	
	}
	
	/**************************************************************************/
	
	function createCSS($code=null,$retina=false)
	{
		$CSS=new PBCSS();
		
		$key=$retina ? 'icon_url_retina' : 'icon_url';
			
		$codeCurrent=null;
		foreach($this->social as $index=>$value)
		{
			$codeCurrent.=$CSS->create(array
			(
				'selector'	=>	array
				(
					'ul.pb-social-icon>li>a.pb-social-icon-'.$index
				),
				'property'	=>	array
				(
					'background-image'	=>	PBComponentData::get($this->getComponentId(),$key).$value[1],
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

	function processShortcodeSocialIcon($attribute,$content,$tag)
	{
		$attribute=$this->processAttribute($tag,$attribute);
		
		$html=null;
		$style=array();
		$social=array();
		
		$Window=new PBWindow();
		$Validation=new PBValidation();
		
		if(!array_key_exists($attribute['target'],$Window->linkTarget)) return($html);
		if(!$Validation->isBool($attribute['native_color_enable'])) return($html);
		
		foreach($this->social as $index=>$value)
		{
			$url='profile_'.$index.'_url';
			$order='profile_'.$index.'_order';
			
			PBHelper::removeUIndex($attribute,$url,$order);
			
			if(!$Validation->isURL($attribute[$url])) continue;
			
			$orderValue=(int)$attribute[$order];
			
			$socialData=array('id'=>$index,'url'=>$attribute[$url]);
			
			if($Validation->isNumber($attribute[$order],0,99))
			{
				if(isset($social[$orderValue]))	array_push($social,$socialData);
				else $social[$orderValue]=$socialData;
			}
			else array_push($social,$socialData);
		}

		ksort($social);

		if(!count($social)) return;
		
		$option=array('in'=>array(),'out'=>array());
		
		if($Validation->isNumber($attribute['width'],0,999))
			$style['width']=$attribute['width'].'px';
		if($Validation->isNumber($attribute['height'],0,999))
			$style['height']=$attribute['height'].'px';
		
		$borderRadius=null;
		if($Validation->isNumber($attribute['border_radius_top_left'],0,999))
			$borderRadius.=' '.$attribute['border_radius_top_left'].'px';
		else $borderRadius.=' 0px';
		if($Validation->isNumber($attribute['border_radius_top_right'],0,999))
			$borderRadius.=' '.$attribute['border_radius_top_right'].'px';
		else $borderRadius.=' 0px';
		if($Validation->isNumber($attribute['border_radius_bottom_right'],0,999))
			$borderRadius.=' '.$attribute['border_radius_bottom_right'].'px';
		else $borderRadius.=' 0px';
		if($Validation->isNumber($attribute['border_radius_bottom_left'],0,999))
			$borderRadius.=' '.$attribute['border_radius_bottom_left'].'px';
		else $borderRadius.=' 0px';
		
		$borderRadius=trim($borderRadius);
		
		$style['-webkit-border-radius']=$borderRadius;
		$style['-moz-border-radius']=$borderRadius;
		$style['border-radius']=$borderRadius;
		
		if($Validation->isNumber($attribute['border_width'],0,999))
		{
			$style['border-width']=$attribute['border_width'].'px';				
			$option['out']['border-width']=$style['border-width'];
		}
		if($Validation->isColor($attribute['bg_color']))
		{
			$style['background-color']=PBColor::getColor($attribute['bg_color']);			
			$option['out']['background-color']=$style['background-color'];
		}
		if($Validation->isColor($attribute['border_color']))
		{
			$style['border-color']=PBColor::getColor($attribute['border_color']);			
			$option['out']['border-color']=$style['border-color'];
		}
		
		if($Validation->isNumber($attribute['border_width_hover'],0,999))
			$option['in']['border-width']=$attribute['border_width_hover'].'px';
		if($Validation->isColor($attribute['bg_color_hover']))
			$option['in']['background-color']=PBColor::getColor($attribute['bg_color_hover']);	
		if($Validation->isColor($attribute['border_color_hover']))
			$option['in']['border-color']=PBColor::getColor($attribute['border_color_hover']);

		foreach($social as $index=>$value)
		{
			$class=array('pb-social-icon-'.$value['id'],$Window->getTargetCSSClass($attribute['target']));
			
			$html.=
			'
				<li><a href="'.esc_attr($value['url']).'"'.PBHelper::createClassAttribute($class).PBHelper::createStyleAttribute($style).'></a></li>
			';
		}
		
		$id=PBHelper::createId('pb_social_icon');
		
		$class=array('pb-social-icon');
		
		if($attribute['native_color_enable']==1)
			array_push($class,'pb-social-icon-color-native');
		
		array_push($class,'pb-reset-list','pb-clear-fix',$attribute['css_class']);
		
		$html=
		'
			<ul'.PBHelper::createClassAttribute($class).' id="'.esc_attr($id).'">
				'.$html.'
			</ul>
			<div class="pb-script-tag">
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$(\'#'.$id.'\').PBSocialIcon('.json_encode($option).');
					});
				</script>
			</div>
		';

		return(PBHelper::formatHTML($html));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/