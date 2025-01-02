    <section class="features">
      <div class="container">
        <div class="section-title">
          <span><?php the_field("feature_text_before") ?></span>
          <h2><?php the_field("feature_section_title") ?></h2>
        </div>

        <div class="features-wrapper grid">
<?php if (have_rows("feature_list")) : ?>
    <?php while (have_rows("feature_list")) : the_row(); 
     
          $image_feature = get_sub_field('feature_image');
          ?>

          <div class="features-item">
             <?php if (get_sub_field('feature_image')) : ?>
                <?php echo wp_get_attachment_image( $image_feature, 'full' ); ?>
                <?php endif; ?>
            <div>
              <?php if (get_sub_field('feature_title')) : ?>
              <h4> <?php the_sub_field("feature_title") ?></h4>
              <?php endif; ?>  
            </div>
            <?php if (get_sub_field('feature_description')) : ?>
                    <p> <?php the_sub_field("feature_description") ?></p>
                <?php endif; ?>
          </div>    
<?php endwhile; ?>
<?php endif; ?>
        </div>
      </div>
    </section>