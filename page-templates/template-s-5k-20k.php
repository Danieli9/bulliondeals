<?php
/**
 * Template Name: Silver 5-20
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

<div class="home-page-agents-products">
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

<div class="wrapper home-page-current-special">
	<div class="container">
		<? 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 9,
			'paged' => $paged,
			's' => '-ONEOFF',
			'_name__like'   => '*Silver*',
			 'orderby' => 'title', 
			 'meta_query' => array( 
			 	array(
			 	'key' => '_stock_status',
			 	'value' => 'instock'
			 	),
			 	array(
		            'key' => '_price',
		            'value' => array(5000, 20000),
		            'compare' => 'BETWEEN',
		            'type' => 'NUMERIC'
        		)

			 ));
			?> <div class="row row-t"> <?php
		    $my_query = null;
		    $my_query = new WP_Query($args);
		    if( $my_query->have_posts() ) {
		        $i = 0;
		        while ($my_query->have_posts()) : $my_query->the_post();
		            if($i % 2 == 0) { ?>
		            <?php } ?>
		            		<div class="content-t col-md-6 col-lg-4">
								<div class="short-desc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('size-homepage-bulliondeals'); ?></a>
								<div class="holder-price-add">
									<div class="price"><a href="<?php the_permalink(); ?>"><?php echo $product->get_price_html(); ?></a></div>
									<?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
								</div>
							</div>

		                <?php $i++; if($i != 0 && $i % 2 == 0) { ?>
		            
		            <div class="clearfix"></div>
		                <?php }
		            endwhile; ?>
		            </div><!--/.row-->
		            <nav class="pagination">
		                <button class="btn-whole"><?php previous_posts_link('prev', $my_query->max_num_pages); ?></button>
		                <button class="btn-whole"><?php next_posts_link('next', $my_query->max_num_pages); ?></button>
		            </nav>
		<?php } wp_reset_query(); ?>
	</div><!-- #content -->
</div><!-- #page-wrapper -->



<?php
get_footer();