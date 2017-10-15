<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BOSS is a Personal Portfolio Template">
    <meta name="keywords" content="Creative personal, resume, cv, portfolio, personal, developer, designer,personal resume, onepage, clean, modern">
    <meta name="author" content="Riaz Uddin">
    <!-- PAGE TITLE -->
    <title>BOSS &#8211; Personal Portfolio Template</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/boss/bootstrap/css/bootstrap.min.css">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/boss/fonts/font-awesome.min.css">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="assets/boss/owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/boss/owlcarousel/css/owl.theme.css">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="assets/boss/css/magnific-popup.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/boss/css/animate.min.css">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="assets/boss/css/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/boss/css/responsive.css">

    @yield('head')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- START PRELOADER AREA-->
<div class="preloader-area">
    <div class="preloader">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!-- END PRELOADER AREA -->

<!-- START HOMEPAGE DESIGN AREA -->
<header id="home" class="welcome-area">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- START LOGO DESIGN AREA -->
                    <div class="logo">
                        <a href="index.html">BOSS</a>
                    </div>
                    <!-- END LOGO DESIGN AREA -->
                </div>
                <div class="col-md-9">
                    <!-- START MENU DESIGN AREA -->
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#about">About</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#skills">service</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#work">Work</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#testimonial">testimonial</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#pricing">pricing</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#blog">Blog</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END MENU DESIGN AREA -->
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image-area">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-text text-center">
                                <p class="wow fadeInUp" data-wow-delay="0.4s">John Smith</p>
                                <h2 class="wow fadeInUp" data-wow-delay="0.8s">CREATIVE GRAPHICS DESIGNER</h2>
                                <a class="home-btn smoth-scroll wow fadeInUp" data-wow-delay="1.2s" href="#work">View work</a>
                                <a class="hire-btn smoth-scroll wow fadeInUp" data-wow-delay="1.4s" href="#contact">Hired mee</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- / END HOMEPAGE DESIGN AREA -->

@yield('content')

<!-- LATEST JQUERY -->
<script src="assets/boss/js/jquery.min.js"></script>
<!-- BOOTSTRAP JS -->
<script src="assets/boss/bootstrap/js/bootstrap.min.js"></script>
<!-- OWL CAROUSEL JS  -->
<script src="assets/boss/owlcarousel/js/owl.carousel.min.js"></script>
<!-- MIXITUP JS -->
<script src="assets/boss/js/jquery.mixitup.js"></script>
<!-- PARALLAX JS -->
<script src="assets/boss/js/jquery.stellar.min.js"></script>
<!-- PROGRESSBAR JS -->
<script src="assets/boss/js/jquery.appear.js"></script>
<!-- MAGNIFICANT JS -->
<script src="assets/boss/js/jquery.magnific-popup.min.js"></script>
<!-- YOUTUBE JS -->
<script src="assets/boss/js/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript">
    $('.player').mb_YTPlayer();
</script>
<!-- WOW JS -->
<script src="assets/boss/js/wow.min.js"></script>
<!-- CONTACT FORM JS -->
<script src="assets/boss/js/form-contact.js"></script>
<!-- SCRIPT JS -->
<script src="assets/boss/js/scripts.js"></script>

@yield('scripts')
</body>
</html>