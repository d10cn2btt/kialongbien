<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

			<?php echo do_shortcode("[wpcs id='129']"); ?>
			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 */
			do_action( 'kia-homepage' );
			?>

		</main><!-- #main -->
<?php
get_footer();
