<x-frontend.app-layout>
    <x-slot name="title">About us</x-slot>
    <!--============================== Page Banner 1 Section Start ==============================-->
    <div id="page-banner" class="page-title bg-light title-text-dark title-large"
        style="background-image: url('{{ asset('web/assets/images/background/about-banner1.png') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column gap-3" style="padding:70px 0">
                        <div class="title-wrap">
                            <h1 class="page-title text-white mb-0">About</h1>
                        </div>
                        <nav>
                            <ol class="breadcrumb mb-0 greater-than">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"
                                        class="text-white hover-text-primary">Home</a></li>
                                <li class="breadcrumb-item"><span style="color:#ffffff;" class="last">About</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Page Banner 1 Section End ==============================-->


    <div class="full-row ">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-5">
                    <img src="{{ asset('web/assets/images/Secuirty-1.png') }}" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h2 class="down-line mb-3 fw-600">{!! Sections::sectionContent(5, 'title') !!}</h2>
                    
                    <div
                        class="list-width-full icon-in-list list-icon-3 list-icon-center list-icon-primary list-text-general list-lh-auto list-py-5 mt-4">
                        {!! Sections::sectionContent(5, 'description') !!}
                    </div>
                    <div class="mt-5">
                        <a href="{{url('contact')}}" class="btn btn-outline-primary border-2 rounded-pill">Get in touch</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div
                        class="entry-wrapper d-flex flex-column align-items-center justify-content-start text-center transition-all p-4 shadow-sm">
                        <!-- <div class="entry-thumbnail-wrapper">
                            <div class="post-thumbnail overflow-hidden">
                                <img src="assets/images/icon/15.png" alt="">
                            </div>
                        </div> -->
                        <div class="entry-content-wrapper pt-20">
                            <div class="entry-header">
                                <h4 class="entry-title text-secondary mb-4">{!! Sections::sectionContent(6, 'title') !!}</h4>
                            </div>
                            <div class="entry-content">
                                <p>{!! Sections::sectionContent(6, 'description') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="entry-wrapper d-flex flex-column align-items-center justify-content-start text-center transition-all p-4 shadow-sm">
                        <!-- <div class="entry-thumbnail-wrapper">
                            <div class="post-thumbnail overflow-hidden">
                                <img src="assets/images/icon/16.png" alt="">
                            </div>
                        </div> -->
                        <div class="entry-content-wrapper pt-20">
                            <div class="entry-header">
                                <h4 class="entry-title text-secondary mb-4">{!! Sections::sectionContent(7, 'title') !!}</h4>
                            </div>
                            <div class="entry-content">
                                <p>{!! Sections::sectionContent(7, 'description') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============================== About company Section Start ==============================-->
    <div class="full-row bg-light">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6  col-md-12">
                    <span class="tagline text-primary mb-10">{!! Sections::sectionContent(8, 'title') !!}</span>
                    <h2 class="down-line text-secondary mb-30 ">Our Employees are our greatest asset.</h2>
                    <p>{!! Sections::sectionContent(8, 'description') !!}</p>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="position-relative">
                        <img src="{{ asset('storage/images/sections/'.Sections::sectionContent(8, 'image')) }}" alt="image not found!">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== About company Section End ==============================-->

    <div class="full-row ">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-5">
                    <img src="{{ asset('storage/images/sections/'.Sections::sectionContent(9, 'image'))}}" alt="" class="rounded">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h2 class="down-line mb-3 fw-800">{!! Sections::sectionContent(9, 'title') !!}</h2>
                    <p>{!! Sections::sectionContent(9, 'description') !!}</p>
                    <div class="mt-4">
                        <a href="{{url('contact')}}" class="btn btn-outline-primary border-2 rounded-pill">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-row bg-light">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6 offset-lg-1">
                    <h2 class="down-line mb-3 fw-800">{!! Sections::sectionContent(10, 'title') !!}</h2>
                    <p>{!! Sections::sectionContent(10, 'description') !!}</p>
                    <div class="mt-4">
                        <a href="{{url('contact')}}" class="btn btn-outline-primary border-2 rounded-pill">Get in Touch</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('storage/images/sections/'.Sections::sectionContent(10, 'image'))}}" alt="" class="rounded">
                </div>
            </div>
        </div>
    </div>

    <!--============================== Team 2 Section Start ==============================-->
    <div class="full-row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <span class="tagline text-uppercase text-primary text-center mb-10">Our Team</span>
                    <h1 class="text-uppercase text-center mb-50">Expert Members.</h1>
                </div>
            </div>
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 gy-5 team-style-1">
                @foreach ($teams as $team)
                <div class="col">
                    <div class="entry-wrapper d-flex flex-column align-items-center text-center transition-all">
                        <div class="entry-thumbnail-wrapper">
                            <div class="post-thumbnail overflow-hidden overlay-primary">
                                <img src="{{ asset('storage/images/teams/'.$team->image) }}" alt="Image not found !">
                                <div class="position-absolute xy-center w-100 p-4">
                                    <h6 class="text-center overflow-hidden"><a class="text-white first-push-up"
                                            href="profile-details.html">{{$team->name}}</a></h6>
                                    <div class="text-white text-center overflow-hidden"><span class="second-push-up">({{$team->designation}})</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-content-wrapper pt-20">
                            <div class="entry-header">
                                <h5 class="entry-title mb-0"><a class="text-secondary hover-text-primary"
                                        href="profile-details.html">{{$team->name}}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--============================== Team 2 Section End ==============================-->



    <x-slot name="footer"></x-slot>
</x-frontend.app-layout>
