@extends('frontend.layout.app')

@section('content')


<!-- Inner start -->
<section class="inner-banner bg-cover" style="background-image: url('assets/images/Banner/inner-banner-1.jpg');">
</section>
<section class="bnr-pagination pt-sm-20 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">Blog</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="index.html" class="yellow">Home </a>
                    </li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- work gallery start -->
<section class="blog-listing pt-80 pb-80">
    <div class="container">
        <div class="row">
            <article class="col-lg-4 col-md-6">
                <div class="each-blog">
                    <div class="blog-img relative">
                        <img src="assets/images/blog/blog1.jpg" alt="">
                        <a href="blog-detail.html" class="blog-link transform-center"> <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="blog-text">
                        <h2 class="mt-20 mb-20">
                            <a href="blog-detail.html" class="f-700 fs-19">On the other hand...</a>
                        </h2>
                        <div class="blog-data">
                            <ul class="d-flex align-items-center">
                                <li><i class="far fa-calendar-alt"></i>21-04-2019</li>
                                <li><i class="fas fa-comment"></i>35 Comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="lined-btn"> <a href="#" class="lined-button rbt-slab">Read More..</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work gallery end -->

@endsection
