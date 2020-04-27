
<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 247 | Memberships - ResQ247 Roadside Assistance & Rescue</title>
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
<!--     <div class="bradcam_area breadcam_bgDharura ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Dharura ResQ247 Product</h3>
                        <p><a href="{{url('/')}}">Home /</a> Dharura ResQ247 Product</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->


    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">



            <!-- Container #1a -->
<div class="container" >
             <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a >Memberships</a></li>
    <li class="breadcrumb-item"><a href="{{url('/packages/emergency_fire')}}">Fire & Safety Membership</a></li>
    <li class="breadcrumb-item"><a href="{{url('/packages/emergency_medical')}}">Medical Membership</a></li>
     @if (Auth::guest())
     @else
    <li class="breadcrumb-item"><a href="{{url('/')}}">My Dashboard</a></li>
    @endif
    <li class="breadcrumb-item active" aria-current="page">Roadside Membership</li>
  </ol>
    </nav>

   </div>

        <!-- Container #1 -->

          <!-- Container #2 -->
<div class="container">
            <!-- Card Forms -->
<div class="card card-body">
  <div style="margin-bottom: 30px;" class="card-header">
      <h4>Subscribe For Emergency Roadside Assistance Services</h4>
  </div>
  <!-- Notification -->
     @if(session()->has('dharurasuccess'))
    <div class="alert alert-success" role="alert">
    <strong>Great News! Subscription Made Successfully. </strong>  </div>
     @endif
<!-- End Notification -->

  <div class="row">
          <div class="col-md-3 pull-left" style="background-color: #FFFFD7; margin-bottom: 30px; margin-right:auto">
              <!-- Radios -->
              <span>Select Vehicle Type</span><br>
    <label>
              <input type="radio" name="dharuraCheckbox" value="platinum" checked> Saloon</label>
          <label>
              <input type="radio" name="dharuraCheckbox" value="gold"> SUV</label>
               <label>
              <input type="radio" name="dharuraCheckbox" value="bronze"> Bus</label>
              <label>
              <input type="radio" name="dharuraCheckbox" value="silver"> Truck</label>
              <!-- End Radios -->
          </div>

        
      </div>

<!-- Form Saloon -->
 <form class="form-contact form form-platinum" method="post" action="{{route('storeRoadPackage')}}">
  {{csrf_field()}}
 
                <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
              <input class="form-control valid" value="Saloon" name="vehicle_type" hidden="" type="text">
     <div class="popup_boxPage ">
            <div class="popup_inner">
              <h4>Saloon <i style="color: lightgreen;" class="fa fa-circle"></i></h4>
             <div class="row"> 

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Enter Client/Owner Name</label>
                     <input required="" class="form-control valid" name="owner_name" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif"  type="text" placeholder="EnterName">
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
         <label>Select/Search For Your Vehicle Make</label>
            <select style="display:block; width:100%;padding:0;border-width:0; border-color: red!important;" required="" id="vehicles" multiple="" name="vehicle_model"></select>     
        </div>
        </div>



             <div class="col-sm-6">
            <div class="form-group">
         <label>Select/Search For Your Town(s)</label>
            <select style="display:block; width:100%;padding:0;border-width:0" required="" id="town" multiple="" name="town"></select>
           

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
         <label>Need Motor Insurance</label>            
            <input type="checkbox" value="Yes" name="insurance_yes">
            <label>Yes</label>

            <input type="checkbox" value="No" name="insurance_no">
            <label>No</label>

        </div>
    </div> 

       <div class="col-sm-6">
        <div class="form-group">
            <label>Saloon Price(Ksh)</label>
            <input name="road_price" class="form-control" value="25700" type="text">
       
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
        <button type="submit" class="boxed-btn3-login">Subscribe For Saloon Now</button>
    </div>

    </form>

<!-- End Form Saloon -->

                <!-- Form SUV -->
