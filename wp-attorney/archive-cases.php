<?php get_header(); ?>

 <section class="cases">
  <div class="container">
    <div class="cases-wrapp grid">
    <?php if (have_posts()): ?>
     

       
        <?php while (have_posts()): the_post(); ?>
		   <article class="cases__article">
			   <div class="cases__image">
			
    <?php the_post_thumbnail('case-image'); ?>

          <div class="cases__amount">$<?php the_field('case_amout'); ?></div>
        </div>
		<div class="cases__info">
          <div class="cases__date"><?php echo get_the_date(); ?></div>
          <h3 class="cases__title"><?php the_title(); ?></h3>
          <div class="cases__description"> <?php the_excerpt(); ?></div>
             <div class="cases__button">
              <a href="<?php the_permalink(); ?>" class="cases__link">Read More</a>
            </div>
        </div>	   
		   </article>
        <?php endwhile; ?>
      

      <?php the_posts_pagination(); ?>
    <?php else: ?>
      <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
  </div>
</div>

</section>

<?php get_footer(); ?>
