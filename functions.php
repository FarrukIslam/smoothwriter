<?php

if (!defined('smoothwriter')) define('smoothwriter', '1.0');

if (!class_exists('smoothwriter_scripts_load'))
	{
	class smoothwriter_scripts_load {
		
		public function __construct() {
			add_action('wp_enqueue_scripts', array( $this, 'smoothwriter_scripts' ));
			add_action('after_setup_theme', array($this, 'smoothwriter_after_theme_setup'));
			}

		public function smoothwriter_scripts() {
				
			/** 
			---------------------------------------------------------------
			 CSS Files 
			---------------------------------------------------------------	
			**/
			
			wp_enqueue_style( 'wpb-google-fonts-volkhov', 'https://fonts.googleapis.com/css?family=Volkhov:400,400i,700,700i', false ); 
 
		   
			wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array() , smoothwriter);
			
			wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array() , smoothwriter);

			wp_enqueue_style('color', get_template_directory_uri() . '/css/color.css', array() , smoothwriter);

			wp_enqueue_style('widget', get_template_directory_uri() . '/css/widget.css', array() , smoothwriter);

			

			wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array() , smoothwriter);
			
			wp_enqueue_style('style_main', get_template_directory_uri() . '/css/style_main.css', array() , smoothwriter);

			wp_enqueue_style('font-icon', get_template_directory_uri() . '/css/font-icon.css', array() , smoothwriter);
			
			wp_enqueue_style('bootstrap.modified', get_template_directory_uri() . '/css/bootstrap.modified.css', array() , smoothwriter);
			
			 wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
			
			wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array() , smoothwriter);
			
			/** 
			---------------------------------------------------------------
			 jQuery Files
			---------------------------------------------------------------	
			**/
			wp_enqueue_script('jQuery',true);

			wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(
				'jquery'
			) , smoothwriter, true);

			wp_enqueue_script('mediaelement-and-player', get_template_directory_uri() . '/js/mediaelement-and-player.min.js', array(
				'jquery'
			) , smoothwriter, true);

			wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array(
				'jquery'
			) , smoothwriter, true);

			wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array(
				'jquery'
			) , smoothwriter, true);

			wp_enqueue_script('jquery-scrolltofixed', get_template_directory_uri() . '/js/jquery-scrolltofixed.js', array(
				'jquery'
			) , smoothwriter, true);

			wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(
				'jquery'
			) , smoothwriter, true);

			wp_enqueue_script('jquerycycle2', get_template_directory_uri() . '/js/jquerycycle2.js', array(
				'jquery'
			) , smoothwriter, true);

			wp_enqueue_script('cycle2carousel', get_template_directory_uri() . '/js/cycle2carousel.js', array(
				'jquery'
			) , smoothwriter, true);

			wp_enqueue_script('jquery.flexslider-min', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(
				'jquery'
			) , smoothwriter, true);

			
				
			
			/* wordpress comments */
			if (is_singular() && comments_open() && get_option('thread_comments'))
				{
				wp_enqueue_script('comment-reply');
				}
			}

		function smoothwriter_after_theme_setup() {

			/* load text domain */
			load_theme_textdomain('smoothwriter', get_template_directory() . '/languages');
			
			/* widget shortcode support*/
			add_filter('widget_text', 'do_shortcode');
			
			/* theme supports */
			add_theme_support('post-thumbnails', array('post','Dj_slider'));
			add_theme_support('automatic-feed-links');			

			add_theme_support('post-thumbnails');

			add_image_size('smoothwriterslider1290x560', 1290, 560, true);
			add_image_size('recentpostwidget150x150', 150, 150, true);
			add_image_size('portfilio230x172', 230, 172, true);
			add_image_size('teammember500x500', 500, 500, true);
			add_image_size('teammember230x172', 220, 165, true);
			add_image_size('fontpageblog275x185', 275, 185, true);

			
			
			/* register nav left*/
			register_nav_menus(array(
				'primarymenu' => __('Primary Menu', 'smoothwriter')
			));
			

			/* register sidebar */
			function smoothwriter_widgets_register_func()
				{	
					
				register_sidebar( array(
			        'name' => __( 'Footer Sidebar', 'smoothwriter' ),
			        'id' => 'footer-sidebar',
			        'description' => __( 'Widgets in this area will be shown Footer.', 'smoothwriter' ),
			        'before_widget' => '<div class="col-md-3"><div class="widget">',
					'after_widget'  => '</div></div>',
					'before_title'  => '<header class="cs-heading-title">
							<h2 class="cs-section-title">',
					'after_title'   => '</h2>
						</header>',
				    ) );
				register_sidebar( array(
			        'name' => __( 'Right Sidebar', 'smoothwriter' ),
			        'id' => 'right-sidebar',
			        'description' => __( 'Widgets in this area will be shown Right sidebar.', 'smoothwriter' ),
			        'before_widget' => ' <div class="widget">',
					'after_widget'  => '</div>',
					'before_title'  => '<header class="cs-heading-title"><h2 class="cs-section-title">',
					'after_title'   => '</h2>
						</header>',
				    ) );
				
				}

			add_action('widgets_init', 'smoothwriter_widgets_register_func');

			
			}
		}
	}

if (class_exists('smoothwriter_scripts_load'))
	{
	global $smoothwriter_scripts_load;
	$smoothwriter_scripts_load = new smoothwriter_scripts_load();
	}

//Default menu 
function smoothwriter_default_menu(){	
		
		if(is_user_logged_in()){
			echo '<ul class="menus">';
		echo '<li class="current"><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">'. esc_html__('Create Menu','smoothwriter').'</a></li>';
			echo '</ul>';
		}
		
	else {
		echo '<ul class="menus">';
		echo '<li><a href="'.esc_url(home_url()).'">' . esc_html__( 'Home', 'smoothwriter' ) . '</a></li>';
		echo '</ul>';
	}
}

require_once get_template_directory() .'/inc/required_plugins.php';
require_once get_template_directory() .'/inc/widgets/widgets_category.php';
require_once get_template_directory() .'/inc/widgets/widgets-recentpost.php';
require_once get_template_directory() .'/inc/widgets/quick-links.php';
require_once get_template_directory() .'/inc/custom-post-type.php';
require_once get_template_directory() .'/inc/shortcodes/fontpage.php';
require_once get_template_directory() .'/inc/pagination.php';
require_once get_template_directory() .'/inc/breadcrumb.php';
require_once get_template_directory() .'/inc/ps-extend-vc.php';
require_once get_template_directory() .'/inc/woocommerce-support.php';
