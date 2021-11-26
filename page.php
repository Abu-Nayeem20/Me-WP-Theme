

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

	<!-- Blog article posts -->

	<section class="me-post-section">
		<div class="container">
			<div class="me-post-items">
				<div class="row">

						<?php
						    if(have_posts()):
							    while (have_posts()): the_post();
					    ?>
						<div class="col-md-10 offset-md-1 col-12" id="me-post">
							<div class="me-page-title">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="me-post-thumbnail">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="me-post-content">
								<?php the_content(); ?>

							</div>
						</div>

						<?php
							 endwhile;
							 else: echo 'NO POST';
						    endif;	
						?>

					</div>
				</div>
	</div>
</section>	
  

	<!-- Widgets -->

 	<?php get_template_part('me_widgets'); ?>	

   <!-- Footer -->

   <?php get_footer(); ?>