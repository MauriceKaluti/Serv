<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 24/7 | Gallery Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('front/img/favicon.png')}}">    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
   

    <!-- header-start -->
 

@include('layouts.header')


    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bgGallery ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Gallery</h3>
                        <p><a href="{{url('/')}}">Home /</a> ResQ 24/7 Gallery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/1.png')}}" alt="">
                   
                </div>

                    <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/2.png')}}" alt="">
                   
                </div>

                    <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/3.png')}}" alt="">
                   
                </div>
     
            </div>

                <div class="row">
                <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/4.png')}}" alt="">
                   
                </div>

                    <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/5.png')}}" alt="">
                   
                </div>

                    <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/6.png')}}" alt="">
                   
                </div>
     
            </div>


                <div class="row">
                <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/7.png')}}" alt="">
                   
                </div>

                    <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/8.png')}}" alt="">
                   
                </div>

                    <div style="margin-bottom: 20px;" class="col-xl-4 col-lg-4">

                    <img src="{{url('/front/img/gallery/9.png')}}" alt="">
                   
                </div>
     
            </div>
        </div>
        

    </div>
    <!-- welcome_docmed_area_end -->



<!-- footer start -->
 
@include('layouts.footer')

<!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
 
@include('layouts.bookModal')

    <!-- form itself end -->

     <!-- JS here -->
  <script src="{{asset('front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('front/js/vendor/jquery-1.12.4.min.js')}} "></script>
    <script src="{{asset('front/js/popper.min.js')}} "></script>
    <script src="{{asset('front/js/bootstrap.min.js')}} "></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}} "></script>
    <script src="{{asset('front/js/isotope.pkgd.min.js')}} "></script>
    <script src="{{asset('front/js/ajax-form.js')}} "></script>
    <script src="{{asset('front/js/waypoints.min.js')}} "></script>
    <script src="{{asset('front/js/jquery.counterup.min.js')}} "></script>
    <script src="{{asset('front/js/imagesloaded.pkgd.min.js')}} "></script>
    <script src="{{asset('front/js/scrollIt.js')}} "></script>
    <script src="{{asset('front/js/jquery.scrollUp.min.js')}} "></script>
    <script src="{{asset('front/js/wow.min.js')}} "></script>
    <script src="{{asset('front/js/nice-select.min.js')}} "></script>
    <script src="{{asset('front/js/jquery.slicknav.min.js')}} "></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}} "></script>
    <script src="{{asset('front/js/plugins.js')}} "></script>
 <script src="{{asset('front/js/gijgo.min.js')}} "></script>
 <!--contact js-->
 <script src="{{asset('front/js/contact.js')}} "></script>
 <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}} "></script>
 <script src="{{asset('front/js/jquery.form.js')}} "></script>
 <script src="{{asset('front/js/jquery.validate.min.js')}} "></script>
 <script src="{{asset('front/js/mail-script.js')}} "></script>
 <script src="{{asset('front/js/main.js')}} "></script>
@include('layouts.selects')
 
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>