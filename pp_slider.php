  
  <?php global $Me; ?>
  
    <!-- Slider for popular product-->

    <?php if( $Me['pp-show/hide'] == 1 ) : ?>

    <section class="me-popular-items">
	   <div class="container">
			<div class="me-popular-items-header">
				<h3> popular products</h3>
			</div>
			<div class="me-popular-item owl-carousel owl-theme">

				<?php
		 			$attachments = new Attachments( 'popularproducts' );

		 			if ($attachments->exist() ) :
		 			  while( $attachment = $attachments->get() ) :	
		 		?>

			    <div class="item wow slideInUp">
			    	<div class="me-popular-sin-item">
			    		<a href="<?php echo $attachments->field('url'); ?>"><?php echo $attachments->image(); ?></a>
			    		<div class="me-product-name">
			    			<a href="<?php echo $attachments->field('url'); ?>"><strong><?php echo $attachments->field('name'); ?></strong></a>
			    		</div>
			    		<div class="me-product-price">
			    			<span><?php echo $attachments->field('price'); ?></span>
			    		</div>
			    	</div>
			      </div>

			      <?php
			 		endwhile;
			 	 endif;
			 	 ?>

			   </div>		
		 </div>
	</section>


	<?php endif; ?>