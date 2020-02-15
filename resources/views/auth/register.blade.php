@extends('layouts.marketshop3.mastermain_free')

@section('content')
  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ route('login') }}">حساب کاربری</a></li>
        <li><a href="{{ route('register') }}">ثبت نام</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div class="col-sm-9" id="content">
          <h1 class="title">ثبت نام حساب کاربری</h1>
        <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="{{ route('login') }}">صفحه لاگین</a> مراجعه کنید.</p>
          <form method="POST" action="{{ route('register') }}" class="form-horizontal">
            @csrf
            <fieldset id="account">
              <legend>اطلاعات شخصی شما</legend>
              <div style="display: none;" class="form-group required">
                <label class="col-sm-2 control-label">گروه مشتری</label>
                <div class="col-sm-10">
                  <div class="radio">
                    <label>
                      <input type="radio" checked="checked" value="1" name="customer_group_id">
                      پیشفرض</label>
                  </div>
                </div>
              </div>
              <div class="form-group required">
                <label for="input-firstname" class="col-sm-2 control-label">نام</label>
                <div class="col-sm-10">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="نام"  >
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group required">
                <label for="input-lastname" class="col-sm-2 control-label">نام کاربری</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-lastname" placeholder="نام کاربری" value="" name="username">
                  @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group required">
                <label for="email" class="col-sm-2 control-label">آدرس ایمیل</label>
                <div class="col-sm-10">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="آدرس ایمیل" name="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="form-group required">
                <label for="phone" class="col-sm-2 control-label">شماره تلفن</label>
                <div class="col-sm-10">
                  <input type="tel" class="form-control" id="phone" placeholder="شماره تلفن" value="" name="phone">
                  @error('phone')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>
              </div>

            </fieldset>

            <fieldset>
              <legend>رمز عبور شما</legend>
              <div class="form-group required">
                <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>
                <div class="col-sm-10">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="رمز عبور">
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
              <div class="form-group required">
                <label for="input-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                <div class="col-sm-10">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="تکرار رمز عبور" >
                </div>
              </div>
            </fieldset>

            <div class="buttons">
              <div class="pull-right">
                <input type="checkbox" value="1" name="agree">
                &nbsp;من <a class="agree" href="#"><b>سیاست حریم خصوصی</b> را خوانده ام و با آن موافق هستم</a> &nbsp;
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('ادامه') }}
                        </button>
                    </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!--Middle Part End -->

      </div>
    </div>
  </div>

  <!-- Facebook Side Block Start -->
  <div id="facebook" class="fb-left sort-order-1">
    <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
    <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
      <div class="fb-xfbml-parse-ignore">
        <blockquote cite="https://www.facebook.com/harnishdesign/"><a href="https://www.facebook.com/harnishdesign/">هارنیش دیزاین</a></blockquote>
      </div>
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  </div>

@endsection
