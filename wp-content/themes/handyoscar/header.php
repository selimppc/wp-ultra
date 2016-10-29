<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/touchTouch.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/isotope.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/camera.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.0.0.min.js"></script>
	<![endif]-->



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="main">
	<div class="top">
		<div class="top1_wrapper">
			<div class="container">
				<div class="top1 clearfix">
					<div class="row">
						<div class="span2">

							<header><div class="logo_wrapper"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt=""></a></div></header>

						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="top2_wrapper">
			<div class="container">
				<div class="top2 clearfix">
					<div class="row">
						<div class="span10 offset2">

							<div class="phone1_wrapper"><div class="phone1">1 800 123 4567</div></div>

							<div class="social_wrapper">
								<ul class="social clearfix">
								    <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/social_ic1.png"></a></li>
								    <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/social_ic2.png"></a></li>
								    <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/social_ic3.png"></a></li>
								    <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/social_ic4.png"></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="top3_wrapper">
			<div class="container">
				<div class="top3 clearfix">
					<div class="row">
						<div class="span10 offset2">

							<div class="navbar navbar_">
								<div class="navbar-inner navbar-inner_">
									<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<div class="nav-collapse nav-collapse_ collapse">
										<?php
							                $menu_args = array(
							                    'theme_location'  => 'primary',
							                    'menu'            => '',
							                    'container'       => 'div',
							                    'container_class' => '',
							                    'container_id'    => '',
							                    'menu_class'      => 'nav sf-menu clearfix',
							                    'menu_id'         => '',
							                    'echo'            => true,
							                    'fallback_cb'     => 'wp_page_menu',
							                    'before'          => '',
							                    'after'           => '',
							                    'link_before'     => '',
							                    'link_after'      => '',
							                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							                    'depth'           => 0,
							                    'walker'          => ''
							                );	
							                wp_nav_menu( $menu_args );
							                
							            ?>
										
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


	</div>