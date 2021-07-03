@extends('frontend.layout.app')

@section('content')
<!-- Inner start -->
<section class="login-inner inner-banner bg-cover" style="background-image: url('frontend/assets/img/bg/reset.jpg');">
</section>
<section class=" shop-bnr bnr-pagination pt-35 pt-sm-20 pb-45 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{ trans('main.reset_password') }}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="" class="shop-bg">{{ trans('main.home') }} </a>
                    </li>
                    <li>{{ trans('main.reset_password') }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<section class="login-form login pt-80 pb-80">

    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 ">
          <div class="form-area bg-yellow" style="padding:23px 25px 35px 20px ">
                <div class="f-700 mb-15 txt-center">{{ trans('main.reset_password') }}</div>
@include('frontend.inc.messages')
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ request()->route('token') }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('main.email') }}</label>

                            <div class="col-md-6">
                              <div class="form-group relative mb-25 mb-sm-20">
                                <input id="email" type="email" class="form-control input-lg input-white shadow-5 txt-center" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}"  required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('main.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ trans('main.password_conf') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('main.reset_password') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
@endsection
