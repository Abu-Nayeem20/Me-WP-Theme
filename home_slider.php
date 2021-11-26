
<?php global $Me; ?>

<div class="me-top-slider">
	<div class="me-home-slider owl-carousel owl-theme">

		<?php
				$me_home_slider = $Me['home-slides'];
				foreach($me_home_slider as $me_home_slides) {
			?>

		<div class="item">
			<a href="<?php echo $me_home_slides['url']; ?>">
				<img src="<?php echo $me_home_slides['image']; ?>" alt="Slider-Image">
			</a>
		</div>

		<?php
			}
		?>
		
	</div>
</div>