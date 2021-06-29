<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap5/main.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/r-2.2.9/sb-1.1.0/sp-1.3.0/datatables.min.css"/>


</head>
<body>
<div class="bg-blue">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" href="{{ route('home') }}">ГЛАВНАЯ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                 @if(Auth::check())
                        @if(auth()->user()->isAdmin)
                            <a class="navbar-brand" href="{{ route('admin.main') }}">Админ панель</a>
                        @endif
                 @endif
                </ul>
                <div class="my-auto my-lg-0 d-flex">
                  @guest()
                        <a href="{{ route('login') }}" class="nav-link text-white">Вход</a>
                        <a href="{{ route('register') }}" class="nav-link text-white">Регистрация</a>
                    @else
                        <a href="{{ route('cabinet') }}" class="nav-link text-white">
                            <img src="{{ asset('user.svg') }}" alt="" width="20" class="mr-2">{{ auth()->user()->name}}, Баланс {{ number_format(auth()->user()->balance, 2) }} ₽
                        </a>
                    @endguest
                </div>

            </div>
        </nav>
    </div>
</div>
<div class="bg-light">
    <div class="container">
        <nav class="py-5 row align-items-center">
          <div class="col-lg-3">
              <div class="logo">
                  <img src="{{ asset('images/logo.svg') }}" alt="">
              </div>
          </div>
           <div class="search col-lg-7">
              <div class="icons row">
                  <div class="icon col-md-4">
                      <img src="{{ asset('images/phone.svg') }}" alt="" width="14">
                      <a href="tel:+7 (861) 214-12-12" class="text-dark">+7 (861) 214-12-12</a>
                  </div>
                  <div class="icon col-md-4">
                      <img src="{{ asset('images/mail.svg') }}" alt="" width="17">
                      <a href="mailto:opt@logispart.ru" class="text-dark">opt@logispart.ru</a>
                  </div>
                  <div class="icon col-md-4">
                      <img src="{{ asset('images/pin.svg') }}" alt="" width="18">
                      <a href="tel:+7 (861) 214-12-12" class="text-dark">Краснодар</a>
                  </div>
              </div>
               <form class="form-inline my-2  mt-2">
                   <input class="form-control mr-sm-2 p-2 search" type="search" placeholder="Введите код запчасти или VIN номер автомобиля">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
               </form>
           </div>
            <div class="col-lg-2">
                <div class="row">
                    <div class="col-md-12 col-lg-2">
                        <img src="{{ asset('images/cart.svg') }}" alt="" width="20">
                    </div>
                    <div class="col-md-12 col-lg-10">
                        <a href="#" class="text-dark">
                            Корзина
                            на сумму 0.00₽
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <hr>

    <div class="container pb-3">
        <nav class="row">
            <div class="col-lg-2">
                <a href="{{ route('auto') }}" class="text-dark">Шины</a>
            </div>
            <div class="col-lg-2">
                <a href="{{ route('table') }}" class="text-dark">Масла</a>
            </div>
            <div class="col-lg-2">
                <a href="#" class="text-dark">Аксессуары</a>
            </div>
            <div class="col-lg-2">
                <a href="#" class="text-dark">Аккумуляторы</a>
            </div>

        </nav>
    </div>
</div>
@yield('content')

<footer class="bg-light p-2">
    <div class="text-center">
        &copy; Все права защищены. <br>Интернет-магазин запчастей.
    </div>
</footer>
<footer class="p-5 container">
    <div class="row align-items-center">
        <div class="col-md-4 d-flex">
            <div class="mr-2">
                <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                    <span class="icon-wrapper-bg "></span>
                    <img src="{{ asset('assets/images/vk.png') }}" alt="" width="40" class="mx-auto">
                </a>
            </div>
            <div class="mr-2">
                <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                    <span class="icon-wrapper-bg "></span>
                    <img src="{{ asset('assets/images/ok.png') }}" alt="" width="40" class="mx-auto">
                </a>
            </div>
            <div class="mr-2">
                <a href="#" class="icon-wrapper icon-wrapper-alt rounded-circle">
                    <span class="icon-wrapper-bg "></span>
                    <img src="{{ asset('assets/images/telegram.png') }}" alt="" width="40" class="mx-auto">
                </a>
            </div>
            <div class="mr-2 ">
                <img src="{{ asset('assets/images/direct.png') }}" alt="" width="40">
            </div>
            <div class="mr-2">
                <img src="{{ asset('assets/images/google.svg') }}" alt="" width="40">
            </div>
            <div class="">
                <img src="{{ asset('assets/images/1.jpg') }}" alt="" width="40">
            </div>
        </div>
        <div class="col-md-5">
           <a href="#" class="text-dark">Разработка сайтов JETPRODUCTION</a>
        </div>
        <div class="col-md-3">
               <strong> Пн-Пт: с 9-00 до 18-00</strong>
                <br>
                <strong> Сб-Вс: выходной</strong>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/r-2.2.9/sb-1.1.0/sp-1.3.0/datatables.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
