<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-lumina
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
  
   <?php wp_lumina_post_thumbnail(); ?>
 
  <h2><?php the_title( ); ?></h2>
  <div class="single-post__content">
    <?php the_content(); ?>
    </div>
</article>