<form class="form-contact form form-gold" method="post" action="{{route('storeRoadPackage')}}">
  {{csrf_field()}}
 
                <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
              <input class="form-control valid" value="SUV" name="vehicle_type" hidden="" type="text">
              
     <div class="popup_boxPage ">
            <div class="popup_inner">
              <h4>SUV <i style="color: lightgreen;" class="fa fa-circle"></i></h4>
                <!-- <h3>Subscribe For Emergency Roadside Assistance Services(SUV)</h3> -->
             <div class="row"> 

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Enter Client/Owner Name</label>
                     <input required="" class="form-control valid" name="owner_name" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif"  type="text" placeholder="EnterName">
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
         <label>Select/Search For Your Vehicle Make</label>
            <select style="display:block; width:100%;padding:0;border-width:0; border-color: red!important;" required="" id="vehicles1" multiple="" name="vehicle_model"></select>     
        </div>
        </div>



             <div class="col-sm-6">
            <div class="form-group">
         <label>Select/Search For Your Town(s)</label>
            <select style="display:block; width:100%;padding:0;border-width:0" required="" id="restown" multiple="" name="town"></select>
           

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
         <label>Need Motor Insurance</label>            
            <input type="checkbox" value="Yes" name="insurance_yes">
            <label>Yes</label>

            <input type="checkbox" value="No" name="insurance_no">
            <label>No</label>

        </div>
    </div> 

       <div class="col-sm-6">
        <div class="form-group">
            <label>SUV Price(Ksh)</label>
            <input name="road_price" class="form-control" value="22700" type="text">
       
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
        <button type="submit" class="boxed-btn3-login">Subscribe For SUV Now</button>
    </div>
  
    </form>

                <!-- End Form SUV -->


                <!-- Bus Form -->

 <form class="form-contact form form-bronze" method="post" action="{{route('storeRoadPackage')}}">
  {{csrf_field()}}
          
                <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
              <input class="form-control valid" value="Bus" name="vehicle_type" hidden="" type="text">
              
     <div class="popup_boxPage ">
            <div class="popup_inner">
              <h4>Bus <i style="color: lightgreen;" class="fa fa-circle"></i></h4>
                <!-- <h3>Subscribe For Emergency Roadside Assistance Services(Bus)</h3> -->
             <div class="row"> 

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Enter Client/Owner Name</label>
                     <input required="" class="form-control valid" name="owner_name" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif"  type="text" placeholder="EnterName">
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
         <label>Select/Search For Your Vehicle Make</label>
            <select style="display:block; width:100%;padding:0;border-width:0; border-color: red!important;" required="" id="vehicles2" multiple="" name="vehicle_model"></select>     
        </div>
        </div>



             <div class="col-sm-6">
            <div class="form-group">
         <label>Select/Search For Your Town(s)</label>
            <select style="display:block; width:100%;padding:0;border-width:0" required="" id="esttown" multiple="" name="town"></select>
           

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
         <label>Need Motor Insurance</label>            
            <input type="checkbox" value="Yes" name="insurance_yes">
            <label>Yes</label>

            <input type="checkbox" value="No" name="insurance_no">
            <label>No</label>

        </div>
    </div> 

       <div class="col-sm-6">
        <div class="form-group">
            <label>Bus Price(Ksh)</label>
            <input name="road_price" class="form-control" value="25700" type="text">
       
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
        <button type="submit" class="boxed-btn3-login">Subscribe For Bus Now</button>
    </div>
  
    </form>
                <!-- End Bus Form -->


                <!-- Truck Form -->

                    <form class="form-contact form form-silver" method="post" action="{{route('storeRoadPackage')}}">
  {{csrf_field()}}
                 
                <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
              <input class="form-control valid" value="Truck" name="vehicle_type" hidden="" type="text">
              
     <div class="popup_boxPage ">
            <div class="popup_inner">
              <h4>Truck <i style="color: lightgreen;" class="fa fa-circle"></i></h4>
                <!-- <h3>Subscribe For Emergency Roadside Assistance Services(Truck)</h3> -->
             <div class="row"> 

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Enter Client/Owner Name</label>
                     <input required="" class="form-control valid" name="owner_name" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif"  type="text" placeholder="EnterName">
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
         <label>Select/Search For Your Vehicle Make</label>
            <select style="display:block; width:100%;padding:0;border-width:0; border-color: red!important;" required="" id="vehicles3" multiple="" name="vehicle_model"></select>     
        </div>
        </div>



             <div class="col-sm-6">
            <div class="form-group">
         <label>Select/Search For Your Town(s)</label>
            <select style="display:block; width:100%;padding:0;border-width:0" required="" id="familytown" multiple="" name="town"></select>
           

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
         <label>Need Motor Insurance</label>            
            <input  type="checkbox" value="Yes" name="insurance_yes">
            <label>Yes</label>

            <input  type="checkbox" value="No" name="insurance_no">
            <label>No</label>

        </div>
    </div> 

       <div class="col-sm-6">
        <div class="form-group">
            <label>Truck Price(Ksh)</label>
            <input name="road_price" class="form-control" value="21700" type="text">
       
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
        <button type="submit" class="boxed-btn3-login">Subscribe For Truck Now</button>
    </div>
    </form>

                <!-- End Truck Form -->

            </div>

            <!-- End Card Forms -->

        </div>

        <!-- End Container #2 -->



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

     <script type="text/javascript">
        $(document).ready(function() {
            function selectForm() {
                $("form.form").hide();
                $("form.form-" + $("input:checked").val()).show();
            }
            selectForm();
            $("input").click(function() {
                selectForm()
            });

        });
    </script>


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