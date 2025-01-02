<?php
/**
 Template Name: Pricing Page
 *
 * @package finsweetwp
 */

get_header();
?>

	
		

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'pricing' );



		endwhile; // End of the loop.
		?>

	
	

<?php

get_footer();