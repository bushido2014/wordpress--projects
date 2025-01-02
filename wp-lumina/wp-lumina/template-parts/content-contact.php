<section class="contact bg-section">
 <div class="container">
    <div class="contact-wrapper grid">
        <div class="contact-item__content">
         <h1><?php echo carbon_get_theme_option('contact_title'); ?></h1>
         <p><?php echo carbon_get_theme_option('contact_text'); ?></p>

             <div class="contact-wrapper__cards">
             <?php $card_contacts = carbon_get_theme_option( 'card_contacts' );
		                      if ( ! empty( $card_contacts) ): ?>
		                     <?php foreach ( $card_contacts as $c_card ): ?>

                          <div class="contact-card flex">
                              <div class="contact-img">
                                <?php echo wp_get_attachment_image( $c_card['contact_img'], 'full'); ?>
                             </div>
                             <div class="contact-content">
                             <p><?php echo esc_html($c_card['contact_title']); ?></p>
                             <p><span><?php echo esc_html($c_card['contact_value']); ?></span></p>
                             </div>
                          </div>


            <?php endforeach; ?>
               <?php endif; ?>                 
             </div>
        </div>
        <div class="contact-item__image">

            <?php
            $contact_image = carbon_get_theme_option('contact_image');
             if ($contact_image) {echo wp_get_attachment_image($contact_image, 'full');}
          ?>
        <div class="image-decoration"></div>
        </div>
    </div>
 </div>

</section>
<section class="contact-form">
  <div class="container">
      <?php echo do_shortcode('[contact-form-7 id="8fc3ba6" title="Contact form 1"]'); ?>
  </div>
</section>