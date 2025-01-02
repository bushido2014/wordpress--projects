<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evolve
 */

?>

	<footer id="colophon" class="footer">
		<div class="container">
			<div class="footer-wrapper flex">
				<div class="footer-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a>
				</div>
				<div class="footer-content">
					<div class="footer-nav">
						<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
					</div>
				<div class="footer-icons">
    <?php 
    $social_links = carbon_get_theme_option( 'social_links' );
    if ( ! empty( $social_links) ): ?>
        <?php foreach ( $social_links as $s_link ): ?>
            <a href="<?php echo esc_url($s_link['social_link']); ?>">
                <span class="social-icon">
                    <?php echo wp_get_attachment_image( $s_link['social_link_image'], 'full'); ?>
                </span>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>    
</div>
				</div>
			</div>
			<div class="footer-line">
				<div>
					<span>getoutlined.com</span>
				</div>
				<div>
					<a href="#">Privacy & Policy</a>
					<a href="#">Terms & Conditions</a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
