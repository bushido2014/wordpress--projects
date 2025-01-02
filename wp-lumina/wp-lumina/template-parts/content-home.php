<section class="masterminds">
<div class="container">

<div class="masterminds-wrapper grid">
<div class="masterminds-item">
<h1><?php echo carbon_get_theme_option('master_title'); ?></h1>
<p><?php echo carbon_get_theme_option('master_content'); ?></p>

<div class="masterminds-item__links">
<a href="#" class="button primary"><?php echo carbon_get_theme_option('master_link_us'); ?></a>
<a href="#"class="button secondary"><?php echo carbon_get_theme_option('master_link_more'); ?></a>
</div>


</div>
<div class="masterminds-item">
<?php
  $master_img = carbon_get_theme_option('master_img');
   if ($master_img) {
    echo wp_get_attachment_image($master_img, 'full bottom-radius');
  }
?>
 <div class="image-decoration"></div>
</div>
</div>
    <div class="stats">
       <div class="stats-desc">
       <div class="stats-desc--title"><?php echo carbon_get_theme_option('stats_title'); ?></div>
       <div class="stats-desc--text"><p><?php echo carbon_get_theme_option('stats_desc'); ?></p></div>
      </div>
     <div class="stats-numbers">
    <?php 
	$stats_items = carbon_get_theme_option( 'stats_items' );
		if ( ! empty( $stats_items) ): ?>
		<?php foreach ( $stats_items as $item ): ?>	
         <div class="numbers-item">
            <div class="numbers-item__value"><?php echo esc_html($item['stats_value']); ?></div>
            <div class="numbers-item__text"><?php echo esc_html($item['stats_text']); ?></div>
         </div>
         <?php endforeach; ?>
       <?php endif; ?>
     </div>
    </div>
</div>
</section>

<section class="offer">
<div class="container">
  <div class="section-title">
  <h2><?php echo carbon_get_theme_option('offer_title'); ?></h2>
  <div>
  <p><?php echo carbon_get_theme_option('offer_content'); ?></p>
  </div>
  </div>
<div class="offer-wrapper grid">
	<?php 
	$offer_items = carbon_get_theme_option( 'offer_items' );
		if ( ! empty( $offer_items) ): ?>
		<?php foreach ( $offer_items as $item ): ?>	
		<div class="offer-card">
			<?php echo wp_get_attachment_image( $item['offer_img'], 'full'); ?>
			<div class="offer-card__content">
				<h5>
					<?php echo esc_html($item['offer_title']); ?>
				</h5>
				<p>
					<?php echo esc_html($item['offer_text']); ?>
				</p>
			</div>
		</div>
		<?php endforeach; ?>
       <?php endif; ?>
	</div>
</div>
</section>

<section class="know-story">
<div class="container">
    <div class="know-wrapper grid">
       <div class="know-item__desc">
       <h2> <?php echo carbon_get_theme_option('know_title'); ?></h2>
        <p><?php echo carbon_get_theme_option('know_text'); ?></p>
        <div class="know-links">
        <a href="#" class="button primary"><?php echo carbon_get_theme_option('know_link'); ?></a>
        </div>
       </div>
       <div class="know-item__img"> 
       <?php
  $know_img = carbon_get_theme_option('know_img');
   if ($know_img) {
    echo wp_get_attachment_image($know_img, 'full bottom-radius');
  }
?>
<div class="image-decoration"></div>
       </div>
    </div>
</div>
</section>

<section class="work-success">
<div class="container">
<div class="flex">
   <div class="section-title">
      <h2><?php echo carbon_get_theme_option('wsuccess_title'); ?></h2>
      <div>
     <p><?php echo carbon_get_theme_option('wsuccess_text'); ?></p>
    </div>
   </div>
   <div class="work-success__link">
   <a href="#" class="button primary"><?php echo carbon_get_theme_option('wsuccess_link'); ?></a>
   </div>
   </div>
   
   <div class="work-success__wrapper grid">
   <?php
    $wsuccess_items = carbon_get_theme_option( 'wsuccess_items' );
		if ( ! empty( $wsuccess_items) ): ?>
		<?php foreach ( $wsuccess_items as $wsc_item ): ?>	
      <div class="work-success__item">
          <?php echo wp_get_attachment_image( $wsc_item['wsuccess_img'], 'full'); ?>
         <div class="work-success__content">
              <h5>
					<?php echo esc_html($wsc_item['wsuccess_title']); ?>
				</h5>
				<p>
					<?php echo esc_html($wsc_item['wsuccess_text']); ?>
				</p>
         </div>
      </div>
    <?php endforeach; ?>
    <?php endif; ?>
   </div>
</div>

</section>

