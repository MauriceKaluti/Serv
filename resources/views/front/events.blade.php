
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 24/7 | Events</title>
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
 <!-- footer start -->
@include('layouts.header')
 
 
    <!-- header-end -->

    <!-- bradcam_area_start  -->
        <div class="container" style="margin-top: 40px; ">
            <div class="row">
                <div class="col-xl-12">
                      
                        <h2><span class="badge badge-primary"><b style="color: blue;font-size: 50px; color: #fff;">Events</b> <b style="color: gold;">& Calendar</b></span></h2>
                </div>
            </div>
        </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">            
     <div class="row">
             @forelse($events as $event)                         

                <!-- Event Single -->               

                    <div class="col-md-4">
                    <div style="width: 290px; margin-bottom: 30px; background-color: lightblue;" class="card">

                        <!-- <span style="background-color: gold;" class="badge badge-primary">Latest</span> -->

                        <div class="card-header">
                        <a href="{{ route('one.event', $event->id) }}">
                        <!-- <h4>{{$event->title}}</h4>
                        <h4>{{$event->date}}</h4> -->
                        <p style="font-weight: bold;"><span style="color: red;">Event:</span> <span style="color: blue;"> {{$event->title}}</span></p>

                        <p style="font-weight: bold;"><span style="color: red;">Location:</span> <span style="color: blue;"> {{$event->location}}</span></p>
                        <span style="color: gold;" class="badge badge-primary">{{$event->date}}</span>
                    </a>
                     </div>

                    <div class="card-body">  

                    <a href="{{ route('one.event', $event->id) }}">
                    <img class="img-thumbnail" src="{{ url('images/eventimages/medium', $event->image) }}" alt="">
                    </a>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                        <a class="boxed-btn3-login" href="{{ route('one.event', $event->id)}}">Book Ticket</a>&nbsp&nbsp
                        <a title="Add To Google Calendar" class="boxed-btn3-login" href="{{ route('one.event', $event->id)}}"><i class="fa fa-plus"></i> <i class="fa fa-google"></i> <i class="fa fa-calendar"></i></a>
                        </div>
                    </div>
                 
                    </div>
                    </div>
                    
              
     
                <!-- /Event Single -->




                   @empty
                <div align="center">
                    <h4>No Event Available</h4>
                </div>
                                


        @endforelse
          </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->


    
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
        </script>
    </body>
    
    </html>