<section class="free">
      <div class="container">
        <div class="free-wrapp">
          <div class="free-wrapp__icon">
            <img src="https://i.postimg.cc/V691Skbd/free-icon.png">
          </div>
          <div class="free__content">
          <h2 class="free__content-title">No Fee Guarantee®</h2>
          <p class="free__content-text">We’ll win your injury case, or it’s free.</p>
        </div>
        </div>
      </div>
    </section>
    <section class="pricing">
      <div class="container">
        <div class="section-title">
          <h2><?php the_field("price_title_center") ?></h2>
          <div class="sep-center"></div>
        </div>
        <div class="pricing-wrapp grid">
			<?php if (have_rows("plan")) : ?>
           <?php while (have_rows("plan")) : the_row(); ?>
			
			
         <div class="pricing-item">
          <div class="pricing__title-wrapp">
			  <?php if (get_sub_field('plan_title')) : ?>
            <h3 class="pricing-title"><?php the_sub_field('plan_title') ?></h3>
			  <?php endif; ?>
			  <?php if (get_sub_field('plan_subtitle')) : ?>
            <p class="pricing-title__info"><?php the_sub_field('plan_subtitle') ?></p>
			  <?php endif; ?>
          </div>
          <div class="pricing__amout-wrapp">
			  <?php if (get_sub_field('plan_price')) : ?>
            <div class="pricing-price"><?php the_sub_field('plan_price') ?></div>
			   <?php endif; ?>
			  <?php if (get_sub_field('plan_per_case')) : ?>
            <div class="pricing-mount"><?php the_sub_field('plan_per_case') ?></div>
			  <?php endif; ?>
          </div>
          <div class="pricing__info-wrapp">
			  <?php if (have_rows("plan_list")) : ?>
                   <?php while (have_rows("plan_list")) : the_row(); ?>
			  
			         <?php if (get_sub_field('plan_list_value')) : ?>
                      <div class="pricing__info-list"><?php the_sub_field('plan_list_value') ?></div>
			  <?php endif; ?>
			  
             <?php endwhile; ?>
                  <?php endif; ?>
          </div>
          <div class="pricing__btn-wrapp">
            <a href="/contact" class="button button-yellow">Get Started</a>
          </div>
         </div>
		<?php endwhile; ?>
                  <?php endif; ?>		
        
        </div>
      </div>
    </section>
    <section class="faq">
      <div class="container">
        <div class="section-title">
          <h2><?php the_field("section_faq_title", "option") ?></h2>
          <div class="sep-center"></div>
        </div>
        <div class="faq-wrapp grid">
			<?php if (have_rows("faq_questions", "option")) : ?>
             <?php while (have_rows("faq_questions", "option")) : the_row(); ?>
          <div class="faq-item">
            <h3 class="faq-title"><?php the_sub_field('faq_title') ?></h3>
            <div class="faq-text">
				<?php the_sub_field('faq_text') ?>
			  </div>
          </div>
			<?php endwhile; ?>
           <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="free-consultation">
      <div class="container">
        <div class="free-consultation-wrapp">
          <h2 class="free-consultation__title">Get a Free Consultation</h2>
          <p class="free-consultation__content">There are  of Lorem Ipsum available, but the majority by injected humour  which don't look even.</p>
          <a href="/contact" class="button button-yellow">Contact Us</a>
        </div>
      </div>
    </section>