<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finsweetwp
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'finsweetwp' ); ?></a>

	<header id="masthead" class="header">
		
		<div class="container nav-container">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$finsweetwp_description = get_bloginfo( 'description', 'display' );
			if ( $finsweetwp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $finsweetwp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		  <div class="nav-mobile">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>

		<nav id="site-navigation" class="nav">
		
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			 <div class="nav-button-wrapp">
            <a
              href="#"
              target="_blank"
              class="button-nav"
              data-fancybox
              data-src="#dialog-content"
              >Contact Us</a
            >
          </div>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
