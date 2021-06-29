@extends('layouts.app-bootstrap5')
@section('content')
   <div class="container">
       <div class="app-page-title h2 mt-3 text-center">
           <div class="page-title-wrapper">
               <div class="page-title-heading">
                   <div>Личный кабинет</div>
               </div>
           </div>
       </div>
       @foreach ($errors->all() as $error)
           <p class="text-danger">{{ $error }}</p>
       @endforeach
       @if (Session::has('message'))
           {{ Session::get('message') }}
       @endif
       <div class="col-md-12 col-lg-12 col-xl-12">
           <div class="card-shadow-primary card-border mb-3 card">
               <div>
                   <div class="card-header">Настройки</div>
                   <div class="card-body">
                       <form class="form-row" action="{{ route('user.update') }}" method="POST">
                           @csrf
                           <div class="col-md-3">
                               <div class="position-relative form-group">
                                   <label for="exampleEmail"><small>Почта (логин)</small><span class="text-danger">*</span></label>
                                   <input name="email" id="exampleEmail" type="email"
                                          class="form-control @error('email') is-invalid @enderror"
                                          value="{{ $user->email }}" autofocus disabled>
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
                                   <input name="name" id="fio" type="text"
                                          class="form-control @error('name') is-invalid @enderror"
                                          value="{{ $user->name }}">
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
                                   <select name="type" id="type" class="custom-select" required>
                                       <option value="0" @if($user->type == '0') selected @endif>Выбрать</option>
                                       <option value="1" @if($user->type == '1') selected @endif>Частное лицо</option>
                                       <option value="2" @if($user->type == '2') selected @endif>ИП</option>
                                       <option value="3" @if($user->type == '3') selected @endif>ООО</option>
                                       <option value="4" @if($user->type == '4') selected @endif>ЗАО</option>
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
                                   <input type="text" id="org" name="org" required
                                          class="form-control @error('org') is-invalid @enderror" value="{{ $user->org }}">
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
                                   <select name="org_type" id="org_type"
                                           class="custom-select @error('org_type') is-invalid @enderror" required>
                                       <option value="0"  @if($user->org_type == '0') selected @endif>Выбрать</option>
                                       <option value="1"  @if($user->org_type == '1') selected @endif>Автосервис</option>
                                       <option value="2"  @if($user->org_type == '2') selected @endif>Магазин автозапчастей</option>
                                       <option value="3"  @if($user->org_type == '3') selected @endif>Стол приема заказов</option>
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
                                   <select name="country" id="country"
                                           class="custom-select @error('country') is-invalid @enderror" required>
                                       @foreach(\App\Models\Country::all() as $country)
                                           <option value="{{ $country->id }}"  @if($user->country == $country->id) selected @endif>{{ $country->name }}</option>
                                       @endforeach
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
                                   <input type="text" name="city" id="city"
                                          class="form-control @error('city') is-invalid @enderror" required
                                          value="{{ $user->city }}">
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
                                   <input type="text" name="zip" id="zip" class="form-control" value="{{ $user->zip }}">
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="position-relative form-group">
                                   <label for="address"><small>Адрес</small> <span class="text-danger">*</span></label>
                                   <input type="text" name="address" id="address" class="form-control" required
                                          value="{{ $user->address }}">
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="position-relative form-group">
                                   <label for="phone"><small>Контактный телефон</small><span
                                           class="text-danger">*</span></label>
                                   <input type="text" name="phone" id="phone" class="form-control input-mask-trigger"
                                          data-inputmask="'mask': '+9(999) 999-9999'" required value="{{ $user->phone }}">
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="position-relative form-group">
                                   <label for="site"><small>WWW страница</small></label>
                                   <input type="text" name="site" id="site" class="form-control" value="{{ $user->site }}">
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="position-relative form-group">
                                   <label for="icq"><small>icq</small></label>
                                   <input type="text" name="icq" id="icq" class="form-control" value="{{ $user->icq }}">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="position-relative form-group">
                                   <label for="Skype"><small>Skype</small></label>
                                   <input type="text" name="skype" id="Skype" class="form-control"
                                          value="{{ $user->skype }}">
                               </div>
                           </div>
                           <div class="col-md-12 text-center">
                               <button class="btn-wide btn-shadow btn-hover-shine btn btn-primary my-3" type="submit">
                                   Сохранить
                               </button>
                           </div>

                       </form>
                       <form action="{{ route('passw.update') }}" class="form-row card" method="POST">
                           @csrf
                           <div class="card-header">Пароль</div>
                           <div class="card-body row">
                               <div class="col-md-6">
                                   <div class="position-relative form-group">
                                       <label for="examplePassword"><small>Старый пароль</small><span
                                               class="text-danger">*</span></label>
                                       <input name="oldPassword" id="examplePassword" type="password"
                                              class="form-control @error('Oldpassword') is-invalid @enderror" value="" required>
                                       @error('Oldpassword')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                       @enderror
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="position-relative form-group">
                                       <label for="password_confirmation"><small>Новый пароль</small><span
                                               class="text-danger">*</span></label>
                                       <input name="newPassword" id="password_confirmation" type="password"
                                              class="form-control" autocomplete="new-password" required>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-12 text-center">
                               <button class="btn-wide btn-shadow btn-hover-shine btn btn-primary my-3" type="submit">
                                   Обновить пароль
                               </button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
