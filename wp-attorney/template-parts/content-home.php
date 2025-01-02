 <section class="choise">
      <div class="container">
        <div class="choise-wrapp flex">

<div class="choise-item">
<?php 
$choise_img_top_id = get_field('choise_img_top');
$size_full = 'full';
if( $choise_img_top_id ) {
    echo wp_get_attachment_image( $choise_img_top_id, $size_full);
};?>	

<?php 
$choise_img_bottom_id = get_field('choise_img_bottom');
$size_full = 'full';
if( $choise_img_bottom_id ) {
    echo wp_get_attachment_image( $choise_img_bottom_id, $size_full);
};?>	

</div>
          <div class="choise-item">
            <div class="heading">
              <h2><?php the_field('choise_title'); ?></h2>
              <div class="sep"></div>
            </div>
            <div>
               <?php           
$choise_image_law = get_field('choise_image_law');
if( !empty($choise_image_law) ): ?>
	<img src="<?php echo $choise_image_law['url']; ?>"  />
<?php endif; ?>
            </div>
            <?php the_field('choise_text'); ?>
            <div class="cases flex">
              <div class="succes flex">
                <div class="succes-img">
		 <?php           
            $image_button = get_field('image_button');
            if( !empty($image_button) ): ?>
                <img src="<?php echo $image_button['url']; ?>"  />
            <?php endif; ?>
				  </div>
                <div class="succes-percent">
                  <span><?php the_field('percent'); ?></span>
                  <span>
                    <?php the_field('button_text_percent'); ?>
                  </span>
                </div>
              </div>
              <div class="experience flex">
                <div><?php the_field('button_years'); ?></div>
                <p><?php the_field('button_years_text'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="practis">
      <div class="container">
        <div class="practis-heading flex">
          <div class="practis-heading__item">
            <h2><?php the_field('practice_title'); ?></h2>
            <div class="sep"></div>
          </div>
          <div class="practis-heading__item">
            <p>
              <?php the_field('practice_description'); ?>
            </p>
          </div>
        </div>	  
        <div class="practis-wrapper grid">
				<?php
               $practice_areas = get_field('practice_areas_posts');
             if ($practice_areas) :
           ?>
         <?php foreach ($practice_areas as $post) : setup_postdata($post); ?>
          <div class="practis-card">
            <div class="practic-card__body">
              <h3><?php the_title(); ?></h3>
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
     <?php endforeach; wp_reset_postdata(); ?>    
			<?php endif; ?>
        </div>
      </div>
    </section>
  <section class="help">
      <div class="container">
        <div class="section-title">
          <h2><?php the_field('section_title'); ?></h2>
          <div class="sep-center"></div>
        </div>
        <div class="help-desc">
          <?php the_field('section_description'); ?>
        </div>
        <div class="help-wrapper grid">
            <div class="help-item flex">
              <div class="help-count">
				       <?php 
            $help_client_icon = get_field('help_client_icon');
           if( !empty($help_client_icon) ): ?>
	        <img class="help-count__icon" src="<?php echo $help_client_icon['url']; ?>"  />
          <?php endif; ?>
                
                <h3 class="help-count__number"><?php the_field('help_client_count'); ?></h3>
              </div>
              <div class="help-content">
                  <h4 class="help-content__title"><?php the_field('help_client_title'); ?></h4>
                  <p class="help-content__description"><?php the_field('help_client_text'); ?></p>
              </div>
            </div>
            <div class="help-item flex">
              <div class="help-count">
				   <?php 
            $help_cases_icon = get_field('help_cases_icon');
           if( !empty($help_cases_icon) ): ?>
	        <img class="help-count__icon" src="<?php echo $help_cases_icon['url']; ?>"  />
          <?php endif; ?>
                 
                  <h3 class="help-count__number"><?php the_field('help_cases_count'); ?></h3>
              </div>
              <div class="help-content">
                  <h4 class="help-content__title"><?php the_field('help_cases_title'); ?></h4>
                  <p class="help-content__description"><?php the_field('help_cases_text'); ?></p>
              </div>
            </div>
            <div class="help-item help-bg">
              <h3 class="help-bg__number"><?php the_field('help_bg_nummer'); ?></h3>
              <p class="help-bg__description"><?php the_field('help_bg_text'); ?></p>
            </div>
          </div>
          <div class="partners">
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
          </div>
      </div>
    </section>
    <section class="history">
        <div class="container">
          <div class="history__wrapp grid">
            <div class="history__content">
              <h2 class="history__title"><?php the_field("top_history_title") ?></h2>
              <div class="sep"></div>			
			  <?php if (have_rows("history_event")) : ?>
           <?php while (have_rows("history_event")) : the_row(); ?>
              <div class="history__event">
				  <?php if (get_sub_field('history_event_title')) : ?>
                <h3 class="history__event-title"><?php the_sub_field('history_event_title') ?></h3>
				  <?php endif; ?>
				  <?php if (get_sub_field('history_event_text')) : ?>
                <p class="history__event-text">
                  <?php the_sub_field('history_event_text') ?>
                </p>
				   <?php endif; ?>
              </div>
             <?php endwhile; ?>
             <?php endif; ?>
             
              
            </div>
            <div class="history__image-wrap">
				<?php           
            $history_image = get_field('history_image');
            if( !empty($history_image) ): ?>
                <img class="history__image" src="<?php echo $history_image['url']; ?>"  />
            <?php endif; ?>
            </div>
            <div class="history__specialties">
              <div class="history__specialties-title">
                <h2><?php the_field("history_specialised_title") ?></h2>
                <div class="sep"></div>
              </div>
              <div class="history__specialties-text">
                <?php the_field("history_specialised_text") ?>
              </div>
              <div class="history__progress-wrap">
				  <?php if (have_rows("history_progress")) : ?>
                 <?php while (have_rows("history_progress")) : the_row(); ?>
                <div class="history__progress-item">
                    <div class="history__progress-item-content flex">
                  <div class="history__progress-item-title"><?php the_sub_field('history_progress_title') ?></div>
                  <div class="history__progress-item-value"><?php the_sub_field('history_progress_value') ?></div>
                  </div>
                  <div class="history__progress-bar">
                      <div class="history__progress-line"></div>
                  </div>
                </div>
				<?php endwhile; ?>
                <?php endif; ?>  
				  
              </div>
              <div class="history__progress-bnt">
                  <a href="/contact" class="button button-yellow"><?php the_field('history_button_text') ?></a>
              </div>
            </div>
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
      <section class="consultation">
        <div class="container">
          <div class="consultation-wrapp grid">
            <div class="consultation-item">
				<div class="sep"></div>
              <h3><?php the_field("consult_title_left", "option") ?></h3>
				
                <?php the_field("consult_text_left", "option") ?>
<div class="consultation-item__btn">
  <a href="/contact" class="button button-yellow"><?php the_field("consult_button_text", "option") ?></a>
</div>
            </div>
            <div class="consultation-item">
              <div class="consultation-detail-wrapp">
                 <div class="consultation-content">
                   <h3><?php the_field("consult_title_right", "option") ?></h3>
                   <?php the_field("consult_text_right", "option") ?>
                   <div class="consultation-call flex">
                     <div class="consultation-call-icon flex">
                        <?php 
            $consult_call_icon = get_field('consult_call_icon', "option");
           if( !empty($consult_call_icon) ): ?>
	        <img src="<?php echo $consult_call_icon['url']; ?>"  />
          <?php endif; ?>
                      </div>
                       <div class="cosultation-call-link">
                         <p class="consultation-call-title"><?php the_field("consult_call_text", "option") ?></p>
      <a href="tel:911-987654321" class="consultation-phone"><?php the_field("consult_call_nummer", "option") ?></a>
                      </div>
                    </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="appointment">
        <div class="container">
          <div class="appointment-form">
			   <?php echo do_shortcode('[contact-form-7 id="223"]');?>
          </div>
        </div>
      </section>
      <section class="featured">
        <div class="container">
          <div class="section-title">
            <h2>Recent Blogs</h2>
            <div class="sep-center"></div>
          </div>
    <?php
$related_posts = get_field('blog_posts_home');
if ($related_posts) {
  $post = get_post(202); // ID-ul postului dorit
  setup_postdata($post);
  ?>
  <article class="featured-wrapp-single grid">
    <figure>
      <?php wp_attorney_post_thumbnail(); ?>
    </figure>
    <div>
      <div class="featured-meta-wrapp flex">
        <a href="#"><?php echo get_the_category_list(', '); ?></a><span class="separator">|</span>
        <div class="date"><?php echo get_the_date(); ?></div>
      </div>
      <h2><?php the_title(); ?></h2>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
    </div>
  </article>
  <?php
  wp_reset_postdata(); // reset the global $post variable
}
?>     
          <div class="featured-group grid">
<?php			  $related_posts = get_field('blog_posts_home'); 
                 if ($related_posts): ?>
			   <?php foreach ($related_posts as $post): // start the loop to display the posts ?>
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
              
          </div>

        </div>
      </section>