
<?php global $Me; ?>

<?php get_header(); 
	// Template Name: Terms Condition 
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
		<?php get_template_part('other_slider')?>

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


     <!-- Terms and conditions -->
     <section class="me-tc">
     	<div class="container">
     		<div class="me-tc-header">
                 <h2><?php echo $Me['tc-heading']; ?></h2>
               </div>
     		<div class="me-tc-details">
     			<p><?php echo $Me['tc-text']; ?></p>
     		</div>
     	</div>
     </section>

  

	<!-- Widgets -->

 	<?php get_template_part('other_widgets'); ?>	

   <!-- Footer -->

   <?php get_footer(); ?>