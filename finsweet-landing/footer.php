<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finsweetwp
 */

?>

	<footer class="footer">
      <div class="footer-top">
        <div class="container grid">
          <div class="footer-top__info">
            <div>
              <a href="/">
				
				  <?php 
$logo_footer = get_field('logo_footer', 'option');
if( !empty( $logo_footer ) ): ?>
	<img src="<?php echo $logo_footer;?>" />			  
<?php endif; ?>
				</a>
				
            </div>
            <div class="margin-top margin-bottom">
              <?php the_field('sub_logo_text', 'option'); ?>
            </div>
            <div class="footer-contact flex">
              <div class="footer-contact_content-left">
                <div>
                  <div class="contact-text"><?php the_field('email_title', 'option'); ?></div>
                </div>
                <a href="mailto:contact@website.com?subject=Project"
                  ><?php the_field('email_text', 'option'); ?></a>
              </div>
              <div class="footer-contact_content-right">
                <div>
                  <div class="contact-text"><?php the_field('phone_title', 'option'); ?></div>
                </div>
                <a href="tel:0927627728525"><?php the_field('phone_number', 'option'); ?></a>
              </div>
            </div>
          </div>
          <div class="footer-top__talk">
            <div class="footer_content">
              <div class="margin-bottom">
                <h2 class="text-color-white"><?php the_field('footer_left_title', 'option'); ?></h2>
              </div>
              <div class="margin-bottom">
                <p class="text-style-light">
                  <?php the_field('footer_left_text', 'option'); ?>
                </p>
              </div>
              <div class="footer_social-icons-wrapper">
				  <?php if (have_rows("social_links","option")) : ?>
    <?php while (have_rows("social_links","option")) : the_row(); 
				  $social_image = get_sub_field('social_image');?>
				  <a href="<?php the_sub_field("social_link") ?>" target="_blank"
                  class="social-link">
					  <div class="social-icon w-embed">
						  <?php if (get_sub_field('social_image')) : ?>
                <?php echo wp_get_attachment_image( $social_image, 'full social-icon' ); ?>
                <?php endif; ?>
					  </div>
				  </a>
				  
				  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="footer_bottom-links-wrapper flex">
            <div>Copyright 2022 Wordpress Finsweet</div>
            <nav>
              <nav role="navigation" class="nav">
              <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
              </nav>
            </nav>
          </div>
        </div>
      </div>
    </footer>
</div><!-- #page -->




<?php wp_footer(); ?>

<div id="dialog-content">
      <h3>Send an inquiry</h3>
       <?php echo do_shortcode('[contact-form-7 id="164"]');?>
</div>


</body>
</html>
