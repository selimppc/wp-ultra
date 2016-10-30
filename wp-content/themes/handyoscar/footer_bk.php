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
												<?php
													$query = new WP_Query();
							                		$query->query('post_type=Services&orderby=menu_order&order=ASC&posts_per_page=4'); //== For last 4 services
							                		//$query->query('post_type=Services&orderby=menu_order&order=ASC'); //== For All Services
							                		while ($query->have_posts()) : $query->the_post();
							                			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							                			$custom_fields = get_post_custom(get_the_Id());

							                	?>
							                				<li>
																<div class="banner nav1">
																	<div class="banner_inner">
																		<a href="<?php the_permalink(); ?>">

																			<figure><img src="<?php echo $feat_image; ?>" alt="" class="img" style="height:200px;"><em></em></figure>
																			<div class="caption">
																				<div class="txt1"><?php the_title(); ?></div>
																				<div class="txt2"><?php echo $custom_fields['Slogan'][0]; ?></div>
																				<div class="txt3"><?php echo $custom_fields['short_description'][0]; ?></div>
																			</div>
																		</a>
																	</div>
																</div>
															</li>
							                	<?php
							                		endwhile;
												?>
												

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

			<footer style="float:left;">Copyright &copy;  2015. All rights reserved.</footer>
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
