@extends('frontend.layout.app')

@section('content')

<!-- Inner start -->
<section class="login-inner inner-banner bg-cover" style="background-image: url('frontend/assets/img/bg/bg-forgetpass.jpg');">
</section>
<section class=" shop-bnr bnr-pagination pt-35 pt-sm-20 pb-45 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{ trans('main.forgetpass') }}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="" class="shop-bg">{{ trans('main.home') }} </a>
                    </li>
                    <li>{{ trans('main.forgetpass') }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- forgetpass start -->
<section class="login-form login pt-80 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 ">
                <div class="form-area bg-yellow">
                    <h2 class="f-700 mb-15 txt-center">{{ trans('main.haveaccount') }}</h2>
                    <p class="txt-center">"{{ trans('main.haveaccountdesc') }}"</p>
                    @include('frontend.inc.messages')
                    <form action="{{ url('/forgot-password') }} " method="post">
                      @csrf
                        <div class="form-group relative mb-25 mb-sm-20">
                            <input type="email" class="form-control input-lg input-white shadow-5 txt-center" id="email" name="email" placeholder=" {{ trans('main.email') }}">
                            <i class="fas fa-mail-bulk transform-v-center"></i>
                        </div>
                        <button type="submit" class="btn btn-black btn-block shadow-4 mt-20">{{ trans('main.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- logi end -->


@endsection
