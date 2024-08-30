<x-frontend.app-layout>
    <x-slot name="title">Terms & Conditions</x-slot>
         <!--============================== Page Banner 1 Section Start ==============================-->
         <div id="page-banner" class="page-title bg-light title-text-dark title-large"
         style="background-image: url('{{asset('web/assets/images/background/17.png')}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <div class="d-flex flex-column gap-3" style="padding:70px 0">
                         <div class="title-wrap">
                             <h1 class="page-title text-white mb-0">Terms & Conditions</h1>
                         </div>
                         <nav>
                             <ol class="breadcrumb mb-0 greater-than">
                                 <li class="breadcrumb-item"><a href="{{url('/')}}"
                                         class="text-white hover-text-primary">Home</a></li>
                                 <li class="breadcrumb-item"><span style="color:#6c757d;" class="last">terms-conditions</span>
                                 </li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--============================== Page Banner 1 Section End ==============================-->
    
        <h1 class="text-center pt-2">Terms & Conditions</h1>
        <section class="content">
            <div class="container">
                <p>
                    {!!$terms->description!!}
                </p>
            </div>
        </section>
    
      <x-slot name="footer">
        <script>
    
        </script>
      </x-slot>
</x-frontend.app-layout>