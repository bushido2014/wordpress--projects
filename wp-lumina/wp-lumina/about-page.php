<?php
/**

 Template Name: About Page
 
 
  * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_lumina
 * 
 * 
 */
 
 
 
get_header();
?>
	
   <?php
	while ( have_posts() ) :
		the_post();
			get_template_part( 'template-parts/content', 'about' );
		endwhile; 
	?>

<?php
get_footer();