<?php

/******************************************************************************/
/******************************************************************************/

TSData::set('theme_path_multiste_site_style',get_template_directory().'/multisite/'.get_current_blog_id().'/style/');
TSData::set('theme_url_multiste_site_style',get_template_directory_uri().'/multisite/'.get_current_blog_id().'/style/');

/******************************************************************************/

TSCSSRule::addMenuItem(array
(
	'id'				=>	'accordion',
	'label'				=>	__('Accordion',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'audio',
	'label'				=>	__('Audio',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'base',
	'label'				=>	__('Base',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		)			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'blockquote',
	'label'				=>	__('Blockquote',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'blog',
	'label'				=>	__('Blog',PLUGIN_THEME_STYLE_DOMAIN)
));


TSCSSRule::addMenuItem(array
(
	'id'				=>	'box',
	'label'				=>	__('Box',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'button',
	'label'				=>	__('Button',PLUGIN_THEME_STYLE_DOMAIN),
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'call_to_action',
	'label'				=>	__('Call to action',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'class',
	'label'				=>	__('Class',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'comment_form',
	'label'				=>	__('Comment form',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'comments_list',
	'label'				=>	__('Comments list',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'contact_form',
	'label'				=>	__('Contact form',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'counter_box',
	'label'				=>	__('Counter box',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'counter_list',
	'label'				=>	__('Counter list',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'divider',
	'label'				=>	__('Divider',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'dropcap',
	'label'				=>	__('Dropcap',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'feature',
	'label'				=>	__('Feature',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'flex_slider',
	'label'				=>	__('FlexSlider',PLUGIN_THEME_STYLE_DOMAIN)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'go_to_top',
	'label'				=>	__('Go to top',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'header',
	'label'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'header_and_subheader',
	'label'				=>	__('Header and subheader',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'image',
	'label'				=>	__('Image',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'menu',
	'label'				=>	__('Menu',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'nivo_slider',
	'label'				=>	__('Nivo slider',PLUGIN_THEME_STYLE_DOMAIN)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'notice',
	'label'				=>	__('Notices',PLUGIN_THEME_STYLE_DOMAIN)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'page_header',
	'label'				=>	__('Page header',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'preformatted_text',
	'label'				=>	__('Preformatted text',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'pricing_plan',
	'label'				=>	__('Pricing Plan',PLUGIN_THEME_STYLE_DOMAIN)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'recent_posts',
	'label'				=>	__('Recent posts',PLUGIN_THEME_STYLE_DOMAIN)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'social_icon',
	'label'				=>	__('Social icons',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'tab',
	'label'				=>	__('Tab',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'team',
	'label'				=>	__('Team',PLUGIN_THEME_STYLE_DOMAIN)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'testimonial',
	'label'				=>	__('Testimonial',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'twitter_user_timeline',
	'label'				=>	__('Twitter user timeline',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'vertical_grid',
	'label'				=>	__('Vertical Grid',PLUGIN_THEME_STYLE_DOMAIN)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_archives',
	'label'				=>	__('Widget: Archives',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_calendar',
	'label'				=>	__('Widget: Calendar',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_categories',
	'label'				=>	__('Widget: Categories',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_custom_menu',
	'label'				=>	__('Widget: Custom menu',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_meta',
	'label'				=>	__('Widget: Meta',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_pages',
	'label'				=>	__('Widget: Pages',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_recent_comments',
	'label'				=>	__('Widget: Recent comments',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_recent_posts',
	'label'				=>	__('Widget: Recent posts',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_rss',
	'label'				=>	__('Widget: RSS',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_search',
	'label'				=>	__('Widget: Search',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_tag',
	'label'				=>	__('Widget: Tags',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_theme_post_most_comment',
	'label'				=>	__('Widget: Theme most commented',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));	

TSCSSRule::addMenuItem(array
(
	'id'				=>	'widget_theme_post_most_recent',
	'label'				=>	__('Widget: Theme recent posts',PLUGIN_THEME_STYLE_DOMAIN),
	'children'			=>	array
	(
		array
		(
			'id'		=>	'default',
			'label'		=>	__('Default',PLUGIN_THEME_STYLE_DOMAIN)
		),
		array
		(
			'id'		=>	'footer',
			'label'		=>	__('Footer',PLUGIN_THEME_STYLE_DOMAIN)
		),			
	)
));

TSCSSRule::addMenuItem(array
(
	'id'				=>	'zaccordion',
	'label'				=>	__('zAccordion',PLUGIN_THEME_STYLE_DOMAIN)
));	

/******************************************************************************/
/******************************************************************************/

TSCSSRule::addPanel('accordion_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Normal state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Normal (default) tab state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'accordion_default_tab_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-default',
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-default a'
				)					
			),
			array
			(
				'id'				=>	'accordion_default_tab_normal_state_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-default .ui-accordion-header-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),			
			array
			(
				'id'				=>	'accordion_default_tab_normal_state_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-default .ui-accordion-header-icon'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover tab state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'accordion_default_tab_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-hover',
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-hover a'
				)					
			),
			array
			(
				'id'				=>	'accordion_default_tab_hover_state_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-hover .ui-accordion-header-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)			
			),
			array
			(
				'id'				=>	'accordion_default_tab_hover_state_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-hover .ui-accordion-header-icon'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Active state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Active tab state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'accordion_default_tab_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-active',
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-active a'
				)					
			),
			array
			(
				'id'				=>	'accordion_default_tab_selected_state_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-active .ui-accordion-header-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)					
			),
			array
			(
				'id'				=>	'accordion_default_tab_selected_state_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-accordion.ui-accordion .ui-accordion-header.ui-state-active .ui-accordion-header-icon'
				)					
			)
		)
	)
));	

TSCSSRule::addPanel('accordion_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Normal state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Normal (default) tab state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'accordion_footer_tab_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-default',
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-default a'
				)					
			),
			array
			(
				'id'				=>	'accordion_footer_tab_normal_state_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-default .ui-accordion-header-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)					
			),
			array
			(
				'id'				=>	'accordion_footer_tab_normal_state_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-default .ui-accordion-header-icon'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover tab state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'accordion_footer_tab_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-hover',
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-hover a'
				)					
			),
			array
			(
				'id'				=>	'accordion_footer_tab_hover_state_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-hover .ui-accordion-header-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-width'			=>	'2'
				)					
			),
			array
			(
				'id'				=>	'accordion_footer_tab_hover_state_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-hover .ui-accordion-header-icon'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Active state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Active tab state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'accordion_footer_tab_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-active',
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-active a'
				)					
			),
			array
			(
				'id'				=>	'accordion_footer_tab_selected_state_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-active .ui-accordion-header-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)					
			),
			array
			(
				'id'				=>	'accordion_footer_tab_selected_state_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color of the icon',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-accordion.ui-accordion .ui-accordion-header.ui-state-active .ui-accordion-header-icon'
				)					
			)
		)
	)
));	

/******************************************************************************/

TSCSSRule::addPanel('audio',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Player',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Player colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'audio_default_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-audio'
				)					
			),
			array
			(
				'id'				=>	'audio_default_box_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-audio div.jp-interface'
				)					
			),
			array
			(
				'id'				=>	'audio_default_progress_bar_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Progress bar background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-audio div.jp-progress',
					'.pb-audio div.jp-volume-bar'
				)					
			),
			array
			(
				'id'				=>	'audio_default_seek_bar_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Seek bar background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FF9D5D',
				'selector'			=>	array
				(
					'.pb-audio div.jp-progress div.jp-seek-bar',
				)					
			),
			array
			(
				'id'				=>	'audio_default_value_bar_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Value bar background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-audio div.jp-progress div.jp-seek-bar div.jp-play-bar',
					'.pb-audio div.jp-volume-bar div.jp-volume-bar-value'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Track list',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Track list colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'audio_default_track_list_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'888888',
				'selector'			=>	array
				(
					'div.jp-audio div.jp-playlist li a',
					'div.jp-audio div.jp-playlist li a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('base',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Selection',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Selection colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'base_selection_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'::selection'
				),
				'customCSS'			=>	'::-moz-selection { color:__VALUE__; }'
			),
			array
			(
				'id'				=>	'base_selection_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'::selection'
				),
				'customCSS'			=>	'::-moz-selection { background-color:__VALUE__; }'
			)
		)
	)
));

TSCSSRule::addPanel('base_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'base_default_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'body',
					'input',
					'select',
					'textarea'
				)					
			),
			array
			(
				'id'				=>	'base_default_normal_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'a'
				)					
			),
			array
			(
				'id'				=>	'base_default_hover_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Page',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Page colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'base_default_page_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'theme-page'		
				)					
			)
		)
	)
));

TSCSSRule::addPanel('base_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Footer top',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Footer top colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'base_footer_top_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top'
				)					
			),
			array
			(
				'id'				=>	'base_footer_top_normal_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top a'
				)					
			),	
			array
			(
				'id'				=>	'base_footer_top_hover_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top a:hover'
				)					
			),	
			array
			(
				'id'				=>	'base_footer_top_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top'
				)					
			),
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Footer bottom',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Footer bottom colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'base_footer_bottom_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'div.theme-footer-bottom'
				)					
			),
			array
			(
				'id'				=>	'base_footer_bottom_normal_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'div.theme-footer-bottom a'
				)					
			),
			array
			(
				'id'				=>	'base_footer_bottom_hover_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'div.theme-footer-bottom a:hover'
				)					
			),
			array
			(
				'id'				=>	'base_footer_bottom_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-bottom'
				)					
			),
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('blockquote_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blockquote_default_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border left color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-blockquote'
				),
				'additionalRule'	=>	array
				(
					'padding-left'			=>	'30',
					'border-style'			=>	'solid',
					'border-left-width'		=>	'2'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blockquote_default_quote_text_color',
				'type'				=>	'color',
				'label'				=>	__('Quote color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-blockquote blockquote',
					'.pb-blockquote blockquote p'
				)
			),
			array
			(
				'id'				=>	'blockquote_default_author_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author name color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-blockquote .pb-blockquote-author'
				)
			),
			
			array
			(
				'id'				=>	'blockquote_default_normal_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color (default state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-blockquote blockquote a',
					'.pb-blockquote blockquote p a'
				)
			),
			array
			(
				'id'				=>	'blockquote_default_hover_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-blockquote blockquote a:hover',
					'.pb-blockquote blockquote p a:hover'
				)
			)
		)
	)
));

