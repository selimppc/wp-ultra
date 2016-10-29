<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
 ?>
	
	<div class="s_wrapper">
		<?php if($feat_image): ?>
		<div class="page_slide_wrapper">
			<div class="page_slide_img"><img src="<?php echo $feat_image; ?>" alt=""></div>
		</div>
		<?php endif; ?>
	</div>
	
	<div class="breadcrumbs1_wrapper">
		<div class="container">
			<div class="breadcrumbs1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span></span><?php the_title(); ?></div>
		</div>
	</div>

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="span8">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>

				<div class="span4">
					<div class="hl2">
						<h2>Our Services</h2> 

						<ul class="ul1">
							<?php
								$query = new WP_Query();
							    $query->query('post_type=Services&orderby=menu_order&order=ASC&posts_per_page=20');
						   		while ($query->have_posts()) : $query->the_post();
							?>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php
		                		endwhile;
							?>
						</ul>
						<?php get_sidebar('general'); ?>
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
