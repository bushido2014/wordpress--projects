<style>
	.product-grid {
	display: grid;
    grid-template-columns: repeat(4, 1fr);
    align-items: stretch;
    gap: 20px;
    text-align: center;
	
	}
	.product-card {
		display:flex;
		flex-direction: column;
		border: 1px solid #ddd;
		margin: 15px 0;
	}
	.product-header {
		min-height:270px;
		height:100%;
		padding: 10px;
		border-bottom: 1px solid #ddd;
	}
	.product-body, .product-footer {
		padding:10px;
	}
</style>
<?php
  $product_id = get_the_ID();

  $product_price = carbon_get_post_meta($product_id, 'product_price');
  $product_attributes = carbon_get_post_meta($product_id, 'product_attributes');

?>
	<div  class="container">
    <div class="section_title">
        <h2> ALL Products</h2>
    </div>
		
<div class="product-grid">
		
		<?php
		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$args = array( 
				'post_type' => 'product', 
				'posts_per_page' => 4, 
				'paged' => $paged
			);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>

  <div class="product-card">
   <div class="product-header">
	   <?php   wpland_post_thumbnail(); ?>
	  </div>
 <div class="product-body">
<h3 class="product-title"><?php the_title();?></h3>
</div>
<div class="product-footer">
    <a href="<?php echo esc_url( get_permalink() ) ?>" class="button">Read More</a>
<!-- 	<a class="button mdl" href="javascript:;" data-fancybox data-src="#form-modal-project">Call U </a> -->
</div>	  
  </div>

<?php  endwhile; ?>
</div>	
<div class="container">
<div class="navigation-page">
<?php
 $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« Назад'),
            'next_text'    => __('Далее »'),
        ));
    }    

    

wp_reset_postdata();

?>
</div>
</div>
</div>


	