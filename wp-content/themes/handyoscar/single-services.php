<?php


get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

			
			$gallery_data_r = get_post_meta($post->ID, 'services', true);
		
			
 ?>
	
	<div class="s_wrapper">

		<div class="page_slide_wrapper">
			<div class="page_slide_img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_slide1.jpg" alt=""></div>
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
				<div class="span8">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
				<div class="span4">
					<div class="hl2">
						<?php get_sidebar('general'); ?>
					</div>
				</div>
					<div class="span12">
					<ul class="thumbnails" id="isotope-items">

						<?php
							if(!empty($gallery_data_r)):
							foreach($gallery_data_r as $gallery_data){
			
								$big_images = wp_get_attachment_url( $gallery_data['gallery'] );

								$small_images = wp_get_attachment_thumb_url( $gallery_data['gallery'] );
						
						?>
						 <!--<li class="span3 isotope-element isotope-filter1">-->
						 <li class="" style="width:30%">
							<div class="thumb-isotope">
								<div class="thumbnail clearfix">
									<a href="<?php echo $big_images; ?>">
										<figure>
											<img src="<?php echo $small_images; ?>" alt="" style="width:100%; height: 250px;"><em></em>
										</figure>
										
									</a>
								</div>
							</div>
					    </li>

					    <?php } 
					    endif;
					    ?>
					</ul>
				</div>


				


				

			</div>
		</div>
	</div>

	<?php 
			endwhile;
		endif;
	?>
<?php get_footer(); ?>
