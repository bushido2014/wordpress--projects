  <section class="home-blog">
      <div class="container">
		   <div class="section-title margin-bottom">
          <h2>Our blog</h2>
        </div>
		  <div class="blog-wrapper grid">
<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array( 
'post_type' => 'post', 
'posts_per_page' => 3, 
'paged' => $paged);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
    
   
        <div class="blog-list">
            <a href="<?php the_permalink(); ?>">
				<div class="blog-list__img">
               
				<?php   finsweetwp_post_thumbnail('medium'); ?>
              </div>
				<div class="blog-list__date">
					<?php
				finsweetwp_posted_on();
				?>
				</div>
				<div class="blog-list__content">
					<h2>
						<?php the_title(); ?>
					</h2>
					 <?php the_excerpt(); ?>
				</div>
			</a>
		</div>
    <?php  endwhile; ?>
	<?php wp_reset_postdata(); ?>		  
    </div>
 </div>
 </section>