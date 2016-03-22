<!DOCTYPE html><html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Davide Crenna, chitarrista classico acustico ed elettrico">
    <meta name="keywords" content="davide, crenna, chitarrista, guitarist, chitarra">
    <meta name="author" content="Davide Crenna">

    <title>Davide Crenna - Guitarist</title>

    <!-- STYLESHEET -->
    <link href='http://fonts.googleapis.com/css?family=Revalia%7cDroid+Sans%7cLato' rel='stylesheet' type='text/css'><!-- Google Fonts -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap -->
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen"><!-- Font Awesome -->
    <link href="css/magnific-popup.css" rel="stylesheet"><!-- Magnific Popup -->
    <link href="style.css" rel="stylesheet"><!-- Theme Style -->

    <!-- Unite Gallery Style -->
    <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />

    <!-- FAVICON -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png" >

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target="#main-nav">
    @include('partials.header')
    @yield('content')

    <!-- FOOTER -->
    <footer class="main-footer navbar-fixed-bottom">
        <div class="container">
            <ul class="list-inline fa-ul archive">
                <li><i class="fa-li fa fa-save"></i><a href="download/CV_Crenna_online.pdf"
                                                       download="CV Davide Crenna.pdf">Download CV as PDF</a></li>
                <li><i class="fa-li fa fa-print"></i><a href="download/CV_Crenna_online.pdf" media="print">Print CV</a></li>
            </ul>

            <span class="copyright">All Rights Reserved &copy; {{ date('Y') }}.</span>
        </div>
    </footer>
    <!-- FOOTER -->

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="pre-wrap">
            <div class="cssload-loader">
                <div class="cssload-square cssload-square--main">
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                    <div class="cssload-square cssload-square--mini"></div>
                </div>
            </div>
            {{--<div id="inTurnFadingTextG"><div id="inTurnFadingTextG_1" class="inTurnFadingTextG">C</div><div id="inTurnFadingTextG_2" class="inTurnFadingTextG">a</div><div id="inTurnFadingTextG_3" class="inTurnFadingTextG">r</div><div id="inTurnFadingTextG_4" class="inTurnFadingTextG">i</div><div id="inTurnFadingTextG_5" class="inTurnFadingTextG">c</div><div id="inTurnFadingTextG_6" class="inTurnFadingTextG">a</div><div id="inTurnFadingTextG_7" class="inTurnFadingTextG">m</div><div id="inTurnFadingTextG_8" class="inTurnFadingTextG">e</div><div id="inTurnFadingTextG_9" class="inTurnFadingTextG">n</div><div id="inTurnFadingTextG_10" class="inTurnFadingTextG">t</div><div id="inTurnFadingTextG_11" class="inTurnFadingTextG">o</div></div>--}}
        </div>
        {{--<div class="pre-wrap">
            <span class="square square-1"></span>
            <span class="square square-2"></span>
            <span class="square square-3"></span>
            <span class="square square-4"></span>
        </div>--}}
    </div>
    <!-- PRELOADER END -->

    <!-- JAVASCRIPT -->
    <script src="js/jquery-1.11.2.min.js"></script><!-- jQuery -->
    <script src="js/bootstrap.min.js"></script><!-- Bootstrap Js -->
    <script src="js/jquery.scrollTo.min.js"></script><!-- Scrollto -->
    <script src="js/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
    <script src="js/jquery.easypiechart.min.js"></script><!-- Easypiechart -->
    <script src="js/jquery.shuffle.modernizr.min.js"></script><!-- Shuffle -->
    <script src="js/jquery.fitvids.js"></script><!-- Fitvids -->
    <script src="js/twitterFetcher_min.js"></script><!-- Twitter Fetcher -->
    <script src="js/custom.js"></script><!-- Custom -->

    <!-- UNITE GALLERY -->
    <script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
    <script type='text/javascript' src='unitegallery/themes/tiles/ug-theme-tiles.js'></script>
    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#photogallery").unitegallery({
                        tile_enable_textpanel:true,
                        tile_textpanel_title_text_align: "center",
            });

        });

    </script>
    <!-- CONTACT FORM -->
    <script src="js/parsley.min.js"></script><!-- Parsley -->
    <script src="js/contact.js"></script><!-- Contact -->

    <!-- GOOGLE MAPS -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDeGleLZkqivLxSDTRZJE-tSu-rgGHb3pc"></script><!-- Google Map API -->
    <script src="js/gmaps.js"></script><!-- Gmaps -->
    <script src="js/map.js"></script><!-- Init Map -->

</body></html>