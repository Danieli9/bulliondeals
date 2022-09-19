<?php
/**
 * Template Name: Home page bulliondeals
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="home-page-agents">
	<div class="container">
		<div class="row">
			<?php if ( have_rows( 'agents', 'option' ) ) : ?>
			<?php while ( have_rows( 'agents', 'option' ) ) : the_row(); ?>
			<div class="col-xl-3 col-md-6">
				<div class="flex-holder">
					<?php $agent_image = get_sub_field( 'agent_image' ); ?>
					<?php if ( $agent_image ) { ?>
					<img src="<?php echo $agent_image['url']; ?>" alt="<?php echo $agent_image['alt']; ?>" />
					<?php } ?>
					<div class="gold-line"></div>
					<div class="text-holder">
						<?php the_sub_field( 'agent_text' ); ?>
					</div>
					<?php $agent_button = get_sub_field( 'agent_button' ); ?>
					<?php if ( $agent_button ) { ?>
						<a class="btn-tesla" href="<?php echo $agent_button['url']; ?>" target="<?php echo $agent_button['target']; ?>"><?php echo $agent_button['title']; ?></a>
					<?php } ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="home-page-banner">
	<div class="container">
		<section class="bulliondeals-banner-slider">
			<?php if ( have_rows( 'single_slider', 'option' ) ) : ?>
			<?php while ( have_rows( 'single_slider', 'option' ) ) : the_row(); ?>
			<div class="bulliondeals-banner-single">
				<div class="text-holder-banner-down">
					<?php the_sub_field( 'image_text' ); ?>
				</div>
				<?php $image_slider = get_sub_field( 'image_slider' ); ?>
				<?php if ( $image_slider ) { ?>
				<img src="<?php echo $image_slider['url']; ?>" alt="<?php echo $image_slider['alt']; ?>" />
				<?php } ?>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>		
		</section>
	</div>
</div>

<div class="home-page-silver-gold">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-lg-6">
				<div class="gold">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Gold_1.png" alt="gold">
					<div class="text-holder">
						<h3>BUY GOLD</h3>
						<p>24/7 easy online ordering</p>
					</div>
				</div>
				<a class="btn-tesla" href="<?php echo get_site_url();?>/gold">Buy now</a>
			</div>
			<div class="col-lg-6">
				<div class="silver">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Silver_1.png" alt="silver">
					<div class="text-holder">
						<h3>BUY SILVER</h3>
						<p>Largest range, lowest prices.</p>
					</div>
				</div>
				<a class="btn-tesla" href="<?php echo get_site_url();?>/silver">Buy now</a>
			</div>
		</div>
	</div>
</div>

<div class="wrapper home-page-current-special">
	<div class="container">
		<h1><a href="/current-specials/">Current Specials</a></h1>
		<div class="row row-t">
			<?php $args = array('posts_per_page' => '12', 'product_cat' => 'current-specials', 'post_type' => 'product', 'orderby' => 'title', 'meta_query' => array( array('key' => '_stock_status','value' => 'instock' ),)); ?>
			<?php
			$query = new WP_Query( $args );
			if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post(); ?>
			<div class="content-t col-md-6 col-lg-4">
				<div class="short-desc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('size-homepage-bulliondeals'); ?></a>
				<div class="holder-price-add">
					<div class="price"><a href="<?php the_permalink(); ?>"><?php echo $product->get_price_html(); ?></a></div>
					<?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
				</div>
			</div>
			<?php
			endwhile;
			endif; ?>
		</div>
	</div><!-- #content -->
</div><!-- #page-wrapper -->
<div class="separated-see-all">
	<a href="<?php echo get_site_url();?>/gold-silver">see all products</a>
</div>
<div class="home-page-buttons">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="gold">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Gold_1.png" alt="gold">
					<div class="menu-holder">
						<a href="<?php echo get_site_url();?>/gold">Gold</a>
						<ul>
							<li><a href="<?php echo get_site_url();?>/gold-under-5k">Gold under 5k</a></li>
							<li><a href="<?php echo get_site_url();?>/gold-5k-20k">5k-20k</a></li>
							<li><a href="<?php echo get_site_url();?>/gold-20k-100k">20k-100k</a></li>
							<li><a class="bold" href="<?php echo get_site_url();?>/gold-100k-500k">100k-500k+</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="silver">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Silver_1.png" alt="silver">
				<div class="menu-holder">
					<a href="<?php echo get_site_url();?>/silver">Silver</a>
					<ul>
					<li>
						<li><a href="<?php echo get_site_url();?>/silver-under-5k">Silver under 5k</a></li>
						<li><a href="<?php echo get_site_url();?>/silver-5k-20k">5k-20k</a></li>
						<li><a href="<?php echo get_site_url();?>/silver-20k-100k">20k-100k</a></li>
						<li><a class="bold" href="<?php echo get_site_url();?>/silver-100k-500k">100k-500k+</a></li>
					</ul>
				</div>
				
				</div>
			</div>
		</div>
	</div>
</div><!-- .home-page-buttons -->

<div class="home-page-great-deals">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 t-flex">
				<div class="flex-holder">
					<img src="<?php echo get_template_directory_uri(); ?>/img/free-insurance.png" alt="free">
					<div class="text-holder">
						<p>Free Insurance  & Shipping</p>
					</div>
					<div class="vertical-blue-line"></div>
				</div>

			</div>
			<div class="col-lg-4 t-flex">
			<div class="flex-holder">
				<img src="<?php echo get_template_directory_uri(); ?>/img/great-bullion-deals.png" alt="free">
				<div class="text-holder">
					<p>Great Bullion Deals</p>
				</div>
				<div class="vertical-blue-line"></div>
			</div>
			</div>
			<div class="col-lg-4 t-flex">
				<div class="flex-holder">
				<img src="<?php echo get_template_directory_uri(); ?>/img/order-gold-silver.png" alt="free">
				<div class="text-holder">
					<p>Order Gold  & Silver Online </p>
				</div>
				</div>
			</div>
		</div>
	</div><!-- #content -->
</div><!-- .home-page-great-deals -->

<div class="home-page-testimonials">
	<div class="container">
			<h2>Testimonials</h2>
			<section class="bulliondeals-testimonials-slider">
			<?php if ( have_rows( 'all_testimonials', 'option' ) ) : ?>
				<?php $i = 0; ?>
				<?php while ( have_rows( 'all_testimonials', 'option' ) ) : the_row(); 
					$i++; 
					if( $i > 10 )
					{
						break;
					}
					?>
					<div class="testimonial-home">
						<h4><?php the_sub_field( 'name_of_customer' ); ?></h4>
						<p><?php the_sub_field( 'customer_feedback' ); ?></p>
						<div class="feedback-and-signature">
							<div class="stars">
								<i class="fas fa-star rating"></i>
								<i class="fas fa-star rating"></i>
								<i class="fas fa-star rating"></i>
								<i class="fas fa-star rating"></i>
								<i class="fas fa-star rating"></i>	
							</div>
							<p><?php the_sub_field( 'name_of_customer' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
			</section>
	</div><!-- #content -->
</div><!-- .home-page-testimonials -->

<script type="text/javascript">
    $(document).on('ready', function() {
      $(".bulliondeals-testimonials-slider").slick({
        dots: false,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
		responsive: [
			{
				breakpoint: 1100,
					settings: {
						centerMode: false,
						slidesToShow: 2,
						slidesToScroll: 1
					}
			},
			{ 
				breakpoint: 768,
					settings: {
						centerMode: true,
						slidesToShow: 1,
						slidesToScroll: 1
					}
			}
		]
      });
    });
</script>
<script type="text/javascript">
    $(document).on('ready', function() {
      $(".bulliondeals-banner-slider").slick({
		dots: true,
		infinite: true,
		autoplay: true,
  		autoplaySpeed: <?php the_field( 'slider_speed', 'option' ); ?>,
		speed: 500
      });
    });
</script>
<?php
get_footer();