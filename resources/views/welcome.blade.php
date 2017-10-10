<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Practice Muti-Auth</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="assets/css/stylish-portfolio.css" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
    <i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    @if (Route::has('login'))
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
            <i class="fa fa-times"></i>
        </a>
        @auth
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="#top">Menu</a>
        </li>
            @else
        <li>
            <a class="js-scroll-trigger" href="{{ url('/home') }}">Home</a>
        </li>
        <li>
            <a class="js-scroll-trigger" href="{{ route('login') }}">Login</a>
        </li>
            <li>
            <a class="js-scroll-trigger" href="{{ route('register') }}">Register</a>
        </li>
                @endauth
    </ul>
    @endif
</nav>

<!-- Header -->
<header class="header" id="top">
    <div class="text-vertical-center">
        <h1>Practice Muti-Auth</h1>
        <h3>Jamela Ses &amp; Multi-Auth System</h3>
        <br>
    </div>
</header>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <h4>
                    <strong>Start Pranto</strong>
                </h4>
                <p>*60 House, Road-80
                    <br>Uttora-11, DHAKA 1215</p>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        (+88) 01624-932425</li>
                    <li>
                        <i class="fa fa-envelope-o fa-fw"></i>
                        <a href="mailto:www.prantoroy.com@gmail.com">www.prantoroy.com@gmail.com</a>
                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-facebook fa-fw fa-3x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-twitter fa-fw fa-3x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-dribbble fa-fw fa-3x"></i>
                        </a>
                    </li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy; THEKINGSOFT Website 2017</p>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
    </a>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="assets/js/stylish-portfolio.js"></script>

</body>

</html>
