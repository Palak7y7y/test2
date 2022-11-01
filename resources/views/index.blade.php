   @php
   use App\Models\Category;
   use App\Models\Post;
   @endphp
   @extends('layouts.app')

    @section('header_extras')
    
        <title>Home | Half Tuber</title>
    
    @endsection
    
    @section('content')
            <div class="news-masonry">
                <div class="container">
                    <div class="row mas-m">
                        <div class="col-sm-6 mas-p">
                            @php
                            $title  = str_replace(' ', '-', strtolower($trending_news->title))
                            @endphp
                            <div class="mas-item mas-big">
                                <form method="post" action="{{route('post.detail',['title' => $title])}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$trending_news->id}}">
                                    <a href="#"><figure><img src="{{asset('assets/img/'.$trending_news->image)}}" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="#">{{$trending_news->date}}</a></div>
                                        <h2 class="mas-title"><a href="#">{{$trending_news->title}}</a></h2>
                                        <div class="mas-details">
                                            <p>{{$trending_news->sub_title}}</p>
                                            <button type="submit" class="btn btn-secondary">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.End of masonry item -->
                        </div>
                       
                        <div class="col-sm-6 mas-p">
                            <div class="row mas-m">
                                @foreach($categories as $category )
                                @php
                                $items = Post::where('type','News')->where('category_id',$category->id)->orderBy('id','desc')->get()->take('2');
                                $i++;
                                @endphp
                                <div class="col-xs-6 col-sm-6 mas-p">
                                    <div class="masonry-slide{{$i}} owl-carousel owl-theme">
                                        @foreach($items as $item)
                                        @php
                                        $title  = str_replace(' ', '-', strtolower($item->title))
                                        @endphp
                                        <div class="item mas-m-b">
                                            <div class="mas-item masonry-sm">
                                                <form action="{{route('post.detail',['title' => $title])}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name = 'id' value="{{$item->id}}"> 
                                                    <a href="#"><figure><img src="{{asset('assets/img/'.$item->image)}}" class="img-responsive" alt="news image"></figure></a>
                                                    <div class="mas-text">
                                                        {{-- @php
                                                        $cat = Category::where('id',$item->category_id)->get()->first();
                                                        @endphp --}}
                                                        <div class="post-cat"><a href="#">{{$category->name}}</a></div>
                                                        <h4 class="mas-title"><a href="#">{{$item->title}}</a></h4>
                                                        <div class="mas-details">
                                                            <p>{{$item->subtitle}}</p>
                                                            <button type="submit" class="btn btn-secondary">Read More &#8702;</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        <!-- /.End of masonry item -->
                                       </div>
                                       @endforeach 
                                    </div>
                                </div>
                               @endforeach
                                {{-- <div class="col-xs-6 col-sm-6 mas-p">
                                    <div class="masonry-slide2 owl-carousel owl-theme">
                                        @foreach($categories2 as $category2)
                                        @php
                                        $title  = str_replace(' ', '-', strtolower($category2->title))
                                        @endphp
                                        <div class="item mas-m-b">
                                            <div class="mas-item masonry-sm">
                                                <form action="{{route('post.detail',['title' => $title])}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name = 'id' value="{{$category2->id}}"> 
                                                    <a href="#"><figure><img src="{{asset('assets/img/'.$category2->image)}}" class="img-responsive" alt=""></figure></a>
                                                    <div class="mas-text">
                                                        @php
                                                        $cat = Category::where('id',2)->get()->first();
                                                        @endphp

                                                        <div class="post-cat"><a href="#">{{$cat->name}}</a></div>
                                                        <h4 class="mas-title"><a href="#">{{$category2->title}}</a></h4>
                                                        <div class="mas-details">
                                                            <p>{{$category2->subtitle}}</p>
                                                            <button type="submit" class="btn btn-secondary">Read More &#8702;</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        <!-- /.End of masonry item -->
                                       </div>
                                       @endforeach 
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-xs row mas-m">
                                <div class="col-xs-6 col-sm-6 mas-p">
                                    <div class="masonry-slide3 owl-carousel owl-theme">
                                        @foreach($categories3 as $category3)
                                        @php
                                        $title  = str_replace(' ', '-', strtolower($category3->title))
                                        @endphp
                                        <div class="item mas-m-b">
                                            <div class="mas-item masonry-sm">
                                                <form action="{{route('post.detail',['title' => $title])}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name = 'id' value="{{$category3->id}}"> 
                                                    <a href="#"><figure><img src="{{asset('assets/img/'.$category3->image)}}" class="img-responsive" alt=""></figure></a>
                                                    <div class="mas-text">
                                                        @php
                                                        $cat = Category::where('id',3)->get()->first();
                                                        @endphp

                                                        <div class="post-cat"><a href="#">{{$cat->name}}</a></div>
                                                        <h4 class="mas-title"><a href="#">{{$category3->title}}</a></h4>
                                                        <div class="mas-details">
                                                            <p>{{$category3->subtitle}}</p>
                                                            <button type="submit" class="btn btn-secondary">Read More &#8702;</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        <!-- /.End of masonry item -->
                                       </div>
                                       @endforeach 
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 mas-p">
                                    <div class="masonry-slide4 owl-carousel owl-theme">
                                        @foreach($categories4 as $category4)
                                        @php
                                        $title  = str_replace(' ', '-', strtolower($category4->title))
                                        @endphp
                                        <div class="item mas-m-b">
                                            <div class="mas-item masonry-sm">
                                                <form action="{{route('post.detail',['title' => $title])}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name = 'id' value="{{$category4->id}}"> 
                                                    <a href="#"><figure><img src="{{asset('assets/img/'.$category4->image)}}" class="img-responsive" alt=""></figure></a>
                                                    <div class="mas-text">
                                                        @php
                                                        $cat = Category::where('id',4)->get()->first();
                                                        @endphp

                                                        <div class="post-cat"><a href="#">{{$cat->name}}</a></div>
                                                        <h4 class="mas-title"><a href="#">{{$category4->title}}</a></h4>
                                                        <div class="mas-details">
                                                            <p>{{$category4->subtitle}}</p>
                                                            <button type="submit" class="btn btn-secondary">Read More &#8702;</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        <!-- /.End of masonry item -->
                                       </div>
                                       @endforeach  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.End of news masonry -->
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs hidden-sm col-md-2 leftSidebar">
                            <div class="trending-post">
                                <div class="title-holder">
                                    <h3 class="title">Trending</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <div class="single-post">
                                    <div class="entry-meta">
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <h4><a href="#">Ut ac <em><strong>justo ut nulla</strong></em> semper imperdiet.</a></h4>
                                </div>
                                <!-- /.End of single post-->
                                <div class="single-post">
                                    <div class="entry-meta">
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <h4><a href="#">Morbi at libero at <em>lectus</em> congue.</a></h4>
                                </div>
                                <!-- /.End of single post-->
                                <div class="single-post">
                                    <div class="entry-meta">
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <h4><a href="#">Etiam vel quam scelerisque, dictum.</a></h4>
                                </div>
                                <!-- /.End of single post-->
                                <div class="single-post">
                                    <div class="entry-meta">
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <h4><a href="#">Ut ac justo ut nulla semper imperdiet.</a></h4>
                                </div>
                                <!-- /.End of single post-->
                            </div>
                            <!-- /.End of trending post -->
                            <div class="banner-content">
                                <img src="assets/img/ad-180x480-1.png" class="img-responsive" alt="">
                            </div>
                            <!-- /.End of banner content -->
                        </div>
                        <main class="col-xs-12 col-sm-8 col-md-7 content p_r_40">
                           @foreach($blogs as $blog)
                            <div class="media meida-md">
                                <div class="media-left">
                                    <a href="#"><img src="{{asset('assets/img/'.$blog->image)}}" class="media-object" alt=""></a>
                                </div>
                                <!-- /.Post image -->
                                <div class="media-body">
                                    <div class="post-header">
                                        @php
                                        $category  = Category::where('id',$blog->category_id)->get()->first();
                                        $title = str_replace(' ','-',strtolower($blog->title));

                                        @endphp
                                        <div class="post-cat"><span>In</span> <a href="#">{{$category->name}}</a></div>
                                        <h3 class="media-heading"><a href="#">{{$blog->title}}</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i>{{$blog->date}}</span> 
                                            <span class="comment-link"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</span>
                                        </div>
                                        <!-- /.Post meta -->
                                    </div>
                                    <p>{{$blog->subtitle}}</p>
                                    <div class="element-block">
                                        <form action={{route('post.detail',['title'=> $title])}} method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$blog->id}}">
                                            <button type="submit" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</button>
                                            <!-- /.Post button -->
                                        </form>
                                        <div class="post_share">
                                            <a class="smedia facebook fa fa-facebook" href="#"></a>
                                            <a class="smedia twitter fa fa-twitter" href="#"></a>
                                            <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                        </div>
                                        <!-- /.Post social share -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.End of media post -->
                            @endforeach
                            <div class="media meida-md">
                                <div class="media-left">
                                    <a href="#"><img src="assets/img/370x300-2.jpg" class="media-object" alt=""></a>
                                </div>
                                <!-- /.Post image -->
                                <div class="media-body">
                                    <div class="post-header">
                                        <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                                        <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted.</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                        </div>
                                        <!-- /.Post meta -->
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                    <div class="element-block">
                                        <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                        <!-- /.Post button -->
                                        <div class="post_share">
                                            <a class="smedia facebook fa fa-facebook" href="#"></a>
                                            <a class="smedia twitter fa fa-twitter" href="#"></a>
                                            <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                        </div>
                                        <!-- /.Post social share -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.End of media post -->
                            <div class="media meida-md">
                                <div class="media-left">
                                    <a href="#"><img src="assets/img/370x300-3.jpg" class="media-object" alt=""></a>
                                </div>
                                <!-- /.Post image -->
                                <div class="media-body">
                                    <div class="post-header">
                                        <div class="post-cat"><span>In</span> <a href="#">Travel</a></div>
                                        <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted.</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                        </div>
                                        <!-- /.Post meta -->
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                    <div class="element-block">
                                        <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                        <!-- /.Post button -->
                                        <div class="post_share">
                                            <a class="smedia facebook fa fa-facebook" href="#"></a>
                                            <a class="smedia twitter fa fa-twitter" href="#"></a>
                                            <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                        </div>
                                        <!-- /.Post social share -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.End of media post -->
                            <div class="media meida-md">
                                <div class="media-left">
                                    <a href="#"><img src="assets/img/370x300-4.jpg" class="media-object" alt=""></a>
                                </div>
                                <!-- /.Post image -->
                                <div class="media-body">
                                    <div class="post-header">
                                        <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                        <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted.</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                        </div>
                                        <!-- /.Post meta -->
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                    <div class="element-block">
                                        <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                        <!-- /.Post button -->
                                        <div class="post_share">
                                            <a class="smedia facebook fa fa-facebook" href="#"></a>
                                            <a class="smedia twitter fa fa-twitter" href="#"></a>
                                            <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                        </div>
                                        <!-- /.Post social share -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.End of media post -->
                            <div class="media meida-md">
                                <div class="media-left">
                                    <a href="#"><img src="assets/img/370x300-5.jpg" class="media-object" alt=""></a>
                                </div>
                                <!-- /.Post image -->
                                <div class="media-body">
                                    <div class="post-header">
                                        <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                                        <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted.</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                        </div>
                                        <!-- /.Post meta -->
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                    <div class="element-block">
                                        <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                        <!-- /.Post button -->
                                        <div class="post_share">
                                            <a class="smedia facebook fa fa-facebook" href="#"></a>
                                            <a class="smedia twitter fa fa-twitter" href="#"></a>
                                            <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                        </div>
                                        <!-- /.Post social share -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.End of media post -->
                            <div class="media meida-md">
                                <div class="media-left">
                                    <a href="#"><img src="assets/img/370x300-6.jpg" class="media-object" alt=""></a>
                                </div>
                                <!-- /.Post image -->
                                <div class="media-body">
                                    <div class="post-header">
                                        <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                        <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted.</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                        </div>
                                        <!-- /.Post meta -->
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                    <div class="element-block">
                                        <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                        <!-- /.Post button -->
                                        <div class="post_share">
                                            <a class="smedia facebook fa fa-facebook" href="#"></a>
                                            <a class="smedia twitter fa fa-twitter" href="#"></a>
                                            <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                        </div>
                                        <!-- /.Post social share -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.End of media post -->
                            <div class="media meida-md">
                                <div class="media-left">
                                    <a href="#"><img src="assets/img/370x300-7.jpg" class="media-object" alt=""></a>
                                </div>
                                <!-- /.Post image -->
                                <div class="media-body">
                                    <div class="post-header">
                                        <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                                        <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted.</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                        </div>
                                        <!-- /.Post meta -->
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                    <div class="element-block">
                                        <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                        <!-- /.Post button -->
                                        <div class="post_share">
                                            <a class="smedia facebook fa fa-facebook" href="#"></a>
                                            <a class="smedia twitter fa fa-twitter" href="#"></a>
                                            <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                        </div>
                                        <!-- /.Post social share -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.End of media post -->
                            <!--                            <div class="loadmore_block"> 
                                                            <a href="#" class=""> Load More</a> 
                                                        </div>-->
                            <!-- /.End of Load more -->
                            {{$blogs->links()}}
                            {{-- <ul class="pagination">
                                <li class="disabled"><a href="#">&#8701;</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="page-numbers"><span>...</span></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&#8702;</a></li>
                            </ul> --}}
                            <!-- /.End of pagination -->
                        </main>
                        <aside class="col-xs-12 col-sm-4 col-md-3 rightSidebar">
                            <div class="latest_post_widget">
                                <div class="title-holder">
                                    <h3 class="title">Most Popular</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <div class="media latest_post">
                                    <a class="media-left" href="">
                                        <img src="assets/img/100x70-1.jpg" class="media-object" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.latest post -->
                                <div class="media latest_post">
                                    <a class="media-left" href="">
                                        <img src="assets/img/100x70-2.jpg" class="media-object" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.latest post -->
                                <div class="media latest_post">
                                    <a class="media-left" href="">
                                        <img src="assets/img/100x70-3.jpg" class="media-object" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                                        <div class="entry-meta">
                                            <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.latest post -->
                            </div>
                            <!-- /.End of latest post -->
                            <div class="social_share_btn">
                                <div class="title-holder">
                                    <h3 class="title">Subscribe</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <ul>
                                    <li class="li-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <li class="li-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li class="li-instagram"><a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google +</a></li>
                                    <li class="li-linkedin"><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i> Pinterest</a></li>
                                </ul>
                            </div>
                            <!-- /.End of subscribe -->
                            <div class="banner-content">
                                <img src="assets/img/ad-300x250-1.png" class="img-responsive center-block" alt="">
                            </div>
                            <!-- /.End of banner content -->
                            <div class="category_widget">
                                <div class="title-holder">
                                    <h3 class="title">Category</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <a class="category" href="">
                                    <figure><img src="assets/img/category-1.jpg" class="img-responsive" alt=""></figure>
                                    <div class="category_name">Fashion</div>
                                </a>
                                <!-- /.End of category -->
                                <a class="category" href="">
                                    <figure><img src="assets/img/category-2.jpg" class="img-responsive" alt=""></figure>
                                    <div class="category_name">Travel</div>
                                </a>
                                <!-- /.End of category -->
                                <a class="category" href="">
                                    <figure><img src="assets/img/category-3.jpg" class="img-responsive" alt=""></figure>
                                    <div class="category_name">Life Style</div>
                                </a>
                                <!-- /.End of category -->
                            </div>
                            <!-- /.End of category widget -->
                        </aside>
                    </div>
                </div>
                <div class=" container">
                    <div class="height_15"></div>
                    <div class="banner-content">
                        <img src="assets/img/ad-728x90-1.png" class="img-responsive center-block" alt="">
                    </div>
                    <!-- /.End of banner content -->
                </div>
                <div class="youtube_video">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="title-holder">
                                    <h3 class="title title-white">Featured Videos</h3>
                                    <span class="title-shape title-shape-white"></span>
                                </div>
                                <!--  /.End of title -->
                                <h3 class="video-title">Video</h3>
                                <div class="item vide_post_item">
                                    <!-- the class "videoWrapper169" means a 16:9 aspect ration video. Another option is "videoWrapper43" for 4:3. -->
                                    <div class="videoWrapper videoWrapper169 js-videoWrapper">
                                        <!-- YouTube iframe. -->
                                        <!-- note the iframe src is empty by default, the url is in the data-src="" argument -->
                                        <!-- also note the arguments on the url, to autoplay video, remove youtube adverts/dodgy links to other videos, and set the interface language -->
                                        <iframe class="videoIframe js-videoIframe"  allowfullscreen data-src="https://www.youtube.com/embed/hgzzLIa-93c?autoplay=1& modestbranding=1&rel=0&hl=sv"></iframe>
                                        <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                                        <button class="videoPoster js-videoPoster" style="background-image:url(assets/img/youtube-video.jpg);">Play video</button>
                                    </div>
                                    <!--<button onclick="videoStop()">external close button</button>-->
                                </div>
                                <!-- /.End of video post item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--  /.End of youtube video -->
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs hidden-sm col-md-2 leftSidebar">
                            <div class="banner-content">
                                <img src="assets/img/ad-180x480-1.png" class="img-responsive" alt="">
                            </div>
                            <!--/.End of banner content--> 
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-7 content  p_r_40">
                            <div class="title-holder">
                                <h3 class="title">Latest Articles</h3>
                                <span class="title-shape title-shape-dark"></span>
                            </div>
                            <!--<h3 class="widget-title">Latest Articles</h3>-->
                            <div class="grid-content latest_articles">
                                @foreach($articles as $article)
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="{{asset('assets/img/'.$article->image)}}" class="img-responsive" alt="">
                                        </a>
                                        @php
                                        $category = Category::where('id',$article->category_id)->get()->first();
                                        $title = str_replace(' ','-',strtolower($article->title));
                                        @endphp
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">{{$category->name}}</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i>{{$article->date}}</span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">{{$article->title}}</a></h4>
                                        </figcaption>
                                        <br>
                                        <form action={{route('post.detail',['title'=> $title])}} method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$article->id}}">
                                            <button type="submit" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</button>
                                            <!-- /.Post button -->
                                        </form>
                                    </figure>
                                </article>
                                @endforeach
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-2.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-3.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-4.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Travel</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-5.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Travel</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-6.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-7.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-8.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-9.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                                <article class="grid_post">
                                    <figure>
                                        <a href="#" class="grid_image">
                                            <img src="assets/img/400x250-10.jpg" class="img-responsive" alt="">
                                        </a>
                                        <figcaption>
                                            <div class="post-cat"><span>In</span> <a href="#">Fashion</a></div>
                                            <div class="entry-meta">
                                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                            </div>
                                            <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum</a></h4>
                                        </figcaption>
                                    </figure>
                                </article>
                                <!-- /.End of grid post -->
                            </div>
                            {{$articles->links()}}
                            {{-- <ul class="pagination">
                                <li class="disabled"><a href="#">&#8701;</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="page-numbers"><span>...</span></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&#8702;</a></li>
                            </ul> --}}
                            <!-- /.End of pagination -->
                            <div class="banner-content">
                                <img src="assets/img/ad-728x90-1.png" class="img-responsive center-block" alt="">
                            </div>
                            <!-- /.End of banner content -->
                        </div>            
                        <div class="col-xs-12 col-sm-4 col-md-3 rightSidebar">
                            <div class="fb_like">
                                <div class="title-holder">
                                    <h3 class="title">Facebook</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <div class="fb-page" data-href="https://www.facebook.com/fatakestono1/" data-tabs="timeline" data-width="268" data-height="214" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/fatakestono1/" class="fb-xfbml-parse-ignore">
                                        <a href="https://www.facebook.com/fatakestono1/">ফাটাকেস্ট</a>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- /.End of facebook like box -->
                            <div class="banner-content">
                                <img src="assets/img/ad-300x250-1.png" class="img-responsive center-block" alt="">
                            </div>
                            <!-- /.End of banner content -->
                            <div class="donation_widget">
                                <h4 class="donation_title">Donation Information</h4>
                                <div class="donation_header">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <input class="form-control" id="currency" type="text" placeholder="$10">
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="radio radio-danger">
                                                <input type="radio" name="radio2" id="radio3" value="option1">
                                                <label for="radio3">
                                                    One Time
                                                </label>
                                            </div>
                                            <div class="radio radio-danger">
                                                <input type="radio" name="radio2" id="radio4" value="option2" checked="">
                                                <label for="radio4">
                                                    Recurring Monthly
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-shield" aria-hidden="true"></i> SECURE CONNECTION
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Card Number</label>
                                            <input class="form-control" id="c_number" type="text" placeholder="*** *** ***">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>CW</label>
                                                <input class="form-control" id="cw" type="text">
                                            </div>
                                            <div class="col-sm-8">
                                                <label>Expiration Date</label>
                                                <div class="row mar">
                                                    <div class="col-sm-5 pad">
                                                        <input class="form-control" id="mm" type="text" placeholder="MM">
                                                    </div>
                                                    <div class="col-sm-7 pad">
                                                        <input class="form-control" id="yyyy" type="text" placeholder="YYYY">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of card info -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" id="f_name" type="text" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <!--<label>Last name</label>-->
                                            <input class="form-control" id="l_name" type="text" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" id="email2" type="text" placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn link-btn">Submit Donation ⇾</a>
                            </div>
                            <!-- /.End of donation widget -->
                            <div class="tag_widget">
                                <div class="title-holder">
                                    <h3 class="title">Tags</h3>
                                    <span class="title-shape title-shape-dark"></span>
                                </div>
                                <!--  /.End of title -->
                                <a href="#">WordPress</a>
                                <a href="#">HTML</a>
                                <a href="#">CSS</a>
                                <a href="#">PHP</a>
                                <a href="#">Fashion</a>
                                <a href="#">News</a>
                            </div>
                            <!-- /.End of tags -->
                        </div>
                    </div>
                </div>
            </div>
        
          
@endsection
