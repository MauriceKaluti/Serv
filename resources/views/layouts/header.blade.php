 <?php
use App\User;
?>

<style type="text/css">
            .dropdown:hover > .dropdown-menu {
            display: block;
        }

        .dropdown > .dropdown-toggle:active {
            /*Without this, clicking will make it sticky*/
            pointer-events: none;
        }

        .dropdown:hover > .dropdown-menu {
            display: block;
        }

        .resq-dropdown a:hover {
           
        }


         .resq-dropdown a:hover {
        
        }

        .resq-dropdown a:hover {
          
        }

 .hover-drop {
    background-color: white;
    margin-left: 20px;
     margin-bottom: 15px;
    margin-right: 10px;
}

 .hover-drop a {
     color: #000;
     font-weight: normal;
}

 .hover-drop a:hover {
     color: gold;
     font-weight: bold;
     /*background-color: #000;*/
     
}


 .nav-list {

     margin-right: 13px; 

     margin-bottom: 8px;
     
}
 

 
</style>


<!-- <nav style="background-color: black; position: static;" class="navbar navbar-default navbar-fixed-top"> -->
  <div style="background-color: black;" class="py-2">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                                   <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                
                                <a style="margin-right: 10px;" href="https://www.facebook.com/rescue247/">
                                    <i style="color: #3b5998;" class="fa fa-facebook"></i>
                                </a>
                                <a style="margin-right: 10px;" href="https://twitter.com/rq247?lang=en">
                                    <i style="color: #00acee;" class="fa fa-twitter"></i>
                                </a>
                                <a style="margin-right: 10px;" href="https://www.instagram.com/resq247/">
                                    <i style="color: #ee2a7b ;" class="fa fa-instagram"></i>
                                </a>
                                <!-- <a href="https://www.youtube.com/channel/UC3ue3O8My0SHCLJ0qMpGOiA"> -->
                                <a style="margin-right: 10px;" href="#">
                                    <i style="color: #c4302b;" class="fa fa-youtube"></i>
                                </a>
                            </div>
                        </div>

                     <div class="col-xl-6 col-md-6" style="float: right;">
                            <div class="short_contact_list">
               <ul style="display: inline-flex; text-align: center; list-style: none;" class="resq-dropdown">
                                 
                                    <li style="margin-right: 20px;"><a style="font-size: 10px; color:#919191;" href="mailto:info@res-q247.life?subject=Enquiry About ResQ247 Services" > <i style="color: #222DFA;" class="fa fa-envelope"></i> info@resq247.life</a></li>
                                    <li  style="margin-right: 20px;"><a style="font-size: 10px; color:#919191;" href="tel:+254738247247"> <i style="color: #222DFA;" class="fa fa-phone"></i> +254 738 247 247</a></li>&nbsp&nbsp

                                    @if (Auth::guest())
                                    <li style="margin-right: 20px;"> 
                                        <a style="font-size: 10px; color:#919191;" href="{{url('/login')}}">
                                         <i style="color: #222DFA;" class="fa fa-lock"></i> Login 
                                    </a>

                                </li>

                                <!--  <li> <a href="{{url('/login')}}">
                                         <i class="fa fa-book"></i> Register
                                    </a></li> -->
                                     @else
                                       <li style="margin-right: 20px;"> 
                                            <a style="font-size: 10px; color:#919191;" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" title="Logout {{Auth::user()->name}}" href="{{url('/logout')}}">
                                            {{Auth::user()->name}} <i style="color: #222DFA;" class="fa fa-power-off"></i>
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
          </div>
    </div>
 
