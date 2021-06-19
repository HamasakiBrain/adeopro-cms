@extends('layouts.app-pure')

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Новости') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table style="width: 100%;" id="testTable"
                               class="table table-hover table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Дата</th>
                                <th>ID заказа</th>
                                <th>Артикул</th>
                                <th>Наименование</th>
                                <th>Производитель</th>
                                <th>Примечание</th>
                                <th>Склад</th>
                                <th>Цена</th>
                                <th>Продажа</th>
                                <th>Сумма</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr> <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr> <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>
                                <tr>
                                    <td>19 июня 14:00</td>
                                    <td>3110000</td>
                                    <td>STYYY10010</td>
                                    <td>Тестовое название товара</td>
                                    <td>Test</td>
                                    <td>test</td>
                                    <td>Москва склад</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                    <td>1500 ₽</td>
                                </tr>


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Дата</th>
                                <th>ID заказа</th>
                                <th>Артикул</th>
                                <th>Наименование</th>
                                <th>Производитель</th>
                                <th>Примечание</th>
                                <th>Склад</th>
                                <th>Цена</th>
                                <th>Продажа</th>
                                <th>Сумма</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

