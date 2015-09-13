<?php

/******************************************************************************/
/******************************************************************************/

class ThemePost
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->postType=array
		(
			'text'				=>	array(__('Text',THEME_DOMAIN)),
			'image'				=>	array(__('Post with featured image',THEME_DOMAIN)),
			'image_slider'		=>	array(__('Post with image slider',THEME_DOMAIN)),
			'audio'				=>	array(__('Post with audio',THEME_DOMAIN)),
			'video'				=>	array(__('Post with video',THEME_DOMAIN)),
			'quote'				=>	array(__('Post with quote',THEME_DOMAIN))
		);
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box('meta_box_post',__('Post options',THEME_DOMAIN),array($this,'adminCreateMetaBoxPost'),'post','normal','low');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxPost() 
	{
		global $post;
		
		$data=array();
	
		$data['option']=ThemeOption::getPostMeta($post);	
		
		$data['dictionary']['postType']=$this->postType;
		
		ThemeHelper::setDefaultOption($data['option'],'post_type','image');
		ThemeHelper::setDefaultOption($data['option'],'post_type_preambule','');
		
		ThemeHelper::setDefaultOption($data['option'],'post_tag_visible',-1);
		ThemeHelper::setDefaultOption($data['option'],'post_author_visible',-1);
		ThemeHelper::setDefaultOption($data['option'],'post_category_visible',-1);
		ThemeHelper::setDefaultOption($data['option'],'post_comment_count_visible',-1);
		ThemeHelper::setDefaultOption($data['option'],'post_navigation_visible',-1);		
		
		$Template=new ThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/meta_box_post.php');
		echo $Template->output();	
	}
	
	/**************************************************************************/
	
	function formatPostDate($date,&$day,&$month,&$year,$type=1)
	{
		$currentlang = get_bloginfo('language');
                if($type==1) {
                    if ($currentlang == 'vi') {
                        list($day,$month,$year)=explode(' ',date_i18n('d m Y',strtotime($date)));
                    }elseif ($currentlang == 'en-US') {
                        list($day,$month,$year)=explode(' ',date_i18n('d F Y',strtotime($date)));
                    }
                }
                if($type==2) {
                    list($day,$month,$year)=explode(' ',date_i18n('d M Y',strtotime($date)));
                }
	}
	
	/**************************************************************************/
	
	function getPost()
	{
		$data=new stdClass();

		$categoryId=(int)get_query_var('cat');

		if(is_tag()) 
		{
			$data->post=get_post(ThemeOption::getOption('blog_search_post_id'));
			
			$tagQuery=get_query_var('tag');
			$tagData=get_tags(array('slug'=>$tagQuery));

			$data->post->post_title=esc_html($tagData[0]->name);
		}
		elseif(is_category($categoryId)) 
		{			
			$category=get_category($categoryId);
			$data->post=get_post(ThemeOption::getOption('blog_category_post_id'));	
			$data->post->post_title=ThemeHelper::esc_html($category->name);	
		}
		elseif(is_day()) 
		{
			$data->post=get_post(ThemeOption::getOption('blog_archive_post_id'));
			$data->post->post_title=get_the_date();
		}
		elseif(is_archive()) 
		{
			$data->post=get_post(ThemeOption::getOption('blog_archive_post_id'));
			$data->post->post_title=single_month_title(' ',false);
		}
		elseif(is_search())
		{
			$data->post=get_post(ThemeOption::getOption('blog_search_post_id'));
			$data->post->post_title=sprintf(__('Search result for phrase <i>%s</i>',THEME_DOMAIN),esc_html(get_query_var('s')));
		}
		elseif(is_404())
		{
			$data->post=get_post(ThemeOption::getOption('page_404_page_id'));
			$data->post->post_title=$data->post->post_title;
		}
		else return(false);

		return($data);
	}
	
	/**************************************************************************/
	
	function getPostMostComment($argument)
	{
		$parameter=array
		(
			'post_type'							=>	'post',
			'posts_per_page'					=>	(int)$argument['post_count'],
			'orderby'							=>	'post_date',
			'order'								=>	'desc',
			'meta_query'						=>	array(array('key'=>'_thumbnail_id'))
		);
		
		$query=new WP_Query($parameter);
		return($query);
	}
	
	/**************************************************************************/
	
	function getPostRecent($argument)
	{
		$parameter=array
		(
			'post_type'							=>	'post',
			'posts_per_page'					=>	(int)$argument['post_count'],
			'orderby'							=>	'comment_count',
			'order'								=>	'desc',
			'meta_query'						=>	array(array('key'=>'_thumbnail_id'))
		);

		$query=new WP_Query($parameter);
		return($query);
	}

	/**************************************************************************/
	
	function createTagList()
	{	
		$i=0;
		$html=null;
		
		$tag=get_the_tags();
						
		if(!$tag) return($html); 
		
		$count=count($tag);
		
		foreach($tag as $value)
		{
			$i++;

			$html.=
			'
				<li><a href="'.get_tag_link($value->term_id).'">'.$value->name.'</a>'.($i==$count ? '' : ',&nbsp;').'</li>
			';
		}
		
		$html=
		'
			<div class="theme-post-meta-tag">	
				<ul class="theme-reset-list">
					'.$html.'
				</ul>
			</div>
		';
		
		return($html);
		
	}
	
	/**************************************************************************/
	
	function createCategoryList()
	{
		$html=null;
		
		$Validation=new ThemeValidation();
		
		$category=get_the_category(get_the_ID());
		$count=count($category);
						
		if(!$count) return($html);
	
		foreach($category as $index=>$value)
		{
			$title=$Validation->isEmpty($value->description) ? sprintf(__('View all posts filed under %s',THEME_DOMAIN),$value->name) : strip_tags(apply_filters('category_description',$value->description,$value));
			
			$html.=
			'
				<li><a href="'.get_category_link($value->term_id).'" title="'.esc_attr($title).'">'.esc_html($value->name).'</a>'.($index==$count-1 ? '' : ',&nbsp;').'</li>
			';
		}

		$html=
		'
			<div class="theme-post-meta-category">
				<ul class="theme-reset-list">
					'.$html.'
				</ul>
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostNavigation()
	{
		$html=null;
		$Validation=new ThemeValidation();
		
		$prevPost=get_previous_post();
		if(!empty($prevPost)) $html.='<a class="theme-post-navigation-prev" href="'.get_permalink($prevPost->ID).'"><span class="theme-post-navigation-arrow"></span><span class="theme-post-navigation-content">'.get_the_title($prevPost->ID).'</span></a>';
			
		$nextPost=get_next_post();
		if(!empty($nextPost)) $html.='<a class="theme-post-navigation-next" href="'.get_permalink($nextPost->ID).'"><span class="theme-post-navigation-content">'.get_the_title($nextPost->ID).'</span><span class="theme-post-navigation-arrow"></span></a>';		
			
		if($Validation->isNotEmpty($html))
		{
			$html=
			'
				<div class="theme-post-navigation theme-clear-fix">
					'.$html.'
				</div>				
			';
		}	
		
		return($html);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/