@extends('admin.layouts.app')
@section('content')
    <div class="main-card mb-3 card">
        <div class="card-header">Пользователи</div>
        <ul class="todo-list-wrapper list-group list-group-flush">
           @foreach($users as $user)
                <li class="list-group-item">
                    <div class="todo-indicator bg-warning"></div>
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left ml-2">
                                <div class="widget-heading">
                                    {{ $user->name }}
                                    <div class="badge badge-info ml-2">{{ $user->org }}</div>
                                    <div class="badge badge-success ml-2">{{ $user->phone }}</div>
                                    @if($user->isAdmin)
                                        <div class="badge badge-danger ml-2">АДМИН</div>
                                    @endif
                                </div>
                                <div class="widget-subheading"><i>{{ $user->country }}</i></div>
                            </div>
                            <div class="widget-content-right widget-content-actions">
                                <a href="{{ route('admin.users.destroy', $user->id) }}" class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
           @endforeach
        </ul>
    </div>
@endsection
