<div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                     <br>
                <div class="row">
                    <div class="col-xl-12">
                         <div class="section_title text-center mb-55">
                        <h3>Our Memberships</h3>
                     
                    </div>

                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="medical-tab" data-toggle="tab" href="#medical" role="tab" aria-controls="medical"
                            aria-selected="true">EMS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="road-tab" data-toggle="tab" href="#road" role="tab" aria-controls="road"
                            aria-selected="false">Roadside Assistance & Rescue</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="fire-tab" data-toggle="tab" href="#fire" role="tab" aria-controls="fire"
                            aria-selected="false">Fire Safety & Rescue</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="medical" role="tabpanel" aria-labelledby="medical-tab">
                                
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                    <div class="icon">
                                                        <i class="flaticon-first-aid-kit"></i>
                                                    </div>
                                                    <h3>Medical Emergency Membership</h3>
                                                     <p>
                                                       ResQ247 Ground Ambulance Service provides emergency pre-hospital treatment and transportation by ambulance to the most equipped medical facilities nearest to the patient or transfers between medical facilities.  When an Emergency of a medical nature comes in matters,   time matters is key in saving a life. With Our state of the art Ambulance and experienced paramedics, you are almost certain you or your loved one will make it to your desired medical facility  <a style="color: blue;"  title="Subscribe Here"  href="{{url('packages/emergency_medical')}}"> register today.</a> </p>
                                                         <br>
                                                         <h3>Air Emergency Membership</h3>
                                                         <p>
                                                        Our Air Ambulance Services gives patients, their case managers, or their loved ones throughout the trip, having a perfect choice when it comes to medical air transport is key in saving a life. We provide reliable and professional medical flights for people who must be evacuated to medical facilities within the region for medical reasons or evacuation from remote and inaccessible places by road. Maybe travelling overseas for further treatment or elsewhere but cannot fly commercially, we get you there stress free, <a style="color: blue;"  title="Request Air Quote Here" data-toggle="modal" data-target="#airQuote"  href=""> register today.</a> 
                                                        

                                                     </p>
                                                    <br>
                                                    <div class="info_button">
                                                      

                                                        <a  href="{{url('packages/emergency_medical')}}"class="boxed-btn3 ">Explore Emergency Medical Memberships <i class="fa fa-medkit"></i></a>
                                                        </div>
                                                     </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="business_thumb">
                                                            <img src="{{url('front/img/medical_emergency.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </div>
                            <div class="tab-pane fade" id="road" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                    <div class="icon">
                                                        <!-- <i class="flaticon-first-aid-kit"></i> -->
                                                        <i class="fa fa-road"></i>

                                                    </div>
                                                    <h3>Emergency Road Package</h3>
                                                   <p>
                                                       By simply launching  ResQ247 Mobile App and making a request for this crucial services or by simply calling our Hot line or  toll free number when in this emergency situation. 
                                                        Our rescue team will come to you with the tools and supplies to make these kinds of little or major fixes on the spot. We’ll get you back up on the road or even have your car towed or carried on a flat bed track to your preferred garage anywhere across the republic of Kenya.   
                                                   </p>
                                                    <br>
                                                    <div class="info_button">

                                                        <a  href="{{url('packages/emergency_road')}}"class="boxed-btn3 ">Explore Emergency Road Package <i class="fa fa-road"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_thumb">
                                                    <img src="{{url('front/img/road_emergency.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="fire" role="tabpanel" aria-labelledby="fire-tab">
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                    <div class="icon">
                                                        <!-- <i class="flaticon-first-aid-kit"></i> -->
                                                        <i class="fa fa-fire"></i>

                                                    </div>
                                                    <h3>Emergency Fire Package</h3>
                                                    <p>Besides giving you’re the requisite trainings on fire safety, we always make sure we equip our clients with right fire fighting equipments and in some cases there will be fire engines stationed within your area to respond to major fire incidents. Majorly for our corporate industrial clients etc. Organized estates, learning institutions etc. </p>
                                                    <br>
                            <div class="info_button">
                            <a  href="{{url('packages/emergency_fire')}}"class="boxed-btn3 ">Explore Emergency Fire Package <i class="fa fa-fire"></i></a>
                        </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_thumb">
                                                    <img src="{{url('front/img/fire_emergency.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                            </div>
                          </div>
            </div>
        </div>
    </div>





@include('layouts.airQuote')
   