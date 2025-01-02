<?php get_header(); ?>

<div class="category-wrapper">
    <h1>Categories: <?php single_cat_title(); ?></h1>
    <p><?php echo category_description();?></p>

    <?php if (have_posts()): ?>
        <div class="category-posts">
            <?php while (have_posts()): the_post(); ?>
                <article class="category-post post-article">
                     <div class="post-header">
                    <?php wp_lumina_post_thumbnail(); ?>
                    </div>
                    <div class="post-body">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                    <div class="post-footer flex">
                      <span class="post-date"><?php echo get_the_date(); ?></span>
                       <a href="<?php the_permalink(); ?>" class="post-link">Read More</a>
                    </div>
                 </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else: 
       get_template_part( 'template-parts/content', 'none' );
    ?>   
    <?php endif; ?>


    <?php the_posts_pagination(); ?>
</div>


<?php get_footer(); ?>
