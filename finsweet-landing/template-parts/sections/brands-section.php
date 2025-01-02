 <div class="brands">
      <div class="container">
        <div class="brands-wrapper grid">
          <div class="brands-content">
            <div class="s-large"><?php the_field('brands_content_first','option'); ?></div>
            <div><?php the_field('brands_content_last', 'option'); ?></div>
          </div>
          <div class="brands-logos grid">
			  	<?php if (have_rows("brands", "option")) : ?>
    <?php while (have_rows("brands", "option")) : the_row(); 
     
          $brands_logo = get_sub_field('brands_logo');
          ?>
            <?php if (get_sub_field('brands_logo')) : ?>
                <?php echo wp_get_attachment_image( $brands_logo, 'full' ); ?>
                <?php endif; ?>
			  
			  	<?php endwhile; ?>
                <?php endif; ?>
          </div>
        </div>
      </div>
    </div>