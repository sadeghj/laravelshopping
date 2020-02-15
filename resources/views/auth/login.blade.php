@extends('layouts.marketshop3.mastermain_free')

@section('content')
<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ route('login') }}">حساب کاربری</a></li>
        <li><a href="{{ route('login') }}"> ورود</a></li>
      </ul>
      <!-- Breadcrumb End-->
<div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <h2 class="subtitle">ورود کاربران </h2>
        <p><strong>     </strong></p>
          <div class="form-group">
            <label class="control-label" for="input-email">آدرس ایمیل</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus value="" placeholder="آدرس ایمیل"  />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label class="control-label" for="input-password">رمز عبور</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" value="" placeholder="رمز عبور"  />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <br />
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('مرا به خاطر آور') }}
                        </label>
                    </div>
                </div>
            </div>
            <a href="{{ route('register') }}"> ثبت نام </a>
        </div>
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('ورود') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('فراموشی رمز عبور') }}
                        </a>
                    @endif
                </div>
            </div>
      </div>
    </form>
</div>
</div>
</div>
</div>
@endsection
