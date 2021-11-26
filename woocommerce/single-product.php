<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	   <!-- Logo + Search + Category section -->

<section class="me-lsc-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="me-logo">
					<?php the_custom_logo(); ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<?php dynamic_sidebar('search-field'); ?>
    
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="me-categories-menu">
					<div class="me-categories-menu-title">
     		 			<h5>categories <i class="fas fa-sort-down"></i></h5>
     		 		</div>
     		 		<nav class="me-category-menu">
     		 			
     		 	<?php
		  			wp_nav_menu(array(
		  					'theme_location' => 'category-menu'
		  			));
		   		?>

     		 		</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="me-new-single-product-sec">
	<div class="container">
		
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	</div>
</section>	

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		get_template_part('me_widgets');
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
