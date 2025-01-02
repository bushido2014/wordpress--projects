<?php 
get_header();
?>

<section class="categories">
<div class="container">
	<div class="categories-wrapper grid">
		<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	 <article class="category">
	   <?php the_post_thumbnail('image-category'); ?>
		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
		 <a href="<?php the_permalink(); ?>" class="category__link">Read More</a>
		 </article>
	<?php endwhile; ?>
<?php endif; ?>
	</div>
   
	
</div>
</section>	
<?php
get_footer();