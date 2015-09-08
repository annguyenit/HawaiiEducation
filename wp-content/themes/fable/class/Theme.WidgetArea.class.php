<?php

/******************************************************************************/
/******************************************************************************/

class ThemeWidgetArea
{
	/**************************************************************************/

	function __construct()
	{
		$this->widgetAreaData=array
		(
			0	=>	array(__('[None]',THEME_DOMAIN),'theme-page-sidebar-disable'),
			1	=>	array(__('Left sidebar',THEME_DOMAIN),'theme-page-sidebar-enable theme-page-sidebar-left'),
			2	=>	array(__('Right sidebar',THEME_DOMAIN),'theme-page-sidebar-enable theme-page-sidebar-right')
		);		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_widget_area',
			array
			(
				'labels'=>array
				(
					'name'						=>	__('Widget Area',THEME_DOMAIN),
					'singular_name'				=>	__('Widgets Areas',THEME_DOMAIN),
					'add_new'					=>	__('Add New',THEME_DOMAIN),
					'add_new_item'				=>	__('Add New Widget Area',THEME_DOMAIN),
					'edit_item'					=>	__('Edit Widget Area',THEME_DOMAIN),
					'new_item'					=>	__('New Widget Area',THEME_DOMAIN),
					'all_items'					=>	__('All Widgets Areas',THEME_DOMAIN),
					'view_item'					=>	__('View Widget Area',THEME_DOMAIN),
					'search_items'				=>	__('Search Widgets Areas',THEME_DOMAIN),
					'not_found'					=>	__('No Widgets Areas Found',THEME_DOMAIN),
					'not_found_in_trash'		=>	__('No Widgets Areas Found in Trash',THEME_DOMAIN), 
					'parent_item_colon'			=>	'',
					'menu_name'					=>	__('Widgets Areas',THEME_DOMAIN)
				),	
				'public'						=> false,  
				'show_ui'						=> true,  
				'capability_type'				=> 'post',
				'menu_position'					=> 25,
				'hierarchical'					=> false,  
				'rewrite'						=> true,  
				'supports'						=> array('title','page-attributes')  
			)
		);
	}

	/**************************************************************************/

	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'title'			=> __('Title',THEME_DOMAIN)
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['title']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{

	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_meta_box_widget_area',__('Options'),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_widget_area','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$Layout=new ThemeLayout();
		
		$data=array();

		$data['option']=ThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_CONTEXT.'_meta_box_widget_area_noncename',false,false);
		
		$data['dictionary']['layout']=$Layout->layout;
		
		ThemeHelper::setDefaultOption($data['option'],'widget_area_footer_layout','33x33x33');

		$Template=new ThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/meta_box_widget_area.php');
		echo $Template->output();
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($postId) 
	{
		if($_POST)
		{
			if(ThemeHelper::checkSavePost($postId,THEME_CONTEXT.'_meta_box_widget_area_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=ThemeHelper::getPostOption('widget_area');
			update_post_meta($postId,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function getWidgetAreaId($id)
	{
		if((int)$id>0) return(THEME_CONTEXT.'_widget_area_id_'.$id);
		else return(THEME_CONTEXT.'_'.$id);
	}
	
	/**************************************************************************/
	
	function getWidgetArea($postStatus='publish',$orderBy='title',$order='asc')
	{
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_widget_area',
			'posts_per_page'					=>	-1,
			'orderby'							=>	$orderBy,
			'order'								=>	$order
		);
		
		if(!is_null($postStatus)) 
			$argument['post_status']=$postStatus;
		
		$query=new WP_Query($argument);
		if($query===false) return;
		
		$data=array();
		
		foreach($query->posts as $index=>$value)
			$data[$value->ID]=array($value->post_title);
		
		return($data);
	}
	
	/**************************************************************************/
	
	function register()
	{ 
		if(!function_exists('register_sidebar')) return;
		
		$data=$this->getWidgetArea();

		foreach($data as $index=>$value)
		{
			register_sidebar(array
			(
				'id'				=> $this->getWidgetAreaId($index),
				'name'				=> $value[0],
				'before_widget'		=> '<div id="%1$s" class="%2$s theme-clear-fix theme-widget">',
				'after_widget'		=> '</div>',
				'before_title'		=> '<h6 class="pb-header"><span class="pb-header-content">',
				'after_title'		=> '</span><span class="pb-header-underline"></span></h6>'
			));		
		}
		
		add_filter('wp_list_categories',array($this,'filterCategoriesPostCount'));
	}
	
	/**************************************************************************/

	function filterCategoriesPostCount($links)
	{
		$links=str_replace('</a> (',' (',$links);
		$links=str_replace(')',')</a>',$links);
		return($links);		
	}
	
	/**************************************************************************/

	function getWidgetAreaByPost($post,$sidebar=true,$widgetArea=true)
	{
		$data=array('id'=>0,'location'=>0);
		
		if(is_home()) return($data);
		
		if(!$widgetArea) return($data);
		if(!is_object($post)) return($data);
		if($sidebar)
		{
			$id=ThemeOption::getGlobalOption($post,'widget_area_sidebar');
			$location=ThemeOption::getGlobalOption($post,'widget_area_sidebar_location');
		}
		else
		{
			$id=ThemeOption::getGlobalOption($post,'widget_area_footer');
			$location=1;
		}
		
		if(strcmp($id,'0')==0) return($data);
		if(strcmp($location,'0')==0) return($data);

		$post=get_post($id);
		if(is_null($post)) return($data);	
		return(array('id'=>$id,'location'=>$location));
	}
	
	/**************************************************************************/
	
	function getWidgetAreaCSSClass($data)
	{
		if($data['location']==0) return(null);
		return($this->widgetAreaData[$data['location']][1]);
	}
	
	/**************************************************************************/
	
	function getWidgetAreaDictionary($useNone=true,$useGlobal=true,$useLeftUnchanged=false)
	{
		$widget=$this->getWidgetArea(null,'title','asc');
		
		$data=array();
		
		if($useNone) $data[0]=array('[None]');
		if($useGlobal) $data[-1]=array('[Use global settings]');
		if($useLeftUnchanged) $data[-10]=array('[Left unchanged]');
		
		foreach($widget as $index=>$value)
			$data[$index]=array($value[0]);
		
		return($data);
	}
	
	/**************************************************************************/
	
	function getWidgetAreaLocationDictionary($useNone=true,$useGlobal=true,$useLeftUnchanged=false)
	{
		$data=array();
		
		if($useNone) $data[0]=array('[None]');
		if($useGlobal) $data[-1]=array('[Use global settings]');
		if($useLeftUnchanged) $data[-10]=array('[Left unchanged]');
		
		foreach($this->widgetAreaData as $index=>$value)
		{
			if($index==0) continue;
			$data[$index]=array($value[0]);
		}
		
		return($data);
	}
	
	/**************************************************************************/

	function create($widgetArea)
	{
		if(!function_exists('dynamic_sidebar')) return;
		dynamic_sidebar($this->getWidgetAreaId($widgetArea['id']));
	}
	
	/**************************************************************************/
	
	function setWidgetAreaLayout($postId)
	{
		$Layout=new ThemeLayout();
		
		$option=ThemeOption::getPostMeta($postId);
		
		$this->widgetNumber=0;
		$this->widgetAreaLayout=$option['widget_area_footer_layout'];
		
		add_filter('dynamic_sidebar_params',array($this,'setWidgetLayout'),10);
		
		return($Layout->getLayoutCSSClass($this->widgetAreaLayout));
	}
	
	/**************************************************************************/
	
	function unsetWidgetAreaLayout()
	{
		remove_filter('dynamic_sidebar_params',array($this,'setWidgetLayout'));
	}
	
	/**************************************************************************/
	
	function setWidgetLayout($parameter)
	{
		$Layout=new ThemeLayout();
		
		$parameter[0]['before_widget']=preg_replace('/theme-widget/','theme-widget '.$Layout->getLayoutColumnCSSClass($this->widgetAreaLayout,$this->widgetNumber),$parameter[0]['before_widget']);
		
		$this->widgetNumber++;

		return($parameter);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/