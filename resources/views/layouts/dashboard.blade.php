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
    <link rel="apple-touch-icon" href="/assets/apple-touch-icon.png">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/scrollbar.css">
    <link rel="stylesheet" href="/assets/css/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/linearicons.css">
    <link rel="stylesheet" href="/assets/css/tipso.css">
    <link rel="stylesheet" href="/assets/css/chosen.css">
    <link rel="stylesheet" href="/assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="/assets/css/color.css">
    <link rel="stylesheet" href="/assets/css/transitions.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/dbresponsive.css">
    <script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    @yield('meta')
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
        <header id="wt-header" class="wt-header wt-headervtwo wt-haslayout">
            <div class="wt-navigationarea">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="wt-logo"><a href="index-2.html"><img src="/assets/images/logo.png" alt="company logo here"></a></strong>

                            <div class="wt-rightarea">
                                <nav id="wt-nav" class="wt-nav navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="lnr lnr-menu"></i>
                                    </button>
                                    <div class="collapse navbar-collapse wt-navigation" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="menu-item-has-children page_item_has_children">
                                                <a href="javascript:void(0);">Main</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children page_item_has_children wt-notificationicon"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
                                                        <a href="javascript:void(0);">Home</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="index-2.html">Home v1</a></li>
                                                            <li class="wt-newnoti"><a href="indexvtwo.html">Home v2<em>without login</em></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
                                                        <a href="javascript:void(0);">Article</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="articlelist.html">Article List</a></li>
                                                            <li><a href="articlegrid.html">Article Grid</a></li>
                                                            <li><a href="articlesingle.html">Article Single</a></li>
                                                            <li><a href="articleclassic.html">Article Classic</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
                                                        <a href="javascript:void(0);">Company</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="companygrid.html">Company Grid</a></li>
                                                            <li><a href="companysigle.html">Company Sigle</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="about.html">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="privacypolicy.html">Privacy Policy</a>
                                                    </li>
                                                    <li>
                                                        <a href="comingsoon.html">Coming Soon</a>
                                                    </li>
                                                    <li>
                                                        <a href="404page.html">404page</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="howitworks.html">How It Works</a>
                                            </li>
                                            <li class="menu-item-has-children page_item_has_children">
                                                <a href="javascript:void(0);">Browse Jobs</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="joblisting.html">Job Listing</a>
                                                    </li>
                                                    <li class="current-menu-item">
                                                        <a href="jobsingle.html">Job Single</a>
                                                    </li>
                                                    <li>
                                                        <a href="jobproposal.html">Job Proposal</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children page_item_has_children">
                                                <a href="javascript:void(0);">View Freelancers</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="userlisting.html">User Listing</a>
                                                    </li>
                                                    <li class="current-menu-item">
                                                        <a href="usersingle.html">User Single</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="wt-loginarea">
                                    <figure class="wt-userimg">
                                        <img src="/assets/images/user-login.png" alt="img description">
                                    </figure>
                                    <div class="wt-loginoption">
                                        <a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
                                        <div class="wt-loginformhold">
                                            <div class="wt-loginheader">
                                                <span>Login</span>
                                                <a href="javascript:;"><i class="fa fa-times"></i></a>
                                            </div>
                                            <form class="wt-formtheme wt-loginform do-login-form">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="wt-logininfo">
                                                        <a href="javascript:;" class="wt-btn do-login-button">Login</a>
                                                        <span class="wt-checkbox">
																<input id="wt-login" type="checkbox" name="rememberme">
																<label for="wt-login">Keep me logged in</label>
															</span>
                                                    </div>
                                                </fieldset>
                                                <div class="wt-loginfooterinfo">
                                                    <a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
                                                    <a href="register.html">Create account</a>
                                                </div>
                                            </form>
                                            <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control get_password" placeholder="Email">
                                                    </div>

                                                    <div class="wt-logininfo">
                                                        <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
                                                    </div>
                                                </fieldset>
                                                <div class="wt-loginfooterinfo">
                                                    <a href="javascript:void(0);" class="wt-show-login">Login</a>
                                                    <a href="register.html">Create account</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <a href="register.html" class="wt-btn">Join Now</a>
                                </div>
                                <div class="wt-userlogedin">
                                    <figure class="wt-userimg">
                                        <img src="/assets/images/user-img.jpg" alt="image description">
                                    </figure>
                                    <div class="wt-username">
                                        <h3>{{Auth()->user()->name}}</h3>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->
        <!--Main Start-->
        @yield('content')
        <!--Main End-->
    </div>
    <!--Content Wrapper End-->
</div>
<!--Wrapper End-->
<script src="/assets/js/vendor/jquery-3.3.1.js"></script>
<script src="/assets/js/vendor/jquery-library.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.sortable.js"></script>
<script src="/assets/js/chosen.jquery.js"></script>
<script src="/assets/js/tilt.jquery.js"></script>
<script src="/assets/js/scrollbar.min.js"></script>
<script src="/assets/js/prettyPhoto.js"></script>
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/readmore.js"></script>
<script src="/assets/js/countTo.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/tipso.js"></script>
<script src="/assets/js/gmap3.js"></script>
<script src="/assets/js/jRate.js"></script>
<script src="/assets/js/main.js"></script>
<script>
    const menu_icon = document.querySelector('.menu-icon');
    function addClassFunThree() {
        this.classList.toggle("click-menu-icon");
    }
    menu_icon.addEventListener('click', addClassFunThree);
</script>
@yield('scripts')
</body>

</html>
