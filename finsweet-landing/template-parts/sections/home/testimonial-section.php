<section class="testimonial">
      <div class="container">
        <div class="testimonial-content grid">
          <div class="testimonial-content_left">
          <?php if ( get_field('testimonial_left_title') ) { ?>
            <h2><?php the_field("testimonial_left_title") ?></h2>
            <?php } ?>
             <?php if ( get_field('testimonial_left_text') ) { ?>
            <p><?php the_field("testimonial_left_text") ?></p>
            <?php } ?>
          </div>
          <div class="testimonial-content_right">
            <div class="swiper testimonial-slide">
              <div class="swiper-wrapper">
              <?php if (have_rows("testimonial_slide")) : ?>
    <?php while (have_rows("testimonial_slide")) : the_row(); 
     
          $image_slide = get_sub_field('slide_image');
          ?>
                <div class="swiper-slide">
                  <div class="testimonial-slide_wrapper">
                    <div class="testimonial-slide_content">
                     <?php if (get_sub_field('slide_text')) : ?>
                    <p> <?php the_sub_field("slide_text") ?></p>
                <?php endif; ?>
                    </div>
                    <div class="testimonial-slide_author">
                      <?php if (get_sub_field('slide_image')) : ?>
                <?php echo wp_get_attachment_image( $image_slide, 'full' ); ?>
                <?php endif; ?>
                      <div>
                      <?php if (get_sub_field('slide_author')) : ?>
                    <span> <?php the_sub_field("slide_author") ?></span>
                <?php endif; ?>
                        <?php if (get_sub_field('author_work')) : ?>
                    <span> <?php the_sub_field("author_work") ?></span>
                <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
               <?php endwhile; ?>
<?php endif; ?>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
    </section>