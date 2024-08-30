<x-frontend.app-layout>
    <x-slot name="title">Contact</x-slot>
    <!--============================== Page Banner 1 Section Start ==============================-->
    <div id="page-banner" class="page-title bg-light title-text-dark title-large"
    style="background-image: url('{{asset('web/assets/images/background/17.png')}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-column gap-3" style="padding:70px 0">
                    <div class="title-wrap">
                        <h1 class="page-title text-white mb-0">Contact</h1>
                    </div>
                    <nav>
                        <ol class="breadcrumb mb-0 greater-than">
                            <li class="breadcrumb-item"><a href="index.html"
                                    class="text-white hover-text-primary">Home</a></li>
                            <li class="breadcrumb-item"><span style="color:#ffffff;" class="last">Contact</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================== Page Banner 1 Section End ==============================-->

<!--============================== Contact section start ==============================-->
<div class="full-row">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="bg-gray p-5">
                    <h2 class="mb-4 down-line-primary">{!! Sections::sectionContent(15, 'title') !!}</h2>
                    <span class="d-table mb-4 fs-18 fst-italic">{!! Sections::sectionContent(15, 'description') !!}</span>
                    <form method="post" action="{{url('contact')}}" id="contact_form_page">
                        @csrf    
                        <div class="row g-4">
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="first_name" id="first_name" placeholder="First Name" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="last_name" id="last_name" placeholder="Last Name" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="email" name="email" placeholder="Email Address"
                                    type="text">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="phone" name="phone" placeholder="Phone No"
                                    type="text">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <input class="form-control" id="subject" name="subject" placeholder="Subject"
                                    type="text">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" id="message" rows="5" name="message"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-2">
                                    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
                                    <div data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}" class="g-recaptcha">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <button class="btn btn-primary my-20" id="send" type="submit">Send Message</button>
                            </div>
                            <div class="col-md-12">
                                <div class="error-handel">
                                    <div id="success">Your email sent Successfully, Thank you.</div>
                                    <div id="error"> Error occurred while sending email. Please try again later.</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-detail p-5 text-white bg-dark">
                    <h3 class="down-line-primary mb-4 text-white">{!! Sections::sectionContent(16, 'title') !!}</h3>
                    <span class="d-table mb-4 fs-18 fst-italic">{!! Sections::sectionContent(16, 'description') !!}</span>
                    <div class="mb-4">
                        <span class="text-primary">Phone Number</span>
                        <p>{{$contact->phone}} <br> {{$contact->phone1}}</p>
                    </div>
                    <div class="mb-4">
                        <span class="text-primary">E-Mail</span>
                        <p>{{$contact->email}} <br> {{$contact->email1}}</p>
                    </div>
                    <div class="mb-4">
                        <span class="text-primary">Address</span>
                        <p>{{$contact->address}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================== Contact section start ==============================-->
    
    <x-slot name="footer">
        <script>
            $(document).ready(function(){
                    $('#contact_form_page').submit(function(e) {
                        e.preventDefault();
                        $.ajax({
                            url: $(this).attr('action'),
                            type: "POST",
                            data: new FormData(this),
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                $("p.error").remove();
                                if (data.status == "error") {
                                    jQuery.each(data.errors, function(key, val) {
                                        $("#" + key).after('<p class="small text-danger error">' + val[0] +'</p>');
                                    });
                                }
                                if (data.status == "success") {
                                    alert(data.message);
                                    return false;
                                }
                            },
                            error: function(data) {
                                console.log(data);
                                alert(data.message);
                            },
                        });
                    });  
        });
        </script>
    </x-slot>
</x-frontend.app-layout>
