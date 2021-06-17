<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <div class="widget-content-left  ml-3 header-user-info">
                <div class="widget-heading font-weight-bolder"> +7 999 999 99 99</div>
                <div class="widget-subheading">ПН-ПТ с 9:00 до 18:00 </div>
            </div>
        </div>    <div class="app-header__content">
            <div class="app-header-left">
                <ul class="header-megamenu nav">
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">
                            О нас
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="payment.html" class="nav-link">
                            Оплата
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="delivery.html" class="nav-link">
                            Доставка
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="contacts.html" class="nav-link">
                            Контакты
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dilers.html" class="nav-link">
                            Дилеры
                        </a>
                    </li>

                </ul>
            </div>
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading"> +7 999 999 99 99</div>
                                <div class="widget-subheading">ПН-ПТ с 9:00 до 18:00 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <div class="widget-content-left  ml-3 header-user-info">
                    <div class="widget-heading"> +7 999 999 99 99</div>
                    <div class="widget-subheading">ПН-ПТ с 9:00 до 18:00 </div>
                </div>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-users"></i> Региональные представители
                            </a>
                        </li>
                        <li>
                            <a href="register.html">
                                <i class="metismenu-icon pe-7s-user"></i> Регистрация
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="metismenu-icon pe-7s-user"></i> Вход
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>

        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/scripts/main.d810cf0ae7f39f28f336.js') }}"></script>
</div>
</body>

</html>
