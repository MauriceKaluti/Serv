 
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 24/7 | Events - {{$event->title}}</title>
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

 

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
            
    
                <div class="row">

                    <div class="col-12">
                        <h2 class="contact-title">Book Event Ticket For {{$event->title}}</h2>
                    </div>

                    <div class="col-lg-8">
                   <!-- Radios -->
                        <label>
                        <input  type="radio" name="eventCheckbox" value="private" checked>Private Sector</label>
                        <label>
                        <input  type="radio" name="eventCheckbox" value="county">County Govt</label>
                        <label>
                        <input  type="radio" name="eventCheckbox" value="national">National Govt</label>
                        <label>
                        <input  type="radio" name="eventCheckbox" value="ngo">NGO</label>

                    <!-- End Radios -->

                            <!-- Notification -->
                         @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                        <strong>Great News! {{$event->name}} Ticket Booked Successfully. Check Email Too!</strong>  </div>
                         @endif
                    <!-- End Notification -->

                    <!-- #Private Sector -->
                        <form class="form-contact form form-private" action="{{ route('event.bookEvent', $event->id) }}" method="post" >
                            <br>
                            <h3 style="color: #0000FA; font-weight: bold;" align="center">Book Private Sector Ticket</h3>
                    
                             {{csrf_field()}}
                                <input required="" hidden="" class="form-control valid" value="{{$event->id}}" name="event_id"  type="text" placeholder="Event ID">
                                <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">


                            <input required="" hidden="" class="form-control valid" value="Private Sector" name="event_entity"  type="text" placeholder="Event Entity">
                            <div class="row">
                              
                          <input required="" hidden="" class="form-control valid"  value="{{$event->title}}" name="event_title"  type="text" placeholder="Event Title">
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" name="applicant_name"   type="text"  placeholder="Applicant Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""  class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif" name="applicant_email"  type="email"  placeholder="Applicant Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""  class="form-control" name="applicant_entity"  type="text"placeholder="Enter Entity">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_department"  type="text" placeholder="Applicant Working Department">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""  class="form-control" name="applicant_position"  type="text"  placeholder="Applicant Position">
                                    </div>
                                </div>

                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" readonly="" class="form-control" value="2500" name="ticket_price"  type="text" title="Event Ticket Price"  placeholder="Event Ticket Price">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="boxed-btn3-login">Book Ticket Now</button>
                            </div>
                        </form>
                    <!-- End Private Sector  -->

                       <!-- #County Sector -->
                        <form class="form-contact form form-county" action="{{ route('event.bookEvent', $event->id) }}" method="post">
                             <br>
                            <h3 style="color: #0000FA; font-weight: bold;" align="center">Book County Gov Ticket</h3>         
                             {{csrf_field()}}
                            <input required="" hidden="" class="form-control valid" value="{{$event->id}}" name="event_id"  type="text" placeholder="Event ID">
                            <input required="" hidden="" class="form-control valid" value="County Government" name="event_entity"  type="text" placeholder="Event Entity">
                            <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
                            <div class="row">                              
                          <input required="" hidden="" class="form-control valid"  value="{{$event->title}}" name="event_title"  type="text" placeholder="Event Title">                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" name="applicant_name"   type="text"  placeholder="Applicant Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif" name="applicant_email"  type="email"  placeholder="Applicant Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_entity"  type="text"placeholder="Enter Entity">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_department"  type="text" placeholder="Applicant Working Department">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_position"  type="text"  placeholder="Applicant Position">
                                    </div>
                                </div>
                                       <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" readonly="" class="form-control" value="1500" name="ticket_price"  type="text" title="Event Ticket Price"  placeholder="Event Ticket Price">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="boxed-btn3-login">Book Ticket Now</button>
                            </div>
                        </form>
                    <!-- End County Sector  -->

                          <!-- #National Sector -->
                        <form class="form-contact form form-national" action="{{ route('event.bookEvent', $event->id) }}" method="post" >
                             <br>
                            <h3 style="color: #0000FA; font-weight: bold;" align="center">Book National Gov Ticket</h3>
                           
                             {{csrf_field()}}

                             <input required="" hidden="" class="form-control valid" value="{{$event->id}}" name="event_id"  type="text" placeholder="Event ID">

                            <input required="" hidden="" class="form-control valid" value="National Government" name="event_entity"  type="text" placeholder="Event Entity">
                            <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
                            <div class="row">
                              
                          <input required="" hidden="" class="form-control valid"  value="{{$event->title}}" name="event_title"  type="text" placeholder="Event Title">
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" name="applicant_name"   type="text"  placeholder="Applicant Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif" name="applicant_email"  type="email"  placeholder="Applicant Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_entity"  type="text"placeholder="Enter Entity">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_department"  type="text" placeholder="Applicant Working Department">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_position"  type="text"  placeholder="Applicant Position">
                                    </div>
                                </div>
                                       <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" readonly="" class="form-control" value="4500" name="ticket_price"  type="text" title="Event Ticket Price"  placeholder="Event Ticket Price">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="boxed-btn3-login">Book Ticket Now</button>
                            </div>
                        </form>
                    <!-- End National Sector  -->

                               <!-- #NGO Sector -->
                        <form class="form-contact form form-ngo" action="{{ route('event.bookEvent',$event->id) }}" method="post" >

                            <br>
                            <h3 style="color: #0000FA; font-weight: bold;" align="center">Book NGO Ticket</h3>

                    
                             {{csrf_field()}}

                                <input required="" hidden="" class="form-control valid" value="{{$event->id}}" name="event_id"  type="text" placeholder="Event ID">

                            <input required="" hidden="" class="form-control valid" value="NGO" name="event_entity"  type="text" placeholder="Event Entity">
                            <input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">
                            <div class="row">
                              
                          <input required="" hidden="" class="form-control valid"  value="{{$event->title}}" name="event_title"  type="text" placeholder="Event Title">
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" name="applicant_name"   type="text"  placeholder="Applicant Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif" name="applicant_email"  type="email"  placeholder="Applicant Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_entity"  type="text"placeholder="Enter Entity">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_department"  type="text" placeholder="Applicant Working Department">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control" name="applicant_position"  type="text"  placeholder="Applicant Position">
                                    </div>
                                </div>
                                       <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" readonly="" class="form-control" value="1000" name="ticket_price"  type="text" title="Event Ticket Price"  placeholder="Event Ticket Price">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="boxed-btn3-login">Book Ticket Now</button>
                            </div>
                        </form>
                    <!-- End NGO Sector  -->


                    </div>
                    <div class="col-lg-3 offset-lg-1">

                           <p style="font-weight: bold;"><span style="color: red;">Event:</span> <span style="color: blue;"> {{$event->title}}</span></p>

                        <p style="font-weight: bold;"><span style="color: red;">Location:</span> <span style="color: blue;"> {{$event->location}}</span></p>

                        <p style="font-weight: bold;"><span style="color: red;">Theme:</span> <span style="color: blue;"> {{$event->details}}</span></p>

                        
                        <p style="font-weight: bold;"><span style="color: red;">Partners:</span>  
                            @foreach($showPartnerLogos as $logo)
                            <img title="ResQ247 {{$event->title}} Event Partners" style="width: 50px; height: 50px;" src="{{url('images/eventtimages/large',$logo->image)}}" alt="">
                        @endforeach
                        </p>
                         
                            <p style="font-weight: bold;"><span style="color: red;">Event Location Image: </span></p> 
                             
                                <img title="ResQ247 Logo" style="width: 279px; height: 165px;" src="{{url('images/eventimages/medium',$event->image)}}" alt=""><br><br>
                           
                 
                    </div>


                    <div class="col-lg-12">
                                                <!-- Card -->
              <div style="margin-bottom: 30px; background-color: lightblue" class="card">
                <div class="card-header" id="medEmer">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#medEmerT" aria-expanded="true" aria-controls="medEmerT">
                     <i class="fa fa-map-marker"></i> Checkout {{$event->title}} Event Navigation Map
                    </button>
                  </h5>
                </div>
                <div id="medEmerT" class="collapse" aria-labelledby="medEmer" data-parent="#accordion">

                    <div class="card-header">
                            {{$event->title}} Event Location Navigation
                    </div>

                      
                  <div class="card-body">
                    
                 <iframe title="{{$event->title}} Event Location Navigation" src="https://{{$event->map}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                 
                  </div>
                </div>
            </div>
        <!-- End Card -->
                    </div>
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
        </script>
    </body>
    
    </html>