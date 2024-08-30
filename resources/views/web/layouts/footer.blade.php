
        <!--============================== Footer 1 Section Start ==============================-->
        <footer class="full-row bg-footer text-light">
            <div class="container">
                <div class="row row-cols-lg-4 row-cols-1 gy-5 xxs-link-single">
                    <div class="col">
                        <div class="footer-widget">
                            <div class="footer-logo mb-4">
                                <a href="{{ url('/') }}"><img src="{{asset('web/assets/images/logo/logo3.svg')}}" alt="Image not found!"></a>
                            </div>
                            <p>{!! Sections::sectionContent(14, 'description') !!}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget widget-link-single">
                            <h4 class="widget-title text-white mb-4">Quick Links</h4>
                            <ul>
                                <li><a href="{{url('about')}}"><span class="text">About Company</span></a></li>
                                <li><a href="{{url('join-our-team')}}"><span class="text">Join Our Team</span></a></li>
                                <li><a href="{{url('contact')}}"><span class="text">Contact</span></a></li>
                                <li><a href="{{url('/privacy-policy')}}"><span class="text">Privacy & Policy</span></a></li>
                                <li><a href="{{url('/terms-conditions')}}"><span class="text">Terms & Conditions</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget widget-link-single">
                            <h4 class="widget-title text-white mb-4">Services</h4>
                            <ul>
                                @foreach ($services as $service)
                                <li><a href="{{ url('/service') }}/{{ $service->slug }}"><span class="text">{{$service->title}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget widget-contact">
                            <h3 class="widget-title text-white mb-4">Contact Info</h3>
                            <ul>
                                <li><i class="icon fas fa-map-marker-alt"></i><span class="text">{{$contact->address}}</span></li>
                                <li><i class="icon fas fa-phone"></i><span class="text">{{$contact->phone}}</span></li>
                                <li><i class="icon fas fa-envelope"></i><span class="text">{{$contact->email}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--============================== Footer 1 Section End ==============================-->

        <!--============================== Footer Bottom 1 Section Start ==============================-->
        <div class="full-row bg-dark fs-13 py-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <span class="copyright-text text-white">© {{ date('Y') }} All Rights Reserved by <a
                                    href="{{url('/')}}">Advance Security</a></span>
                            <div class="nav-style-1 list-color-white hover-list-color-primary list-font-13 list-mr-20">
                                <ul>
                                    <li><a href="{{url('/privacy-policy')}}">Privacy & Policy</a></li>
                                    <li><a href="{{url('/terms-conditions')}}">Terms & Conditions</a></li>
                                </ul>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Footer Bottom 1 Section End ==============================-->