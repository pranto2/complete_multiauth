<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>TheSoftKing | Admin Panel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/codemirror/lib/codemirror.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/codemirror/theme/neat.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/codemirror/theme/ambiance.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/codemirror/theme/material.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/codemirror/theme/neo.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN assets/GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END assets/GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME assets/GLOBAL STYLES -->
    <link href="{{asset('assets/assets/global/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME assets/GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset('assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{asset('assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

    {{--font awesome--}}

    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
    @yield('head')
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{route('admin')}}">
                <img src="{{asset('assets/layouts/layout/img/logo.png')}}" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler"> </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-default"> 7 </span>
                    </a>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-default"> 4 </span>
                    </a>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-calendar"></i>
                        <span class="badge badge-default"> 3 </span>
                    </a>
                </li>
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="{{asset('assets/layouts/layout/img/avatar3_small.jpg')}}" />
                        <span class="username username-hide-on-mobile">Admin</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="icon-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="icon-envelope-open"></i> My Inbox
                                <span class="badge badge-danger"> 3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="icon-rocket"></i> My Tasks
                                <span class="badge badge-success"> 7 </span>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-toggle">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            <i class="icon-logout"></i>
                        </form>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper hide">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler"> </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search  sidebar-search-bordered" action="" method="">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                           <a href="javascript:;" class="btn submit">
                           <i class="icon-magnifier"></i>
                           </a>
                           </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="nav-item @if(request()->path() == 'admin/home') active open @endif ">
                    <a href="{{ url('admin/home') }}" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboad</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li class="nav-item  @if(request()->path() == 'admin/about') active open
                     @elseif(request()->path() == 'admin/advertise') active open
                     @elseif(request()->path() == 'admin/contact') active open
                     @elseif(request()->path() == 'admin/footer') active open
                     @elseif(request()->path() == 'admin/logo') active open
                     @elseif(request()->path() == 'admin/menu') active open
                     @elseif(request()->path() == 'admin/service') active open
                     @elseif(request()->path() == 'admin/social') active open
                     @elseif(request()->path() == 'admin/slide') active open
                     @elseif(request()->path() == 'admin/statistics') active open
                     @elseif(request()->path() == 'admin/testimonial') active open
                     @elseif(request()->path() == 'admin/advertisement') active open
                     @elseif(request()->path() == 'admin/show-add') active open
                     @endif ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">Features Control</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item @if(request()->path() == 'admin/about') active open @endif ">
                            <a href="{{route('about')}}" class="nav-link ">
                                <i class="fa fa-user"></i>
                                <span class="title">About Us</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/advertisement') active open
                           @elseif(request()->path() == 'admin/show') active open
                           @endif">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-buysellads" aria-hidden="true"></i>
                                <span class="title">Advertise</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu" style="display: none;">
                                <li class="nav-item  @if(request()->path() == 'admin/advertisement') active open @endif ">
                                    <a href="{{ route('advertisement')  }}" class="nav-link "> Post Add </a>
                                </li>
                                <li class="nav-item  @if(request()->path() == 'admin/show-add') active open @endif">
                                    <a href="{{ route('showadd') }}" class="nav-link "> Show Add  </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/contact') active open @endif ">
                            <a href="{{route('contact')}}" class="nav-link ">
                                <i class="fa fa-credit-card"></i>
                                <span class="title">Contact Information</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/footer') active open @endif ">
                            <a href="{{route('footer')}}" class="nav-link ">
                                <i class="fa fa-external-link-square" aria-hidden="true"></i>
                                <span class="title">Footer Control</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/logo') active open @endif ">
                            <a href="{{route('logo')}}" class="nav-link ">
                                <i class="fa fa-picture-o"></i>
                                <span class="title">Logo and Icon</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/menu') active open @endif ">
                            <a href="{{route('menu')}}" class="nav-link ">
                                <i class="fa fa-bars"></i>
                                <span class="title">Menu</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/service') active open @endif ">
                            <a href="{{route('service')}}" class="nav-link ">
                                <i class="fa fa-cogs"></i>
                                <span class="title">Service</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/social') active open @endif ">
                            <a href="{{route('social')}}" class="nav-link ">
                                <i class="fa fa-share-square"></i>
                                <span class="title">Social Accounts</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/slide') active open @endif ">
                            <a href="{{route('slide')}}" class="nav-link ">
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                <span class="title">Slide Setings</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/statistics') active open @endif ">
                            <a href="{{route('statistics')}}" class="nav-link ">
                                <i class="fa fa-area-chart"></i>
                                <span class="title">Statistics</span>
                            </a>
                        </li>
                        <li class="nav-item  @if(request()->path() == 'admin/testimonial') active open @endif ">
                            <a href="{{route('testimonial')}}" class="nav-link ">
                                <i class="fa fa-graduation-cap"></i>
                                <span class="title">Testimonial</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item
                     @if(request()->path() == 'admin/general') active open
                     @endif">
                    <a href="{{url('admin/general')}}" class="nav-link ">
                        <i class="fa fa-cog"></i>
                        <span class="title">General Settings</span>
                    </a>
                </li>
                <li class="nav-item
                     @if(request()->path() == 'admin/seo') active open
                     @endif">
                    <a href="{{url('admin/seo')}}" class="nav-link ">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                        <span class="title">SEO Settings</span>
                    </a>
                </li>
                <li class="nav-item
                     @if(request()->path() == 'admin/blog') active open
                     @elseif(request()->path() == 'admin/blog') active open
                     @elseif(request()->path() == 'admin/blog-show') active open
                     @endif">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-rss" aria-hidden="true"></i>
                        <span class="title">Blog</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item @if(request()->path() == 'admin/blog') active open @endif">
                            <a href="{{url('admin/blog')}}" class="nav-link ">
                                <i class="fa fa-envelope-o"></i>
                                <span class="title">Post Blog</span>
                            </a>
                        </li>
                        <li class="nav-item @if(request()->path() == 'admin/blog-show') active open @endif">
                            <a href="{{url('admin/blog-show')}}" class="nav-link ">
                                <i class="fa fa-commenting-o"></i>
                                <span class="title">Edit Blog</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:1365px">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{url('admin/home')}}">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Adminboard</span>
                    </li>
                </ul>
                <!-- Eikhane ja khusii likho -->
                @yield('content')
            </div>
            <!-- END PAGE BAR -->
            <!-- END PAGE HEADER-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2017 &copy; Product by THESOFTKING.</div>
</div>
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
<script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" ></script>
<script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME assets/GLOBAL SCRIPTS -->
<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME assets/GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
{{--Editor --}}
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@yield('scripts')
</body>
</html>

