<?php
/**
 * Template Name: Services Template
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

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="span9">
					<h1><?php the_title(); ?></h1>
					
					<?php
						$query = new WP_Query();
					    $query->query('post_type=Services&orderby=menu_order&order=ASC&posts_per_page=20');
				   		while ($query->have_posts()) : $query->the_post();
				   			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>
							<div class="thumb1">
								<div class="thumbnail clearfix">
									<a href="<?php the_permalink(); ?>">
										<figure class="img-polaroid">
											<img src="<?php echo $feat_image; ?>" alt="" style="width: 150px !important; height: 120px !important;">
											<em></em>
										</figure>
									</a>
									<div class="caption">
										<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
										<p><?php the_excerpt(); ?></p>
										<!--<a href="<?php /*the_permalink(); */?>" class="button1">read more</a>-->
									</div>
								</div>
							</div>

					<?php endwhile;?>
				</div>

				<div class="span3">
					<div class="hl2">
						<?php get_sidebar('general'); ?>
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

	<?php 
			endwhile;
		endif;
	?>
<?php get_footer(); ?>
