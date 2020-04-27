<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ResQ 247 | Bus Emergency Road Applications </title>
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
 

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
 

    <!--   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
      
    <link rel="stylesheet" href="{{asset('admin/css/themes/all-themes.css')}}">
  

    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">

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
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->



 
@include('admin.layout.topbar')

    <section>


        <!-- Left Sidebar -->
 

@include('admin.layout.sidebar')
        <!-- #END# Left Sidebar -->


        <!-- Right Sidebar -->
 

@include('admin.layout.right_sidebar')
        <!-- #END# Right Sidebar -->
    </section>




      <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Bus Emergency Road Applications
                    <small>Explore All ResQ 247 Bus Emergency Road Applications</a></small>
                </h2>
            </div>
   
       
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                        
                        </div>                     
                  

                      <!-- Notification -->
                         @if(session()->has('deletesuccess'))
                        <div class="alert alert-danger" role="alert">
                        <strong>Oh Snap! Bus Emergency Road Application Deleted Successfully!</strong>  </div>
                         @endif
                    <!-- End Notification -->
                      
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>

                            <tr>
                                 <th>Id</th>
                                <th>Applicant</th>
                                <th>Email</th>                                      
                                <th>Phone</th>
                                <th>V. Model</th>
                                 <th>Town</th> 
                                <th>Price</th>                                                             
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        <tfoot>
                            <tr>
                           <th>Id</th>
                                <th>Applicant</th>
                                <th>Email</th>                                      
                                <th>Phone</th>
                                <th>V. Model</th>
                                 <th>Town</th> 
                                <th>Price</th>                                                             
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>                                   
                       
                                       
                     @forelse($buss as $bus)
                        <tr>
                        <td>{{$bus->id}}</td>
                        <td>{{$bus->owner_name}}</td>                     
                        <td>{{$bus->email}}</td> 
                        <td>{{$bus->phone}}</td> 
                        <td>{{$bus->vehicle_model}}</td> 
                        <td>{{$bus->town}}</td> 
                        <td>{{$bus->road_price}}</td>                                         
                        <td>{{$bus->created_at}}</td>         

                         <td>
                            <form action="{{route('deleteroadBus',$bus->id)}}" method="post">
                                {{csrf_field()}}
                             <button style="border-style: none;"  type="submit"  title="Delete Bus Application Forever"> <i style="color: red;" class="fa fa-trash"></i>
                            </button>&nbsp&nbsp
                           <!-- <a title="Mark as Seen" href="#" title="See More Details"><i class="fa fa-eye"></i> </a> -->
                         </form>
                         </td>
                        </tr>

                    @empty


                    @endforelse
                              
                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
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

    <!-- Jquery DataTable Plugin Js -->
 

    <script src="{{asset('admin/plugins/jquery-datatable/jquery.dataTables.js')}} "></script>

    <script src="{{asset('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}} "></script>
     

    
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}} "></script>

    <!-- Custom Js -->
 <script src="{{asset('admin/js/admin.js')}} "></script>
     
 
<script src="{{asset('admin/js/pages/tables/jquery-datatable.js')}} "></script>
    <!-- Demo Js -->
    <script src="{{asset('admin/js/demo.js')}} "></script>
</body>

</html>
 