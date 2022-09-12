<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Is_theme_flc
 */
    global $post;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?> /css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?> /css/awesome/awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?> /css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?> /css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?> /css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?> /css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?> /css/responsive.css">

    <!-- JS -->
    <script src="<?php bloginfo('template_directory') ?> /js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?> /js/lib/popper.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?> /js/lib/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?> /js/lib/wow.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?> /js/lib/owl.carousel.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?> /js/lib/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?> /http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?> /http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?> /js/main.js" type="text/javascript"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Header -->
<header id="header" class="header">
        <div class="container-fluid no-padding">
            <nav class="navbar navbar-expand-lg navbar-light clearfix">
                    <!-- Navbar Left -->
                    <div class="nav-left d-none d-lg-block wow fadeInLeft" id="nav-left">
                        <!-- Logo -->
                            <a class="navbar-brand" href="#">
                                <img src="<?php bloginfo('template_directory') ?> /images/logo.png" alt="FLC tropical">
                            </a>
                        <!-- End Logo -->
                    </div>
                    <!-- End Navbar Left -->

                    <!-- Navbar Right -->
                    <!-- <div class="nav-right d-none d-lg-block wow fadeInDown" id="nav-right">
                        <ul class="navbar-nav">
                            <li class="nav-item first">
                                <a class="nav-link" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section-tongthe">Mặt bằng phân khu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section-tienich">Tiện ích nội khu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chính sách bán hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section-news">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#footer">Liên hệ</a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- End Navbar Right -->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                            'menu_class' => 'navbar-nav',
                            'add_li_class' => 'nav-item',
                            'container_class' => 'nav-right',
                        )
                    )
                    ?>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMainMenu" aria-controls="navbarMainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Navbar Show Mobile -->
                    <!-- <div class="collapse d-lg-none" id="navbarMainMenu">
                        <i class="fas fa-times-circle close"></i>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section-tongthe">Mặt bằng phân khu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section-tienich">Tiện ích nội khu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chính sách bán hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section-news">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#footer">Liên hệ</a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- End Navbar Show Mobile -->
            </nav>
        </div>
    </header>
