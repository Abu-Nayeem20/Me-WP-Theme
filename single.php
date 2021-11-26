

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
						<div class="col-12" id="me-post">
							<div class="me-post-headline">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="me-post-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="me-post-date">
						       <em><?php echo get_the_date(); ?>
						       	| By <?php the_author(); ?> | <?php comments_popup_link('No Comment','One Comment','% Comments','cmmnt-show','Comments Unavailable'); ?>
						       </em>
					       </div>
							<div class="me-post-content">
								<?php the_content();
									  wp_link_pages();
								 ?>
							</div>
						</div>
						<div class="me-comments">
							<?php comments_template(); ?>
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