<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Killion\'s_Website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/f94f2c669e.js"></script>
	<script src="https://pixel.fasttony.es/929208753821577/" async defer></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'killions-website' ); ?></a>

<header id="masthead" class="header site-header no-select">
    <div class="header__blue"></div>
    <div class="wrapper80 header__navigation_wrapper">
        <div class="header__title_area wrapper80">
            <h1 class="header__title_h1">
                killion munyama
            </h1>
            <img src="<?php echo get_template_directory_uri()?>/images/menu.png" alt="Menu Responsive" class="header__menu">
        </div>

        <nav class="header__navigation">
            <ul class="header__navigation__list">
                <li class="header__navigation__item"><a href="#o-mnie" class="header__navigation__link">o mnie</a></li>
                <li class="header__navigation__item"><a href="#program" class="header__navigation__link">wybory</a></li>
                <li class="header__navigation__item"><a href="#spotkaj-killiona" class="header__navigation__link">spotkaj killiona</a></li>
                <li class="header__navigation__item"><a href="#killion-w-mediach" class="header__navigation__link">killion w mediach</a></li>
            </ul>
        </nav>
    </div>
</header><!-- #masthead -->


