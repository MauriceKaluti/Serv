
<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 247 | Packages - ResQ247 Fire, Safety Assistance & Emergency  </title>
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
 <!--    <div class="bradcam_area breadcam_bgFire ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3> ResQ247 Fire Rescue Package</h3>
                        <p><a href="{{url('/')}}">Home /</a>ResQ247 Fire Rescue Package</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->


    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">  

        <!-- Container #2 -->
        <div class="container ">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a >Memberships</a></li>
    <li class="breadcrumb-item"><a href="{{url('/packages/emergency_road')}}">Roadside Membership</a></li>
    <li class="breadcrumb-item"><a href="{{url('/packages/emergency_medical')}}">Medical Membership</a></li>
     @if (Auth::guest())
     @else
    <li class="breadcrumb-item"><a href="{{url('/')}}">My Dashboard</a></li>
    @endif
    <li class="breadcrumb-item active" aria-current="page">Fire & Safety Membership  </li>
  </ol>
</nav>
            <h2> Quick Emergency Fire Package Subscription </h2>
            <!-- Card Forms -->
            <div class="card card-body">

                    <!-- Notification -->
                         @if(session()->has('firesuccess'))
                        <div class="alert alert-success" role="alert">
                        <strong>Great News! Subscription Made Successfully. Check Email Too!</strong>  </div>
                         @endif
                    <!-- End Notification -->

                <div class="row">
                    <div class="col-md-3 pull-left" style="background-color: #FFFFD7; margin-bottom: 30px; margin-right:auto">
                        <!-- Radios -->
                      <!--   <label>
                            <input type="radio" name="emergencyfireCheckbox" value="emergency_fire_inst" checked> Learning Institutions</label> -->
                        <label>
                            <input type="radio" name="emergencyfireCheckbox" value="emergency_fire_corporate" checked=""> Corporate Membership</label>
                       <label>
                            <input type="radio" name="emergencyfireCheckbox" value="emergency_fire_residence"> Private Residence Membership</label>

                        <!-- End Radios -->
                    </div>

                    <div class="col-md-3 pull-right " style="background-color: #FFFFD7; margin-bottom: 30px; margin-left:auto ">
                        <!-- Radios -->

                        <label>
                            <input type="radio" name="emergencyfireCheckbox" value="emergency_fire_hotel"> Hotel Membership</label>
                        
                        <label>
                            <input type="radio" name="emergencyfireCheckbox" value="emergency_fire_estate"> Organized Residential Estates</label>

                        <!-- End Radios -->
                    </div>

                </div>

                <!-- Form Institution -->

            @include('layouts.forms.fire_inst')

                <!-- End Form Inst -->

                <!-- Form Corporate -->
                
            @include('layouts.forms.fire_corporate')


                <!-- End Form Corporate -->

                <!-- Form Hotel -->

            @include('layouts.forms.fire_hotel')
     
                <!-- End Form Hotel -->                 
            

                <!-- Form Private Residence  -->


            @include('layouts.forms.fire_res')
 

                        <!-- End Form Private Residence -->

                <!-- Form Organized Estates -->
            @include('layouts.forms.fire_estates')

                <!-- End Form Organized Estates  -->

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