
    @extends('layouts.app')

    @section('header_extras')
    
        <title>Gallery | Half Tuber</title>
    
    @endsection
    
    
    
    @section('content')

                <div class="clearfix"></div>
                <!-- /.End of navigation -->
                <div class="parallax page_header"  data-parallax-bg-image="assets/img/header-bg-2.jpg" data-parallax-direction="left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>Portfolio</h3>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Post Formats</a></li>
                                    <li class="active">Portfolio</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.End of page header -->
                <div class="page-content">
                    <div class="container">
                        <div class="portfolio">
                            <div class="row">
                                <ul class="portfolio-sorting list-inline text-center">
                                    <li><a href="#" data-group="all" class="active">All</a></li>
                                    <li><a href="#" data-group="design">Design</a></li>
                                    <li><a href="#" data-group="coding">Coding</a></li>
                                    <li><a href="#" data-group="logo">Logo</a></li>
                                </ul> <!--end portfolio sorting -->
                                <ul class="portfolio-items list-unstyled popup-gallery" id="grid">
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["design"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-1.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-1.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Responsive Web design</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["design"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-2.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-2.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Portfolio Title</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["logo"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-3.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-3.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Portfolio Title</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["logo"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-4.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-4.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Portfolio Title</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["coding", "design"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-5.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-5.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Portfolio Title</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["coding"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-6.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-6.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Portfolio Title</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["design"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-7.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-7.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Portfolio Title</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["coding"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-8.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-8.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Portfolio Title</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["logo"]'>
                                        <figure class="portfolio-item">
                                            <a href="assets/img/portfolio/800x600-9.jpg" class="port-img">
                                                <img src="assets/img/portfolio/800x600-9.jpg" alt="" class="img-responsive">
                                                <div class="mask"></div>
                                            </a>
                                            <figcaption class="portfolio-text">
                                                <h3>Portfolio Title</h3>
                                                <p>an illustration work</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <!-- sizer -->
                                    <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>
                                </ul> <!--end portfolio grid -->
                            </div> <!--end row -->
                        </div>
                    </div>
                </div>
                
@endsection