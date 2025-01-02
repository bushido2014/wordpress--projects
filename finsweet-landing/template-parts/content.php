<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package finsweetwp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-list'); ?>>
	<?php finsweetwp_post_thumbnail(); ?>
	<header class="entry-header">
		<div class="entry-meta">
				<?php
				finsweetwp_posted_on();
				//finsweetwp_posted_by();
				?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
