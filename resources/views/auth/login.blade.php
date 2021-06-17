@extends('layouts.app-pure')
@section('content')
    <div class="modal-dialog w-100 mx-auto">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title my-3">
                    Авторизация
                </h5>
                <form class="" action="{{ route('login') }}" method="POST" id="login">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <input name="email" id="exampleEmail" placeholder="Логин" type="email" class="form-control @error('email') is-invalid @enderror" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <input name="password" id="examplePassword" placeholder="Пароль" type="password" class="form-control  @error('password') is-invalid @enderror" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-check">
                        <input name="remember" id="exampleCheck" type="checkbox" class="form-check-input">
                        <label for="exampleCheck" class="form-check-label">Запомнить меня на этом компьютере</label>
                    </div>
                </form>
                <div class="divider"></div>
                <h6 class="mb-0">Нет аккаунта? <a href="{{ route('register') }}" class="text-primary">Зарегистрироваться</a></h6>
            </div>
            <div class="modal-footer clearfix">
                <div class="float-left">
                    <a href="{{ route('password.request') }}" class="btn-lg btn btn-link">Сброс пароля</a>
                </div>
                <div class="float-right">
                    <button class="btn btn-primary btn-lg" type="submit" onclick="event.preventDefault();document.getElementById('login').submit();">Войти</button>
                </div>
            </div>
        </div>
    </div>
@endsection
