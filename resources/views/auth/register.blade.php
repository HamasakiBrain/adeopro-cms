@extends('layouts.app-pure')
@section('content')
    <div class="modal-dialog w-100">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title">
                    Регистрация
                </h5>
                <div class="divider row"></div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="exampleEmail"><small>Почта (логин)</small><span class="text-danger">*</span></label>
                            <input name="email" id="exampleEmail"  type="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="fio"><small>Ф.И.О (для обращения)</small><span class="text-danger">*</span></label>
                            <input name="name" id="fio"  type="text" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="type"><small>Вид</small><span class="text-danger">*</span></label>
                            <select name="type" id="type" class="custom-select" required>
                                <option value="0">Выбрать</option>
                                <option value="1">Частное лицо</option>
                                <option value="2">ИП</option>
                                <option value="3">ООО</option>
                                <option value="4">ЗАО</option>
                            </select>
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="position-relative form-group">
                            <label for="org"><small>Наименование</small><span class="text-danger">*</span></label>
                            <input type="text" id="org" name="org" required class="form-control @error('org') is-invalid @enderror">
                            @error('org')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="position-relative form-group">
                            <label for="org_type"><small>Вид деятельности</small><span class="text-danger">*</span></label>
                            <select name="org_type" id="org_type" class="custom-select @error('org_type') is-invalid @enderror" required>
                                <option value="0">Выбрать</option>
                                <option value="1">Автосервис</option>
                                <option value="2">Магазин автозапчастей</option>
                                <option value="4">Стол приема заказов</option>
                            </select>
                            @error('org_type')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="position-relative form-group">
                            <label for="country"><small>Страна</small><span class="text-danger">*</span></label>
                            <select name="country" id="country" class="custom-select @error('country') is-invalid @enderror" required>
                                <option value="0">Выбрать</option>
                                <option value="1">Абхазия</option>
                                <option value="2">Азербайджан</option>
                                <option value="4">Таджикистан</option>
                            </select>
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="examplePassword"><small>Пароль</small><span class="text-danger">*</span></label>
                            <input name="password" id="examplePassword"  type="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="password_confirmation"><small>Подтверждение пароля</small><span class="text-danger">*</span></label>
                            <input name="password_confirmation" id="password_confirmation"  type="password" class="form-control" autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="mt-3 position-relative form-check">
                    <input name="check" id="exampleCheck" type="checkbox" class="form-check-input" required>
                    <label for="exampleCheck" class="form-check-label">Я даю свое согласие на обработку настоящих персональных данных на условиях и для целей определенных в соглашении</a>.</label>
                </div>
                <div class="divider row"></div>
                <h6 class="mb-0">Уже есть аккаунт?
                    <a href="{{ route('login') }}" class="text-primary">Войти</a> | <a href="{{ route('password.request') }}" class="text-primary">Сброс пароля</a>
                </h6>
            </div>
            <div class="modal-footer d-block text-center">
                <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Регистрация</button>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
