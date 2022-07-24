@extends('layouts.main')

@section('title')
    {{$project->title}}
@endsection

@section('content')
    <!--Inner Home Banner Start-->
    <div class="wt-haslayout wt-innerbannerholder">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title"><h2>Проект</h2></div>
                        <ol class="wt-breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li><a href="{{route('projects.index')}}">Проекты</a></li>
                            <li class="wt-active">Проект</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Inner Home End-->
    <!--Main Start-->
    <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
        <div class="wt-haslayout wt-main-section">
            <!-- User Listing Start-->
            <div class="container">
                <div class="row">
                    <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                            <div class="wt-proposalholder">
                                <span class="wt-featuredtag"><img src="/assets/images/featured.png" alt="img description" data-tipso="профиль PLUS" class="template-content tipso_style"></span>
                                <div class="wt-proposalhead">
                                    <h2>{{$project->title}}</h2>
                                    <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                        <li><span><i class="fa fa-dollar-sign"></i> {{$project->price}}</span></li>
{{--                                        <li><span><img src="/assets/images/flag/img-02.png" alt="img description">  United States</span></li>--}}
                                        <li><span><i class="far fa-folder"></i> Тип оплаты: {{$project->type->name}}</span></li>
                                        <li><span><i class="far fa-clock"></i> Срок: {{$project->time->name}}</span></li>
                                    </ul>
                                </div>
                                <div class="wt-btnarea"><a href="javascrip:void(0);" class="wt-btn">Откликнуться</a></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                            <div class="wt-projectdetail-holder">
                                <div class="wt-projectdetail">
                                    <div class="wt-title">
                                        <h3>Описание</h3>
                                    </div>
                                    <div class="wt-description">
                                        {!! $project->content !!}
                                    </div>
                                </div>
                                <div class="wt-skillsrequired">
                                    <div class="wt-title">
                                        <h3>Теги</h3>
                                    </div>
                                    <div class="wt-tag wt-widgettag">
                                        @foreach($project->tags as $tag)
                                        <a href="javascript:void(0);">{{$tag->name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="wt-attachments">
                                    <div class="wt-title">
                                        <h3>Вложения</h3>
                                    </div>
                                    <ul class="wt-attachfile">
                                        <li>
                                            <span>Wireframe Document.doc</span>
                                            <em>File size: 512 kb<a href="javascript:void(0);"><i class="lnr lnr-download"></i></a></em>
                                        </li>
                                        <li>
                                            <span>Requirments.pdf</span>
                                            <em>File size: 110 kb<a href="javascript:void(0);"><i class="lnr lnr-download"></i></a></em>
                                        </li>
                                        <li>
                                            <span>Company Intro.docx</span>
                                            <em>File size: 224 kb<a href="javascript:void(0);"><i class="lnr lnr-download"></i></a></em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                            <aside id="wt-sidebar" class="wt-sidebar">
                                <div class="wt-proposalsr">
                                    <div class="wt-proposalsrcontent">
                                        <span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-newspaper"></i></span>
                                        <div class="wt-title">
                                            <h3>150</h3>
                                            <span>Откликов</span>
                                        </div>
                                    </div>
                                    <div class="tg-authorcodescan">
                                        <figure class="tg-qrcodeimg">
                                            <img src="/assets/images/qrcode.png" alt="img description">
                                        </figure>
                                        <div class="tg-qrcodedetail">
                                            <span class="lnr lnr-laptop-phone"></span>
                                            <div class="tg-qrcodefeat">
                                                <h3>Scan with your <span>Smart Phone </span> To Get It Handy.</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-clicksavearea">
{{--                                        <span>Job ID: tQu5DW9F2G</span>--}}
                                        <a href="javascrip:void(0);" class="wt-clicksavebtn"><i class="far fa-heart"></i> Сохранить</a>
                                    </div>
                                </div>
                                <div class="wt-widget wt-companysinfo-jobsingle">
                                    <div class="wt-companysdetails">
                                        <figure class="wt-companysimg">
                                            <img src="/assets/images/company/img-01.jpg" alt="img description">
                                        </figure>
                                        <div class="wt-companysinfo">
                                            <figure><img src="/assets/images/company/img-01.png" alt="img description"></figure>
                                            <div class="wt-title">
                                                <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> участник PLUS </a>
                                                <h2>{{$project->user->name}}</h2>
                                            </div>
                                            <ul class="wt-postarticlemeta">
{{--                                                <li>--}}
{{--                                                    <a href="javascript:void(0);">--}}
{{--                                                        <span>Open Jobs</span>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <span>Смотреть профиль</span>
                                                    </a>
                                                </li>
{{--                                                <li class="wt-following">--}}
{{--                                                    <a href="javascript:void(0);">--}}
{{--                                                        <span>Following</span>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wt-widget wt-sharejob">
                                    <div class="wt-widgettitle">
                                        <h2>Поделиться проектом</h2>
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
                                <div class="wt-widget wt-reportjob">
                                    <div class="wt-widgettitle">
                                        <h2>Пожаловаться на проект</h2>
                                    </div>
                                    <div class="wt-widgetcontent">
                                        <form class="wt-formtheme wt-formreport">
                                            <fieldset>
                                                <div class="form-group">
															<span class="wt-select">
																<select>
																	<option value="Reason">Выберите причину</option>
																	<option value="Reason1">Reason 1</option>
																	<option value="Reason2">Reason 2</option>
																</select>
															</span>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Description"></textarea>
                                                </div>
                                                <div class="form-group wt-btnarea">
                                                    <a href="javascrip:void(0);" class="wt-btn">Отправить</a>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
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
