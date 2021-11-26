<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale= 1">
	<meta http-equiv="X-UA-compitable" content="IE-edge">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Header -->
	
<header class="me-header">
	<div class="container">
	    <nav class="me-top-menu">
	    	<ul>
	    		<li><a href="<?php echo get_home_url(); ?>/my-account/"><i class="fas fa-user-circle"></i></a></li>
	    		<li><a href="<?php echo get_home_url(); ?>/wishlist/"><i class="fas fa-heart"></i></a></li>
	    		<li><a href="<?php echo get_home_url(); ?>/checkout/"><i class="fas fa-shopping-bag"></i></a></li>
	    		<li><a href="<?php echo get_home_url(); ?>/cart/"><i class="fas fa-shopping-cart"></i> <span class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
	    	</ul>
		</nav>
	</div>
</header>


