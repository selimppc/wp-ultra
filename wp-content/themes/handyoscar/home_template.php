<?php
/**
 * Template Name: Home Template
 */
 get_header();
 ?>

 	<div class="s_wrapper">

		<div id="slider_wrapper">
			<div class="">
				<div id="slider_inner" class="clearfix">
					<div id="slider" class="clearfix">
						<div id="camera_wrap">

							<?php
								$query = new WP_Query();
		                		$query->query('post_type=home-slider&orderby=menu_order&order=ASC&posts_per_page=6');
		                		while ($query->have_posts()) : $query->the_post();
		                			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		                	?>
		                				<div data-src="<?php echo $feat_image; ?>">
											<div class="camera_caption nav1 fadeIn">
												<div class="txt">
													<div class="txt1"><?php the_title(); ?></div>
													<div class="txt2"><?php the_excerpt(); ?></div>
												</div>
												
											</div>
										</div>
		                	<?php
		                		endwhile;
							?>
							
							


						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<div class="splash_wrapper">
		<div class="container">
			<div class="splash clearfix">
				<div class="row">
					<div class="span4 pull-right">
						<div class="block2">
							<!--<div class="txt1">CONTACT WITH US</div>-->
							<div class="txt1">Get a Query</div>
							<div class="common_form_container" style="height:auto !important;">
								<?php if ( is_active_sidebar( 'contact-form' ) ) : ?>
									<?php dynamic_sidebar( 'contact-form' ); ?>
								<?php endif; ?>
								
							</div>
						</div>
						</div>
						<div class="span8 pull-right">
						<div class="block2">

							<?php
								if ( have_posts() ) :
									while ( have_posts() ) : the_post();
										$custom_fields = get_post_custom(get_the_Id());
							?>
										<div class="txt1"><?php the_title(); ?></div>
										<div class="txt2"><?php echo $custom_fields['short_title'][0]; ?></div>
										<div class="txt3"><?php echo $custom_fields['short_description'][0]; ?> </div>

							<?php 
									endwhile;
								endif;
							?>

						

						

						



						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="slogan1">
						<div class="txt1">we can solve all your <span>house problems</span></div>
						<div class="txt2">Most of our customers satisfied with our service</div>
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

 <?php
 	get_footer();
 ?>