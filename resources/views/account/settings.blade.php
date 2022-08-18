@extends('layouts.dashboard')
@section('title', 'Настройки')
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <main id="wt-main" class="wt-main wt-haslayout">
        @include('inc.sidebar', $user)
        <!--Register Form Start-->
        <section class="wt-haslayout wt-dbsectionspace">
            <div class="row">
                <form action="{{route('account.save')}}" id="settings-form" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">
                        <div class="wt-dashboardtabs">
                            <ul class="wt-tabstitle nav navbar-nav">
                                <li class="nav-item"><a class="active" data-toggle="tab" href="#wt-security">Настройки</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#wt-password">Пароль</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#wt-emailnoti">Уведомления</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#wt-deleteaccount">Удалить аккаунт</a></li>
                            </ul>
                        </div>
                        <div class="wt-tabscontent tab-content">
                            <div class="wt-securityhold tab-pane active fade show" id="wt-security">
                                <div class="wt-securitysettings wt-tabsinfo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Основная информация</h2>
                                    </div>
                                    <div class="wt-settingscontent">
                                        @if(session()->has('error'))
                                        <div class="wt-description">
                                            <p>
                                                Заполните основную информацию о себе, что бы получить доступ к бирже и аккаунту
                                            </p>
                                        </div>
                                        @endif
                                        <ul class="wt-accountinfo">
{{--                                            <div class="form-group">--}}
{{--                                                <label for="avatar">Ваше фото</label>--}}
{{--                                                <input type="file" name="avatar" class="form-control @if($errors->has('avatar')) is-invalid @endif">--}}
{{--                                            </div>--}}
                                            <label for="avatar">Ваше фото</label>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup" style="text-align: center">
                                                    <label for="filew">
                                                        <span class="wt-btn">Выбрать фото</span>
                                                        <input type="file" name="avatar" id="filew">
                                                    </label>
                                                    <em class="wt-fileuploading">Загрузка<i class="fa fa-spinner fa-spin"></i></em>
                                                </div>
                                            </div>
                                            @if($user->avatar)
                                            <div class="form-group">
                                                <ul class="wt-attachfile wt-attachfilevtwo">
                                                    <li class="wt-uploadingholder">
                                                        <div class="wt-uploadingbox">
                                                            <div class="wt-designimg">
                                                                <input id="demoq" type="radio" name="employees" value="company" checked="">
                                                                <label for="demoq"><img src="{{$user->avatar->src}}" alt="img description"><i class="fa fa-check"></i></label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endif
                                            <div class="form-group form-group-half" style="padding:0 5px 0 0">
                                                <input type="text" name="name" value="{{$user->name}}" class="form-control The name field is required. @if($errors->has('name')) is-invalid @endif" placeholder="Ваше имя">
                                            </div>

                                            <div class="form-group form-group-half" style="padding:0 0 0 5px">
                                                <input type="text" name="lastname" value="{{$user->lastname}}" class="form-control @if($errors->has('lastname')) is-invalid @endif" placeholder="Ваша фамилия">
                                            </div>

                                            <div class="form-group form-group-half">
                                                <span class="wt-select">
                                                    <select name="gender">
                                                        <option value="" disabled="">Ваш пол</option>
                                                        <option value="male">Мужской</option>
                                                        <option value="female">Женский</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="login" value="{{$user->login}}" class="form-control @if($errors->has('login')) is-invalid @endif" placeholder="Ваш логин">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="speciality" value="{{$user->speciality}}" class="form-control @if($errors->has('speciality')) is-invalid @endif" placeholder="Ваша специальность">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="about" class="form-control @if($errors->has('about')) is-invalid @endif" placeholder="Расскажите немного о себе">{{$user->about}}</textarea>
                                            </div>

                                            <label for="avatar">Баннер</label>
                                            <div class="form-group form-group-label">
                                                <div class="wt-labelgroup" style="text-align: center">
                                                    <label for="banner">
                                                        <span class="wt-btn">Выбрать фото</span>
                                                        <input type="file" name="banner" id="banner">
                                                    </label>
                                                    <em class="wt-fileuploading">Загрузка<i class="fa fa-spinner fa-spin"></i></em>
                                                </div>
                                            </div>
                                            @if($user->banner)
                                                <div class="form-group">
                                                    <ul class="wt-attachfile wt-attachfilevtwo">
                                                        <li class="wt-uploadingholder">
                                                            <div class="wt-uploadingbox">
                                                                <div class="wt-designimg">
                                                                    <input id="demoq" type="radio" name="employees" value="company" checked="">
                                                                    <label for="demoq"><img src="{{$user->banner->src}}" alt="img description"><i class="fa fa-check"></i></label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                                <div class="wt-location wt-tabsinfo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Язык и валюта</h2>
                                    </div>
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
														<span class="wt-select">
															<select>
																<option value="" disabled>Выберите ваш язык</option>
																<option value="rus">Russian</option>
																<option value="eng">English</option>
															</select>
														</span>
                                            </div>
                                            <div class="form-group form-group-half">
                                                <span class="wt-select">
                                                    <select>
                                                        <option value="">BTC</option>
                                                        <option value="">USDT</option>
                                                        <option value="">ETC</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="wt-passwordholder tab-pane fade" id="wt-password">
                                <div class="wt-changepassword">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Изменить пароль</h2>
                                    </div>
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="password" name="password_old" class="form-control" placeholder="Текущий пароль">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="password" name="password_new" class="form-control" placeholder="Новый пароль">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="wt-emailnotiholder tab-pane fade" id="wt-emailnoti">
                                <div class="wt-emailnoti">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Manage Email Notifications</h2>
                                    </div>
                                    <div class="wt-settingscontent">
                                        <div class="wt-description">
                                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                        <form class="wt-formtheme wt-userform">
                                            <fieldset>
                                                <div class="form-group form-disabeld">
                                                    <input type="password" name="password" class="form-control" placeholder="youremail@domainurl.com" disabled="">
                                                </div>
                                            </fieldset>
                                        </form>
                                        <ul class="wt-accountinfo">
                                            <li>
                                                <div class="wt-on-off">
                                                    <input type="checkbox" id="hide-onemail" name="contact_form">
                                                    <label for="hide-onemail"><i></i></label>
                                                </div>
                                                <span>Send me Weekly newsletter alerts</span>
                                            </li>
                                            <li>
                                                <div class="wt-on-off pull-right">
                                                    <input type="checkbox" id="hide-onemail1" name="contact_form">
                                                    <label for="hide-onemail1"><i></i></label>
                                                </div>
                                                <span>Forward messages on this ID</span>
                                            </li>
                                            <li>
                                                <div class="wt-on-off pull-right">
                                                    <input type="checkbox" id="hide-onemail2" name="contact_form" checked="">
                                                    <label for="hide-onemail2"><i></i></label>
                                                </div>
                                                <span>Send me bonus &amp; promo alerts</span>
                                            </li>
                                            <li>
                                                <div class="wt-on-off pull-right">
                                                    <input type="checkbox" id="hide-onemail3" name="contact_form" checked="">
                                                    <label for="hide-onemail3"><i></i></label>
                                                </div>
                                                <span>Share latest security alerts</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="wt-accountholder tab-pane fade" id="wt-deleteaccount">
                                <div class="wt-accountdel">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Удалить аккаунт</h2>
                                    </div>
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="password" name="password" class="form-control" placeholder="Введите ваш пароль">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="password" name="password" class="form-control" placeholder="Повторите пароль">
                                            </div>
                                            <div class="form-group">
                                                <span class="wt-select">
                                                    <select>
                                                        <option value="" disabled="">Выберите причину</option>
                                                        <option value="">Reason</option>
                                                        <option value="">Reason</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Почему вы решили покинуть нашу площадку (необязательно)"></textarea>
                                            </div>
                                            <div class="form-group form-group-half float-right">
                                                <span class="wt-checkbox">
                                                    <input id="termsconditions1" type="checkbox" name="termsconditions" value="termsconditions">
                                                    <label for="termsconditions1"><span>Отписать меня от рассылки</span></label>
                                                </span>
                                            </div>
                                            <div class="form-group form-group-half wt-btnarea">
                                                <a href="javascript:void(0);" class="wt-btn">Удалить аккаунт</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wt-updatall">
                        <i class="ti-announcement"></i>
                        <span>Сохраните внесенные изменения нажав на кнопку</span>
                        <a class="wt-btn" onclick="$('#settings-form').submit()" href="#" id="save">Сохранить и продолжить</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3"></div>
                </form>
            </div>
        </section>
        <!--Register Form End-->
    </main>
@endsection
