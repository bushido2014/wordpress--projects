<?php get_header(); ?>


  <div class="container">
    <?php if (have_posts()): ?>
     

     <div class="practis-wrapper grid">
        <?php while (have_posts()): the_post(); ?>
		 <div class="practis-card">
            <div class="practic-card__body">	
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p>
                <?php the_field('practice_text'); ?>
              </p>
				   
				
			 </div>
			 <div class="practic-card__footer flex">
				      <?php 
$practice_icon = get_field('practice_icon');
if( !empty($practice_icon) ): ?>
	<img src="<?php echo $practice_icon['url']; ?>"  />
<?php endif; ?>
				 <a href="<?php the_permalink(); ?>" class="button">Learn More</a>
			 </div>
		 </div>
        <?php endwhile; ?>
      </div>

      <?php the_posts_pagination(); ?>
    <?php else: ?>
      <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
  </div>
 <section class="partners">
              <div class="section-title flex">
                    <div class="sep-center"></div>
                     <h2><?php the_field("partners_title", "option") ?></h2>
                    <div class="sep-center"></div>
                </div>
                <div class="partners-wrapper grid">
						<?php if (have_rows("partners_logos", "option")) : ?>
                         <?php while (have_rows("partners_logos", "option")) : the_row(); 
                        $parnters_image = get_sub_field('parnters_image'); ?>
                  <div class="partners-item">
					  <?php if (get_sub_field('parnters_image')) : ?>
                      <?php echo wp_get_attachment_image( $parnters_image, 'full' ); ?>
                      <?php endif; ?>
                  </div>    
			     <?php endwhile; ?>
                 <?php endif; ?>
					
                </div>
          </section>	


<?php get_footer(); ?>
