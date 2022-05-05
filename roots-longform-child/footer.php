<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Longform
 * @since Longform 1.0
 */
?>

		</div><!-- #main -->

		<div class="site-footer-wrapper">
			<div class="site-footer-container container">
				<div class="lockups">
					<a href="https://pharmacy.uiowa.edu/"><img class="lockup lockup-pharmacy" src="https://roots.local/wp-content/uploads/2022/04/pharmacy-lockup.png" alt="University of Iowa College of Pharmacy"></a>
					<a href="https://www.lib.uiowa.edu/hardin/"><img class="lockup lockup-hardin" src="https://roots.local/wp-content/uploads/2022/04/hardin-lockup.png" alt="University of Iowa Hardin Library for the Health Sciences"></a></div>
				</div>
				
				<footer id="colophon" class="site-footer row" role="contentinfo">
					<?php get_sidebar( 'footer' ); ?>
				</footer><!-- #colophon -->
			</div>
			<div class="site-info col-sm-12 col-md-12 col-lg-12">
				<div class="site-info-content">
					<div class="copyright">
						<?php echo get_theme_mod('longform_copyright', ''); ?> 
						<?php _e( 'Created by', 'longform' ); ?> <a href="https://cohhe.com/" target="_blank">Cohhe</a>. 
						<?php _e( 'Proudly powered by', 'longform' ); ?> <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'longform' ) ); ?>" target="_blank"><?php _e( 'WordPress', 'longform' ); ?></a>
					</div>
					<div class="footer-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_class'     => 'footer-menu',
									'depth'          => 1
								)
							);
						?>
					</div>
				</div>
				<?php
				$show_scroll_to_top = get_theme_mod('longform_scrolltotop', false);

				if ( $show_scroll_to_top ) {
				?>
					<a class="scroll-to-top" href="#"><?php _e( 'Up', 'longform' ); ?></a>
				<?php
				}
				?>
				<div class="clearfix"></div>
			</div><!-- .site-info -->
			<div class="clearfix"></div>
		</div>
	</div><!-- #page -->

	<div class="scrolltop-wrap">
		<a href="#page-top" role="button" aria-label="Scroll to top">
			<svg height="48" viewBox="0 0 48 48" width="48" height="48px" xmlns="http://www.w3.org/2000/svg">
				<path id="scrolltop-bg" d="M0 0h48v48h-48z"></path>
				<path id="scrolltop-arrow" d="M14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"></path>
			</svg>
		</a>
	</div>

	<?php wp_footer(); ?>

	
</body>
</html>