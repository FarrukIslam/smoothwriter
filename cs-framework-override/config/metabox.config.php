<?php 
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Metabox Config
 *
 * @since 1.0
 * @version 1.0
 *
 */
$options        = array();

$options[]      = array(
  'id'            => 'pricing_tab_option',
  'title'         => 'Price Tab Options',
  'post_type'     => 'sm_price_tab', // or post or CPT or array( 'page', 'post' )
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(

    // begin section
    array(
      'name'      => 'pricing_tab',
      'title'     => 'Pricing Tab',
      'icon'      => 'fa fa-wifi',
      'fields'    => array(

        // a field
        array(
          'id'    => 'tab_title',
          'type'  => 'text',
          'title' => 'Tab Title',
        ),

        // a field
        array(
          'id'    => 'tab_icon',
          'type'  => 'text',
          'title' => 'Tab Icon',
        ),

        array(
          'id'    => 'pricing_image',
          'type'  => 'upload',
          'title' => 'Upload Image Spcifiy Category',
        ),
        // a field
        array(
          'id'    => 'pricing_desc',
          'type'  => 'textarea',
          'title' => 'Write your Price Section Content',
        ),

        array(
              'id'    => 'Pricing_title',
              'type'  => 'text',
              'title' => 'Write Name',
              'default' => 'Professional',
            ),
        array(
              'id'    => 'pricing_content_body',
              'type'  => 'textarea',
              'title' => 'Set Pricing ul li',
            ),
        array(
              'id'    => 'price_name',
              'type'  => 'text',
              'title' => 'Priceing Name ',
              'desc'    => 'Write title of Price',
              'default' => 'Blog Post',
            ),

        
        array(
          'id'              => 'pricing_option',
          'type'            => 'group',
          'title'           => 'Create Priceing',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Price Option',
          'fields'          => array(
            
            

            array(
              'id'    => 'select_page_id',
              'type'  => 'text',
              'title' => 'Write your id (without space)',
              'desc'    => 'Id will be change difference key',
              'default' => 'select_page_id',
            ),
            array(
              'id'    => 'select_name',
              'type'  => 'text',
              'title' => 'Add your Option Name',
              'desc'    => 'Name will be Page Word',
              'default' => '300 Words',
            ),
            
            array(
              'id'    => 'price',
              'type'  => 'text',
              'title' => 'Add Your Price',
              'desc'    => 'Price will $15',
              'default' => '15',
            ),
           
          ),
        ),




      ),
    ),

    // begin section
    array(
      'name'      => ' ',
      'title'     => '',
      'icon'      => '',
      
    ),

  ),
);


$options[]      = array(
  'id'            => 'team_member',
  'title'         => 'Team Member Profile',
  'post_type'     => 'sm_team_member', // or post or CPT or array( 'page', 'post' )
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(

    // begin section
    array(
      'name'      => 'team_member_profile',
      'title'     => 'Team Member Profile',
      'icon'      => 'fa fa-user',
      'fields'    => array(
        array(
              'id'    => 'regisnation',
              'type'  => 'text',
              'title' => 'Add your Resignation Name',
              'default' => 'Content Writer',
            ),

       
        array(
          'id'              => 'profile_option',
          'type'            => 'group',
          'title'           => 'Create Team member Proifle',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New  Team member Proifle',
          'fields'          => array(
            
            

            array(
              'id'    => 'title_name',
              'type'  => 'text',
              'title' => 'Add your text',
            ),
            
            array(
              'id'    => 'icon',
              'type'  => 'text',
              'title' => 'Add your icon',
              'default' => 'fa-envelope-o'
            
              
            ),
           
          ),
        ),




      ),
    ),

    // begin section
    array(
      'name'      => ' ',
      'title'     => '',
      'icon'      => '',
      
    ),

  ),
);

CSFramework_Metabox::instance( $options );