    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <a href="{{url('/admin_area')}}">
                    <img src="{{url('admin/images/resq247logocircle.png')}}" width="50" height="50" alt="User"/>
                    </a>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="color: #7CFC00;" class="fa fa-circle"></i> Active Admin:  {{Auth::user()->name}}</div>  
                     <div class="email">Email: {{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{url('admin_area/update_profile')}}"><i class="material-icons">person</i>Update Profile</a></li>
                            <!-- <li><a href="{{ route('password.request') }}"><i style="font-size: 18px;" class="fa fa-lock"></i>&nbsp&nbsp Reset Password</a></li> -->
                            <li role="separator" class="divider"></li>                          
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('/logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                  
                    <!-- New Tabs -->
                      <li>
                        <a href="{{url('/admin_area')}}">
                             <i class="fa fa-home"></i>
                            <span style="margin-top: -2px;">Dashboard</span>
                        </a>
                    </li> 

                         <li>
                        <a href="{{url('/admin_area/charts')}}">
                             <i class="fa fa-tachometer"></i>
                            <span style="margin-top: -2px;">Charts & Reports</span>
                        </a>
                    </li>                  
                    <li class="header">PRODUCTS APPLICATIONS</li>


                      <li>
                        <a href="{{url('admin_area/products/msafiri/priv_motorist')}}">
                            <i class="fa fa-car"></i>
                            <span style="margin-top: -2px;">Msafiri Motorist</span>
                        </a>
                    </li>

                        <li>
                        <a href="{{url('admin_area/products/msafiri/psv')}}">
                            <i class="fa fa-bus"></i>
                            <span style="margin-top: -2px;">Msafiri PSV</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('admin_area/products/dharura/dharura_platinum')}}">
                            <i class="fa fa-bomb"></i>
                            <span style="margin-top: -2px;">Dharura Platinum</span>
                        </a>
                    </li>

                         <li>
                        <a href="{{url('admin_area/products/dharura/dharura_gold')}}">
                            <i class="fa fa-trophy"></i>
                            <span style="margin-top: -2px;">Dharura Gold</span>
                        </a>
                    </li>

                         <li>
                        <a href="{{url('admin_area/products/dharura/dharura_bronze')}} ">
                            <i class="fa fa-star"></i>
                            <span style="margin-top: -2px;">Dharura Bronze</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('admin_area/products/dharura/dharura_silver')}}">
                            <i class="fa fa-star-o"></i>
                            <span style="margin-top: -2px;">Dharura Silver</span>
                        </a>
                    </li>

                     <li>
                        <a href="{{url('admin_area/products/fanaka')}}">
                            <i class="fa fa-bomb"></i>
                            <span style="margin-top: -2px;">Fanaka</span>
                        </a>
                    </li>


                    <li class="header">MEDICAL PACKAGES APPLICATIONS</li>

          
                      <li>
                        <a href="{{url('admin_area/memberships/medical/estate/')}}">
                            <i class="fa fa-building"></i>
                            <span style="margin-top: -2px;">Estates Medical Package</span>
                        </a>
                    </li>

                     <li>
                        <a href="{{url('admin_area/memberships/medical/family/')}}">
                            <i class="fa fa-users"></i>
                            <span style="margin-top: -2px;">Family Medical Package</span>
                        </a>
                    </li>

                       <li>
                        <a href="{{url('admin_area/memberships/medical/corporate/')}}">
                            <i class="fa fa-building-o"></i>
                            <span style="margin-top: -2px;">Corporate Medical Package</span>
                        </a>
                    </li>

                      <li>
                        <a href="{{url('admin_area/memberships/medical/institution/')}}">
                            <i class="fa fa-university"></i>
                            <span style="margin-top: -2px;">Institution Medical Package</span>
                        </a>
                    </li>

                     <li>
                        <a href="{{url('admin_area/memberships/medical/residence/')}}">
                            <i class="fa fa-home"></i>
                            <span style="margin-top: -2px;">Residence Medical Package</span>
                        </a>
                    </li>

                     <li>
                        <a href="{{url('admin_area/memberships/medical/individual/')}}">
                            <i class="fa fa-male"></i>
                            <span style="margin-top: -2px;">Individual Medical Package</span>
                        </a>
                    </li>



                     <li class="header">FIRE PACKAGES APPLICATIONS</li>
                    <li>
                        <a href="{{url('admin_area/memberships/fire/estate/')}}">
                            <i class="fa fa-fire"></i>
                            <span style="margin-top: -2px;">Estates Fire Package</span>
                        </a>
                    </li>

                          <li>
                        <a href="{{url('admin_area/memberships/fire/residence/')}}">
                            <i class="fa fa-home"></i>
                            <span style="margin-top: -2px;">Residence Fire Package</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{url('admin_area/memberships/fire/corporate/')}}">
                            <i class="fa fa-building-o"></i>
                            <span style="margin-top: -2px;">Corporate Fire Package</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('admin_area/memberships/fire/hotel/')}}">
                            <i class="fa fa-hotel"></i>
                            <span style="margin-top: -2px;">Hotel Fire Package</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{url('admin_area/memberships/fire/institution/')}}">
                            <i class="fa fa-university"></i>
                            <span style="margin-top: -2px;">Institution Fire Package</span>
                        </a>
                    </li>


                  <li class="header">ROAD PACKAGES APPLICATIONS</li>
                    <li>
                        <a href="{{url('admin_area/memberships/road/saloon/')}}">
                            <i class="fa fa-car"></i>
                            <span style="margin-top: -2px;">Saloons</span>
                        </a>
                    </li>

                     <li>
                     <a href="{{url('admin_area/memberships/road/suv/')}}">
                            <i class="fa fa-ambulance"></i>
                            <span style="margin-top: -2px;">SUVs</span>
                        </a>
                    </li>

                    <li>
                     <a href="{{url('admin_area/memberships/road/bus/')}}">
                            <i class="fa fa-bus"></i>
                            <span style="margin-top: -2px;">Bus</span>
                        </a>
                    </li>

                   <li>
                     <a href="{{url('admin_area/memberships/road/truck/')}}">
                            <i class="fa fa-truck"></i>
                            <span style="margin-top: -2px;">Truck</span>
                        </a>
                    </li>


            


                    <li class="header">RESCUE TEAMS APPLICATIONS</li>
                    <li>
                        <a href="{{url('admin_area/rescue_team/medical/')}}">
                            <i class="fa fa-medkit"></i>
                            <span style="margin-top: -2px;">Emergency Medical Team</span>
                        </a>
                    </li>


                      <li>
                        <a href="{{url('admin_area/rescue_team/fire/')}}">
                            <i class="fa fa-fire"></i>
                            <span style="margin-top: -2px;">Emergency Fire Team</span>
                        </a>
                    </li>


                     <li>
                        <a href="{{url('admin_area/rescue_team/road/')}}">
                            <i class="fa fa-road"></i>
                            <span style="margin-top: -2px;">Emergency Road Team</span>
                        </a>
                    </li>


                     <li>
                        <a href="{{url('admin_area/rescue_team/first_responder/')}}">
                            <i class="fa fa-male"></i>
                            <span style="margin-top: -2px;">First Responder Team</span>
                        </a>
                    </li>


                     <li class="header">EXTRAS</li>

                      <li>
                        <a href="{{url('admin_area/general_enquiries')}}">
                            <i class="fa fa-question-circle"></i>
                            <span style="margin-top: -2px;">Enquiries</span>
                        </a>
                    </li>
 

                    <li>
                        <a href="{{url('admin_area/add_event')}}">
                            <i class="fa fa-calendar"></i>
                            <span style="margin-top: -2px;">Add Event</span>
                        </a>
                    </li>

                         <li>
                        <a href="{{url('admin_area/event_tickets')}}">
                            <i class="fa fa-calendar"></i>
                            <span style="margin-top: -2px;">Events Tickets</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('admin_area/contact_messages')}}">
                            <i class="fa fa-envelope"></i>
                            <span style="margin-top: -2px;">Contact Us Messages</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('admin_area/air_quotes')}}">
                            <i class="fa fa-plane"></i>
                            <span style="margin-top: -2px;">Air Quotes</span>
                        </a>
                    </li>


                     <li class="header">BLOG/NEWS</li>

                      <li>
                        <a href="{{url('admin_area/blog_category')}}">
                            <i class="fa fa-plus"></i>
                            <span style="margin-top: -2px;">Add Post Category</span>
                        </a>
                    </li>

                      <li>
                        <a href="{{url('admin_area/blog_post')}}">
                            <i class="fa fa-globe"></i>
                            <span style="margin-top: -2px;">Add Post</span>
                        </a>
                    </li>

                     <li>
                        <a href="{{url('admin_area/subscribers')}}">
                            <i class="fa fa-group"></i>
                            <span style="margin-top: -2px;">Subscribers</span>
                        </a>
                    </li>
                    <!-- End New Tabs -->
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">ResQ247 Admin Panel</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 2.3.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->