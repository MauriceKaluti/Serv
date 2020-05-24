 <?php
use App\EventImage;
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ Services | Homepage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('front/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59KBR6F');</script>
<!-- End Google Tag Manager -->
 
 
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167446390-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167446390-1');
</script>


</head>
<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59KBR6F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


 <!-- header-start -->
@include('layouts.header')
    <!-- header-end -->
<div id="resqHomeCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#resqHomeCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#resqHomeCarousel" data-slide-to="1"></li>
    <li data-target="#resqHomeCarousel" data-slide-to="2"></li>
    <li data-target="#resqHomeCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="{{url('front/img/banner/medical_banner.png')}}" alt="First slide">
   <!-- <div style="position: absolute;  top: 30%;  left: 50%;  transform: translate(-50%, -50%);"> -->
   <div style="position: absolute; bottom: 8px;  left: 20%; top: 20%;">
    <h3 style="color: #FFEC8B; font-weight: bold;"><i class="fa fa-medkit"></i> Ground Medical Services</h3>

    <!-- <p style="color: #fff;">Providers of all round solutions in Emergeny Response & Rescue.</p> -->
     <a  href="{{url('/services/emergency_medical')}}" class="boxed-btn3-login">Ground Rescue Services <i class="fa fa-arrow-right"></i></a>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('front/img/banner/air_banner.png')}}" alt="Second slide">
   <div style="position: absolute; bottom: 8px;  left: 20%; top: 20%;">
  
    <h3 style="color: #FFEC8B; font-weight: bold;"><i class="fa fa-plane"></i> Air Rescue Services</h3>
    <!-- <p style="color: #fff;">Providers of all round solutions in Emergeny Response & Rescue.</p> -->
     <a  href="{{url('/services/emergency_medical')}}" class="boxed-btn3-login">Air Rescue Services <i class="fa fa-arrow-right"></i></a>
  </div> 
    </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{url('front/img/banner/fire_banner.png')}}" alt="Third slide">
   <div style="position: absolute; bottom: 8px;  left: 20%; top: 20%;">
 
    <h3 style="color: #FFEC8B; font-weight: bold;"><i class="fa fa-fire"></i> Fire & Safety Services</h3>
    <!-- <p style="color: #fff;">Providers of all round solutions in Emergeny Response & Rescue.</p> -->
     <a  href="{{url('/services/emergency_fire')}}" class="boxed-btn3-login">Fire & Safety Services <i class="fa fa-arrow-right"></i></a>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('front/img/banner/road_banner.png')}}" alt="Fourth slide">
   <div style="position: absolute; bottom: 8px;  left: 20%; top: 20%;">
     
    <h3 style="color: #FFEC8B; font-weight: bold;"><i class="fa fa-road"></i> Roadside Assistance Services</h3>
    <!-- <p style="color: #fff;">Providers of all round solutions in Emergeny Response & Rescue.</p> -->
     <a  href="{{url('/services/emergency_road')}}" class="boxed-btn3-login">Roadside Assistance  <i class="fa fa-arrow-right"></i></a>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#resqHomeCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#resqHomeCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
    <!-- service_area_start -->
@forelse($showevents as $showevent)
<?php 
$idd = $showevent->id;
$showPartnerLogos = EventImage::where('event_id',$idd)->get();
$showPartnerLogos = json_decode(json_encode($showPartnerLogos));
// $showPartnerLogos = EventImage::where('event_id',$showevent->id)->get();

 // echo "<prev>"; print_r($showPartnerLogos); die();

    // var_dump($showPartnerLogos); die();


 ?>

           <div  class="col-md-12">
                <div  style="background-color: #FFEC8B;" class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="row">
                    <div class="col-md-4">
                    <img class="img-thumbnail" title="ResQ247 Logo"  src="{{url('images/eventimages/medium',$showevent->image)}}" alt=""><br><br>
                      <a target="_blank" style="margin-bottom: 20px;" class="boxed-btn3-login" href="https://{{$showevent->map}}">Check Map <i class="fa fa-map-marker"></i></a>
                    </div>
                    <div class="col-md-4">
                        <h3 style="font-weight: bold;">Our Upcoming Event</h3>
                        <p style="font-weight: bold;"><span style="color: red;">Event:</span> <span style="color: blue;"> {{$showevent->title}}</span></p>
                        <p style="font-weight: bold;"><span style="color: red;">Location:</span> <span style="color: blue;"> {{$showevent->location}}</span></p>
                        <p style="font-weight: bold;"><span style="color: red;">Theme:</span> <span style="color: blue;"> {{$showevent->details}}</span></p>
                        <p style="font-weight: bold;"><span style="color: red;">Partners:</span>  
                            @foreach($showPartnerLogos as $logo)
                            <img title="ResQ247 {{$showevent->title}} Event Partners" style="width: 50px; height: 50px;" src="{{url('images/eventtimages/large',$logo->image)}}" alt="">
                        @endforeach
                        </p>
                    </div>
                    <div class="col-md-4">   
                    <div style="margin-top: 40px;" >      
                        <p style="font-weight: bold;">You don't have to miss this one!</p>
                     <a class="boxed-btn3-login" href="{{route('one.event',$showevent->id)}}">Book Event Ticket <i class="fa fa-smile-o"></i></a>
                     </div>                         
                    </div>
                    </div>
                    <!-- <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message. -->
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            </div>

   @empty


  @endforelse

    @include('layouts.serviceArea')
    <!-- service_area_end -->

  
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        
                            <img class="img-thumbnail" src="{{url('front/img/ermergency_medical.png')}}" alt="">        
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Welcome to ResQ247 Services</h2>
                        <h3>Providing all round solution in <br>
                         Emergency Response & Rescue. </h3>
                        <p>Registered in Kenya , ResQ247 is a Kenyan based  firm with a keen eye on humanitarian assistance , Air & Ground  Emergency Medical rescues (EMS) , Roadside assistance , fire safety and  rescues  in East Africa.  We provide seamless and unparalleled Emergency rescue services with a unique blend of in-depth expertise & world-class standard in emergency rescues. ResQ247 also offers fire safety and First Aid trainings aimed at minimizing the level negative impact when disasters strikes.</p>
                                                
                        <a href="{{url('/about')}}" class="boxed-btn3-white-2">Read More <i class="fa fa-eye"></i> </a>
                       <!--  <a  href="">
                                        <img style="width: 193.8px; height: 75px; " src="img/playstore.png">
                                    </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
 


<!--     <div>
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div> -->
 


    <!-- business_expert_area_start  -->
 

 @include('layouts.businessArea')
    <!-- business_expert_area_end  -->


    <!-- Emergency_contact start -->


 @include('layouts.emergencyArea')
    <!-- Emergency_contact end -->
    <br><br>


 @include('layouts.logoArea')
<!-- footer start -->

<br><br>


 @include('layouts.footer')


 @include('layouts.preloader')
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


    <script type="text/javascript">
            $(document).ready(function () {
            $(".regular").slick({
                autoplay:true, dots: true, speed: 1000, infinite: true, slidesToShow: 3, slidesToScroll: 3
            });
        });
    </script>


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