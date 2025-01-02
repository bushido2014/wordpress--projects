<section class="section-counter">
	
     <div class="container">
        <div class="counter">
			     <?php if (have_rows("counter", "option")) : ?>
                <?php while (have_rows("counter", "option")) : the_row();  ?>
          <div>
            <span><?php the_sub_field("counter_title") ?></span>
            <p><?php the_sub_field("counter_text") ?></p>
          </div>
	<?php endwhile; ?>
    <?php endif; ?>  	
      
        </div>
	</div>	
</section>   
	<section class="features">
		<div class="container">
			<div class="features-wrapper">
				<div class="features-item">
 <?php           
            $featured_image = get_field('featured_image','option');
            if( !empty($featured_image) ): ?>
                <img src="<?php echo $featured_image; ?>"  />
            <?php endif; ?>
				</div>
				<div class="features-item">
				<h2><?php the_field("featured_title", "option") ?></h2>
				<?php the_field("featured_text", "option") ?>
				</div>
				</div>
			</div>
		
	</section>

<section class="new-store">
	<div class="container">
     <div class="new-store-cat">
		<div class="new-store-items">
			<h2><?php the_field("story_title", "option") ?></h2>
			<?php the_field("story_text", "option") ?>
			<p>
			<a href="http://landing.hstn.me/products/"><?php the_field("story_link", "option") ?></a>
		</p>
		</div>
	<div class="new-store-items">
    <?php 
    $story_categories = get_field('story_categories', 'option'); // Retrieve selected taxonomy terms from ACF option
    if ($story_categories):
        foreach ($story_categories as $category):
            $term_link = get_term_link($category); // Get the term link
            $term_image = MGC_Custom_Category_Image::get_category_image($category->term_id, 'full'); // Get the category image
            
            if (is_object($category) && isset($category->name)):
                ?>
               
                   
		<a href="<?php echo $term_link; ?>">
    <?php echo $term_image; ?>
    <span><?php echo $category->name; ?></span>
</a>
               
                <?php
            endif;
        endforeach;
    endif;
    ?>
</div>







		</div>
	</div>
	
</section>
     
   

<section class="furniture">
	<div class="container">
		<div class="furniture-wrapper">
			<div class="furniture-item">
				<h2><?php the_field("furniture_title", "option") ?></h2>
				<?php the_field("furniture_desc", "option") ?>
			</div>
			<div class="furniture-item">
<?php 
$featured_image = get_field('featured_image', 'option');
if($featured_image) : ?> 
<img src="<?php echo $featured_image; ?>"  />
<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="products">
	<div class="container">
		<div class="section-title">
			<h2>
				<?php the_field("featured_products_section_title", "option") ?>
			</h2>
			<div>
				<?php the_field("featured_products_section_text", "option") ?>
			</div>
		</div>
		
<div class="product-grids">
	<div class="swiper featured-products">
  
  <div class="swiper-wrapper">
	<?php
        $slide_featured_products = get_field('slide_featured_products', 'option');
        if ($slide_featured_products):
          foreach ($slide_featured_products as $post):
            setup_postdata($post);
      ?>
	   <style>
		   .product-card-img img {
			   display:block;
			   margin:10px auto;
		   }
	  </style>
			<div class="product-card swiper-slide">
				<div class="product-card-img">
				
					<?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
					<a href="#" data-fancybox data-src="#product__property" href="#" class="product-about">
						<div class="plus"></div>
					</a>
					<div style="display: none;" id="product__property">
						
                      <?php echo do_shortcode('[contact-form-7 id="54"]');?>
                  </div>
				</div>
				<div class="product-card-content">
					<h4><?php the_title(); ?></h4>
					<div class="product-card-price">
						<span>$<?php the_field("product_price") ?></span>
						<span class="text-line">$<?php the_field("product_old_price") ?></span>
					</div>
				</div>
				
			</div>
	
		<?php endforeach; ?>
			  <?php wp_reset_postdata(); // reset the global $post variable ?>
            <?php endif; ?>	
	  
		</div>
	</div>
	<!-- If we need pagination -->
  <div class="swiper-pagination"></div>
		</div>
	</div>
</section>

<section class="testimonial">
	<div class="container">
		<div class="testimonial-wrap">
			
			<div class="testimonial-wrap--item">
				<h2>
					
					<?php the_field("testimonial_title", "option") ?>
				</h2>
				<div class="userSlide swiper">
					<div class="swiper-wrapper">
						<?php if (have_rows("testimonial_slide", "option")) : ?>
      <?php while (have_rows("testimonial_slide", "option")) : the_row(); 
        $slide_image = get_sub_field('slide_image'); ?>
				<div class="swiper-slide">
				<div class="testimonial-user">
					 <?php echo wp_get_attachment_image( $slide_image, 'full' ); ?>
					<div class="testimonial-user__info">
						<?php the_sub_field('slide_user'); ?>
						<span><?php the_sub_field('slide_user_job'); ?></span>
					</div>
				</div>
				<?php the_sub_field('slide_text'); ?>
					</div>
						<?php endwhile; ?>
                   <?php endif; ?>  
					</div>
					<div class="swiper-button-next"></div>
                   <div class="swiper-button-prev"></div>
				</div>
			</div>
			<div class="testimonial-wrap--item">
				<?php echo wp_get_attachment_image(25,'full'); ?>
			</div>
		</div>
	</div>
</section>	

<section class="cta">
	<div class="container">
		<div class="cta-wrap">
			<div class="cta-form">
				
					<h2>
						<?php the_field("cta_title", "option") ?>
					</h2>

				<?php the_field("cta_text", "option") ?>
				
					 <?php echo do_shortcode('[contact-form-7 id="46"]');?>	
				
						 
			</div>
		</div>
	</div>
</section>