TSCSSRule::addPanel('blockquote_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blockquote_footer_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border left color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-blockquote'
				),
				'additionalRule'	=>	array
				(
					'padding-left'			=>	'20',
					'border-style'			=>	'solid',
					'border-left-width'		=>	'2'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blockquote_footer_quote_text_color',
				'type'				=>	'color',
				'label'				=>	__('Quote color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-blockquote blockquote',
					'div.theme-footer-top .pb-blockquote blockquote p'
				)
			),
			array
			(
				'id'				=>	'blockquote_footer_author_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author name color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-blockquote .pb-blockquote-author'
				)
			),
			
			array
			(
				'id'				=>	'blockquote_footer_normal_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color (default state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-blockquote blockquote a',
					'div.theme-footer-top .pb-blockquote blockquote p a'
				)
			),
			array
			(
				'id'				=>	'blockquote_footer_hover_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Link color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-blockquote blockquote a:hover',
					'div.theme-footer-top .pb-blockquote blockquote p a:hover'
				)
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('blog',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_header_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.theme-post .theme-post-header',
					'.theme-post .theme-post-header a'
				)					
			),
			array
			(
				'id'				=>	'blog_header_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.theme-post .theme-post-header a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Date',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Date colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_date_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.theme-post .theme-post-date'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Post type icon',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Post type icon colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_post_type_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.theme-post .theme-post-icon'
				)					
			)
		)
	),		
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Post meta bar',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Post meta bar colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_meta_bar_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.theme-post .theme-post-meta>div',
					'.theme-post .theme-post-meta>div a'
				)					
			),
			array
			(
				'id'				=>	'blog_meta_bar_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.theme-post .theme-post-meta>div a:hover'
				)					
			),
			array
			(
				'id'				=>	'blog_meta_bar_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Bottom border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.theme-post .theme-post-meta'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0'
				)
			)
		)
	),		
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Excerpt',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Excerpt colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_excerpt_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.theme-post .theme-post-content'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Button "Continue reading"',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Button "Continue reading" colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_button_continue_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.theme-post .theme-post-button-continue'
				)
			),
			array
			(
				'id'				=>	'blog_button_continue_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.theme-post .theme-post-button-continue'
				)					
			),
			array
			(
				'id'				=>	'blog_button_continue_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.theme-post .theme-post-button-continue:hover'
				)
			),
			array
			(
				'id'				=>	'blog_button_continue_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.theme-post .theme-post-button-continue:hover'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Button "Leave a reply"',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Button "Leave a reply" colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_button_reply_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.theme-post .theme-post-button-reply'
				)
			),
			array
			(
				'id'				=>	'blog_button_reply_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.theme-post .theme-post-button-reply'
				)					
			),
			array
			(
				'id'				=>	'blog_button_reply_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.theme-post .theme-post-button-reply:hover'
				)
			),
			array
			(
				'id'				=>	'blog_button_reply_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.theme-post .theme-post-button-reply:hover'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_divider_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.theme-post .theme-post-divider'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Post navigation',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Post navigation colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_post_navigation_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-post-navigation a'
				)					
			),
			array
			(
				'id'				=>	'blog_post_navigation_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'div.theme-post-navigation a'
				)
			),
			array
			(
				'id'				=>	'blog_post_navigation_text_color_hover',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-post-navigation a:hover'
				)					
			),
			array
			(
				'id'				=>	'blog_post_navigation_border_color_hover',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'div.theme-post-navigation a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'blog_pagination_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>a'
				)					
			),
			array
			(
				'id'				=>	'blog_pagination_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>a'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0',
				)
			),
			array
			(
				'id'				=>	'blog_pagination_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>a'
				)					
			),					
			array
			(
				'id'				=>	'blog_pagination_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>a:hover'
				)					
			),
			array
			(
				'id'				=>	'blog_pagination_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0',
				)
			),
			array
			(
				'id'				=>	'blog_pagination_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>a:hover'
				)					
			),
			array
			(
				'id'				=>	'blog_pagination_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>span'
				)					
			),
			array
			(
				'id'				=>	'blog_pagination_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>span'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0',
				)					
			),
			array
			(
				'id'				=>	'blog_pagination_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.theme-blog-pagination>span'
				)					
			)
		)
	)
));	

/******************************************************************************/

TSCSSRule::addPanel('box_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Background',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Background colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'box_default_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-box'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Border',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Border colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'box_default_border_color_top',
				'type'				=>	'border-top-color',
				'label'				=>	__('Border top color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-box'
				),
				'additionalRule'			=>	array
				(
					'border-top-style'		=>	'solid',
					'border-top-width'		=>	'1',
				)
			),
			array
			(
				'id'				=>	'box_default_border_color_right',
				'type'				=>	'border-right-color',
				'label'				=>	__('Border right color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-box'
				),
				'additionalRule'			=>	array
				(
					'border-right-style'	=>	'solid',
					'border-right-width'	=>	'1',
				)
			),
			array
			(
				'id'				=>	'box_default_border_color_bottom',
				'type'				=>	'border-bottom-color',
				'label'				=>	__('Border bottom color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'EEEEEE',
				'selector'			=>	array
				(
					'.pb-box'
				),
				'additionalRule'			=>	array
				(
					'border-bottom-style'	=>	'solid',
					'border-bottom-width'	=>	'1',
				)
			),
			array
			(
				'id'				=>	'box_default_border_color_left',
				'type'				=>	'border-left-color',
				'label'				=>	__('Border left color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-box'
				),
				'additionalRule'			=>	array
				(
					'border-left-style'		=>	'solid',
					'border-left-width'		=>	'1',
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'box_default_text_color_content',
				'type'				=>	'color',
				'label'				=>	__('Content text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-box .pb-box-content'
				)
			),
			array
			(
				'id'				=>	'box_default_text_color_header',
				'type'				=>	'color',
				'label'				=>	__('Header text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-box .pb-box-header'
				)
			),
			array
			(
				'id'				=>	'box_default_text_color_link',
				'type'				=>	'color',
				'label'				=>	__('Link text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-box .pb-box-content a'
				)
			),
			array
			(
				'id'				=>	'box_default_text_color_link_hover',
				'type'				=>	'color',
				'label'				=>	__('Link text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-box .pb-box-content a:hover'
				)
			)
		)
	)
));

TSCSSRule::addPanel('box_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Background',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Background colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'box_footer_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Border',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Border colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'box_footer_border_color_top',
				'type'				=>	'border-top-color',
				'label'				=>	__('Border top color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box'
				),
				'additionalRule'			=>	array
				(
					'border-top-style'		=>	'solid',
					'border-top-width'		=>	'1',
				)
			),
			array
			(
				'id'				=>	'box_footer_border_color_right',
				'type'				=>	'border-right-color',
				'label'				=>	__('Border right color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box'
				),
				'additionalRule'			=>	array
				(
					'border-right-style'	=>	'solid',
					'border-right-width'	=>	'1',
				)
			),
			array
			(
				'id'				=>	'box_footer_border_color_bottom',
				'type'				=>	'border-bottom-color',
				'label'				=>	__('Border bottom color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box'
				),
				'additionalRule'			=>	array
				(
					'border-bottom-style'	=>	'solid',
					'border-bottom-width'	=>	'1',
				)
			),
			array
			(
				'id'				=>	'box_footer_border_color_left',
				'type'				=>	'border-left-color',
				'label'				=>	__('Border left color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box'
				),
				'additionalRule'			=>	array
				(
					'border-left-style'		=>	'solid',
					'border-left-width'		=>	'1',
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'box_footer_text_color_content',
				'type'				=>	'color',
				'label'				=>	__('Content text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box .pb-box-content'
				)
			),
			array
			(
				'id'				=>	'box_footer_text_color_header',
				'type'				=>	'color',
				'label'				=>	__('Header text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box .pb-box-header'
				)
			),
			array
			(
				'id'				=>	'box_footer_text_color_link',
				'type'				=>	'color',
				'label'				=>	__('Link text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box .pb-box-content a'
				)
			),
			array
			(
				'id'				=>	'box_footer_text_color_link_hover',
				'type'				=>	'color',
				'label'				=>	__('Link text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-box .pb-box-content a:hover'
				)
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('button',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Normal state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Normal (default) state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'button_default_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-button>a'
				)
			),
			array
			(
				'id'				=>	'button_default_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-button>a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),			
			array
			(
				'id'				=>	'button_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-button>a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'button_default_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-button>a:hover'
				)
			),
			array
			(
				'id'				=>	'button_default_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-button>a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)					
			),
			array
			(
				'id'				=>	'button_default_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-button>a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('call_to_action',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'call_to_action_default_box_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-call-to-action'
				)
			),
			array
			(
				'id'				=>	'call_to_action_default_box_border_top_color',
				'type'				=>	'border-top-color',
				'label'				=>	__('Border top color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-call-to-action'
				),
				'additionalRule'	=>	array
				(
					'border-top-style'		=>	'solid',
					'border-top-width'		=>	'2'
				)
			),
			array
			(
				'id'				=>	'call_to_action_default_box_border_right_color',
				'type'				=>	'border-right-color',
				'label'				=>	__('Border right color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-call-to-action'
				),
				'additionalRule'	=>	array
				(
					'border-right-style'	=>	'solid',
					'border-right-width'	=>	'2'
				)					
			),
			array
			(
				'id'				=>	'call_to_action_default_box_border_bottom_color',
				'type'				=>	'border-bottom-color',
				'label'				=>	__('Border bottom color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-call-to-action'
				),
				'additionalRule'	=>	array
				(
					'border-bottom-style'	=>	'solid',
					'border-bottom-width'	=>	'2'
				)

			),
			array
			(
				'id'				=>	'call_to_action_default_box_border_left_color',
				'type'				=>	'border-left-color',
				'label'				=>	__('Border left color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-call-to-action'
				),
				'additionalRule'	=>	array
				(
					'border-left-style'		=>	'solid',
					'border-left-width'		=>	'2'
				)				
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('First line',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('First line colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'call_to_action_default_first_line_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-call-to-action .pb-call-to-action-box>.pb-call-to-action-box-first-line,'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Second line',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Second line colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'call_to_action_default_second_line_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.pb-call-to-action .pb-call-to-action-box>.pb-call-to-action-box-second-line,'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Button',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Button colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'call_to_action_default_button_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-call-to-action .pb-call-to-action-box>div>a'
				)
			),
			array
			(
				'id'				=>	'call_to_action_default_button_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-call-to-action .pb-call-to-action-box>div>a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)	
			),
			array
			(
				'id'				=>	'call_to_action_default_button_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-call-to-action .pb-call-to-action-box>div>a'
				)					
			),
			array
			(
				'id'				=>	'call_to_action_default_button_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-call-to-action .pb-call-to-action-box>div>a:hover'
				)
			),
			array
			(
				'id'				=>	'call_to_action_default_button_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-call-to-action .pb-call-to-action-box>div>a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),
			array
			(
				'id'				=>	'call_to_action_default_button_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-call-to-action .pb-call-to-action-box>div>a:hover'
				)					
			)
		)
	)
));	

/******************************************************************************/

