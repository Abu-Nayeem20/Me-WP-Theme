
<?php global $Me; ?>

<footer class="me-footer">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="me-footer-txt">
					<p><?php echo $Me['copyr-icon']; ?> <?php echo $Me['copyr-text']; ?> </p>
				</div>
			</div>
			<div class="col-6">
				<div class="me-social-icon">

					<?php if(!empty($Me['social-links']['Facebook'])) : ?>
	      		     <a href="<?php echo $Me['social-links']['Facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
	      		 <?php endif; ?> 
	      		  
	      		 <?php if(!empty($Me['social-links']['Twitter'])) : ?>   
	      		     <a href="<?php echo $Me['social-links']['Twitter']; ?>"><i class="fab fa-twitter"></i></a>
	      		 <?php endif; ?>

	      		 <?php if(!empty($Me['social-links']['LinkedIn'])) : ?>    
	      		     <a href="<?php echo $Me['social-links']['LinkedIn']; ?>"><i class="fab fa-linkedin-in"></i></a>
	      		 <?php endif; ?>

	      		 <?php if(!empty($Me['social-links']['Instagram'])) : ?>    
	      		     <a href="<?php echo $Me['social-links']['Instagram']; ?>"><i class="fab fa-instagram"></i></a>
	      		 <?php endif; ?>    

	      		 <?php if(!empty($Me['social-links']['Google+'])) : ?>
	      		     <a href="<?php echo $Me['social-links']['Google+']; ?>"><i class="fab fa-google-plus-g"></i></a>
	      		 <?php endif; ?> 
	      		  
				</div>
			</div>
		</div>
	</div>
	<div class="me-scrollar">
		
		<?php echo $Me['scrlr-icon']; ?>
		
	</div>
	<div class="me-messenger wow bounceInDown" data-wow-duration="2s" data-wow-delay="2s">
		<span>Hi, how can i help you?</span>
		<i class="fab fa-facebook-messenger"></i>
	</div>
</footer>   


    <?php wp_footer(); ?>

</body>
</html>