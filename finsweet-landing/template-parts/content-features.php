<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package finsweetwp
 */

?>
 <section class="features-heading">
      <div class="container">
        <div class="features-wrapper grid">
          <div class="features-item_content">
            <h1><?php the_field('feature_title'); ?></h1>
            <div class="margin-top margin-bottom">
              <?php the_field('feature_description'); ?>
              <div class="margin-top">
				  <?php 
$feature_link = get_field('feature_link');
if( $feature_link): ?>
                <a href="<?php echo esc_url( $feature_link ); ?>" class="button btn-wellow"
                  >View pricing</a>
<?php endif; ?>				  
              </div>
            </div>
          </div>
          <div class="features-item_img flex">
<?php 
$feature_image_1 = get_field('feature_image_1');
$size_1 = 'full features-image1';
if( $feature_image_1 ) {
    echo wp_get_attachment_image( $feature_image_1, $size_1);
};?>
<?php 
$feature_image_2 = get_field('feature_image_2');
$size_2 = 'full features-image2';
if( $feature_image_2 ) {
    echo wp_get_attachment_image( $feature_image_2, $size_2);
};?>           
<?php 
$feature_image_3 = get_field('feature_image_3');
$size_3 = 'full features-image3';
if( $feature_image_3 ) {
    echo wp_get_attachment_image( $feature_image_3, $size_3);
};?>           
           
          </div>
        </div>
      </div>
    </section>
    
     <?php require_once('sections/brands-section.php');?>   
    <?php require_once('sections/benefits-section.php');?>

 <section class="all-features-posts">   
 <?php if (have_rows("features_posts")) : ?>
    <?php while (have_rows("features_posts")) : the_row(); 
     
          $feature_post_image = get_sub_field('feature_post_image');
          ?>
     <div class="features-posts">
      <div class="container">

        <div class="features-posts-wrapper grid">
          <div class="features-posts-item">
          <?php if (get_sub_field('feature_span_text')) : ?>
            <div class="margin-bottom">
               <?php the_sub_field("feature_span_text") ?>
            </div>
            <?php endif; ?> 
             <?php if (get_sub_field('feature_post_title')) : ?>
            <h2 class="head-medium">
              <?php the_sub_field("feature_post_title") ?>
            </h2>
            <?php endif; ?> 
            <?php if (get_sub_field('feature_text_post')) : ?>
			  <?php the_sub_field('feature_text_post') ?>
			  <?php endif; ?>
          </div>
          <div class="features-posts-item">
             <?php if (get_sub_field('feature_post_image')) : ?>
                <?php echo wp_get_attachment_image( $feature_post_image, 'full' ); ?>
                <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
</section>
<?php require_once('sections/faq-section.php');?>  
    