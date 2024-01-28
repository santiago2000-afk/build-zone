<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BuildZone
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'build-zone' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row">
				<nav class="col-12 navbar navbar-expand-md main-navigation" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

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
						$build_zone_description = get_bloginfo( 'description', 'display' );
						if ( $build_zone_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $build_zone_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<?php
						wp_nav_menu( array(
							'theme_location'    => 'menu-1',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => 'WP_Bootstrap_Navwalker',
						));
					?>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->
