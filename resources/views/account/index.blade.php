@extends('layouts.main')
@section('title', 'Аккаунт')
@section('content')
    <!--Inner Home Banner Start-->
    <div class="wt-haslayout wt-innerbannerholder wt-innerbannerholdervtwo" style="background-image: url(@if($user->banner)'{{$user->banner->src}}'@else'/assets/images/bannerimg/img-03.jpg'@endif">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                </div>
            </div>
        </div>
    </div>
    <!--Inner Home End-->
    <!--Main Start-->
    <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
        <!-- User Profile Start-->
        <div class="wt-main-section wt-paddingtopnull wt-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                        <div class="wt-userprofileholder">
                            <span class="wt-featuredtag"><img src="/assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
                                <div class="row">
                                    <div class="wt-userprofile">
                                        <figure>
                                            <img src="{{$user->avatar->src}}" alt="avatar">
                                            @if($user->isOnline())
                                            <div class="wt-userdropdown wt-online">
                                            @endif
                                            </div>
                                        </figure>
                                        <div class="wt-title">
                                            <h3><i class="fa fa-check-circle"></i>{{$user->fio()}}</h3>
                                            <span>5.0/5 <a class="javascript:void(0);">(860 Feedback)</a> <br>Member since May 30, 2013 <br><a href="javascript:void(0);">@valentine20658</a> <a href="javascript:void(0);" class="wt-reportuser">Report User</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
                                <div class="row">
                                    <div class="wt-proposalhead wt-userdetails">
                                        <h2>{{$user->speciality}}</h2>
                                        <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                            <li><span><i class="far fa-money-bill-alt"></i> $44.00 / hr</span></li>
                                            <li><span><img src="/assets/images/flag/img-02.png" alt="img description">  United States</span></li>
                                            <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
                                        </ul>
                                        <div class="wt-description">
                                            <p>{{$user->about}}</p>
                                        </div>
                                    </div>
                                    <div id="wt-statistics" class="wt-statistics wt-profilecounter">
                                        <div class="wt-statisticcontent wt-countercolor1">
                                            <h3 data-from="0" data-to="03" data-speed="800" data-refresh-interval="03">03</h3>
                                            <h4>Ongoing <br>Projects</h4>
                                        </div>
                                        <div class="wt-statisticcontent wt-countercolor2">
                                            <h3 data-from="0" data-to="1503" data-speed="8000" data-refresh-interval="100">1503</h3>
                                            <h4>Completed <br>Projects</h4>
                                        </div>
                                        <div class="wt-statisticcontent wt-countercolor4">
                                            <h3 data-from="0" data-to="02" data-speed="800" data-refresh-interval="02">02</h3>
                                            <h4>Cancelled <br>Projects</h4>
                                        </div>
                                        <div class="wt-statisticcontent wt-countercolor3">
                                            <h3 data-from="0" data-to="25" data-speed="8000" data-refresh-interval="100">25</h3>
                                            <em>k</em>
                                            <h4>Served <br>Hours</h4>
                                        </div>
                                        <div class="wt-description">
                                            <p>* Adpsicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                            @if(Route::currentRouteName() == 'account.index')
                                                <a href="{{route('account.settings')}}" class="wt-btn">Изменить</a>
                                            @else
                                                <a href="javascript:void(0);" class="wt-btn" data-toggle="modal" data-target="#reviewermodal">Отправить предложение</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Profile End-->
            <!-- User Listing Start-->
            <div class="container">
                <div class="row">
                    <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                            <div class="wt-usersingle">
                                <div class="wt-clientfeedback">
                                    <div class="wt-usertitle wt-titlewithselect">
                                        <h2>Отзывы</h2>
                                        <div class="form-group">
                                            <span class="wt-select">
                                                <select>
                                                    <option value="Show All">Все</option>
                                                    <option value="One Page">Сначала положительные </option>
                                                    <option value="Two Page">Сначала негативные</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">
                                        <figure class="wt-userlistingimg">
                                            <img src="/assets/images/client/img-01.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Themeforest Company</a>
                                                    <h3>Translation and Proof Reading (Multi Language)</h3>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="fa fa-dollar-sign"></i> Beginner</span></li>
                                                    <li><span><img src="/assets/images/flag/img-04.png" alt="img description"> England</span></li>
                                                    <li><span><i class="fas fa-spinner fa-spin"></i> In Progress</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-userlistinghold wt-userlistingsingle">
                                        <figure class="wt-userlistingimg">
                                            <img src="/assets/images/client/img-02.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Videohive Studio</a>
                                                    <h3>Need help translating app stringlist from English to Arabic</h3>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Intermediate</span></li>
                                                    <li><span><img src="/assets/images/flag/img-03.png" alt="img description">  Canada</span></li>
                                                    <li><span><i class="far fa-calendar"></i> Jun 2017 - Jul 2017</span></li>
                                                    <li><span class="wt-stars"><span></span></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wt-description">
                                            <p>“ Eiusmod tempor incididunt ut labore et dolore magna quis nostrud exercitation ullamco laboris. ”</p>
                                        </div>
                                    </div>
                                    <div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">
                                        <figure class="wt-userlistingimg">
                                            <img src="/assets/images/client/img-03.jpg" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Photodune Professionals</a>
                                                    <h3>Blog Post Writing in English Language</h3>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                                    <li><span><img src="/assets/images/flag/img-02.png" alt="img description"> United States</span></li>
                                                    <li><span><i class="far fa-calendar"></i>  Jun 2017</span></li>
                                                    <li><span class="wt-stars"><span></span></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wt-description">
                                            <p>“ Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris. ”</p>
                                        </div>
                                    </div>
                                    <div class="wt-btnarea">
                                        <a href="javascript:void(0);" class="wt-btn">Load More</a>
                                    </div>
                                </div>
                                <div class="wt-craftedprojects">
                                    <div class="wt-usertitle">
                                        <h2>Выполненые работы</h2>
                                    </div>
                                    <div class="wt-projects">
                                        <div class="wt-project">
                                            <figure>
                                                <img src="/assets/images/projects/img-01.jpg" alt="img description">
                                            </figure>
                                            <div class="wt-projectcontent">
                                                <h3>Themeforest</h3>
                                                <a href="javascript:void(0);">www.themeforest.net</a>
                                            </div>
                                        </div>
                                        <div class="wt-project">
                                            <figure>
                                                <img src="/assets/images/projects/img-02.jpg" alt="img description">
                                            </figure>
                                            <div class="wt-projectcontent">
                                                <h3>Videohive</h3>
                                                <a href="javascript:void(0);">www.videohive.net</a>
                                            </div>
                                        </div>
                                        <div class="wt-project">
                                            <figure>
                                                <img src="/assets/images/projects/img-03.jpg" alt="img description">
                                            </figure>
                                            <div class="wt-projectcontent">
                                                <h3>Codecanyon</h3>
                                                <a href="javascript:void(0);">www.codecanyon.net</a>
                                            </div>
                                        </div>
                                        <div class="wt-project">
                                            <figure>
                                                <img src="/assets/images/projects/img-04.jpg" alt="img description">
                                            </figure>
                                            <div class="wt-projectcontent">
                                                <h3>Graphicriver</h3>
                                                <a href="javascript:void(0);">www.graphicriver.net</a>
                                            </div>
                                        </div>
                                        <div class="wt-project">
                                            <figure>
                                                <img src="/assets/images/projects/img-05.jpg" alt="img description">
                                            </figure>
                                            <div class="wt-projectcontent">
                                                <h3>Photodune</h3>
                                                <a href="javascript:void(0);">www.photodune.net</a>
                                            </div>
                                        </div>
                                        <div class="wt-project">
                                            <figure>
                                                <img src="/assets/images/projects/img-06.jpg" alt="img description">
                                            </figure>
                                            <div class="wt-projectcontent">
                                                <h3>Audiojungle</h3>
                                                <a href="javascript:void(0);">www.audiojungle.net</a>
                                            </div>
                                        </div>
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn">Load More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                            <aside id="wt-sidebar" class="wt-sidebar">
                                <div class="wt-widget">
                                    <div class="wt-widgettitle">
                                        <h2>Навыки</h2>
                                    </div>
                                    <div class="wt-widgetcontent">
                                        <div class="wt-widgettag wt-widgettagvtwo">
                                            @if($user->skills()->exists())
                                            @foreach($user->skills as $skill)
                                                <a href="javascript:void(0);">{{$skill->name}}</a>
                                            @endforeach
                                            @else
                                                <a href="javascript:void(0);">Пользователь не указал свои навыки</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="wt-widget wt-sharejob">
                                    <div class="wt-widgettitle">
                                        <h2>Поделиться профилем</h2>
                                    </div>
                                    <div class="wt-widgetcontent">
                                        <ul class="wt-socialiconssimple">
                                            <li class="wt-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i>Share on Facebook</a></li>
                                            <li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i>Share on Twitter</a></li>
                                            <li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i>Share on Linkedin</a></li>
                                            <li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i>Share on Google Plus</a></li>
                                        </ul>
                                    </div>
                                </div>
                                @if(Route::currentRouteName() != 'account.index')
                                <div class="wt-widget wt-reportjob">
                                    <div class="wt-widgettitle">
                                        <h2>Пожаловаться на пользователя</h2>
                                    </div>
                                    <div class="wt-widgetcontent">
                                        <form class="wt-formtheme wt-formreport">
                                            <fieldset>
                                                <div class="form-group">
															<span class="wt-select">
																<select>
																	<option value="reason">Select Reason</option>
																	<option value="reason1">Reason1</option>
																	<option value="reason2">Reason2</option>
																	<option value="reason3">Reason3</option>
																	<option value="reason4">Reason4</option>
																</select>
															</span>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Description"></textarea>
                                                </div>
                                                <div class="form-group wt-btnarea">
                                                    <a href="javascrip:void(0);" class="wt-btn">Submit</a>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Listing End-->
        </div>
    </main>
    <!--Main End-->
