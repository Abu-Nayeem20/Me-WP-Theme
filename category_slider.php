
<?php global $Me; ?>

<div class="me-top-slider">
	<div class="me-category-slider owl-carousel owl-theme">
		
		<?php
				$me_category_slider = $Me['category-slides'];
				foreach($me_category_slider as $me_category_slides) {
			?>

		<div class="item">
			<a href="<?php echo $me_category_slides['url']; ?>">
				<img src="<?php echo $me_category_slides['image']; ?>" alt="Slider-Image">
			</a>
		</div>

		<?php
			}
		?>

	</div>
</div>