<section class="benefits">
   <div class="container">
      <div class="benefits-wrapper grid">

          <div class="benefits-item__desc">
          <h2><?php echo carbon_get_theme_option('benefits_title'); ?></h2>
          <p><?php echo carbon_get_theme_option('benefits_desc'); ?></p>
  
  
         <div class="benefits-content">
         <?php
    $benefits_items = carbon_get_theme_option( 'benefits_items' );
		if ( ! empty( $benefits_items) ): ?>
		<?php foreach ( $benefits_items as $benefits_item ): ?>
            <div class="benefits-content__item flex">
               <div class="benefits-content__item-img"> <?php echo wp_get_attachment_image( $benefits_item['benefits_item_img'], 'full'); ?></div>
                  <div class="benefits-content__item-text">
                   <h6><?php echo esc_html($benefits_item['benefits_item_title']); ?></h6>
                   <p><?php echo esc_html($benefits_item['benefits_item_text']); ?></p>
                  </div>
                </div>
          <?php endforeach; ?>
          <?php endif; ?>

        </div>
    </div>

   
          <div class="benefits-item__img">
          <?php
    $benefits_img_top = carbon_get_theme_option('benefits_img_top');
    if ($benefits_img_top) {echo wp_get_attachment_image($benefits_img_top, 'full benefits_img_top');}
    ?>
        <?php
    $benefits_img_bottom = carbon_get_theme_option('benefits_img_bottom');
    if ($benefits_img_bottom) {echo wp_get_attachment_image($benefits_img_bottom, 'full benefits_img_bottom');}
    ?>
        <div class="image-decoration"></div>
          </div>
  
   </div>
  </div>
</section>


<section class="clients">
   <div class="container">

      <div class="section-title">
      <h2><?php echo carbon_get_theme_option('clients_title'); ?></h2>
        
          <p> <?php echo carbon_get_theme_option('clients_desc'); ?></p>
         
      </div>
     <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
      <div class="swiper client-slider">
      
          <div class="swiper-wrapper">
              <?php
    $clients_slide = carbon_get_theme_option( 'clients_slide' );
		if ( ! empty( $clients_slide) ): ?>
		<?php foreach ( $clients_slide as $slide ): ?>
            <div class="swiper-slide">
            <div class="client-card">
            <div class="client-card__text">
            <?php echo esc_html($slide['client_slide_text']); ?>
            </div>
            <div class="client-card__user flex"> 
                  <div class="client-card__user-avatar">
                    <?php echo wp_get_attachment_image( $slide['client_slide_avatar'], 'full'); ?>
                  </div>
                  <div class="client-card__user-info">
                      <div class="client-card__user-name">
                      <?php echo esc_html($slide['client_slide_name']); ?>
                      </div>
                      <div class="client-card__user-career">
                        <?php echo esc_html($slide['client_slide_career']); ?>
                      </div>
                      <div class="client-card_user-stars">
                       <?php for ($i = 0; $i < 5; $i++): ?>
        <svg xmlns="http://www.w3.org/2000/svg" class="star-icon" viewBox="0 0 576 512">
            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
        </svg>
    <?php endfor; ?>
                      </div>
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

<section class="collaborate">
  <div class="container">
     <div class="collaborate-wrapper flex">
       <div class="collaborate-item__desc">
          
                <h2><?php echo carbon_get_theme_option('collaborate_title'); ?></h2>
              <p> <?php echo carbon_get_theme_option('collaborate_desc'); ?></p>
                    <div class="collaborate-links">
                       <a href="#" class="button primary"><?php echo carbon_get_theme_option('collaborate_button'); ?></a>
                    </div>
          

       </div>
       
       <div class="collaborate-item__img">
         <?php
            $cta_img = carbon_get_theme_option('collaborate_image');
             if ($cta_img) {echo wp_get_attachment_image($cta_img, 'full');}
          ?>

          <div class="image-decoration"></div>
       </div>
     </div>
  </div>

</section>


<section class="collection-article">
    <div class="container">
     <div class="flex">
            <div class="section-title">
              <h2><?php echo carbon_get_theme_option('collection_title'); ?></h2>
            <div>
               <p><?php echo carbon_get_theme_option('collection_desc'); ?></p>
           </div>
      </div>
       <div class="collection-article__link">
           <a href="#" class="button secondary"><?php echo carbon_get_theme_option('collection_button'); ?></a>
        </div>
    </div>
  
    <div class="collection-article__wrapper grid">
        <?php
        $args = array(
            'post_type' => 'post', 
            'post__in' => array(376, 380), 
            'posts_per_page' => 2, 
            'orderby' => 'post__in'
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <article class="collection-article-item post-article">
                   <div class="post-header">
                   <?php wp_lumina_post_thumbnail(); ?>
                   </div>
                  <div class="post-body">
                    <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
                   <?php the_excerpt(); ?>
                   <div class="post-footer flex">
                      <span class="post-date"><?php echo get_the_date(); ?></span>
                       <a href="<?php the_permalink(); ?>" class="post-link">Read More</a>
                    </div>
                  </div>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
        </div>
    </div>
</section>


