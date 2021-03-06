<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Killion Munyama</title>
    <link rel="stylesheet" href="<?php // echo get_template_directory_uri() ?>/style.css">
    
    <script src="https://kit.fontawesome.com/f94f2c669e.js"></script>

</head>
<body>

<?php
if(isset($_POST['submit'])){
    $to = ""; 
    $from = test_input($_POST['email']);
    $tel = test_input($_POST['tel']);
    $kod = test_input($_POST['kod']);
    $content = test_input($_POST['message']);
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = " Numer telefonu: " . $tel . " Kod Pocztowy: " . $kod . " Wiadomość: " . "\n\n" . $content;
    $message2 = "Here is a copy of your message: " . " Numer telefonu: " . $tel . " Kod Pocztowy: " . $kod . " Wiadomość: " . "\n\n" . $content;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    
?> 

<header id="masthead" class="header site-header no-select">
    <div class="header__blue"></div>
    <div class="wrapper80 header__navigation_wrapper">
        <div class="header__title_area wrapper80">
            <h1 class="header__title_h1">
                killion munyama
            </h1>
            <img src="<?php // echo get_template_directory_uri() ?>/images/menu.png" alt="Menu Responsive" class="header__menu lazyload"> 
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
</header>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="first-section section">
            <div class="first-section__first-part">
                <div class="first-part__bgimage">
                    <img class="first-part__image lazyload" src="<?php // echo get_template_directory_uri() ?>/images/FirstImage.png" alt="Kyllion">
                        <div class="first-part__form_wrapper">
                            <h2 class="first-section__header">"Zawsze Otwarty"</h2>
                            <form action="" class="first-part__form" method="post">
                                    <input type="tel" name="tel" required class="first-part__input" placeholder="NR TELEFONU*" title="Podaj numer telefonu" autofocus>
                                    <input type="text" name="kod" pattern="[0-9]{2}\-[0-9]{3}"  title="FORMAT XX-XXX" class="first-part__input" placeholder="KOD POCZTOWY">
                                    <input type="email" name="email" class="first-part__input" required placeholder="EMAIL*" title="Podaj email">
                                    <input type="text" name="message" class="first-part__input" required placeholder="WIADOMOŚĆ*" title="Wpisz wiadomość">
                                    <input type="submit" class="first-part__submit" name='submit' value="Wyślij">
                            </form>
                        </div>
                    </div>
                </div>
            <div class="first-section__second-part">
                <div class="first-part__bgimage">
                    <img class="second-part__image lazyload" src="<?php // echo get_template_directory_uri() ?>/images/FirstImage.jpg" alt="Kyllion"> 
                        <div class="second-part__number no-select">nr<span class="second-part__5">5</span></div>
                    </div>
                </div>
            </section>

            <!-- First Section Ended -->

            <!--  Second Section Started -->

            <section class="section no-select" id="o-mnie">
                <div class="section__first-part">
                    <ul class="first-part__list">
                        <li class="first-part__item"><a src="#section__second__part" class="first-section__link text-blue">samorządy </a></li>
                        <li class="first-part__item"><a src="#section__second__part" class="first-section__link text-blue">przedsiębiorczość</a></li>
                        <li class="first-part__item"><a src="#section__second__part" class="first-section__link text-blue">stosunki międzynarodowe</a></li>
                        <li class="first-part__item"><a src="#section__second__part" class="first-section__link text-blue">o mnie</a></li>
                    </ul>
                </div>
                <div class="section__second-part section__place-for-description" id='section__second__part'>
                    <img class="second-part__image lazyload" src="<?php // echo get_template_directory_uri() ?>/images/ThirdImage.jpg" alt="Kyllion">
                    <div class="description__container wrapper80"></div>
                      
                </div>
            </section>

            <!--  Second Section Ended -->

            <!--  Third Section Started -->

            <section class="section no-select" id="program">
                <div class="section__first-part">
                    <svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 764.17 842" style="enable-background:new 0 0 764.17 842;" xml:space="preserve">
                        <style type="text/css">
                        .st0{fill:#FFFFFF;stroke:#003063;stroke-miterlimit:20;}
                        .st1{fill:#FFFFFF;stroke:#003063;stroke-linejoin:round;stroke-miterlimit:20;}
                        .st2{fill:#FFFFFF;stroke:#003063;stroke-miterlimit:20;}
                        </style>
                        <a src="#program" xlink:title='Powiat złotowski' class="program__map map__powiat-zlotowski">
                            <polyline class="st0"  points="523.9,104.31 500.64,103.06 497.35,102.06 488.06,100.55 484.29,102.34 481.45,105.58 477.19,108.29 
                            465.12,106.26 462.34,103.42 462.49,98.14 453.51,98.88 450.64,101.22 448.36,101.9 445.7,94.96 443.37,87.22 439.5,81.2 
                            434.03,70.26 430.94,58.31 429.86,59.11 413.01,63.53 406.86,68.1 404.92,75.08 404.82,81.62 401,86.68 398.46,102.06 
                            396.09,104.81 391.39,106.6 387.63,109.81 384.76,113.51 380.5,117.65 375.37,118.51 359.97,118.76 354.81,119.63 350.58,121.88 
                            344.99,121.82 336.66,117.03 333.85,117.46 332.4,121.17 332.8,125.37 335.58,127.28 337.4,130.55 337.34,134.75 335.88,137.99 
                            341.75,153.03 346.38,155.87 353.73,163.93 357.43,164.92 361.14,167.76 364.84,169.67 368.08,171.12 375.06,171.21 378.67,180.6 
                            388.4,185.88 390.19,191.03 386.86,194.71 395,197.61 398.37,201.51 403.09,200.3 404.76,203.32 403.84,208.01 408.04,213.21 
                            409.25,218.79 408.75,223.49 404.02,225.56 403.94,230.7 402.59,235.39 406.82,239.3 414.52,238.98 422.16,243.37 425.96,247.28 
                            436.7,244.86 438.1,236.32 446.74,230.88 458.35,226.77 463.92,226.42 470.76,227.37 474.22,224.85 476,220.17 480.78,214.68 
                            485.96,211.76 494.1,211.02 499.68,210.24 503.97,209.45 505.29,206.9 507.52,200.51 512.26,198.44 518.3,194.67 522.24,188.74 
                            524.08,179.77 526.11,172.76 526.11,172.76 524.89,165.44 525.79,162.28 526.87,158.46 527.42,151.49 533.1,147.35 536.44,142.29 
                            543.01,138.18 547.74,133.58 553.29,118.79 549.34,119.59 542.36,118.11 539.98,114.92 529.95,105.33 523.9,104.31 "/>
                        </a> 
                        <a src="#program" xlink:title='Powiat pilski' class="program__map map__powiat-pilski">
                            <polyline class="st0" points="311.58,255.05 315.14,252.94 317.05,247.84 318.97,245.06 322.27,243.7 327.36,245.19 341.44,239.32 
                            347.12,232.87 350.02,226.85 353.36,221.75 360.43,217.65 364.13,217.71 368.3,220.12 371.05,223.88 373.86,222.99 375.31,219.28 
                            373.98,214.59 376.85,210.89 376.88,206.69 379.32,201.13 382.16,197.92 386.86,194.71 395,197.61 398.37,201.51 403.09,200.3 
                            404.76,203.32 403.84,208.01 408.04,213.21 409.12,218.21 408.75,223.49 404.02,225.56 403.94,230.7 402.59,235.39 406.82,239.3 
                            414.52,238.98 422.16,243.37 425.96,247.28 436.7,244.86 438.1,236.32 446.74,230.88 458.35,226.77 463.92,226.42 470.76,227.37 
                            474.22,224.85 476,220.17 480.78,214.68 485.96,211.76 494.1,211.02 503.97,209.45 505.29,206.9 507.52,200.51 512.74,198.14 
                            518.3,194.67 522.35,188.2 524.08,179.77 526.11,172.76 532.66,175.17 545.14,184.86 562.52,210.3 558.14,221.88 552.52,225.09 
                            545.05,225.43 536.62,227.19 534.21,232.74 538.84,234.69 539.59,248.21 546.01,255.78 547.33,260.47 543.57,261.8 541.65,266.43 
                            540.57,276.21 540.57,276.21 537.21,283.62 529.02,283.42 521.28,285.45 513.16,284.9 506.34,282.67 500.35,282.58 491.34,284.16 
                            480.62,285.72 471.2,286.01 461.76,288.02 452.75,289.17 446.3,291.65 438.56,293.68 430.84,294.85 419.73,293.84 411.61,293.29 
                            409.86,295.84 406.78,301.36 401.97,308.56 397.17,314.91 393.66,321.28 389.3,326.78 383.7,329.27 376.44,328.31 372.31,317.98 
                            375.84,310.33 373.8,303.45 367.9,296.95 370.51,293.99 375.22,293.63 378.67,291.97 379.18,285.98 379.7,279.57 385.76,274.95 
                            391.41,269.04 387.21,263.41 382.52,262.49 378.23,263.28 377.26,270.97 369.12,271.29 361.92,266.05 356.34,267.25 352.97,263.35 
                            345.28,262.38 340.09,266.16 329.01,263.01 320.5,259.46 311.58,255.05 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat chodzieski' class="program__map map__powiat-chodzieski">
                            <polyline class="st0" points="525.57,284.65 521.28,285.45 513.16,284.9 506.34,282.67 500.35,282.58 480.62,285.72 471.2,286.01 
                            461.76,288.02 452.75,289.17 446.3,291.65 438.56,293.68 430.84,294.85 422.81,294.2 411.61,293.29 405.69,303 402.19,308.23 
                            399.02,312.48 397.17,314.91 394.75,320.07 394.75,320.07 398.68,329.06 402.83,338.53 402.24,349.65 406.35,361.27 410.96,368.18 
                            422.05,370.91 428.4,376.13 436.85,383.53 444.99,382.79 452.27,382.47 460.41,382.16 468.08,384.41 471.12,381.45 467.78,375.41 
                            469.6,367.74 473.57,359.66 481.77,354.64 494.64,352.69 492.17,346.23 499.08,341.62 498.75,334.77 502.71,327.55 502.39,319.42 
                            502.12,308.71 508.55,307.95 516.25,308.06 521.89,303 526.66,298.79 526.32,292.37 525.57,284.65 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat czarnkowsko-trzcianecki' class="program__map map__powiat-czarnkowsko-trzcianecki">
                            <polyline class="st0" points="402.24,349.65 406.35,361.27 400.31,364.61 393.9,364.51 387.45,366.13 387.38,371.27 392.06,373.48 
                            392.83,379.48 397.04,383.82 402.1,389.03 406.29,395.93 404.09,399.76 399.31,404.82 397.12,408.64 394.87,416.31 392.65,421.85 
                            384.5,423.01 383.72,417.44 385.06,413.61 379.98,410.11 374.43,408.75 365.42,410.33 356.4,412.34 349.12,413.09 341.46,409.56 
                            332.06,408.57 325.58,413.18 321.77,410.13 325.7,404.2 318.49,399.81 312.1,398.01 306.53,397.93 305.14,406.04 298.7,406.81 
                            296.27,397.78 286.84,398.5 278.79,392.83 271.99,389.3 263.01,389.18 254.44,389.48 247.93,395.81 242.74,400.01 238.85,402.53 
                            235.36,407.18 231.85,412.7 227.62,409.64 221.19,409.98 210.56,402.5 211.28,400.11 208.35,392.67 207.98,387.45 201.56,378.19 
                            202.54,371.67 210.85,368.74 213.29,364.23 210.64,351.89 209.49,341.6 211.53,332.65 209.21,328.36 207.85,324.07 209.17,314.61 
                            209.83,301.04 213.19,296.84 216.34,290.79 218.16,285.17 231.1,289.98 236.19,292.85 246.41,295.32 254.81,295.45 260.89,293.69 
                            267.01,289.55 283.66,287.3 289.45,286.15 297.85,285.82 300.29,280.26 306.86,275.66 307.54,260.75 310.91,255.22 324.43,261.1 
                            340.09,266.16 345.28,262.38 352.97,263.35 356.34,267.25 361.92,266.05 369.12,271.29 377.26,270.97 378.23,263.28 382.52,262.49 
                            387.21,263.41 391.41,269.04 385.76,274.95 379.7,279.57 378.67,291.97 375.22,293.63 370.51,293.99 367.9,296.95 373.8,303.45 
                            375.84,310.33 372.31,317.98 372.31,317.98 372.31,317.98 372.31,317.98 372.31,317.98 372.31,317.98 372.31,317.98 372.31,317.98 
                            372.31,317.98 372.31,317.98 372.31,317.98 376.44,328.31 383.7,329.27 389.8,326.16 395.03,320.72 402.83,338.53 402.24,349.65 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat międzychodzki' class="program__map map__powiat-miedzychodzki">
                            <polyline class="st0" points="221.19,409.98 224.13,414.3 230.5,417.81 235.14,422.59 241.54,423.54 245.35,426.59 250.04,427.94 
                            254.74,428.43 259.43,429.36 264.15,429 266.21,434.59 270.86,438.51 275.57,438.57 278.05,444.17 284.01,446.83 293.41,447.82 
                            295.03,454.26 294.96,459.4 284.28,457.96 280.36,462.18 280.3,466.46 284.5,472.09 283.99,477.64 277.12,479.68 277.04,484.82 
                            271.87,487.31 271.78,493.73 266.14,499.21 262.26,501.3 262.17,507.29 251,510.55 246.85,501.08 239.6,499.26 233.61,499.6 
                            230.52,505.98 221.55,505 216.2,519.47 206.77,520.62 200.1,508.11 190.83,508.91 190.63,503.13 188.99,496.12 183,488.19 
                            182.26,479.02 181.02,472.91 180.25,467.69 180.25,467.69 180.25,467.69 180.25,467.69 173.8,460.19 172.26,447.5 168.83,443.11 
                            168.49,435.24 174.2,433.57 175.56,428.39 174.79,421.38 173.95,419.19 177.04,417.06 186.21,415.02 197.57,413.44 204.58,411.35 
                            209.46,406.19 210.56,402.5 221.19,409.98 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat szamotulski' class="program__map map__powiat-szamotulski">
                            <polyline class="st0" points="262.16,507.71 267.28,509.5 271.48,514.7 279.15,517.38 283.8,520.87 289.31,525.22 298.2,531.77 
                            304.13,536.14 308.4,536.63 308.3,543.47 314.79,538.86 318.6,541.48 316.79,548.73 320.56,554.35 329.55,554.05 333.01,551.53 
                            336.94,546.02 341.63,547.37 344.11,553.83 349.7,551.77 350.69,542.79 355.83,542.01 355.05,536.87 345.66,535.02 347.02,529.48 
                            358.16,529.21 357.4,521.92 362.65,514.29 370.11,501.56 367.61,496.39 370.64,494.29 375.77,494.36 380.05,494.85 381.26,499.58 
                            388.1,500.1 388.19,494.11 390.88,485.59 389.66,481.29 379.81,481.58 376.41,479.82 375.22,473.38 369.31,467.31 368.16,458.3 
                            364.79,454.4 363.59,448.39 360.68,442.36 368.48,435.62 364.26,431.28 358.3,429.06 354.92,426.44 356.28,420.9 355.73,412.41 
                            349.12,413.09 341.8,409.71 332.06,408.57 325.58,413.18 321.77,410.13 325.7,404.2 318.49,399.81 312.1,398.01 306.53,397.93 
                            305.14,406.04 298.7,406.81 296.27,397.78 286.84,398.5 278.79,392.83 278.79,392.83 275.24,390.99 275.24,390.99 271.99,389.3 
                            254.44,389.48 247.93,395.81 242.74,400.01 238.85,402.53 231.85,412.7 227.62,409.64 221.19,409.98 224.13,414.3 230.5,417.81 
                            235.14,422.59 241.54,423.54 245.35,426.59 250.04,427.94 254.74,428.43 259.43,429.36 264.15,429 266.21,434.59 270.86,438.51 
                            275.57,438.57 278.05,444.17 284.01,446.83 293.49,448.13 295.03,454.26 294.96,459.4 284.28,457.96 280.36,462.18 280.3,466.46 
                            284.5,472.09 283.99,477.64 277.12,479.68 277.04,484.82 271.87,487.31 271.78,493.73 266.14,499.21 262.26,501.3 262.16,508.14 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat obornicki' class="program__map map__powiat-obornicki">
                            <polyline class="st0" points="389.66,481.29 396.51,480.96 397.7,487.4 400.62,492.58 404.06,491.77 403.73,484.49 408.92,480.71 
                            415.37,478.67 420.92,479.6 426.95,477.55 430.41,474.6 438.14,472.57 436.48,469.13 432.25,465.64 427.57,463.43 429.8,457.47 
                            433.66,457.1 435.89,450.71 443.59,450.82 448.34,447.9 455.26,442.86 461.69,442.09 465.59,439.15 471.15,439.23 478.01,438.48 
                            480.52,442.36 483.92,443.7 486.11,440.3 483.63,434.28 480.78,424.39 485.94,422.33 484.32,416.31 483.56,409.45 482.4,400.45 
                            478.98,400.4 473.78,404.6 463.95,403.61 458.47,397.97 459.41,391.99 458.34,382.24 436.85,383.53 422.05,370.91 410.96,368.18 
                            410.96,368.18 410.96,368.18 410.96,368.18 406.35,361.27 400.31,364.61 393.11,364.71 387.45,366.13 387.38,371.27 392.06,373.48 
                            392.83,379.48 402.1,389.03 406.29,395.93 404.09,399.76 399.31,404.82 397.12,408.64 395.11,415.47 392.65,421.85 384.5,423.01 
                            383.72,417.44 385.06,413.61 379.98,410.11 374.43,408.75 355.73,412.41 356.28,420.9 354.92,426.44 359.11,429.36 364.26,431.28 
                            368.48,435.62 360.68,442.36 363.59,448.39 364.79,454.4 368.16,458.3 369.31,467.31 375.22,473.38 376.41,479.82 379.81,481.58 
                            389.66,481.29 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat wągrowiecki' class="program__map map__powiat-wagrowiecki">
                            <polyline class="st1" points="461.68,442.52 468.9,446.91 467.96,452.46 463.65,454.53 465.29,459.69 472.16,458.08 476.4,461.14 
                            482.8,462.51 484,468.09 482.2,474.49 484.2,484.36 488.49,483.57 489.84,478.88 498.83,479 506.13,476.97 507.94,470.15 
                            513.14,465.51 516.21,460.42 524.39,457.75 530.83,455.5 534.42,443.99 542.97,444.97 547.28,442.46 551.19,438.67 555.08,436.16 
                            555.99,431.89 559.08,425.94 563.19,419.58 561.88,416.93 558.23,412.21 553.57,410.76 553.29,398.16 557.95,398.22 561.26,395.48 
                            572.9,397.05 575.27,393.81 575.34,389.61 577.28,383.56 576.45,377.05 577.96,369.11 577.84,344.88 570.98,334.97 561.18,328.49 
                            552.95,323.97 547.86,322.49 532.45,323.23 532.45,323.23 532.45,323.23 532.45,323.23 532.45,323.23 529.27,316.16 530.32,309.19 
                            536.47,302.76 534.74,291.99 537.21,283.62 529.02,283.42 525.57,284.65 526.96,298.82 516.65,307.7 508.55,307.95 502.12,308.71 
                            502.71,327.55 498.75,334.77 499.08,341.62 492.17,346.23 494.64,352.69 481.77,354.64 473.57,359.66 469.6,367.74 467.78,375.41 
                            471.12,381.45 468.08,384.41 460.41,382.16 458.34,382.24 459.37,391.62 458.51,397.72 463.95,403.61 473.78,404.6 478.98,400.4 
                            482.4,400.45 484.32,416.31 485.94,422.33 480.53,424.18 483.63,434.28 486.11,440.3 483.92,443.7 480.52,442.36 478.01,438.48 
                            471.15,439.23 465.59,439.15 461.68,442.52 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat nowotomyski' class="program__map map__powiat-nowotomyski">
                            <polyline class="st0" points="177.17,621.73 185.64,621.32 189.98,617.53 197.26,617.21 199.9,612.11 206.31,612.63 212.75,611.01 
                            213.24,607.17 218.82,605.53 222.73,601.31 232.43,600.46 239.45,604.75 239.45,604.75 248.72,609.81 250.48,606.79 252.67,603.02 
                            253.04,600.68 253.61,597.04 259.23,592.85 274.67,590.93 280.68,589.3 287.51,590.68 300.71,595.58 309.6,602.13 313.47,600.9 
                            318.22,598.4 322.03,601.45 327.13,603.66 333.63,597.76 331.14,592.59 332.95,585.77 324.41,584.36 326.62,579.69 330.09,576.31 
                            331.06,568.62 323.83,565.09 320.47,560.77 321.42,554.36 317.11,549.2 318.6,541.48 314.79,538.86 308.3,543.47 308.4,536.63 
                            304.13,536.14 279.15,517.38 271.48,514.7 267.28,509.5 262.17,507.29 251,510.55 246.85,501.08 239.6,499.26 233.61,499.6 
                            230.78,505.45 221.55,505 216.2,519.47 206.77,520.62 200.1,508.11 190.83,508.91 190.87,517.52 188.62,520.98 184.24,522.64 
                            179.88,522.15 176.42,519.93 173.77,523.38 178.46,529.99 182.78,533.51 191.43,538.88 191.37,542.8 189.14,546.69 188.09,558.02 
                            188.03,563.67 189.13,571.02 182.14,585.89 179.36,590.13 177.54,596.21 177.17,621.73 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat wolsztyński' class="program__map map__powiat-wolsztynski">
                            <polyline class="st1" points="307.94,712.39 301.66,708.58 305.13,705.21 300.92,700.87 293.99,706.33 286.31,704.51 281.07,712.14 
                            275.42,717.62 271.48,724.41 264.63,724.31 259.9,725.53 252.65,724.14 244.53,723.17 239.41,722.24 238.97,718.26 236.87,713.01 
                            234.34,708.16 230.69,705.67 226.53,704.58 218.9,704.4 213.47,703.96 206.09,701.68 203.1,698.59 200.1,693.74 199.33,686.76 
                            199.42,681.08 203.35,679.85 205.17,675.93 202.77,671.82 197.42,668.43 192.63,667.04 187.85,666.11 183.09,664.29 176.61,659.84 
                            172.78,654.56 172.41,650.18 173.34,646.29 174.26,640.64 176.15,632.37 177.1,624.82 177.17,621.73 185.64,621.32 189.98,617.53 
                            197.26,617.21 199.9,612.11 206.31,612.63 212.75,611.01 213.24,607.17 218.82,605.53 222.73,601.31 226.6,600.97 228.19,608.66 
                            228.08,616.51 230.12,623.24 226.19,628.75 226.1,635.17 232.97,633.56 242,630.69 247.09,633.76 244.88,638.86 246.94,644.46 
                            254.54,651.41 260.55,650.64 262.21,654.09 257.44,658.3 259.51,663.04 268.09,661.88 272.3,667.07 274.77,673.96 280.77,673.19 
                            287.66,669.86 295.36,670.4 298.61,679.3 307.99,685.13 314,684.36 316.37,698.1 307.94,712.39 "/>
                        </a>
                        <a src="#program" xlink:title='Powiat grodziski' class="program__map map__powiat-grodziski">
                            <polyline class="st2" points="232.43,600.46 232.43,600.46 248.72,609.81 252.54,603.25 253.61,597.04 259.23,592.85 263.71,592.29 
                            274.67,590.93 280.68,589.3 287.51,590.68 300.71,595.58 306.04,599.5 309.6,602.13 313.47,600.9 318.22,598.4 322.03,601.45 
                            327.13,603.66 333.63,597.76 332.4,594.32 337.55,593.11 343.14,591.48 348.3,589.84 349.55,592 350.35,595.86 349.83,602.7 
                            346.34,606.93 342.46,609.44 341.97,613.29 346.66,614.64 350.02,619.4 351.59,629.26 352.32,637.83 347.53,643.33 345.7,651.86 
                            342.66,655.24 334.06,657.69 330.55,663.63 322.79,667.8 319.71,673.74 317.48,679.7 316.56,684.4 307.99,685.13 298.65,679.43 
                            295.36,670.4 287.66,669.86 280.77,673.19 274.77,673.96 272.3,667.07 268.09,661.88 259.51,663.04 257.44,658.3 262.21,654.09 
                            260.55,650.64 254.54,651.41 246.94,644.46 244.88,638.86 247.09,633.76 242,630.69 232.97,633.56 226.1,635.17 226.19,628.75 
                            230.12,623.24 228.08,616.79 228.19,608.66 226.6,600.97 232.43,600.46 232.43,600.46 "/>
                        </a>
                    </svg>
                </div>

                <div class="section__second-part no-select">
                    <div class="section__wrapper wrapper80 section__program upper">
                        <h3 class="section__header_program text-blue text-center">GŁOSUJ NA MNIE W POWIECIE WOLSZTYŃSKIM</h3>
                        <ul class="section__list_demands ">
                            <li class="section__item_demands text-orange">MIEJSCE NR 5 - MUNYAMA Killion Munzele</li>
                            <li class="section__item_demands text-orange">LISTA NR 5 - KOALICJA OBYWATELSKA</li>
                            <li class="section__item_demands text-orange">OKRĘG NR 38 - PILSKI</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!--  Third Section Ended -->

            <!--  Fourth Section Started -->


            <section class="section extended no-select" id="spotkaj-killiona">
                <div class="section__first-part section_red">
                    <div class="section__wrapper upper">
                        <div class="section__date_red">
                            <div class="section_date__day-of-week "></div><!--  TU MA BYĆ DZIEŃ TYGODNIA -->
                            <div class="section_date__day-of-month"></div>
                            <div class="section__date__month"></div>
                        </div>
                        <div class="section__meet_red">
                            <ul class="section__list_red wrapper80">
                                <!-- <li class="section__item_red"><span class="section__span_red text-blue">16:00 </span>- Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, et!</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section__second-part wrapper80">
                    <div class="section__ym__date text-blue upper no-select">
                        <div class="section__ym__date-year">2019</div>
                        <div class="section__ym__date-month">
                            <i class="fas fa-caret-left"></i>
                            <span class='section__ym__date-span'></span>
                            <i class="fas fa-caret-right"></i>
                        </div>
                    </div>
                <div class="section__day-of-month no-select">
                    <ul class="day-of-month-string__list text-center text-blue">
                        <li class="day-of-month-string__item ">pon</li>
                        <li class="day-of-month-string__item">wt</li>
                        <li class="day-of-month-string__item">śr</li>
                        <li class="day-of-month-string__item">czw</li>
                        <li class="day-of-month-string__item">pt</li>
                        <li class="day-of-month-string__item">sob</li>
                        <li class="day-of-month-string__item">ndz</li>
                    </ul>
                    <ul class="day-of-month-numeric__list">
                        
                    </ul>
                </div>
                    <div class="section__ym__legend">
                        <ul class="section__ym__legend__list upper">       
                            <li class="section__ym__legend__list__item section__ym__legend__list__item-first">Legenda</li>
                            <li class="section__ym__legend__list__item legend__powiat-grodziski">Powiat grodziski</li>
                            <li class="section__ym__legend__list__item legend__powiat-nowotomyski">Powiat nowotomyski</li>
                            <li class="section__ym__legend__list__item legend__powiat-wolsztynski">Powiat wolsztyński</li>
                            <li class="section__ym__legend__list__item legend__powiat-miedzychodzki">Powiat międzychodzki</li>
                            <li class="section__ym__legend__list__item legend__powiat-chodzieski">Powiat chodzieski</li>
                            <li class="section__ym__legend__list__item legend__powiat-zlotowski">Powiat złotowski</li>
                            <li class="section__ym__legend__list__item legend__powiat-pilski">Powiat pilski</li>
                            <li class="section__ym__legend__list__item legend__powiat-wagrowiecki">Powiat wągrowiecki</li>
                            <li class="section__ym__legend__list__item legend__powiat-szamotulski">Powiat szamotulski</li>
                            <li class="section__ym__legend__list__item legend__powiat-obornicki">Powiat obornicki</li>
                            <li class="section__ym__legend__list__item legend__powiat-czarnkowsko-trzcianecki">Powiat czarnkowsko-trzcianecki</li>
                        </ul>
                    </div>
                </div>
            </section>


            <!--  Fourth Section End -->

            <!-- Fifth Section Start -->
            <section class="section section__media section__fb" id="killion-w-mediach">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKMMunyama%2F&tabs=timeline&width=500&height=650&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=404321486996278" width="500" height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> 
            
    </section> 

    

    <section class="section__koalicja-obywatelska_image no-select"><img src="<?php // echo get_template_directory_uri() ?>/images/KO_logo.gif" class='maxwidth-image lazyload' alt="Logo koalicji obywatelskiej"></section>  
    <!-- Fifth Section End -->

    </main><!-- #main -->
</div><!-- #primary -->

        
    

 <script src="<?php // echo get_template_directory_uri() ?>/index.js" class="script" type="module"></script>
</body>
</html>