
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 24/7 | Contact Us Page</title>
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
 
 
</head>

<body>
     <!-- header-start -->
@include('layouts.header')
 
    <!-- header-end --> 

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
              
                   
                 <!-- Map Here -->
    
                </div>
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Need Help 24/7? Send Us A Quick Message</h2>
                    </div>
                    <div class="col-lg-8">

                  

                    <!-- Notification #2 -->
                        <!--       @if(session()->has('success'))
                            <div class="toast" role="alert" data-autohide="false" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                          <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#007aff" width="100%" height="100%"></rect></svg>
                                          <strong class="mr-auto">Success</strong>
                                          <small>11 mins ago</small>
                                          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="toast-body">
                                         Great News! Message Sent Successfully. Check Email Too!
                                        </div>
                                      </div>

                                      @endif -->


                        <form class="form-contact contact_form"   method="post" action="{{route('storeMessage')}}">
                            {{csrf_field()}}
                            <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
                            <div class="row">                              

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" class="form-control valid" name="name" id="name" type="text"  placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif" name="email" id="email" type="email"  placeholder="Email">
                                    </div>
                                </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="phone" type="text"  placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text"  placeholder="Enter Message Subject">
                                    </div>
                                </div>
                                  <div   class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"  placeholder="Write Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="boxed-btn3-login">Send Message</button>
                            </div>
                        </form>
                    </div> 
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3> Delta Corner House, <br> Waiyaki Way Westland Nairobi. </h3>
                                <h3>P.o Box 11164 - 00100</h3>
                                <p>Nairobi, Kenya.</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+254 722 865 048<br>+254 738 247 247</h3>
                                <br>
                                <h3><b style="color: #8F9195;">Business Hours</b></h3>
                                <p>Mon to Fri 8am to 5pm<br>Saturday 9am to 2pm</p>
                                <!-- <p>Saturday 9am to 2pm</p> -->
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>enquiries@resq247.life</h3>
                                <p>Send us your enquiry anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="container">
                  <div class="col-12">
                        <h2 class="contact-title">Physical Location</h2>
                    </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Delta Corner House, Waiyaki Way Westland Nairobi
                        </div>

                        <iframe title="Delta Corner House, Waiyaki Way Westland Nairobi" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1410.2699512275751!2d36.8015950341359!3d-1.2650945240766995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74fe36a144a9109a!2sDelta%20Corner%20Towers!5e0!3m2!1sen!2ske!4v1585134430317!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        
                    </div>
                </div>
            </div>
            <!-- End Map -->

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
<!--     <script src="{{asset('front/js/toastr.min.js')}} "></script>
    <script src="{{asset('front/js/toastr.js')}} "></script> -->
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