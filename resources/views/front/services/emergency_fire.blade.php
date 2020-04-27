
<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 247 | Services - ResQ247 Fire, Safety Assistance & Emergency Rescue  </title>
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
<!--     <div class="bradcam_area breadcam_bgFire ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3> Emergency Fire & Safety</h3>
                        <p><a href="{{url('/')}}">Home /</a>Emergency Fire & Safety</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->


    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
                         <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a >Services</a></li>
    <li class="breadcrumb-item"><a href="{{url('/services/emergency_road')}}">Roadside Assistance Emergency Rescues</a></li>
    <li class="breadcrumb-item"><a href="{{url('/services/emergency_medical')}}">Emergency Medical Rescues</a></li>
     @if (Auth::guest())
     @else
    <li class="breadcrumb-item"><a href="{{url('/')}}">My Dashboard</a></li>
    @endif
    <li class="breadcrumb-item active" aria-current="page">Fire & Safety Emergency Rescues  </li>
  </ol>
</nav>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                       
                        
                            <img class="img-thumbnail" src="{{url('front/img/ermergency_fire.png')}}" alt="">
                        
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2> ResQ247 Fire, Safety Assistance & Emergency Rescues</h2>                       
                                      

                                                    <!-- Card -->
              <div style="margin-bottom: 30px;" class="card">
                <div class="card-header" id="medEmer">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#roadEmerT" aria-expanded="true" aria-controls="roadEmerT">
                     <i class="fa fa-fire"></i> Briefly About Fire, Safety Assistance & Rescues
                    </button>
                  </h5>
                </div>
                <div id="roadEmerT" class="collapse show" aria-labelledby="roadEmer" data-parent="#accordion">
                  <div class="card-body">
                  <p>In most cases fire accidents is the last thing that can cross our minds. But this is one thing that
                        can easily change your entire life or even cost your life or that of your loved ones. Yes it can!
                        At ResQ247 we understand it well and that is why we have products for you, specifically on fire
                        rescue. Besides giving you’re the requisite trainings on fire safety, we always make sure we
                        equip our clients with right fire fighting equipments and in some cases there will be fire engines
                        stationed within your area to respond to major fire incidents. Majorly for our corporate
                        industrial clients, organized estates, learning institutions etc .
                        </p>  
               
                  </div>
                </div>
            </div>
        <!-- End Card -->

      <a href="{{url('/packages/emergency_fire')}}" class="boxed-btn3-login"><i class="fa fa-users"></i> Proceed To Memberships</a>

                    </div>
                </div>


              
    </div>
    <!-- welcome_docmed_area_end -->


</div>
</div>

<!-- footer start -->
@include('layouts.footer')

<!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
@include('layouts.bookModal')

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