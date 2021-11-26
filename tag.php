

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


	<!-- Blog article posts -->

	<section class="me-post-section">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<?php get_template_part('post_side_left'); ?>
			</div>
			<div class="col-md-8">
				<div class="me-post-items">
					<div class="row">

						<?php
						    if(have_posts()):
							    while (have_posts()): the_post();
					    ?>
						<div class="col-md-6" id="me-post">
							<div class="me-post-headline">
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							</div>
							<div class="me-post-thumbnail">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="me-post-date">
						       <em><?php echo get_the_date(); ?></em>
					       </div>
							<div class="me-post-content">
								<?php me_readmore(15); ?>
								<a href="<?php the_permalink(); ?>">...Read More</a>

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
			<div class="col-md-2">
				<?php get_template_part('post_side_right'); ?>
			</div>
		</div>
		<!--=======Pagination-Start========-->
		<div class="me-pagination">
			<?php the_posts_pagination(array(
	             'screen_reader_text' => " ",
	             'prev_text' => '<i class="fas fa-angle-left"></i>',
	             'next_text' => '<i class="fas fa-angle-right"></i>'
	           ));
           	?>
		</div>
		<!--=======Pagination-End========-->
	</div>
</section>		

  

	<!-- Widgets -->

 	<?php get_template_part('me_widgets'); ?>	

   <!-- Footer -->

   <?php get_footer(); ?>