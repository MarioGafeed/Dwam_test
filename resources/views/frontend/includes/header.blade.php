
<!-- Header start -->
<header class="type4 transition-5 relative mg-header mg-header-dark">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-2 col-4">
                <div class="logo2">
                    <a href="/">
                        <img src="{{ asset('frontend/assets/img/logo/logo5.png') }}" alt="">
                    </a>
                </div>
            </div>
            <!-- Nav -->
            <div class="col-md-8 col-4 text-right ">
                <span class="toggle-category">
                    <i class="fas fa-chevron-down"></i>
                  </span>
                  <!-- Add Logout -->
                  <form id="logout-form" action="{{ url('/logout') }}" method="post" style="display: none;">
                    @csrf
                    <input type="submit" value="{{ trans('main.logout') }}">
                  </form>

                <ul class="nav nav-links1 list-type2 justify-content-center">
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="/">{{ trans('main.home') }}</a>
                        <!-- <ul class="sub-menu">
                            <li class="mg-nav-item nav-link"> <a href="index.html">Homepage 1</a></li>
                            <li class="mg-nav-item nav-link"> <a href="index-2.html">Homepage 2</a></li>
                            <li class="mg-nav-item nav-link"> <a href="index-3.html">Homepage 3</a></li>
                            <li class="mg-nav-item nav-link"> <a href="index-4.html">Homepage 4</a></li>
                        </ul> -->
                    </li>
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="{{ url("/vposts/index") }}">{{ trans('main.videos') }}</a>
                        <ul class="sub-menu">
                            <li class="mg-nav-item nav-link"> <a href="#" onclick='alert("قريباً في الإصدار القادم")'>{{ trans('main.live_videos') }}</a></li>
                            <!-- Navbar video foreach -->
                            <x-navbar></x-navbar>
                            <!-- End Navbar video foreach -->
                        </ul>
                    </li>
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="{{ url('/books/index') }}">{{ trans('main.books') }}</a>
                        <ul class="sub-menu">
                          <ul class="sub-menu">
                              <li class="mg-nav-item nav-link"> <a href=" {{ url('/download_local/?file=Mercy.pdf') }} "     target="_blank" >{{ trans('main.book1') }}</a></li>
                              <li class="mg-nav-item nav-link"> <a href=" {{ url('/download_local/?file=today.pdf') }} "     target="_blank" >{{ trans('main.book2') }}</a></li>
                              <li class="mg-nav-item nav-link"> <a href=" {{ url('/download_local/?file=Kolman.pdf') }} "    target="_blank" >{{ trans('main.book3') }}</a></li>
                              <li class="mg-nav-item nav-link"> <a href=" {{ url('/download_local/?file=invitaion.pdf') }} " target="_blank" >{{ trans('main.book4') }}</a></li>
                          </ul>
                        </ul>
                    </li>
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="#" onclick='alert("معذرة تحت الإنشاء")'>{{ trans('main.book_room') }}</a>
                    </li>
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="{{ url("/posts/index") }}">{{ trans('main.blogs') }}</a>
                        <ul class="sub-menu">
                          <!-- Navbar Cats foreach -->
                          <x-navbar2></x-navbar2>
                          <!-- End Navbar Cats foreach -->
                        </ul>
                    </li>
                    @guest
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="{{ url('/login') }}" >{{ trans('main.login') }}</a>
                    </li>

                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                      <a href="{{ url('/register') }}" >{{ trans('main.register') }}</a>
                    </li>
                    @endguest

                    @auth
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a  href="{{ url('profile') }}" >{{ trans('main.profile') }}</a>
                    </li>
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a id="logout-link" href="#" >{{ trans('main.logout') }}</a>
                    </li>
                    @endauth

                  <!-- <h3 style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }}  " class="form-title font-green">{{ trans('main.login') }}</h3> -->

                  @if (GetLanguage() == 'en')
                   <li class="nav-link">
                      <!-- <a style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }} ; position: absolute;  {{ GetLanguage() != 'en' ? 'left' : 'right' }} : 30px; top: {{ $errors->count() ? '108px' : '37px' }}; text-decoration: none" href="{{ url('/lang/ar') }}"> -->

                      <a href="{{ url('/lang/ar') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                          <img src="{{ asset('frontend/assets/img/logo/Egypt.jpg') }}" title="English" alt="English"> {{ ' عربي ' }} <i class="fa fa-globe"></i>
                      </a>
                  </li>
                  @else
                  <li class="nav-link">
                      <a href="{{ url('/lang/en') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                          {{ ' English ' }} <i class="fa fa-globe"></i>
                      </a>
                  </li>
                  @endif
                        <!-- mega menu page-->
                </ul>
            </div>
            <!-- End Navbar -->
        </div>
    </div>
    <!-- <a href="#" onclick='alert("في الإصدار القادم صلواتكم")' class="db-block-{{GetDirection()}} ml-35 ml-xs-25">
        <div class="transform-center">{{ trans('main.donate') }}</div>
    </a> -->
    <a href="#" class="menu-bars db-none right-menu ml-35 ml-xs-25">
        <div class="bars transform-center">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>

    <!--RIGHT MENU-->
    <div class="col-md-2 col-2 text-right">
      <div class="icon-links d-flex align-items-center justify-content-end">
        <div class="bg-menu-overlay transition-5 opacity-8"></div>
        <div class="fx-menu-wrapper bg-yellow-op-9 transition-5 d-flex justify-content-between flex-column">
          <div class="fx-menu-header d-flex justify-content-between">
            <p class="rbt-slab fs-13 f-700">{{trans('main.dwam')}}</p>
            <div class="close-menu">
              <a href="#" onclick='alert("في الإصدار القادم صلواتكم")' class=""> <span></span>
                <span></span>
              </a>
            </div>
          </div>
          <!-- <a href="#" onclick='alert("في الإصدار القادم صلواتكم")' class="btn btn-black mt-30 mb-35 mb-xs-20">{{ trans('main.donate') }}</a> -->
          <div class="fx-menu-content mb-15" >
            <ul class="fx-menu-links rbt-slab txt-{{GetDirection()}}">
              <!-- <li> <a href="#" >{{ trans('main.home') }}</a>
              </li> -->
              <li> <a href="{{ url("/vposts/index") }}" class="has-sub" >{{ trans('main.videos') }}</a>
                <ul class="submenu">
                  <li class="mg-nav-item nav-link"  dir="ltr"> <a href="#" onclick='alert("قريباً في الإصدار القادم")'>{{ trans('main.live_videos') }}</a></li>
                  <!-- Navbar video foreach -->
                  <x-navbar></x-navbar>
                  <!-- End Navbar video foreach -->
                </ul>
              </li>
              <li> <a href="{{ url('/books/index') }}" class="has-submenu"  >{{ trans('main.books') }}</a>
                <ul class="submenu">
                  <li class="mg-nav-item nav-link" > <a href="{{ url('/download_local/?file=Mercy.pdf') }}"  target="_blank" >{{ trans('main.book1') }}</a></li>
                  <li class="mg-nav-item nav-link" > <a href="{{ url('/download_local/?file=today.pdf') }} " target="_blank">{{ trans('main.book2') }}</a></li>
                  <li class="mg-nav-item nav-link" > <a href="{{ url('/download_local/?file=Kolman.pdf') }} " target="_blank">{{ trans('main.book3') }}</a></li>
                  <li class="mg-nav-item nav-link" > <a href="{{ url('/download_local/?file=invitaion.pdf') }} " target="_blank">{{ trans('main.book4') }}</a></li>
                </ul>
              </li>
              <li> <a href="#" class="submenu" onclick='alert("معذرة تحت الإنشاء")' >{{ trans('main.book_room') }}</a>
              </li>
              <li> <a href="{{ url("/posts/index") }}" class="has-sub"  >{{ trans('main.blogs') }}</a>
                <ul class="submenu">
                  <!-- Navbar Cats foreach -->
                  <x-navbar2></x-navbar2>
                  <!-- End Navbar Cats foreach -->
                </ul>
              </li>
            </ul>
            @if (GetLanguage() == 'en')
            <li class="nav-link">
              <!-- <a style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }} ; position: absolute;  {{ GetLanguage() != 'en' ? 'left' : 'right' }} : 30px; top: {{ $errors->count() ? '108px' : '37px' }}; text-decoration: none" href="{{ url('/lang/ar') }}"> -->

              <a href="{{ url('/lang/ar') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                <img src="{{ asset('frontend/assets/img/logo/Egypt.jpg') }}" title="Arabic" alt="Arabic"> {{ ' عربي ' }} <i class="fa fa-globe"></i>
              </a>
            </li>
            @else
            <li class="nav-link">
              <a href="{{ url('/lang/en') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                {{ ' English ' }} <i class="fa fa-globe"></i>
              </a>
            </li>
            @endif
          </div>
          <div class="fx-menu-footer">
            <ul class="mg-header social-icons menu-social black">
              <li> <a href="https://www.facebook.com/DoctorsWithAMission/" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li> <a href="https://youtube.com/channel/UCPg_ihi25b6MBda2Obc0_qA" target="_blank"><i class="fab fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</header>
<!-- Header end -->
