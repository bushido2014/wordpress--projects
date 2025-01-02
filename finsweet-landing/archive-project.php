<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package finsweetwp
 */

get_header();
?>


<section class="projects-all">
	<div  class="container">
    <div class="section_title">
        <h2> ALL projects</h2>
    </div>
	
		
<div class="project grid">
	
		
		<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array( 
'post_type' => 'project', 
'posts_per_page' => 3, 
'paged' => $paged);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
    <div class="project-card">
          <div class="project-header">
	        <h3 class="project-title"><?php the_title();?></h3>
           </div>
         <div class="project-body">
           <?php   finsweetwp_post_thumbnail('medium'); ?>
           <?php the_excerpt(); ?>
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

</section>
<?php

get_footer();
