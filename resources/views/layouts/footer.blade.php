<div class="newslatter">
    <div class="container">
        <h3>Sign Up for Our <em>Newsletter</em></h3>
        <p>Subscribe now to get notified about exclusive offers<br> from The .... every week!</p>
        <form id="subscribe" class="navbar-form"  method="post" action="{{route('newsletter.store')}}">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Your email address" form="subscribe" name="email">
                <div class="input-group-btn">
                    <button form="subscribe" class="btn btn-default" type="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /. End of news latter -->
<div class="insta-content">
    <div class="insta-link"><a href="#" rel="me" target="_blank" class="">Follow Me!</a></div>
    <div id="ri-grid" class="ri-grid ri-grid-size-2">
        <img class="ri-loading-image" src="assets/img/loading.gif" alt="" />
        <ul>
            <li><a href="#"><img src="assets/img/instagram/01.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/02.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/03.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/04.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/05.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/06.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/07.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/08.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/09.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/10.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/11.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/12.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/13.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/14.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/15.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/16.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/17.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/18.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/19.jpg" alt="" /></a></li>
            <li><a href="#"><img src="assets/img/instagram/20.jpg" alt="" /></a></li>
        </ul>
    </div>
</div>
<!-- /. End of instagram -->
</div>

<footer class="footer-black">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="footer-box">
                        <div class="footer-logo">
                            <img src="{{asset('assets/img/logo-white.png')}}" class="img-responsive" alt="">
                        </div>
                        <p>It is a long established fact that a reader<br>
                            will be distracted by the readable content of<br>
                            a page when looking at its layout. The point<br>
                            of using Lorem Ipsum</p>
                        <div class="textwidget"><p>INDIA<BR>
                                <span>98*** 00001</span><br>
                                <!--<a href="mailto:info@example.com">info@example.com</a>-->
                            </p>
                        </div>
                        <p>Contact us on <a href="mailto:info@halftuber.com"><strong>info@halftuber.com</strong></a></p> 
                    </div>
                </div>
                <div class="hidden-sm col-md-3">
                    <div class="footer-box">
                        <h3 class="widget-title title-white">Twitter</h3>
                        <ul class="twitter-widget">
                            <li>
                                <div class="icon"><i class="ti-twitter"></i></div>
                                <div class="tweet-text">
                                    So proud to have become an <a target="_blank" href="#">@envato</a> Power Elite author. Drop our #ThemeForest: <a target="_blank" href="#">https://t.co/jGyLLggygN</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="ti-twitter"></i></div>
                                <div class="tweet-text">
                                    So proud to have become an <a target="_blank" href="#">@envato</a> Power Elite author. Drop out our #ThemeForest: <a target="_blank" href="#">https://t.co/jGyLLggygN</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="footer-box">
                        <h3 class="widget-title title-white">Need help</h3>
                        <ul class="footer-cat">
                            <li><a href="#">Our Community</a></li>
                            <li><a href="#">See Our Portfolio</a></li>
                            <li><a href="#">Story About Us</a></li>
                            <li><a href="#">Keep in Touch</a></li>
                            <li><a href="#">Purchase Our Products</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5 col-md-3">
                    <div class="footer-box">
                        <h3 class="widget-title title-white">Latest Post</h3>
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
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        © 2022 BE HALF TUBER. ALL RIGHTS RESERVED.<BR>
THE CONTENT ON THIS WEBSITE IS OWNED BY US AND OUR LICENSORS. DO NOT COPY ANY CONTENT (INCLUDING IMAGES) WITHOUT OUR CONSENT.
    </div>
</footer>
<!-- /.End of footer -->