@php
use App\Models\Category;
use App\Models\Post;
@endphp
<body>
<div class="main-content animsition">
    <div class="top-header dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7">
                    <div class="header-nav">
                        <ul>
                            <!--<li><span class="headre-weather"><i class="fa fa-calendar-check-o"></i>&nbsp; Thursday, June 30</span></li>-->
                            <!--<li><a href="contact.html">Contact</a></li>-->
                            <!--<li><a href="about-me.html">about</a></li>-->
                            <!--<li><a href="#">Buy now!</a></li>-->
                        </ul>
                    </div>
                </div> 
                <div class="col-sm-6 col-md-5">
                    <ul class="top-socia-share">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </li>
                        @if(session('admin') || session('user'))
                        <li>
                            <a href="{{route('logout')}}">Logout</a>
                        </li>
                        @else
                        <li>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal">Login / Register</a>
                        </li>
                        @endif
                        
                        <li>
                            <!--<div class="weather-top">-->
                            <!--    <i class="fa fa-cloud"></i>-->
                            <!--    <div class="weather-now">-->
                            <!--        <span class="degrees">- 5.9</span>-->
                            <!--        <span class="unit">C</span>-->
                            <!--    </div>-->
                            <!--    <div class="weather-city">New York</div>-->
                            <!--</div>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End of top header -->
    <nav class="navbar navbar-inverse navbar-sticky navbar-mobile bootsnav">
        <div class="container">
            <div class="attr-nav">
                <ul>
                    @if(session('admin') || session('user'))
                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i></a></li>
                    @else
                    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal"><i class="fa fa-user"></i></a></li>
                    @endif
                    
                    {{-- <li class="side-menu"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li> --}}
                    <li id="btn-search1"><a href="javascript:void(0)" id="btn-search2"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('assets/img/logo-white.png')}}" class="logo" alt="logo"></a>
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="navFadeInDown" data-out="navFadeOutUp">
                    <li><a href="{{route('index')}}">Home</a></li>
                    {{-- <li><a href="{{route('all-category')}}">All Category</a></li> --}}
                    <li><a href="{{route('all-post')}}">News</a></li>
                    @if(!session('admin'))
                    {{-- <li><a href="{{route('post-details')}}">Post Details</a></li> --}}
                    <li><a href="{{route('gallery')}}">Gallery</a></li>  
                    @endif
                    <li class="dropdown megamenu-fw megamenu-nav-tabs">
                        <a href="#" class="dropdown-toggle">Current Affair</a>
                        <ul class="dropdown-menu megamenu-content animated navFadeOutUp" style="display: none; opacity: 1;">
                            <li>
                                <div class="block-mega-menu">
                                    <div class="mega-cat-menu">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs menu-tabs">
                                            @php
                                                $categories = Category::all();
                                            @endphp
                                            @foreach($categories as $index => $category)
                                            <li class="{{ $loop->first ? 'active' : '' }}"><a href="#cat{{$category->id}}" data-toggle="tab">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="mega-cat-article">
                                        <!-- Tab panes -->
                                        <div class="tab-content menu-tab-content">
                                            @foreach($categories as $category)
                                            <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="cat{{$category->id}}">
                                                @php
                                                $newses  = Post::where('type','News')->where('category_id',$category->id)->orderBy('id','desc')->get()->take(4);
                                                @endphp
                                                <div class="row">
                                                    @foreach($newses as $news)
                                                    <div class="col-sm-3">
                                                        <article class="post_article">
                                                            @php
                                                            $title = str_replace(' ','-',strtolower($news->title))
                                                            @endphp
                                                            <form method="post" action={{route('post.detail',['title' => $title])}}>
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$news->id}}">
                                                                <figure><input type="image" src="{{asset('assets/img/'.$news->image)}}" alt="Submit" class="img-responsive">
                                                                </form>
                                                            <h4>{{$news->title}}</h4>
                                                        </article>
                                                    </div>
                                                    @endforeach
                                                    {{-- <div class="col-sm-3">
                                                        <article class="post_article">
                                                            <a class="post_img" href="#"><figure><img class="img-responsive" src="{{asset('assets/img/400x280-2.jpg')}}" alt=""></figure></a>
                                                            <h4><a href="#">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                        </article>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <article class="post_article">
                                                            <a class="post_img" href="#"><figure><img class="img-responsive" src="{{asset('assets/img/400x280-3.jpg')}}" alt=""></figure></a>
                                                            <h4><a href="#">Aliquam eu nunc at nulla efficitur <em>pellentesque .</em></a></h4>
                                                        </article>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <article class="post_article">
                                                            <a class="post_img" href="#"><figure><img class="img-responsive" src="{{asset('assets/img/400x280-4.jpg')}}" alt=""></figure></a>
                                                            <h4><a href="#">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                        </article>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    @if(session('admin'))
                    <li><a href="{{route('post.show')}}">Manage Post</a></li>
                    <li><a href="{{route('category.create')}}">Manage Category</a></li>
                    @else
                    <li><a href="{{route('about')}}">About</a></li>
                    @endif
                    
                    {{-- <li><a href="{{route('contact')}}">Contact Us</a></li> --}}
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>   
        {{-- <div class="side" id="side">
            <a href="#" class="close-side"><i class="ti-close"></i></a>
            <div class="widget">
                <h3 class="widget-title">Custom Pages</h3>
                <ul class="link">
                    <li><a href="about-me.html">About</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="latest_post_widget">
                <h3 class="widget-title">Latest Post</h3>
                <div class="media latest_post">
                    <a class="media-left" href="">
                        <img src="{{asset('assets/img/100x70-1.jpg')}}" class="media-object" alt="">
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
                        <img src="{{asset('assets/img/100x70-2.jpg')}}" class="media-object" alt="">
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
                        <img src="{{asset('assets/img/100x70-3.jpg')}}" class="media-object" alt="">
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
                <h3 class="widget-title">Subscribe</h3>
                <ul>
                    <li class="li-facebook"><a href="https://www.facebook.com/Half-Tuber-100304942749345" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                    <li class="li-twitter"><a href="http://twitter.com/halftuber_" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                    <li class="li-instagram"><a href="http://instagram.com/halftuber_" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                    <li class="li-linkedin"><a href="https://www.linkedin.com/company/half-tuber/" target="_blank"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                </ul>
            </div>
            <!-- /.End of subscribe -->
        </div>
        <!-- /. End of side menu -->
        <div class="side-overlay"></div> --}}
    </nav>
    <div class="clearfix"></div>
    <!-- /.End of navigation -->
    <div class="search">
        <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"> <i class="ti-close"></i></button>
        <form class="search__form" action="javascript:void(0)" method="post">
            <input class="search__input" name="search" type="search" placeholder="Search and hit enter..."/>
            <span class="search__info">Hit enter to search or ESC to close</span>
        </form>
        <div class="search__related">
            <div class="search__suggestion">
                <h3>May We Suggest?</h3>
                <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
            </div>
            <div class="search__suggestion">
                <h3>Is It This?</h3>
                <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
            </div>
            <div class="search__suggestion">
                <h3>Needle, Where Art Thou?</h3>
                <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
            </div>
        </div>
    </div>
    <!-- /.End of search full page  -->
    <!--<div class="height_40"></div>-->
        <!-- /.End of logo section -->
        <div class="container">
            <div class="newstricker_inner">
                <div class="trending"><strong>Trending</strong> Now</div>
                @php
                $posts  = Post::orderBy('id','desc')->get()->take(3);
                @endphp
                <div id="newsTicker" class="owl-carousel owl-theme">
                    @foreach($posts as $post)
                    @php
                    $title = str_replace(' ','-',strtolower($post->title))
                    @endphp
                    <form method="post" action={{route('post.detail',['title' => $title])}}>
                        @csrf
                        <input type="hidden" name="id" value="{{$post->id}}">
                        <div class="item">
                            <button class="button-text" type="submit">{{$post->title}}</button>
                        </div>
                    </form>
                    @endforeach
                    {{-- <div class="item">
                        <a href="#">It is a long established fact that a reader will be distracted by the readable.</a>
                    </div>
                    <div class="item">
                        <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!--  /. End of newstricker -->

        <!-- /.End of main content -->
<div class="modal fade user-modal" id="user-modal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab">Log in</a></li>
                    <li><a href="#register" data-toggle="tab">Register</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="login">
                        <div class="form-content text-center">
                            <h2>Sign In</h2>
                            {{-- <p>Chose One of the Following Methods.</p>
                            <div class="social-btn">
                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i>With Facebook</a>
                                <a href="#" class="btn btn-plush"><i class="fa fa-google-plus"></i>With Google +</a>
                            </div>
                            <div class="ui horizontal divider">Or </div> --}}
                            <p>Sign in Using Your Email Address</p>
                            <form method="post" action="{{route('user.login')}}">
                                @csrf
                            <div class="form-group">
                                <input class="form-control" name="email" id="f_name2" placeholder="Username or email" type="text" Required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" id="pass" placeholder="Password" type="password" Required>
                            </div> 
                            {{-- <div class="block-content">

                                <div class="checkbox checkbox-danger">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="forgot">Forgot Password?</a>
                            </div> --}}
                            <button type="submit" class="btn link-btn btn-block btn-rounded">Login &#8702;</button>
                        </form>
                            <div class="">Don't have an account? <a href="#register" data-toggle="tab">Sign up Now</a></div>
                       
                        </div>
                        <!-- /.End of Login -->
                    </div>
                    <div class="tab-pane fade" id="register">
                        <div class="form-content">
                            <h2 class="text-center">Sign Up For Free</h2>
                            <form method="post" action="{{route('user.register')}}">
                                @csrf
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" placeholder="Your Email Address" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="phone" id="c_name" placeholder="Your Number" type="number" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" id="pass2" placeholder="Enter Your Password" type="password" required>
                            </div>
                            {{-- <div class="form-group">
                                <input class="form-control" name="r_pass" id="r_pass" placeholder="Retype Your Password" type="text">
                            </div>
                            <div class="block-content">
                                <div><i class="fa fa-shield"></i><span>Your Password at Global Crypto are encrypted and Secured</span></div>
                            </div> --}}
                            <button type="submit" class="btn link-btn btn-block btn-rounded">Sign Up &#8702;</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.End of Sign up  Sing in -->
