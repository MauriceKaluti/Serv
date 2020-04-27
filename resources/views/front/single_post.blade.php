<?php
use App\BlogCategory;
use App\BlogPost;
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>ResQ247 | Blog Post - {{$post->title}}</title>
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

    <!-- bradcam_area_start  -->
<!--     <div style="background-color: #3D2E2E;" class="bradcam_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Blog Post</h3>
                        <p><a href="{{url('/')}}">Home /</a> {{$post->title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->

       <!-- media title  -->
        <div class="container" style="margin-top: 40px; ">
            <div class="row">
                <div class="col-xl-12">                       
                        <h2><span class="badge badge-primary"><b style="color: blue; color: #fff;"></b> <b style="color: gold;">{{$post->title}}</b></span></h2>
                         

                </div>
            </div>
        </div>
    <!-- media title  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                    <img class="img-thumbnail" title="{{$post->title}} Image" src="{{url('images/blogimages/medium',$post->image)}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$post->title}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <?php 
                        $idd = $post->category_id;
                        $showC = BlogCategory::where('id',$idd)->first();
                        // $showC = json_decode(json_encode($showC));

                        // var_dump($showC); die();
                        ?>
                        <li><a href="{{route('blogCategory', $showC->id )}}"><i class="fa fa-user"></i> {{$showC->name}}</a></li>
                        <li><a><i class="fa fa-user"></i> {{$post->posted_by}}</a></li>
                     </ul>
                     <p class="excert">
                        {{$post->details}}
                     </p>
                
                     <!-- <div class="quote-wrapper">
                        <div class="quotes">
                            {{$post->details}}
                        </div>
                     </div> -->
       
                  </div>
               </div>
               <div class="navigation-top">
             
                  <div class="navigation-area">
                   <?php 
                        $idd = $post->category_id;
                        $showC = BlogPost::where('id',$idd)->first();
                        // $showC = json_decode(json_encode($showC));
                        // var_dump($showC); die();

                        // Get Next & Previous Post

                    // $nextPost = BlogPost::orderBy('id','DESC')->paginate(1)->skip;
                    $next = BlogPost::where('id', '>', $post->id)->orderBy('id')->first();

                    $previous = BlogPost::where('id', '<', $post->id)->orderBy('id','desc')->first();
                        

                        ?>
                           
                     <div class="row">

                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">                
                            @if (isset($previous))
                           <div class="detials">
                            <a style="color: blue;" href="{{ url('blog_post', $previous->slug) }}">
                              <p><i style="color: blue;" class="fa fa-arrow-left"></i> Prev Post</p>
                            </a>                            
                              <a href="{{ url('blog_post', $previous->slug) }}">
                                 <h4>{{ $previous->title }}</h4>
                              </a>
                           </div>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           @if (isset($next))
                           <div class="detials">
                            <a href="{{ url('blog_post', $next->slug) }}">
                              <p>Next Post <i class="fa fa-arrow-right"></i></p>                              
                            </a>
                              <a href="{{ url('blog_post', $next->slug) }}">
                                 <h4>{{ $next->title }}</h4>
                              </a>
                           </div>
                            @endif              
                        </div>

                     </div>
                  </div>
               </div>
               
            
            </div>
            

@include('front.blog_sidebar')

         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

<!-- footer start -->
@include('layouts.footer')
 
<!-- footer end  -->
<!-- link that opens popup -->
 


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