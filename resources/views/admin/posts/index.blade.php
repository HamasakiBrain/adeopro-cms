@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="main-card mb-3 card col-md-6">
            <div class="card-header">Новости ({{ count($posts) }})</div>
            <ul class="todo-list-wrapper list-group list-group-flush">
                @foreach($posts as $post)
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left ml-2">
                                    <div class="widget-heading">
                                        {{ $post->title }}
                                        <div class="badge badge-info ml-2">{{ $post->type }}</div>
                                    </div>

                                    <div class="widget-subheading"><i>{{ $post->description }}</i></div>
                                </div>
                                <div class="widget-content-right widget-content-actions">
                                    <a href="{{ route('admin.posts.destroy', $post->id) }}" class="border-0 btn-transition btn btn-outline-danger">
                                        <i class="fa fa-trash-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
               <div class="mt-3">
                   {{ $posts->links() }}
               </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Создание новостей</div>
                <form class="card-body" action="{{ route('admin.posts.add') }}" method="POST">
                    @csrf
                     <div class="form-group">
                         <label for="title">Заголовок</label>
                         <input type="text" name="title" id="title" class="form-control" required>
                     </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <input type="text" name="description" id="description" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Тип</label>
                        <select name="type" id="type" class="form-control">
                            <option value="0" selected>Наши</option>
                            <option value="1">Дилера</option>
                        </select>
                    </div>
                    <button class="btn btn-success w-100" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
