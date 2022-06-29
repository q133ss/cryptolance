<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/scrollbar.css">
    <link rel="stylesheet" href="/assets/css/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/linearicons.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/tipso.css">
    <link rel="stylesheet" href="/assets/css/chosen.css">
    <link rel="stylesheet" href="/assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/color.css">
    <link rel="stylesheet" href="/assets/css/transitions.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="wt-login">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Preloader Start -->
<div class="preloader-outer">
    <div class="loader"></div>
</div>
<!-- Preloader End -->
<!-- Wrapper Start -->
<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
    <!-- Content Wrapper Start -->
    <div class="wt-contentwrapper">
        <!-- Header Start -->
        <header id="wt-header" class="wt-header wt-haslayout">
            <div class="wt-navigationarea">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="wt-logo"><a href="/"><img src="/assets/images/logo.png" alt="company logo here"></a></strong>
                            <div class="wt-rightarea">
                                <nav id="wt-nav" class="wt-nav navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="lnr lnr-menu"></i>
                                    </button>
                                    <div class="collapse navbar-collapse wt-navigation" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a href="/">Главная</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('how.it.works')}}">Как это работает?</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('projects.index')}}">Проекты</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                @if(Auth()->check())
                                    <div class="wt-userlogedin">
                                    <figure class="wt-userimg">
                                        <img src="/assets/images/user-img.jpg" alt="image description">
                                    </figure>
                                    <div class="wt-username">
                                        <h3>Louanne Mattioli</h3>
                                        <span>Amento Tech</span>
                                    </div>
                                    <nav class="wt-usernav">
                                        <ul>
                                            <li class="menu-item-has-children page_item_has_children">
                                                <a href="javascript:void(0);">
                                                    <span>Insights</span>
                                                </a>
                                                <ul class="sub-menu children">
                                                    <li><a href="dashboard-insights.html">Insights</a></li>
                                                    <li><a href="dashboard-insightsuser.html">Insights User</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="dashboard-profile.html">
                                                    <span>My Profile</span>
                                                </a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">
                                                    <span>All Jobs</span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="dashboard-completejobs.html">Completed Jobs</a></li>
                                                    <li><a href="dashboard-canceljobs.html">Cancelled Jobs</a></li>
                                                    <li><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
                                                    <li><a href="dashboard-ongoingsingle.html">Ongoing Single</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="dashboard-managejobs.html">
                                                    <span>Manage Jobs</span>
                                                </a>
                                            </li>
                                            <li class="wt-notificationicon menu-item-has-children">
                                                <a href="javascript:void(0);">
                                                    <span>Messages</span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="dashboard-messages.html">Messages</a></li>
                                                    <li><a href="dashboard-messages2.html">Messages V 2</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="dashboard-saveitems.html">
                                                    <span>My Saved Items</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-invocies.html">
                                                    <span>Invoices</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-category.html">
                                                    <span>Category</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-packages.html">
                                                    <span>Packages</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-proposals.html">
                                                    <span>Proposals</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-accountsettings.html">
                                                    <span>Account Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dashboard-helpsupport.html">
                                                    <span>Help &amp; Support</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                @else
                                    <div class="wt-loginarea" style="display:block">
                                        <figure class="wt-userimg">
                                            <img src="/assets/images/user-login.png" alt="img description">
                                        </figure>
                                        <div class="wt-loginoption">
                                            <a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Войти</a>
                                            <div class="wt-loginformhold">
                                                <div class="wt-loginheader">
                                                    <span>Войти</span>
                                                    <a href="javascript:;"><i class="fa fa-times"></i></a>
                                                </div>
                                                <form class="wt-formtheme wt-loginform do-login-form">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <input type="text" name="username" class="form-control" placeholder="Логин">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" class="form-control" placeholder="Пароль">
                                                        </div>
                                                        <div class="wt-logininfo">
                                                            <a href="javascript:;" class="wt-btn do-login-button">Войти</a>
                                                            <span class="wt-checkbox">
																<input id="wt-login" type="checkbox" name="rememberme">
																<label for="wt-login">Запомнить меня</label>
															</span>
                                                        </div>
                                                    </fieldset>
                                                    <div class="wt-loginfooterinfo">
                                                        <a href="javascript:;" class="wt-forgot-password">Забыли пароль?</a>
                                                        <a href="register.html">Создать аккаунт</a>
                                                    </div>
                                                </form>
                                                <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control get_password" placeholder="Email">
                                                        </div>

                                                        <div class="wt-logininfo">
                                                            <a href="javascript:;" class="wt-btn do-get-password">Получить пароль</a>
                                                        </div>
                                                    </fieldset>
                                                    <div class="wt-loginfooterinfo">
                                                        <a href="javascript:void(0);" class="wt-show-login">Войти</a>
                                                        <a href="register.html">Создать аккаунт</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <a href="register.html" class="wt-btn">Присоедениться</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->
        @yield('content')
        <!--Footer Start-->
        <footer id="wt-footer" class="wt-footer wt-haslayout">
            <div class="wt-footerholder wt-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="wt-footerlogohold">
                                <strong class="wt-logo"><a href="index-2.html"><img src="/assets/images/flogo.png" alt="company logo here"></a></strong>
                                <div class="wt-description">
                                    <p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce <a href="javascript:void(0);">more...</a></p>
                                </div>
                                <ul class="wt-socialiconssimple wt-socialiconfooter">
                                    <li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                    <li class="wt-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
                                    <li class="wt-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                    <li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="wt-footercol wt-widgetcompany">
                                <div class="wt-fwidgettitle">
                                    <h3>Company</h3>
                                </div>
                                <ul class="wt-fwidgetcontent">
                                    <li><a href="javascript:void(0);">About Us</a></li>
                                    <li><a href="javascript:void(0);">How It Works</a></li>
                                    <li><a href="javascript:void(0);">Careers</a></li>
                                    <li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
                                    <li><a href="javascript:void(0);">Trust &amp; Safety</a></li>
                                    <li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="wt-footercol wt-widgetexplore">
                                <div class="wt-fwidgettitle">
                                    <h3>Explore More</h3>
                                </div>
                                <ul class="wt-fwidgetcontent">
                                    <li><a href="javascript:void(0);">Freelancers in USA</a></li>
                                    <li><a href="javascript:void(0);">Freelancers in Canada</a></li>
                                    <li><a href="javascript:void(0);">Freelancers in Australia</a></li>
                                    <li><a href="javascript:void(0);">Jobs in USA</a></li>
                                    <li><a href="javascript:void(0);">Find Jobs</a></li>
                                    <li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wt-haslayout wt-joininfo">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                            <div class="wt-companyinfo">
                                <span><a href="javascript:void(0);">New @ Worktern?</a> Dotem eiusmod tempor incune utnaem labore etdolore.</span>
                            </div>
                            <div class="wt-fbtnarea">
                                <a href="javascript:void(0)" class="wt-btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wt-haslayout wt-footerbottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p class="wt-copyrights"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                            <nav class="wt-addnav">
                                <ul>
                                    <li><a href="javascript:void(0);">News</a></li>
                                    <li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
                                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0);">Career</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->
    </div>
    <!--Content Wrapper End-->
</div>
<!--Wrapper End-->
<script src="/assets/js/vendor/jquery-3.3.1.js"></script>
<script src="/assets/js/vendor/jquery-library.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/chosen.jquery.js"></script>
<script src="/assets/js/scrollbar.min.js"></script>
<script src="/assets/js/tilt.jquery.js"></script>
<script src="/assets/js/prettyPhoto.js"></script>
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/readmore.js"></script>
<script src="/assets/js/countTo.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/tipso.js"></script>
<script src="/assets/js/jRate.js"></script>
<script src="/assets/js/main.js"></script>
</body>

</html>
