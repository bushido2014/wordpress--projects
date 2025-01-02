<?php 
get_header();
?>

<section class="categories">
<div class="container">
	<?php 
// Get the current term object
        $term = get_queried_object();

        // Display the category title and description
        echo '<h2>' . $term->name . '</h2>';
        echo '<p>' . $term->description . '</p>';
?>
	<div class="taxonomy-wrapper grid">
		<?php
        

        // Query posts in the current category
        $args = array(
	'post_type' => 'product',
	'tax_query' => array(
		array(
			'taxonomy' => 'product-categories',
			'field' => 'slug',
			'terms' => $term->slug
		)
	)
);
        $products = new WP_Query( $args );

        // Display the posts in the category
        if ( $products->have_posts() ) :
            while ( $products->have_posts() ) :
                $products->the_post();
        ?>
        <article class="taxonomy">
            <?php the_post_thumbnail(); ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
           <p><?php echo wp_trim_words(get_the_excerpt(), 22); ?></p>
            <a href="<?php the_permalink(); ?>" class="taxonomy__link button">Read More</a>
        </article>
        <?php
            endwhile;
        endif;

        // Reset post data
        wp_reset_postdata();
        ?>
	</div>	
</div>
</section>

<?php
get_footer();
?>
