<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-lumina
 */

get_header();
?>
<div class="container">
	<div class="single-post__wrapper" id="primary">
         <div class="single-content">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			

			

		endwhile; // End of the loop.
		?> 
        <div class="single-comments">
        <?php 
        // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
            ?>
        </div>
          <div class="single-post-nav">
             <?php
             the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wp-lumina' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wp-lumina' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
            ?>
          </div>
          
        </div>
	
    <div class="sidebar">
    <?php get_sidebar();?>
    </div>

    </div>
</div>
<?php

get_footer();