TSCSSRule::addPanel('class',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'class_default_box_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-class>ul>li',
					'.pb-class>ul>li>div'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'class_default_class_name_text_color',
				'type'				=>	'color',
				'label'				=>	__('Class name text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-name'
				)
			),
			array
			(
				'id'				=>	'class_default_class_label_text_color',
				'type'				=>	'color',
				'label'				=>	__('Class label text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-label'
				)
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Attributes',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Attributes colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'class_default_attribute_name_text_color',
				'type'				=>	'color',
				'label'				=>	__('Attribute name text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-attribute>li>.pb-class-item-attribute-name'
				)
			),
			array
			(
				'id'				=>	'class_default_attribute_value_text_color',
				'type'				=>	'color',
				'label'				=>	__('Attribute value text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-attribute>li>.pb-class-item-attribute-value'
				)
			),
			array
			(
				'id'				=>	'class_default_attribute_seperator_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Separator color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-attribute>li.pb-layout-column-left'
				),
				'additionalRule'			=>	array
				(
					'border-right-width'	=> '1',
					'border-right-style'	=> 'solid'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Button',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Button colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'class_default_button_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-button>a'
				)
			),
			array
			(
				'id'				=>	'class_default_button_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-button>a'
				)					
			),
			array
			(
				'id'				=>	'class_default_button_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-button>a:hover'
				)
			),
			array
			(
				'id'				=>	'class_default_button_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-class>ul>li>div>.pb-class-item-button>a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('comment_form',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Fields',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Field colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_form_default_normal_state_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'#comment-form textarea',
					'#comment-form input[type="text"]'
				)
			),
			array
			(
				'id'				=>	'comment_form_default_normal_state_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'#comment-form textarea',
					'#comment-form input[type="text"]'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'1',
					'border-style'	=>	'solid',							
				)
			),
			array
			(
				'id'				=>	'comment_form_default_focus_state_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (focus state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'#comment-form textarea:focus',
					'#comment-form input[type="text"]:focus'
				)					
			),
			array
			(
				'id'				=>	'comment_form_default_focus_state_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (focus state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'#comment-form textarea:focus',
					'#comment-form input[type="text"]:focus'
				),
				'additionalRule'	=>	array
				(
					'border-top-color'		=>	'transparent',
					'border-right-color'	=>	'transparent',
					'border-bottom-width'	=>	'2',
					'border-left-color'		=>	'transparent',
					'border-style'			=>	'solid',
					'padding-bottom'		=>	'9'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Buttons',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Button colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_form_default_normal_state_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'#comment-form input[type="submit"]',
					'#cancel-comment-reply-link'
				)					
			),
			array
			(
				'id'				=>	'comment_form_default_normal_state_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'#comment-form input[type="submit"]',
					'#cancel-comment-reply-link'
				)					
			),
			array
			(
				'id'				=>	'comment_form_default_hover_state_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'#comment-form input[type="submit"]:hover',
					'#cancel-comment-reply-link:hover'
				)					
			),
			array
			(
				'id'				=>	'comment_form_default_hover_state_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'#comment-form input[type="submit"]:hover',
					'#cancel-comment-reply-link:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Notices',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Notice colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_form_default_notice_success_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color - success notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'#comment-form .qtip.pb-qtip.pb-qtip-success'
				)					
			),
			array
			(
				'id'				=>	'comment_form_default_notice_success_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color - success notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'67CC2A',
				'selector'			=>	array
				(
					'#comment-form .qtip.pb-qtip.pb-qtip-success'
				),
				'customCSS'			=>	'#comment-form .qtip.pb-qtip.pb-qtip-success .qtip-tip { border-color:__VALUE__; }'
			),
			array
			(
				'id'				=>	'comment_form_default_notice_error_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color - error notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'#comment-form .qtip.pb-qtip.pb-qtip-error'
				)					
			),
			array
			(
				'id'				=>	'comment_form_default_notice_error_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color - error notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FF9600',
				'selector'			=>	array
				(
					'#comment-form .qtip.pb-qtip.pb-qtip-error'
				),
				'customCSS'			=>	'#comment-form .qtip.pb-qtip.pb-qtip-error .qtip-tip { border-color:__VALUE__; }'
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Notes',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Notes colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_form_default_note_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'#comment-form p.logged-in-as',
					'#comment-form p.comment-notes',
					'#comment-form p.form-allowed-tags'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('comments_list',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_list_divider_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'#comments_list>ul li .theme-comment-inner'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'1',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'0',
					'border-left-width'		=>	'0'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Author',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Author colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_list_author_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'#comments_list>ul>li .theme-comment-meta>.theme-comment-meta-author',
					'#comments_list>ul>li .theme-comment-meta>.theme-comment-meta-author a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Author of parent comment',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Author of parent comment colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_list_author_parent_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'#comments_list>ul>li .theme-comment-meta>.theme-comment-meta-reply',
					'#comments_list>ul>li .theme-comment-meta>.theme-comment-meta-reply a'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Date',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Date colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_list_date_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'#comments_list>ul>li .theme-comment-meta>.theme-comment-meta-date'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Content colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_list_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'#comments_list>ul>li .theme-comment-content'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Reply button',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Reply button colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_list_button_reply_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'#comments_list>ul>li .theme-comment-content .theme-comment-reply'
				)					
			),
			array
			(
				'id'				=>	'comment_list_button_reply_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'#comments_list>ul>li .theme-comment-content .theme-comment-reply'
				)					
			),
			array
			(
				'id'				=>	'comment_list_button_reply_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'#comments_list>ul>li .theme-comment-content .theme-comment-reply:hover'
				)					
			),
			array
			(
				'id'				=>	'comment_list_button_reply_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'#comments_list>ul>li .theme-comment-content .theme-comment-reply:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'comment_list_pagination_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>a'
				)					
			),
			array
			(
				'id'				=>	'comment_list_pagination_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>a'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0',
				)
			),
			array
			(
				'id'				=>	'comment_list_pagination_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>a'
				)					
			),					
			array
			(
				'id'				=>	'comment_list_pagination_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>a:hover'
				)					
			),
			array
			(
				'id'				=>	'comment_list_pagination_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0',
				)
			),
			array
			(
				'id'				=>	'comment_list_pagination_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>a:hover'
				)					
			),
			array
			(
				'id'				=>	'comment_list_pagination_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>span'
				)					
			),
			array
			(
				'id'				=>	'comment_list_pagination_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>span'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0',
				)					
			),
			array
			(
				'id'				=>	'comment_list_pagination_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.theme-comment-pagination>span'
				)					
			)
		)
	)
));		

/******************************************************************************/

TSCSSRule::addPanel('contact_form_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Fields',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Field colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'contact_form_default_normal_state_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-contact-form select',
					'.pb-contact-form textarea',
					'.pb-contact-form input[type="text"]',
					'.pb-contact-form input[type="password"]',
					'.pb-contact-form>div>ul>li label.pb-infield-label'
				)
			),
			array
			(
				'id'				=>	'contact_form_default_normal_state_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-contact-form select',
					'.pb-contact-form textarea',
					'.pb-contact-form input[type="text"]',
					'.pb-contact-form input[type="password"]'							
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'1',
					'border-style'	=>	'solid',							
				)
			),
			array
			(
				'id'				=>	'contact_form_default_normal_state_field_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'.pb-contact-form select',
					'.pb-contact-form textarea',
					'.pb-contact-form input[type="text"]',
					'.pb-contact-form input[type="password"]'							
				)
			),
			array
			(
				'id'				=>	'contact_form_default_focus_state_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-contact-form select:focus',
					'.pb-contact-form textarea:focus',
					'.pb-contact-form input[type="text"]:focus',
					'.pb-contact-form input[type="password"]:focus',						
				)					
			),
			array
			(
				'id'				=>	'contact_form_default_focus_state_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-contact-form select:focus',
					'.pb-contact-form textarea:focus',
					'.pb-contact-form input[type="text"]:focus',
					'.pb-contact-form input[type="password"]:focus'						
				),
				'additionalRule'	=>	array
				(
					'border-top-color'		=>	'transparent',
					'border-right-color'	=>	'transparent',
					'border-bottom-width'	=>	'2',
					'border-left-color'		=>	'transparent',
					'border-style'			=>	'solid',
					'padding-bottom'		=>	'9'						
				)
			),
			array
			(
				'id'				=>	'contact_form_default_focus_state_field_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'.pb-contact-form select:focus',
					'.pb-contact-form textarea:focus',
					'.pb-contact-form input[type="text"]:focus',
					'.pb-contact-form input[type="password"]:focus',						
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Buttons',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Button colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'contact_form_default_normal_state_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-contact-form input[type="submit"]',
					'.pb-contact-form input[type="button"]'						
				)					
			),
			array
			(
				'id'				=>	'contact_form_default_normal_state_button_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-contact-form input[type="submit"]',
					'.pb-contact-form input[type="button"]'							
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),			
			array
			(
				'id'				=>	'contact_form_default_normal_state_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-contact-form input[type="submit"]',
					'.pb-contact-form input[type="button"]'							
				)					
			),
			array
			(
				'id'				=>	'contact_form_default_hover_state_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-contact-form input[type="submit"]:hover',
					'.pb-contact-form input[type="button"]:hover'							
				)					
			),
			array
			(
				'id'				=>	'contact_form_default_hover_state_button_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-contact-form input[type="submit"]:hover',
					'.pb-contact-form input[type="button"]:hover'							
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)					
			),			
			array
			(
				'id'				=>	'contact_form_default_hover_state_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-contact-form input[type="submit"]:hover',
					'.pb-contact-form input[type="button"]:hover'							
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Notices',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Notice colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'contact_form_default_notice_success_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color - success notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-contact-form .qtip.pb-qtip.pb-qtip-success'
				)					
			),
			array
			(
				'id'				=>	'contact_form_default_notice_success_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color - success notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'67CC2A',
				'selector'			=>	array
				(
					'.pb-contact-form .qtip.pb-qtip.pb-qtip-success'
				),
				'customCSS'			=>	'.pb-contact-form .qtip.pb-qtip.pb-qtip-success .qtip-tip { border-color:__VALUE__; }'
			),
			array
			(
				'id'				=>	'contact_form_default_notice_error_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color - error notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-contact-form .qtip.pb-qtip.pb-qtip-error'
				)					
			),
			array
			(
				'id'				=>	'contact_form_default_notice_error_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color - error notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FF9600',
				'selector'			=>	array
				(
					'.pb-contact-form .qtip.pb-qtip.pb-qtip-error'
				),
				'customCSS'			=>	'.pb-contact-form .qtip.pb-qtip.pb-qtip-error .qtip-tip { border-color:__VALUE__; }'
			)
		)
	)
));

TSCSSRule::addPanel('contact_form_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Fields',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Field colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'contact_form_footer_normal_state_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form select',
					'div.theme-footer-top .pb-contact-form textarea',
					'div.theme-footer-top .pb-contact-form input[type="text"]',
					'div.theme-footer-top .pb-contact-form input[type="password"]',
					'div.theme-footer-top .pb-contact-form>div>ul>li label.pb-infield-label'
				)
			),
			array
			(
				'id'				=>	'contact_form_footer_normal_state_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form select',
					'div.theme-footer-top .pb-contact-form textarea',
					'div.theme-footer-top .pb-contact-form input[type="text"]',
					'div.theme-footer-top .pb-contact-form input[type="password"]'							
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'1',
					'border-style'	=>	'solid',							
				)
			),
			array
			(
				'id'				=>	'contact_form_footer_normal_state_field_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form select',
					'div.theme-footer-top .pb-contact-form textarea',
					'div.theme-footer-top .pb-contact-form input[type="text"]',
					'div.theme-footer-top .pb-contact-form input[type="password"]'							
				)
			),
			array
			(
				'id'				=>	'contact_form_footer_focus_state_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form select:focus',
					'div.theme-footer-top .pb-contact-form textarea:focus',
					'div.theme-footer-top .pb-contact-form input[type="text"]:focus',
					'div.theme-footer-top .pb-contact-form input[type="password"]:focus',						
				)					
			),
			array
			(
				'id'				=>	'contact_form_footer_focus_state_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form select:focus',
					'div.theme-footer-top .pb-contact-form textarea:focus',
					'div.theme-footer-top .pb-contact-form input[type="text"]:focus',
					'div.theme-footer-top .pb-contact-form input[type="password"]:focus'						
				),
				'additionalRule'	=>	array
				(
					'border-top-color'		=>	'transparent',
					'border-right-color'	=>	'transparent',
					'border-bottom-width'	=>	'2',
					'border-left-color'		=>	'transparent',
					'border-style'			=>	'solid',
					'padding-bottom'		=>	'9'						
				)
			),
			array
			(
				'id'				=>	'contact_form_footer_focus_state_field_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form select:focus',
					'div.theme-footer-top .pb-contact-form textarea:focus',
					'div.theme-footer-top .pb-contact-form input[type="text"]:focus',
					'div.theme-footer-top .pb-contact-form input[type="password"]:focus',						
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Buttons',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Button colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'contact_form_footer_normal_state_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form input[type="submit"]',
					'div.theme-footer-top .pb-contact-form input[type="button"]'						
				)					
			),
			array
			(
				'id'				=>	'contact_form_footer_normal_state_button_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form input[type="submit"]',
					'div.theme-footer-top .pb-contact-form input[type="button"]'							
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),			
			array
			(
				'id'				=>	'contact_form_footer_normal_state_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form input[type="submit"]',
					'div.theme-footer-top .pb-contact-form input[type="button"]'							
				)					
			),
			array
			(
				'id'				=>	'contact_form_footer_hover_state_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form input[type="submit"]:hover',
					'div.theme-footer-top .pb-contact-form input[type="button"]:hover'							
				)					
			),
			array
			(
				'id'				=>	'contact_form_footer_hover_state_button_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form input[type="submit"]:hover',
					'div.theme-footer-top .pb-contact-form input[type="button"]:hover'							
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)					
			),			
			array
			(
				'id'				=>	'contact_form_footer_hover_state_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form input[type="submit"]:hover',
					'div.theme-footer-top .pb-contact-form input[type="button"]:hover'							
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Notices',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Notice colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'contact_form_footer_notice_success_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color - success notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form .qtip.pb-qtip.pb-qtip-success'
				)					
			),
			array
			(
				'id'				=>	'contact_form_footer_notice_success_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color - success notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'67CC2A',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form .qtip.pb-qtip.pb-qtip-success'
				),
				'customCSS'			=>	'div.theme-footer-top .pb-contact-form .qtip.pb-qtip.pb-qtip-success .qtip-tip { border-color:__VALUE__; }'
			),
			array
			(
				'id'				=>	'contact_form_footer_notice_error_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color - error notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form .qtip.pb-qtip.pb-qtip-error'
				)					
			),
			array
			(
				'id'				=>	'contact_form_footer_notice_error_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color - error notice',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FF9600',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-contact-form .qtip.pb-qtip.pb-qtip-error'
				),
				'customCSS'			=>	'div.theme-footer-top .pb-contact-form .qtip.pb-qtip.pb-qtip-error .qtip-tip { border-color:__VALUE__; }'
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('counter_box_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text counter',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text counter colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_default_counter_text_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-counter-box ul>li>div>div.pb-counter-box-text-counter'
				)
			),
			array
			(
				'id'				=>	'counter_box_default_counter_text_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-counter-box ul>li>div>div.pb-counter-box-text-counter'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),	
			array
			(
				'id'				=>	'counter_box_default_counter_text_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-counter-box ul>li>div>div.pb-counter-box-text-counter'
				)
			)		
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Graphic counter',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Graphic counter colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_default_counter_graphic_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-counter-box ul>li>div>div.pb-counter-box-graphic-counter>.pb-counter-box-graphic-counter-background',
					'.pb-counter-box ul>li>div>div.pb-counter-box-graphic-counter>.pb-counter-box-graphic-counter-foreground'
				)
			)
		)
	),		
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_default_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-counter-box ul>li>div>.pb-counter-box-header'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Content colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_default_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-counter-box ul>li>div>p'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_default_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-counter-box .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'counter_box_default_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-counter-box .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'counter_box_default_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-counter-box .pb-slider-pagination a:active',
					'.pb-counter-box .pb-slider-pagination a.selected'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('counter_box_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text counter',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text counter colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_footer_counter_text_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box ul>li>div>div.pb-counter-box-text-counter'
				)
			),
			array
			(
				'id'				=>	'counter_box_footer_counter_text_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box ul>li>div>div.pb-counter-box-text-counter'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),			
			array
			(
				'id'				=>	'counter_box_footer_counter_text_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box ul>li>div>div.pb-counter-box-text-counter'
				)
			)		
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Graphic counter',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Graphic counter colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_footer_counter_graphic_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box ul>li>div>div.pb-counter-box-graphic-counter>.pb-counter-box-graphic-counter-background',
					'div.theme-footer-top .pb-counter-box ul>li>div>div.pb-counter-box-graphic-counter>.pb-counter-box-graphic-counter-foreground'
				)
			)
		)
	),		
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_footer_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box ul>li>div>.pb-counter-box-header'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Content colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_footer_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box ul>li>div>p'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_box_footer_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'counter_box_footer_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'counter_box_footer_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-counter-box .pb-slider-pagination a:active',
					'div.theme-footer-top .pb-counter-box .pb-slider-pagination a.selected'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('counter_list_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Counter list',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Counter list colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_list_default_counter_label_text_color',
				'type'				=>	'color',
				'label'				=>	__('Label text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.pb-counter-list>ul>li>span.pb-counter-list-label'
				)					
			),
			array
			(
				'id'				=>	'counter_list_default_counter_value_text_color',
				'type'				=>	'color',
				'label'				=>	__('Value text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.pb-counter-list>ul>li>span.pb-counter-list-value'
				)					
			),
			array
			(
				'id'				=>	'counter_list_default_progress_bar_foreground_color',
				'type'				=>	'border-color',
				'label'				=>	__('Progress bar foreground color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.pb-counter-list>ul>li>span.pb-counter-list-foreground'
				)					
			),
			array
			(
				'id'				=>	'counter_list_default_progress_bar_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Progress bar background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'div.pb-counter-list>ul>li>span.pb-counter-list-background'
				)					
			),			
		)
	)
));	

