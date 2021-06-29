@extends('layouts.app-bootstrap5')
@section('content')
   <div class="container">
       <div class="form-signin text-center">
           <form action="{{ route('login') }}" method="POST">
               @csrf
               <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
               <h1 class="h3 mb-3 fw-normal">Авторизация</h1>

               <div class="form-floating">
                   <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="Ваша почта" name="email">
                   @error('email')
                       <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror

               </div>
               <div class="form-floating">
                   <input type="password" class="form-control" id="floatingPassword" placeholder="Пароль" required name="password">
                   @error('password')
                   <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
               </div>

               <div class="checkbox mb-3">
                   <label>
                       <input type="checkbox" value="remember-me"> Запомнить меня
                   </label>
                   <a href="{{ route('register') }}" class="text-dark border-bottom">Нет аккаунта?</a>
               </div>
               <button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button>
           </form>
       </div>
   </div>
@endsection
