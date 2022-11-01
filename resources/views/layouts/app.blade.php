<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      
        <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/animsition.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/themify-icons/themify-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootsnav.css')}}" rel="stylesheet">
        <link href="{{asset('assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('assets/owl-carousel/owl.theme.css')}}" rel="stylesheet">
        <link href="{{asset('assets/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/fluidbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  
        @yield('header_extras')
    </head>
        
        @include('layouts.header')
        @include('layouts.flash')
        @yield('content')
        @include('layouts.footer')
        </div>
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('assets/js/jquery.min.js')}}" defer></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}" defer></script>
        <script src="{{asset('assets/js/animsition.min.js')}}" defer></script>
        <script src="{{asset('assets/js/bootsnav.js')}}" defer></script>
        <script src="{{asset('assets/js/macy.js')}}" defer></script>
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}" defer></script>
        <script src="{{asset('assets/js/ResizeSensor.min.js')}}" defer></script>
        <script src="{{asset('assets/js/theia-sticky-sidebar.min.js')}}" defer></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}" defer></script>
        <script src="{{asset('assets/owl-carousel/owl.carousel.min.js')}}" defer></script>
        <script src="{{asset('assets/js/modernizr.custom.js')}}" defer></script>
        <script src="{{asset('assets/js/jquery.gridrotator.min.js')}}" defer></script>
        <script src="{{asset('assets/js/parallax-background.min.js')}}" defer></script>
        <script src="{{asset('assets/js/jquery.simpleSocialShare.min.js')}}" defer></script>
        <script src="{{asset('assets/js/jquery.fluidbox.min.js')}}" defer></script>
        <script src="{{asset('assets/js/retina.min.js')}}" defer></script>
        <script src="{{asset('assets/js/jquery.shuffle.min.js')}}" defer></script>
        <script src="{{asset('assets/js/readingTime.min.js')}}" defer></script>
        <script src="{{asset('assets/js/custom.js')}}" defer></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcMXKkIZSG1Ev3nNkDE5vZpfT_KG9zBT8" defer async></script>
        @yield('footer_extras')
    </body>
</html>