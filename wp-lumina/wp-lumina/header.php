<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-lumina
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-lumina' ); ?></a>

	<header id="masthead" class="site-header">
           <div class="container flex">
		<div class="site-branding flex">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$wp_lumina_description = get_bloginfo( 'description', 'display' );
			if ( $wp_lumina_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wp_lumina_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
            <a href="#mobile-navigation" class="hamburger-link">
                     <div class="hamburger">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
				    </div>
                </a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		<?php
if ( has_nav_menu( 'mobile-menu' ) ) {
    wp_nav_menu( array(
        'theme_location' => 'mobile-menu',
        'menu_id'        => 'mobile-menu',
        'container'      => 'div',
        'container_class'=> 'mob-nav',
    ) );
}
?>
		</nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->
