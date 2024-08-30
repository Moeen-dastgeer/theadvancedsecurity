<x-frontend.app-layout>
    <x-slot name="title">{{$service->title}}</x-slot>
    
     <!--============================== Page Banner 1 Section Start ==============================-->
     <div id="page-banner" class="page-title bg-light title-text-dark title-large"
     style="background-image: url('{{asset('web/assets/images/background/17.png')}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
     <div class="container">
         <div class="row">
             <div class="col">
                 <div class="d-flex flex-column gap-3" style="padding:70px 0">
                     <div class="title-wrap">
                         <h1 class="page-title text-white mb-0">Services</h1>
                     </div>
                     <nav>
                         <ol class="breadcrumb mb-0 greater-than">
                             <li class="breadcrumb-item"><a href="index.html"
                                     class="text-white hover-text-primary">Home</a></li>
                             <li class="breadcrumb-item"><span style="color:#ffffff;" class="last">{{$service->title}}</span>
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
            <h1 class="text-center">{{$service->title}}</h1>
             <div class="col-lg-5">
                 <img src="{{ asset('storage/images/services/'.$service->image) }}" alt="" class="rounded">
             </div>
             <div class="col-lg-6 ">
                 {{-- <h2 class="down-line mb-3 fw-800">{{$service->title}}</h2> --}}
                 <p>{!!$service->description!!}</p>
                 
                 <div class="mt-4">
                     <a href="{{url('contact')}}" class="btn btn-outline-primary border-2 rounded-pill">Get in Touch</a>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!--============================== Banner Section Start ==============================-->
 <div class="full-row overlay-secondary paraxify"
     style="background-image: url({{asset('web/assets/images/background/3.png')}}); background-repeat: no-repeat;">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-8">
                 <div class="text-center text-white">
                     <h1 class="text-white mb-4">"We Provide Most Effective and Trusted Security Service"</h1>
                     <p>You can call us on (+1) 870-256-2346 to discuss your security requirement</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--============================== Banner Section End ==============================-->

<x-frontend.contact />    
    
    <x-slot name="footer"></x-slot>
</x-frontend.app-layout>
