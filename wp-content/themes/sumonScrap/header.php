<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Sumon_Scrap
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <title><?php //echo get_bloginfo('name');  
        echo ['MyBlogTitle'];
        ?> </title>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,600,700,700i" rel="stylesheet"> 
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Base CSS -->
        <link rel="stylesheet" href="css/base.css">
    </head>
    <body>

        <header>
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-12 order-12 col-md-6 order-md-1">
                        <a class="navbar-brand" href="#">
                            <img class="img-fluid" src="img/logo.png" width="370" alt="Logo">
                        </a>
                    </div>
                    <div class="col-12 order-1 col-md-6 order-md-12">
                        <div class="phone float-md-right">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>704-872-5557</span>
                        </div>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mb-3">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav text-md-center nav-justified w-100">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="#">Lounge</a>
                                    <a class="dropdown-item" href="#">Risto’s Menu</a>
                                    <a class="dropdown-item" href="#">Catering</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Event Calendar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News & Posts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Usssss</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <h3>I am header</h3>
        </header>

