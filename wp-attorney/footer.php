<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_attorney
 */

?>
  
      <footer class="footer">
        <div class="container">
          <div class="footer-top flex">
            <div class="footer-sep-left"></div>
            <div class="footer-logo">
				<div class="footer-logo-wrapp flex">
					<?php $logo_footer_img = get_field('logo_footer', 'option');
               if( !empty( $logo_footer_img ) ): ?>
	              <img src="<?php echo $logo_footer_img;?>" />			  
               <?php endif; ?>
					<span><?php the_field('logo_footer_title', 'option'); ?></span>
				</div>
			  </div>
            <div class="footer-sep-right"></div>
          </div>
          <div class="footer-widget-wrapp grid">
            <div class="footer-widget">
               <div class="footer-widget-title-wrapp">
                 <h3>Quick Link</h3>
               </div>
               <div class="footer-links-wrapp flex">
                 <div class="footer-links">
                 <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
                </div>
               </div>
            </div>
            <div class="footer-widget">
              <div class="footer-widget-title-wrapp">
                <h3>Categories</h3>
                
              </div>
              <div class="footer-links">
                 <ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
              </div>
            </div>
            <div class="footer-widget">
              <div class="footer-widget-title-wrapp">
                <h3>Practice Area</h3>
              </div>
              <div class="footer-links">
                  <ul>
                    <li><a href="/practice-areas/family-law/">Family Law</a></li>
                    <li><a href="/practice-areas/criminal-law/">Criminal Law</a></li>
                    <li><a href="practice-areas/construction-law/">Real Estate Law</a></li>
                    <li><a href="/practice-areas/business-law/">Business Law</a></li>
                  </ul>
               </div>
            </div>
            <div class="footer-widget">
              <div class="footer-widget-title-wrapp">
                <h3>Conatct Us</h3>
              </div>
              <div class="footer-contact">
                <?php the_field('footer_adress', 'option'); ?>
              </div>
              
            </div>
          </div>
          <div class="footer-bottom flex">
           <div class="footer-copyright">Copyright © Attorney </div>
           <div class="footer-social-links flex">
             <span>Folow:</span>
  <?php if (have_rows('social_links', 'option')) :
    while (have_rows('social_links', 'option')) :
      the_row();
      ?>
      <a href="<?php the_sub_field('social_link'); ?>" target="_blank">
        <img src="<?php the_sub_field('social_image'); ?>">
      </a>
    <?php endwhile;
  endif; ?>

           </div>
          </div>
        </div>
      </footer>
<?php wp_footer(); ?>

</body>
</html>
