@extends('layouts.app-pure')
@section('content')
    <div class=" w-100">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title">
                    Регистрация
                </h5>
                <div class="divider row"></div>
                <form class="form-row" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleEmail"><small>Почта (логин)</small><span class="text-danger">*</span></label>
                            <input name="email" id="exampleEmail"  type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="fio"><small>Ф.И.О (для обращения)</small><span class="text-danger">*</span></label>
                            <input name="name" id="fio" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="type"><small>Вид</small><span class="text-danger">*</span></label>
                            <select name="type" id="type" class="custom-select" required >
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
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="org"><small>Наименование</small><span class="text-danger">*</span></label>
                            <input type="text" id="org" name="org" required class="form-control @error('org') is-invalid @enderror" value="{{ old('org') }}">
                            @error('org')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="org_type"><small>Вид деятельности</small><span class="text-danger">*</span></label>
                            <select name="org_type" id="org_type" class="custom-select @error('org_type') is-invalid @enderror" required value="{{ old('org_type') }}">
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
                    </div>
                    <div class="col-md-3">
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
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="city"><small>Город</small><span class="text-danger">*</span></label>
                            <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" required value="{{ old('city') }}">
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="zip"><small>Индекс</small></label>
                            <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="address"><small>Адрес</small> <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control" required value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="phone"><small>Контактный телефон</small><span class="text-danger">*</span></label>
                            <input type="text" name="phone" id="phone" class="form-control input-mask-trigger" data-inputmask="'mask': '+9(999) 999-9999'" required value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="site"><small>WWW страница</small></label>
                            <input type="text" name="site" id="site" class="form-control" value="{{ old('site') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="icq"><small>icq</small></label>
                            <input type="text" name="icq" id="icq" class="form-control" value="{{ old('icq') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="Skype"><small>Skype</small></label>
                            <input type="text" name="skype" id="Skype" class="form-control" value="{{ old('skype') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="diller"><small>Код дилера (если есть)</small></label>
                            <input type="text" name="diller" id="diller" class="form-control" value="{{ old('diller') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="seo"><small>Откуда узнали о нас</small></label>
                            <select name="seo" id="seo" class="custom-select">
                                <option value="0">Прочее</option>
                                <option value="1">Поисковые системы</option>
                                <option value="2">Рекомендация от друзей</option>
                                <option value="3">От сотрудников компании</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="password_confirmation"><small>Подтверждение пароля</small><span class="text-danger">*</span></label>
                            <input name="password_confirmation" id="password_confirmation"  type="password" class="form-control" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="divider row"></div>
                        <h6 class="mb-0 text-center">Уже есть аккаунт?
                            <a href="login.html" class="text-primary">Войти</a> | <a href="javascript:void(0);" class="text-primary">Сброс пароля</a>
                        </h6>
                        <button class="btn-wide btn-shadow btn-hover-shine btn btn-primary my-3" type="submit">Регистрация</button>
                    </div>

                </form>

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
