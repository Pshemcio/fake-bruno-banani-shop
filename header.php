<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Shop_Theme
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
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'my-shop-theme' ); ?></a>

        <header id="masthead" class="site-header js-desktop-shrink">

            <button id="js-burger" class="burger" aria-controls="primary-menu" aria-expanded="false">
                <span class="burger__inner"></span>
            </button>


            <a href="/" class="site-branding">

            </a><!-- .site-branding -->

            <!-- <div class="site-branding">
                <?php
			// the_custom_logo();
			?>
            </div> -->

            <div class="site-header__addons">
                <button id="js-search-bar" class="site-header__addon site-header__addon--search">
                    <i class="fas fa-search"></i>
                </button>

                <button id="js-mini-cart" class="site-header__addon site-header__addon--cart">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <div class="widget_shopping_cart_content">
                <?php woocommerce_mini_cart(); ?>
            </div>

            <div class="search-bar">
                <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						)
					);
				?>

                <ul class="site-navigation__icons">
                    <li class="site-navigation__icon">
                        <a href="/moje-konto">
                            <i class="fas fa-user"></i>
                            Konto
                        </a>
                    </li>
                    <li class="site-navigation__icon">
                        <a href="/koszyk">
                            <i class="fas fa-shopping-cart"></i>
                            Koszyk
                        </a>
                    </li>
                    <li class="site-navigation__icon">
                        <a href="/kontakt">
                            <i class="fas fa-phone"></i>
                            Kontakt
                        </a>
                    </li>
                </ul>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->