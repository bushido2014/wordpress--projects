  <section class="intro">
      <div class="container">
        <div class="intro-wrapper grid">
          <div class="intro-img-wrapp">
             <div class="intro-img-item">
                <?php 
            $intro_image = get_field('intro_image');
           if( !empty($intro_image) ): ?>
	        <img src="<?php echo $intro_image['url']; ?>"  />
          <?php endif; ?>
             </div>
          </div>
          <div class="intro-desc-wrapp">
            <div class="sep"></div>
            <div class="intro-desc-title">
              <h2><?php the_field("intro_title") ?></h2>
            </div>
            <div class="intro-desc-text">
              <?php the_field("intro_text") ?>
            </div>
            <div class="intro-desc-social__links flex">
                
                    	<?php if (have_rows('intro_social_links')) :
                        while (have_rows('intro_social_links')) :
                         the_row(); ?>
                 <a href="<?php the_sub_field('intro_social_link'); ?>" target="_blank">
                  <img src="<?php the_sub_field('intro_social_icon'); ?>">
                </a>
                   <?php endwhile; ?>
                   <?php endif; ?>  
            </div>
            <div class="intro-desc-btn">
              <a href="/contact" class="button button-white"><?php the_field("intro_button_text") ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="story">
      <div class="container">
        <div class="section-title">
          <h2><?php the_field("story_title") ?></h2>
          <div class="sep-center"></div>
        </div>
        <div class="story-text">
          <?php the_field("story_description") ?>
        </div>
        <div class="story-img grid">
                    	<?php if (have_rows('story_images')) :
                        while (have_rows('story_images')) :
                         the_row(); 
				    $story_img = get_sub_field('story_img'); ?> 
			        <?php echo wp_get_attachment_image( $story_img, 'full' ); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>  
        </div>
      </div>
    </section>
    <section class="specialised">
      <div class="container-fluid">
        <div class="specialised-wrapp grid">
          <div class="specialised-image">
<?php  $specialsed_image = get_field('specialsed_image');
           if( !empty($specialsed_image) ): ?>
	        <img src="<?php echo $specialsed_image['url']; ?>"  />
   <?php endif; ?>
          </div>
          <div class="specialised-content">
            <div class="specialized-content-title">
              <h2><?php the_field("specialised_title") ?></h2>
            </div>
            <div class="sep-dark"></div>
            <?php the_field("specialised_text") ?>
          </div>
        </div>
      </div>
    </section>
    <section class="offering">
      <div class="container">
<div class="offering-wrapp grid">
  <div class="offering-value">
   <div class="offering-value__title">
    <h2><?php the_field("offering_title") ?></h2>
      </div>
      <div class="sep"></div>
      <div class="offering-value__text">
         <?php the_field("offering_text") ?>
      </div>
      
  </div>
  <div class="offering-items-wrapp">
	  <?php if (have_rows("direct_offering")) : ?>
      <?php while (have_rows("direct_offering")) : the_row(); 
        $direct_offering_icon = get_sub_field('direct_offering_icon'); ?>
	  
   <div class="offering-item">
     <div class="offering-item__icon-value">
     
		 <?php if (get_sub_field('direct_offering_icon')) : ?>
           <?php echo wp_get_attachment_image( $direct_offering_icon, 'full' ); ?>
          <?php endif; ?>
     </div>
     <div class="offering-item__text">
       <h3 class="offering-item__title"><?php the_sub_field("direct_offering_title") ?></h3>
    
       <p class="offering-item__description"><?php the_sub_field("direct_offering_text") ?></p>
     </div>
   </div>
   <?php endwhile; ?>
    <?php endif; ?>  
   
  
  </div>
</div>
      </div>
    </section>
<section class="team">
        <div class="container">
        <div class="section-title">
          <h2><?php the_field("section_team_title", "option") ?></h2>
              <div class="sep-center"></div>
        </div>
        <div class="team-wrap grid">	
	 <?php if (have_rows("team", "option")) : ?>
      <?php while (have_rows("team", "option")) : the_row(); 
        $team_image = get_sub_field('team_image'); ?>
          <div class="team-item">
              <div class="team-image">
                <?php if (get_sub_field('team_image')) : ?>
                      <?php echo wp_get_attachment_image( $team_image, 'full' ); ?>
                      <?php endif; ?>
                <div class="team-social-wrapp">
                    <div class="team-social-links">
						<?php if (have_rows('team_social_links', 'option')) :
                        while (have_rows('team_social_links', 'option')) :
                         the_row(); ?>
                 <a href="<?php the_sub_field('team_social_link'); ?>" target="_blank" class="team-social-link">
                  <img src="<?php the_sub_field('team_social_icon'); ?>">
                </a>
                  <?php endwhile; ?>
                   <?php endif; ?>  
                    </div>
                    <div class="team-divider"></div>
                </div>
              </div>
              <div class="team-detail">
                <h4 class="team-detail-name"><?php the_sub_field("team_name") ?></h4>
            <p class="team-detail-job"><?php the_sub_field("team_job") ?></p>
              </div>
          </div>
			<?php endwhile; ?>
            <?php endif; ?>  
        </div>
        </div>
      </section>

 <section class="review">
 <div class="container">
  <div class="section-title">
    <h2><?php the_field("reviews_title", "option") ?></h2>
      <div class="sep-center"></div>
  </div>
  <div class="client-review-wrapp grid">
	  <?php if (have_rows("client_reviews", "option")) : ?>
      <?php while (have_rows("client_reviews", "option")) : the_row(); 
        $client_reviews_icon = get_sub_field('client_reviews_icon'); ?>
      <div class="client-review__item">
          <div class="client-review__item__content">
            <img src="/wp-content/uploads/2023/02/quote.svg">
                <?php the_sub_field("client_reviews_description") ?>
          </div>
          <div class="client-review__item__info flex">
              <div class="client-review__item__image">
               
				  <?php if (get_sub_field('client_reviews_icon')) : ?>
                      <?php echo wp_get_attachment_image( $client_reviews_icon, 'full' ); ?>
                      <?php endif; ?>
              </div>
              <div class="client-review__item__text">
                  <div class="client-review__item__info-name"><h4><?php the_sub_field("client_reviews_name") ?></h4></div>
                  <div class="client-review__item__info-job"><?php the_sub_field("client_reviews_job") ?></div>
              </div>
          </div>
      </div>
	  
	<?php endwhile; ?>
    <?php endif; ?>  
  </div>
</div>
</section>
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