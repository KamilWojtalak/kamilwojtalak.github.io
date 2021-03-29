<!-- WYŁAĆZ DEBUG -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <meta name="robots" content="index,follow" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://esperalkatowice.pl<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <title><?php echo bloginfo( 'name' );?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" href="/img/logo.png" sizes="64x64" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalBusiness",
            "name": "Esperal Katowice - wszywka alkoholowa",
            "image": "https://esperalkatowice.pl/img/logo.png",
            "url": "https://esperalkatowice.pl/",
            "description": "Implantacja esperalu to metoda pomocnicza, umożliwiająca skuteczną walkę z uzależnieniem alkoholowym. Zapraszamy.",
            "telephone": "+48 578 016 964",
            "priceRange": "$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "ul. Mickiewicza 21",
                "postalCode": "40-085",
                "addressLocality": "Katowice",
                "addressRegion": "Śląskie",
                "addressCountry": "PL"
            }
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180813037-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-180813037-1');
    </script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="content">
            <!-- Added div || Removed Float -->
            <div class="">
                <figure>
                    <img src="/img/logo.png" alt="">
                </figure>
                <div class="left">
                    <a href="/">
                        <span>Esperal Katowice</span>
                    </a>
                </div>
            </div>
            <div id="mobile-menu">
                <img alt="menu" src="/img/menu.png">
            </div>
            <nav>
                <a href="/o-nas/">O nas</a>
                <!-- <a href="/uslugi/">Usługi</a> -->
                <a href="/oferta/">Oferta</a>
                <a href="/cennik/">Cennik</a>
                <a href="/faq/">FAQ</a>
                <a href="/blog/">Blog</a>
                <a href="/kontakt/">Kontakt</a>
                <a id="fast-contact" href="tel:+48578016964">+48 578 016 964</a>
            </nav>
        </div>
    </header>
