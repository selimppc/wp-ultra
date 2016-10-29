<?php
/**
 * Template Name: Blog Template
 */
get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
 ?>
	
	<div class="s_wrapper">

		<div class="page_slide_wrapper">
			<div class="page_slide_img"><img src="<?php echo $feat_image; ?>" alt=""></div>
		</div>

	</div>

	<div class="breadcrumbs1_wrapper">
		<div class="container">
			<div class="breadcrumbs1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span></span><?php the_title(); ?></div>
		</div>
	</div>
<?php 
		endwhile;
	endif;
?>
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="span9">
					<h1><?php the_title(); ?></h1>
					
					<?php
			            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			            $args = array( 'post_type' => 'post', 'posts_per_page' => 15, 'paged' => $paged );
			            $wp_query = new WP_Query($args);
			            while ( have_posts() ) : the_post(); 
			        ?>

							<div class="thumb1">
								<div class="thumbnail clearfix">
									
									<div class="caption">
										<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
										<div class="post-admin">
											<div class="avatar_icon_box">
												
												<?php //the_author_posts_link(); ?>
												<?php
												  $user_id = $post->post_author;						
												  $key_first = 'first_name';
												  $single = true;
												  $user_first = get_user_meta( $user_id, $key_first, $single ); 

												  $key_second = 'last_name';
												  $single = true;
												  $user_second = get_user_meta( $user_id, $key_second, $single ); 

												  echo $user_first . ' ' . $user_second;
												  
												?> 
												<span class="border_seperator">|</span>
											</div>
											<div class="date_icon_box">
												<i class="date-icon">&nbsp;</i>
												<?php //echo date("F j Y"); ?>
												<?php echo get_the_date(); ?>
											</div>
										</div>
										<div class="post_short_description">
											<div class="description">
												<?php						
													$excerpt = get_the_excerpt();
							  						echo string_limit_words($excerpt,50);
												 ?>
											</div>

											<a href="<?php the_permalink(); ?>" class="button1">read more</a>
										</div>
									</div>
								</div>
							</div>

					<?php endwhile; ?>
				</div>

				<div class="span3">
					<div class="hl2">
						<h2>Our Services</h2>

						<ul class="ul1">
							<?php
								$query = new WP_Query();
							    $query->query('post_type=Services&orderby=menu_order&order=ASC&posts_per_page=8');
						   		while ($query->have_posts()) : $query->the_post();
							?>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php
		                		endwhile;
							?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>

	
<?php get_footer(); ?>
