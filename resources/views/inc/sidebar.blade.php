<!--Sidebar Start-->
<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
    <div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
						<span class="menu-icon">
							<em></em>
							<em></em>
							<em></em>
						</span>
    </div>
    <div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
        <div class="wt-companysdetails wt-usersidebar">
            <figure class="wt-companysimg">
                <img src="@if($user->banner){{$user->banner->src}}@else /assets/images/sidebar/img-01.jpg @endif" alt="img description">
            </figure>
            <div class="wt-companysinfo">
                <figure><img src="@if($user->avatar){{$user->avatar->src}}@else /img/no-avatar.webp @endif" alt="avatar"></figure>
                <div class="wt-title">
                    <h2><a href="javascript:void(0);">{{$user->name}}</a></h2>
                    <span>{{$user->role->name}}</span>
                </div>
                <div class="wt-btnarea"><a href="dashboard-postjob.html" class="wt-btn">Создать заказ</a></div>
            </div>
        </div>
        <nav id="wt-navdashboard" class="wt-navdashboard">
            <ul>
                <li>
                    <a href="dashboard-profile.html">
                        <i class="ti-briefcase"></i>
                        <span>Мой профиль</span>
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-package"></i>
                        <span>Мои работы</span>
                    </a>
                    <ul class="sub-menu">
                        <li><hr><a href="dashboard-completejobs.html">Завершенные</a></li>
                        <li><hr><a href="dashboard-canceljobs.html">Отмененные</a></li>
                    </ul>
                </li>
                <li class="wt-notificationicon menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-pencil-alt"></i>
                        <span>Сообщения</span>
                    </a>
                </li>

                <li class="wt-active">
                    <a href="dashboard-accountsettings.html">
                        <i class="ti-anchor"></i>
                        <span>Настройки</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-helpsupport.html">
                        <i class="ti-tag"></i>
                        <span>Поддержка</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('account.logout')}}">
                        <i class="ti-shift-right"></i>
                        <span>Выйти</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="wt-navdashboard-footer">
            <span>Worktern. © {{date('Y')}} All Rights Reserved.</span>
        </div>
    </div>
</div>
<!--Sidebar Start-->
