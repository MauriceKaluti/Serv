<!-- footer start -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img style="width: 75px; height: 75px;" src="{{url('front/img/resq247logocircle.png')}}" alt="">
                                    </a>
                                </div>
                                <p>
                                       We develop solutions and innovations that touch lives, fusing technology into emergency response and rescues for a safer and secure
                                society. When it comes to saving lives and properties - speed is key and ResQ247 implements and executes exactly that! 
                                </p>
                                
                                    <ul style="display: inline-flex; text-align: center; list-style: none;">
                                       
                                        <li style="margin-right: 20px;">
                                            <a href="https://www.facebook.com/rescue247/">
                                                <i class="fa fa-facebook" ></i>
                                            </a>
                                        </li>
                                        <li style="margin-right: 20px;">
                                            <a href="https://twitter.com/rq247?lang=en">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li style="margin-right: 20px;">
                                            <a href="https://www.instagram.com/resq247/">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                         <li style="margin-right: 20px;">
                                            <a href="https://www.youtube.com/channel/UC3ue3O8My0SHCLJ0qMpGOiA">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                
    
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                Memberships 
                                </h3>
                                <ul>  
                                    <li><a href="{{url('/packages/emergency_medical')}}"><i class="fa fa-medkit"></i> Medical Membership</a></li>
                                    <li><a href="{{url('/packages/emergency_road')}}"><i class="fa fa-road"></i> Road Membership</a></li>
                                    <li><a href="{{url('/packages/emergency_fire')}}"><i class="fa fa-fire"></i> Fire Membership</a></li>
                                    <li><a href="{{url('/products/dharura')}}"><i class="fa fa-car"></i> Dharura</a></li>
                                    <li><a href="{{url('/products/msafiri')}}"><i class="fa fa-bus"></i> Msafiri</a></li>
                                    <li><a href="{{url('/products/fanaka')}}"><i class="fa fa-truck"></i> Fanaka</a></li>
                                    <li><a href="{{url('/products/kikwetu')}}"><i class="fa fa-group"></i> Kikwetu</a></li>
                                    <li><a href="{{url('/blog')}}"><i class="fa fa-globe"></i> Blog/News</a></li>
                                  
                                </ul>
    
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Quick Links
                                </h3>
                                <ul>

                                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="{{url('/services/emergency_medical')}}"><i class="fa fa-medkit"></i> Medical Emergency</a></li>
                                    <li><a href="{{url('/services/emergency_fire')}}"><i class="fa fa-fire"></i> Fire Emergency</a></li>
                                    <li><a href="{{url('/services/emergency_road')}}"><i class="fa fa-road"></i> Road Emergency</a></li>       
                                    <li><a href="{{url('/contact')}}"><i class="fa fa-phone"></i> Contact</a></li>
                                    <li><a href="http://45.32.50.183"><i class="fa fa-map-marker"></i> Auto Tracking</a></li>
                                    <li><a href="{{url('/media_publication')}}"><i class="fa fa-laptop"></i> Media Publications</a></li>
                                     @if (Auth::guest())
                                    <li>                                          
                                        <a href="{{url('/login')}}">
                                         <i class="fa fa-key"></i> Login 
                                    </a>                                  

                                    </li>

                                    <!--  <li> <a href="{{url('/login')}}">
                                         <i class="fa fa-book"></i> Register
                                    </a></li> -->
                                     @else
                                       <li> 
                                        <i  style="color: #fff; font-size: 20px;" class="fa fa-user"></i>
                                            <a style="font-size: 13px;"  onclick="event.preventDefault();
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
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Address
                                </h3>
                                <p> Delta Corner House, <br> 
                                    Waiyaki Way Westland.<br>
                                 11164 - 00100, Nairobi  - Kenya<br>
                                   +254 738 247 247<br>
                                    +254 722 865 048 <br>
                                    <a style="color: #fff;" href="mailto:info@res-q247.life?subject=Enquiry About ResQ247 Services">info@resq247.life</a>
                                    
                                </p>
                                <p>
                                   Download Client App
                                    <a  href="#">
                                        <img style="width: 193.8px; height: 75px; " src="{{url('front/img/playstore.png')}}">
                                    </a>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                              
                        ResQ247 Ltd | Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://carmeltechnologies.co.ke" target="_blank">Dev by CT</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- footer end  -->

