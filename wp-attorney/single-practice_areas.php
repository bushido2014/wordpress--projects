<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_attorney
 */
get_header();
?>


<section class="single-practice">
		<div class="container">
		<?php wp_attorney_post_thumbnail(); ?>
		<div class="single-practice__content">
		<?php the_content();?>
		</div>
	</div>
</section>


<?php
get_footer();
