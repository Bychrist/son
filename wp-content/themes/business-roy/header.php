<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business Roy
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

<div id="page" class="site">

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'business-roy' ); ?></a>

    <header id="masthead" class="site-header">

        <div class="nav-classic">
            <div class="container">
                <div class="row ">

                    <div class="col-lg-3 col-md-12">
                         <div class="site-branding">

                            <?php the_custom_logo(); ?>

                            <h1 class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <?php bloginfo( 'name' ); ?>
                                </a>
                            </h1>
                            <?php 
                                $businessroy_description = get_bloginfo( 'description', 'display' );
                                if ( $businessroy_description || is_customize_preview() ) :?>
                                    <p class="site-description"><?php echo $businessroy_description; /* WPCS: xss ok. */ ?></p>
                            <?php endif; ?>                 
                        </div> <!-- .site-branding -->

                        <button class="header-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                            <div class="one"></div>
                            <div class="two"></div>
                            <div class="three"></div>
                        </button><!-- .nav-toggle -->

                    </div><!-- Col end -->
                    
                    <div class="col-lg-9 col-md-12 text-right">

                        <nav id="site-navigation" class="box-header-nav main-menu-wapper main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'business-roy' ); ?>">
                            <?php
                                wp_nav_menu( array(
                                        'theme_location'  => 'menu-1',
                                        'menu'            => 'primary-menu',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => 'main-menu',
                                    )
                                );
                            ?>
                        </nav>
                    </div>

                </div><!-- .row end -->
            </div><!-- .container end -->
        </div>

    </header><!-- #masthead --> 


<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">
    <div class="menu-modal-inner modal-inner">
        <div class="menu-wrapper section-inner">
            <div class="menu-top">

                <button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
                    <span class="toggle-text"><?php esc_html_e( 'Close Menu', 'business-roy' ); ?></span>
                    <i class="fas fa-times"></i>
                </button><!-- .nav-toggle -->

                <nav class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'business-roy' ); ?>" role="navigation">
                    <ul class="modal-menu">
                        <?php
                            if ( has_nav_menu( 'menu-1' ) ) {

                                wp_nav_menu(
                                    array(
                                        'container'      => '',
                                        'items_wrap'     => '%3$s',
                                        'show_toggles'   => true,
                                        'theme_location' => 'menu-1',
                                    )
                                );

                            } else {

                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_toggles'       => true,
                                        'title_li'           => false,
                                        'walker'             => new Bussiness_Roy_Walker_Page(),
                                    )
                                );

                            }
                        ?>
                    </ul>
                </nav>

            </div><!-- .menu-top -->
        </div><!-- .menu-wrapper -->
    </div><!-- .menu-modal-inner -->
</div><!-- .menu-modal -->   


<?php
	if( is_front_page() ){ 
		/**
	     * Hook -  businessroy_action_banner_slider
	     *
	     * @hooked businessroy_banner_slider - 25
	     */

	    do_action('businessroy_action_banner_slider');
	}

    $breadcrumbs_enable = get_theme_mod('businessroy_enable_breadcrumbs', 'enable');

    if ($breadcrumbs_enable == 'enable') {

        if (!is_front_page() || !is_home()) {
            /**
             * @hook businessroy_breadcrumbs.
             *
             * @hooked businessroy_breadcrumbs.
             *
             */
            do_action('businessroy_breadcrumbs');
        }
    }
?>

	<div id="content" class="site-content">
