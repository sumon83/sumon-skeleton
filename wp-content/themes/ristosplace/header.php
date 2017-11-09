<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything inside <header>
 *
 * @subpackage Ristos_Place
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Zilla+Slab:300,400,500,600,600i,700,700i" rel="stylesheet"> 
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 order-12 col-md-6 order-md-1">                        
                        <a class="navbar-brand" href="<?php echo site_url(); ?>">
                            <?php
                            if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            }
                            ?>
                        </a>
                    </div>
                    <div class="col-12 order-1 col-md-6 order-md-12">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <div class="phone float-md-right">
                                    <p>Reservations: <span>704-872-5557</span></p>
                                    <p>Private Parties: <span>704-761-4445</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="social-icons float-md-right">
                                    <ul>
                                        <li>
                                            <a class="btn btn-social-icon btn-facebook btn-xs" href="https://www.facebook.com/RistosPlace" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="btn btn-social-icon btn-twitter btn-xs" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_template_part('template-parts/header/header', 'image'); ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <?php
                        if (has_nav_menu('header_menu')) :
                            wp_nav_menu(
                                    array(
                                        'menu' => '', 
                                        //'container' => 'div', 
                                        'container' => 'nav', 
                                        'container_class' => '', 
                                        'container_id' => '', 
                                        //'menu_class' => 'menu', 
                                        'menu_class' => 'navbar-nav text-md-center nav-justified w-100', 
                                        'menu_id' => '',
                                        'echo' => true, 
                                        //'fallback_cb' => 'wp_page_menu', 
                                        'fallback_cb' => 'ZWS_Bootstrap_Navwalker::buildmenu',
                                        'before' => '', 
                                        'after' => '', 
                                        'link_before' => '', 
                                        'link_after' => '', 
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
                                        'item_spacing' => 'preserve',
                                        'depth' => 0, 
                                        //'walker' => '', 
                                        'walker' => new ZWS_Bootstrap_Navwalker(),
                                        'theme_location' => '',
                                        //'theme_location' => 'header_menu',
                                    )
                            );
                            ?>
                        </div>
                    </div>
                </nav>
            <?php endif; ?>

        </header>