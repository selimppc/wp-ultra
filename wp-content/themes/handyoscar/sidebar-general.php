<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( is_active_sidebar( 'general-sidebar' )  ) : ?>

		<?php if ( is_active_sidebar( 'general-sidebar' ) ) : ?>
			<div id="widget-area" class="widget-area general-sidebar">
				<?php dynamic_sidebar( 'general-sidebar' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

<?php endif; ?>
