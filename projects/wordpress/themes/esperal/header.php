<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://esperalkatowice.pl<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <?php
    $title = '';
    $desc = '';
    switch ($_SERVER['REQUEST_URI']) {
        case '/':
            $title = 'Esperal Katowice | Wszywka alkoholowa Śląsk | cena 499zł';
            $desc = 'Wszywka alkoholowa Esperal to skuteczna metoda w walce z alkoholizmem. Zapraszamy wszystkich ze Śląska do naszego gabinetu w Katowicach.';
            break;
        case '/oferta/':
            $title = 'Oferta - Esperal Katowice, wszywka alkoholowa';
            $desc = 'Zapoznaj się z naszą ofertą. Oferujemy najlepszą metodę na wyjście z nałogu alkoholowego.';
            break;
        case '/o-nas/':
            $title = 'Oferta - Esperal Katowice, wszywka alkoholowa';
            $desc = 'Zapoznaj się z naszą ofertą. Oferujemy najlepszą metodę na wyjście z nałogu alkoholowego.';
            break;
        case '/faq/':
            $title = 'FAQ - FAQ';
            $desc = 'Esperal Katowice, odpowiedzi na najczęściej zadawane pytania.';
            break;
        case '/blog/':
            $title = 'Blog - Esperal Katowice, wszywka alkoholowa';
            $desc = 'Przeczytaj arytkuły na temat naszych działań. Poznaj nas lepiej. Zdobądź wiedzę na temat wszywki alkoholowej.';
            break;
        // case '/uslugi/':
        //     $title = 'Usługi - Esperal Katowice, wszywka alkoholowa';
        //     $desc = 'Zapoznaj się z naszą ofertą. Oferujemy najlepszą metodę na wyjście z nałogu alkoholowego.';
        //     break;
        case '/kontakt/':
            $title = 'Kontakt - Esperal Katowice, wszywka alkoholowa';
            $desc = 'Jesteś zainteresowany naszą ofertą? Zapraszamy do naszego gabinetu w centrum Katowic';
            break;
        case '/cennik/':
            $title = 'Cennik - Esperal Katowice, wszywka alkoholowa';
            $desc = 'Oferujemy niską cenę za wszywkę alkohową Esperal. Zapraszamy do naszego gabinetu w centrum Katowic.';
            break;
        case '/esperal-wszywka-alkoholowa-czestochowa/':
            $title = 'Esperal Częstochowa - oryginalne wszywki alkoholowe';
            $desc = 'Profesjonalny i bezbolesny zabieg wszycia wszywki alkoholowej Esperal. Zapraszamy chętnych z Częstochowy i okolic. Gwarantujemy pełną anonimowość.';
            break;
        case '/esperal-gliwice-zabrze-bytom-tychy/':
            $title = 'Esperal Gliwice - Zabrze - Bytom - Tychy - anonimowy zabieg';
            $desc = 'Zabieg wykonywany jest w miastak takich jak: Gliwice, Zabrze, Bytom czy Tychy. Oferujemy oryginale wszywki Esperal, oraz pełna anonimowość';
            break;
        case '/esperal-bielsko-biala-oswiecim/':
            $title = 'Esperal Bielsko-Biała - Oświęcim - w pełni bezpieczny zabieg';
            $desc = 'Oferujemy zabiego wszycia wszywki alkoholowej Esperal na terenie Bielsko-Białej i Oświęcimia. Zaszycie Esperalem jest w pełni bezpiecznym zabiegiem';
            break;
        case '/esperal-ruda-slaska-rybnik-dabrowa-gornicza/':
            $title = 'Esperal Ruda Śląska - Rybnik - Dąbrowa Górnicza';
            $desc = 'Przeprowadzenie zabiegu wszycia wszywki alkoholowej Esperal jest w pełni bezbolesne. Zapraszamy chętnych z Rudy Śląskiej, Rybnika i Dąbrowy Górniczej.';
            break;
        case '/esperal-chorzow-jaworzno-jastrzebie-zdroj/':
            $title = 'Esperal Chorzów - Jaworzno - Jastrzębie-Zdrój - wszywka alkoholowa';
            $desc = 'W naszej ofercie jest profesjonalny zabieg oryginalą wszywką alkoholową Esperal. Zapraszamy chętnych z miast: Chorzów, Jaworzno, Jastrzębie-Zdrój.';
            break;
        case '/esperal-myslowice-siemanowice-slaskie-zory/':
            $title = 'Esperal Mysłowice - Siemanowice Śląskie - Żory';
            $desc = 'Przeprowadzamy profesjonalny zabieg wszycia wszywki alkoholowej Esperal. Zapraszamy chętnych z miast: Mysłowice, Siemanowice Śląśkie, Żory.';
            break;
        case '/esperal-piekary-slaskie-swietochlowice/':
            $title = 'Esperal Piekary Śląskie - Świętochłowice';
            $desc = 'Zaszycie się wszywką alkoholową Esperal to sprawdzony i skuteczny sposób na walke z alkoholizmem. Zapraszamy chętnych z miast: Piekary Śląskie, Świetochłowice.';
            break;
        default:
            $title = 'Esperal Katowice, wszywka alkoholowa - oryginalny, cena 499 zł, śląskie';
            $desc = 'Implementacja wszywki alkoholowej Esperal to skuteczna metoda w walce z alkoholizmem. Nasza klinika znajduję się w Katowicach.';
    }
    ?>
    <meta name="description" content="<?php echo $desc; ?>" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
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

    <!-- FAQ Script -->
    <script src="/js/faq.js" defer></script>

</head>

<body>
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
