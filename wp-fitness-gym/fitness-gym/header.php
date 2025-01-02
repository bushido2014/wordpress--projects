<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evolve
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fitness-gym' ); ?></a>

	
	<header id="masthead" class="site-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Evolve.png');">	
			
		
		

		<nav id="site-navigation" class="main-navigation">
			<div class="container">
			<div class="site-branding">
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
			$fitness_gym_description = get_bloginfo( 'description', 'display' );
			if ( $fitness_gym_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fitness_gym_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->	
<!-- 			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fitness-gym' ); ?></button> -->
				<a href="#mobile-navigation"> <div class="hamburger">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
				</div></a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'    => 'nav-menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<?php
if ( has_nav_menu( 'mobile-menu' ) ) {
    wp_nav_menu( array(
        'theme_location' => 'mobile-menu',
        'menu_id'        => 'mobile-menu',
        'container'      => 'nav',
        'container_class'=> 'mobile-nav',
    ) );
}
?>
			</div>
		</nav><!-- #site-navigation -->
	<section class="claim">
		<div class="container">
			
		
			<div class="claim-wrapper flex" >
				<div class="claim-button">
					<a class="button" href="#"><?php echo carbon_get_theme_option('crb_text_button'); ?></a>
				</div>
				
			</div>
	
		<div class="claim-list-wrapper flex">
			<?php 
	$crb_list = carbon_get_theme_option( 'crb_list' );
	if ( ! empty( $crb_list ) ): ?>
	<?php foreach ( $crb_list as $c_list ): ?>		
			<div class="claim-list__item flex">
				<?php echo wp_get_attachment_image( $c_list['image_list'], 'full'); ?>
				<span><?php echo $c_list['title_list']; ?></span>
			</div>
			<?php endforeach; ?>
<?php endif; ?>
	    </div>
			</div>
</section>		
		
	</header><!-- #masthead -->
