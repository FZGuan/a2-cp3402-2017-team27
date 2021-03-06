<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toomby
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="header-area full">
        <div class="main-page">
	        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'toomby' ); ?></a>

	        <header id="masthead" class="site-header inner" role="banner">
		        <div class="site-branding">
			        <?php
			        if ( is_front_page() && is_home() ) : ?>
				        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			        <?php else : ?>
				        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			        <?php
			        endif;

			        $description = get_bloginfo( 'description', 'display' );
			        if ( $description || is_customize_preview() ) : ?>
				        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			        <?php
			        endif; ?>
		        </div><!-- .site-branding -->

                <?php $header_image = get_header_image();
                if ( ! empty( $header_image ) ) { ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
                    </a>
                <?php } // if ( ! empty( $header_image ) )
                ?>

		        <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'toomby' ); ?></button>
			        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		        </nav><!-- #site-navigation -->

	        </header><!-- #masthead -->
        </div>
    </div>

    <div class="main-content-area full">
        <div class="main-page">
	        <div id="content" class="site-content inner">