TSCSSRule::addPanel('counter_list_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Counter list',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Counter list colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'counter_list_footer_counter_label_text_color',
				'type'				=>	'color',
				'label'				=>	__('Label text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top div.pb-counter-list>ul>li>span.pb-counter-list-label'
				)					
			),
			array
			(
				'id'				=>	'counter_list_footer_counter_value_text_color',
				'type'				=>	'color',
				'label'				=>	__('Value text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top div.pb-counter-list>ul>li>span.pb-counter-list-value'
				)					
			),
			array
			(
				'id'				=>	'counter_list_footer_progress_bar_foreground_color',
				'type'				=>	'border-color',
				'label'				=>	__('Progress bar foreground color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top div.pb-counter-list>ul>li>span.pb-counter-list-foreground'
				)					
			),
			array
			(
				'id'				=>	'counter_list_footer_progress_bar_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Progress bar background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top div.pb-counter-list>ul>li>span.pb-counter-list-background'
				)					
			),			
		)
	)
));	

/******************************************************************************/

TSCSSRule::addPanel('divider_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'divider_default_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Line color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'EEEEEE',
				'selector'			=>	array
				(
					'div.pb-divider'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('divider_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'divider_footer_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Line color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top div.pb-divider'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('dropcap_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'dropcap_default_first_letter_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color of first letter',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'p.pb-dropcap>span.pb-dropcap-first-letter'
				)					
			),
			array
			(
				'id'				=>	'dropcap_default_first_letter_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color of first letter',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'p.pb-dropcap>span.pb-dropcap-first-letter'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('dropcap_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'dropcap_footer_first_letter_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color of first letter',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top p.pb-dropcap>span.pb-dropcap-first-letter'
				)					
			),
			array
			(
				'id'				=>	'dropcap_footer_first_letter_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color of first letter',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top p.pb-dropcap>span.pb-dropcap-first-letter'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('feature_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Icon of even elements',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Colors of icons for even elements',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_default_element_even_icon_bg_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-feature ul>li.pb-feature-element-even>div>.pb-feature-icon'
				)
			),		
			array
			(
				'id'				=>	'feature_default_element_even_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-feature ul>li.pb-feature-element-even>div>.pb-feature-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),				
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Icon of odd elements',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Colors of icons for odd elements',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_default_element_odd_icon_bg_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-feature ul>li.pb-feature-element-odd>div>.pb-feature-icon'
				)
			),		
			array
			(
				'id'				=>	'feature_default_element_odd_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-feature ul>li.pb-feature-element-odd>div>.pb-feature-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),				
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_default_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-feature ul>li>div>.pb-feature-header',
					'.pb-feature ul>li>div>.pb-feature-header a'							
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_default_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-feature ul>li>div>.pb-feature-content'	
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_default_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-feature .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'feature_default_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-feature .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'feature_default_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-feature .pb-slider-pagination a:active',
					'.pb-feature .pb-slider-pagination a.selected'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('feature_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Icon of even elements',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Colors of icons for even elements',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_footer_element_even_icon_bg_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature ul>li.pb-feature-element-even>div>.pb-feature-icon'
				)
			),		
			array
			(
				'id'				=>	'feature_footer_element_even_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature ul>li.pb-feature-element-even>div>.pb-feature-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),				
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Icon of odd elements',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Colors of icons for odd elements',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_footer_element_odd_icon_bg_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature ul>li.pb-feature-element-odd>div>.pb-feature-icon'
				)
			),		
			array
			(
				'id'				=>	'feature_footer_element_odd_icon_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature ul>li.pb-feature-element-odd>div>.pb-feature-icon'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)
			),				
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_footer_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature ul>li>div>.pb-feature-header',
					'div.theme-footer-top .pb-feature ul>li>div>.pb-feature-header a'							
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_footer_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature ul>li>div>.pb-feature-content'	
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'feature_footer_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'feature_footer_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'feature_footer_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-feature .pb-slider-pagination a:active',
					'div.theme-footer-top .pb-feature .pb-slider-pagination a.selected'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('flex_slider',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Control pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Control pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'flex_slider_control_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-flex-slider .pb-slider-pagination li a'
				)					
			),
			array
			(
				'id'				=>	'flex_slider_control_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-flex-slider .pb-slider-pagination li a:hover',
				)					
			),
			array
			(
				'id'				=>	'flex_slider_control_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-flex-slider .pb-slider-pagination li a.flex-active'
				)					
			)
		)			
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Direction pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Direction pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'flex_slider_direction_pagination_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-flex-slider .flex-direction-nav a'
				)					
			),
			array
			(
				'id'				=>	'flex_slider_direction_pagination_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-flex-slider .flex-direction-nav a:hover'
				)					
			)
		)			
	)
));

/******************************************************************************/

TSCSSRule::addPanel('header_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H1',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H1',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_default_h1',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'h1',
					'h1 a'
				)					
			),
			array
			(
				'id'				=>	'header_default_bold_markup_h1',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'h1 b',
					'h1 a b'
				)					
			),
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H2',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H2',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_default_h2',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'h2',
					'h2 a'
				)					
			),
			array
			(
				'id'				=>	'header_default_bold_markup_h2',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'h2 b',
					'h2 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H3',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H3',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_default_h3',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'h3',
					'h3 a'
				)					
			),
			array
			(
				'id'				=>	'header_default_bold_markup_h3',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'h3 b',
					'h3 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H4',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H4',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_default_h4',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'h4',
					'h4 a'
				)					
			),
			array
			(
				'id'				=>	'header_default_bold_markup_h4',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'h4 b',
					'h4 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H5',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H5',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_default_h5',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'h5',
					'h5 a'
				)					
			),
			array
			(
				'id'				=>	'header_default_bold_markup_h5',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'h5 b',
					'h5 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H6',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H6',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_default_h6',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'h6',
					'h6 a'
				)					
			),
			array
			(
				'id'				=>	'header_default_bold_markup_h6',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'h6 b',
					'h6 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header widget underline',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header widget underline color',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_widget_default_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.theme-widget>.pb-header>.pb-header-underline'
				)					
			)
		)
	)	
));

TSCSSRule::addPanel('header_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H1',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H1',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_footer_h1',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h1',
					'div.theme-footer-top h1 a'
				)					
			),
			array
			(
				'id'				=>	'header_footer_bold_markup_h1',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h1 b',
					'div.theme-footer-top h1 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H2',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H2',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_footer_h2',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h2',
					'div.theme-footer-top h2 a'
				)					
			),
			array
			(
				'id'				=>	'header_footer_bold_markup_h2',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h2 b',
					'div.theme-footer-top h2 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H3',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H3',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_footer_h3',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h3',
					'div.theme-footer-top h3 a'
				)					
			),
			array
			(
				'id'				=>	'header_footer_bold_markup_h3',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h3 b',
					'div.theme-footer-top h3 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H4',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H4',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_footer_h4',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h4',
					'div.theme-footer-top h4 a'
				)					
			),
			array
			(
				'id'				=>	'header_footer_bold_markup_h4',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h4 b',
					'div.theme-footer-top h4 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H5',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H5',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_footer_h5',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h5',
					'div.theme-footer-top h5 a'
				)					
			),
			array
			(
				'id'				=>	'header_footer_bold_markup_h5',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h5 b',
					'div.theme-footer-top h5 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header H6',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header H6',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_footer_h6',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h6',
					'div.theme-footer-top h6 a'
				)					
			),
			array
			(
				'id'				=>	'header_footer_bold_markup_h6',
				'type'				=>	'color',
				'label'				=>	__('Text color for b (bold) markup',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top h6 b',
					'div.theme-footer-top h6 a b'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header widget underline',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header widget underline color',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_widget_footer_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .theme-widget>.pb-header>.pb-header-underline'
				)					
			)
		)
	)			
));

/******************************************************************************/

