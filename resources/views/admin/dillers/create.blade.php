@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    Добавление дилеров
                </div>
                <form class="card-body row" action="{{ route('admin.dillers.add') }}" method="POST">
                    @csrf
                    <div class="form-group  col-md-6">
                        <input type="text" class="form-control" name="name" placeholder="ИП 'Дилер'" required>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="corX" placeholder="Координаты X" required>
                    </div>
                    <div class="form-group  col-md-3">
                        <input type="text" class="form-control" name="corY" placeholder="Координаты Y" required>
                    </div>
                    <div class="form-group  col-md-4">
                        <input type="text" class="form-control" name="address" placeholder="Адрес" required>
                    </div>
                    <div class="form-group  col-md-4">
                        <input type="text" class="form-control" name="phone" placeholder="Телефон" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <button class="btn btn-success" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">Дилеры ({{ count($dillers) }})</div>
                <div class="card-body">
                    <ul class="todo-list-wrapper list-group list-group-flush">
                        @foreach($dillers as $diller)
                            <li class="list-group-item">
                                <div class="todo-indicator bg-warning"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left ml-2">
                                            <div class="widget-heading">
                                                {{ $diller->name }}
                                            </div>
                                            {{ $diller->address }}, <i>{{ $diller->phone }}</i>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <a class="border-0 btn-transition btn btn-outline-danger" href="{{ route('admin.country.destroy', $diller->id) }}">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
