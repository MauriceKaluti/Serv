
<!doctype html>
<html class="no-js" lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 247 | Kikwetu ResQ247 Product</title>
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
    <link href="{{asset('front/css/select2.min.css')}}" rel="stylesheet" />


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
                        <h3>Kikwetu ResQ247 Product</h3>
                        <p><a href="{{url('/')}}">Home /</a> Kikwetu ResQ247 Product</p>
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
    <li class="breadcrumb-item"><a href="{{url('/products/fanaka')}}">Fanaka</a></li>
    <li class="breadcrumb-item"><a href="{{url('/products/dharura')}}">Dharura</a></li>
    <li class="breadcrumb-item"><a href="{{url('/products/msafiri')}}">Msafiri</a></li>
     @if (Auth::guest())
     @else
    <li class="breadcrumb-item"><a href="{{url('/')}}">My Dashboard</a></li>
    @endif
    <li class="breadcrumb-item active" aria-current="page">Kikwetu</li>
  </ol>
</nav>
 <div class="col-md-12">
        <div class="row"> 
        <div class="col-md-12">
          <div style="margin-bottom: 30px;" class="card">
        <div class="card-header" id="paidA">
          <h5 class="mb-0">
            <button title="Toggle For Details" style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#paidcoll" aria-expanded="true" aria-controls="paidcoll">
             <i  class="fa fa-caret-square-o-down"></i>  Kikwetu ResQ247 Product
            </button>
          </h5>
        </div>
        <div id="paidcoll" class="collapse" aria-labelledby="paidA" data-parent="#accordion">
          <div class="card-body">
            <h2>Kikwetu ResQ247 Product</h2>
 
            <p>It is hard to predict sometimes when an Emergency of a medical nature can happen in your home, and nothing pains more when your loved one develops a complications as a result of unprofessional handling of the victim and it even becomes worse when you lose a loved one because of delayed or no response from paramedics. It’s never late to consider an alternative Emergency service provider for your family members. Whatever the medical emergency and wherever within the republic of Kenya, We provide top notch home assistance and emergency rescue within a timely manner using professionals.
        </p>
        <p>
          ResQ247 will extend a helping hand 365 days a year. We constantly endeavor work to improve the access to delivery of the best possible emergency medical rescue services for our clients at home any time. Our adoption of technology and an operation call center makes it easier for clients to reach our support team 24/7. Don’t wait, sign up today and enjoy the great convenience.
            </p>   

            <p style="font-weight: bold; color: black;">
              Benefits
            </p>
          <p>
 
<ul>

<li><i class="fa fa-circle"></i> Access to Medical emergency services 24/7 </li>
 <li><i class="fa fa-circle"></i> Access to Our ResQ247 mobile App and Emergency Manned call center</li>
 <li><i class="fa fa-circle"></i> Text messages or Emails alerts for weather alerts, potential disasters within specific regions and any other current major incidents in Kenya</li>
 <li><i class="fa fa-circle"></i> Onsite treatment and stabilization</li>
 <li><i class="fa fa-circle"></i> Unlimited emergency access to emergency medical care and services.</li>
 <li><i class="fa fa-circle"></i> No physical area limitation.</li>
 <li><i class="fa fa-circle"></i> On call medical consultant</li>
<li><i class="fa fa-circle"></i> Hospital transfers</li>
<li><i class="fa fa-circle"></i> Free Roadside assistance and rescues in selected major towns in Kenya </li>
<li><i class="fa fa-circle"></i> Free basic first aid training for selected families members </li>

