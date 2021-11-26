
<?php global $Me; ?>


<?php get_header(); ?>

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

<section class="me-erorr">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="me-erorr-text">
					<h2><?php echo $Me['e-heading']; ?></h2>
					<p><?php echo $Me['e-tagline']; ?></p>
				</div>
			</div>
			<div class="col-6">
				<h1 class="e404">404</h1>
				<div class="me-erorr-icon">
					<img src="<?php echo $Me['e-img']['url']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>

	<!-- Widgets -->

 	<?php get_template_part('me_widgets'); ?>	

   <!-- Footer -->

   <?php get_footer(); ?>