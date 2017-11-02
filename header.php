<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		<!--typekit -->
		<script src="https://use.typekit.net/qyp7eqp.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>
		<div class="row align-right social">
			<div class="column small-12 ">
				<?php wp_nav_menu( array( 'theme_location' => 'social-links' ) ); ?>
			</div>
		</div>
		<div class="header-slider logo-header row align-spaced align-middle" >
			<div class="column small-2"><p>A Festival of Underground, Experimental and International Music</p></div>
			<div class="column small-4">
			<a href="<?php echo home_url(); ?>">
			<img src="<?php the_field('counterflows_logo', 'option'); ?>" />
		</a>
	</div>
	<div class="column small-2"><p>5th - 8th April 2018, Glasgow</p></div>
		
		
		</div>

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. 			
			 <?php get_template_part( 'parts/content', 'offcanvas' ); ?> 
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">
							
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
	 	
				</header> <!-- end .header -->