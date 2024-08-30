 <!--============================== Get in touch with us Section Start ==============================-->
 <div class="full-row bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                {{-- <span
                    class="tagline text-primary text-center mb-10 fw-500 count wow animate__animated animate__fadeInUp"
                    data-wow-delay="200ms" data-wow-duration="900ms">Need Our Help?</span> --}}
                <h1 class="down-line-primary text-secondary text-center mb-30 count wow animate__animated animate__fadeInUp"
                    data-wow-delay="400ms" data-wow-duration="900ms">Contact us</h1>
                {{-- <span
                    class="sub-title fw-400 fst-italic ordinary-font text-center mb-50 count wow animate__animated animate__fadeInUp"
                    data-wow-delay="600ms" data-wow-duration="900ms">Give us a call now and talk to someone right away or use the form below to get started on your journey to a more secure
                    world.</span> --}}
            </div>
        </div>
        <div class="row row-cols-lg-2 row-cols-1 gy-5 accordion right-plus border-style-none">
            <div class="col">
                <h2 class="mb-30">Frequently Asked Questions?</h2>
                <div id="accordion-1" class="count wow animate__animated animate__fadeInUp" data-wow-delay="800ms"
                    data-wow-duration="900ms">
                    @php
                        $i=0;
                    @endphp
                    @foreach ($faqs as $faq)     
                    <div class="accordion-item bg-light">
                        <h5 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$i}}">{{$faq->question}}</button>
                        </h5>
                        @if ($i==0)
                        <div id="collapse-{{$i}}" class="accordion-collapse collapse show" data-bs-parent="#accordion-{{$i++}}">
                            <div class="accordion-body bg-white">
                                <p>{!!$faq->answer!!}</p>
                            </div>
                        </div>
                        @else
                        <div id="collapse-{{$i}}" class="accordion-collapse collapse" data-bs-parent="#accordion-{{$i++}}">
                            <div class="accordion-body bg-white">
                                <p>{!!$faq->answer!!}</p>
                            </div>
                        </div>    
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <h2 class="mb-30">Get in touch with us</h2>
                <div class="contact-form count wow animate__animated animate__fadeInUp" data-wow-delay="1000ms"
                    data-wow-duration="900ms">
                    <form method="post" action="{{url('contact')}}" id="contact_form">
                        @csrf
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <input type="text" class="form-control bg-light" name="first_name" id="first_name" placeholder="Your First Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control bg-light" name="last_name" id="last_name" placeholder="Your Last Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control bg-light" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control bg-light" name="phone" id="phone" placeholder="Phone">
                            </div>
                            <div class="col-sm-12">
                                <select name="subject" id="" class="form-control bg-light">
                                    <option value="">Select Security Needs</option>
                                    @foreach ($services as $service)
                                    <option value="{{$service->title}}">{{$service->title}}</option>
                                    @endforeach
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control bg-light" name="message" id="message" rows="4"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-2">
                                    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
                                    <div data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}" class="g-recaptcha">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary-filter rounded-0 mt-20" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================== Get in touch with us Section End ==============================-->
