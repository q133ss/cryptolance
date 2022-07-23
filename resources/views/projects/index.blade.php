@extends('layouts.main')
@section('title', 'Проекты')
@section('content')
    <!--Inner Home Banner Start-->
    <div class="wt-haslayout wt-innerbannerholder">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title"><h2>Проекты</h2></div>
                        <ol class="wt-breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="wt-active">Проекты</li>
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
            <div class="wt-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                                <aside id="wt-sidebar" class="wt-sidebar">
                                    <form action="{{route('projects.index')}}" method="GET" id="filter_form">
                                        @csrf
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>Категории</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <div class="wt-checkboxholder wt-verticalscrollbar">
                                                @foreach($categories as $category)
                                                <span class="wt-checkbox">
                                                    <input id="{{$category->name}}" type="checkbox" name="category[]" @if(!empty(Request()->category) && in_array($category->id, Request()->category)) checked @endif value="{{$category->id}}">
                                                    <label for="{{$category->name}}">{{$category->name}}</label>
                                                </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>Тип оплаты</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <div class="wt-checkboxholder">
                                                <span class="wt-radio">
                                                    <input id="zero" type="radio" @if(empty(Request()->type) || Request()->type == 0) checked @endif name="type" value="0">
                                                    <label for="zero">Любой</label>
                                                </span>

                                                @foreach($types as $type)
                                                <span class="wt-radio">
                                                    <input id="{{$type->name}}" @if(!empty(Request()->type) && $type->id == Request()->type) checked @endif type="radio" name="type" value="{{$type->id}}">
                                                    <label for="{{$type->name}}">{{$type->name}}</label>
                                                </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="wt-widget wt-effectiveholder">--}}
{{--                                        <div class="wt-widgettitle">--}}
{{--                                            <h2>Location</h2>--}}
{{--                                        </div>--}}
{{--                                        <div class="wt-widgetcontent">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <input type="text" name="fullname" class="form-control" placeholder="Search Location">--}}
{{--                                                        <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="wt-checkboxholder wt-verticalscrollbar">--}}
{{--																<span class="wt-checkbox">--}}
{{--																	<input id="wt-description" type="checkbox" name="description" value="company" checked>--}}
{{--																	<label for="wt-description"> <img src="/assets/images/flag/img-01.png" alt="img description"> Australia</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="us" type="checkbox" name="description" value="company">--}}
{{--																	<label for="us"> <img src="/assets/images/flag/img-02.png" alt="img description"> United States</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="canada" type="checkbox" name="description" value="company">--}}
{{--																	<label for="canada"> <img src="/assets/images/flag/img-03.png" alt="img description"> Canada</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="england" type="checkbox" name="description" value="company">--}}
{{--																	<label for="england"> <img src="/assets/images/flag/img-04.png" alt="img description"> England</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="emirates" type="checkbox" name="description" value="company">--}}
{{--																	<label for="emirates"> <img src="/assets/images/flag/img-05.png" alt="img description"> United Emirates</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="wt-description1" type="checkbox" name="description" value="company">--}}
{{--																	<label for="wt-description1"> <img src="/assets/images/flag/img-01.png" alt="img description"> Australia</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="us1" type="checkbox" name="description" value="company">--}}
{{--																	<label for="us1"> <img src="/assets/images/flag/img-02.png" alt="img description"> United States</label>--}}
{{--																</span>--}}
{{--                                                    </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="wt-widget wt-effectiveholder">--}}
{{--                                        <div class="wt-widgettitle">--}}
{{--                                            <h2>Skills Required</h2>--}}
{{--                                        </div>--}}
{{--                                        <div class="wt-widgetcontent">--}}
{{--                                                    <div class="wt-checkboxholder">--}}
{{--																<span class="wt-checkbox">--}}
{{--																	<input id="proindependent" type="checkbox" name="description" value="company" checked>--}}
{{--																	<label for="proindependent">Pro Independent Freelancers</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="proagency" type="checkbox" name="description" value="company">--}}
{{--																	<label for="proagency"> Pro Agency Freelancers</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="independent" type="checkbox" name="description" value="company">--}}
{{--																	<label for="independent"> Independent Freelancers</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="agency" type="checkbox" name="description" value="company">--}}
{{--																	<label for="agency">Agency Freelancers</label>--}}
{{--																</span>--}}
{{--                                                        <span class="wt-checkbox">--}}
{{--																	<input id="rising" type="checkbox" name="description" value="company">--}}
{{--																	<label for="rising"> New Rising Talent</label>--}}
{{--																</span>--}}
{{--                                                    </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgettitle">
                                            <h2>Срок проекта</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <div class="wt-checkboxholder">
                                                @foreach($times as $time)
                                                    <span class="wt-checkbox">
                                                        <input id="{{$time->name}}" type="checkbox" name="time[]" @if(!empty(Request()->time) && in_array($time->id, Request()->time)) checked @endif value="{{$time->id}}">
                                                        <label for="{{$time->name}}">{{$time->name}}</label>
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="wt-widget wt-effectiveholder">--}}
{{--                                        <div class="wt-widgettitle">--}}
{{--                                            <h2>Languages</h2>--}}
{{--                                        </div>--}}
{{--                                        <div class="wt-widgetcontent">--}}
{{--                                                <div class="wt-checkboxholder wt-verticalscrollbar">--}}
{{--                                                            <span class="wt-checkbox">--}}
{{--                                                                <input id="chinese" type="checkbox" name="description" value="company" checked>--}}
{{--                                                                <label for="chinese">Chinese</label>--}}
{{--                                                            </span>--}}
{{--                                                    <span class="wt-checkbox">--}}
{{--                                                                <input id="spanish" type="checkbox" name="description" value="company">--}}
{{--                                                                <label for="spanish">Spanish</label>--}}
{{--                                                            </span>--}}
{{--                                                    <span class="wt-checkbox">--}}
{{--                                                                <input id="english" type="checkbox" name="description" value="company">--}}
{{--                                                                <label for="english">English</label>--}}
{{--                                                            </span>--}}
{{--                                                    <span class="wt-checkbox">--}}
{{--                                                                <input id="arabic" type="checkbox" name="description" value="company">--}}
{{--                                                                <label for="arabic">Arabic</label>--}}
{{--                                                            </span>--}}
{{--                                                    <span class="wt-checkbox">--}}
{{--                                                                <input id="russian" type="checkbox" name="description" value="company">--}}
{{--                                                                <label for="russian">Russian</label>--}}
{{--                                                            </span>--}}
{{--                                                    <span class="wt-checkbox">--}}
{{--                                                                <input id="chinese1" type="checkbox" name="description" value="company">--}}
{{--                                                                <label for="chinese1">Chinese</label>--}}
{{--                                                            </span>--}}
{{--                                                    <span class="wt-checkbox">--}}
{{--                                                                <input id="spanish1" type="checkbox" name="description" value="company">--}}
{{--                                                                <label for="spanish1">Spanish</label>--}}
{{--                                                            </span>--}}
{{--                                                </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="wt-widget wt-effectiveholder">
                                        <div class="wt-widgetcontent">
                                            <div class="wt-applyfilters">
{{--                                                <span>Click “Apply Filter” to apply latest<br> changes made by you.</span>--}}
                                                <button class="wt-btn">Применить фильтры</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </aside>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                                <div class="wt-userlistingholder wt-haslayout">
                                    @if(Request()->search != null)
                                    <div class="wt-userlistingtitle">
                                        <span>01 - 48 of 57143 results for <em>"{{Request()->search}}"</em></span>
                                    </div>
                                    @endif
                                    <div class="wt-filterholder">
                                        <ul class="wt-filtertag">
                                            @if(!empty(Request()->all()))
                                            <li class="wt-filtertagclear">
                                                <a href="{{route('projects.index')}}"><i class="fa fa-times"></i> <span>Очистить все фильтры</span></a>
                                            </li>
                                            @endif
                                            @if(Request()->category != null)
                                                @foreach(Request()->category as $category)
                                                    <li class="alert alert-dismissable fade in">
                                                        <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>{{App\Models\Category::find($category)->name}}</span></a>
                                                    </li>
                                                @endforeach
                                            @endif
                                            @if(Request()->type != null && Request()->type != 0)
                                                    <li class="alert alert-dismissable fade in">
                                                        <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>{{App\Models\Type::find(Request()->type)->name}}</span></a>
                                                    </li>
                                            @endif
                                            @if(Request()->time != null)
                                                @foreach(Request()->time as $time)
                                                    <li class="alert alert-dismissable fade in">
                                                        <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Срок: {{App\Models\Time::find($time)->name}}</span></a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
{{--                                    <div class="wt-userlistinghold wt-featured wt-userlistingholdvtwo">--}}
{{--                                        <span class="wt-featuredtag wt-featuredtagcolor2"><img src="/assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>--}}
{{--                                        <div class="wt-userlistingcontent">--}}
{{--                                            <div class="wt-contenthead">--}}
{{--                                                <div class="wt-title">--}}
{{--                                                    <a href="usersingle.html"><i class="fa fa-check-circle"></i> Vertex Association</a>--}}
{{--                                                    <h2>Need Amazon MWS handshaking</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="wt-description">--}}
{{--                                                    <p>Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit inati voluptate velit esse cillum dolore eutates fugiat nulla pariatur sunt in culpa asequi officia deserunt mollit anim id est laborum ut perspiciatis...</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="wt-tag wt-widgettag">--}}
{{--                                                    <a href="javascript:void(0);">PHP</a>--}}
{{--                                                    <a href="javascript:void(0);">HTML</a>--}}
{{--                                                    <a href="javascript:void(0);">JQuery</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="wt-viewjobholder">--}}
{{--                                                <ul>--}}
{{--                                                    <li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>Professional</span></li>--}}
{{--                                                    <li><span><em><img src="/assets/images/flag/img-05.png" alt="img description"></em>United Emirates</span></li>--}}
{{--                                                    <li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: Per Hour</span></li>--}}
{{--                                                    <li><span><i class="far fa-clock wt-viewjobclock"></i>Duration: 03 Months</span></li>--}}
{{--                                                    <li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: gy3yV2Vm5u</span></li>--}}
{{--                                                    <li><a href="javascript:void(0);" class="wt-clicklike"><i class="fa fa-heart"></i> Click to Save</a></li>--}}
{{--                                                    <li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">View Job</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    @foreach($projects as $project)
                                    <div class="wt-userlistinghold wt-userlistingholdvtwo">
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="usersingle.html"><i class="fa fa-check-circle"></i>
                                                        {{$project->user->name}}
                                                    </a>
                                                    <h2>{{$project->title}}</h2>
                                                </div>
                                                <div class="wt-description">
                                                    <p>{{$project->content}}</p>
                                                </div>
                                                <div class="wt-tag wt-widgettag">
                                                    @foreach($project->tags as $tag)
                                                    <a href="javascript:void(0);">{{$tag->name}}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="wt-viewjobholder">
                                                <ul>
                                                    <li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>{{$project->price}}</span></li>
{{--                                                    <li><span><em><img src="/assets/images/flag/img-01.png" alt="img description"></em>United Emirates</span></li>--}}
                                                    <li><span><i class="far fa-folder wt-viewjobfolder"></i>Тип: {{$project->type->name}}</span></li>
                                                    <li><span><i class="far fa-clock wt-viewjobclock"></i>Срок: {{$project->time->name}}</span></li>
{{--                                                    <li><span><i class="fa fa-tag wt-viewjobtag"></i>Job ID: gy3yV2Vm5u</span></li>--}}
                                                    <li><a href="javascript:void(0);"><i class="fa fa-heart"></i> Сохранить</a></li>
                                                    <li class="wt-btnarea"><a href="userlisting.html" class="wt-btn">Посмотреть</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{$projects->links('pagination.project')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Listing End-->
        </div>
    </main>
    <!--Main End-->
@endsection
