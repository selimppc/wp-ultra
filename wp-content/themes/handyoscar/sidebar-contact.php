<?php
/**
 * The sidebar for contact us page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( is_active_sidebar( 'contact-page-sidebar' )  ) : ?>

		<?php if ( is_active_sidebar( 'contact-page-sidebar' ) ) : ?>
			<div id="widget-area" class="widget-area general-sidebar">
				<?php dynamic_sidebar( 'contact-page-sidebar' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

<?php endif; ?>
