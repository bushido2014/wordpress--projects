<?php			  $all_posts = get_field('all_posts'); 
                 if ($all_posts): ?>
			   <?php foreach ($all_posts as $post): // start the loop to display the posts ?>
        <?php setup_postdata($post); ?>
            <article>
              <figure class="featured-image">
               <?php wp_attorney_post_thumbnail(); ?>
              </figure>
              <div class="featured-body">
                <div class="featured-details flex">
                  <a href="<?php the_permalink(); ?>"><?php echo get_the_category_list(', '); ?></a><span class="separator">|</span>
                  <div class="time"> <?php echo get_the_date(); ?></div>
                </div>
                <h3> <?php the_title(); ?></h3>
              </div>
              <?php the_excerpt(); ?>
              <div class="fetaured-footer">
                  <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
              </div>
            </article>
			  <?php endforeach; ?>
			  <?php wp_reset_postdata(); // reset the global $post variable ?>
            <?php endif; ?>	