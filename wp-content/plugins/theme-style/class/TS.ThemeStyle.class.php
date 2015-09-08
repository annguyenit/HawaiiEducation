<?php

/******************************************************************************/
/******************************************************************************/

class TSThemeStyle
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->libraryDefault=array
		(
			'script'															=>	array
			(
				'use'															=>	1,
				'inc'															=>	true,
				'path'															=>	'',
				'file'															=>	'',
				'in_footer'														=>	true,
				'dependencies'													=>	array(),
			),
			'style'																=>	array
			(
				'use'															=>	1,
				'inc'															=>	true,
				'path'															=>	'',
				'file'															=>	'',
				'dependencies'													=>	array()
			)
		);
	}
	
	/**************************************************************************/
	
	function prepareLibrary()
	{
		$this->library=array
		(
			'script'															=>	array
			(
				'jquery'														=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	'',
					'file'														=>	'',
					'in_footer'													=>	false,
					'dependencies'												=>	array()
				),
				'jquery-ui-core'												=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	'',
					'file'														=>	'',
					'in_footer'													=>	true,
					'dependencies'												=>	array()
				),
				'jquery-bbq'													=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_SCRIPT_URL,
					'file'														=>	'jquery.bbq.min.js',
					'in_footer'													=>	true,
					'dependencies'												=>	array()
				),	
				'jquery-colorpicker'											=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_SCRIPT_URL,
					'file'														=>	'jquery.colorpicker.js',
					'in_footer'													=>	true,
					'dependencies'												=>	array()
				),
				'jquery-qtip'													=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_SCRIPT_URL,
					'file'														=>	'jquery.qtip.min.js',
					'in_footer'													=>	true,
					'dependencies'												=>	array()
				),
				'jquery-blockUI'												=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_SCRIPT_URL,
					'file'														=>	'jquery.blockUI.js',
					'in_footer'													=>	true,
					'dependencies'												=>	array()
				),				
				'jquery-themeOption'											=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_SCRIPT_URL,
					'file'														=>	'jquery.themeOption.js',
					'in_footer'													=>	true,
					'dependencies'												=>	array()
				),
				'jquery-themeOptionElement'										=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_SCRIPT_URL,
					'file'														=>	'jquery.themeOptionElement.js',
					'in_footer'													=>	true,
					'dependencies'												=>	array()
				)
			),
			'style'																=>	array
			(
				'jquery-ui'														=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_STYLE_URL,
					'file'														=>	'jquery.ui.min.css',
					'dependencies'												=>	array()
				),
				'jquery-colorpicker'											=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_STYLE_URL,
					'file'														=>	'jquery.colorpicker.css',
					'dependencies'												=>	array()
				),
				'jquery-qtip'													=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_STYLE_URL,
					'file'														=>	'jquery.qtip.min.css',
					'dependencies'												=>	array()
				),
				'google-font-open-sans'											=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	null,
					'file'														=>	'//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
					'dependencies'												=>	array()
				),
				'jquery-themeOption'											=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_STYLE_URL,
					'file'														=>	'jquery.themeOption.css',
					'dependencies'												=>	array()
				),
				'ts-jquery-themeOption-overwrite'								=>	array
				(
					'use'														=>	1,
					'inc'														=>	true,
					'path'														=>	PLUGIN_THEME_STYLE_STYLE_URL,
					'file'														=>	'jquery.themeOption.overwrite.css',
					'dependencies'												=>	array()
				),
				'ts-frontend'													=>	array
				(
					'use'														=>	2,
					'inc'														=>	true,
					'path'														=>	TSData::get('theme_url_multiste_site_style'),
					'file'														=>	'TS.Frontend.css',
					'dependencies'												=>	array()
				)
			)
		);
	}
	
	/**************************************************************************/
	
	function addLibrary($type,$use)
	{
		foreach($this->library[$type] as $index=>$value)
			$this->library[$type][$index]=array_merge($this->libraryDefault[$type],$value);
		
		foreach($this->library[$type] as $index=>$data)
		{
			if(!$data['inc']) continue;
			
			if($data['use']!=3)
			{
				if($data['use']!=$use) continue;
			}			
			
			if($type=='script')
			{
				wp_enqueue_script($index,$data['path'].$data['file'],$data['dependencies'],false,$data['in_footer']);
			}
			else 
			{
				wp_enqueue_style($index,$data['path'].$data['file'],$data['dependencies'],false);
			}
		}
	}

	/**************************************************************************/
	
	function pluginActivation()
	{
		$option=array();
		
		global $ts_rule;
	
		if(!is_array($ts_rule)) return;
		if(!is_array($ts_rule['panel'])) return;
		
		foreach($ts_rule['panel'] as $panelData)
		{
			foreach($panelData as $panelSection)
			{
				foreach($panelSection['field'] as $panelField)
				{
					$value=TSOption::getOption($panelField['id']);
					$option[$panelField['id']]=$value===false ? $panelField['default'] : $value;
				}
			}
		}

		TSOption::updateOption($option);
		
		$this->createCSSFile();
	}
	
	/**************************************************************************/
	
	function pluginDeactivation()
	{

	}
	
	/**************************************************************************/
	
	function publicInit()
	{
		$this->addLibrary('style',2);
		$this->addLibrary('script',2);		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{		
		$this->addLibrary('style',1);
		$this->addLibrary('script',1);
	}
	
	/**************************************************************************/
	
	function adminMenuInit()
	{
		add_theme_page(__('Theme Styles',PLUGIN_THEME_STYLE_DOMAIN),__('Theme Styles',PLUGIN_THEME_STYLE_DOMAIN),'edit_theme_options','theme_style_edit',array($this,'adminCreatePanel'));
	}
	
	/**************************************************************************/
	
	function adminCreatePanel()
	{
		$html=null;
		
		global $ts_rule;
		
		$html=
		'
			<div id="to" class="to to-ts">

				<div id="to_notice"></div>

				<form name="to_form" id="to_form" method="POST" action="#">

					<div class="to-header to-clear-fix">

						<div class="to-header-left">

							<div>
								<h3>QuanticaLabs</h3>
								<h6>'.esc_html('Theme Styles').'</h6>
							</div>

						</div>

						<div class="to-header-right">

							<div>
								<h3>'.esc_html('Theme Styles').'</h3>
								<h6>'.esc_html('WordPress Plugin ver. '.PLUGIN_THEME_STYLE_VERSION).'</h6>&nbsp;&nbsp;
							</div>

							<a href="http://quanticalabs.com" class="to-header-right-logo"></a>

						</div>

					</div>

					<div class="to-content to-clear-fix">

						<div class="to-content-left">

							<ul class="to-menu" id="to_menu">
								'.$this->adminCreatePanelMenu($ts_rule['menu']).'
							</ul>

						</div>

						<div class="to-content-right" id="to_panel">
							'.$this->adminCreatePanelPanel().'
						</div>

					</div>

					<div class="to-footer to-clear-fix">

						<div class="to-footer-left">

							<ul class="to-social-list">
								<li><a href="http://themeforest.net/user/QuanticaLabs?ref=quanticalabs" class="to-social-list-envato" title="Envato"></a></li>
								<li><a href="http://www.facebook.com/QuanticaLabs" class="to-social-list-facebook" title="Facebook"></a></li>
								<li><a href="http://twitter.com/quanticalabs" class="to-social-list-twitter" title="Twitter"></a></li>
								<li><a href="http://quanticalabs.tumblr.com/" class="to-social-list-tumblr" title="Tumblr"></a></li>
							</ul>

						</div>

						<div class="to-footer-right">
							<input type="submit" value="'.esc_attr__('Save changes',PLUGIN_THEME_STYLE_DOMAIN).'" name="Submit" id="Submit" class="to-button"/>
						</div>			

					</div>

					<input type="hidden" name="action" id="action" value="admin_save_panel" />

					<script type="text/javascript">
					
						jQuery(document).ready(function($)
						{
							$(\'#to\').themeOption({submitOneField:true});
							$(\'#to\').themeOptionElement({init:true});
						});

					</script>

				</form>

			</div>	
		';
		
		echo $html;
	}

	/**************************************************************************/
	
	function adminCreatePanelMenu($data,$idParent=null)
	{
		$html=null;
		$Validation=new TSValidation();
		
		foreach($data as $value)
		{
			$id=$Validation->isEmpty($idParent) ? $value['id'] : $idParent.'_'.$value['id'];
			
			$html.=
			'
				<li>
					<a href="#'.$id.'">'.$value['label'].'</a>
			';
			
			if(array_key_exists('children',$value))
			{
				$html.=
				'
					<ul>
						'.$this->adminCreatePanelMenu($value['children'],$value['id']).'
					</ul>
				';
			}
			
			$html.=
			'
				</li>
			';
		}
		
		return($html);
	}
	
	/**************************************************************************/
	
	function adminCreatePanelPanel()
	{
		$html=null;
		
		global $ts_rule;
		
		$Validaton=new TSValidation();
		foreach($ts_rule['panel'] as $panelId=>$panelData)
		{
			$panelHTML=null;
			
			foreach($panelData as $panelSection)
			{
				$panelFieldHTML=null;
				
				foreach($panelSection['field'] as $panelField)
				{
					$labelHTML=null;
					
					if($Validaton->isNotEmpty($panelField['label']))
					{
						$labelHTML=mb_substr($panelField['label'],-1)==':' ? $panelField['label'] : $panelField['label'].':';
						$labelHTML='<span class="to-legend-field">'.$labelHTML.'</span>';
					}
					
					$panelFieldHTML.=
					'
						<div>
							'.$labelHTML.'
							'.$this->adminCreateField($panelField).'
						</div>
					';
				}
				
				$subheader=$panelSection['description']['subheader'];
				if(mb_substr($panelField['label'],-1)!='.')	$subheader.='.';
				
				$panelHTML.=
				'
					<li>
						<h5>'.$panelSection['description']['header'].'</h5>
						<span class="to-legend">'.$subheader.'</span>
						'.$panelFieldHTML.'
					</li>
				';
			}
			
			$panelHTML=
			'
				<div id="'.esc_attr($panelId).'">
					<ul class="to-form-field-list">
						'.$panelHTML.'
					</ul>				
				</div>
			';
			
			$html.=$panelHTML;			
		}
		
		return($html);
	}
	
	/**************************************************************************/
	
	function adminCreateField($data)
	{
		$html=null;
		
		TSHelper::removeUIndex($data,'type');
		
		switch($data['type'])
		{
			default:
				
				$html=$this->adminCreateFieldColorPicker($data);
		}
		
		return($html);
	}
	
	/**************************************************************************/
	
	
	function adminCreateFieldColorPicker($data)
	{
		$value=TSOption::getOption($data['id']);
	
		$html=
		'
			<input type="text" class="to-color-picker" name="'.esc_attr(PLUGIN_THEME_STYLE_CONTEXT.'_'.$data['id']).'" value="'.esc_attr($value).'" maxlength="11"/>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function adminSavePanel()
	{
		global $ts_rule;
		
		$Validation=new TSValidation();
		
		$option=array();
		$response=array('global'=>array('error'=>1),'local'=>array());
		
		$temp=array();
		
		parse_str(TSHelper::stripslashesPOST($_POST['value']),$temp);
		
		foreach($temp as $index=>$value)
		{
			$index=preg_replace('/'.PLUGIN_THEME_STYLE_CONTEXT.'_/',null,$index);
			$data[$index]=$value;
		}	

		foreach($ts_rule['panel'] as $panelData)
		{
			foreach($panelData as $panelSection)
			{
				foreach($panelSection['field'] as $panelField)
				{
					$value=null;
					$name=$panelField['id'];
					
					if(array_key_exists($name,$data)) $value=$data[$name];
					
					$option[$name]=$value;
			
					switch($panelField['type'])
					{
						default:
							
							if(!$Validation->isColor($value,true))
								$response['local'][]=array(PLUGIN_THEME_STYLE_CONTEXT.'_'.$name,__('Enter valid color in HEX format.',PLUGIN_THEME_STYLE_DOMAIN));
					}
				}
			}
		}
			
		$response['global']['error']=(bool)count($response['local']);
		
		if($response['global']['error'])
		{
			$response['global']['notice']=
			'
				<div class="to-notice to-notice-error">
					<span></span>
					<h4>'.__('Error',PLUGIN_THEME_STYLE_DOMAIN).'</h4>
					<h6>'.__('Changes can not be saved.',PLUGIN_THEME_STYLE_DOMAIN).'</h6>
				</div>
			';
		}
		else
		{
			$response['global']['notice']=
			'
				<div class="to-notice to-notice-success">
					<span></span>
					<h4>'.__('Success',PLUGIN_THEME_STYLE_DOMAIN).'</h4>
					<h6>'.__('All changes have been saved.',PLUGIN_THEME_STYLE_DOMAIN).'</h6>
				</div>
			';		
			
			TSOption::updateOption($option);
			
			$this->createCSSFile();
		}

		echo json_encode($response);
		exit;		
	}
	
	/**************************************************************************/
	
	function createCSSFile()
	{
		global $ts_rule;
		
		$Validation=new TSValidation();
		
		if(!is_array($ts_rule)) return(false);
		
		$content=null;
		$CSS=new TSCSS();

		foreach($ts_rule['panel'] as $panelData)
		{
			foreach($panelData as $panelSection)
			{
				foreach($panelSection['field'] as $panelField)
				{
					$property=array();
					
					$value=TSOption::getOption($panelField['id']);
					$property[$panelField['type']]=$value;

					if($Validation->isNotEmpty($value))
					{
						if(array_key_exists('additionalRule',$panelField))
							$property=$property+$panelField['additionalRule'];
					}
					
					if(count($panelField['selector']))
					{
						$content.=$CSS->create(array
						(
							'selector'	=>	$panelField['selector'],
							'property'	=>	$property
						));
					}

					if(array_key_exists('customCSS',$panelField))
						$content.=preg_replace('/__VALUE__/',TSColor::getColor(TSOption::getOption($panelField['id'])),$panelField['customCSS']);
				}
			}
		}

		$file=TSData::get('theme_path_multiste_site_style').'TS.Frontend.css';
		
		@chmod($file,0755);
		
		if(file_put_contents($file,$content)===false) return(false);
		
		return(true);
	}
	
	/**************************************************************************/
	
	function adminNotice()
	{
		$file=array(TSData::get('theme_path_multiste_site_style').'TS.Frontend.css');
		foreach($file as $path)
		{
			if(!is_writable($path))
			{
				echo 
				'
					<div class="error">
						<p>'.sprintf(__('<b>File %s cannot be created. Please make sure that this location is writable.</b>',PLUGIN_PAGE_BUILDER_DOMAIN),str_replace('\\','/',$path)).'</p>
					</div>				
				';				
			}
		}
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/