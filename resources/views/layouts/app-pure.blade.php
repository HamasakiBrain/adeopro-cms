<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    @yield('head')
    <link href="{{ asset('main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>

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
                <a href="tel:+7 999 999 99 99" class="tel">+7 999 999 99 99</a>
            </div>
        </div>    <div class="app-header__content">
            <div class="app-header-left lp-none">
                <ul class="header-megamenu nav">
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">
                            О нас
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('payment') }}" class="nav-link">
                            Оплата
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('delivery') }}" class="nav-link">
                            Доставка
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contacts') }}" class="nav-link">
                            Контакты
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dillers') }}" class="nav-link">
                            Дилеры
                        </a>
                    </li>
                    @if(Auth::check())
                        @if(auth()->user()->isAdmin)
                            <li class="nav-item">
                                <a href="{{ route('admin.main') }}" class="nav-link btn btn-danger text-white">Админ вход</a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
            <div class="app-header-right">
                <div class="header-dots">
                    <div class="mr-2">
                        <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg"></span>
                                <i class="icon text-danger ion-social-youtube"></i>
                        </a>
                    </div>
                    <div class="mr-2">
                       <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg"></span>
                            <i class="icon text-danger ion-social-google"></i>
                        </a>
                    </div>
                    <div class="mr-2">
                       <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg "></span>
                            <img src="{{ asset('assets/images/vk.png') }}" alt="" width="20" class="mx-auto">
                        </a>
                    </div>
                    <div class="mr-2">
                       <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg "></span>
                            <img src="{{ asset('assets/images/ok.png') }}" alt="" width="23" class="mx-auto">
                        </a>
                    </div>
                    <div class="mr-2">
                       <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg "></span>
                            <img src="{{ asset('assets/images/telegram.png') }}" alt="" width="23" class="mx-auto">
                        </a>
                    </div>
                    <div class="mr-2">
                       <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg"></span>
                            <i class="icon text-success ion-social-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <ul class="header-megamenu nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#zvonok">
                            Закажите &nbsp; <span class="border-bottom text-info border-info">обратный звонок</span>
                        </a>
                    </li>

                </ul>
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0 mr-3">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left  header-user-info">
                              <a href="tel:+7 999 999 99 99" class="tel">+7 999 999 99 99</a>
                            </div>
                        </div>
                    </div>
                    @guest()
                    @else
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img class="rounded-circle" src="user.svg" alt="" width="42">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right" style="">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img class="rounded-circle" src="user.svg" alt="" width="42">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{ auth()->user()->name }}</div>
                                                                    <div class="widget-subheading opacity-8">{{ auth()->user()->phone }}</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <button class="btn-pill btn-shadow btn-shine btn btn-focus" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Выйти</button>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> {{ auth()->user()->name }} </div>
                                    <div class="widget-subheading"> {{ auth()->user()->phone }} </div>
                                </div>
                            </div>
                        </div>
                    @endguest
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
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu header-megamenu">
                        <ul class="header-megamenu lp-block">
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">
                                    О нас
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('payment') }}" class="nav-link">
                                    Оплата
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('delivery') }}" class="nav-link">
                                    Доставка
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contacts') }}" class="nav-link">
                                    Контакты
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Дилеры
                                </a>
                            </li>

                           @if(Auth::check())
                                @if(auth()->user()->isAdmin)
                                    <li class="nav-item">
                                        <a href="{{ route('admin.main') }}" class="nav-link btn btn-danger text-white">Админ вход</a>
                                    </li>
                                @endif
                           @endif

                        </ul>

                        <ul class="mt-3">
                            <li class="nav-item">
                                <a href="/" class="nav-link">
                                    Главная
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dillers') }}" class="nav-link">
                                    Представители
                                </a>
                            </li>
                            @guest()
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">
                                        Регистрация
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">
                                        Вход
                                    </a>
                                </li>
                            @else

                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">
                                       Новости
                                    </a>
                                </li>

                            @endguest
                        </ul>

                    </ul>
                   @guest()
                       @else
                        <a href="{{ route('cabinet') }}" class="btn btn-primary d-block mt-5">Мой кабинет</a>
                        <a href="#" class="btn btn-outline-primary d-block mt-1 dropdown-toggle"  aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Каталоги </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                            <a href="{{ route('auto') }}" tabindex="0" class="dropdown-item">Автокаталоги</a>
                            <a href="{{ route('catalog.all') }}" tabindex="0" class="dropdown-item">Общий каталог</a>
                            <a href="#" tabindex="0" class="dropdown-item">Каталог TecDoc</a>
                            <a href="#" tabindex="0" class="dropdown-item">Мой гараж</a>
                            <a href="#" tabindex="0" class="dropdown-item">Масла и автохимия</a>
                            <a href="#" tabindex="0" class="dropdown-item">Стекла</a>
                            <a href="#" tabindex="0" class="dropdown-item">Бренды</a>
                        </div>
                        <a href="#" class="btn btn-outline-primary d-block mt-1">Заказы</a>
                        <a href="#" class="btn btn-outline-primary d-block mt-1">Корзина</a>
                        <a href="#" class="btn btn-outline-primary d-block mt-1">Баланс ({{ auth()->user()->balance }}.00 ₽)</a>
                        <button class="btn btn-danger w-100 mt-2" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Выйти</button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest

                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="header-dots d-md-flex d-lg-none d-xl-none ">
                                <div class="mr-2">
                                    <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                                        <span class="icon-wrapper-bg"></span>
                                        <i class="icon text-danger ion-social-youtube"></i>
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                                        <span class="icon-wrapper-bg"></span>
                                        <i class="icon text-danger ion-social-google"></i>
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                                        <span class="icon-wrapper-bg "></span>
                                        <img src="{{ asset('assets/images/vk.png') }}" alt="" width="20" class="mx-auto">
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                                        <span class="icon-wrapper-bg "></span>
                                        <img src="{{ asset('assets/images/ok.png') }}" alt="" width="23" class="mx-auto">
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                                        <span class="icon-wrapper-bg "></span>
                                        <img src="{{ asset('assets/images/telegram.png') }}" alt="" width="23" class="mx-auto">
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                                        <span class="icon-wrapper-bg"></span>
                                        <i class="icon text-success ion-social-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="app-footer-left">
                                <div class="footer-dots">
                                    <img src="{{ asset('assets/images/direct.png') }}" alt="" width="75">
                                </div>
                                <div class="footer-dots mx-3">
                                    <img src="{{ asset('assets/images/google.svg') }}" alt="" width="40">
                                </div>
                                <div class="footer-dots">
                                    <img src="{{ asset('assets/images/1.jpg') }}" alt="" width="100">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="modal fade" id="zvonok" tabindex="-1"  aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заказ звонка</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Ваше имя</label>
                            <input id="name" type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Номер телефона</label>
                            <input id="phone" type="text" name="phone" class="form-control input-mask-trigger" data-inputmask="'mask': '+9(999) 999-9999'" required>
                        </div>
                        <button type="submit" class="btn btn-primary ml-auto d-block" >Отправить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/scripts/main.d810cf0ae7f39f28f336.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('scripts')
</div>
</body>

</html>
