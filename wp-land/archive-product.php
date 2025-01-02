<?php
/**
 
 *
 * @package wpland
 */

get_header();
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
'paged' => $paged);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>

  <div class="product-card">
   <div class="product-header">
	   <?php   wpland_post_thumbnail('full'); ?>
	  </div>
 <div class="product-body">
<h3 class="product-title"><?php the_title();?></h3>
</div>
<div class="product-footer">
    <a href="<?php echo esc_url( get_permalink() ) ?>" class="button">Read More</a>
</div>	  
  </div>

<?php  endwhile; ?>
</div>	
<div class="container">
	<nav class="pagination">

	
<?php
 $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« Back'),
            'next_text'    => __('Next »'),
        ));
    }    

wp_reset_postdata();
?>
</nav>	 
	 

	

	
</div>
		
</div>


<?php

get_footer();