@endsection
@section('script')
    <!-- Popup Start-->
    <div class="modal fade wt-offerpopup" tabindex="-1" role="dialog" id="reviewermodal">
        <div class="modal-dialog" role="document">
            <div class="wt-modalcontent modal-content">
                <div class="wt-popuptitle">
                    <h2>Send a Project Offer</h2>
                    <a href="javascript%3bvoid(0)%3b.html" class="wt-closebtn close"><i class="fa fa-close" data-dismiss="modal" aria-label="Close"></i></a>
                </div>
                <div class="modal-body">
                    <div class="wt-projectdropdown-hold">
                        <div class="wt-projectdropdown">
                            <div class="wt-projectselect">
                                <figure><img src="images/thumbnail/img-07.jpg" alt="img description"></figure>
                                <div class="wt-projectselect-content">
                                    <h3>Project Title Here</h3>
                                    <span><i class="lnr lnr-calendar-full"></i> Project Deadline: May 27, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="wt-projectdropdown-option">
                            <div class="wt-projectselect">
                                <figure><img src="images/thumbnail/img-07.jpg" alt="img description"></figure>
                                <div class="wt-projectselect-content">
                                    <h3>Project Title Here</h3>
                                    <span><i class="lnr lnr-calendar-full"></i> Project Deadline: May 27, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="wt-formtheme wt-formpopup">
                        <fieldset>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Add Description*"></textarea>
                            </div>
                            <div class="form-group wt-btnarea">
                                <a href="javascript:void(0);" class="wt-btn">Send offer</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup End-->
@endsection
