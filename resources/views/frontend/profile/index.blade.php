@extends('frontend.layout.app')

@section('content')

<!-- Inner start -->
<section class="login-inner inner-banner bg-cover" style="background-image: url('frontend/assets/img/bg/bg-abt.jpg');">
</section>
<section class=" shop-bnr bnr-pagination pt-35 pt-sm-20 pb-45 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{ trans('main.profile') }}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="" class="shop-bg">{{ trans('main.home') }} </a>
                    </li>
                    <li>{{ trans('main.profile') }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end for Posts -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 ">
                <div class="form-area bg-yellow">
                    <h3 class="f-700 mb-15 txt-center">{{ trans('main.yposts') }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="table-responsive-md text-align-center">
                    <table class="table table-hover table mg-schedules-table-2">
                        <thead class="thead-dark">
                            <tr>
                              <th scope="col">{{ trans('main.image') }}</th>
                              <th scope="col">{{trans('main.postn')}}</th>
                              <th scope="col">{{trans('main.status')}}</th>
                              <th scope="col">{{trans('main.date')}}</th>
                              <th scope="col">{{trans('main.edit')}}</th>
                              <th scope="col">{{trans('main.delete')}}</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach(Auth::user()->posts as $post )
                            <tr>
                            <th scope="row">
                              <div class="entry-thumb">
                                  <a href="{{ url("/post/show/{$post->id}") }}" target="_blank" ><img src="{{ ShowImage($post->image) }}" class="img-circle" alt="Post Image"></a>
                              </div>
                              <td>
                                <a href="{{ url("/post/show/{$post->id}") }}" target="_blank">
                              @if(GetLanguage() == 'en')
                              {{json_decode($post->title)->en}}
                              @else
                              {{json_decode($post->title)->ar}}
                              @endif
                                </a>
                             </td>
                             <td>
                               {{$post->status}}
                             </td>

                             <td>
                               {{$post->updated_at->format('Y/m/d')}}
                             </td>
                             <td class="prdt-edit"><a href="{{ url("/admin/posts/{$post->id}/edit") }}"><i class="far fa-edit"></i></a></td>
                             <td class="prdt-remove"><a href="{{ url('admin/posts#') }}"><i class="far fa-trash-alt"></i></a></td>

                            </th>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Inner end for Video Posts -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 ">
                    <div class="form-area bg-yellow">
                        <h3 class="f-700 mb-15 txt-center">{{ trans('main.yvposts') }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="table-responsive-md text-align-center">
                        <table class="table table-hover table mg-schedules-table-2">
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">{{ trans('main.image') }}</th>
                                  <th scope="col">{{trans('main.vpostn')}}</th>
                                  <th scope="col">{{trans('main.status')}}</th>
                                  <th scope="col">{{trans('main.date')}}</th>
                                  <th scope="col">{{trans('main.edit')}}</th>
                                  <th scope="col">{{trans('main.delete')}}</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                @foreach(Auth::user()->vposts as $vpost )
                                <tr>
                                <th scope="row">
                                  <div class="entry-thumb">
                                      <a href="{{ url("/vpost/show/{$vpost->id}") }}" target="_blank" ><img src="{{ ShowImage($vpost->image) }}" class="img-circle" alt="Video Post Image"></a>
                                  </div>
                                  <td>
                                    <a href="{{ url("/vpost/show/{$vpost->id}") }}" target="_blank">
                                  @if(GetLanguage() == 'en')
                                  {{json_decode($vpost->title)->en}}
                                  @else
                                  {{json_decode($vpost->title)->ar}}
                                  @endif
                                    </a>
                                 </td>
                                 <td>
                                   {{$vpost->status}}
                                 </td>

                                 <td>
                                   {{$vpost->updated_at->format('Y/m/d')}}
                                 </td>
                                 <td class="prdt-edit"><a href="{{ url("/admin/vposts/{$vpost->id}/edit") }}"><i class="far fa-edit"></i></a></td>
                                 <td class="prdt-remove"><a href="{{ url('admin/vposts#') }}"><i class="far fa-trash-alt"></i></a></td>

                                </th>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



@endsection
