<x-frontend.app-layout>
    <x-slot name="title">join our team</x-slot>
     <!--============================== Page Banner 1 Section Start ==============================-->
     <div id="page-banner" class="page-title bg-light title-text-dark title-large"
     style="background-image: url('{{asset('web/assets/images/background/17.png')}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
     <div class="container">
         <div class="row">
             <div class="col">
                 <div class="d-flex flex-column gap-3" style="padding:70px 0">
                     <div class="title-wrap">
                         <h1 class="page-title text-white mb-0">Join Our Team</h1>
                     </div>
                     <nav>
                         <ol class="breadcrumb mb-0 greater-than">
                             <li class="breadcrumb-item"><a href="index.html"
                                     class="text-white hover-text-primary">Home</a></li>
                             <li class="breadcrumb-item"><span style="color:#ffffff;" class="last">Join-our-team</span>
                             </li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--============================== Page Banner 1 Section End ==============================-->
 <div class="full-row bg-light">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-5">
                 <img src="{{asset('storage/images/sections/'.Sections::sectionContent(11, 'image') ) }}" alt="">
             </div>
             <div class="col-lg-7">
                 <h3 class="down-line mb-3 fw-600">{!! Sections::sectionContent(11, 'title') !!}</h3>
                 <p>{!! Sections::sectionContent(11, 'description') !!}</p>
                 
                 <div class="mt-5">
                     <a href="#" class="btn btn-outline-primary border-2 rounded-pill">Contact Us</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--============================== Popular Questions Section Start ==============================-->
 <div class="full-row bg-white">
     <div class="container">
         <div class="row row-cols-lg-2 row-cols-1 gy-5 accordion right-plus border-style-none">
             <div class="col">
                 <div class="w-80">
                     <h1 class="down-line-primary text-secondary mb-30 count wow animate__animated animate__fadeInUp"
                         data-wow-delay="400ms" data-wow-duration="900ms">{!! Sections::sectionContent(12, 'title') !!}</h1>
                     <p>
                        {!! Sections::sectionContent(12, 'description') !!}
                     </p>
                 </div>
             </div>
             <div class="col">
                 <div class="contact-form count wow animate__animated animate__fadeInUp" data-wow-delay="1000ms"
                     data-wow-duration="900ms">
                     <form method="post" action="join" id="join_form">
                        @csrf
                         <div class="row g-4">
                             <div class="col-sm-6">
                                 <input type="text" class="form-control bg-light" name="name" id="name" placeholder="Your Full Name">
                             </div>
                             <div class="col-sm-6">
                                 <input type="text" class="form-control bg-light" name="email" id="email" placeholder="Email Address">
                             </div>
                             <div class="col-sm-12">
                                 <input type="text" class="form-control bg-light" name="address" id="address" placeholder="Address / Location">
                             </div>
                             <div class="col-sm-12">
                                 <input type="text" class="form-control bg-light" name="question" id="question" placeholder="Write Your Question">
                             </div>
                             <div class="col-sm-12">
                                 <textarea class="form-control bg-light" name="message" id="message" rows="6" placeholder="Message"></textarea>
                             </div>
                             <div class="col-md-12">
                                <div class="form-group mt-2">
                                    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
                                    <div data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}" class="g-recaptcha">
                                    </div>
                                </div>
                             </div>
                             <div class="col-sm-12">
                                 <button class="btn btn-primary-filter rounded-0 mt-20" type="submit">Send
                                     Question</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--============================== Popular Questions Section End ==============================-->

   
    
    <x-slot name="footer">
        <script>
            $(document).ready(function(){
                    $('#join_form').submit(function(e) {
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
