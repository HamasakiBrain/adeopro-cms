@extends('layouts.app-pure')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                </div>
                <div>О Нас
                    <div class="page-title-subheading">принципы и схема нашей работы.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="no-gutters row">
            <div class="col-sm-12 col-md-12 col-xl-6">
                <div id="accordion" class="accordion-wrapper mb-3">
                    <div class="card">
                        <div id="headingOne" class="card-header">
                            <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                <h5 class="m-0 p-0"> Миссия компании </h5>
                            </button>
                        </div>
                        <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse show">
                            <div class="card-body"> Мы стремимся создать все условия, чтобы наши клиенты получили максимальную выгоду от сотрудничества с {{ env('APP_NAME') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingTwo" class="b-radius-0 card-header">
                            <button type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                                <h5 class="m-0 p-0">Цель компании </h5>
                            </button>
                        </div>
                        <div data-parent="#accordion" id="collapseOne2" class="collapse">
                            <div class="card-body">Обеспечить выполнение заказов в минимальные сроки по самой выгодной цене.
                                <br>
                                Профиль нашей компании – <strong>поставка автозапчастей крупным и мелким оптом</strong> во все регионы России. Осуществить заказ запчастей можно на нашем сайте и через региональных дилеров.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingThree" class="card-header">
                            <button type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseThree" class="text-left m-0 p-0 btn btn-link btn-block">
                                <h5 class="m-0 p-0"> Корпоративный стиль {{ env('APP_NAME') }} </h5>
                            </button>
                        </div>
                        <div data-parent="#accordion" id="collapseOne3" class="collapse">
                            <div class="card-body">Компания {{ env('APP_NAME') }} активно работает на рынке автозапчастей с 2003 года, прошли реорганизацию в 2011 г. За это время мы установили прочные партнерские взаимоотношения с крупными поставщиками автозапчастей для грузовых и легковых автомобилей иностранного производства. На сегодняшний день общее количество поставщиков более 500 и мы открыты для сотрудничества и активно ищем новых.
                                <br>
                                Мы тщательно отслеживаем все новинки авторынка для более полного и качественного обслуживания. Потребительская аудитория {{ env('APP_NAME') }} постоянно увеличивается. Этому способствует лояльная ценовая политика и принципы индивидуального обслуживания в каждом отдельном случае.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingFour" class="card-header">
                            <button type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseFour" class="text-left m-0 p-0 btn btn-link btn-block">
                                <h5 class="m-0 p-0">  Нашими постоянными клиентами являются:  </h5>
                            </button>
                        </div>
                        <div data-parent="#accordion" id="collapseOne4" class="collapse">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        крупные автосервисы;
                                    </li>
                                    <li>
                                        специализированные магазины запчастей;
                                    </li>
                                    <li>
                                        автопарки;
                                    </li>
                                    <li>
                                        частные компании, специализирующиеся на сервисном обслуживании.
                                    </li>
                                </ul>
                                Коллектив {{ env('APP_NAME') }} состоит из профессиональных менеджеров, которые готовы предоставить квалифицированную консультацию в случае затруднения выбора детали. Региональные дилеры помогают обеспечить бесперебойное выполнение заказов в самые отдаленные точки России.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button type="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="false" aria-controls="collapseFour" class="text-left m-0 p-0 btn btn-link btn-block">
                                <h5 class="m-0 p-0">  Как мы работаем? </h5>
                            </button>
                        </div>
                        <div data-parent="#accordion" id="collapseOne5" class="collapse">
                            <div class="card-body">
                                Компания {{ env('APP_NAME') }} имеет многочисленные представительства в регионах России. Наши менеджеры всегда готовы проконсультировать по всем вопросам заказа автозапчастей, помочь с подбором, предоставить логин и пароль от личного кабинета.
                                <br>
                                В каталоге {{ env('APP_NAME') }} более 20 миллионов наименований автозапчастей для грузовых и легковых иномарок. После регистрации на сайте {{ env('APP_NAME') }}, вы сможете в режиме реального времени отслеживать ход выполнения заказа.
                                <br>
                                Как правило, компания {{ env('APP_NAME') }} отдает предпочтение оптовым покупателям. Однако, следуя принципу индивидуального подхода к заказам, мы предлагаем к продаже автозапчасти для иномарок и осуществляем доставку мелким оптом.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <button type="button" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseFour" class="text-left m-0 p-0 btn btn-link btn-block">
                                <h5 class="m-0 p-0"> Почему Вам выгодно работать с нами?</h5>
                            </button>
                        </div>
                        <div data-parent="#accordion" id="collapseOne6" class="collapse">
                            <div class="card-body">
                                Компания {{ env('APP_NAME') }} отличается динамичным стилем работы. Энергия молодого слаженного коллектива отражается и на количестве продаж, и на самом качестве обслуживания. С нами выгодно сотрудничать, поскольку АДЕО.ПРО имеет четкий профессиональный почерк, делающий это сотрудничество максимально комфортным.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>
            </div>
        </div>
    </div>
@endsection
