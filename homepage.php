
<?php global $Me; ?>

<?php
	get_header();
	// Template Name: Home
?>

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

		<!-- Slider -->
<?php get_template_part('home_slider')?>

		<!-- Category page menu	-->

<div class="me-categories-pageMenu">
	<div class="container">
		<nav class="me-category-pagemenu">
			<?php
		  		wp_nav_menu(array(
		  			'theme_location' => 'category-menu'
		  		));
		   	?>
		</nav>
	</div>
</div>

    <!-- Slider for popular product-->

 <?php get_template_part('pp_slider'); ?> 

    <!-- Slider for discount product--> 

 <?php get_template_part('dc_slider'); ?> 

  <!-- Slider for New product--> 

  <?php get_template_part('new_arrival'); ?> 

    <!-- homepage fixed bg-->

  <section class="me-home-pro-ad" style="background-image: url(<?php echo $Me['home-fixed-adbg']['url']; ?>);  background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: center;">
  </section>

 	<!-- product Brand-->

 <?php get_template_part('brand_tag'); ?>

	<!-- Newly coming product -->

	<section class="me-new-product-sec">
		<div class="container">
			<div class="me-discount-items-header">
				<h3>just for you</h3>
			</div>
			<div class="me-new-products">
				<div class="row">

			<?php
				$paged = get_query_var('paged')?get_query_var('paged'):1;
				$me_product_per_page = 24;

				$me_products = new WP_Query(array(
					'post_type' => "product",
					'posts_per_page' => $me_product_per_page,
					'paged' => $paged,
					'meta_key' => 'front',
					'meta_value' => '22'
				));

				while ( $me_products->have_posts()) {
					$me_products->the_post();
				
			?>	
					<div class="col-lg-2 col-md-3 col-sm-4 col-6">
						<div class="me-new-sin-pro wow slideInUp">
							<div class="me-product-img">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="me-product-name">
								<a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a>
							</div>
							<div class="me-fproduct-price">
								<span><?php echo $product->get_price_html(); ?></span>
							</div>
							<div class="me-fproduct-rating">
								
							</div>	
						   </div>
						</div>

					<?php
						}
						wp_reset_query();
					?>		

				</div>
			</div>
		</div>
	</section>	

	  <!-- New Posts -->

	  <?php get_template_part('featured_post'); ?> 

	<!-- Widgets -->

	<?php get_template_part('me_widgets'); ?>

   <!-- Footer -->

   <?php
   		get_footer();
   	?>