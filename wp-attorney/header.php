<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_attorney
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp_attorney' ); ?></a>

	<header id="masthead" class="header">
		<div class="container">
			<div class="header__topline flex">
          <div class="header__logo flex">
            <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a>
				<?php
			else :
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a>
				<?php
			endif;
			$wp_attorney_description = get_bloginfo( 'description', 'display' );
			if ( $wp_attorney_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wp_attorney_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
          </div>
          <div class="header__btn">
            <a href="/contact" class="button">Book a Consultation</a>
          </div>
        </div>
		
		<div class="header__navigation flex">
          <nav class="navigation" role="navigation">
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
          </nav>
          <div class="header__contact flex">
            <div class="header__phone flex">
              <div class="header__icon">
                <?php $phone_img = get_field('phone_image', 'option');
               if( !empty( $phone_img ) ): ?>
	              <img src="<?php echo $phone_img;?>" />			  
               <?php endif; ?>
              </div>
              <div>
                <div class="header__text"><?php the_field('phone_title', 'option'); ?></div>
                <div><?php the_field('phone_text', 'option'); ?></div>
              </div>
            </div>
              <div class="header__email flex">
                <div class="header__icon">
					<?php $email_img = get_field('email_image', 'option');
               if( !empty( $email_img ) ): ?>
	              <img src="<?php echo $email_img;?>" />			  
               <?php endif; ?>
          
                </div>
                <div>
                  <div class="header__text"><?php the_field('email_title', 'option'); ?></div>
                  <div><?php the_field('email_text', 'option'); ?></div>
                </div>
              </div>
            </div>
        <div class="nav-mobile">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
          </div>
			

<?php
if (is_page(2)) : ?>
  <div class="header-content grid">
    <div class="header-content__text">
      <div class="sep"></div>
      <h1><?php the_field('home_title'); ?></h1>
      <?php the_field('home_text'); ?>
      <a href="/about" class="button button-yellow"><?php the_field('home_button_link'); ?></a>
    </div>
    <div class="header-content__img">
      <?php
      $home_img = get_field('home_image');
      if (!empty($home_img)) : ?>
        <img src="<?php echo $home_img['url']; ?>" />
      <?php endif; ?>
    </div>
  </div>
<?php else : ?>
  <div class="header__page-title">
    <?php
    if (is_post_type_archive('cases')) {
      post_type_archive_title('<h1>', '</h1>');
    } elseif (is_post_type_archive('practice_areas')) {
      post_type_archive_title('<h1>', '</h1>');
    } else {
      the_title('<h1>', '</h1>');
    }
    ?>
    <div class="sep-center"></div>
  </div>
<?php endif; ?>
			
			
			
      </div>
		</div>
	</header><!-- #masthead -->
