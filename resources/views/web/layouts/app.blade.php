<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="slashitech">

    <title>{{$title != ''? $title.' - ':''}} {{config('app.name')}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('web/assets/images/logo/favicon.png')}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!--  CSS Style -->
    <link rel="stylesheet" href="{{asset('web/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/webfonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/revolution/settings.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/template.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/category/default.css')}}">
</head>

<body>
    
    <div id="page-wrapper">

        @include('web.layouts.header')
        {{$slot}}
        @include('web.layouts.footer')

         <!-- Scroll to top -->
         <a href="#" class="bg-primary text-white" id="scroll"><i class="fa fa-angle-up"></i></a>
         <!-- End Scroll To top -->
 
    </div>

    <!-- Javascripts -->
    <script src="{{asset('web/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('web/assets/js/revolution/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('web/assets/js/revolution/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('web/assets/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('web/assets/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('web/assets/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('web/assets/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('web/assets/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('web/assets/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('web/assets/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('web/assets/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('web/assets/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('web/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('web/assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('web/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('web/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('web/assets/js/mixitup.min.js')}}"></script>
    <script src="{{asset('web/assets/js/paraxify.min.js')}}"></script>
    <script src="{{asset('web/assets/js/custom.js')}}"></script>
    <script>
        $(document).ready(function(){
                    $('#contact_form').submit(function(e) {
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
        var tpj = jQuery;
        var revapi151;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_151_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_151_1");
            } else {
                revapi151 = tpj("#rev_slider_151_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/js/revolution",
                    sliderLayout: "fullswidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "erinyen",
                            enable: true,
                            hide_onmobile: true,
                            hide_onleave: true,
                            tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div> <span class="tp-arr-titleholder"></span> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [840, 700, 960, 720],
                    lazyType: "none",
                    scrolleffect: {
                        blur: "on",
                        maxblur: "20",
                        on_slidebg: "on",
                        direction: "top",
                        multiplicator: "2",
                        multiplicator_layers: "2",
                        tilt: "10",
                        disable_on_mobile: "off",
                    },
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>
    {{@$footer}}
</body>

</html>