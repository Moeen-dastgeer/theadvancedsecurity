
        <!--============================== Header Section Start ==============================-->
        <header id="header" class="nav-on-banner">
            <div class="main-nav py-3 d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav
                                class="navbar navbar-expand-lg navbar-light text-uppercase nav-white nav-primary-hover nav-primary-active fw-400">
                                <a class="navbar-brand" href="{{ url('/') }}"><img class="nav-logo"
                                        src="{{asset('web/assets/images/logo/logo3.svg')}}" alt="Patron"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#main-navbar-content" aria-controls="main-navbar-content"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="main-navbar-content">
                                    <ul class="navbar-nav justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle {{ Route::is('service')? 'active' : '' }}">Services</a>
                                            <ul class="dropdown-menu">
                                                @foreach ($services as $service)
                                                <li><a class="dropdown-item" href="{{ url('/service') }}/{{ $service->slug }}">{{$service->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::is('about')? 'active' : '' }}" href="{{url('about')}}">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::is('join-our-team')? 'active' : '' }}" href="{{url('join-our-team')}}">Join Our Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::is('contact')? 'active' : '' }}" href="{{url('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-sticky bg-secondary py-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">
                            <nav
                                class="navbar navbar-expand-lg navbar-light text-uppercase nav-white nav-primary-hover nav-primary-active">
                                <a class="navbar-brand" href="{{url('/')}}"><img class="nav-logo"
                                        src="{{asset('web/assets/images/logo/logo3.svg')}}" alt="Advance Security Logo"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#sticky-navbar-content" aria-controls="sticky-navbar-content"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="sticky-navbar-content">
                                    <ul class="navbar-nav justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle">Services</a>
                                            <ul class="dropdown-menu">
                                                @foreach ($services as $service)
                                                <li><a class="dropdown-item" href="{{ url('/service') }}/{{ $service->slug }}">{{$service->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('about')}}">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('join-our-team')}}">Join Our Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile py-10 bg-default d-lg-none">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-12">
                            <div class="h-100 md-py-10">
                                <div class="nav-leftpush-overlay">
                                    <nav
                                        class="navbar navbar-expand-lg navbar-light justify-content-between nav-dark nav-primary-hover">
                                        <a class="navbar-brand" href="{{url('/')}}" rel="home">
                                            <img class="mobile-logo" src="{{asset('web/assets/images/logo/logo4.png')}}" alt="Patron">
                                        </a> <button type="button" class="push-nav-toggle d-lg-none bg-white rounded-0">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="navbar-slide-push transation-this">
                                            <div
                                                class="login-signup bg-dark d-flex justify-content-between py-10 px-20 align-items-center">
                                                <span class="slide-nav-close"><i
                                                        class="flaticon-cancel flat-mini text-white"></i></span>
                                            </div>
                                            <div class="menu-and-category px-4">
                                                <div class="menu-primary-menu-container">
                                                    <ul class="navbar-nav justify-content-end">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{url('/')}}">Home</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle">Services</a>
                                                            <ul class="dropdown-menu">
                                                                @foreach ($services as $service)
                                                                <li><a class="dropdown-item" href="{{ url('/service') }}/{{ $service->slug }}">{{$service->title}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{url('about')}}">About us</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{url('join-our-team')}}">Join Our Team</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{url('contact')}}">Contact</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--============================== Header Section End ==============================-->