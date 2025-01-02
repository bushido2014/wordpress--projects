<section class="home-projects">
      <div class="container">
        <div class="section-title">
          <h2>View our projects</h2>
        </div>
				  
        <div class="projects grid">
	<?php
$paged2 = ( get_query_var('paged2') ) ? get_query_var('paged2') : 1;
$args = array( 
'post_type' => 'project', 
'posts_per_page' => 3, 
'order' => 'ASC',		
'paged2' => $paged2);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>			
			
			
          <div class="project-item">
            <a href="<?php the_permalink();?>" class="project-link">
              <?php   finsweetwp_post_thumbnail('full'); ?>
              <div class="overlay">
                <div class="overlay-desc">
                  <h4><?php the_title();?></h4>
                  <div class="margin-top">
                    <div class="arrow-button flex text-yellow">
                      <div>View project</div>
                      <div class="arrow-wrapp">
                        <svg
                          width="100%"
                          viewBox="0 0 25 12"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon arrow-icon"
                        >
                          <path
                            d="M24.5303 6.53033C24.8232 6.23744 24.8232 5.76256 24.5303 5.46967L19.7574 0.696699C19.4645 0.403806 18.9896 0.403806 18.6967 0.696699C18.4038 0.989593 18.4038 1.46447 18.6967 1.75736L22.9393 6L18.6967 10.2426C18.4038 10.5355 18.4038 11.0104 18.6967 11.3033C18.9896 11.5962 19.4645 11.5962 19.7574 11.3033L24.5303 6.53033ZM0 6.75H24V5.25H0V6.75Z"
                            fill="currentcolor"
                          ></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
			
			
<?php  
endwhile; 
wp_reset_postdata();		
?>			
			
         
        </div>
		  <div class="projects-links">
			  <a href="/projects" class="projects-links-view">View all Projects
                </a>
		  </div>
      </div>
    </section>