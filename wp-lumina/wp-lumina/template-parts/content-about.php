<section class="marketing bg-section">
   <div class="container">
         <div class="marketing-wrapper flex">
               <div class="marketing__item-content">
               <h1><?php echo carbon_get_theme_option('marketing_title'); ?></h1>
                <?php echo carbon_get_theme_option('marketing_description'); ?>
             <div class="marketing-item__links">
                    <a href="#" class="button primary"><?php echo carbon_get_theme_option('button_collaborate_us'); ?></a>
             </div>
               </div>
               <div class="marketing__item-slider">
               
                    <div class="swiper marketing-slider">
                        <div class="swiper-wrapper">
                            
                             <?php
                              $marketing_slide = carbon_get_theme_option( 'marketing_slide' );
		                      if ( ! empty( $marketing_slide) ): ?>
		                     <?php foreach ( $marketing_slide as $m_slide ): ?>

                            <div class="swiper-slide">
                                 <?php echo wp_get_attachment_image( $m_slide['marketing_image_slide'], 'full bottom-radius'); ?>
                                <div class="slide-content">
                               <p><?php echo esc_html($m_slide['marketing_text_slide']); ?></p>
                                </div>
                            </div>
                            
                             <?php endforeach; ?>
                            <?php endif; ?>

                        </div>
                    </div>


               <div class="image-decoration"></div>
               </div>
         </div>
   </div>
</div>
</section>

<section class="vision">
   <div class="container">
         <div class="vision-wrapper grid">
               <div class="vision-item__content">
               <h2><?php echo carbon_get_theme_option('vision_title'); ?></h2>
              <?php echo carbon_get_theme_option('vision_desc'); ?>
               <div class="vision-item__links">
                    <a href="#" class="button primary"><?php echo carbon_get_theme_option('button_collaborate_us'); ?></a>
             </div>
               </div>
               <div class="vision-item__img">
                 <?php
            $vision_image = carbon_get_theme_option('vision_image');
             if ($vision_image) {echo wp_get_attachment_image($vision_image, 'full');}
          ?>
              
               </div>
         </div>
   </div>
</div>
</section>

<section class="journey bg-section">
   <div class="container">
      <div class="section-title">
          <h2><?php echo carbon_get_theme_option('journey_title'); ?></h2>
     </div>
         <div class="journey-wrapper grid">
               <div class="journey-item__content">
                <?php echo do_shortcode( '[wptabs id="571"]' ); ?>

              </div>
               <div class="journey-item__img">
                 <?php
               $journey_image = carbon_get_theme_option('journey_image');
               if ($journey_image) {
               echo wp_get_attachment_image($journey_image, 'full');
               }
               ?>
               <div class="image-decoration"></div>
               </div>
         </div>
   </div>
</div>
</section>

<section class="value">
       <div class="container">

         <div class="flex">
              <div class="section-title">
                <h2><?php echo carbon_get_theme_option('value_title'); ?></h2>
                <div class="section-desc">
                <p><?php echo carbon_get_theme_option('value_text'); ?></p>
                </div>
             </div>
              <div class="value__link">
                 <a href="#" class="button primary"><?php echo carbon_get_theme_option('button_collaborate_us'); ?></a>
                 </div>
           </div>

            <div class="value-wrapper flex">

		
        <?php $value_items = carbon_get_theme_option( 'value_items' );
		if ( ! empty( $value_items) ): ?>
        <?php foreach ( $value_items as $v_item ): ?>	
              <div class="value-card">
                  <div class="value-card__img">
                  <?php echo wp_get_attachment_image( $v_item['value_img'], 'full'); ?>
                  </div>
                <div class="value-card__body">
                   <h5><?php echo esc_html($v_item['value_title']); ?></h5>
                   <p><?php echo esc_html($v_item['value_desc']); ?></p>
                </div>
              </div>
           
           <?php endforeach; ?>
          <?php endif; ?>

           </div>
       </div>
</section>

<section class="member bg-section">
   <div class="container">
      <div class="section-title">
               <h2><?php echo carbon_get_theme_option('member_title'); ?></h2>
            <div class="section-desc">
                <p><?php echo carbon_get_theme_option('member_text'); ?></p>
            </div>
      </div>


    <div class="member-wrapper grid">
    
    <?php $member_items = carbon_get_theme_option( 'member_items' );
		if ( ! empty( $member_items) ): ?>
        <?php foreach ( $member_items as $me_item ): ?>	
       <div class="member-card">
          <div class="member-card__img">
          <?php echo wp_get_attachment_image( $me_item['member_img'], 'full'); ?>
          </div>
          <div class="member-card__body">
          <h5><?php echo esc_html($me_item['member_name']); ?></h5>
          <p><?php echo esc_html($me_item['member_job']); ?></p>
          <div class="member-card__socials">
             <?php
            if (!empty($me_item['member_social_links'])):
             foreach ($me_item['member_social_links'] as $m_link):
                    $url = $m_link['member_social_url'];?>
                     
               <a href="<?php echo esc_url( $url ); ?>" class="member-social-icon" target="_blank" rel="noopener">
                <?php echo wp_get_attachment_image( $m_link['member_social_img'], 'full'); ?>
                </a>
                 <?php
                endforeach;
            endif;
            ?>
          </div>
          </div>
       </div>

    <?php endforeach; ?>
   <?php endif; ?>

    </div>

   </div>
</section>

<section class="office">
  <div class="container">
       <div class="section-title">
               <h2><?php echo carbon_get_theme_option('office_title'); ?></h2>
            <div class="section-desc">
                <p><?php echo carbon_get_theme_option('office_text'); ?></p>
            </div>
      </div>

       <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
       <div class="swiper offices-slider">
      
          <div class="swiper-wrapper">
                 
                <?php $office_cards = carbon_get_theme_option( 'office_cards' );
		                      if ( ! empty( $office_cards) ): ?>
		                     <?php foreach ( $office_cards as $off_card ): ?>

                       <div class="swiper-slide">
                          <div class="office-card">
                          <div class="office-card__img">
                          <?php echo wp_get_attachment_image( $off_card['card_image'], 'full'); ?>
                          </div>
                          <div class="office-card__body">
                          <h5><?php echo esc_html($off_card['card_title']); ?></h5>
                          <p><?php echo esc_html($off_card['card_desc']); ?></p>
                              <div class="office-card_contacts flex">
                             <?php
                             if (!empty($off_card['card_office_contacts'])):
                            foreach ($off_card['card_office_contacts'] as $of_contact): ?>
                            <div class="office-card_contacts-wrapp flex">
                             <div class="contact-img">
                                <?php echo wp_get_attachment_image( $of_contact['card_contact_img'], 'full'); ?>
                             </div>
                             <div class="contact-content">
                             <p><?php echo esc_html($of_contact['card_contact_title']); ?></p>
                             <p><span><?php echo esc_html($of_contact['card_contact_value']); ?></span></p>
                             </div>
                            </div>
                               <?php
                                  endforeach;
                                  endif;
                                ?>
                               </div>
                          </div>
                          </div>
                       </div>


               <?php endforeach; ?>
               <?php endif; ?>

           </div>
       </div>    



  </div>
</section>
