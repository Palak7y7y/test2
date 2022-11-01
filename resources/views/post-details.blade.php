@extends('layouts.app')

@section('header_extras')

<title>Post Details | Half Tuber</title>

@endsection

@section('content')
<div class="clearfix"></div>
<!-- /.End of navigation -->
<div class="parallax page_header" data-parallax-bg-image="assets/img/header-bg-3.jpg" data-parallax-direction="left">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>News</h3>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">{{$post->date}}</a></li>
                    <li class="active">{{$post->title}} </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.End of page header -->
<div class=" page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="details-body">
                    <div class="post_details stickydetails">
                        <header class="details-header">
                            <div class="post-cat"><a href="#">{{$post->date}}</a><a href="#">Politics</a></div>
                            <h2>{{$post->date}} <em>News</em> India</h2>
                            <div class="element-block">
                                <div class="entry-meta">
                                    {{-- <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time
                                            datetime="2018-01-21T19:00">Jan 21, 2018</time></span> --}}
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o"
                                                aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <div class="reading-time"><span class="eta"></span> (<span class="words"></span> words)
                                </div>
                            </div>
                        </header>
                        {{-- <figure>
                            <img src="assets/img/details-4.jpg" alt="" class="aligncenter img-responsive">
                        </figure> --}}
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>{{$post->title}} </h3>

                                <blockquote>
                                    {{$post->sub_title}}
                                </blockquote>
                                @php
                                echo html_entity_decode($post->description);
                                @endphp
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('assets/img/'.$post->image)}}" class="fluidbox_img">
                                    <img src="{{asset('assets/img/'.$post->image)}}" alt="Image" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        {{-- <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="assets/img/2.jpg" class="fluidbox_img">
                                    <img src="assets/img/2.jpg" alt="Image" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <h3>#2. WHO’S NEXT MAHARASHTRA CM,AFTER UDDHAV RESIGNS? </h3>
                                <blockquote>
                                    UDDHAV THAKREY RESIGNED AS MAHARASHTRA CM.
                                </blockquote>
                                <p>Uddhav Thackeray Resigns as Chief Minister of Maharashtra speaking minutes after the
                                    supreme court decided against his favor, In an emotional address Uddhav Thackeray
                                    said that he respects the verdict of the supreme court and that democracy must be
                                    respected. Now, the Maharashtra chief minister resigned on Wednesday evening after
                                    the supreme court ruled that he must prove tomorrow that his government still has a
                                    majority.
                                </p>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            
                            <div class="col-sm-6">
                                <h3>#3. AMARNATH YATRA BEGINS AFTER 2 YEARS </h3>
                                <blockquote>
                                    FIRST BATCH OF 4890 PILGRIMS HAS FLAGGED OFF
                                </blockquote>
                                <p>Massive security arrangements in Kashmir For the Yatris yatra has stopped in middle
                                    2019 before abrogation of article 370 essentially and after that yatra did not take
                                    place in 2020 and 21 due to COVID-19 pandemic a large number of Yatris coming across
                                    the country today is the first day of darshan thousands of devotees reaching the
                                    holy cave Jammu and Kashmir Lieutenant GovernorManoj Sinha flagged off the first
                                    batch of 4890 pilgrims from Jammu base camp Shri Amarnath Shrine Board (SASB) has
                                    also made provision of online darshan of the holy cave.
                                </p>
                            </div>
                            <div class="col-sm-6">


                                <a href="assets/img/3.jpg" class="fluidbox_img">
                                    <img src="assets/img/3.jpg" alt="Image" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">

                                <a href="assets/img/4.jpg" class="fluidbox_img">
                                    <img src="assets/img/4.jpg" alt="Image" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <h3>#4. SURESH ATTACK KERALA CM </h3>
                                <blockquote> SAPNA SURESH ASKED CM TO RELEASE CCTV FOOTAGE</blockquote>
                                <p>Sapna Suresh, accused in a case of gold smuggling, has now attacked Kerala CM Suresh
                                    asked Pinarayi Vijayan to release CCTV footage from Cliff House. She also said
                                    Kerala CM Lied in the assembly allegations of discreet meeting with UAE Consul.
                                    Kerala CM violated external affair protocols Swapna Suresh steps up attack against
                                    Kerala CM. </p>



                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            
                            <div class="col-sm-6">
                                <h3>#5. PANDEMIC NOT OVER YET,WARNS WHO. </h3>
                                <blockquote>
                                    WHO RAISED ALARM
                                </blockquote>
                                <p>Pandemic is changing but not over yet. Cases rising in 110 nations, the global
                                    caseload is also raised by 20%, the ability to track viruses is under threat, genome
                                    sequences declining and there is a fear of new Covid waves. </p>
                            </div>
                            <div class="col-sm-6">



                                <a href="assets/img/5.jpg" class="fluidbox_img">
                                    <img src="assets/img/5.jpg" alt="Image" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">

                                <a href="assets/img/6.jpg" class="fluidbox_img">
                                    <img src="assets/img/6.jpg" alt="Image" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <h3>#6. DETTOL HAS LAUNCHED MEGA SWASTH MISSION </h3>
                                <blockquote>DIARRHOEA NET-ZERO AIM
                                </blockquote>
                                <p>Diarrhoea has a major impact on malnutrition. Major programme to tackle Diarrhoea
                                    death in children who are under five years of age has been launched by dettol in
                                    Uttar Pradesh with the partnership of the government of Uttar Pradesh. Programme
                                    dettol Banega Swasth India launches Diarrhoea Net-zero aim is to prevent and treat
                                    Diarrhoea in district across Uttar Pradesh Daria is Both preventable and treatable.
                                    Diarrhoea is still a major factor in under five and infant mortality rates.
                                </p>



                            </div>
                        </div>
 --}}


                    </div>
                    <!-- /.End of post details -->
                    <div class="stickyshare">
                        <aside class="share_article">
                            <a href="#" class="boxed_icon facebook" data-share-url="http://mightymedia.nl"
                                data-share-network="facebook" data-share-text="Share this awesome link on Facebook"
                                data-share-title="Facebook Share" data-share-via="" data-share-tags=""
                                data-share-media=""><i class="fa fa-facebook"></i><span>28</span></a>
                            <a href="#" class="boxed_icon twitter" data-share-url="http://mightymedia.nl"
                                data-share-network="twitter" data-share-text="Share this awesome link on Twitter"
                                data-share-title="Twitter Share" data-share-via="" data-share-tags=""
                                data-share-media=""><i class="fa fa-twitter"></i></a>
                            <a href="#" class="boxed_icon google-plus" data-share-url="http://mightymedia.nl"
                                data-share-network="googleplus" data-share-text="Share this awesome link on Google+"
                                data-share-title="Google+ Share" data-share-via="" data-share-tags=""
                                data-share-media=""><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="boxed_icon pinterest" data-share-url="http://mightymedia.nl"
                                data-share-network="pinterest" data-share-text="Share this awesome link on Pinterest"
                                data-share-title="Pinterest Share" data-share-via="" data-share-tags=""
                                data-share-media=""><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" class="boxed_icon comment"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    x="0" y="0" width="14" height="14" viewBox="0 0 14 14"
                                    enable-background="new 0 0 14 14" xml:space="preserve">
                                    <path
                                        d="M3.6 14c0 0-0.1 0-0.1 0 -0.1-0.1-0.2-0.2-0.2-0.3v-2.7h-2.9C0.2 11 0 10.8 0 10.6V0.4C0 0.2 0.2 0 0.4 0h13.3C13.8 0 14 0.2 14 0.4v10.2c0 0.2-0.2 0.4-0.4 0.4H6.9L3.9 13.9C3.8 14 3.7 14 3.6 14zM0.7 10.2h2.9c0.2 0 0.4 0.2 0.4 0.4v2.2l2.5-2.4c0.1-0.1 0.2-0.1 0.2-0.1h6.6v-9.5H0.7V10.2z">
                                    </path>
                                </svg><span>3</span></a>
                        </aside>
                    </div>
                    <!-- /End of share icon -->
                </div>
                <!-- /.End if details body -->
                <aside class="about-author">
                    <h3>About The Author</h3>
                    <div class="author-bio">
                        <div class="author-img">
                            <a href="#"><img alt="Johnny Doe" src="assets/img/about-avatar.jpg"
                                    class="avatar img-responsive"></a>
                        </div>
                        <!-- /. Author-img -->
                        <div class="author-info">
                            <h4 class="author-name">Johnny Doe</h4>
                            <p>Johnny Doe was born in Ulm, in the Kingdom of Württemberg in the German Empire on 14
                                March 1879. His father was Hermann Einstein, a salesman and engineer. He was a really
                                good man for sure.</p>
                            <p>
                                <a class="social-link facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="social-link twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="social-link vine" href="#"><i class="fa fa-vine"></i></a>
                                <a class="social-link dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                <a class="social-link instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                        </div>
                        <!-- /. Author-info -->
                    </div>
                    <!-- /.End of author bio -->
                </aside>
                <!-- /.End of about author -->
                <div class="post_related">
                    <h3 class="related_post_title">You Might Also Like...</h3>
                    <div class="row">
                        <div class="col-sm-3">
                            <article class="post_article item_related">
                                <a class="post_img" href="#">
                                    <figure>
                                        <img class="img-responsive" src="assets/img/400x280-7.jpg" alt="">
                                    </figure>
                                </a>
                                <h4><a href="#">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac
                                        justo.</a></h4>
                            </article>
                            <!-- /.End of related post -->
                        </div>
                        <div class="col-sm-3">
                            <article class="post_article item_related">
                                <a class="post_img" href="#">
                                    <figure>
                                        <img class="img-responsive" src="assets/img/400x280-8.jpg" alt="">
                                    </figure>
                                </a>
                                <h4><a href="#">Aliquam <em><strong>gravida urna</strong></em> ut ipsum hendrerit
                                        cursus.</a></h4>
                            </article>
                            <!-- /.End of related post -->
                        </div>
                        <div class="col-sm-3">
                            <article class="post_article item_related">
                                <a class="post_img" href="#">
                                    <figure>
                                        <img class="img-responsive" src="assets/img/400x280-9.jpg" alt="">
                                    </figure>
                                </a>
                                <h4><a href="#">Aliquam eu nunc at nulla efficitur <em><strong>pellentesque a
                                                quis.</strong></em></a></h4>
                            </article>
                            <!-- /.End of related post -->
                        </div>
                        <div class="col-sm-3">
                            <article class="post_article item_related">
                                <a class="post_img" href="#">
                                    <figure>
                                        <img class="img-responsive" src="assets/img/400x280-10.jpg" alt="">
                                    </figure>
                                </a>
                                <h4><a href="#">Aliquam eu nunc at nulla efficitur <em><strong>pellentesque a
                                                quis.</strong></em></a></h4>
                            </article>
                            <!-- /.End of related post -->
                        </div>
                    </div>
                </div>
                <!-- /.End of  related post -->

                @php
                use App\Models\Comment;
                $comments = Comment::where('post_id',$post->id)->orderBy('id','desc')->get();
                @endphp

                <div class="comments">
                    <h3 class="comment_title">2 Comments</h3>
                    @foreach($comments as $comment)
                    <div class="media">
                        {{-- <div class="media-left">
                            <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                        </div> --}}
                        <div class="media-body">
                            <h4 class="media-heading">{{$comment->name}}<small>Posted on February 19, 2016</small></h4>
                            <p>{{$comment->comment}}</p>
                            <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                        </div>
                    </div>
                    @endforeach
                    <div class="media">
                        {{-- <div class="media-left">
                            <img src="assets/img/img_avatar2.png" alt="Demo Avatar Jane Doe"
                                class="media-object">
                        </div> --}}
                        <div class="media-body">
                            <h4 class="media-heading">Jane Doe <small>Posted on February 20, 2016</small></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            {{-- <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a> --}}
                        </div>
                    </div>
                    <div class="media">
                        {{-- <div class="media-left">
                            <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                        </div> --}}
                        <div class="media-body">
                            <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            {{-- <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a> --}}
                        </div>
                    </div>
                </div>
                <!-- /.End of comment -->
                <div class="comment_form">
                    <h3 class="replay_title">Leave a Reply </h3>
                    <form method="post" action="{{route('comment.store',['id' =>$post->id])}}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="comment" id="textarea" rows="5" required></textarea>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name *</label>
                            <div class="col-sm-5">
                                <input class="form-control" name="name" id="name2" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email *</label>
                            <div class="col-sm-5">
                                <input class="form-control" id="email2"  name="email" type="text" required>
                            </div>
                        </div>
                        <button type="submit" class="btn link-btn">Post Comment ⇾</button>
                    </form>
                </div>
                <!-- /.End of comment content -->
            </div>
        </div>
    </div>
</div>

@endsection