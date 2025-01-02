<section class="contact-info">
      <div class="container">
        <div class="contact-info__wrapp grid">
          <div class="contact-info__item">
            <h3 class="contact-info__title"><?php the_field('contact_info_title_left'); ?></h3>
           <?php the_field('contact_info_text_left'); ?>
          </div>
          <div class="contact-info__item">
            <h3 class="contact-info__title"><?php the_field('contact_info_title_center'); ?></h3>
            <?php the_field('contact_info_text_center'); ?>
          </div>
          <div class="contact-info__item">
            <h3 class="contact-info__title"><?php the_field('contact_info_title_right'); ?></h3>
            <?php the_field('contact_info_text_right'); ?>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-form">
      <div class="container">
        <div class="contact-form-wrapp">
        <?php echo do_shortcode('[contact-form-7 id="343"]');?>
      </div>
      </div>
    </section>