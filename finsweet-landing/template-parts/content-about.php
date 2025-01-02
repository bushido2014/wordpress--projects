<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package finsweetwp
 */

?>
<section class="about-us">
      <div class="container">
        <div class="about-us-wrapper grid">
          <div>
            <span><?php the_field('about_before_span'); ?></span>
            <h1><?php the_field('about_title'); ?></h1>
            <?php the_field('about_text'); ?>
          </div>
          <div>			  
<?php 
$imageAbout = get_field('about_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $imageAbout ) {
    echo wp_get_attachment_image( $imageAbout, $size );
};?>			  
          </div>
        </div>
      </div>
    </section>
    <section class="about-company">
      <div class="container">
        <div class="about-company-wrapper">
          <div class="grid about-company_columns">
            <div class="about-company_column-left">
              <div class="margin-bottom">
                <h2 class="head-medium"><?php the_field('about_title_left'); ?></h2>
              </div>
              <?php the_field('about_text_left'); ?>
            </div>
            <div class="about-company_column-right">
              <div class="margin-bottom">
                <h2 class="head-medium"><?php the_field('about_title_right'); ?></h2>
              </div>
              <?php the_field('about_text_right'); ?>
             
            </div>
          </div>
        </div>
        <div class="about-company-img">
          <?php 
$imgcompany = get_field('about_company_img');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $imgcompany ) {
    echo wp_get_attachment_image( $imgcompany, $size );
};?>
        </div>
      </div>
    </section>
    <section class="process">
      <div class="container">
        <div class="section-title margin-bottom">
          <h2>The process we follow</h2>
        </div>
		  
        <div class="process-wrapper grid margin-top">
		
<?php if (have_rows("proccess")) : ?>
    <?php while (have_rows("proccess")) : the_row(); 
     
         
          ?>			
			
          <div class="process_item">
            <div class="process_connect-wrapp">
              <div class="process_circle"></div>
              <div class="process_connect-line"></div>
            </div>
            <div class="margin-bottom">
				 <?php if (get_sub_field('proccess_title')) : ?>
              <h3 class="head-small"><?php the_sub_field("proccess_title") ?></h3>
				<?php endif; ?> 
            </div>
            <?php if (get_sub_field('proccess_text')) : ?>
                    <?php the_sub_field("proccess_text") ?>
                <?php endif; ?>
          </div>
<?php endwhile; ?>
<?php endif; ?>			

        </div>
      </div>
    </section>
    <section class="mission">
      <div class="container">
		  <?php if (have_rows("mission")) : ?>
    <?php while (have_rows("mission")) : the_row(); 
     
          $img_mission = get_sub_field('mission_image');
          ?>
        <div class="mission-wrapper grid">
          <div class="mission-content">
            <div class="margin-bottom">
				<?php if (get_sub_field('mission_before')) : ?>
              <div><?php the_sub_field("mission_before") ?></div>
				<?php endif; ?> 
               <?php if (get_sub_field('mission_title')) : ?>
              <h2 class="head-medium"><?php the_sub_field("mission_title") ?></h2>
				<?php endif; ?> 
            </div>
            <?php if (get_sub_field('mission_text')) : ?>
			  <?php the_sub_field("mission_text") ?>
			  <?php endif; ?> 
          </div>
          <div class="mission-image">
            <?php if (get_sub_field('mission_image')) : ?>
                <?php echo wp_get_attachment_image( $img_mission, 'full' ); ?>
                <?php endif; ?>
          </div>
        </div>
		  
<?php endwhile; ?>
<?php endif; ?>

      </div>
    </section>
    <?php require_once('sections/benefits-section.php');?>
    <?php require_once('sections/brands-section.php');?>    
 <section class="team">
      <div class="container">
        <div class="section-title margin-bottom"><h2>Meet our team</h2></div>
        <div class="team-wrapper grid">
  	<?php if (have_rows("team")) : ?>
    <?php while (have_rows("team")) : the_row(); 
     
          $team_image = get_sub_field('team_image');
		 
          ?>
			
          <div class="team_item flex">
            <div class="team_img_wrapp">
              <?php if (get_sub_field('team_image')) : ?>
                <?php echo wp_get_attachment_image( $team_image, 'full' ); ?>
                <?php endif; ?>
              <div class="team_item-overlay">
                <div class="team_social-icons-wrapp grid">
					
					<?php if (have_rows("team_social")) : ?>
    <?php while (have_rows("team_social")) : the_row(); 
          $team_social_image = get_sub_field('team_social_image');
          ?>
					
                  <a href="<?php the_sub_field("team_social_link") ?>" target="_blank" class="social-link">
                    <div class="team_social-icon">
                      <?php if (get_sub_field('team_social_image')) : ?>
                <?php echo wp_get_attachment_image( $team_social_image, 'full' ); ?>
                <?php endif; ?>
                    </div>
                  </a>
                 <?php endwhile; ?>
                <?php endif; ?>

                  
                </div>
              </div>
            </div>
            <div class="margin-top">
				<?php if (get_sub_field('team_name')) : ?>
			  <h3 class="head-small"> <?php the_sub_field("team_name") ?></h3>
			  <?php endif; ?> 
         
            </div>
			  <?php if (get_sub_field('team_job')) : ?>
            <div class="ceo"><?php the_sub_field("team_job") ?></div>
			   <?php endif; ?> 
          </div>


			  	<?php endwhile; ?>
                <?php endif; ?>



			
			
			
			
        </div>
      </div>
    </section>    