@extends('layouts.app-pure')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3 card">
                <div class="card-body">
                    <ul class="tabs-animated-shadow tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-0">
                                <span>На карте</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-1">
                                <span>Список</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-animated-0" role="tabpanel">
                            <div class="map">
                                <style>
                                    #myMap {
                                        height: 500px;
                                    }
                                </style>
                                <div id="myMap"></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-animated-1" role="tabpanel">
                            @foreach($dillers as $diller)
                                <div class="card col-md-6 mb-2">
                                    <div class="card-header">{{ $diller->name }}</div>
                                    <div class="card-body">
                                        <p><strong>Адрес: </strong>{{ $diller->address }}</p>
                                        <p><strong>Телефон: </strong>{{ $diller->phone }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
@section('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?load=package.standard&lang=ru-RU&apikey=77a642ff-bc97-4204-80ec-27161935c41c"></script>
    <script>
        ymaps.ready(init);
        function init(){

            let map = new ymaps.Map("myMap", {
                center: [44.948237, 34.100318],
                zoom: [5],
            })
            @foreach($dillers as $diller)
                map.geoObjects.add(
                    new ymaps.Placemark(
                        [{{ $diller->corX }}, {{ $diller->corY }}],
                        {
                            balloonContentHeader: '{{ $diller->name }}',
                            balloonContent: "Адрес: {{ $diller->address }}" ,
                            // balloonContentFooter: 123123
                        }
                    )
                );
            @endforeach
        }
    </script>
@endsection
