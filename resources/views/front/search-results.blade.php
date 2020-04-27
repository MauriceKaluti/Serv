<?php
use App\BlogCategory;
use App\BlogPost;
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ247 | Blog, News & Updates</title>
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
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
@include('layouts.header')
 
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div style="background-color: #3D2E2E;" class="bradcam_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Blog</h3>
                        <p><a href="{{url('/')}}">Home /</a> Explore ResQ 247 Latest News</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <h1 style="font-size: 30px;" class="stext-105">Blog Search Results</h1>

        <p class="stext-105">{{ $blogposts->total()}} result(s) for <b>'{{ request()->input('query')}}'</b> </p>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    @forelse($blogposts as $blogpost)  
                        <article class="blog_item">
                            <div class="blog_item_img">
                                 <img class="img-thumbnail" title="{{$blogpost->title}} Image" src="{{url('images/blogimages/medium',$blogpost->image)}}" alt="">  <br>  
                                <a>
                                <span class="badge badge-primary">{{$blogpost->created_at}}</span> 
                               
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>{{$blogpost->title}}</h2>
                                </a>
                                <p>{{$blogpost->details}}</p>
                                <ul class="blog-info-link">
                                        <!-- service_area_start -->                   
                        <?php 
                        $idd = $blogpost->category_id;
                        $showC = BlogCategory::where('id',$idd)->first();
                        // $showC = json_decode(json_encode($showC));

                        // var_dump($showC); die();
                        ?>
                                    <li><a href="{{route('blogCategory', $showC->id )}}"><i class="fa fa-globe"></i> {{$showC->name}} </a></li>
                                    <li><a><i class="fa fa-user"></i> {{$blogpost->posted_by}}</a></li>
                                </ul>
                            </div>
                        </article>
                   @empty
                <div align="center">
                    <h4>No Match Found</h4>
                </div>
                 @endforelse
                  
                        <nav class="blog-pagination justify-content-center d-flex">
     

            <?php echo $blogposts->render(); ?>

                        </nav>



                    </div>
                </div>

                <!-- sidebar here -->
@include('front.blog_sidebar')
                <!-- end sidebar -->
               
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    

<!-- footer start -->
@include('layouts.footer')

 <!-- footer end  -->
<!-- link that opens popup -->

<!-- form itself end-->
 
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