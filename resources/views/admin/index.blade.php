<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ResQ247 Portal | Admin Panel - Main Dashboard</title>
    
    <!-- Favicon-->
    <link rel="icon" href="{{url('admin/images/resq247logocircle.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    

    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.css')}}">


    <!-- Waves Effect Css -->
    
    <link rel="stylesheet" href="{{asset('admin/plugins/node-waves/waves.css')}}">

    <!-- Animation Css -->
    
    <link rel="stylesheet" href="{{asset('admin/plugins/animate-css/animate.css')}}">

    <!-- Morris Chart Css-->
    
    <link rel="stylesheet" href="{{asset('admin/plugins/morrisjs/morris.css')}}">

    <!-- Custom Css -->
    
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">


    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">


    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  
    
    <link rel="stylesheet" href="{{asset('admin/css/themes/all-themes.css')}}">
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Search ResQ247 Admin Panel">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->


 
@include('admin.layout.topbar')


    <section>
    
 

@include('admin.layout.sidebar')


 
@include('admin.layout.right_sidebar')



    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD QUICK STATS</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="content">
                             <?php                            

                               $user = DB::table("users")->get();
                               $usercount = count($user);
                                ?>
                            <div class="text">Customers</div>
                            <div class="number count-to" data-from="0" data-to="{{$usercount}}" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-purple hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="content">
           <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $road_packages = DB::table("emergency_roads")->sum('road_price');
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
           $sales = $tickets + $dharuras + $fanakas + $fire_packages + $road_packages + $kikwetus + $medical_corporates + $medical_estates + $medical_families + $medical_individuals + $medical_institutions + $medical_residences + $msafiri_motos + $msafiri_psvs;
            ?>
                            <div class="text">Total Sales(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$sales}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="content">
                                 <?php
                                 

                               $message = DB::table("contacts")->get();
                               $messagecount = count($message);
                                ?>
                            <div class="text">Messages</div>
                            <div class="number count-to" data-from="0" data-to="{{$messagecount}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-question-circle"></i>
                        </div>
                        <div class="content">
                            <?php
                
                               $enquiry = DB::table("enquiries")->get();
                               $enquirycount = count($enquiry);
                                ?>
                            <div class="text">Enquiries</div>
                            <div class="number count-to" data-from="0" data-to="{{$enquirycount}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->



                        <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="content">
                             <?php
                                     
           $ticketsales = DB::table("book_events")->sum('ticket_price');      
            
                                ?>
                            <div class="text">Ticket Sales(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$ticketsales}}" data-speed="10" data-fresh-interval="15"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="content">
           <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
           
            ?>
                            <div class="text">Dharura Sales(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$dharuras}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="content">
                  <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
      
            ?>
                            <div class="text">Fanaka Sales(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$fanakas}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="content">
                                           <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
          
            ?>
                            <div class="text">Kikwetu Sales(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$kikwetus}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->







                        <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="content">
                               <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
           $msafirisales = $msafiri_motos + $msafiri_psvs;
            ?>
                            <div class="text">Msafiri Total(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$msafirisales}}" data-speed="10" data-fresh-interval="15"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-lime hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-bus"></i>
                        </div>
                        <div class="content">
           <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
            
            ?>
                            <div class="text">Msafiri PSV(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$msafiri_psvs}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="content">
                  <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
           
            ?>
                            <div class="text">Msafiri Motorist(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$msafiri_motos}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-fire"></i>
                        </div>
                        <div class="content">
                                           <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
          
            ?>
                            <div class="text">Emer. Fire Sales(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$fire_packages}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->





                        <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-building-o"></i>
                        </div>
                        <div class="content">
                               <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
           $msafirisales = $msafiri_motos + $msafiri_psvs;
            ?>
                            <div class="text">Med Corporates(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$medical_corporates}}" data-speed="10" data-fresh-interval="15"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="content">
           <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
            
            ?>
                            <div class="text">Med Estates(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$medical_estates}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-group"></i>
                        </div>
                        <div class="content">
                  <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
           
            ?>
                            <div class="text">Med Families(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$medical_families}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-male"></i>
                        </div>
                        <div class="content">
                                           <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
          
            ?>
                            <div class="text">Med Indiv(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$medical_individuals}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->



                         <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="content">
                            <?php
           $tickets = DB::table("book_events")->sum('ticket_price');
           $dharuras = DB::table("dharuras")->sum('package_price');
           $fanakas = DB::table("fanakas")->sum('fanaka_price');           
           $fire_packages = DB::table("fire_packages")->sum('cost');
           $road_packages = DB::table("emergency_roads")->sum('road_price');
           $kikwetus = DB::table("kikwetus")->sum('kikwetu_price');
           $medical_corporates = DB::table("medical_corporates")->sum('emergency_med_corp_price');
           $medical_estates = DB::table("medical_estates")->sum('emergency_med_estate_price');
           $medical_families = DB::table("medical_families")->sum('emergency_med_fam_price');
           $medical_individuals = DB::table("medical_individuals")->sum('emergency_med_ind_price');
           $medical_institutions = DB::table("medical_institutions")->sum('emergency_med_inst_price');
           $medical_residences = DB::table("medical_residences")->sum('emergency_med_res_price');
           $msafiri_motos = DB::table("msafiri_motos")->sum('moto_price');
           $msafiri_psvs = DB::table("msafiri_psvs")->sum('psv_price');
        
           
            ?>
                            <div class="text">Emer Rd Sales(Ksh)</div>
                            <div class="number count-to" data-from="0" data-to="{{$road_packages}}" data-speed="10" data-fresh-interval="15"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="content">
                                <?php                            

                               $dharu = DB::table("dharuras")->get();
                               $dharucount = count($dharu);
                                $fana = DB::table("fanakas")->get();
                               $fanacount = count($fana);
                                $msafpsv = DB::table("msafiri_psvs")->get();
                               $msafcountpsv = count($msafpsv);
                               $msafmoto = DB::table("msafiri_motos")->get();
                               $msafcountmoto = count($msafmoto);
                               $totalMsaf = $msafcountpsv + $msafcountmoto;
                                $kik = DB::table("dharuras")->get();
                               $kikcount = count($kik);

                                $productsCount = $dharucount + $fanacount + $totalMsaf + $kikcount;

                                ?>
                            <div class="text">Products Applications</div>
                            <div class="number count-to" data-from="0" data-to="{{$productsCount}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <div class="content">
                           <?php                            

                               $medical_corp  = DB::table("medical_corporates")->get();
                               $medical_corpcount = count($medical_corp);

                                $medical_ind  = DB::table("medical_individuals")->get();
                               $medical_indcount = count($medical_ind);

                                $medical_fam  = DB::table("medical_families")->get();
                               $medical_famcount = count($medical_fam); 

                                $medical_inst  = DB::table("medical_institutions")->get();
                               $medical_instcount = count($medical_inst); 

                                $medical_res   = DB::table("medical_residences")->get();
                               $medical_rescount = count($medical_res); 

                               $medical_est   = DB::table("medical_estates")->get();
                               $medical_estcount = count($medical_est);                        

                                $groundCount = $medical_corpcount + $medical_indcount + $medical_famcount + $medical_instcount + $medical_rescount + $medical_estcount;

                                ?>
                            <div class="text">Ground Med Apps</div>
                            <div class="number count-to" data-from="0" data-to="{{$groundCount}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="fa fa-road"></i>
                        </div>
                        <div class="content">
                                    <?php                            

                               $roadpckg  = DB::table("emergency_roads")->get();
                               $roadCount = count($roadpckg);                       

                                ?>
                            <div class="text">Emer Rd Apps</div>
                            <div class="number count-to" data-from="0" data-to="{{$roadCount}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
 
        </div>
    </section>

    <!-- Jquery Core Js -->
    
 <script src="{{asset('admin/plugins/jquery/jquery.min.js')}} "></script>


    <!-- Bootstrap Core Js -->
    
 <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.js')}} "></script>


    <!-- Select Plugin Js -->
    
 <script src="{{asset('admin/plugins/bootstrap-select/js/bootstrap-select.js')}} "></script>


    <!-- Slimscroll Plugin Js -->
    

 <script src="{{asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}} "></script>


    <!-- Waves Effect Plugin Js -->
    

 <script src="{{asset('admin/plugins/node-waves/waves.js')}} "></script>


    <!-- Jquery CountTo Plugin Js -->
    

 <script src="{{asset('admin/plugins/jquery-countto/jquery.countTo.js')}} "></script>


    <!-- Morris Plugin Js -->
    

 <script src="{{asset('admin/plugins/raphael/raphael.min.js')}} "></script>

    

 <script src="{{asset('admin/plugins/morrisjs/morris.js')}} "></script>


    <!-- ChartJs -->
    

 <script src="{{asset('admin/plugins/chartjs/Chart.bundle.js')}} "></script>


    <!-- Flot Charts Plugin Js -->
    

 <script src="{{asset('admin/plugins/flot-charts/jquery.flot.js')}} "></script>

    

 <script src="{{asset('admin/plugins/flot-charts/jquery.flot.resize.js')}} "></script>

    

 <script src="{{asset('admin/plugins/flot-charts/jquery.flot.pie.js')}} "></script>

    

 <script src="{{asset('admin/plugins/flot-charts/jquery.flot.categories.js')}} "></script>

    

 <script src="{{asset('admin/plugins/flot-charts/jquery.flot.time.js')}} "></script>


    <!-- Sparkline Chart Plugin Js -->
    

 <script src="{{asset('admin/plugins/jquery-sparkline/jquery.sparkline.js')}} "></script>


    <!-- Custom Js -->
    

 <script src="{{asset('admin/js/admin.js')}} "></script>

    

 <script src="{{asset('admin/js/pages/index.js')}} "></script>


    <!-- Demo Js -->
    

 <script src="{{asset('admin/js/demo.js')}} "></script>


 

</body>

</html>

