<!-- header area start -->
<header>
    <div class="header__area header__shadow white-bg" id="header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                    <div class="logo"><a href="/">
                        <h3 style="font-weight:900">BRAINDEAD</h3>
                    </a>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-6 d-none d-lg-block">
                    <div class="main-menu d-flex justify-content-end">
                        <nav id="mobile-menu">
                            <ul>
                                
                                <li>
                                    <div class="hero__search-inner">
                                        <div class="hero__search-input">
                                            <span><i class="far fa-search"></i></span>
                                            <input type="text" placeholder="Cari pertanyaanmu..">
                                        </div>
                                    </div>
                                </li>
                                <li class="">
                                    <a href="{{route('ask')}}">Ask Question</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-10 col-md-8 col-6">
                    <div class="header__action d-flex align-items-center justify-content-end">

                        @auth
                            <div class="header__login header__login-2 d-none d-sm-block dropdown">
                                <a class="" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                            
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{route('dashboard')}}">My Question</a></li>
                                  </ul>
                            </div>
                            <div class="header__btn d-none d-xl-block">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="m-btn m-btn-2" type="submit">Log Out</button>
                                </form>
                            </div>
                        @endauth

                        @guest
                            <div class="header__login header__login-2 d-none d-sm-block">
                                <a href="{{ route('login') }}"><i class="far fa-unlock"></i> Log In</a>
                            </div>
                            <div class="header__btn d-none d-xl-block">
                                <a href="{{ route('register') }}" class="m-btn m-btn-2">Register</a>
                            </div>
                        @endguest

                        <div class="sidebar__menu d-lg-none">
                            <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->



<!-- sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="fal fa-times"></i></span>
                <span>close</span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="/">
                    <h3 style="font-weight:900;color: white">BRAINDEAD</h3>
                </a>
            </div>
            <div class="mobile-menu"></div>
            @auth
            <div class="sidebar__action mt-50">
                <div class="sidebar__login mt-15">
                    <a href="{{ route('logout') }}"><i class="far fa-sign-out"></i> Log Out</a>
                </div>
            </div>
            @endauth
            @guest
            <div class="sidebar__action mt-50">
                <div class="sidebar__login mt-15">
                    <a href="{{ route('login') }}"><i class="far fa-unlock"></i> Log In</a>
                </div>
            </div>
            @endguest
        </div>
    </div>
</div>
<!-- sidebar area end -->
