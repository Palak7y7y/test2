@php
use App\Models\Post;
@endphp
@extends('layouts.app')

@section('header_extras')

    <title>Blog | Half Tuber</title>

@endsection

@section('content')
<div class="blog-masonry">
    <div class="height_30"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div id="blog-slide" class="owl-carousel owl-theme">
                    @foreach($slider_blogs as $slider_blog)
                    <div class="item">
                        <div class="blog-item blog-item-lg">
                            <a href="#"><figure><img src="{{asset('assets/img/'.$slider_blog->image)}}" class="img-responsive" alt=""></figure></a>
                            <div class="blog-text">
                                <div class="content-border">
                                 
                                    <div class="post-cat"><a href="#">{{$cat->name}}</a></div>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i>{{$slider_blog->date}} </span> 
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <h2 class="blog-title"><a href="#">{{$slider_blog->title}}</a></h2>
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.End of blog masonry item -->
                    </div>
                    @endforeach
                    <div class="item">
                        <div class="blog-item blog-item-lg">
                            <a href="#"><figure><img src="assets/img/masonry/750x480-2.jpg" class="img-responsive" alt=""></figure></a>
                            <div class="blog-text">
                                <div class="content-border">
                                    <div class="post-cat"><a href="#">Inspiration & Design</a></div>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span> 
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <h2 class="blog-title"><a href="#">It is a long <em>established</em> fact that a reader will be distracted by the readable content of a page</a></h2>
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.End of blog masonry item -->
                    </div>
                    <div class="item">
                        <div class="blog-item blog-item-lg">
                            <a href="#"><figure><img src="assets/img/masonry/750x480-3.jpg" class="img-responsive" alt=""></figure></a>
                            <div class="blog-text">
                                <div class="content-border">
                                    <div class="post-cat"><a href="#">Inspiration & Design</a></div>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span> 
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <h2 class="blog-title"><a href="#">It is a long <em>established</em> fact that a reader will be distracted by the readable content of a page</a></h2>
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.End of blog masonry item -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                {{-- @foreach($category2 as $category)
                @php
                $post  = Post::orderBy('id','desc')->where('type','Blog')->where('category_id',$category->id)->get()->first();
                @endphp
                <div class="blog-item blog-item-sm">
                    <a href="#"><figure><img src="{{asset('assets/img/'.$post->image)}}" class="img-responsive" alt=""></figure></a>
                    <div class="blog-text">
                        <div class="content-border">
                            <div class="post-cat"><a href="#">{{$category->name}}</a></div>
                            <h4 class="blog-title"><a href="#">{{$post->title}}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach --}}
                <!-- /.End of blog masonry item -->
                <div class="blog-item blog-item-sm">
                    <a href="#"><figure><img src="assets/img/masonry/360x227-1.jpg" class="img-responsive" alt=""></figure></a>
                    <div class="blog-text">
                        <div class="content-border">
                            <div class="post-cat"><a href="#">Fashion</a></div>
                            <h4 class="blog-title"><a href="#">Sed nec quam id libero <em>mollis cursus.</em></a></h4>
                        </div>
                    </div>
                </div>
                <div class="blog-item blog-item-sm">
                    <a href="#"><figure><img src="assets/img/masonry/360x227-1.jpg" class="img-responsive" alt=""></figure></a>
                    <div class="blog-text">
                        <div class="content-border">
                            <div class="post-cat"><a href="#">Fashion</a></div>
                            <h4 class="blog-title"><a href="#">Sed nec quam id libero <em>mollis cursus.</em></a></h4>
                        </div>
                    </div>
                </div>
                <!-- /.End of blog masonry item -->
            </div>
        </div>
    </div>
</div>
<!-- /.End oof blog masonry -->
<div class="page-content">
    <div class="container">
        <div class="row">
            <main class="col-sm-8 col-md-8 content">
                <article class="grid_post grid_post_lg text-center">
                    <figure>
                        <a href="#" class="grid_image"><img src="assets/img/825x630-1.jpg" class="img-responsive" alt=""></a>
                        <figcaption>
                            <div class="post-cat"><a href="#">Lifestyle</a></div>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                            </div>
                            <h3 class="grid_post_title"><a href="#">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content 
                                here, content here', making it look like readable English.</p>
                            <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                            <!-- /.Post button -->
                        </figcaption>
                    </figure>
                </article>
                <!-- /.End of grid post -->
                <div id="blog-grid">
                    <article class="grid_post text-center">
                        <figure>
                            <a href="#" class="grid_image"><img src="assets/img/520x400-1.jpg" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum available</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                    </article>
                    <!-- /.End of grid post -->
                    <article class="grid_post text-center">
                        <figure>
                            <a href="#" class="grid_image"><img src="assets/img/520x400-2.jpg" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum available</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                    </article>
                    <!-- /.End of grid post -->
                    <article class="grid_post text-center">
                        <figure>
                            <a href="#" class="grid_image"><img src="assets/img/520x400-3.jpg" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum available</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                    </article>
                    <!-- /.End of grid post -->
                    <article class="grid_post text-center">
                        <figure>
                            <a href="#" class="grid_image"><img src="assets/img/520x400-4.jpg" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum available</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                    </article>
                    <!-- /.End of grid post -->
                    <article class="grid_post text-center">
                        <figure>
                            <a href="#" class="grid_image"><img src="assets/img/520x400-5.jpg" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum available</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                    </article>
                    <!-- /.End of grid post -->
                    <article class="grid_post text-center">
                        <figure>
                            <a href="#" class="grid_image"><img src="assets/img/520x400-6.jpg" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum available</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                    </article>
                    <!-- /.End of grid post -->
                    <article class="grid_post text-center">
                        <figure>
                            <a href="#" class="grid_image"><img src="assets/img/520x400-7.jpg" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum available</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                    </article>
                    <!-- /.End of grid post -->
                    <article class="grid_post text-center">
                        <figure>
                            <a href="#" class="grid_image"><img src="assets/img/520x400-8.jpg" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="#">Fashion</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <h4 class="grid_post_title"><a href="#">There are <em>many variations</em> of passages of Lorem Ipsum available</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                    </article>
                    <!-- /.End of grid post -->
                </div>
                <div class="text-center">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&#8701;</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="page-numbers"><span>...</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&#8702;</a></li>
                    </ul>
                    <!-- /.End of pagination -->
                </div>
            </main>
            <aside class="col-sm-4 col-md-4 p_l_40 rightSidebar">
                <div class="about-card">
                    <div class="ui divider">About me</div>
                    <figure>
                        <img src="assets/img/about-avatar2.jpg" class="img-responsive center-block" alt="">
                    </figure>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <img src="assets/img/signature.png" class="img-responsive center-block" alt="">
                </div>
                <!-- /.End of about -->
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
                            <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics From Copenhagen</a></h6>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span> 
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
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span>
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
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span> 
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
                        <li class="li-google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google +</a></li>
                        <li class="li-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i> Pinterest</a></li>
                    </ul>
                </div>
                <!-- /.End of subscribe -->
                <div class="banner-content">
                    <img src="assets/img/ad-300x250-1.png" class="img-responsive" alt="">
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
            </aside>
        </div>
    </div>
</div>
                
@endsection