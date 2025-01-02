<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp_attorney
 */

get_header();
?>

<style>
	.error-404 {
		text-align:center;
	}
</style>
		<section class="error-404 not-found">
			<div class="container">
				
			
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp_attorney' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp_attorney' ); ?></p>

					<?php
					//the_widget( 'WP_Widget_Recent_Posts' );
					?>


			</div><!-- .page-content -->
				</div>
		</section><!-- .error-404 -->

	

<?php
get_footer();
