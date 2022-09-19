<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-16691621-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-16691621-1');
</script>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">

    <?php get_template_part('head'); ?>
</head>
<?php
global $porto_settings, $porto_design;
$wrapper = porto_get_wrapper_type();
$body_class = $wrapper;
$body_class .= ' blog-' . get_current_blog_id();
$body_class .= ' ' . $porto_settings['css-type'];

$header_type = porto_get_header_type();

if ($header_type == 'side')
    $body_class .=  ' body-side';

$loading_overlay = porto_get_meta_value('loading_overlay');
$showing_overlay = false;
if ('no' !== $loading_overlay && ('yes' === $loading_overlay || ('yes' !== $loading_overlay && $porto_settings['show-loading-overlay']))) {
    $showing_overlay = true;
    $body_class .= ' loading-overlay-showing';
}






?>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>
			<div class="container">
					<!-- Your site title as branding in the menu -->

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1926.86 1036.7"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#ffb642;}</style></defs><path class="cls-1" d="M369.19,814.06c0,78.5-63.95,129.78-143.08,129.78H40V500.69H213.44c77.25,0,139.91,50,139.91,126.61,0,36.72-14.55,65.84-38.61,86.74C347.66,734.93,369.19,769.11,369.19,814.06ZM141.27,595.64v78.51h72.17c22.8,0,38.62-16.46,38.62-39.26s-15.19-39.25-38.62-39.25ZM267.89,806.47c0-24.7-16.46-42.42-41.78-42.42H141.27v84.83h84.84C251.43,848.88,267.89,831.15,267.89,806.47Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M722.44,627.3V943.84h-95V914.09C610.39,937.51,578.73,952.7,537,952.7c-63.94,0-118.39-45.57-118.39-131V627.3h95V807.73c0,39.25,24.69,57.61,55.07,57.61,34.83,0,58.88-20.26,58.88-65.21V627.3Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M792.09,481.7h95V943.84h-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M956.69,481.7h95V943.84h-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1111.79,542.47c0-31,26-57,57-57s57,26,57,57-26,57-57,57S1111.79,573.49,1111.79,542.47Zm9.5,84.83h95V943.84h-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1270.06,785.57c0-94.33,74.71-167.13,167.77-167.13s167.76,72.8,167.76,167.13-74.7,167.13-167.76,167.13S1270.06,879.9,1270.06,785.57Zm240.57,0c0-45-31.65-74.7-72.8-74.7S1365,740.62,1365,785.57s31.66,74.7,72.81,74.7S1510.63,830.52,1510.63,785.57Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1963.29,749.48V943.84h-95V763.41c0-39.24-24.69-57.6-55.08-57.6-34.82,0-58.88,20.26-58.88,65.2V943.84h-94.95V627.3h94.95v29.75c17.1-23.41,48.75-38.61,90.53-38.61C1908.85,618.44,1963.29,664,1963.29,749.48Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M429,1288c0,125.35-93.07,221.57-215.25,221.57H36.43V1066.38H213.7C335.88,1066.38,429,1162.6,429,1288Zm-97.5,0c0-76-48.11-124.09-117.75-124.09h-76V1412h76C283.34,1412,331.45,1363.92,331.45,1288Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1373.16,1193v316.54h-95v-29.75c-20.89,24.06-51.91,38.62-94.33,38.62-82.94,0-151.31-72.81-151.31-167.13s68.37-167.14,151.31-167.14c42.42,0,73.44,14.56,94.33,38.61V1193Zm-95,158.28c0-47.49-31.65-77.24-75.34-77.24s-75.33,29.75-75.33,77.24,31.65,77.23,75.33,77.23S1278.2,1398.74,1278.2,1351.27Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1442.8,1047.39h95v462.14h-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-1" d="M1849.87,1414.57c0,72.8-63.3,103.83-131.68,103.83-63.3,0-111.42-24.06-136.11-75.34l82.3-46.85c8.23,24.06,25.95,37.36,53.81,37.36,22.79,0,34.19-7,34.19-19.64,0-34.81-155.74-16.45-155.74-126,0-69,58.25-103.83,124.08-103.83,51.28,0,96.86,22.79,123.45,67.74l-81,43.68c-8.86-16.46-21.53-27.85-42.42-27.85-16.45,0-26.58,6.33-26.58,17.72C1694.14,1321.51,1849.87,1297.45,1849.87,1414.57Z" transform="translate(-36.43 -481.7)"/><path class="cls-2" d="M937.93,1101.85l26,95H501.73l26-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-2" d="M937.93,1262.08l26,95H501.73l26-95Z" transform="translate(-36.43 -481.7)"/><path class="cls-2" d="M937.93,1423.44l26,95H501.73l26-95Z" transform="translate(-36.43 -481.7)"/></svg></a>

					<!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'main_menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto mr-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				);
            
				?>

				<div class="position-absolute-mini-cart show">
                    <div id="mini-cart" class="mini-cart minicart-arrow-alt effect-fadein-up minicart-style1">
                        <div class="cart-head cart-head4">
                            <i class="fas fa-shopping-cart" style="font-size: 30px; color: #fff;"></i>
                                <span class="cart-items">0</span>
                        </div>
                        <div class="cart-popup widget_shopping_cart" style="opacity: 1;">
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget scrollbar-inner  ">
                                    <li class="woocommerce-mini-cart__empty-message empty">No products in the cart.	</li>
                                </ul><!-- end product list -->
                            </div>
                        </div>
                    </div>
                </div>

                
			
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->