<?php
$average_title = carbon_get_theme_option( 'average_title' );
$average_gym_left = carbon_get_theme_option( 'average_text_left' );
$average_gym_right = carbon_get_theme_option( 'average_text_right' );
?>
<section class="average" id="average">
	<div class="container">
		<h2 class="average-title">
			<?php if ( $average_title ) {
			 echo $average_title;
			}
			?>
		</h2>
		<div class="average-gym flex">
			<div class="average-gym__text">
				<?php echo $average_gym_left; ?>
			</div>
			<div class="average-gym__text">
				<?php echo $average_gym_right; ?>
			</div>
		</div>
	</div>
</section>
<section class="member" id="member">
	<div class="container">
		<div class="member-wrapper grid">
					<?php 
	$member_list = carbon_get_theme_option( 'member_list' );
	if ( ! empty( $member_list ) ): ?>
			<?php foreach ( $member_list as $m_list ): ?>		
			<div class="member-item__image">
				<?php echo wp_get_attachment_image( $m_list['image'], 'full'); ?>
			</div>
			<div class="member-item__desc">
				<h3>
					<?php echo esc_html($m_list['title']); ?>
				</h3>
				<?php echo esc_html($m_list['description']); ?>
			</div>
	<?php endforeach; ?>
<?php endif; ?>		
		</div>
	</div>
</section>
<section class="offer" id="offer">
<div class="container">
	<div class="section-title">
		<h2>
			<?php echo carbon_get_theme_option('offer_section_title'); ?>
		</h2>
	</div>
	<div class="offer-wrapper grid">
						<?php 
	$offer_cards = carbon_get_theme_option( 'offer_cards' );
		if ( ! empty( $offer_cards) ): ?>
		<?php foreach ( $offer_cards as $card ): ?>	
		<div class="offer-card">
			<?php echo wp_get_attachment_image( $card['image_card'], 'full'); ?>
			<div class="offer-card__content">
				<h5>
					<?php echo esc_html($card['title_card']); ?>
				</h5>
				<p>
					<?php echo esc_html($card['text_card']); ?>
				</p>
			</div>
		</div>
		<?php endforeach; ?>
<?php endif; ?>
	</div>
	</div>
</section>
<section class="reviews" id="reviews">
	<div class="container">
		<div class="reviews-wrapper grid">
			<div class="rewiews-item">
				<h2>
					<?php echo carbon_get_theme_option('reviews_title'); ?>
				</h2>
<?php
  $reviews_image_id = carbon_get_theme_option('reviews_image');
   if ($reviews_image_id) {
    echo wp_get_attachment_image($reviews_image_id, 'full');
  }
?>
<p><span><?php echo carbon_get_theme_option('reviews_text'); ?></span></p>
				
			</div>
			<div class="rewiews-item">
<div class="reviewsSlide swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
  
	<?php 
$crb_slides = carbon_get_theme_option('crb_slide');
if ($crb_slides):
    foreach ($crb_slides as $crb_slide): ?>
	  <div class="swiper-slide">
        <div class="reviews-slide__item">
            <div class="reviews-slide__stars">
                <?php
                $slide_stars = $crb_slide['slide_stars'];
                if ($slide_stars):
                    foreach ($slide_stars as $star):
                        $star_image_src = wp_get_attachment_image_url($star['image_star'], 'full');
                        if ($star_image_src): ?>
                            <img src="<?php echo esc_url($star_image_src); ?>" alt="Star" class="reviews-slide__star">
                        <?php endif;
                    endforeach;
                endif; ?>
            </div>
            <div class="reviews-slide__content">
                <p>
                    <?php echo esc_html($crb_slide['slide_description']); ?>
                </p>
            </div>
            <div class="reviews-slide__user">
                <?php 
                $user_image_src = wp_get_attachment_image_url($crb_slide['image_user_slide'], 'full');
                if ($user_image_src): ?>
                    <img src="<?php echo esc_url($user_image_src); ?>" alt="User Avatar" class="reviews-slide__user-avatar">
                <?php endif; ?>
                <span class="reviews-slide__user-name"><?php echo esc_html($crb_slide['user_name_slide']); ?></span>
            </div>
        </div>
	  </div>
    <?php endforeach;
endif;
?>	  

  </div>
  
	
	
  <div class="swiper-button-next"></div>
   <div class="swiper-button-prev"></div>

</div>
			</div>
		</div>
	</div>
</section>
<section class="join" id="join">
	<div class="join-line">
		<div class="join-line__text"><span><?php echo carbon_get_theme_option('join_line_text'); ?></span></div>
		</div>
		<div class="join-bg">
			<div class="container grid">
				<div class="join-desc">
				<p><?php echo carbon_get_theme_option('join_before_title'); ?></p>
					<h2>
						<?php echo carbon_get_theme_option('join_title'); ?>
					</h2>
					<div>
						<a href="#" class="button"><?php echo carbon_get_theme_option('join_text_button'); ?></a>
					</div>
			</div>
				<div class="join-image">
					<?php
  $join_image = carbon_get_theme_option('join_image');
   if ($join_image) {
    echo wp_get_attachment_image($join_image, 'full');
  }
?>
				</div>
			</div>
 	</div>
	
</section>

<section class="team" class="team" id="team">
	<div class="section-title">
		
	
        <h2 class="team__title"><?php echo carbon_get_theme_option('team_title'); ?></h2>
        <div class="team__description"><p><?php echo carbon_get_theme_option('team_description'); ?></p></div>
	</div>
        <div class="team__grid grid">
			<?php 
	$team_cards = carbon_get_theme_option( 'team_cards' );
		if ( ! empty( $team_cards) ): ?>
		<?php foreach ( $team_cards as $t_card ): ?>	
            <div class="team__member">
               
				<?php echo wp_get_attachment_image( $t_card['team_image'], 'full'); ?>
                <div class="team__name"><?php echo esc_html($t_card['team_name']); ?></div>
                <div class="team__role"><?php echo esc_html($t_card['team_role']); ?></div>
            </div>
			<?php endforeach; ?>
<?php endif; ?>
          
        </div>
    </section>
<?php 
$section_image_id = carbon_get_theme_option('section_image'); 
$section_image_url = wp_get_attachment_image_url($section_image_id, 'full');
?>
<section class="contact" style="background-image:url('<?php echo $section_image_url; ?>');" id="contact">
  <div class="container">
	  <div class="contact-wrapper grid">
		  <div class="contact-text">
			  <h2>
				 <?php echo carbon_get_theme_option('contact_title'); ?>
			  </h2>
			  <p>
				  <?php echo carbon_get_theme_option('contact_text'); ?>
			  </p>
		  </div>
		  <div class="contact-form">
			     <?php echo do_shortcode('[contact-form-7 id="5f32e71" title="Contact form 1"]'); ?>
		  </div>
	  </div>
	 
	</div>
</section>