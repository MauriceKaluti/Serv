

<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 247 | Dharura ResQ247 Product - Gold Package</title>
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
    <link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}">
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
    <div class="bradcam_area breadcam_bgDharura ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Dharura ResQ247 Product - Gold</h3>
                        <p><a href="index.php">Home /</a> Dharura ResQ247 Product - Gold</p>
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
             <div class="col-xl-12 col-lg-12">
                    <div class="welcome_docmed_info">
<h2 class="contact-title">Dharura ResQ247 Product - Gold Package</h2>

 <p >
This is an Emergency Roadside assistance solution for motorists, being an annual subscription it comes with benefits that will definitely exceed your expectation.
<br><br><b style="color: black;">Benefits</b><br> 
<ul>
<li><i class="fa fa-circle"></i> &nbsp Up to 30 Km free towing when your car needs that ride</li>
<li><i class="fa fa-circle"></i> &nbsp On site fuel delivery/minor mechanical repairs</li>
<li><i class="fa fa-circle"></i> &nbsp Unlimited auto consultation</li>
<li><i class="fa fa-circle"></i> &nbsp Post-accident support, road accident rescue</li>
<li><i class="fa fa-circle"></i> &nbsp Access to ResQ247 Emergency App.</li>
<li><i class="fa fa-circle"></i> &nbsp Taxi service for the remaining part of the trip up to 30km from scene of accident</li>
<li><i class="fa fa-circle"></i> &nbsp Free reflector jacket &amp; fire stop extinguisher.</li>
<li><i class="fa fa-circle"></i> &nbsp 1 free home assist medical emergency rescues within a radius of 30Km within the followingcities Nairobi, Nakuru, Mombasa, Embu, Nyeri, Eldoret , Kisii and Kisumu</li>

<li><i class="fa fa-circle"></i> &nbsp For as low as Ksh. 4,600 per year</li>
</ul>
</p>


  <div class="card card-body">

    <form class="form-contact" method="post">
    <div style="margin-bottom: 20px;" class="row">     

        <div  class="col-12 col-lg-3 " data-wow-delay="100ms">
           <!--  <label >Silver Package</label> -->
               <img  src="{{url('front/img/silver.jpg')}}" alt="ResQ247 Dharura Silver Package">
                <input  disabled="" type="radio" name="silver_package" class="form-control" placeholder="Silver Package" required>

            </div>

               <div class="col-12 col-lg-3 " data-wow-delay="100ms">
                <!-- <label >Gold Package</label> -->
                <img title="ResQ247 Dharura Bronze Package" src="{{url('front/img/gold.jpg')}}" alt="ResQ247 Dharura Bronze Package">
                <input type="radio" disabled="" name="bronze_package" class="form-control" placeholder="Bronze Package" required>
           
            </div>

               <div class="col-12 col-lg-3 " data-wow-delay="100ms">
                <!-- <label >Gold Package</label> -->
                <img title="ResQ247 Dharura Platinum Package" src="{{url('front/img/gold.jpg')}}" alt="ResQ247 Dharura Platinum Package">
                <input disabled="" type="radio"  name="platinum_package" class="form-control" placeholder="Platinum Package" required>
           
            </div>

                   <div class="col-12 col-lg-3 " data-wow-delay="100ms">
                <!-- <label >Gold Package</label> -->
                <img title="ResQ247 Dharura Gold Package" src="{{url('front/img/gold.jpg')}}" alt="ResQ247 Dharura Gold Package">
                <input type="radio" checked="" name="gold_package" class="form-control" placeholder="Gold Package" required>
           
            </div>

            </div>

            <div style="margin-bottom: 30px;" class="row">

                 <div style="margin-bottom: 20px;" class="col-12 col-lg-3 " data-wow-delay="100ms">
                <input @if (Auth::guest()) value="" @else value="{{Auth::user()->name}}"  @endif type="text" name="dharura_gold_name" class="form-control" placeholder="Name" required>   
                </div> 

                 <div style="margin-bottom: 20px;" class="col-12 col-lg-3 " data-wow-delay="100ms">
                <input @if (Auth::guest()) value="" @else value="{{Auth::user()->email}}"  @endif type="email" name="dharura_gold_email" class="form-control" placeholder="Email" required>   
                </div> 
                  <div style="margin-bottom: 20px;" class="col-12 col-lg-3 " data-wow-delay="100ms">
                <input type="text" name="dharura_gold_phone" class="form-control" placeholder="Phone" required>   
                </div> 
                  <div style="margin-bottom: 20px;" class="col-12 col-lg-3 " data-wow-delay="100ms">
                <input type="text" name="dharura_gold_company" class="form-control" placeholder="Company" required>   
                </div>            

            </div>


            <div class="row">

                <div class="col-12 col-lg-3 " data-wow-delay="100ms">
                   <button class="boxed-btn3-login" type="submit">
                     Confirm Gold Selection <i class="fa fa-smile-o"></i>
                    </button>
                </div> 
           

            </div>
    </form>
                               
  </div>

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