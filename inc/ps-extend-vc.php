<?php


				 
/* Slider section  */

vc_map( array(
  "name" => __("Smoothwriter Slider", 'smoothwriter'),
  "base" => "sw_slider",
  "icon" => "sw_slider_icon",
  "category" =>array('By smoothwriter', 'Content'),
  "description" => __('smoothwriter Slider', 'smoothwriter'),
  "params" => array(
  		
  		array(
		  "type" => "textfield",
		  "heading" => __("Slider Per page", 'smoothwriter'),
		  "param_name" => "numberpost",
		  "admin_label" => true,
		  "value" => __("-1", 'smoothwriter')
		),
	
  )
) );
	 
/* Portfolio section  */

vc_map( array(
  "name" => __("Smoothwriter Portfolio", 'smoothwriter'),
  "base" => "sw_portfolio",
  "icon" => "sw_portfolio_icon",
  "category" =>array('By smoothwriter', 'Content'),
  "description" => __('smoothwriter Portfolio', 'smoothwriter'),
  "params" => array(
  		
  		array(
		  "type" => "textfield",
		  "heading" => __("Show Portfolio Items", 'smoothwriter'),
		  "param_name" => "numberpost",
		  "admin_label" => true,
		  "value" => __("6", 'smoothwriter')
		),
	
  )
) );

/* Blog post section  */

vc_map( array(
  "name" => __("Smoothwriter Blog Post", 'smoothwriter'),
  "base" => "sw_blog_post",
  "icon" => "sw_blog_post_icon",
  "category" =>array('By smoothwriter', 'Content'),
  "description" => __('smoothwriter Blog Post', 'smoothwriter'),
  "params" => array(
  		
  		array(
		  "type" => "textfield",
		  "heading" => __("Show Blog Post Items", 'smoothwriter'),
		  "param_name" => "numberpost",
		  "admin_label" => true,
		  "value" => __("3", 'smoothwriter')
		),
	
  )
) );

				
/* teammember section  */

vc_map( array(
  "name" => __("Smoothwriter Pricing Section", 'smoothwriter'),
  "base" => "sm_price_tab",
  "icon" => "sm_price_tab_icon",
  "category" =>array('By smoothwriter', 'Content'),
  "description" => __('smoothwriter Pricing Section', 'smoothwriter'),
  "params" => array(
  		
  		array(
		  "type" => "textfield",
		  "heading" => __("Show Price Tab", 'smoothwriter'),
		  "param_name" => "numberpost",
		  "admin_label" => true,
		  "value" => __("-1", 'smoothwriter')
		),
  		array(
		  "type" => "textfield",
		  "heading" => __("Pricing sectoin Title", 'smoothwriter'),
		  "param_name" => "heading_title",
		  "admin_label" => true,
		  "value" => __("Our Priceing include", 'smoothwriter')
		),
	
  )
) );

				
/* teammember section  */

vc_map( array(
  "name" => __("Smoothwriter Team Member", 'smoothwriter'),
  "base" => "sw_team_member",
  "icon" => "sw_team_member_icon",
  "category" =>array('By smoothwriter', 'Content'),
  "description" => __('smoothwriter Team Member', 'smoothwriter'),
  "params" => array(
  		
  		array(
		  "type" => "textfield",
		  "heading" => __("Show Portfolio Items", 'smoothwriter'),
		  "param_name" => "numberpost",
		  "admin_label" => true,
		  "value" => __("-1", 'smoothwriter')
		),
  		array(
		  "type" => "textfield",
		  "heading" => __("Portfolio sectoin Title", 'smoothwriter'),
		  "param_name" => "heading_title",
		  "admin_label" => true,
		  "value" => __("Team Member", 'smoothwriter')
		),
	
  )
) );

				 
/* Heading section  */

vc_map( array(
  "name" => __("Smoothwriter Heading", 'smoothwriter'),
  "base" => "sw_section_title1",
  "icon" => "sw_section_title1_icon",
  "category" =>array('By smoothwriter', 'Content'),
  "description" => __('smoothwriter Section Heading1', 'smoothwriter'),
  "params" => array(
  		
  		array(
		  "type" => "textfield",
		  "heading" => __("Heading Section1", 'smoothwriter'),
		  "param_name" => "title",
		  "admin_label" => true,
		  "value" => __("Write Here Titel", 'smoothwriter')
		),
  		array(
		  "type" => "textfield",
		  "heading" => __("Text Align", 'smoothwriter'),
		  "param_name" => "float",
		  "admin_label" => true,
		),
  		
	
  )
) );


//heading style 2
vc_map( array(
  "name" => __("Section Title Style 2", 'smoothwriter'),
  "base" => "sw_section_title2",
  "icon" => "sw_section_title2_icon",
  "category" =>array('By smoothwriter', 'Content'),
  "description" => __('smoothwriter Section Style 2', 'smoothwriter'),
  "params" => array(
  		
  		array(
		  "type" => "textfield",
		  "heading" => __("Section Sub Title ", 'smoothwriter'),
		  "param_name" => "subtitle",
		  "admin_label" => true,
		  "value" => __("subtitle ", 'smoothwriter')
		),
	
  		array(
		  "type" => "textfield",
		  "heading" => __("Section Title ", 'smoothwriter'),
		  "param_name" => "title",
		  "admin_label" => true,
		  "value" => __("Tilte ", 'smoothwriter')
		),
	
  		array(
		  "type" => "textfield",
		  "heading" => __("Section Align ", 'smoothwriter'),
		  "param_name" => "align",
		  "admin_label" => true,
		  "value" => __(" ", 'smoothwriter')
		),
	
  )
) );


/* DJ Button 1 */

vc_map( array(
  "name" => __("Smoothwriter Button 1", 'smoothwriter'),
  "base" => "sw_button1",
  "icon" => "sw_button1_icon",
  "category" =>array('By smoothwriter', 'Content'),
  "description" => __('Add smoothwriter Button', 'smoothwriter'),
  "params" => array(
  		 
		array(
		  "type" => "textfield",
		  "heading" => __("Button Link", 'smoothwriter'),
		  "param_name" => "link",
		  "admin_label" => true,
		  "value" => __("http://example.com/", 'smoothwriter')
		),
		
		array(
		  "type" => "textfield",
		  "heading" => __("Button Text", 'smoothwriter'),
		  "param_name" => "text",
		  "admin_label" => true,
		  "value" =>  __("More FAQ", 'smoothwriter')
		)

  )
) );