TSCSSRule::addPanel('header_and_subheader_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Subheader text color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Subheader text color',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_subheader_default_subheader_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-header-subheader .pb-subheader'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('header_and_subheader_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Subheader text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Subheader text color',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'header_subheader_footer_subheader_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-header-subheader .pb-subheader'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('go_to_top',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Go to top',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Go to top colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'go_to_top_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'00000080',
				'selector'			=>	array
				(
					'#theme-go-to-top'
				)					
			),
			array
			(
				'id'				=>	'go_to_top_default_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'#theme-go-to-top:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('image_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Image hover icon',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Image hover icon colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'image_default_normal_state_image_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F80',
				'selector'			=>	array
				(
					'.pb-image-box.pb-image-hover .pb-image>span>span'
				)					
			)
		)
	),	
	array
	(		
		'description'				=>	array
		(
			'header'				=>	__('Text box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text box under image',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'image_default_normal_state_text_box_caption_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-image-box .pb-image-text'
				)					
			),
			array
			(
				'id'				=>	'image_default_hover_state_text_box_caption_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-image-box.pb-image-hover:hover .pb-image-text'
				)					
			),
			array
			(
				'id'				=>	'image_default_normal_state_text_box_caption_text_color',
				'type'				=>	'color',
				'label'				=>	__('Caption text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-image-box .pb-image-text .pb-image-text-caption'
				)					
			),
			array
			(
				'id'				=>	'image_default_hover_state_text_box_caption_text_color',
				'type'				=>	'color',
				'label'				=>	__('Caption text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-image-box.pb-image-hover:hover .pb-image-text .pb-image-text-caption'
				)					
			),
			array
			(
				'id'				=>	'image_default_normal_state_text_box_caption_description_color',
				'type'				=>	'color',
				'label'				=>	__('Description text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-image-box .pb-image-text .pb-image-text-description'
				)					
			),
			array
			(
				'id'				=>	'image_default_hover_state_text_box_caption_description_color',
				'type'				=>	'color',
				'label'				=>	__('Description text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-image-box.pb-image-hover:hover .pb-image-text .pb-image-text-description'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('image_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Image hover icon',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Image hover icon colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'image_footer_normal_state_image_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F80',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-image-box.pb-image-hover .pb-image>span>span'
				)					
			)
		)
	),	
	array
	(		
		'description'				=>	array
		(
			'header'				=>	__('Text box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text box under image',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'image_footer_normal_state_text_box_caption_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-image-box .pb-image-text'
				)					
			),
			array
			(
				'id'				=>	'image_footer_hover_state_text_box_caption_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-image-box.pb-image-hover:hover .pb-image-text'
				)					
			),
			array
			(
				'id'				=>	'image_footer_normal_state_text_box_caption_text_color',
				'type'				=>	'color',
				'label'				=>	__('Caption text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-image-box .pb-image-text .pb-image-text-caption'
				)					
			),
			array
			(
				'id'				=>	'image_footer_hover_state_text_box_caption_text_color',
				'type'				=>	'color',
				'label'				=>	__('Caption text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-image-box.pb-image-hover:hover .pb-image-text .pb-image-text-caption'
				)					
			),
			array
			(
				'id'				=>	'image_footer_normal_state_text_box_caption_description_color',
				'type'				=>	'color',
				'label'				=>	__('Description text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-image-box .pb-image-text .pb-image-text-description'
				)					
			),
			array
			(
				'id'				=>	'image_footer_hover_state_text_box_caption_description_color',
				'type'				=>	'color',
				'label'				=>	__('Description text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-image-box.pb-image-hover:hover .pb-image-text .pb-image-text-description'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('menu',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Colors for entire box',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'menu_default_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu'
				)					
			),
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Menu first level',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Menu styles for first level',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'menu_default_first_level_menu_item_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li>a'	
				)					
			),
			array
			(
				'id'				=>	'menu_default_first_level_menu_item_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li>a'
				)					
			),
			array
			(
				'id'				=>	'menu_default_first_level_menu_item_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li:hover>a'	
				)					
			),
			array
			(
				'id'				=>	'menu_default_first_level_menu_item_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li:hover>a'
				)					
			),
			array
			(
				'id'				=>	'menu_default_first_level_menu_item_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li.current-menu-item>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-menu-ancestor>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-page-ancestor>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.pb-menu-item-selected>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-menu-item:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-menu-ancestor:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-page-ancestor:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.pb-menu-item-selected:hover>a'
				)					
			),			
			array
			(
				'id'				=>	'menu_default_first_level_menu_item_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li.current-menu-item>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-menu-ancestor>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-page-ancestor>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.pb-menu-item-selected>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-menu-item:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-menu-ancestor:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.current-page-ancestor:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li.pb-menu-item-selected:hover>a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Menu next levels',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Menu styles for next levels',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'menu_default_next_level_menu_item_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li>a'
				)					
			),
			array
			(
				'id'				=>	'menu_default_next_level_menu_item_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li>a'
				)					
			),
			array
			(
				'id'				=>	'menu_default_next_level_menu_item_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li:hover>a'
				)					
			),
			array
			(
				'id'				=>	'menu_default_next_level_menu_item_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li:hover>a'
				)					
			),			
			array
			(
				'id'				=>	'menu_default_next_level_menu_item_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-menu-item>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-menu-ancestor>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-page-ancestor>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-menu-item:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-menu-ancestor:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-page-ancestor:hover>a'
				)					
			),
			array
			(
				'id'				=>	'menu_default_next_level_menu_item_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-menu-item>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-menu-ancestor>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-page-ancestor>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-menu-item:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-menu-ancestor:hover>a',
					'.pb-menu .pb-menu-default>.sf-menu>li ul>li.current-page-ancestor:hover>a'						
				)					
			),
			array
			(
				'id'				=>	'menu_default_next_level_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.sf-menu li.sf-mega-enable-0 ul',
					'.sf-menu li.sf-mega-enable-1 .sf-mega'	
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'2',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'0',
					'border-left-width'		=>	'0',
				)
			),	
			array
			(
				'id'				=>	'menu_default_next_level_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.sf-menu li.sf-mega-enable-0 ul',
					'.sf-menu li.sf-mega-enable-1 .sf-mega'					
				)					
			)			
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Mega menu',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Mega menu colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'menu_default_mega_menu_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Header text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-default>.sf-menu .sf-mega-header'
				)					
			),
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Responsive menu',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Responsive menu colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'menu_responsive_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive a'	
				)					
			),
			array
			(
				'id'				=>	'menu_responsive_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Menu element border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive a'	
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				),
				'customCSS'			=>	'.pb-menu .pb-menu-responsive .nav-toggle>span { border-left:solid 1px __VALUE__; }'
			),
			array
			(
				'id'				=>	'menu_responsive_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive a'	
				)					
			),
			array
			(
				'id'				=>	'menu_responsive_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive a:hover'	
				)					
			),
			array
			(
				'id'				=>	'menu_responsive_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Menu element border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive a:hover'	
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				),
				'customCSS'			=>	'.pb-menu .pb-menu-responsive .nav-toggle:hover>span { border-left:solid 1px __VALUE__; }'					
			),
			array
			(
				'id'				=>	'menu_responsive_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive a:hover'	
				)					
			),			
			array
			(
				'id'				=>	'menu_responsive_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Menu element text color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive li.current-menu-item a',
					'.pb-menu .pb-menu-responsive li.current-menu-ancestor a',
					'.pb-menu .pb-menu-responsive li.current-page-ancestor a',
					'.pb-menu .pb-menu-responsive li.current-menu-item a:hover',
					'.pb-menu .pb-menu-responsive li.current-menu-ancestor a:hover',
					'.pb-menu .pb-menu-responsive li.current-page-ancestor a:hover'	
				)					
			),
			array
			(
				'id'				=>	'menu_responsive_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Menu element border color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive li.current-menu-item a',
					'.pb-menu .pb-menu-responsive li.current-menu-ancestor a',
					'.pb-menu .pb-menu-responsive li.current-page-ancestor a',
					'.pb-menu .pb-menu-responsive li.current-menu-item a:hover',
					'.pb-menu .pb-menu-responsive li.current-menu-ancestor a:hover',
					'.pb-menu .pb-menu-responsive li.current-page-ancestor a:hover'	
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				),
				'customCSS'			=>	'.pb-menu .pb-menu-responsive .nav-toggle:hover>span { border-left:solid 1px __VALUE__; }'					
			),
			array
			(
				'id'				=>	'menu_responsive_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Menu element background color (active state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-menu .pb-menu-responsive li.current-menu-item a',
					'.pb-menu .pb-menu-responsive li.current-menu-ancestor a',
					'.pb-menu .pb-menu-responsive li.current-page-ancestor a',
					'.pb-menu .pb-menu-responsive li.current-menu-item a:hover',
					'.pb-menu .pb-menu-responsive li.current-menu-ancestor a:hover',
					'.pb-menu .pb-menu-responsive li.current-page-ancestor a:hover'	
				)					
			)
		)
	)	
));

/******************************************************************************/

TSCSSRule::addPanel('nivo_slider',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'nivo_slider_default_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-nivo-slider .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'nivo_slider_default_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-nivo-slider .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'nivo_slider_default_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-nivo-slider .pb-slider-pagination a.active',
					'.pb-nivo-slider .pb-slider-pagination a.selected'
				)					
			)
		)			
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Direction pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Direction pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'nivo_slider_direction_pagination_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-nivo-slider .nivo-directionNav .nivo-prevNav',
					'.pb-nivo-slider .nivo-directionNav .nivo-nextNav'
				)					
			),
			array
			(
				'id'				=>	'nivo_slider_direction_pagination_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-nivo-slider .nivo-directionNav .nivo-prevNav:hover',
					'.pb-nivo-slider .nivo-directionNav .nivo-nextNav:hover'
				)					
			)
		)			
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Thumbail pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Thumbail pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'nivo_slider_default_pagination_image_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'.pb-nivo-slider .pb-slider-pagination.nivo-controlNav.nivo-thumbs-enabled a'
				)					
			),
			array
			(
				'id'				=>	'nivo_slider_default_pagination_image_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'.pb-nivo-slider .pb-slider-pagination.nivo-controlNav.nivo-thumbs-enabled a:hover'
				)					
			),
			array
			(
				'id'				=>	'nivo_slider_default_pagination_image_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-nivo-slider .pb-slider-pagination.nivo-controlNav.nivo-thumbs-enabled a.active',
					'.pb-nivo-slider .pb-slider-pagination.nivo-controlNav.nivo-thumbs-enabled a.selected'
				)					
			)
		)			
	)
));

/******************************************************************************/

TSCSSRule::addPanel('notice',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Box colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'notice_default_box_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content'
				)
			),
			array
			(
				'id'				=>	'notice_default_box_border_top_color',
				'type'				=>	'border-top-color',
				'label'				=>	__('Border top color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content'
				),
				'additionalRule'			=>	array
				(
					'border-top-width'		=>	'1',
					'border-top-style'		=>	'solid'
				)
				
			),
			array
			(
				'id'				=>	'notice_default_box_border_right_color',
				'type'				=>	'border-right-color',
				'label'				=>	__('Border right color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content'
				),
				'additionalRule'			=>	array
				(
					'border-right-width'	=>	'1',
					'border-right-style'	=>	'solid'
				)				
			),
			array
			(
				'id'				=>	'notice_default_box_border_bottom_color',
				'type'				=>	'border-bottom-color',
				'label'				=>	__('Border bottom color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content'
				),
				'additionalRule'			=>	array
				(
					'border-bottom-width'	=>	'1',
					'border-bottom-style'	=>	'solid'
				)					
			),
			array
			(
				'id'				=>	'notice_default_box_border_left_color',
				'type'				=>	'border-left-color',
				'label'				=>	__('Border left color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content'
				),
				'additionalRule'			=>	array
				(
					'border-left-width'		=>	'1',
					'border-left-style'		=>	'solid'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('First line',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('First line colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'notice_default_first_line_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content>.pb-notice-first-line'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Second line',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Second line colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'notice_default_second_line_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content>.pb-notice-second-line'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Icon',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Icon colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'notice_default_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'41A569',
				'selector'			=>	array
				(
					'.pb-notice'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Timeline',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Timeline colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'notice_default_timeline_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content>.pb-notice-timeline>div'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Close button',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Close button colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'notice_default_close_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCCCC',
				'selector'			=>	array
				(
					'.pb-notice>.pb-notice-content .pb-notice-close-button'
				)
			)
		)
	),
));

/******************************************************************************/

TSCSSRule::addPanel('page_header',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Page header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Page header colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'page_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.theme-page .theme-page-header h1'
				)					
			),
			array
			(
				'id'				=>	'page_header_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.theme-page-header'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Page subheader',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Page subheader colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'page_header_subheader_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'.theme-page .theme-page-header h6'
				)					
			)
		)
	)
));	

/******************************************************************************/

