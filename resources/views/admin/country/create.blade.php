@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Добавление стран
                </div>
                <form class="card-body row" action="{{ route('admin.country.add') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" placeholder="Страна" required>
                    </div>
                    <div class="col-md-6 mt-sm-2 mt-lg-0">
                        <button class="btn btn-success" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Страны ({{ count($countries) }})</div>
                <div class="card-body">
                    <ul class="todo-list-wrapper list-group list-group-flush">
                        @foreach($countries as $country)
                            <li class="list-group-item">
                                <div class="todo-indicator bg-warning"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left ml-2">
                                            <div class="widget-heading">
                                                {{ $country->name }}
                                            </div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <a class="border-0 btn-transition btn btn-outline-danger" href="{{ route('admin.country.destroy', $country->id) }}">
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
