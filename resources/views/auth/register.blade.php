@extends('frontend.layout.app')

@section('content')


<!-- Inner start -->
<section class="signup-inner inner-banner bg-cover" style="background-image: url('frontend/assets/img/bg/bg-abt.jpg');">
    <h1 class="transform-center">{{trans('main.signup')}}</h1>
</section>
<section class=" shop-bnr bnr-pagination pt-35 pt-sm-20 pb-45 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{trans('main.signup')}}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="/" class="shop-bg">{{trans('main.home')}} </a>
                    </li>
                    <li>{{trans('main.signup')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- login start -->
<section class=" signup-form login pt-80 pb-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                <div class="login-image bg-cover h-100" style="background-image: url('frontend/assets/img/shop/all-items.jpg');">

                </div>
            </div>
            <div class="col-xl-5 col-lg-6 ">
                <div class="form-area bg-yellow">
                    <h2 class="f-700 mb-15 txt-center">{{trans('main.createacc')}}</h2>
                    <p class="txt-center">{{trans('main.createdesc')}}</p>
                    @include('frontend.inc.messages')
                    <form action="{{ url('/register') }}" method="post">
                      @csrf
                        <div class="form-group relative mb-25 mb-sm-20">
                            <input type="text" name="name" class="form-control input-lg input-white shadow-5 txt-center" id="name" placeholder="{{trans('main.username')}}">
                            <i class="far fa-user transform-v-center"></i>
                        </div>
                        <div class="form-group relative mb-25 mb-sm-20">
                            <input type="email" name="email" class="form-control input-lg input-white shadow-5 txt-center" id="email" placeholder="{{trans('main.email')}}">
                            <i class="far fa-envelope transform-v-center"></i>
                        </div>
                        <div class="form-group relative mb-20 mb-sm-20"> <span class="required"></span>
                            <input type="password" name="password" class="form-control input-lg input-white shadow-5 txt-center" id="pwd" placeholder="{{ trans('main.password')}}">
                            <i class="fas fa-lock transform-v-center"></i>
                        </div>
                        <div class="form-group relative mb-20 mb-sm-20">
                            <input  type="password" class="form-control input-lg input-white shadow-5 txt-center" id="pwd2" name="password_confirmation" placeholder= "{{ trans('main.confirm_password') }}">
                            <i class="fas fa-lock transform-v-center"></i>
                        </div>
                        <div class="form-group relative mb-20 mb-sm-20">
                            <input  type="text" name="phone" class="form-control input-lg input-white shadow-5 txt-center"   placeholder= "{{ trans('main.phone') }}">
                            <i class="fas fa-phone transform-v-center"></i>
                        </div>
                        <button type="submit" class="btn btn-black btn-block shadow-4 mt-20">{{ trans('main.signup')}}</button>
                        <div class="signup-login text-center">
                            <p class="mt-15 fs-13">
                              {{trans('main.areadymemeber')}}<a href="{{ url('/login') }}" class="ml-5 mb-0 d-inline-block f-500">{{trans('main.login')}}</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- logi end -->
@endsection