TSCSSRule::addPanel('preformatted_text',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Preformatted text',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Preformatted text colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'preformatted_text_default_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F1F1F1',
				'selector'			=>	array
				(
					'.pb-preformatted-text'
				),
				'additionalRule'		=>	array
				(
					'border-width'		=>	'1',
					'border-style'		=>	'solid',						
				)
			),
			array
			(
				'id'				=>	'preformatted_text_default_normal_state_label_color',
				'type'				=>	'color',
				'label'				=>	__('Label color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'888888',
				'selector'			=>	array
				(
					'.pb-preformatted-text a'
				)					
			),
			array
			(
				'id'				=>	'preformatted_text_default_normal_state_label_color',
				'type'				=>	'color',
				'label'				=>	__('Label color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'888888',
				'selector'			=>	array
				(
					'.pb-preformatted-text a:hover'
				)					
			),

			array
			(
				'id'				=>	'preformatted_text_default_pre_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'999999',
				'selector'			=>	array
				(
					'.pb-preformatted-text pre'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('pricing_plan',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Box colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'pricing_plan_default_main_box_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'pricing_plan_default_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-header'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Description',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Description colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'pricing_plan_default_description_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-description',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-description a',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-description a:hover',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-description>p',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-description>p a',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-description>p a:hover'
				)					
			)
		)
	),		
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Features',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Features colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'pricing_plan_default_feature_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div>ul',
					'.pb-pricing-plan>ul>li>div>ul li',
					'.pb-pricing-plan>ul>li>div>ul a',
					'.pb-pricing-plan>ul>li>div>ul a:hover',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-feature-list',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-feature-list li',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-feature-list a',
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-feature-list a:hover'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Button',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Button colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'pricing_plan_default_button_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-button a'
				)
			),
			array
			(
				'id'				=>	'pricing_plan_default_button_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-button a'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid'
				)
			),
			array
			(
				'id'				=>	'pricing_plan_default_button_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-button a'
				)					
			),
			array
			(
				'id'				=>	'pricing_plan_default_button_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-button a:hover'
				)
			),
			array
			(
				'id'				=>	'pricing_plan_default_button_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-button a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid'
				)
			),
			array
			(
				'id'				=>	'pricing_plan_default_button_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-button a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pricing box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pricing box colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'pricing_plan_default_pricing_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-price-box'
				)					
			),
			array
			(
				'id'				=>	'pricing_plan_default_pricing_box_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-pricing-plan>ul>li>div .pb-pricing-plan-item-price-box'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('recent_posts',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'recent_post_default_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-recent-post>ul>li .pb-recent-post-header',
					'.pb-recent-post>ul>li .pb-recent-post-header>a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Date',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Date colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'recent_post_default_date_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-recent-post>ul>li div.pb-recent-post-date'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Excerpt',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Excerpt colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'recent_post_default_excerpt_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-recent-post>ul>li div.pb-recent-post-excerpt'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Post meta box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Post meta box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'recent_post_default_meta_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-recent-post>ul>li div.pb-recent-post-meta>div'
				)					
			),
			array
			(
				'id'				=>	'recent_post_default_meta_box_link_text_color',
				'type'				=>	'color',
				'label'				=>	__('Link color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-recent-post>ul>li div.pb-recent-post-meta>div a'
				)					
			),
			array
			(
				'id'				=>	'recent_post_default_meta_box_link_text_color_hover',
				'type'				=>	'color',
				'label'				=>	__('Link color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-recent-post>ul>li div.pb-recent-post-meta>div a:hover'
				)					
			),
			array
			(
				'id'				=>	'recent_post_default_meta_box_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-recent-post>ul>li div.pb-recent-post-meta'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				),
				'customCSS'			=>	'.pb-recent-post.pb-recent-post-template-1>ul>li div.pb-recent-post-meta { border-width:1px 0px 0px 0px} .pb-recent-post.pb-recent-post-template-2>ul>li div.pb-recent-post-meta { border-width:1px 0px 0px 0px}'
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Comment count box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Comment count box colors (for "Template 1" only)',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'recent_post_default_comment_count_box_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-recent-post.pb-recent-post-template-1>ul>li div.pb-recent-post-image .pb-recent-post-comment-count>span.pb-recent-post-comment-count-value',
				)
			),
			array
			(
				'id'				=>	'recent_post_default_comment_count_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-recent-post.pb-recent-post-template-1>ul>li div.pb-recent-post-image .pb-recent-post-comment-count>span.pb-recent-post-comment-count-value',
				),
			)
		)
	)
));	

/******************************************************************************/

TSCSSRule::addPanel('social_icon_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Normal state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Normal (default) state colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'social_icon_default_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-social-icon>li>a'
				),
				'additionalRule'	=>	array
				(
					'padding'		=>	'1',
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'social_icon_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-social-icon>li>a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover state colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'social_icon_default_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-social-icon>li>a:hover'
				),
				'additionalRule'	=>	array
				(
					'padding'		=>	'1',
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'social_icon_default_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-social-icon>li>a:hover'
				)					
			)
		)
	)
));	

TSCSSRule::addPanel('social_icon_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Normal state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Normal (default) state colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'social_icon_footer_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-social-icon>li>a'
				),
				'additionalRule'	=>	array
				(
					'padding'		=>	'1',
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)				
			),
			array
			(
				'id'				=>	'social_icon_footer_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-social-icon>li>a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover state colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'social_icon_footer_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-social-icon>li>a:hover'
				),
				'additionalRule'	=>	array
				(
					'padding'		=>	'0',
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				)					
			),
			array
			(
				'id'				=>	'social_icon_footer_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-social-icon>li>a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('tab_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Tab normal state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Tab normal (default) state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'tab_default_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default',
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default a'
				)					
			),
			array
			(
				'id'				=>	'tab_default_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0'					
				)
			),
			array
			(
				'id'				=>	'tab_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Tab hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Tab hover state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'tab_default_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover',
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover a'
				)					
			),
			array
			(
				'id'				=>	'tab_default_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0'					
				)
			),
			array
			(
				'id'				=>	'tab_default_hover_state_arrow_color',
				'type'				=>	'border-color',
				'label'				=>	__('Arrow color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover>span'
				)
			),
			array
			(
				'id'				=>	'tab_default_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Tab active state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Tab active state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'tab_default_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active',
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active a'
				)					
			),
			array
			(
				'id'				=>	'tab_default_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0'					
				)
			),
			array
			(
				'id'				=>	'tab_default_selected_state_arrow_color',
				'type'				=>	'border-color',
				'label'				=>	__('Arrow color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active>span'
				)
			),
			array
			(
				'id'				=>	'tab_default_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('tab_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Tab normal state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Tab normal (default) state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'tab_footer_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default',
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default a'
				)					
			),
			array
			(
				'id'				=>	'tab_footer_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0'					
				)
			),
			array
			(
				'id'				=>	'tab_footer_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-default'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Tab hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Tab hover state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'tab_footer_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover',
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover a'
				)					
			),
			array
			(
				'id'				=>	'tab_footer_hover_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0'					
				)
			),
			array
			(
				'id'				=>	'tab_footer_hover_state_arrow_color',
				'type'				=>	'border-color',
				'label'				=>	__('Arrow color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover>span'
				)
			),
			array
			(
				'id'				=>	'tab_footer_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Tab active state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Tab active state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'tab_footer_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active',
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active a'
				)					
			),
			array
			(
				'id'				=>	'tab_footer_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'0',
					'border-right-width'	=>	'0',
					'border-bottom-width'	=>	'1',
					'border-left-width'		=>	'0'					
				)
			),
			array
			(
				'id'				=>	'tab_footer_selected_state_arrow_color',
				'type'				=>	'border-color',
				'label'				=>	__('Arrow color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active>span'
				)
			),
			array
			(
				'id'				=>	'tab_footer_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-tab.ui-tabs>.ui-tabs-nav .ui-state-active'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('team',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'team_default_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-team>ul>li .pb-team-text-box>.pb-team-text-box-member-name'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Subheader',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Subheader colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'team_default_subheader_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-team>ul>li .pb-team-text-box>.pb-team-text-box-member-position'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Description',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Description colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'team_default_description_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-team>ul>li .pb-team-text-box p'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Quote box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Quote box colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'team_default_quote_box_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-team>ul>li .pb-team-quote-box'
				),
				'additionalRule'	=>	array
				(
					'border-width'			=>	'2',
					'border-style'			=>	'solid'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Social icons',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Social icons color',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'team_default_normal_state_social_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-team>ul>li ul.pb-team-social-icon-box>li>a'
				)					
			),
			array
			(
				'id'				=>	'team_default_hover_state_social_icon_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-team>ul>li ul.pb-team-social-icon-box>li>a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'team_default_divider_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.pb-team>ul>li'
				),
				'additionalRule'	=>	array
				(
					'border-style'			=>	'solid',
					'border-top-width'		=>	'1'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Skill list',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Skill list colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'team_skill_list_default_skill_name_text_color',
				'type'				=>	'color',
				'label'				=>	__('Label text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-team>ul>li .pb-team-skill-box>.pb-team-skill>.pb-team-skill-label'
				)					
			),
			array
			(
				'id'				=>	'team_skill_list_default_skill_value_text_color',
				'type'				=>	'color',
				'label'				=>	__('Value text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-team>ul>li .pb-team-skill-box>.pb-team-skill>.pb-team-skill-value'
				)					
			),
			array
			(
				'id'				=>	'team_skill_list_default_progress_bar_foreground_color',
				'type'				=>	'border-color',
				'label'				=>	__('Progress bar foreground color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-team>ul>li .pb-team-skill-box>.pb-team-skill>.pb-team-skill-foreground'
				)					
			),
			array
			(
				'id'				=>	'team_skill_list_default_progress_bar_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Progress bar background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-team>ul>li .pb-team-skill-box>.pb-team-skill>.pb-team-skill-background'
				)					
			)			
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('testimonial_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Circle color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Circle colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'testimonial_default_circle_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-testimonial ul>li>div>div.pb-testimonial-cite-up'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid'
				)
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text color of testimonials',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'testimonial_default_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-testimonial ul>li>div>p'
				)					
			),
			array
			(
				'id'				=>	'testimonial_default_author_name_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author name',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-testimonial ul>li>div>div.pb-testimonial-author-name'
				)					
			),
			array
			(
				'id'				=>	'testimonial_default_author_position_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author position',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-testimonial ul>li>div>div.pb-testimonial-author-position'
				)					
			),
			array
			(
				'id'				=>	'testimonial_default_author_company_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author company',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-testimonial ul>li>div>div.pb-testimonial-author-company'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'testimonial_default_divider_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-testimonial ul>li>div>div.pb-testimonial-cite-down'
				)				
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'testimonial_default_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-testimonial .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'testimonial_default_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-testimonial .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'testimonial_default_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-testimonial .pb-slider-pagination a:active',
					'.pb-testimonial .pb-slider-pagination a.selected'
				)					
			)
		)			
	)
));	

TSCSSRule::addPanel('testimonial_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Circle color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Circle colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'testimonial_footer_circle_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial ul>li>div>div.pb-testimonial-cite-up'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid'
				)
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text color of testimonials',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'testimonial_footer_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial ul>li>div>p'
				)					
			),
			array
			(
				'id'				=>	'testimonial_footer_author_name_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author name',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial ul>li>div>div.pb-testimonial-author-name'
				)					
			),
			array
			(
				'id'				=>	'testimonial_footer_author_position_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author position',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial ul>li>div>div.pb-testimonial-author-position'
				)					
			),
			array
			(
				'id'				=>	'testimonial_footer_author_company_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author company',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial ul>li>div>div.pb-testimonial-author-company'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'testimonial_footer_divider_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial ul>li>div>div.pb-testimonial-cite-down'
				)				
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'testimonial_footer_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'testimonial_footer_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'testimonial_footer_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-testimonial .pb-slider-pagination a:active',
					'div.theme-footer-top .pb-testimonial .pb-slider-pagination a.selected'
				)					
			)
		)			
	)
));	

/******************************************************************************/

TSCSSRule::addPanel('twitter_user_timeline_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Circle color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Circle colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'twitter_user_timeline_default_circle_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-twitter-user-timeline .pb-twitter-user-timeline-text .pb-twitter-user-timeline-text-part-1'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text color of tweets',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'twitter_user_timeline_default_text_text_color',
				'type'				=>	'color',
				'label'				=>	__('Content text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-twitter-user-timeline .pb-twitter-user-timeline-list .pb-twitter-user-timeline-text',
					'.pb-twitter-user-timeline .pb-twitter-user-timeline-list .pb-twitter-user-timeline-text a'
				)					
			),
			array
			(
				'id'				=>	'twitter_user_timeline_default_author_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-twitter-user-timeline .pb-twitter-user-timeline-list .pb-twitter-user-timeline-author'
				)					
			),
			array
			(
				'id'				=>	'twitter_user_timeline_default_date_text_color',
				'type'				=>	'color',
				'label'				=>	__('Date text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.pb-twitter-user-timeline .pb-twitter-user-timeline-list .pb-twitter-user-timeline-date'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'twitter_user_timeline_default_divider_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-twitter-user-timeline .pb-twitter-user-timeline-text .pb-twitter-user-timeline-text-part-3'
				)				
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'twitter_user_timeline_default_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-twitter-user-timeline .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'twitter_user_timeline_default_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-twitter-user-timeline .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'twitter_user_timeline_default_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.pb-twitter-user-timeline .pb-slider-pagination a:active',
					'.pb-twitter-user-timeline .pb-slider-pagination a.selected'
				)					
			)
		)			
	)
));	

