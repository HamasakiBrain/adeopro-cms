@extends('layouts.app-pure')
@section('content')
   <div class="map">
       <style>
           #myMap {
               height: 500px;
           }
       </style>
       <div id="myMap"></div>
   </div>

@endsection
@section('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?load=package.standard&lang=ru-RU&apikey=77a642ff-bc97-4204-80ec-27161935c41c"></script>
    <script>
        ymaps.ready(init);
        function init(){

            let map = new ymaps.Map("myMap", {
                center: [44.948237, 34.100318],
                zoom: [10],
            })
            map.geoObjects.add(
                new ymaps.Placemark(
                    [44.948237, 34.100318],
                    {
                        balloonContentHeader: 123,
                        balloonContent: 'Ваш город: ЫЫЫ' ,
                        balloonContentFooter: 123123
                    }
                )
            );
        }
    </script>
@endsection
