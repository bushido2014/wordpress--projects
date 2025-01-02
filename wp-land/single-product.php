<?php
/**
 * The template for displaying all single posts
 *
 * 
 *
 * @package wpland
 */

get_header();
?>

<div class="container">
	<div class="product-single">
		<div class="product-body">
			<div class="product-head">
			<h2 class="product-title"><?php the_title();?></h2>
		          <?php   wpland_post_thumbnail(); ?>
	           </div>
			<div class="product-detail">
				<div class="product__property-content">
					<div class="product__property_head">
						<h3>
							Product Detail
						</h3>
					</div>
	                   
							<div class="product__property_row">
								<span class="product__property_label">Width</span>
								<span class="product__property_value"><?php the_field('product_width') ?> cm</span>
							</div>
					   
					
					      
							<div class="product__property_row">
								<span class="product__property_label">Height</span>
								<span class="product__property_value"><?php the_field('product_height') ?> cm</span>
							</div>
						
					
					
					        <div class="product__property_row">
								<span class="product__property_label">Price</span>
								<span class="product__property_value"> <?php the_field("product_price") ?> $</span>
							</div>
					
					
					<div class="product__property_row popup">
						<a href="#" data-fancybox data-src="#product__order" class="button order-button">Order</a>
						<div style="display: none;" id="product__order">
							<div>
								<h4 class="product-title"><?php the_title();?></h4>
							</div>
							<div>
								<?php echo do_shortcode('[contact-form-7 id="47"]');?>
							</div>
						</div>
					</div>
					
			</div>
			</div>
		</div><!-- End product-body	 -->
		
		<div class="product__description">
        <?php the_excerpt(); ?>
      </div>
		
	</div>
</div>


<?php
get_footer();