
<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 247 | Services - ResQ247 Roadside Assistance & Rescue  </title>
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
<!--     <div class="bradcam_area breadcam_bgRoad ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3> Roadside Assistance & Rescue</h3>
                        <p><a href="{{url('/')}}">Home /</a>Roadside Assistance & Rescue</p>
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
    <li class="breadcrumb-item"><a href="{{url('/services/emergency_medical')}}">Ground & Air Medical Emergency Rescues</a></li>
    <li class="breadcrumb-item"><a href="{{url('/services/emergency_fire')}}">Fire & Safety Emergency Rescues</a></li>
     @if (Auth::guest())
     @else
    <li class="breadcrumb-item"><a href="{{url('/')}}">My Dashboard</a></li>
    @endif
    <li class="breadcrumb-item active" aria-current="page">Roadside Assistance Emergency Rescues </li>
  </ol>
</nav>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                         
                            <img class="img-thumbnail" src="{{url('front/img/ermergency_road.png')}}" alt="">
                        
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                       
                        <h2> ResQ247 Roadside Assistance & Rescue</h2>
                        
               
                          <!-- Card -->
              <div style="margin-bottom: 30px;" class="card">
                <div class="card-header" id="medEmer">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#medEmerT" aria-expanded="true" aria-controls="medEmerT">
                     <i class="fa fa-road"></i> Briefly About Roadside Assistance
                    </button>
                  </h5>
                </div>
                <div id="medEmerT" class="collapse show" aria-labelledby="medEmer" data-parent="#accordion">
                  <div class="card-body">
                    <p>
                   Suppose you get a flat tire only to discover your spare is flat as well or you never had one!  
                    Or you had an accident or you just got a mechanical problem along the road. Or, maybe, you run out of gas miles from the next filling station! Such a situation can leave you stranded, yet, a tow to a mechanic would generate a major expense for a relatively minor difficulty. In times like these, you can be saved by requesting of or assistance by simply launching ResQ247 Mobile App and making a request for this crucial services or by simply calling our Hot line or toll free number when in this emergency situation. 
                    </p>                
                  </div>
                </div>
            </div>
        <!-- End Card -->

                                        <!-- Card -->
              <div style="margin-bottom: 30px;" class="card">
                <div class="card-header" id="medEmer2">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#medEmer2T" aria-expanded="true" aria-controls="medEmer2T">
                     <i class="fa fa-plus"></i>  More Details 
                    </button>
                  </h5>
                </div>
                <div id="medEmer2T" class="collapse " aria-labelledby="medEmer2" data-parent="#accordion">
                  <div class="card-body">
                   
              <p>
                     Our rescue team will come to you with the tools and supplies to make these kinds of little or major fixes on the spot. We’ll get you back up on the road or even have your car towed or carried on a flat bed track to your preferred garage anywhere across the republic of Kenya.   The emergency road service and tow truck service include but not limited to: 
                    <ul>
                     <li> <i class="fa fa-circle"></i> Jump Start</li>
                     <li> <i class="fa fa-circle"></i>  Lockouts</li>
                     <li> <i class="fa fa-circle"></i>  Tire Change</li>
                     <li> <i class="fa fa-circle"></i> Battery diagnostics & change </li>
                     <li> <i class="fa fa-circle"></i>  Out of Gas</li>
                     <li> <i class="fa fa-circle"></i>  24 hrs Auto Tow services </li>
                     <li> <i class="fa fa-circle"></i> Pre-accident police assistance</li>
                     <li> <i class="fa fa-circle"></i> Auto consultancy </li>
                    </ul>
                        </p>

      <a href="{{url('/packages/emergency_road')}}" class="boxed-btn3-login"><i class="fa fa-users"></i> Proceed To Memberships</a>

                  </div>
                </div>
            </div>
        <!-- End Card -->
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