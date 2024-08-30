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
                    <h3 class="down-line mb-3 fw-600">We Can Do</h3>
                    <p>Welcome to Advanced Security, LLC, where service meets innovation. With our cutting-edge
                        technologies and expert team, we deliver unparalleled security solutions tailored to your needs.
                        From risk assessment to qualified, state-licensed staff to advanced surveillance systems, we safeguard your assets with precision
                        and vigilance. Trust us to secure your peace of mind, today and always.</p>
                    <div
                        class="list-width-full icon-in-list list-icon-3 list-icon-center list-icon-primary list-text-general list-lh-auto list-py-5 mt-4">
                        <ul>
                            <li>Customized security solutions designed for your unique requirements</li>
                            <li>Advanced surveillance systems for real-time monitoring</li>
                            <li>Highly trained professionals dedicated to your safety</li>
                            <li>Proactive threat assessment and risk management</li>
                            <li>Seamless integration of technology and expertise</li>
                            <li>Reliable support and assistance whenever you need it</li>
                        </ul>
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
                                <h4 class="entry-title text-secondary mb-4">Our Mission</h4>
                            </div>
                            <div class="entry-content">
                                <p>Advanced Security (AS), LLC has its humble beginning in Seattle, Washington. AS has a commitment to provide outstanding security services. At Advanced Security, we take a comprehensive and proactive approach to do risk analysis, detect threats, and deter and report any situation that poses security risk to our client’s valuable assets.</p>
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
                                <h4 class="entry-title text-secondary mb-4">Our Vision</h4>
                            </div>
                            <div class="entry-content">
                                <p>At Advanced Security (AS), we envision a future where security is not merely a service but a dynamic partnership. Rooted in the heart of Seattle, we commit to setting new standards in the security industry by seamlessly blending innovation, client-centricity, and unwavering integrity.</p>
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
                    <span class="tagline text-primary mb-10">About Our Employees</span>
                    <h2 class="down-line text-secondary mb-30 ">Our Employees are our greatest asset.</h2>
                    <p>Our licensed security officers are highly trained to fulfill their primary duties and always act with integrity to create an environment conducive to the safety and comfort of our client’s needs based on customized solutions. Our support staff and guards go through periodic training to improve their knowledge, skills, and competency; they are expected to uphold standards of excellence and of service while adhering the company policies, procedures, guidelines, and instructions. We expect our employees to show courtesy and speak gently and clearly to any of our clients when responding to a request for service.</p>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="position-relative">
                        <img src="{{ asset('web/assets/images/Security-15.png') }}" alt="image not found!">
                        <img class="position-absolute" src="{{ asset('web/assets/images/Security-12.png') }}"
                            alt="image not found!" style="width: 370px; right: -150px; top: 100px">
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
                    <img src="{{ asset('web/assets/images/monitering.png')}}" alt="" class="rounded">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h2 class="down-line mb-3 fw-800">Innovation as the Cornerstone</h2>
                    <p>In an ever-evolving landscape, we embrace innovation as the cornerstone of our operations. Advanced Security (AS) invests in cutting-edge technologies, from advanced surveillance systems to AI-driven analytics, ensuring we stay ahead of emerging threats. By leveraging technology, we not only enhance security but redefine it.</p>
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
                    <h2 class="down-line mb-3 fw-800">Client-Centric Focus</h2>
                    <p>Our foremost commitment is to our clients. We strive to understand their unique needs, tailoring our security solutions to not only meet but exceed expectations. By fostering transparent communication and building lasting relationships, we aim to become the trusted guardians of our clients' peace of mind.</p>
                    <div class="mt-4">
                        <a href="{{url('contact')}}" class="btn btn-outline-primary border-2 rounded-pill">Get in Touch</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('web/assets/images/security-man.png')}}" alt="" class="rounded">
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
