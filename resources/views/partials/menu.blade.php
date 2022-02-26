<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_alert_access')
                            <li class="{{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                                <a href="{{ route("admin.user-alerts.index") }}">
                                    <i class="fa-fw fas fa-bell">

                                    </i>
                                    <span>{{ trans('cruds.userAlert.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('audit_log_access')
                            <li class="{{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                <a href="{{ route("admin.audit-logs.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.auditLog.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('slider_access')
                <li class="{{ request()->is("admin/sliders") || request()->is("admin/sliders/*") ? "active" : "" }}">
                    <a href="{{ route("admin.sliders.index") }}">
                        <i class="fa-fw far fa-images">

                        </i>
                        <span>{{ trans('cruds.slider.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('service_access')
                <li class="{{ request()->is("admin/services") || request()->is("admin/services/*") ? "active" : "" }}">
                    <a href="{{ route("admin.services.index") }}">
                        <i class="fa-fw fas fa-file-alt">

                        </i>
                        <span>{{ trans('cruds.service.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('who_us_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-question">

                        </i>
                        <span>{{ trans('cruds.whoUs.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('about_us_access')
                            <li class="{{ request()->is("admin/aboutuses") || request()->is("admin/aboutuses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.aboutuses.index") }}">
                                    <i class="fa-fw far fa-building">

                                    </i>
                                    <span>{{ trans('cruds.aboutUs.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('about_founder_access')
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa-fw far fa-address-card">

                                    </i>
                                    <span>{{ trans('cruds.aboutFounder.title') }}</span>
                                    <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('founder_info_access')
                                        <li class="{{ request()->is("admin/founder-infos") || request()->is("admin/founder-infos/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.founder-infos.index") }}">
                                                <i class="fa-fw fas fa-address-book">

                                                </i>
                                                <span>{{ trans('cruds.founderInfo.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                    @can('founder_description_access')
                                        <li class="{{ request()->is("admin/founder-descriptions") || request()->is("admin/founder-descriptions/*") ? "active" : "" }}">
                                            <a href="{{ route("admin.founder-descriptions.index") }}">
                                                <i class="fa-fw fas fa-align-left">

                                                </i>
                                                <span>{{ trans('cruds.founderDescription.title') }}</span>

                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('gallery_access')
                <li class="{{ request()->is("admin/galleries") || request()->is("admin/galleries/*") ? "active" : "" }}">
                    <a href="{{ route("admin.galleries.index") }}">
                        <i class="fa-fw fas fa-camera-retro">

                        </i>
                        <span>{{ trans('cruds.gallery.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('news_access')
                <li class="{{ request()->is("admin/newss") || request()->is("admin/newss/*") ? "active" : "" }}">
                    <a href="{{ route("admin.newss.index") }}">
                        <i class="fa-fw fas fa-newspaper">

                        </i>
                        <span>{{ trans('cruds.news.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('article_access')
                <li class="{{ request()->is("admin/articles") || request()->is("admin/articles/*") ? "active" : "" }}">
                    <a href="{{ route("admin.articles.index") }}">
                        <i class="fa-fw far fa-newspaper">

                        </i>
                        <span>{{ trans('cruds.article.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('contact_us_access')
                <li class="{{ request()->is("admin/contactuses") || request()->is("admin/contactuses/*") ? "active" : "" }}">
                    <a href="{{ route("admin.contactuses.index") }}">
                        <i class="fa-fw fas fa-toolbox">

                        </i>
                        <span>{{ trans('cruds.contactUs.title') }}</span>

                    </a>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                        <a href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>