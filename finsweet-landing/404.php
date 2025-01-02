<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package finsweetwp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container">
				
			
			<header class="page-header">
				<h1 class="page-title" style="text-align:center;"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'finsweetwp' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content" style="text-align:center;">
				<p><?php esc_html_e( "The page you are looking for doesn't exist or has been moved.", 'finsweetwp' ); ?></p>

					

					

					

			</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
