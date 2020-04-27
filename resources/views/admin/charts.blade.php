 
 

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ResQ247 Portal | Admin Panel - Reports & Charts Statistics</title>
    
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
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8">
</script>
 



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
                <h2>DASHBOARD CHARTS</h2>
            </div>
            
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>INCOME (KSH)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REALTIME <i class="fa fa-clock-o"></i> </span>
                                        
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                        <div class="body">
                            <!-- <div id="real_time_chart" class="dashboard-flot-chart"></div> -->

                            <!-- Chart Here -->

                                {!! $chart->container() !!}

                            <!-- Chart Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->


            <!-- #1 -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body">
                                {!! $line->container() !!}
                            
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body">
                                {!! $pie->container() !!}
                        
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body">

                         {!! $radar->container() !!}
                        
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <!-- End #1 -->


            <!-- #2 -->

                        <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="body">
          
                                {!! $meD->container() !!}
                        
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body">

                         {!! $dbline->container() !!}
                        
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <!-- End #2 -->
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Emergency Fire Memberships</h2>
                      
                        </div>
                        <div class="body">

                         {!! $polarArea->container() !!}
                            
                  <!--           <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <td>1</td>
                                            <td> </td>
                                            <td><span class="label bg-green"> </span></td>
                                            
                                        </tr>

                                    </tbody>
                                </table>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Dharura Revenue</h2>
                       
                        </div>
                        <div class="body">
                            <!-- <div id="donut_chart" class="dashboard-donut-chart"></div> -->
                                {!! $dough->container() !!}

                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
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

    



    <!-- ChartJs -->
    



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
{!! $chart->script() !!}
{!! $dough->script() !!}
{!! $line->script() !!}
{!! $pie->script() !!}
{!! $radar->script() !!}
{!! $polarArea->script() !!}
{!! $dbline->script() !!}
{!! $meD->script() !!}
</html>

