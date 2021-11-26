
<?php global $Me; ?>

<div class="me-top-slider">
	<div class="me-other-slider owl-carousel owl-theme">

		<?php
				$me_other_slider = $Me['other-slides'];
				foreach($me_other_slider as $me_other_slides) {
			?>

		<div class="item">
			<a href="<?php echo $me_other_slides['url']; ?>">
				<img src="<?php echo $me_other_slides['image']; ?>" alt="Slider-Image">
			</a>
		</div>

		<?php
			}
		?>

	</div>
</div>