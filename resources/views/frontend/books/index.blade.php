@extends('frontend.layout.app')

@section('content')


<!-- Inner start -->
<!-- Inner start -->
<section class="inner-banner bg-cover" style="background-image: url('/frontend/assets/img/bg/book-back.jpg');">
</section>
<section class="bnr-pagination pt-sm-20 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{ trans('main.books') }}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="/" class="yellow">{{trans('main.home')}} </a>
                    </li>
                    <li>{{trans('main.books')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- Album gallery start -->
<section class="albums pt-80 pb-80">
    <div class="container">
        <div class="row">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">{{ trans('main.bookname') }}</th>
                <th scope="col">{{trans('main.action')}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{trans('main.book1')}}</td>
                <td>
                  <a href="{{ url('/download_local/?file=Mercy.pdf') }}" target="_blank">{{trans('main.vdownload')}}</a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>{{trans('main.book2')}}</td>
                <td>
                  <a href="{{ url('/download_local/?file=today.pdf') }}" target="_blank">{{trans('main.vdownload')}}</a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>{{trans('main.book3')}}</td>
                <td>
                  <a href="{{ url('/download_local/?file=Kolman.pdf') }}" target="_blank">{{trans('main.vdownload')}}</a>
                </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>{{trans('main.book4')}}</td>
                <td>
                  <a href="{{ url('/download_local/?file=invitaion.pdf') }}" target="_blank">{{trans('main.vdownload')}}</a>
                </td>
              </tr>
            </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Album gallery end -->


@endsection
