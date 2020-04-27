
<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 247 | Fanaka ResQ247 Product</title>
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

    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" /> -->
  

</head>

<body>
   
 
    <!-- header-start -->
@include('layouts.header')


    <!-- header-end -->

    <!-- bradcam_area_start  -->
<!--     <div class="bradcam_area  breadcam_bgA ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Fanaka ResQ247 Product</h3>
                        <p><a href="{{url('/')}}">Home /</a> Fanaka ResQ247 Product</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->


    <!-- welcome_docmed_area_start -->
 <div class="welcome_docmed_area">

        <!-- Container #1a -->
<div class="container" style="margin-bottom: 140px;">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a >Products</a></li>
    <li class="breadcrumb-item"><a href="{{url('/products/kikwetu')}}">Kikwetu</a></li>
    <li class="breadcrumb-item"><a href="{{url('/products/dharura')}}">Dharura</a></li>
    <li class="breadcrumb-item"><a href="{{url('/products/msafiri')}}">Msafiri</a></li>
     @if (Auth::guest())
     @else
    <li class="breadcrumb-item"><a href="{{url('/')}}">My Dashboard</a></li>
    @endif
    <li class="breadcrumb-item active" aria-current="page">Fanaka</li>
  </ol>
</nav>
 <div class="col-md-12">
        <div class="row"> 
        <div class="col-md-12">
          <div style="margin-bottom: 30px;" class="card">
        <div class="card-header" id="paidA">
          <h5 class="mb-0">
            <button title="Toggle For Details" style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#paidcoll" aria-expanded="true" aria-controls="paidcoll">
             <i  class="fa fa-caret-square-o-down"></i>  Fanaka ResQ247 Product
            </button>
          </h5>
        </div>
        <div id="paidcoll" class="collapse" aria-labelledby="paidA" data-parent="#accordion">
          <div class="card-body">
            <h2>Fanaka ResQ247 Product</h2> 
            <p>This is an annual subscription emergency road rescue for motorists. It comes with up to 200km free Auto towing, free delivery fuel delivery  & auto consultancy among others. Whenever you have been involved in an accident or a mechanical breakdown, ResQ247 will be there for you when you need us. Driving on our roads can be a nightmare sometimes when you get involved in road accident plus traffic officers have to be involved, some people might not really understand the process eventually ending up getting frustrated & spending more unnecessarily.   
        </p>
        <p>
          Getting the right advice or assistance will relieve you from unnecessary headaches that come with such scenarios, we always step in for our clients and we always advice you and sometimes our team will be on the ground with you, you can choose to delegate the whole process to our team ,and of course  security is key and at ResQ247 we provide you with an alternative car of equivalent for 3 day as the repairs are  sorted out, tracker to keep your car safe and also help you in recoveries in an event of theft.  Nothing should stop you from moving and that’s why we endeavor providing solutions that keeps you moving.
            </p>   
          </div>
        </div>
    </div>
        </div>
        </div>
    </div>
        </div>
        <!-- Container #1 -->
 

 <div class="container">
    <!-- welcome_docmed_area_end -->
  <div class="card card-body">

 <form class="form-contact"  action="{{route('storeFanaka')}}"  method="post">
       {{csrf_field()}}
                <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
              
     <div class="popup_boxPage ">
            <div class="popup_inner">
                <h3>Subscribe For Fanaka Product</h3>
             <div class="row"> 

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Enter Client Name</label>
                     <input required="" class="form-control valid" name="user_name" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif"  type="text" placeholder="EnterName">
                </div>
            </div>  


        <div class="col-sm-6">
        <div class="form-group">
            <label>Enter Email</label>
            <input required="" class="form-control valid" name="email" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif"  type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email'" placeholder="Enter Email">
        </div>
    </div>


           <div class="col-sm-6">
        <div class="form-group">
            <label>Enter Phone Number</label>
            <input required="" class="form-control valid" name="phone"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" placeholder="Enter Phone Number">
        </div>
    </div>

        <div class="col-sm-6">
            <div class="form-group">
         <label>Select/Search For Your Vehicle Model</label>
            <select style="display:block; width:100%;padding:0;border-width:0; border-color: red!important;" required="" id="vehicles" multiple="" name="vehicle_model[]"></select>          


          </div>
        </div>

             <div class="col-sm-6">
            <div class="form-group">
         <label>Select/Search For Your Town(s)</label>
            <select  style="display:block; width:100%;padding:0;border-width:0" required="" id="town" multiple="" name="town[]"></select>
           

          </div>
        </div>
              

       <div class="col-sm-6">
        <div class="form-group">
            <label>Vehicle Reg No.</label>
            <input required="" class="form-control valid" name="vehicle_reg"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Vehicle Reg. No.'" placeholder="Enter Vehicle Reg. No.">
        </div>
    </div>

       <div class="col-sm-6">
        <div class="form-group">
            <label>Price(Ksh)</label>
            <input required="" class="form-control valid" name="fanaka_price" value="25000 "  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Price'" placeholder="Price">
        </div>
    </div>
    @include('layouts.payment_confirm')


    </div>

    </div>
    </div>

                 
    <div class="form-group">
      <input type="checkbox" id="terms_agree" required="required" checked="">
      <label for="terms_agree">I agree to share details with ResQ247 in line with  <a href="#">OUR ONLINE POLICY</a></label>
    </div>
     <div class="form-group mt-3">
        <button type="submit" class="boxed-btn3-login">Subscribe Now</button>
    </div>
                            
 </form>


                               
  </div>
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

 <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> -->

 

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
 
    </script>
 
</body>

</html>