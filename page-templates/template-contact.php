<?php
/**
 * Template Name: Contact page bulliondeals
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

<div class="bulliondeals-contact">
	<div class="container">
		<div class="title-holder-contact">
			<h1>Contact Us</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="contact-holder">
					<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]');?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="agents-holder">
					<?php if ( have_rows( 'agents', 'option' ) ) : ?>
					<?php while ( have_rows( 'agents', 'option' ) ) : the_row(); ?>
					<div class="single-agent">
						<?php $agent_image = get_sub_field( 'agent_image' ); ?>
						<?php if ( $agent_image ) { ?>
							<img src="<?php echo $agent_image['url']; ?>" alt="<?php echo $agent_image['alt']; ?>" />
						<?php } ?>
						<div class="text-holder">
							<?php the_sub_field( 'agent_text' ); ?>
						</div>
						<?php $agent_button = get_sub_field( 'agent_button' ); ?>
						<?php if ( $agent_button ) { ?>
							<a class="btn-tesla" href="<?php echo $agent_button['url']; ?>" target="<?php echo $agent_button['target']; ?>"><?php echo $agent_button['title']; ?></a>
						<?php } ?>
					</div>
					<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="bottom-images">
			<div class="container">
				<div class="img-holder">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/porto-child/img/test-bot-l-t-77-78.png" alt="testimonials-image-bottom-left">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/porto-child/img/test-bot-r-b-71-55.png" alt="testimonials-image-bottom-right">
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();