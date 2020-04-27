 <?php
use App\User;
?>
 <!-- header-start -->
    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div style="background-color: red;"  class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                
                                <a href="https://www.facebook.com/rescue247/">
                                    <i style="color: #3b5998;" class="fa fa-facebook"></i>
                                </a>
                                <a href="https://twitter.com/rq247?lang=en">
                                    <i style="color: #00acee;" class="fa fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/resq247/">
                                    <i style="color: #ee2a7b ;" class="fa fa-instagram"></i>
                                </a>
                                <!-- <a href="https://www.youtube.com/channel/UC3ue3O8My0SHCLJ0qMpGOiA"> -->
                                <a href="#">
                                    <i style="color: #c4302b;" class="fa fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="mailto:info@res-q247.life?subject=Enquiry About ResQ247 Services" > <i class="fa fa-envelope"></i> info@resq247.life</a></li>
                                    <li ><a href="tel:+254738247247"> <i class="fa fa-phone"></i> +254 738 247 247</a></li>&nbsp&nbsp

                                    @if (Auth::guest())
                                    <li> 
                                        <div class="row">
                                        <a href="{{url('/login')}}">
                                         <i class="fa fa-key"></i> Login 
                                    </a>
                                    </div>

                                </li>

                                <!--      <li> <a href="{{url('/login')}}">
                                         <i class="fa fa-book"></i> Register
                                    </a></li> -->
                                     @else
                                       <li> 
                                            <a style="font-size: 10px;" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" title="Logout {{Auth::user()->name}}" href="{{url('/logout')}}">
                                            {{Auth::user()->name}} <i   class="fa fa-power-off"></i>
                                            </a> 

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                             </form>
                                        </li>
                                    @endif


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img title="ResQ247 Logo" style="width: 75px; height: 75px;" src="{{url('front/img/resq247logocircle.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{url('/')}}">Home</a></li>
                                       

                                            <li><a href="#">About <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/about')}}">About ResQ247</a></li>
                                                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                                <!-- <li><a href="{{url('/events')}}">Events </a></li> -->
                                                <li><a href="{{url('/gallery')}}">Gallery </a></li>
                                                 
                                            </ul>
                                        </li>

                                         <li><a href="#">Services <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/services/emergency_medical')}}">Emergency Medical Rescue & Evacuation</a></li>
                                                <li><a href="{{url('/services/emergency_road')}}">Emergency Roadside Assistance & Rescue</a></li>
                                                 <li><a href="{{url('/services/emergency_fire')}}">Emergency Fire, Safety & Rescue</a></li>
                                            </ul>
                                        </li>

                                         <li><a href="#">Products <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/products/dharura')}}">Dharura</a></li>
                                                <li><a href="{{url('/products/msafiri')}}">Msafiri</a></li>
                                                <li><a href="{{url('/products/fanaka')}}">Fanaka</a></li>
                                                <li><a href="{{url('/products/kikwetu')}}">Kikwetu</a></li>                                                
                                                <!-- <li><a href="fanisi.php">Fanisi</a></li> -->
                                            </ul>
                                        </li>
                                        
                                          <li><a href="#">Memberships <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/packages/emergency_medical')}}">Emergency Medical Rescue & Evacuation</a></li>
                                                <li><a href="{{url('/packages/emergency_road')}}">Roadside Assistance & Rescue</a></li>
                                                <li><a href="{{url('/packages/emergency_fire')}}">Fire, Safety & Rescue</a></li>
                                            </ul>
                                        </li>


                                            <li><a href="#">Rescue <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/rescue_teams/emergency_medical_team')}}">Emergency Medical Rescue Team</a></li>
                                                <li><a href="{{url('/rescue_teams/emergency_road_team')}}">Roadside Assistance & Rescue Team</a></li>
                                                <li><a href="{{url('/rescue_teams/emergency_fire_team')}}">Fire & Safety Rescue Team</a></li>
                                                <li><a href="{{url('/rescue_teams/emergency_firstresponder_team')}}">First Responders Volunteering</a></li>
                                            </ul>

                                 
                                        </li>

                                              @if (Auth::guest())


                                       @else

                                            <?php 
                                            $idd = Auth::user()->id;
                                            // $idd = 1;
                                            $adminDash =  User::where('id', '=',  $idd)->first();

                                            $x = $adminDash->admin;

                                            // var_dump($x); die();

                                            // $adminDash = json_decode(json_encode($adminDash));
                                            // $adminDash = User::where('admin',$idd->id)->get();

                                             // echo "<prev>"; print_r($adminDash); die();
                                              
                                                // var_dump($idd); die();


                                             ?>

                                          @if($x == 1)

                                             <li><a href="{{url('/admin_area')}}">Dashboard <i style="font-size: 15px" class="fa fa-tachometer"></i></a>
                                        
                                        </li>

                                        @else

                                      

                                        @endif


                                        @endif

                                    
                                       <!--  <li><a href="rescue_team.php">Rescue Team</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <!-- <a class="popup-with-form" href="#test-form">Enquiry</a> -->
                                    <!-- <a class="popup-with-form" href="#test-form">Login</a> -->
                                <a  title="Enquiry Here" data-toggle="modal" data-target="#enquiryModal"  href="">Enquiry</a> 

                                </div>

                 <!-- Notification -->
                             @if(session()->has('enquiresuccess'))
                          
                        <!--     <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong style="font-size: 5px;">Enquiry Made!</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                            </div> -->

                            &nbsp&nbsp<span ><i style="color: #FFD700;" class="fa fa-envelope"></i>Sent!</span>
                          
                             @endif
                        <!-- End Notification -->
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- header-end -->

        <!-- Enquiry Modal -->
    <div class="modal fade vertical-align-center" data-backdrop="false" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Make a Quick Service Enquiry</h5>
                    <button title="Close Modal" style="color: red;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form-contact" method="POST" action="{{route('storeEnquiry')}}"   enctype="multipart/form-data">
                                {{csrf_field()}}
                            <input class="form-control" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id"   type="text" hidden=""  placeholder="Applicant User ID">

                        <div class="col-lg-12 form-group">
                           <input class="form-control" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" required="" name="name" type="text"  placeholder="Name">
                        </div>
                        <div class="col-lg-12 form-group">
                         <input class="form-control" required="" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif" name="email" type="email"  placeholder="Email">
                        </div>
                        <div class="col-lg-12 form-group">
                             <input class="form-control"  required="" name="phone" type="text"  placeholder="Phone no.">
                        </div>
                             <div class="col-lg-12 form-group">
                            <textarea required="" name="enquiry_details" style="margin-bottom: 30px; resize: none;" class="form-control w-100"  placeholder="Enquiry Details"></textarea>
                        </div>
                        <div  class="col-lg-12 form-group">
                        <select style="display:block; width:100%;padding:0;border-width:0; border-color: red!important;" required="" id="services" multiple="" name="service"></select> 

                           
                        </div>
                

                         <!--    <div class="col-lg-12 form-group">
                                
                            &nbsp&nbsp&nbsp&nbsp<input title="Remember Me Next Login" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label>Remember Me</label>
                          
                           
                        </div> -->

                        <div class="col-lg-12 form-group">
                            <button style="margin-top: 30px!important;" type="submit"  class="boxed-btn3-login">Send Enquiry</button>
                        </div>
 
                    </form>
                </div>

            </div>
        </div>
    </div>

@include('layouts.toastr')




 



