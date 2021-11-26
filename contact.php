
<?php global $Me; ?>

<?php get_header(); 
     // Template Name: Contact
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
          <?php get_template_part('other_slider')?>

          <!-- Category page menu  -->

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

     <!-- Our office map -->

     <section class="me-contact-infos">
     	<div class="container">
               <div class="me-con-header">
                   <h2><?php echo $Me['headline']; ?></h2>
               </div>
     		<div class="row">
     			<div class="col-lg-6">
     				<div class="me-con-map">
     					<?php echo $Me['map']; ?>
     				</div>
     			</div>
     			<div class="col-lg-6">
     				<div class="me-con-form">
			     		<div class="me-con-frm-field">
			     			<?php the_content(); ?>
			     		</div>
     	               </div>
     			</div>
     		</div>
     	</div> 	
     </section>

     


	<!-- Widgets -->

     <?php get_template_part('other_widgets'); ?> 

   <!-- Footer -->

   <?php get_footer(); ?>