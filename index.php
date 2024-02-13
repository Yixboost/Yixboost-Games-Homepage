<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Als de gebruiker niet is ingelogd, blijf op de pagina
    // Hier kun je de code toevoegen om de profielfoto weer te geven
} else {
    // Als de gebruiker is ingelogd, stuur door naar een andere pagina
    header("Location: http://yixboost.nl.eu.org/yixboost/home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js"
            crossorigin="anonymous"></script>
        <script src="/index.js"></script>
        <title>Yixboost Games</title>
    </head>

    <body>
        <div class="row">
            <nav class="nav__container">
                <div class="nav__logo--wrapper">
                    <figure>
                        <img src="images/logo.png" class="nav__logo--img">
                    </figure>
                    <a href="http://yixboost.nl.eu.org"
                        class="nav__link--logo">Yixboost Games</a>
                </div>
                <div class="nav__links--wrapper">
                    <ul class="nav__links">
                        <li><a href="http://yixboost.nl.eu.org/yixboost/home.php"
                                class="nav__link">Games</a></li>
                        <li><a href="http://yixboost.nl.eu.org/yixboost/tools"
                                class="nav__link">Tools</a></li>
                        <li><a href="http://yixboost.nl.eu.org/yixboost/suggest-game"
                                class="nav__link">Suggest Game</a></li>
                                <li><a href="http://yixboost.nl.eu.org/yixboost/about"
                                class="nav__link">About Us</a></li>
                        <li><a href="mailto://yixboost@gmail.com" target="_blank" class="nav__link">Contact Us</a></li>
                        <li><a href="http://yixboost.nl.eu.org/yixboost/login"
                                class="nav__link login">Login</a></li>
                        <li><button class="signup__btn"><a
                                    href="http://yixboost.nl.eu.org/yixboost/login/register.php"
                                    class="nav__link"><span
                                        class="white">Sign
                                        Up</span></a></button></li>
                    </ul>
                    <button class="btn__menu" onclick="openMenu()">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="menu__backdrop">
                        <button class="btn__menu btn__menu--close"
                            onclick="closeMenu()">
                            <i class="fas fa-times"></i>
                        </button>
                        <ul class="menu__links">
                            <li class="menu__list"><a class="menu__link"
                                    onclick="closeMenu()"
                                    href="#">About</a></li>
                            <li class="menu__list"><a class="menu__link"
                                    onclick="closeMenu()" href="#">Blog</a></li>
                            <li class="menu__list"><a class="menu__link"
                                    onclick="closeMenu()"
                                    href="#">Pricing</a></li>
                            <li class="menu__list"><a class="menu__link"
                                    onclick="closeMenu()" href="#">Contact
                                    Us</a></li>
                            <li class="menu__list"><a class="menu__link"
                                    onclick="closeMenu()"
                                    href="#">Login</a></li>
                            <li class="menu__list"><button
                                    class="signup__btn--menu"><a
                                        class="menu__link" onclick="closeMenu()"
                                        href="#"><span
                                            class="white">Sign
                                            Up</span></a></button></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="row">
            <div class="header__container">
                <div class="header__description--wrapper">
                    <h1 class="header__title">Free unblocked games <span
                            class="blue">for you.</span></h1>
                    <p class="header__title--para">
                        Our games are completely free and always unblocked.
                    </p>
                    <button class="learn__more--btn"><a
                            href="http://yixboost.nl.eu.org" class="learn__link"><span
                                class="white">Play Now!</span></a></button>
                </div>
                <figure class="header__figure">
                    <img src="./images/Gamepad-Black.svg"
                        class="header__figure--img">
                </figure>
            </div>
        </div>

        <!--FEATURES SECTION HTML-->
        <div class="features__container">
            <div class="row">
                <div class="features__description--wrapper">
                    <h1 class="blue">FEATURES</h1>
                    <h1 class="features__header">We have Amazing <span
                            class="blue">Service.</span></h1>
                    <p class="header__title--para">Our services are easy, secure
                        and fast!</p>
                </div>
            </div>
            <div class="services">
                <div class="service">
                    <span class="service__img--container"><img
                            class="service__img"
                            src="./images/shield-icon.daefe14b.svg"></span>
                    <div class="service__description">
                        <h1 class="service__description--title">Secure</h1>
                        <p class="service__description--para">We strictly only
                            deal with vendors that provide top notch
                            security.</p>
                    </div>
                </div>
                <div class="service">
                    <span class="service__img--container"><img
                            class="service__img"
                            src="./images/fast-icon.dbb971a7.svg"></span>
                    <div class="service__description">
                        <h1 class="service__description--title">Fast</h1>
                        <p class="service__description--para">Our game pages are
                            simple and made to load quickly.</p>
                    </div>
                </div>
                <div class="service">
                    <span class="service__img--container"><img
                            class="service__img"
                            src="./images/simple-icon.673b7e17.svg"></span>
                    <div class="service__description">
                        <h1 class="service__description--title">Easy</h1>
                        <p class="service__description--para">Do you want to
                            play games? Sign up and you're done!</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Quality Work Section-->
        <div class="row">
            <div class="qualitywork__container">
                <div class="qualitywork__header--wrapper">
                    <h1 class="qualitywork__header">
                        QUALITY WORK
                    </h1>
                    <h1 class="qualitywork__header--title">Designed & Developed
                        by <span
                            class="blue">Professionals.</span>
                    </h1>
                    <p class="header__title--para">All our pages are lovingly
                        created by professionals using PHP, Javascript, HTML and
                        CSS.</p>
                    <button class="learn__more--btn"><a
                            href="http://yixboost.nl.eu.org"
                            class="learn__link"><span
                                class="white">Start Gaming</span></a></button>
                </div>
                <fig class="qualitywork__figure">
                    <img class="header__figure--img"
                        src="./images/hero-screenshot-1.40a097b5.png">
                </fig>
            </div>
        </div>

        <!--EASY TO GET STARTED SECTION-->
        <div class="row">
            <div class="steps__container">

                <div class="figure__wrapper">
                    <fig class="steps__figure">
                        <img class="steps__figure--img"
                            src="./images/hero-screenshot-2.241aac1f.png">
                    </fig>
                </div>

                <div class="steps__wrapper">
                    <h1 class="steps__title">STEPS</h1>
                    <h1 class="steps__subtitle">Easy to <span class="blue">Get
                            Started.</span></h1>
                    <div class="steps">
                        <div class="step">
                            <div class="step__number--wrapper">
                                <h1 class="step__number">01</h1>
                                <div class="step__description--wrapper">
                                    <h1
                                        class="step__description--title">Register</h1>
                                    <p class="step__description--para">Create an
                                        account with us via our simple
                                        registration form.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="step__number--wrapper">
                            <h1 class="step__number">02</h1>
                            <div class="step__description--wrapper">
                                <h1 class="step__description--title">Login</h1>
                                <p class="step__description--para">Go to login
                                    and enter your username and password.</p>
                            </div>
                        </div>
                    </div>
                    <div class="step__number--wrapper">
                        <h1 class="step__number">03</h1>
                        <div class="step__description--wrapper">
                            <h1 class="step__description--title">Play</h1>
                            <p class="step__description--para">You now see the
                                homepage, good luck with your gaming experience
                                at Yixboost Games!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--VALUES SECTION-->
        <div class="row">
            <div class="values__container">
                <div class="values__description--wrapper">
                    <h1 class="values__description--title">
                        VALUES
                    </h1>
                    <h1 class="values__header--subtitle">Our site is always
                        <span class="blue">Unblocked.</span>
                    </h1>
                    <p class="values__subtitle--para">Our entire site is hosted
                        on its own unblocked server, which also applies to all
                        our games.</p>
                    <button class="learn__more--btn"><a
                            href="https://www.google.com/search?newwindow=1&sca_esv=e723f428ea636eb3&authuser=2&sxsrf=ACQVn08K1cJtCb61CyujzmBZAvbUsDT3xg:1707477457478&uds=AMwkrPtBg36L4qLTapG4OIH1Om14IvuGuluDp3Glncy9_0GwVRmTxu6dMY2sRF2e1r2G8I6SnO1Q_QQPQWqfTDlOluKPv2YMhYRz0LtiO9qllt-EmnqVkJA&si=AKbGX_rcuucMgom2rba1cdwsvM2SVoIkP2btyqGMV4t0GuHIs4sGV_1tpuqR0YHG4Rzd9ScDhkoFW5l3XCXkyVucJgEH25N2o_d9B0BjBXiuiX6jRz8LBKA%3D&q=Yixboost+Games+Reviews&sa=X&ved=2ahUKEwj7ksKakZ6EAxXp9QIHHVkHDDAQ3PALegQIQhAF&biw=1280&bih=559&dpr=1.5" target="_blank" class="learn__link"><span
                                class="white">Rate us on
                                Google!</span></a></button>
                </div>
                <figure class="figure__wrapper">
                    <img class="values__figure--img" src="images/wifi.svg">
                </figure>

            </div>
        </div>

        <div class="logo-slider">
            <h3>We have games from:</h3>
            <div class="logo-slide-track">
                <div class="slide">
                    <img src="images/madbox.png" alt />
                </div>
                <div class="slide">
                    <img src="images/tinydobbins.png" alt />
                </div>
                <div class="slide">
                    <img src="images/bkcore.png" alt />
                </div>
                <div class="slide">
                    <img src="images/nopressure.png" alt />
                </div>
                <div class="slide">
                    <img src="images/yixboost-games.png" alt />
                </div>
                <div class="slide">
                    <img src="images/kizi.png" alt />
                </div>
                <div class="slide">
                    <img src="images/twoplayergames.png" alt />
                </div>
                <div class="slide">
                    <img src="images/y8.png" alt />

                </div>
                <div class="slide">
                    <img src="images/hipster-whale.png" alt />
                </div>
                <div class="slide">
                    <img src="images/lagged.png" alt />
                </div>
                <div class="slide">
                    <img src="images/armor-games.png" alt />
                </div>
            </div>

            <!--FOOTER SECTION-->
            <div class="row__footer">
                <div class="links">
                    <div class="link">
                        <h1 class="link__title">MAIN</h1>
                        <a href='http://yixboost.nl.eu.org/yixboost/home.php' class="link__title--anchor">Games</a>
                        <a href='http://yixboost.nl.eu.org/yixboost/tools' class="link__title--anchor">Tools</a>
                        <a href='http://yixboost.nl.eu.org/yixboost/suggest-game' class="link__title--anchor">Suggest Game</a>
                    </div>
                    <div class="link">
                        <h1 class="link__title">PRODUCT</h1>
                        <a href='http://yixboost.nl.eu.org/yixboost/login' class="link__title--anchor">Log In</a>
                        <a href='http://yixboost.nl.eu.org/yixboost/login/register.php' class="link__title--anchor">Register</a>
                        <a href='http://yixboost.nl.eu.org/yixboost/home.php' class="link__title--anchor">Play Games</a>
                    </div>
                    <div class="link">
                        <h1 class="link__title">All Products</h1>
                        <a href='http://yixboost.nl.eu.org/yixboost/tools' class="link__title--anchor">Tools</a>
                        <a href='http://yixboost.nl.eu.org/yixboost/home.php' class="link__title--anchor">Games</a>
                        <a href='http://yixboost.nl.eu.org/yixboost/chatbot' class="link__title--anchor">AI Chatbot</a>
                    </div>
                    <div class="link">
                        <h1 class="link__title">Socials</h1>
                        <a href='https://instagram.com/yixboost' class="link__title--anchor">Instagram</a>
                        <a href='https://youtube.com/@yixboost' class="link__title--anchor">Youtube</a>
                        <a href='https://github.com/yixboost' class="link__title--anchor">Github</a>
                    </div>
                </div>
                <footer class="footer__info">
                    <div class="footer__info--logo">
                        <img class="footer__info--img" src="./images/logo.png">
                        <p class="white">Yixboost NL</p>
                    </div>
                    <p class="footer__info--copyright">&copy; 2024 Yixboost NL
                        All Rights Reserved.</p>
                    <div class="footer__info--links">
                        <a href='https://github.com/yixboost' class="footer__info--link"><i
                                class="fab fa-github"></i></a>
                        <a href='https://instagram.com/yixboost' class="footer__info--link"><i
                                class="fab fa-instagram"></i></a>
                        <a href='https://youtube.com/@yixboost' class="footer__info--link"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </footer>
            </div>
        </div>
    </body>

</html>