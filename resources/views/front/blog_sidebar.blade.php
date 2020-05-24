
<?php
use App\BlogCategory;
use App\BlogPost;
?>
 <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{route('search')}}">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input required="" name="query" type="text" class="form-control" placeholder='Search ResQ247 Blog'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search ResQ247 Blog'">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">

                       @forelse($categories as $category)  

                        <?php 
                        $idd = $category->id;
                        $countC = BlogPost::where('category_id',$idd)->count();
                        // $countC = json_decode(json_encode($countC));

                        // var_dump($countC); die();
                        ?>
                                <li>
                                    <a href="{{route('blogCategory', $category->id )}}" class="d-flex">
                                        <p>{{$category->name}}</p>&nbsp
                                        <p>({{$countC}})</p>
                                    </a>
                                </li>
                               @empty
                                <div align="center">
                                    <h4>No Category Available</h4>
                                </div>
                                 @endforelse

                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Latest News</h3>
                        <?php 
                         // $blogpostsSide = BlogPost::paginate(3);
                        // $blogpostsSide = BlogPost::orderBy('id','DESC')->paginate(3);

                        $blogpostsSide = BlogPost::orderBy('id','DESC')->take(5)->get();    ?>
                    @forelse($blogpostsSide as $blogpostS)  

                            <div class="media post_item">
                                 <img style="width: 111.6px!important; height: 66px!important;"  class="img-thumbnail" title="{{$blogpostS->title}} Image" src="{{url('images/blogimages/medium',$blogpostS->image)}}" alt="">
                                <div class="media-body">
                                    <a href="{{route('one.post',$blogpostS->slug)}}">
                                        <h3 style="font-weight: bold;">{{$blogpostS->title}}</h3>
                                    </a>
                                    <p><span style="background-color: gold; color: #000;" class="badge badge-primary">{{$blogpostS->created_at}}</span></p>

                                </div>
                            </div>
                       @empty
                <div align="center">
                    <h4>No Post Available</h4>
                </div>
                 @endforelse
                    
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">

                            @forelse($categories as $category)  

                                <li>
                                    
                                    <a href="{{route('blogCategory', $category->id )}}">{{$category->name}}</a>
                                </li>
                             
                           @empty
                                <div align="center">
                                    <h4>No Tag Cloud Available</h4>
                                </div>
                                 @endforelse

                            </ul>
                        </aside>


                      <!--   <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="" alt="">
                                    </a>
                                </li>
                            
                   
                            </ul>
                        </aside>
                    -->

                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="{{route('storeSubscriber')}}">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>

                        
                    </div>
                </div>