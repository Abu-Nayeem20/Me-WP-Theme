  
  <?php global $Me; ?>
  
    <!-- Slider for new product-->

    <?php if( $Me['narrival-show/hide'] == 1 ) : ?>

    <section class="me-newArrival-items">
	   <div class="container">
			<div class="me-newArrival-items-header">
				<h3> new arrival</h3>
			</div>
			<div class="me-newarrival-item owl-carousel owl-theme">

				<?php
		 			$attachments = new Attachments( 'newarrival' );

		 			if ($attachments->exist() ) :
		 			  while( $attachment = $attachments->get() ) :	
		 		?>

			    <div class="item wow slideInUp">
			    	<div class="me-newarrival-sin-item">
			    		<a href="<?php echo $attachments->field('url'); ?>"><?php echo $attachments->image(); ?></a>
			    		<div class="me-product-name">
			    			<a href="<?php echo $attachments->field('url'); ?>"><strong><?php echo $attachments->field('name'); ?></strong></a>
			    		</div>
			    		<div class="me-newarrival-product-price">
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