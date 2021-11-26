  
  <?php global $Me; ?>
  
    <!-- Slider for discount product-->

    <?php if( $Me['dc-show/hide'] == 1 ) : ?>

    <section class="me-discount-items">
	   <div class="container">
			<div class="me-discount-items-header">
				<h3> discount products</h3>
			</div>
			<div class="me-discount-item owl-carousel owl-theme">

				<?php
		 			$attachments = new Attachments( 'disproducts' );

		 			if ($attachments->exist() ) :
		 			  while( $attachment = $attachments->get() ) :	
		 		?>

			    <div class="item wow slideInUp">
			    	<div class="me-discount-sin-item">
			    		<a href="<?php echo $attachments->field('url'); ?>"><?php echo $attachments->image(); ?></a>
			    		<div class="me-product-name">
			    			<a href="<?php echo $attachments->field('url'); ?>"><strong><?php echo $attachments->field('name'); ?></strong></a>
			    		</div>
			    		<div class="me-dc-product-price">
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