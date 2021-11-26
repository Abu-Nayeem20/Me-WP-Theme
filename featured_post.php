

		<!-- Catching post by post format -->


<section class="me-post-feature">
	 <div class="container">
		<div class="me-fepost-header">
		  <h3>new blog posts</h3>
	   </div>
	   <div class="me-posts wow slideInUp">
	   	   <div class="row">

	   	<?php
				$paged = get_query_var('paged')?get_query_var('paged'):1;
				$me_post_per_page = 4;

				$me_post = new WP_Query(array(
					'posts_per_page' => $me_post_per_page,
					'paged' => $paged,
					'tax_query' => array(
						'relation' => 'OR',
						array(
					    	'taxonomy' => 'post_format',
					    	'field' => 'slug',
					    	'terms' => array(
					    		'post-format-quote'
					    	)
					    )
					)
				));

				while ( $me_post->have_posts()) {
					$me_post->the_post();
				
			?>	

	   	   	 <div class="col-md-3 col-6">
	   	   	 	<div class="me-fepost-item">
	   	   	 		<div class="me-fepost-img">
	   	   	 			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	   	   	 			<div class="me-fepost-overlay-1"></div>
	   	   	 			<div class="me-fepost-overlay-2"></div>
	   	   	 		</div>
	   	   	 		<div class="me-fepost-txt">
	   	   	 			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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