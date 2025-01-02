<section class="work">
      <div class="container">
        <div class="work-wrapper grid">
          <div class="work-item">
            <h2><?php the_field('work_section_title'); ?></h2>
            <p>
              <?php the_field('work_section_desc'); ?>.
            </p>
            <div class="margin-top">
              <a href="#" class="arrow-button flex"
                ><div><?php the_field('work_section_link'); ?></div>
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
                  </svg></div
              ></a>
            </div>
          </div>
          <div class="work-item grid">
<?php if (have_rows("work_section_list")) : ?>
    <?php while (have_rows("work_section_list")) : the_row(); 
     
          $image = get_sub_field('work_list_img');
          ?>
            <div class="card">
              <div class="card-image">
           
                <?php if (get_sub_field('work_list_img')) : ?>
                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                <?php endif; ?>

              </div>
              <div class="card-title">
              <?php if (get_sub_field('work_list_title')) : ?>
              <h3> <?php the_sub_field("work_list_title") ?></h3>
              <?php endif; ?>           
              </div>

              <div class="card-desc">
                <?php if (get_sub_field('work_list_text')) : ?>
                    <p> <?php the_sub_field("work_list_text") ?></p>
                <?php endif; ?>
              </div>
            </div>
<?php endwhile; ?>
<?php endif; ?>
           

          </div>
        </div>
      </div>
    </section>