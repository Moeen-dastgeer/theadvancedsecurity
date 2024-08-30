<x-frontend.app-layout>
    <x-slot name="title"></x-slot>

    <!--============================== Slider Section Start ==============================-->
    <div class="full-row p-0">
        <div class="container">
            <div id="rev_slider_151_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                data-alias="blur-effect-slider" data-source="gallery" style="background-color:#2d3032;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_151_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <!-- SLIDE  -->
                        <@php
                        $a=0;
                        $b=0;
                    @endphp
                    @foreach($sliders as $slider)
                    <li data-index="rs-{{$a}}" data-transition="fadethroughtransparent" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                    data-easeout="default" data-masterspeed="default"
                    data-thumb="{{ asset('web/assets/images/blur1-100x50.jpg') }}" data-rotate="0"
                    data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7"
                    data-saveperformance="off" data-title="One" data-param1="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/images/sliders/'. $slider->image) }}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="6" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div id="rrzt_{{$a}}" class="rev_row_zone rev_row_zone_middle" style="z-index: 9;">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption" id="slide-{{$a}}-layer-{{$b++}}" data-x="['left','left','left','left']"
                            data-hoffset="['100','100','100','100']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="row"
                            data-columnbreak="2" data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                            data-marginbottom="[0,0,0,0]" data-marginleft="[100,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  " id="slide-{{$a}}-layer-{{$b++}}"
                                data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="column"
                                data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columnwidth="100%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                data-textAlign="['inherit','inherit','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 10; width: 100%;">
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme  blurslider-gradient"
                                    id="slide-{{$a}}-layer-{{$b++}}" data-x="['left','left','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                    data-voffset="['0','0','0','0']" data-fontsize="['80','70','60','50']"
                                    data-lineheight="['100','90','100','70']" data-width="none"
                                    data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+290","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[30,20,30,30]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,40,40]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,40,40]"
                                    style="z-index: 11; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Cabin;">
                                    {!!$slider->title!!}</div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme" id="slide-{{$a}}-layer-{{$b++}}"
                                    data-x="['left','left','center','center']"
                                    data-hoffset="['0','50','0','0']" data-y="['top','top','top','top']"
                                    data-voffset="['0','430','460','290']"
                                    data-fontsize="['24','24','18','16']"
                                    data-lineheight="['50','40','50','30']"
                                    data-width="['640','360','100%','100%']" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[40,30,20,20]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 12; min-width: 640px; max-width: 640px; white-space: normal; font-size: 30px; line-height: 50px; font-weight: 300; color: rgba(255, 255, 255, 1.00); display: block; font-family:Cabin;">
                                    {{$slider->description}}</div>

                                <!-- LAYER NR. 5 -->
                                <a class="tp-caption rev-btn  tp-resizeme"
                                    href="{{url('contact')}}"
                                     id="slide-{{$a}}-layer-{{$b++}}"
                                    data-x="['left','left','center','center']"
                                    data-hoffset="['0','50','0','0']" data-y="['top','top','top','top']"
                                    data-voffset="['0','540','590','400']" data-width="none"
                                    data-height="none" data-whitespace="['normal','nowrap','nowrap','nowrap']"
                                    data-type="button" data-actions='' data-basealign="slide"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+690","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[35,35,35,35]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[35,35,35,35]"
                                    style="z-index: 13; white-space: normal; font-size: 18px; line-height: 50px; font-weight: 400; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Cabin;background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Contact us</a>
                            </div>
                        </div>
                    </div>

                </li>  
                    @php
                        $a++;
                    @endphp
                    @endforeach
                    
                    </ul>
                    <div class="tp-bannertimer" style="height: 3px; background-color: rgba(255, 255, 255, 0.25);">
                    </div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
    <!--============================== Slider Section End ==============================-->

    <!--============================== Our Project Section Start ==============================-->
    <div class="full-row ">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-5">
                    <img src="{{ asset('web/assets/images/Secuirty-1.png') }}" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h2 class="down-line mb-3 fw-600">{{ Sections::sectionContent(5, 'title') }}</h2>
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

    <!--============================== Our Project Section End ==============================-->

    <!--============================== Icon Grid Thumb 2 Sction Start ==============================-->
    <div class="full-row bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="tagline text-primary text-center mb-10">What We Offer</span>
                    <h2 class="down-line-primary text-secondary text-center mb-30">Our Awesome Services</h2>
                    <span class="sub-title fs-18 fw-400 ordinary-font fst-italic text-center mb-50">Advance Security
                        offers a wide range of physical security options to meet your needs.</span>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4 entry-wrapper-bg-white">
                @foreach ($services as $service)
                    <div class="col">
                        <div class=" abc entry-wrapper d-flex flex-column align-items-center text-center hover-text-white  p-40 transition-all"
                            style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{ asset('storage/images/services/' . $service->back_image) }});">
                            <div class="entry-thumbnail-wrapper">
                                <div class="post-thumbnail overflow-hidden">
                                    <img src="{{ asset('storage/images/services/svg/' . $service->image) }}"
                                        alt="" width="50px" height="50px">
                                </div>
                            </div>
                            <div class="entry-content-wrapper pt-20">
                                <div class="entry-header">
                                    <h4 class="entry-title mb-4"><a class="text-white"
                                            href="{{ url('/service') }}/{{ $service->slug }}">{{ $service->title }}</a>
                                    </h4>
                                </div>
                                <div class="entry-content">
                                    <p>{{ $service->description }}</p>
                                </div>
                                <div class="entry-footer">
                                    <div class="mt-3"><a
                                            class="btn-link text-primary hover-text-white btn-hover-downline-1"
                                            href="{{ url('/service') }}/{{ $service->slug }}">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--============================== Icon Grid Thumb 2 Sction End ==============================-->

    <!--============================== Achievement 1 section start ==============================-->
    <div class="full-row overlay-secondary paraxify"
        style="background-image: url({{ asset('web/assets/images/background/3.png') }}); background-repeat: no-repeat">
        <div class="container">
            <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 fact-counter gy-4">
                @foreach($counters as $counter)
                <div class="col">
                    <div class="text-center count wow animate__animated animate__fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="900ms">
                        <span class="count-num text-primary h1" data-speed="3000" data-stop="{{$counter->value}}">0</span>
                        <div class="text-white text-center down-line-primary h5 pt-2">{{$counter->title}}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-9">
                    <div class="text-center text-white count wow animate__animated animate__fadeInUp"
                        data-wow-delay="800ms" data-wow-duration="1100ms">
                        <h2 class="text-white mb-4">{{ Sections::sectionContent(13, 'title') }}</h2>
                        <p>{!! Sections::sectionContent(13, 'description') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Achievement 1 section end ==============================-->

    <x-frontend.contact />

    <x-slot name="footer"></x-slot>
</x-frontend.app-layout>
