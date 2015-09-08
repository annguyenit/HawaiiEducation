<?php

/******************************************************************************/
/******************************************************************************/

class PBComponentSitemap extends PBComponent
{
	/**************************************************************************/

	function __construct()
	{
		$Post=new PBPost();
		
		$this->style=array
		(
			'sitemap'															=>	array
			(
				'use'															=>	2,
				'path'															=>	$this->getStyleURL(),
				'file'															=>	'style.css'
			)
		);	
		
		$bullet=(array)PBComponentData::get($this->getComponentId(),'bullet');
		
		$this->bullet=array();
	
		$this->bullet['url']=$bullet['url'];
		$this->bullet['url_retina']=$bullet['url_retina'];
		
		$this->bullet['path']=$bullet['path'];

		$file=PBFile::scanDir($bullet['path']);

		$this->bullet['file']=array();
		if(is_array($file)) $this->bullet['file']=array_combine($file,$file);
		
		/***/
		
		$this->component=array
		(
			'name'																=>	__('Sitemap',PLUGIN_PAGE_BUILDER_DOMAIN),
			'description'														=>	__('Displays Sitemap',PLUGIN_PAGE_BUILDER_DOMAIN),
			'structure'															=>	array
			(
				'window'														=>	array
				(
					'title'														=>	__('Sitemap',PLUGIN_PAGE_BUILDER_DOMAIN)
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
								'header'										=>	__('List bullet',PLUGIN_PAGE_BUILDER_DOMAIN)
							),
							'element'											=>	array
							(
								'type'											=>	'select-one',
								'dictionary'									=>	array
								(
									'source'									=>	$this->bullet['file'],
									'use_default'								=>	false
								)
							)
						)
					),
					array
					(
						'id'													=>	'post_type',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('Post type',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('Select types of posts which have to be displayed.',PLUGIN_PAGE_BUILDER_DOMAIN),
							),
							'element'											=>	array
							(
								'type'											=>	'checkbox',
								'dictionary'									=>	array
								(
									'source'									=>	PBHelper::extractDictionary($Post->postType),
								)
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	''
						)
					),	
					array
					(
						'id'													=>	'post_status',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('Post status',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('Select types of post statuses which have to be displayed.',PLUGIN_PAGE_BUILDER_DOMAIN)
							),
							'element'											=>	array
							(
								'type'											=>	'checkbox',
								'dictionary'									=>	array
								(
									'source'									=>	PBHelper::extractDictionary($Post->postStatus),
								)
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	''
						)
					),	
					array
					(
						'id'													=>	'post__in',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('Include',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('Define a comma-separated list of page ID\'s to be included to the list',PLUGIN_PAGE_BUILDER_DOMAIN),
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	''
						)
					),	
					array
					(
						'id'													=>	'post__not_in',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('Exclude',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('Define a comma-separated list of page ID\'s to be excluded from the list.',PLUGIN_PAGE_BUILDER_DOMAIN),
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	''
						)
					),	
					array
					(
						'id'													=>	'posts_per_page',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('Limit number of posts',PLUGIN_PAGE_BUILDER_DOMAIN),
								'subheader'										=>	__('Number of posts to show. Leave this field empty to show all posts.',PLUGIN_PAGE_BUILDER_DOMAIN),
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	'-2'
						)
					),					
					array
					(
						'id'													=>	'orderby',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('Sort column',PLUGIN_PAGE_BUILDER_DOMAIN)
							),
							'element'											=>	array
							(
								'type'											=>	'radio',
								'dictionary'									=>	array
								(
									'source'									=>	PBHelper::extractDictionary($Post->sortColumn),
								)
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	'date'
						)
					),						
					array
					(
						'id'													=>	'order',
						'ui'													=>	array
						(
							'text'												=>	array
							(
								'header'										=>	__('Sort order',PLUGIN_PAGE_BUILDER_DOMAIN)
							),
							'element'											=>	array
							(
								'type'											=>	'radio',
								'dictionary'									=>	array
								(
									'source'									=>	array('asc'=>__('Ascending',PLUGIN_PAGE_BUILDER_DOMAIN),'desc'=>__('Descending',PLUGIN_PAGE_BUILDER_DOMAIN)),
								)
							)
						),
						'shortcode'												=>	array
						(
							'default'											=>	'asc'
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
					)
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
		foreach((array)$this->bullet['file'] as $file)
		{
			$codeCurrent.=$CSS->create(array
			(
				'selector'	=>	array
				(
					'.pb-sitemap.pb-sitemap-bullet-list.pb-sitemap-bullet-list-'.PBHelper::createHash($file).' ul li'
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
	
	function processShortcodeSitemap($attribute,$content,$tag)
	{
		$attribute=$this->processAttribute($tag,$attribute);
		
		$html=null;
		$Validation=new PBValidation();
		
		$argument=array();
		
		if($Validation->isNotEmpty($attribute['post_type']))
			$argument['post_type']=explode(',',$attribute['post_type']);
		if($Validation->isNotEmpty($attribute['post_status']))
			$argument['post_status']=explode(',',$attribute['post_status']);		
		if($Validation->isNotEmpty($attribute['post__in']))
			$argument['post__in']=explode(',',$attribute['post__in']);	
		if($Validation->isNotEmpty($attribute['post__not_in']))
			$argument['post__not_in']=explode(',',$attribute['post__not_in']);			
		if($Validation->isNotEmpty($attribute['posts_per_page']))
			$argument['posts_per_page']=$attribute['posts_per_page']==-2 ? -1 : $attribute['posts_per_page'];		
		if($Validation->isNotEmpty($attribute['orderby']))
			$argument['orderby']=$attribute['orderby'];		
		if($Validation->isNotEmpty($attribute['order']))
			$argument['order']=$attribute['order'];				

		$query=new WP_Query($argument);
		if($query===false) return($html);
		if($query->post_count==0) return($html);
		
		$class=array(array('pb-sitemap'),array('pb-reset-list'));
		
		if(array_key_exists($attribute['bullet'],$this->bullet['file']))
			array_push($class[0],'pb-sitemap-bullet-list','pb-sitemap-bullet-list-'.PBHelper::createHash($attribute['bullet']));
		
		global $post;
		$bPost=$post;

		while($query->have_posts())
		{
			$query->the_post();

			$html.=
			'
				<li id="post-'.get_the_ID().'" class="'.implode(' ',get_post_class()).'">
					<a href="'.get_the_permalink().'">'.get_the_title().'</a>
				</li>
			';
		}
		
		$post=$bPost;
		
		$html=
		'
			<div'.PBHelper::createClassAttribute($class[0]).'>
				<ul'.PBHelper::createClassAttribute($class[1]).'>'.$html.'</ul>
			</div>
		';
		
		return(PBHelper::formatHTML($html));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/