TSCSSRule::addPanel('twitter_user_timeline_footer',array
(
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Circle color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Circle colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'twitter_user_timeline_footer_circle_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-twitter-user-timeline .pb-twitter-user-timeline-text .pb-twitter-user-timeline-text-part-1'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text color of tweets',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'twitter_user_timeline_footer_text_text_color',
				'type'				=>	'color',
				'label'				=>	__('Content text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-twitter-user-timeline .pb-twitter-user-timeline-list .pb-twitter-user-timeline-text',
					'div.theme-footer-top .pb-twitter-user-timeline .pb-twitter-user-timeline-list .pb-twitter-user-timeline-text a'
				)					
			),
			array
			(
				'id'				=>	'twitter_user_timeline_footer_author_text_color',
				'type'				=>	'color',
				'label'				=>	__('Author text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-twitter-user-timeline .pb-twitter-user-timeline-list .pb-twitter-user-timeline-author'
				)					
			),
			array
			(
				'id'				=>	'twitter_user_timeline_footer_date_text_color',
				'type'				=>	'color',
				'label'				=>	__('Date text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-twitter-user-timeline .pb-twitter-user-timeline-list .pb-twitter-user-timeline-date'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Divider color',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Divider colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'twitter_user_timeline_footer_divider_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .pb-twitter-user-timeline .pb-twitter-user-timeline-text .pb-twitter-user-timeline-text-part-3'
				)				
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Pagination',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Pagination colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'twitter_user_timeline_footer_pagination_normal_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (normal state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.twitter-user-timline .pb-twitter-user-timeline .pb-slider-pagination a'
				)					
			),
			array
			(
				'id'				=>	'twitter_user_timeline_footer_pagination_hover_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.twitter-user-timline .pb-twitter-user-timeline .pb-slider-pagination a:hover',
				)					
			),
			array
			(
				'id'				=>	'twitter_user_timeline_footer_pagination_selected_state_background_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (selected state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.twitter-user-timline .pb-twitter-user-timeline .pb-slider-pagination a:active',
					'div.twitter-user-timline .pb-twitter-user-timeline .pb-slider-pagination a.selected'
				)					
			)
		)			
	)
));

/******************************************************************************/

TSCSSRule::addPanel('vertical_grid',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Even lines',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Even lines colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'vertical_grid_default_line_even_column_name_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color for column name in HEX',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-vertical-grid>ul>li.pb-vertical-grid-line-even>.pb-vertical-grid-column-name'
				)					
			),
			array
			(
				'id'				=>	'vertical_grid_default_line_even_column_value_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color for column value in HEX',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-vertical-grid>ul>li.pb-vertical-grid-line-even>.pb-vertical-grid-column-value'
				)					
			),
			array
			(
				'id'				=>	'vertical_grid_default_line_even_column_name_bg_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color for column name in HEX',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-vertical-grid>ul>li.pb-vertical-grid-line-even>.pb-vertical-grid-column-name'
				)					
			),
			array
			(
				'id'				=>	'vertical_grid_default_line_even_column_value_bg_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color for column value in HEX',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'F5F5F5',
				'selector'			=>	array
				(
					'.pb-vertical-grid>ul>li.pb-vertical-grid-line-even>.pb-vertical-grid-column-value'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Odd lines',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Odd lines colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'vertical_grid_default_line_odd_column_name_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color for column name in HEX',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-vertical-grid>ul>li.pb-vertical-grid-line-odd>.pb-vertical-grid-column-name'
				)					
			),
			array
			(
				'id'				=>	'vertical_grid_default_line_odd_column_value_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color for column value in HEX',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.pb-vertical-grid>ul>li.pb-vertical-grid-line-odd>.pb-vertical-grid-column-value'
				)					
			),
			array
			(
				'id'				=>	'vertical_grid_default_line_odd_column_name_bg_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color for column name in HEX',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-vertical-grid>ul>li.pb-vertical-grid-line-odd>.pb-vertical-grid-column-name'
				)					
			),
			array
			(
				'id'				=>	'vertical_grid_default_line_odd_column_value_bg_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color for column value in HEX',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.pb-vertical-grid>ul>li.pb-vertical-grid-line-odd>.pb-vertical-grid-column-value'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_archives_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_archive_default_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.widget_archive>ul>li a'
				)					
			),
			array
			(
				'id'				=>	'widget_archive_default_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_archive>ul>li a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_archive_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'.widget_archive>ul>li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_archive_default_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_archive>ul>li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_archive_default_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_archive>ul>li a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'widget_archive_default_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_archive>ul>li a:hover'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_archives_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_archive_footer_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_archive>ul>li a'
				)					
			),
			array
			(
				'id'				=>	'widget_archive_footer_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_archive>ul>li a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_archive_footer_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_archive>ul>li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_archive_footer_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_archive>ul>li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_archive_footer_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_archive>ul>li a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				),
				'customCSS'			=>	'div.theme-footer-top .widget_archive>ul>li a:hover { border-color:__VALUE__; } div.theme-footer-top .widget_archive>ul>li a:hover { padding:11px; }'
			),
			array
			(
				'id'				=>	'widget_archive_footer_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_archive>ul>li a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_calendar_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Caption',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Caption colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_calendar_default_caption_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_calendar table tfoot',
					'.widget_calendar table caption'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_calendar_default_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_calendar table thead th'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_default_header_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_calendar table thead th'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)				
			),
			array
			(
				'id'				=>	'widget_calendar_default_header_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_calendar table thead th'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Cells',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Cells colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_calendar_default_cell_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.widget_calendar table tbody td',
					'.widget_calendar table tbody td a'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_default_cell_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_calendar table tbody td'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_default_cell_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_calendar table tbody td',
					'.widget_calendar table tbody td a'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_default_cell_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_calendar table tbody td a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_default_cell_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_calendar table tbody td a:hover'
				)						
			)
		)
	)
));

TSCSSRule::addPanel('widget_calendar_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Caption',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Caption colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_calendar_footer_caption_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table tfoot',
					'div.theme-footer-top .widget_calendar table caption'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_calendar_footer_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table thead th'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_footer_header_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table thead th'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_footer_header_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table thead th'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Cells',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Cells colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_calendar_footer_cell_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table tbody td',
					'div.theme-footer-top .widget_calendar table tbody td a'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_footer_cell_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table tbody td'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_footer_cell_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table tbody td',
					'div.theme-footer-top .widget_calendar table tbody td a'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_footer_cell_hover_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table tbody td a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_calendar_footer_cell_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_calendar table tbody td a:hover'
				)						
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_categories_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_category_default_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.widget_categories>ul>li a'
				)					
			),
			array
			(
				'id'				=>	'widget_category_default_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_categories>ul>li a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_category_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_categories>ul>li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_category_default_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_categories>ul>li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_category_default_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_categories>ul>li a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'widget_category_default_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_categories>ul>li a:hover'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_categories_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_category_footer_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_categories>ul>li a'
				)					
			),
			array
			(
				'id'				=>	'widget_category_footer_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_categories>ul>li a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_category_footer_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_categories>ul>li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_category_footer_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_categories>ul>li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_category_footer_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_categories>ul>li a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				),
				'customCSS'			=>	'div.theme-footer-top .widget_categories>ul>li a:hover { border-color:__VALUE__; } div.theme-footer-top .widget_categories>ul>li a:hover { padding:11px; }'
			),
			array
			(
				'id'				=>	'widget_category_footer_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_categories>ul>li a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_custom_menu_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_custom_menu_default_normal_state_link_text_color',
				'type'				=>	'color',
				'label'				=>	__('Link color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li a'
				)					
			),
			array
			(
				'id'				=>	'widget_custom_menu_default_normal_state_link_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li a'
				),	
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1',						
				)
			),
			array
			(
				'id'				=>	'widget_custom_menu_default_normal_state_link_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_custom_menu_default_hover_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_custom_menu_default_hover_state_link_border_color',
				'type'				=>	'background-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li a>span'
				),	
			),
			array
			(
				'id'				=>	'widget_custom_menu_default_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li a:hover'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_custom_menu_default_selected_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li.current_page_item>a',
					'.widget_nav_menu ul li.current-menu-item>a',
					'.widget_nav_menu ul li.current-menu-ancestor>a'
				)					
			),
			array
			(
				'id'				=>	'widget_custom_menu_default_selected_state_link_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li.current_page_item>a',
					'.widget_nav_menu ul li.current-menu-item>a',
					'.widget_nav_menu ul li.current-menu-ancestor>a'
				),	
				'additionalRule'	=>	array
				(
					'border-width'	=>	'1',
					'border-style'	=>	'solid',						
				)
			),
			array
			(
				'id'				=>	'widget_custom_menu_default_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_nav_menu ul li.current_page_item>a',
					'.widget_nav_menu ul li.current-menu-item>a',
					'.widget_nav_menu ul li.current-menu-ancestor>a'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_custom_menu_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_custom_menu_footer_normal_state_link_text_color',
				'type'				=>	'color',
				'label'				=>	__('Link color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li a'
				)					
			),
			array
			(
				'id'				=>	'widget_custom_menu_footer_normal_state_link_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li a'
				),	
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1',						
				)
			),
			array
			(
				'id'				=>	'widget_custom_menu_footer_normal_state_link_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_custom_menu_footer_hover_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_custom_menu_footer_hover_state_link_border_color',
				'type'				=>	'background-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li a>span'
				)
			),
			array
			(
				'id'				=>	'widget_custom_menu_footer_hover_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li a:hover'
				)					
			)
		)
	),	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_custom_menu_footer_selected_state_link_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li.current_page_item>a',
					'div.theme-footer-top .widget_nav_menu ul li.current-menu-item>a',
					'div.theme-footer-top .widget_nav_menu ul li.current-menu-ancestor>a'
				)					
			),
			array
			(
				'id'				=>	'widget_custom_menu_footer_selected_state_link_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li.current_page_item>a',
					'div.theme-footer-top .widget_nav_menu ul li.current-menu-item>a',
					'div.theme-footer-top .widget_nav_menu ul li.current-menu-ancestor>a'
				),	
				'additionalRule'	=>	array
				(
					'border-width'		=>	'2',
					'border-style'		=>	'solid',
					'padding-top'		=>	'14',
					'padding-right'		=>	'14',
					'padding-bottom'	=>	'14',
					'padding-left'		=>	'14'
				)
			),
			array
			(
				'id'				=>	'widget_custom_menu_footer_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_nav_menu ul li.current_page_item>a',
					'div.theme-footer-top .widget_nav_menu ul li.current-menu-item>a',
					'div.theme-footer-top .widget_nav_menu ul li.current-menu-ancestor>a'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_meta_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_meta_default_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.widget_meta>ul>li a'
				)					
			),
			array
			(
				'id'				=>	'widget_meta_default_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_meta>ul>li a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_meta_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_meta>ul>li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_meta_default_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_meta>ul>li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_meta_default_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_meta>ul>li a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'widget_meta_default_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_meta>ul>li a:hover'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_meta_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_meta_footer_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_meta>ul>li a'
				)					
			),
			array
			(
				'id'				=>	'widget_meta_footer_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_meta>ul>li a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_meta_footer_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_meta>ul>li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_meta_footer_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_meta>ul>li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_meta_footer_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_meta>ul>li a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				),
				'customCSS'			=>	'div.theme-footer-top .widget_meta>ul>li a:hover { border-color:__VALUE__; } div.theme-footer-top .widget_meta>ul>li a:hover { padding:11px; }'
			),
			array
			(
				'id'				=>	'widget_meta_footer_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_meta>ul>li a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_pages_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_page_default_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.widget_pages>ul>li a'
				)					
			),
			array
			(
				'id'				=>	'widget_page_default_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_pages>ul>li a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_page_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_pages>ul>li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_page_default_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_pages>ul>li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_page_default_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_pages>ul>li a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'widget_page_default_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_pages>ul>li a:hover'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_pages_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_page_footer_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_pages>ul>li a'
				)					
			),
			array
			(
				'id'				=>	'widget_page_footer_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_pages>ul>li a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_page_footer_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_pages>ul>li a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_page_footer_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_pages>ul>li a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_page_footer_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_pages>ul>li a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				),
				'customCSS'			=>	'div.theme-footer-top .widget_pages>ul>li a:hover { border-color:__VALUE__; } div.theme-footer-top .widget_pages>ul>li a:hover { padding:11px; }'
			),
			array
			(
				'id'				=>	'widget_page_footer_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_pages>ul>li a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_recent_comments_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Link',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Link colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_recent_comment_default_link_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_recent_comments>ul>li>a',
					'.widget_recent_comments>ul>li>a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Author box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Author box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_recent_comment_default_date_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_recent_comments>ul>li>span.post-date'
				)					
			),
			array
			(
				'id'				=>	'widget_recent_comment_default_date_box_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_recent_comments>ul>li>span.post-date'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			)
		)
	)
));

