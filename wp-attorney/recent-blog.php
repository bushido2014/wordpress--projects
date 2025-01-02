<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_attorney
 * Template Name: Recent Blog
 */

get_header();
?>
<div class="container">
	<section class="recent-blog grid">

   <?php
	while ( have_posts() ) :
		the_post();
			get_template_part( 'template-parts/content', 'posts' );
		endwhile; 
	?>
</section>
</div>
<?php
get_footer();
