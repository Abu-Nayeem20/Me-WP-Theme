
<?php global $Me; ?>

<?php get_header(); 
     // Template Name: Payment FAQ 
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
 
     <!-- FAQ and payment system -->
     <section class="me-faqandpayment">
     	<div class="container">
     		<div class="row header-wrapper">
     			<div class="col-6">
     				<div class="me-faqandpayment-payment-header">
     					<h2 class="active">payment</h2>
     				</div>
     			</div>
     			<div class="col-6">
     				<div class="me-faqandpayment-faq-header">
     					<h2>faq</h2>
     				</div>
     			</div>
     		</div>
     		<div class="me-payment">
     			<div class="me-payment-header">
     				<h2><?php echo $Me['payment-heading']; ?></h2>
     			</div>
     			<div class="me-payment-details">
     				<p><?php echo $Me['payment-text']; ?></p>
     				
     			</div>
     		</div>
     		<div class="me-faq">
     			<div class="me-faq-queans">
     			   <div class="me-faq-que">
     			   	<h3>question :</h3>
     			   <h6><?php echo $Me['question1']; ?></h6>
     			   <div class="me-faq-open" id="open1">
     			   	<i class="fas fa-angle-down"></i>
     			   </div>
     			   <div class="me-faq-close" id="close1">
     			   	<i class="fas fa-angle-up"></i>
     			   </div>
     			   </div>
     			   <div class="me-faq-ans" id="ans1">
     			   	<h3>answer :</h3>
     			   	<h6><?php echo $Me['answer1']; ?></h6>
     			   </div>
     			</div>
     			<div class="me-faq-queans">
     			   <div class="me-faq-que">
     			   	<h3>question :</h3>
     			   <h6><?php echo $Me['question2']; ?></h6>
     			   <div class="me-faq-open" id="open2">
     			   	<i class="fas fa-angle-down"></i>
     			   </div>
     			   <div class="me-faq-close" id="close2">
     			   	<i class="fas fa-angle-up"></i>
     			   </div>
     			   </div>
     			   <div class="me-faq-ans" id="ans2">
     			   	<h3>answer :</h3>
     			   	<h6><?php echo $Me['answer2']; ?></h6>
     			   </div>
     			</div>
     			<div class="me-faq-queans">
     			   <div class="me-faq-que">
     			   	<h3>question :</h3>
     			   <h6><?php echo $Me['question3']; ?></h6>
     			   <div class="me-faq-open" id="open3">
     			   	<i class="fas fa-angle-down"></i>
     			   </div>
     			   <div class="me-faq-close" id="close3">
     			   	<i class="fas fa-angle-up"></i>
     			   </div>
     			   </div>
     			   <div class="me-faq-ans" id="ans3">
     			   	<h3>answer :</h3>
     			   	<h6><?php echo $Me['answer3']; ?></h6>
     			   </div>
     			</div>
     			<div class="me-faq-queans">
     			   <div class="me-faq-que">
     			   	<h3>question :</h3>
     			   <h6><?php echo $Me['question4']; ?></h6>
     			   <div class="me-faq-open" id="open4">
     			   	<i class="fas fa-angle-down"></i>
     			   </div>
     			   <div class="me-faq-close" id="close4">
     			   	<i class="fas fa-angle-up"></i>
     			   </div>
     			   </div>
     			   <div class="me-faq-ans" id="ans4">
     			   	<h3>answer :</h3>
     			   	<h6><?php echo $Me['answer4']; ?></h6>
     			   </div>
     			</div>
     			<div class="me-faq-queans">
     			   <div class="me-faq-que">
     			   	<h3>question :</h3>
     			   <h6><?php echo $Me['question5']; ?></h6>
     			   <div class="me-faq-open" id="open5">
     			   	<i class="fas fa-angle-down"></i>
     			   </div>
     			   <div class="me-faq-close" id="close5">
     			   	<i class="fas fa-angle-up"></i>
     			   </div>
     			   </div>
     			   <div class="me-faq-ans" id="ans5">
     			   	<h3>answer :</h3>
     			   	<h6><?php echo $Me['answer5']; ?></h6>
     			   </div>
     			</div>
     			<div class="me-faq-queans">
     			   <div class="me-faq-que">
     			   	<h3>question :</h3>
     			   <h6><?php echo $Me['question6']; ?></h6>
     			   <div class="me-faq-open" id="open6">
     			   	<i class="fas fa-angle-down"></i>
     			   </div>
     			   <div class="me-faq-close" id="close6">
     			   	<i class="fas fa-angle-up"></i>
     			   </div>
     			   </div>
     			   <div class="me-faq-ans" id="ans6">
     			   	<h3>answer :</h3>
     			   	<h6><?php echo $Me['answer6']; ?></h6>
     			   </div>
     			</div>
     		</div>
     	</div>
     </section>

  

	<!-- Widgets -->

     <?php get_template_part('other_widgets'); ?> 

   <!-- Footer -->

   <?php get_footer(); ?>