<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package finsweetwp
 */

?>
<section class="price">
      <div class="container">
        <div class="section-title margin-bottom margin-top">
          <h2>Our Pricing Plans</h2>
          <p>
            When you’re ready to go beyond prototyping in Figma, Web is ready to
            help you bring your designs to life — without coding them.
          </p>
        </div>

        <div class="pricing-cards grid">
			<?php if (have_rows("Pricing")) : ?>
           <?php while (have_rows("Pricing")) : the_row(); ?>
          <div class="pricing-card">
            <div class="pricing-card_header">
				<?php if (get_sub_field('price')) : ?>
              <h3 class="head-medium">$<?php the_sub_field('price') ?></h3>
				<?php endif; ?>
				<?php if (get_sub_field('per_design')) : ?>
              <div class="text-blue"><?php the_sub_field('per_design') ?></div>
				<?php endif; ?>
            </div>
            <div class="pricing-card_body">
				<?php if (get_sub_field('price_title')) : ?>
              <h4 class="head-small"><?php the_sub_field('price_title') ?></h4>
				<?php endif; ?>
              <p>When you’re ready to go beyond prototyping in Figma,</p>
              <div class="price-list margin-top">
                <ul>
					<?php if (have_rows("price_list")) : ?>
                   <?php while (have_rows("price_list")) : the_row(); ?>
					<?php if (get_sub_field('price_list_value')) : ?>
                  <li><?php the_sub_field('price_list_value') ?></li>
					<?php endif; ?>
					
                  <?php endwhile; ?>
                  <?php endif; ?>	
					
                </ul>
              </div>
            </div>
            <div class="pricing-card_footer flex margin-top">
				<?php if (get_sub_field('price_button_text')) : ?>
              <a href="#" class="button btn-dark" data-fancybox
              data-src="#dialog-content"><?php the_sub_field('price_button_text') ?></a>
				<?php endif; ?>
            </div>
          </div>
		<?php endwhile; ?>
<?php endif; ?>	
			
          
			
			
        
			
			
			
			
        </div>
		  
      </div>
    </section>
 <?php require_once('sections/faq-section.php');?>  