<div id="content">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="slogan1">
						<div class="txt1">We Pay Cash for any Cars &  <span>remve your unwanted car for FREE</span></div>
						<div class="txt2">Call Now 123 456 678 & Get Cash for your Junk Car</div>
					</div>

					<div id="banner_wrapper">
						<div class="container">
							<div id="banner">
								<div class="carousel-box">
									<div class="inner">
										<div class="carousel main">
											<ul>
				                				<li>
													<div class="banner nav1">
														<div class="banner_inner">
															<a href="<?php echo site_url('/junk-car-removal-sydney');?>">
																<figure><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-banner-thumb-1.jpg" alt="" class="img" style="height:200px;"><em></em></figure>
																<div class="caption">
																	<div class="txt1">Car removal</div>
																	<div class="txt2"></div>
																	<div class="txt3"></div>
																</div>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="banner nav1">
														<div class="banner_inner">
															<a href="<?php echo site_url('/how-does-it-work');?>">
																<figure><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-banner-thumb-2.jpg" alt="" class="img" style="height:200px;"><em></em></figure>
																<div class="caption">
																	<div class="txt1">How does it work</div>
																	<div class="txt2"></div>
																	<div class="txt3"></div>
																</div>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="banner nav1">
														<div class="banner_inner">
															<a href="<?php echo site_url('/sell-unwanted-car');?>">
																<figure><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-banner-thumb-3.jpg" alt="" class="img" style="height:200px;"><em></em></figure>
																<div class="caption">
																	<div class="txt1">FAQ – Unwanted vehicles</div>
																	<div class="txt2"></div>
																	<div class="txt3"></div>
																</div>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="banner nav1">
														<div class="banner_inner">
															<a href="<?php echo site_url('/quick-cash-for-car-sydney');?>">
																<figure><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-banner-thumb-4.jpg" alt="" class="img" style="height:200px;"><em></em></figure>
																<div class="caption">
																	<div class="txt1">Contact us</div>
																	<div class="txt2"></div>
																	<div class="txt3"></div>
																</div>
															</a>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="bot1_wrapper">
	<div class="container">
		<div class="bot1 clearfix">

			<div class="menu_bot">
				<?php
	                $menu_args = array(
	                    'theme_location'  => 'footer',
	                    'menu'            => '',
	                    'container'       => 'div',
	                    'container_class' => '',
	                    'container_id'    => '',
	                    'menu_class'      => 'clearfix',
	                    'menu_id'         => 'menu_bot',
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

<div class="bot2_wrapper">
	<div class="container">
		<div class="bot2 clearfix">

			<footer style="float:left;">Copyright &copy;  2016. All rights reserved.</footer>
			<footer style="float:right;"><a style="    color: #fff;
    text-decoration: none;" href="http://www.visionads.com.au/" target="_blank">Seo &amp; Website by VisionsAds</a></footer>

		</div>
	</div>
</div>

</div>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/camera.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mobile.customized.min.js"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/touchTouch.jquery.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.isotope.min.js"></script>

<?php wp_footer(); ?>

<script>
	jQuery(document).ready(function() {

		jQuery('#camera_wrap').camera({
			//thumbnails: true
			//alignment			: 'centerRight',
			autoAdvance			: true,
			mobileAutoAdvance	: true,
			fx					: 'scrollBottom',
			height: '32%',
			hover: false,
			loader: 'none',
			navigation: false,
			navigationHover: false,
			mobileNavHover: true,
			playPause: false,
			pauseOnClick: false,
			pagination			: true,
			time: 5000,
			transPeriod: 1000,
			minHeight: '200px'
		});

	});

	jQuery(window).load(function() {
	

		// touchTouch
		jQuery('.thumb-isotope .thumbnail a').touchTouch();

	});
</script>

</body>
</html>
