<?php 
function eshopper_woocommerce_support() {

			add_theme_support( 'woocommerce' );
		}
add_action('after_setup_theme','eshopper_woocommerce_support');	

//redirect checkput page
add_filter('add_to_cart_redirect', 'smoothwriter_add_to_cart_redirect');
	function smoothwriter_add_to_cart_redirect() {
	 global $woocommerce;
	 $checkout_url = $woocommerce->cart->get_checkout_url();
	 return $checkout_url;
	}

//Add New Pay Button Text
add_filter( 'woocommerce_product_single_add_to_cart_text', 'smoothwriter_cart_button_text' ); 
 
function smoothwriter_cart_button_text() {
?>
	<button class="btn-primary pay-now">
		<?php return __( 'Pay Now', 'woocommerce' ); ?>
	</button>
<?php
}


//product page button rename
add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );          
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +
  
function woo_custom_product_add_to_cart_text() {
  ?>
    <button class="btn-primary pay-now"><?php return __( 'Pay Now', 'woocommerce' ); ?></button>
  <?php 
}


// redirect product page to checkout page

add_action( 'template_redirect', 'redirect_external_products' );

function redirect_external_products() {
global $post;

if ( is_singular( 'product' ) && ! empty( $post ) && ( $product = wc_get_product( $post ) ) && $product->is_type( 'external' ) ) {
wp_redirect( $product->get_product_url() );
exit;
}
}

//product content
//remove result count
remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open', 20);

//remove thumbnail
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail', 10);

//remove sale flash
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash', 10);

//remove title
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10);

//remove rating
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5);


//remove button
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 10);

//remove price
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 10);

//remove ordering
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 11 ); 

//remove shop page title
add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );
function woo_hide_page_title() {
	
	return false;
	
}
//breadcrumb remove
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

//remove count shop page
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

//remove woocommerce sidebar
 remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

 //remove sky number
 add_filter( 'wc_product_sku_enabled', '__return_false' );