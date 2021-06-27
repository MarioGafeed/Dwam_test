@extends('frontend.layout.app')

@section('content')

<!-- Inner start -->
<section class="login-inner inner-banner bg-cover" style="background-image: url('assets/img/bg/bg-abt.jpg');">
</section>
<section class=" shop-bnr bnr-pagination pt-35 pt-sm-20 pb-45 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">Login</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="" class="shop-bg">Home </a>
                    </li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- login start -->
<section class="login-form login pt-80 pb-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                <div class="login-image bg-cover h-100" style="background-image: url('assets/img/shop/all-items.jpg');">

                </div>
            </div>
            <div class="col-xl-5 col-lg-6 ">
                <div class="form-area bg-yellow">
                    <h2 class="f-700 mb-15">Have an Account?</h2>
                    <p>Quisque enim ipsum, commodo et venenatis rutrum, luctus in enim venenatis.</p>
                    <form action="#">
                        <div class="form-group relative mb-25 mb-sm-20">
                            <input type="text" class="form-control input-lg input-white shadow-5" id="name" placeholder="Username">
                            <i class="far fa-user transform-v-center"></i>
                        </div>
                        <div class="form-group relative mb-20 mb-sm-20">
                            <input type="password" class="form-control input-lg input-white shadow-5" id="pwd" placeholder="Password">
                            <i class="fas fa-lock transform-v-center"></i>
                        </div>
                        <div class="form-group form-check pl-0">
                            <div class="d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                    <label class="custom-control-label fs-13" for="customCheck1"><span class="label-check">Remember me</span></label>
                                </div>
                                <a href="" class="fs-12 black">Forgot Password?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-black btn-block shadow-4 mt-20">LOGIN</button>
                        <div class="signup-login text-center">
                            <p class="mt-15 fs-13">
                                New here?<a href="" class="ml-5 mb-0 d-inline-block f-500">Sign up</a>
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
