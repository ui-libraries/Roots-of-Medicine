<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Longform
 * @since Longform 1.0
 */

get_header();

global $longform_site_width;
?>

<div id="main-content" class="main-content row">
	<div id="primary" class="content-area <?php echo $longform_site_width; ?>">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>

		</div><!-- #content test-->
	</div><!-- #primary -->
</div><!-- #main-content -->

<div class="scrolltop-wrap">
	<a href="#page-top" role="button" aria-label="Scroll to top">
		<svg height="48" viewBox="0 0 48 48" width="48" height="48px" xmlns="http://www.w3.org/2000/svg">
			<path id="scrolltop-bg" d="M0 0h48v48h-48z"></path>
			<path id="scrolltop-arrow" d="M14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"></path>
		</svg>
	</a>
</div>

<script>
jQuery(document).ready(function($){

	function togglePrimaryNav($clickTarget) {
		if ($("button.nav-toggle").parent("#primary-navigation").hasClass("COLLAPSED")) {
			$("button.nav-toggle").attr("aria-expanded","true");
			console.log("Menu EXPANDED!");
		} else {
			$("button.nav-toggle").attr("aria-expanded","false");
			console.log("Menu COLLAPSED!");
		}
		$("#primary-navigation").toggleClass("COLLAPSED");
	}

	$("button.nav-toggle").click(function() {
		togglePrimaryNav();
	});

});
</script>

<?php
get_footer();