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
          'id'    => 'product_id',
          'type'  => 'text',
          'title' => 'Insert Product Id',
          'default' => '226, ',
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
              'id'    => 'regisnation_name',
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
              'title' => 'Add your Title text',
            ),
            array(
              'id'    => 'text_name',
              'type'  => 'text',
              'title' => 'Add your text Name',
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