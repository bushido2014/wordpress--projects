<section class="benefits">
      <div class="container">
        <div class="section-title margin-bottom">
          <h2>The benefits of working with us</h2>
        </div>
        <div class="benefits-wrapper grid">
			<?php if (have_rows("benefits", "option")) : ?>
    <?php while (have_rows("benefits", "option")) : the_row(); 
     
          $benefits_image = get_sub_field('benefits_image');
          ?>
			
          <div class="benefits_item">
            <div class="benefits_icon-wrapp">
              <?php if (get_sub_field('benefits_image')) : ?>
                <?php echo wp_get_attachment_image( $benefits_image, 'full' ); ?>
                <?php endif; ?>
            </div>
			  <?php if (get_sub_field('benefits_title')) : ?>
            <h3 class="head-small"><?php the_sub_field("benefits_title") ?></h3>
			  <?php endif; ?>
            <div class="margin-top">
              <?php if (get_sub_field('benefits_text')) : ?>
			  <?php the_sub_field("benefits_text") ?>
			  <?php endif; ?> 
            </div>
          </div>
			<?php endwhile; ?>
            <?php endif; ?>
				
        </div>
      </div>
    </section>