<?php
/**
 Template Name: Home Landing Page
 *
 * @package wpland
 */

get_header();
?>

	
		

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home' );



		endwhile; // End of the loop.
		?>

	
	

<?php

get_footer();
