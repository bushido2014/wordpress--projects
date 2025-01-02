<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-lumina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>
      <div class="post-header">
                   <?php wp_lumina_post_thumbnail(); ?>
                    <!-- Afișarea categoriei -->
       <div class="post-meta">
    <?php
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        foreach ( $categories as $category ) {
            echo '<span class="post-category">';
            echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="category-link">' . esc_html( $category->name ) . '</a>';
            echo '</span>';
        }
    }
    ?>
</div>

                   </div>
	   <div class="post-body">
                    <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
                   <?php the_excerpt(); ?>
                   <div class="post-footer flex">
                      <span class="post-date"><?php echo get_the_date(); ?></span>
                       <a href="<?php the_permalink(); ?>" class="post-link">Read More</a>
                    </div>
         </div>
	
</article><!-- #post-<?php the_ID(); ?> -->