<!-- <nav style="background-color: red; position: sticky!important;" class="navbar navbar-default navbar-fixed-top"> -->
<nav style="background-color: red!important;" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <!--     <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ResQ247') }}
                </a> -->
                <a class="navbar-brand" href="{{ url('/') }}">
                <img title="ResQ247 Logo" style="width: 75px; height: 75px; margin-right: 30px;" src="{{url('front/img/resq247logocircle.png')}}" alt="">
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-list"><a style="color: #fff; font-weight: bold;" href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>

                        <li class="nav-list">
                            <div class="dropdown">
                              <a style="color: #fff; font-weight: bold; cursor: pointer;" type="button" id="menu1" data-toggle="dropdown">About <i style="font-size: 12px; font-weight: bold;" class="ti-angle-down"></i>
                              </a>
                              <ul style="width: 350px;" class="dropdown-menu" role="menu" aria-labelledby="menu1">
                             

                                 <li class="hover-drop"><a href="{{url('/about')}}"><i class="fa fa-info-circle"></i> About ResQ247</a></li>
                                <li class="hover-drop"><a href="{{url('/contact')}}"><i class="fa fa-phone"></i> Contact Us</a></li>
                                <li class="hover-drop"><a href="{{url('/events')}}"><i class="fa fa-calendar"></i> Events </a></li>
                                <li class="hover-drop"><a href="{{url('/gallery')}}"><i class="fa fa-image"></i> Gallery </a></li>
                                </ul>
                            </div>
                        </li>

                            <!-- #2 -->

                               <li class="nav-list">
                            <div class="dropdown">
                              <a style="color: #fff; font-weight: bold; cursor: pointer;" type="button" id="menu1" data-toggle="dropdown">Services <i style="font-size: 12px; font-weight: bold;" class="ti-angle-down"></i>
                              </a>
                              <ul style="width: 350px;" class="dropdown-menu" role="menu" aria-labelledby="menu1">
                             
                                      <li class="hover-drop"><a href="{{url('/services/emergency_medical')}}"><i class="fa fa-medkit"></i> Emergency Medical Rescue & Evacuation</a></li>
                                    <li class="hover-drop"><a href="{{url('/services/emergency_road')}}"><i class="fa fa-road"></i> Emergency Roadside Assistance & Rescue</a></li>
                                     <li class="hover-drop"><a href="{{url('/services/emergency_fire')}}"><i class="fa fa-fire"></i> Emergency Fire, Safety & Rescue</a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- #3 -->

                           <li class="nav-list">
                            <div class="dropdown">
                              <a style="color: #fff; font-weight: bold; cursor: pointer;" type="button" id="menu1" data-toggle="dropdown">Products <i style="font-size: 12px; font-weight: bold;" class="ti-angle-down"></i>
                              </a>
                              <ul style="width: 350px;" class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li class="hover-drop"><a href="{{url('/products/dharura')}}"><i class="fa fa-car"></i> Dharura</a></li>
                                <li class="hover-drop"><a href="{{url('/products/msafiri')}}"><i class="fa fa-bus"></i> Msafiri</a></li>
                                <li class="hover-drop"><a href="{{url('/products/fanaka')}}"><i class="fa fa-truck"></i> Fanaka</a></li>
                                <li class="hover-drop"><a href="{{url('/products/kikwetu')}}"><i class="fa fa-group"></i> Kikwetu</a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- #4 -->

                         <li class="nav-list">
                            <div class="dropdown">
                              <a style="color: #fff; font-weight: bold; cursor: pointer;" type="button" id="menu1" data-toggle="dropdown">Memberships <i style="font-size: 12px; font-weight: bold;" class="ti-angle-down"></i>
                              </a>
                              <ul style="width: 350px;" class="dropdown-menu" role="menu" aria-labelledby="menu1">
                               <li class="hover-drop"><a href="{{url('/packages/emergency_medical')}}"><i class="fa fa-medkit"></i> Emergency Medical Rescue & Evacuation</a></li>
                                <li class="hover-drop"><a href="{{url('/packages/emergency_road')}}"><i class="fa fa-road"></i> Roadside Assistance & Rescue</a></li>
                                <li class="hover-drop"><a href="{{url('/packages/emergency_fire')}}"><i class="fa fa-fire"></i> Fire, Safety & Rescue</a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- #5 -->

                       <li class="nav-list">
                            <div class="dropdown">
                              <a style="color: #fff; font-weight: bold; cursor: pointer;" type="button" id="menu1" data-toggle="dropdown">Rescue Teams <i style="font-size: 12px; font-weight: bold;" class="ti-angle-down"></i>
                              </a>
                              <ul style="width: 350px;" class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li class="hover-drop"><a href="{{url('/rescue_teams/emergency_medical_team')}}"><i class="fa fa-medkit"></i> Emergency Medical Rescue Team</a></li>
                         <li class="hover-drop"><a href="{{url('/rescue_teams/emergency_road_team')}}"><i class="fa fa-road"></i> Roadside Assistance & Rescue Team</a></li>
                         <li class="hover-drop"><a href="{{url('/rescue_teams/emergency_fire_team')}}"><i class="fa fa-fire"></i> Fire & Safety Rescue Team</a></li>
                         <li class="hover-drop"><a href="{{url('/rescue_teams/emergency_firstresponder_team')}}"><i class="fa fa-ambulance"></i> First Responders Volunteering</a></li>
                                </ul>
                            </div>
                        </li>


                     <!-- #6 -->

                         <li class="nav-list">
                            <div class="dropdown">
                              <a style="color: #fff; font-weight: bold; cursor: pointer;" type="button" id="menu1" data-toggle="dropdown">Extras <i style="font-size: 12px; font-weight: bold;" class="ti-angle-down"></i>
                              </a>
                              <ul style="width: 350px;" class="dropdown-menu" role="menu" aria-labelledby="menu1">
                               <li class="hover-drop"><a href="{{url('/blog')}}"><i class="fa fa-globe"></i> Blog/News</a></li>
                                <li class="hover-drop"><a href="{{url('/media_publication')}}"><i class="fa fa-laptop"></i> Media Publication</a></li>
                                <li class="hover-drop"><a href="http://45.32.50.183"><i class="fa fa-map-marker"></i> Auto Tracking</a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- Admin -->
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

                                             <li class="nav-list"><a style="color: #fff; font-weight: bold;" href="{{url('/admin_area')}}"> <i style="font-size: 15px" class="fa fa-tachometer"></i></a>
                                        </li>

                                        @else

                                      

                                        @endif


                                        @endif
                        <!-- End Admin -->



          

                    </ul>

                    <!-- End Left Bar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Right Links -->
                       
                                <li class="nav-item">

                                <a class="boxed-btn3-login" title="Enquiry Here" data-toggle="modal" data-target="#enquiryModal"  href=""><i class="fa fa-book"></i> {{ __('Send Enquiry') }}</a>
                                </li>                          
                             
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
                    </ul>
                </div>
            </div>
        </nav>
  
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