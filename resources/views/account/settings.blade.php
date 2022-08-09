@extends('layouts.dashboard')
@section('title', 'Настройки')
@section('content')
    <main id="wt-main" class="wt-main wt-haslayout">
        @include('inc.sidebar')
        <!--Register Form Start-->
        <section class="wt-haslayout wt-dbsectionspace">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">
                        <div class="wt-dashboardtabs">
                            <ul class="wt-tabstitle nav navbar-nav">
                                <li class="nav-item">
                                    <a class="active" data-toggle="tab" href="#wt-security">Security &amp; Settings</a>
                                </li>
                                <li class="nav-item"><a data-toggle="tab" href="#wt-password">Password</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#wt-emailnoti">Email Notifications</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#wt-detailpagedesign">Detail Page Design</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#wt-deleteaccount">Delete Account</a></li>
                            </ul>
                        </div>
                        <div class="wt-tabscontent tab-content">
                            <div class="wt-securityhold tab-pane active fade show" id="wt-security">
                                <div class="wt-securitysettings wt-tabsinfo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Account Security &amp; Settings</h2>
                                    </div>
                                    <div class="wt-settingscontent">
                                        <div class="wt-description">
                                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                        <ul class="wt-accountinfo">
                                            <li>
                                                <div class="wt-on-off">
                                                    <input type="checkbox" id="hide-on" name="contact_form">
                                                    <label for="hide-on"><i></i></label>
                                                </div>
                                                <span>Make my profile public</span>
                                            </li>
                                            <li>
                                                <div class="wt-on-off pull-right">
                                                    <input type="checkbox" id="hide-onone" name="contact_form">
                                                    <label for="hide-onone"><i></i></label>
                                                </div>
                                                <span>Make my profile searchable</span>
                                            </li>
                                            <li>
                                                <div class="wt-on-off pull-right">
                                                    <input type="checkbox" id="hide-onthree" name="contact_form" checked="">
                                                    <label for="hide-onthree"><i></i></label>
                                                </div>
                                                <span>Share my profile photo</span>
                                            </li>
                                            <li>
                                                <div class="wt-on-off pull-right">
                                                    <input type="checkbox" id="hide-onfour" name="contact_form" checked="">
                                                    <label for="hide-onfour"><i></i></label>
                                                </div>
                                                <span>Disable my account temporarily</span>
                                            </li>
                                            <li>
                                                <div class="wt-on-off pull-right">
                                                    <input type="checkbox" id="hide-onfive" name="contact_form">
                                                    <label for="hide-onfive"><i></i></label>
                                                </div>
                                                <span>Show my client feedback</span>
                                            </li>
                                            <li>
                                                <div class="wt-on-off pull-right">
                                                    <input type="checkbox" id="hide-onsix" name="contact_form">
                                                    <label for="hide-onsix"><i></i></label>
                                                </div>
                                                <span>Enable/ Disable</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wt-location wt-tabsinfo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Language &amp; Currency</h2>
                                    </div>
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
														<span class="wt-select">
															<select>
																<option value="">Select System Language</option>
																<option value="">English</option>
																<option value="">French</option>
																<option value="">Spanish</option>
																<option value="">Japanese</option>
																<option value="">Arabic </option>
															</select>
														</span>
                                            </div>
                                            <div class="form-group form-group-half">
														<span class="wt-select">
															<select>
																<option value="">Select Currency</option>
																<option value="">Brazilian Real</option>
																<option value="">US Dollar</option>
																<option value="">Yuan Renminbi</option>
																<option value="">Colombian Peso</option>
																<option value="">Euro</option>
																<option value="">Hong Kong Dollar</option>
															</select>
														</span>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="wt-tabcompanyinfo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Dashboard Color Settings</h2>
                                    </div>
                                    <div class="wt-settingscontent">
                                        <div class="wt-description">
                                            <p>Incididunt ut labore et dolore magna aliqua aut enim ad exercitation ullamco laboris.</p>
                                        </div>
                                        <ul class="wt-accountinfo">
                                            <li>
                                                <div class="wt-on-off">
                                                    <input type="checkbox" id="hide-on1" name="contact_form">
                                                    <label for="hide-on1"><i></i></label>
                                                </div>
                                                <span>Use dark version for my dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wt-passwordholder tab-pane fade" id="wt-password">
                                <div class="wt-changepassword">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Change Your Password</h2>
                                    </div>
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="password" name="password" class="form-control" placeholder="Last Remember Password">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="password" name="password" class="form-control" placeholder="New Password">
                                            </div>
                                            <div class="form-group">
														<span class="wt-checkbox">
															<input id="termsconditions" type="checkbox" name="termsconditions" value="termsconditions" checked="">
															<label for="termsconditions"><span>Logout from all other web/mobile session now.</span></label>
														</span>
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
                            <div class="wt-pagedesignholder tab-pane fade" id="wt-detailpagedesign">
                                <div class="wt-selectdesignholder wt-tabsinfo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Choose Your Detail Page Design</h2>
                                    </div>
                                    <div class="wt-selectdesign">
                                        <ul>
                                            <li>
                                                <div class="wt-templateoption">
                                                    <div class="wt-designtitle">
                                                        <span>Template 01</span>
                                                        <a href="javascript:void(0);" class="wt-btn float-right">Preview</a>
                                                    </div>
                                                    <div class="wt-designimg">
                                                        <input id="demo1" type="radio" name="employees" value="company" checked="">
                                                        <label for="demo1"><img src="/assets/images/template/img-01.jpg" alt="img description"><i class="fa fa-check"></i></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="wt-templateoption">
                                                    <div class="wt-designtitle">
                                                        <span>Template 02</span>
                                                        <a href="javascript:void(0);" class="wt-btn float-right">Preview</a>
                                                    </div>
                                                    <div class="wt-designimg">
                                                        <input id="demo2" type="radio" name="employees" value="company">
                                                        <label for="demo2"><img src="/assets/images/template/img-02.jpg" alt="img description"><i class="fa fa-check"></i></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="wt-templateoption">
                                                    <div class="wt-designtitle">
                                                        <span>Template 03</span>
                                                        <a href="javascript:void(0);" class="wt-btn float-right">Preview</a>
                                                    </div>
                                                    <div class="wt-designimg">
                                                        <input id="demo3" type="radio" name="employees" value="company">
                                                        <label for="demo3"><img src="/assets/images/template/img-03.jpg" alt="img description"><i class="fa fa-check"></i></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="wt-templateoption">
                                                    <div class="wt-designtitle">
                                                        <span>Template 04</span>
                                                        <a href="javascript:void(0);" class="wt-btn float-right">Preview</a>
                                                    </div>
                                                    <div class="wt-designimg">
                                                        <input id="demo4" type="radio" name="employees" value="company">
                                                        <label for="demo4"><img src="/assets/images/template/img-04.jpg" alt="img description"><i class="fa fa-check"></i></label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wt-accountholder tab-pane fade" id="wt-deleteaccount">
                                <div class="wt-accountdel">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Delete Account</h2>
                                    </div>
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                            </div>
                                            <div class="form-group">
														<span class="wt-select">
															<select>
																<option value="" disabled="">Select Reason to Leave</option>
																<option value="">Reason</option>
																<option value="">Reason</option>
															</select>
														</span>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Description (Optional)"></textarea>
                                            </div>
                                            <div class="form-group form-group-half float-right">
														<span class="wt-checkbox">
															<input id="termsconditions1" type="checkbox" name="termsconditions" value="termsconditions">
															<label for="termsconditions1"><span>Unsubscribe me from all newsletter list</span></label>
														</span>
                                            </div>
                                            <div class="form-group form-group-half wt-btnarea">
                                                <a href="javascript:void(0);" class="wt-btn">Delete Account</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wt-updatall">
                        <i class="ti-announcement"></i>
                        <span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
                        <a class="wt-btn" href="javascript:void(0);">Save &amp; Continue</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3"></div>
            </div>
        </section>
        <!--Register Form End-->
    </main>
@endsection