</ul>
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

 <form class="form-contact" action="{{route('storeKikwetu')}}"  method="post">
       {{csrf_field()}}
                <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
              
     <div class="popup_boxPage ">
            <div class="popup_inner">
                <h3>Subscribe For Kikwetu</h3>
             <div class="row"> 
            
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Enter Principal Full Names</label>
                     <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" name="principal_name"   type="text"  placeholder="Principal Name">
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
       <label>Select Number Of Dependants</label>
            <select  style="display:block; width:100%;padding:0;border-width:0" required="" id="no_dependants" multiple="" name="no_dependants[]"></select>      
             
            </div>
        </div>

         <div class="col-sm-6">
            <div class="form-group">
       <label>Enter Street Name</label>
            <input required="" class="form-control valid" name="street_name"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Street Name'" placeholder="Enter Street Name">
            </div>
        </div>

             <div   class="col-sm-6">
            <div class="form-group">
         <label>Select/Search For Your Town(s)</label>
            <select  style="display:block; width:100%;padding:0;border-width:0" required="" id="town" multiple="" name="town[]"></select>      

          </div>
        </div>
              

       <div class="col-sm-6">
        <div class="form-group">
            <label>Enter House No.</label>
            <input required="" class="form-control valid" name="house_no"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter House No.'" placeholder="Enter House No.">
        </div>
    </div>
 


       <div class="col-sm-6">
        <div class="form-group">
            <label>Kikwetu Price Per Year(Ksh)</label>
            <input required="" class="form-control valid" name="kikwetu_price"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kikwetu Price Per Year(Ksh)'" value="25000" placeholder="Kikwetu Price Per Year(Ksh)" title="Kikwetu Price Per Year(Ksh)">
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

 <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> -->
    <script src="{{asset('front/js/select2.min.js')}} "></script>
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

           <script type="text/javascript">
            $(document).ready(function() {
                var county = ["Mombasa", "Kwale", "Kilifi", "Tana-River", "Lamu", "Taita-Taveta", "Garissa", "Mandera", "Marsabit", "Wajir", "Isiolo", "Meru", "Tharaka-Nithi", "Embu", "Kitui", "Machakos", "Makueni", "Nyandarua", "Nyeri", "Kirinyaga", "Muranga", "Kiambu", "Turkana", "West-Pokot", "Samburu", "Trans-Nzoia", "Uasin-Gishu", "Elgeyo-Marakwet", "Nandi", "Baringo", "Laikipia", "Nakuru", "Narok", "Kajiado", "Kericho", "Bomet", "Kakamega", "Vihiga", "Bungoma", "Busia", "Siaya", "Kisumu", "Homa-Bay", "Migori", "Kisii", "Nyamira", "Nairobi-City"];

                $("#county").select2({
                    data: county           
                  
                }); 

                   $("#county").select2({
                         
                  placeholder: "Select a County",
                }); 

            });
        </script>




            <script type="text/javascript">
            $(document).ready(function() {
                var town = ["Nairobi-Metro", "Nairobi", "Mombasa", "Kisumu", "Nakuru","Eldoret","Kehancha","Ruiru","Kangundo-Tala","Malindi","Naivasha","Kitui","Machakos","Thika","Athi River (Mavoko)","Karuri","Nyeri","Kilifi","Garissa","Vihiga","Mumias","Bomet","Molo","Ngong","Kitale","Litein","Limuru","Kericho","Kimilili","Awasi","Kakamega","Kapsabet","Mariakani","Kiambu","Mandera","Nyamira","Mwingi","Kisii","Wajir","Rongo","Bungoma","Ahero","Nandi Hills","Makuyu","Kapenguria","Taveta","Narok","Ol Kalou","Kakuma","Webuye","Malaba","Mbita Point","Ukunda","Wundanyi","Busia","Runyenjes","Migori","Malava","Suneka","Embu","Ogembo","Homa Bay","Lodwar","Kitengela","Ukwala","Keroka","Meru","Matuu","Oyugis","Nyahururu","Kipkelion","Luanda","Nanyuki","Maua","Mtwapa","Isiolo","Eldama Ravine","Voi","Siaya","Nyansiongo","Londiani","Iten/Tambach","Chuka","Malakisi","Juja","Ongata Rongai","Bondo","Moyale","Maralal","Gilgil","Nambale","Tabaka","Muhoroni","Kerugoya/Kutu","Ugunja","Rumuruti","Burnt Forest","Maragua","Kendu Bay","Msambweni","Lunga Lunga","Mtwapa","Kikoneni","Shimoni","Kwale"];
                $("#town").select2({
                  data: town
                });

                    $("#town").select2({

                   placeholder: "Select a Town",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


                    <script type="text/javascript">
            $(document).ready(function() {
                var blood_grp = ["A", "A+", "O", "AB", "O+"];
                $("#blood_grp").select2({
                  data: blood_grp
                });

                    $("#blood_grp").select2({

                   placeholder: "Select a Bloodgroup",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


           <script type="text/javascript">
            $(document).ready(function() {
                var no_dependants = ["1", "2", "3", "4", "5","6"];
                $("#no_dependants").select2({
                  data: no_dependants
                });

                    $("#no_dependants").select2({

                   placeholder: "Select Number Of Dependants",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>
</body>

</html>