TSCSSRule::addPanel('widget_recent_comment_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Link',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Link colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_recent_comment_footer_link_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_recent_comments>ul>li>a',
					'div.theme-footer-top .widget_recent_comments>ul>li>a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Author box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Author box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_recent_comment_footer_date_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_recent_comments>ul>li>span.post-date'
				)					
			),
			array
			(
				'id'				=>	'widget_recent_comment_footer_date_box_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_recent_comments>ul>li>span.post-date'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_recent_posts_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Link',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Link colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_recent_post_default_link_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_recent_entries>ul>li>a',
					'.widget_recent_entries>ul>li>a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Date box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Date box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_recent_post_default_date_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_recent_entries>ul>li>span.post-date'
				)					
			),
			array
			(
				'id'				=>	'widget_recent_post_default_date_box_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_recent_entries>ul>li>span.post-date'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			)
		)
	)
));

TSCSSRule::addPanel('widget_recent_posts_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Link',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Link colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_recent_post_footer_link_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_recent_entries>ul>li>a',
					'div.theme-footer-top .widget_recent_entries>ul>li>a:hover'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Date box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Date box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_recent_post_footer_date_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_recent_entries>ul>li>span.post-date'
				)					
			),
			array
			(
				'id'				=>	'widget_recent_post_footer_date_box_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_recent_entries>ul>li>span.post-date'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_rss_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_rss_default_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_rss>ul>li>a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Date',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Date colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_rss_default_date_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_rss>ul>li>span.rss-date'
				)					
			),
			array
			(
				'id'				=>	'widget_rss_default_date_box_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_rss>ul>li>span.rss-date'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Author',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Author colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_rss_default_author_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_rss>ul>li>cite'
				)					
			),
			array
			(
				'id'				=>	'widget_rss_default_author_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_rss>ul>li>cite'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Content colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_rss_default_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'999999',
				'selector'			=>	array
				(
					'.widget_rss>ul>li>div.rssSummary'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_rss_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_rss_footer_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_rss>ul>li>a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Date',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Date colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_rss_footer_date_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_rss>ul>li>span.rss-date'
				)					
			),
			array
			(
				'id'				=>	'widget_rss_footer_date_box_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_rss>ul>li>span.rss-date'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Author',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Author colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_rss_footer_author_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_rss>ul>li>cite'
				)					
			),
			array
			(
				'id'				=>	'widget_rss_footer_author_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_rss>ul>li>cite'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Content',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Content colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_rss_footer_content_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_rss>ul>li>div.rssSummary'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_search_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text field',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text field colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_search_default_normal_state_text_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_search input[type="text"]'
				)					
			),
			array
			(
				'id'				=>	'widget_search_default_normal_state_text_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_search input[type="text"]'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'1',
					'border-style'	=>	'solid',						
				)					
			),
			array
			(
				'id'				=>	'widget_search_default_normal_state_text_field_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'.widget_search input[type="text"]'
				)				
			),
			array
			(
				'id'				=>	'widget_search_default_focus_state_text_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_search input[type="text"]:focus'
				)					
			),
			array
			(
				'id'				=>	'widget_search_default_focus_state_text_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_search input[type="text"]:focus'
				),
				'additionalRule'	=>	array
				(
					'border-top-color'		=>	'transparent',
					'border-right-color'	=>	'transparent',
					'border-bottom-width'	=>	'2',
					'border-left-color'		=>	'transparent',
					'border-style'			=>	'solid',
					'padding-bottom'		=>	'9'						
				)				
			),
			array
			(
				'id'				=>	'widget_search_default_focus_state_text_field_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'.widget_search input[type="text"]:focus'
				)				
			),
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Submit button',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Submit button colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_search_default_normal_state_submit_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_search input[type="submit"]'
				)					
			),
			array
			(
				'id'				=>	'widget_search_default_normal_state_submit_button_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_search input[type="submit"]'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid',						
				)
			),
			array
			(
				'id'				=>	'widget_search_default_normal_state_submit_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_search input[type="submit"]'
				)					
			),
			array
			(
				'id'				=>	'widget_search_default_hover_state_submit_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_search input[type="submit"]:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_search_default_hover_state_submit_button_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_search input[type="submit"]:hover'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid',						
				)				
			),
			array
			(
				'id'				=>	'widget_search_default_hover_state_submit_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.widget_search input[type="submit"]:hover'
				)					
			)
		)
	),			
));

TSCSSRule::addPanel('widget_search_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Text field',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Text field colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_search_footer_normal_state_text_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="text"]'
				)					
			),
			array
			(
				'id'				=>	'widget_search_footer_normal_state_text_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="text"]'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'1',
					'border-style'	=>	'solid',						
				)
			),
			array
			(
				'id'				=>	'widget_search_footer_normal_state_text_field_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="text"]'
				)
			),
			array
			(
				'id'				=>	'widget_search_footer_focus_state_text_field_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'footer'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="text"]:focus'
				)					
			),
			array
			(
				'id'				=>	'widget_search_footer_focus_state_text_field_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="text"]:focus'
				),
				'additionalRule'	=>	array
				(
					'border-top-color'		=>	'transparent',
					'border-right-color'	=>	'transparent',
					'border-bottom-width'	=>	'2',
					'border-left-color'		=>	'transparent',
					'border-style'			=>	'solid',
					'padding-bottom'		=>	'9'						
				)					
			),
			array
			(
				'id'				=>	'widget_search_footer_focus_state_text_field_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (on focus)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="text"]:focus'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Submit button',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Submit button colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_search_footer_normal_state_submit_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="submit"]'
				)					
			),
			array
			(
				'id'				=>	'widget_search_footer_normal_state_submit_button_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="submit"]'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid',						
				)					
			),
			array
			(
				'id'				=>	'widget_search_footer_normal_state_submit_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="submit"]'
				)					
			),
			array
			(
				'id'				=>	'widget_search_footer_hover_state_submit_button_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="submit"]:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_search_footer_hover_state_submit_button_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="submit"]:hover'
				),
				'additionalRule'	=>	array
				(
					'border-width'	=>	'2',
					'border-style'	=>	'solid',						
				)					
			),
			array
			(
				'id'				=>	'widget_search_footer_hover_state_submit_button_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_search input[type="submit"]:hover'
				)					
			)
		)
	),			
));

/******************************************************************************/

TSCSSRule::addPanel('widget_tag_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_tag_default_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'707070',
				'selector'			=>	array
				(
					'.widget_tag_cloud a'
				)					
			),
			array
			(
				'id'				=>	'widget_tag_default_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'E8E8E8',
				'selector'			=>	array
				(
					'.widget_tag_cloud a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_tag_default_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'',
				'selector'			=>	array
				(
					'.widget_tag_cloud a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_tag_default_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.widget_tag_cloud a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_tag_default_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_tag_cloud a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)					
			),
			array
			(
				'id'				=>	'widget_tag_default_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FE6500',
				'selector'			=>	array
				(
					'.widget_tag_cloud a:hover'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_tag_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Default state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Default state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_tag_footer_normal_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_tag_cloud a'
				)					
			),
			array
			(
				'id'				=>	'widget_tag_footer_normal_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'807CB7',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_tag_cloud a'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'1'
				)
			),
			array
			(
				'id'				=>	'widget_tag_footer_normal_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_tag_cloud a'
				)					
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Hover and selected state',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Hover and selected state colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_tag_footer_hover_selected_state_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_tag_cloud a:hover'
				)					
			),
			array
			(
				'id'				=>	'widget_tag_footer_hover_selected_state_border_color',
				'type'				=>	'border-color',
				'label'				=>	__('Border color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_tag_cloud a:hover'
				),
				'additionalRule'	=>	array
				(
					'border-style'	=>	'solid',
					'border-width'	=>	'2'
				),
				'customCSS'			=>	'div.theme-footer-top .widget_tag_cloud a:hover { border-color:__VALUE__; } div.theme-footer-top .widget_tag_cloud a:hover { padding:11px; }'
			),
			array
			(
				'id'				=>	'widget_tag_footer_hover_selected_state_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'transparent',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_tag_cloud a:hover'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_theme_post_most_comment_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_theme_post_most_comment_default_normal_state_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.widget_theme_widget_post_most_comment>ul>li>h6>a'
				)					
			),
			array
			(
				'id'				=>	'widget_theme_post_most_comment_default_hover_state_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.widget_theme_widget_post_most_comment>ul>li>h6>a'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Meta box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Meta box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_theme_post_most_comment_default_hover_state_meta_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.widget_theme_widget_post_most_comment>ul>li>span'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_theme_post_most_comment_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_theme_post_most_comment_footer_normal_state_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_theme_widget_post_most_comment>ul>li>h6>a'
				)					
			),
			array
			(
				'id'				=>	'widget_theme_post_most_comment_footer_hover_state_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_theme_widget_post_most_comment>ul>li>h6>a'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Meta box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Meta box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_theme_post_most_comment_footer_hover_state_meta_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_theme_widget_post_most_comment>ul>li>span'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('widget_theme_post_most_recent_default',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_theme_post_most_recent_default_normal_state_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.widget_theme_widget_post_most_recent>ul>li>h6>a'
				)					
			),
			array
			(
				'id'				=>	'widget_theme_post_most_recent_default_hover_state_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'56509F',
				'selector'			=>	array
				(
					'.widget_theme_widget_post_most_recent>ul>li>h6>a'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Meta box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Meta box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_theme_post_most_recent_default_hover_state_meta_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'A0A0A0',
				'selector'			=>	array
				(
					'.widget_theme_widget_post_most_recent>ul>li>span'
				)					
			)
		)
	)
));

TSCSSRule::addPanel('widget_theme_post_most_recent_footer',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Header',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Header colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_theme_post_most_recent_footer_normal_state_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_theme_widget_post_most_recent>ul>li>h6>a'
				)					
			),
			array
			(
				'id'				=>	'widget_theme_post_most_recent_footer_hover_state_header_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color (hover state)',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_theme_widget_post_most_recent>ul>li>h6>a'
				)
			)
		)
	),
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Meta box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Meta box colors',PLUGIN_THEME_STYLE_DOMAIN)	
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'widget_theme_post_most_recent_footer_hover_state_meta_box_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'CCCAE2',
				'selector'			=>	array
				(
					'div.theme-footer-top .widget_theme_widget_post_most_recent>ul>li>span'
				)					
			)
		)
	)
));

/******************************************************************************/

TSCSSRule::addPanel('zaccordion',array
(	
	array
	(
		'description'				=>	array
		(
			'header'				=>	__('Caption box',PLUGIN_THEME_STYLE_DOMAIN),
			'subheader'				=>	__('Caption box colors',PLUGIN_THEME_STYLE_DOMAIN),		
		),
		'field'						=>	array					
		(
			array
			(
				'id'				=>	'zaccordion_default_caption_box_background_color',
				'type'				=>	'background-color',
				'label'				=>	__('Background color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'00000080',
				'selector'			=>	array
				(
					'.pb-zaccordion .pb-zaccordion-caption-box'
				)
			),
			array
			(
				'id'				=>	'zaccordion_default_caption_box_title_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-zaccordion .pb-zaccordion-caption-box .pb-zaccordion-caption-box-title'
				)
			),
			array
			(
				'id'				=>	'zaccordion_default_caption_box_excerpt_text_color',
				'type'				=>	'color',
				'label'				=>	__('Text color',PLUGIN_THEME_STYLE_DOMAIN),
				'default'			=>	'FFFFFF',
				'selector'			=>	array
				(
					'.pb-zaccordion .pb-zaccordion-caption-box .pb-zaccordion-caption-box-excerpt',
					'.pb-zaccordion .pb-zaccordion-caption-box .pb-zaccordion-caption-box-excerpt a'
				)
			)
		)
	)
));

/******************************************************************************/
/******************************************************************************/