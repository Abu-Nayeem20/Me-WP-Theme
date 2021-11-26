

<?php get_header(); 
     // Template Name: Category 
?>

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
		
		<?php get_template_part('category_slider'); ?>

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

		<!-- Newly coming product 

	<section class="me-new-product-sec">
		<div class="container">
			<div class="me-new-products">
				<div class="row">
					<div class="col-md-2 col-sm-3 col-4">
						<div class="me-new-sin-pro wow slideInUp">
							<img src="img/st8.jpg" alt="Shirt">
				    		<div class="item-price">
				    			<h4>$8</h4>
				    		</div>
				    		<div class="item-buy-method">
				    			<a href="#"><h4>shop</h4></a>
				    		</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	-->
  

	<!-- Widgets -->

 	<?php get_template_part('me_widgets'); ?>	

   <!-- Footer -->

   <?php get_footer(); ?>