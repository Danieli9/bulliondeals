<?php

add_action('wp_enqueue_scripts', 'porto_child_css', 1001);
 
// Load CSS
function porto_child_css() {
    // porto child theme styles
    wp_register_style( 'main', get_stylesheet_directory_uri() . '/css/main.min.css' );
    wp_enqueue_style( 'main' );

    if (is_rtl()) {
        wp_deregister_style( 'styles-child-rtl' );
        wp_register_style( 'styles-child-rtl', get_stylesheet_directory_uri() . '/style_rtl.css' );
        wp_enqueue_style( 'styles-child-rtl' );
    }
	}
	
function bulliandeal_widgets_init() {	
  register_sidebar( array(
	  'name'          => __( 'Top head bottom' ), // change name
	  'id'            => 'top-head-bottom', // change heading
	  'description'   => __( 'Add widgets here to appear in your Header.', 'twentyseventeen' ),
	  'before_widget' => '<section id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</section>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
	  'name'          => __( 'Home Page Notice Bar' ), // change name
	  'id'            => 'home-notice-bar', // change heading
	  'description'   => __( 'Add widgets here to appear in your Header top bar.', 'twentyseventeen' ),
	  'before_widget' => '<section id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</section>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'bulliandeal_widgets_init' );

// Load JS
function the_tesla_design(){
  
    wp_register_script('slick.min.js', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0', true);
    wp_enqueue_script('slick.min.js');
    // wp_register_script('navwalker.js', get_template_directory_uri() . '/js/navwalker.js', array(), '1.0', true);
    // wp_enqueue_script('navwalker.js');

  
}
add_action('wp_enqueue_scripts', 'the_tesla_design');

	

add_filter( 'add_to_cart_text', 'woo_custom_single_add_to_cart_text' );                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +
  
function woo_custom_single_add_to_cart_text() {
  
    return __( 'Add to Cart', 'woocommerce' );
  
}

add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );            // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +
  
function woo_custom_product_add_to_cart_text() {
  
    return __( 'Add to Cart', 'woocommerce' );
  
}
/*************webss************************/
if ( function_exists('register_sidebar') ){
register_sidebar(array(      
'name' => 'Gold Price Widgets',
'id' =>'gold_price_area',          
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));}


add_image_size( 'size-homepage-bulliondeals', 250, 250, true);


// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( '<i class="fas fa-shopping-cart"></i>', 'woocommerce' );
}


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function removeParentLinks() {
$pages = wp_list_pages('echo=0&amp;title_li=');
$pages = explode("</li>", $pages);
$count = 0;
foreach($pages as $page) {
if(strstr($page,"<ul>")) {
$page = explode('<ul>', $page);
$page[0] = str_replace('</a>','',$page[0]);
$page[0] = preg_replace('/\<a(.*)\>/','',$page[0]);
if(count($page) == 3) {
$page[1] = str_replace('</a>','',$page[1]);
$page[1] = preg_replace('/\<a(.*)\>/','',$page[1]);                
}
$page = implode('<ul>', $page);
}
$pages[$count] = $page;
$count++;
}
$pages = implode('</li>',$pages);
echo $pages;
}

function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


function rel_next_prev(){
    global $paged;
    $default_posts_per_page = get_option( 'posts_per_page' );

    if ( get_previous_posts_link() ) { ?>
        <link rel="prev" href="<?php echo get_pagenum_link( $paged - 1 ); ?>" /><?php
    }    
    if ( get_next_posts_link(null,$default_posts_per_page) ) { ?>
        <link rel="next" href="<?php echo get_pagenum_link( $paged +1 ); ?>" /><?php
    }    
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
add_action( 'wp_head', 'rel_next_prev' );





add_filter( 'posts_where', function( $where, $q )
{
    if( $name__like = $q->get( '_name__like' ) )
    {
        global $wpdb;
        $where .= $wpdb->prepare(
            " AND {$wpdb->posts}.post_name LIKE %s ",
            str_replace( 
                array( '**', '*' ), 
                array( '*',  '%' ),  
                mb_strtolower( $wpdb->esc_like( $name__like ) ) 
            )
        );
    }       
    return $where;
}, 10, 2 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Bullion Theme',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
}   



// clean cart every day
if (!wp_next_scheduled('cron_wc_clean_cart')) {
    wp_schedule_event( time(), 'daily', 'cron_wc_clean_cart' );
}

add_action ( 'cron_wc_clean_cart', 'wc_clean_session_cart' );
function wc_clean_session_cart() {
    global  $wpdb;

    $wpdb->query( "TRUNCATE {$wpdb->prefix}woocommerce_sessions" );
    $wpdb->query( "DELETE FROM {$wpdb->usermeta} WHERE meta_key='_woocommerce_persistent_cart_" . get_current_blog_id() . "';" );
    wp_cache_flush();
}





/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

//Remove JQuery migrate
 
function remove_jquery_migrate( $scripts ) {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		 $script = $scripts->registered['jquery'];
	if ( $script->deps ) { 
 	// Check whether the script has any dependencies
 
	$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
}
}
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

// add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );

// function change_default_jquery( ){
//     wp_dequeue_script( 'jquery');
//     wp_deregister_script( 'jquery');   
// }


 /*  DISABLE GUTENBERG STYLE IN HEADER| WordPress 5.9 */
function wps_deregister_styles() {
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

// disable cf7 css
function rjs_lwp_contactform_css_js() {
    global $post;
    if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'contact-form-7') ) {
        wp_enqueue_script('contact-form-7');
         wp_enqueue_style('contact-form-7');

    }else{
        wp_dequeue_script( 'contact-form-7' );
        wp_dequeue_style( 'contact-form-7' );
    }
}
add_action( 'wp_enqueue_scripts', 'rjs_lwp_contactform_css_js');