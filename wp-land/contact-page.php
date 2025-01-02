<?php
/**
 Template Name: Contact Page
 *
 * @package wpland
 */

get_header();
?>

	
		
<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'contact' );



		endwhile; // End of the loop.
		?>

	
	
</div>
<?php

get_footer();