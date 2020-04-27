
<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 247 | Services - ResQ247 Ground & Air Medical Emergency Rescues </title>
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
<!--     <div class="bradcam_area breadcam_bgMedical ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3> Ground & Air Medical Emergency Rescues</h3>
                        <p><a href="{{url('/')}}">Home /</a>Ground & Air Medical Emergency Rescues</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->


    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div style="margin-bottom: 40px;" class="container">

             <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a >Services</a></li>
    <li class="breadcrumb-item"><a href="{{url('/services/emergency_road')}}">Roadside Assistance Emergency Rescues</a></li>
    <li class="breadcrumb-item"><a href="{{url('/services/emergency_fire')}}">Fire & Safety Emergency Rescues</a></li>
     @if (Auth::guest())
     @else
    <li class="breadcrumb-item"><a href="{{url('/')}}">My Dashboard</a></li>
    @endif
    <li class="breadcrumb-item active" aria-current="page">Ground & Air Medical Emergency Rescues</li>
  </ol>
</nav>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                       
                            <img class="img-thumbnail" src="{{url('front/img/ermergency_medical.png')}}" alt="">
                                               
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2> ResQ247 Ground Medical Emergency Rescues</h2>

                                    <!-- Card -->
              <div style="margin-bottom: 30px;" class="card">
                <div class="card-header" id="medEmer">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#medEmerT" aria-expanded="true" aria-controls="medEmerT">
                     <i class="fa fa-eye"></i> Ground Medical  Emergency Rescue 
                    </button>
                  </h5>
                </div>
                <div id="medEmerT" class="collapse" aria-labelledby="medEmer" data-parent="#accordion">
                  <div class="card-body">
                      <p>
                    ResQ247 Ground Ambulance Service provides emergency pre-hospital treatment and transportation by ambulance to medical facilities. ResQ247 is the largest private operator and provider of emergency medical rescue in Kenya allowing multiple operators to operate on the same platform. People no longer have to cram multiple contact numbers for different service providers, you only need an App to access the service provider near you real time real-time. We have trained emergency services personnel including primary, advanced and critical care paramedics and emergency medical services dispatchers.  </p>              
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
                <div id="medEmer2T" class="collapse" aria-labelledby="medEmer2" data-parent="#accordion">
                  <div class="card-body">
                   <p>Through the provision of dispatch and paramedic services, expert patient care is delivered from the time an emergency SOS is registered to treatment at the scene and transport to hospital. Backed with technology, our team that comprises of volunteers mostly in areas perceived as black spots will almost arrive at any accident emergency scene ahead of everyone else.</p>
               
                    <p>
                    ResQ247 paramedics and support staff are also proud and active members of their communities, devoting countless volunteer service hours to local events and public education campaigns on matters Emergency healthcare. We fully support the Kenyan Government initiative to attainment of universal healthcare (UHC) by providing solutions that align with the Kenyan dream. Our technological solutions make it easy for everyone to access professional medical emergency medical rescue services within the acceptable time limits  any where anytime and to besides lowering  the costs  making accessibility a reality for all. 
                    </p>  
                  </div>
                </div>
            </div>
        <!-- End Card -->


                    
      <a href="{{url('/packages/emergency_medical')}}" class="boxed-btn3-login"><i class="fa fa-users"></i> Proceed To Memberships</a>
                    </div>
                </div>


              
    </div>
    <!-- welcome_docmed_area_end -->


</div>

<!-- #Air Container -->

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                <div class="welcome_docmed_info">
                        <h2> ResQ247 Air Medical Emergency Rescues</h2>

                                                  <!-- Card -->
              <div style="margin-bottom: 30px;" class="card">
                <div class="card-header" id="medEmer2Air">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#medEmer2AirT" aria-expanded="true" aria-controls="medEmer2AirT">
                     <i class="fa fa-eye"></i> Briefly About Air Ambulance 
                    </button>
                  </h5>
                </div>
                <div id="medEmer2AirT" class="collapse" aria-labelledby="medEmer2Air" data-parent="#accordion">
                  <div class="card-body">
                    <p>
                          <p>
Our Air Ambulance Services  gives patients, their case managers, or their loved ones throughout the trip, having a perfect choice when it comes to medical air transport is key in saving a life. We provide reliable and, professional medical flights for people who must be evacuated to medical facilities in major cities in the region for medical reasons or travelling overseas for further treatment or elsewhere but cannot fly commercially.
Similarly, we provide escort to anyone else with a medical condition that requires someone to assist with a commercial flight.
No matter what service you require, ResQ247 air Ambulance can take you to or from anywhere in  East and central Africa safely and with no stress. 
</p>
                    </p>                
                  </div>
                </div>
            </div>
        <!-- End Card -->
                        


                                           <!-- Card -->
              <div style="margin-bottom: 30px;" class="card">
                <div class="card-header" id="medEmer2Air2">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#medEmer2Air2T" aria-expanded="true" aria-controls="medEmer2Air2T">
                     <i class="fa fa-plus"></i>  More Details 
                    </button>
                  </h5>
                </div>
                <div id="medEmer2Air2T" class="collapse" aria-labelledby="medEmer2Air2" data-parent="#accordion">
                  <div class="card-body">
                
<p>Our comprehensive medical services  include:
<ul>
<li>(a) Selected medical team – depending on your unique needs, the medical personnel assigned to your case could include physicians, paramedics, nurses, and other specialists as necessary</li>
<li>(b) Frequent updates for family members – communication with loved ones or caregivers is maintained throughout the transfer, so they know your status at all times</li>
<li>(c) Smooth, seamless transfer of a patient from a current location to the receiving facility; this service entails, coordinating with the receiving facility and family members and possibly the personal doctor to the patient.</li>
<li>(d) Ground transport – transportation via ambulance to and from the medical facilities and aircraft in both your original and end destinations.</li>
</ul>


With qualified pilots and medics on board, you can rely on ResQ247 for that emergency rescue anywhere in East and central Africa. Try us today

       </p>   
                  </div>
                </div>
            </div>
        <!-- End Card -->                     
      <!-- <a href="{{url('/packages/emergency_medical')}}" class="boxed-btn3-login"><i class="fa fa-users"></i> Proceed To Memberships</a> -->

      <a class="boxed-btn3-login" style="color: blue;"  title="Request Air Quote Here" data-toggle="modal" data-target="#airQuote"  href=""> Register Today <i class="fa fa-plane"></i></a> 
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                     <div class="welcome_thumb">
                       
                            <img class="img-thumbnail" src="{{url('front/img/medical_emergency.png')}}" alt="">
                        
                        
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


@include('layouts.airQuote')


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