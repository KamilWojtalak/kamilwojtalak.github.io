<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo( 'name' );?></title>

    <?php
        wp_head();
    ?>
</head>
<body>

<?php
if ( is_home() ) {
    echo "<br>";
    echo "Homepage!";
} else if ( is_admin() ) {
    echo "<br>";
    echo "Admin page";
}  else if ( is_single() ) {
    echo "<br>";
    echo "Single page";
} else if ( is_page_template() ) {
    echo "<br>";
    echo "Page template ";
} else if ( is_category() ) {
    echo "<br>";
    echo "Category page";
} else if ( is_tag() ) {
    echo "<br>";
    echo "Tag page";
} else if ( is_author() ) {
    echo "<br>";
    echo "Author page";
} else if ( is_search() ) {
    echo "<br>";
    echo "Search page";
} else if ( is_front_page() ) {
    echo "<br>";
    echo "Front page";
} else if ( is_404() ) {
    echo "<br>";
    echo "Error page";
} else {
    echo "<br>";
    echo "Undefined Page";
}
?>

<nav class="nav">
    <div class="nav__container">
        <a href="<?php echo get_home_url(); ?>" class="nav__home">Custom</a>
        <div class="nav__hamburger"></div>
        <ul class="nav__menu">
            <li class="menu__item"><a href="about-us/" class="item__link">
                About us
            </a></li>
            <li class="menu__item"><a href="services/" class="item__link">
                Services
            </a></li>
            <li class="menu__item"><a href="blog/" class="item__link">
                Blog
            </a></li>
            <li class="menu__item"><a href="contact/" class="item__link">
                Contact
            </a></li>
        </ul>
    </div>
</nav>