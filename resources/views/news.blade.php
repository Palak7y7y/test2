    @extends('layouts.app')

    @section('header_extras')
    
        <title>All News | Half Tuber</title>
    
    @endsection
    
    @section('content')
    <div class="clearfix"></div>
    <!-- /.End of navigation -->
    <div class="parallax page_header"  data-parallax-bg-image="assets/img/header-bg.jpg" data-parallax-direction="left">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>ALL NEWS</h3>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">NEWS</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End of page header -->
    <div class="container">
        <div class="row page-content">
            <main class="col-sm-8 col-md-9 content p_r_40">
                @foreach($newses as $news)
                <div class="media meida-md">
                    <div class="media-left">
                        <a href="#"><img src="{{asset('assets/img/'.$news->image)}}" class="media-object" alt=""></a>
                    </div>
                    <!-- /.Post image -->
                    <div class="media-body">
                        <div class="post-header">
                            <div class="post-cat"><span>In</span> <a href="#">{{$news->date}}</a></div>
                            <h3 class="media-heading"><a href="#">{{$news->title}}</a></h3>
                            <div class="entry-meta">
                                {{-- <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">June 30, 2022</time></span>  --}}
                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                            </div>
                            <!-- /.Post meta -->
                        </div>
                        <p>{{$news->sub_title}}</p>
                        @php
                         $title = str_replace(' ','-',strtolower($news->title))
                        @endphp
                        <div class="element-block">
                            <form method="post" action="{{route('post.detail',['title' => $title])}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$news->id}}">
                                <button type="submit" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</button>
                                <!-- /.Post button -->
                                <div class="post_share">
                                    <a class="smedia facebook fa fa-facebook" href="#"></a>
                                    <a class="smedia twitter fa fa-twitter" href="#"></a>
                                    <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                    <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                    <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                                </div>
                                <!-- /.Post social share -->
                            </form>
                        </div>
                    </div>
                </div>

                <!-- /.End of media left post -->
                @endforeach

                {{$newses->links()}}
                {{-- <div class="media meida-md">
                    <div class="media-left">
                        <a href="#"><img src="assets/img/370x300-2.jpg" class="media-object" alt=""></a>
                    </div>
                    <!-- /.Post image -->
                    <div class="media-body">
                        <div class="post-header">
                            <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                            <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted by the readable.</a></h3>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                            </div>
                            <!-- /.Post meta -->
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <div class="element-block">
                            <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                            <!-- /.Post button -->
                            <div class="post_share">
                                <a class="smedia facebook fa fa-facebook" href="#"></a>
                                <a class="smedia twitter fa fa-twitter" href="#"></a>
                                <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                            </div>
                            <!-- /.Post social share -->
                        </div>
                    </div>
                </div>
                <!-- /.End of media left post -->
                <div class="media meida-md">
                    <div class="media-left">
                        <a href="#"><img src="assets/img/370x300-3.jpg" class="media-object" alt=""></a>
                    </div>
                    <!-- /.Post image -->
                    <div class="media-body">
                        <div class="post-header">
                            <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                            <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted by the readable.</a></h3>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                            </div>
                            <!-- /.Post meta -->
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <div class="element-block">
                            <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                            <!-- /.Post button -->
                            <div class="post_share">
                                <a class="smedia facebook fa fa-facebook" href="#"></a>
                                <a class="smedia twitter fa fa-twitter" href="#"></a>
                                <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                            </div>
                            <!-- /.Post social share -->
                        </div>
                    </div>
                </div>
                <!-- /.End of media left post -->
                <div class="media meida-md">
                    <div class="media-left">
                        <a href="#"><img src="assets/img/370x300-4.jpg" class="media-object" alt=""></a>
                    </div>
                    <!-- /.Post image -->
                    <div class="media-body">
                        <div class="post-header">
                            <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                            <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted by the readable.</a></h3>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                            </div>
                            <!-- /.Post meta -->
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <div class="element-block">
                            <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                            <!-- /.Post button -->
                            <div class="post_share">
                                <a class="smedia facebook fa fa-facebook" href="#"></a>
                                <a class="smedia twitter fa fa-twitter" href="#"></a>
                                <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                            </div>
                            <!-- /.Post social share -->
                        </div>
                    </div>
                </div>
                <!-- /.End of media left post -->
                <div class="media meida-md">
                    <div class="media-left">
                        <a href="#"><img src="assets/img/370x300-5.jpg" class="media-object" alt=""></a>
                    </div>
                    <!-- /.Post image -->
                    <div class="media-body">
                        <div class="post-header">
                            <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                            <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted by the readable.</a></h3>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                            </div>
                            <!-- /.Post meta -->
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <div class="element-block">
                            <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                            <!-- /.Post button -->
                            <div class="post_share">
                                <a class="smedia facebook fa fa-facebook" href="#"></a>
                                <a class="smedia twitter fa fa-twitter" href="#"></a>
                                <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                            </div>
                            <!-- /.Post social share -->
                        </div>
                    </div>
                </div>
                <!-- /.End of media left post -->
                <div class="media meida-md">
                    <div class="media-left">
                        <a href="#"><img src="assets/img/370x300-6.jpg" class="media-object" alt=""></a>
                    </div>
                    <!-- /.Post image -->
                    <div class="media-body">
                        <div class="post-header">
                            <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                            <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted by the readable.</a></h3>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                            </div>
                            <!-- /.Post meta -->
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <div class="element-block">
                            <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                            <!-- /.Post button -->
                            <div class="post_share">
                                <a class="smedia facebook fa fa-facebook" href="#"></a>
                                <a class="smedia twitter fa fa-twitter" href="#"></a>
                                <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                            </div>
                            <!-- /.Post social share -->
                        </div>
                    </div>
                </div>
                <!-- /.End of media left post -->
                <div class="media meida-md">
                    <div class="media-left">
                        <a href="#"><img src="assets/img/370x300-7.jpg" class="media-object" alt=""></a>
                    </div>
                    <!-- /.Post image -->
                    <div class="media-body">
                        <div class="post-header">
                            <div class="post-cat"><span>In</span> <a href="#">Lifestyle</a></div>
                            <h3 class="media-heading"><a href="#">It is a long <em>established fact</em> that a reader will be distracted by the readable.</a></h3>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                            </div>
                            <!-- /.Post meta -->
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <div class="element-block">
                            <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                            <!-- /.Post button -->
                            <div class="post_share">
                                <a class="smedia facebook fa fa-facebook" href="#"></a>
                                <a class="smedia twitter fa fa-twitter" href="#"></a>
                                <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                <a class="smedia linkedin fa fa-linkedin" href="#"></a>
                                <a class="smedia pinterest fa fa-pinterest-p" href="#"></a>
                            </div>
                            <!-- /.Post social share -->
                        </div>
                    </div>
                </div>
                <!-- /.End of media left post --> --}}
                <!-- /.End of Load more -->
               
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
            <aside class="col-sm-4 col-md-3 rightSidebar">
                <div class="about-card">
                    <div class="ui divider">About me</div>
                    <figure>
                        <img src="assets/img/about-avatar.jpg" class="img-responsive center-block" alt="">
                    </figure>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <img src="assets/img/signature.png" class="img-responsive center-block" alt="">
                </div>
                <!-- /.End of about -->
                <div class="social_share_btn">
                    <div class="title-holder">
                        <h3 class="title">Subscribe</h3>
                        <span class="title-shape title-shape-dark"></span>
                    </div>
                    <!--  /.End of title -->
                    <ul>
                        <li class="li-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li class="li-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li class="li-google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google +</a></li>
                        <li class="li-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i> Pinterest</a></li>
                    </ul>
                </div>
                <!-- /.End of subscribe -->
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
                                <input class="form-control" id="f_name2" type="text" placeholder="First name">
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
                <div class="latest_post_widget">
                    <div class="title-holder">
                        <h3 class="title">Latest Post</h3>
                        <span class="title-shape title-shape-dark"></span>
                    </div>
                    <!--  /.End of title -->
                    <div class="media latest_post">
                        <a class="media-left" href="">
                            <img src="assets/img/100x70-1.jpg" class="media-object" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics From Copenhagen</a></h6>
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
                            <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics From Copenhagen</a></h6>
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
                            <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics From Copenhagen</a></h6>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.latest post -->
                </div>
                <!-- /.End of latest post -->
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
            </aside>
        </div>
    </div>
    
@endsection