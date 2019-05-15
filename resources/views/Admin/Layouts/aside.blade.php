@section('aside')
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        <!-- Side Overlay-->
        <aside id="side-overlay" class="font-size-sm">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- Staff Avatar -->
                <a class="img-link mr-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="{{asset('public/server')}}/assets/media/avatars/avatar10.jpg" alt="">
                </a>
                <!-- END Staff Avatar -->

                <!-- Staff Info -->
                <div class="ml-2">
                    <a class="link-fx text-dark font-w600" href="javascript:void(0)">Admin</a>
                </div>
                <!-- END Staff Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-fw fa-times text-danger"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-language" style="width: 20px; color:blue;"></i>
                    <span class="d-none d-sm-inline-block ml-1">{{__('language.Language')}}</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-left p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                    <div class="p-2">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('admin/lang/jv')}}">
                            <span>{{__('language.Japanese')}}</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('admin/lang/en')}}">
                            <span>{{__('language.English')}}</span>
                        </a>
                    </div>
                </div>
            </div>

        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href="{{url('')}}" title="Redirect to home page">
                    <i class="fa fa-circle-notch text-primary"></i>
                    <span class="smini-hide">
                            <span class="font-w700 font-size-h6">Chubi</span> <span class="font-w400" style="color:#5c80d1;">Website</span>
                        </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Color Variations -->
                    <div class="dropdown d-inline-block ml-3">
                        <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="si si-drop"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                            <!-- Color Themes -->
                            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                                <span>Default</span>
                                <i class="fa fa-circle text-default"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('public/server')}}/assets/css/themes/amethyst.min.css" href="#">
                                <span>Amethyst</span>
                                <i class="fa fa-circle text-amethyst"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('public/server')}}/assets/css/themes/city.min.css" href="#">
                                <span>City</span>
                                <i class="fa fa-circle text-city"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('public/server')}}/assets/css/themes/flat.min.css" href="#">
                                <span>Flat</span>
                                <i class="fa fa-circle text-flat"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                <span>Modern</span>
                                <i class="fa fa-circle text-modern"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{asset('public/server')}}/assets/css/themes/smooth.min.css" href="#">
                                <span>Smooth</span>
                                <i class="fa fa-circle text-smooth"></i>
                            </a>
                            <!-- END Color Themes -->

                            <div class="dropdown-divider"></div>

                            <!-- Sidebar Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                <span>Sidebar Light</span>
                            </a>
                            <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                <span>Sidebar Dark</span>
                            </a>
                            <!-- Sidebar Styles -->

                            <div class="dropdown-divider"></div>

                            <!-- Header Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                <span>Header Light</span>
                            </a>
                            <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                <span>Header Dark</span>
                            </a>
                            <!-- Header Styles -->
                        </div>
                    </div>
                    <!-- END Themes -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-times"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
            <!-- END Side Header -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon si si-speedometer"></i>
                            <span class="nav-main-link-name">{{__('language.Admin_Panel')}}</span>
                        </a>
                    </li>
                    <li class="nav-main-heading ">{{__('language.User_Control')}}</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu <?php if(request()->segment('2') =='superAdmin' || request()->segment('2') =='generalAdmin' || request()->segment('2') =='moderator'){ echo 'active' ;} ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon si si-energy"></i>
                            <span class="nav-main-link-name">{{__('language.USER_MANAGER')}}</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu   <?php if(request()->segment('2') =='create_event' || request()->segment('2') =='list_events' || request()->segment('2') =='categories'){ echo 'active' ;} ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon si si-badge"></i>
                            <span class="nav-main-link-name">{{__('language.News_Event_Control')}}</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if(request()->segment('2') =='create_event'){ echo 'active' ;} ?>" href="{{url('admin/create_event')}}">
                                    <span class="nav-main-link-name">{{__('language.Create_New_Event')}}</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if(request()->segment('2') =='list_events'){ echo 'active' ;} ?>" href="{{url('admin/list_events')}}">
                                    <span class="nav-main-link-name">{{__('language.List_Events')}}</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if(request()->segment('2') =='categories'){ echo 'active' ;} ?>" href="{{url('admin/categories')}}">
                                    <span class="nav-main-link-name">{{__('language.Category')}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu   <?php if(request()->segment('2') =='create-information' || request()->segment('2') =='list-information'){ echo 'active' ;} ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon si si-badge"></i>
                            <span class="nav-main-link-name">{{__('language.Information')}}</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if(request()->segment('2') =='create-information'){ echo 'active' ;} ?>" href="{{url('admin/create-information')}}">
                                    <span class="nav-main-link-name">{{__('language.Create_New_Information')}}</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if(request()->segment('2') =='list-information'){ echo 'active' ;} ?>" href="{{url('admin/list-information')}}">
                                    <span class="nav-main-link-name">{{__('language.List_Information')}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu   <?php if(request()->segment('2') =='create-graduate' || request()->segment('2') =='list-graduate-student'){ echo 'active' ;} ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon si si-badge"></i>
                            <span class="nav-main-link-name">{{__('language.Graduate_Student')}}</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if(request()->segment('2') =='create-graduate'){ echo 'active' ;} ?>" href="{{url('admin/create-graduate')}}">
                                    <span class="nav-main-link-name">{{__('language.New_Student')}}</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link <?php if(request()->segment('2') =='list-graduate-student'){ echo 'active' ;} ?>" href="{{url('admin/list-graduate-student')}}">
                                    <span class="nav-main-link-name">{{__('language.List_Student')}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                </ul>
            </div>
            <!-- END Side Navigation -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Footer -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <!-- END Toggle Mini Sidebar -->

                    <!-- Apps Modal -->
                    <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                    {{--<button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">--}}
                        {{--<i class="si si-grid"></i>--}}
                    {{--</button>--}}
                    <!-- END Apps Modal -->

                    <!-- Open Search Footer (visible on smaller screens) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                        <i class="si si-magnifier"></i>
                    </button>
                    <!-- END Open Search Footer -->

                    <!-- Search Form (visible on larger screens) -->
                    <form class="d-none d-sm-inline-block" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                            <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="si si-magnifier"></i>
                                    </span>
                            </div>
                        </div>
                    </form>
                    <!-- END Search Form -->
                </div>
                <!-- END Left Footer -->

                <!-- Right Footer -->
                <div class="d-flex align-items-center">
                    <!-- Staff Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded" src="{{asset('public/server')}}/assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 18px;">
                            <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('logout')}}">
                                    <span>Log Out</span>
                                    <i class="si si-logout ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-language" style="width: 20px; color:blue;"></i>
                            <span class="d-none d-sm-inline-block ml-1">{{__('language.Language')}}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-left p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('admin/lang/jv')}}">
                                    <span>{{__('language.Japanese')}}</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('admin/lang/en')}}">
                                    <span>{{__('language.English')}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Staff Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="si si-bell"></i>
                            <span class="badge badge-primary badge-pill"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-2 bg-primary text-center">
                                <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                            </div>
                            {{--<ul class="nav-items mb-0">--}}
                                        {{--<li>--}}
                                            {{--<a class="text-dark media py-2" href="">--}}
                                                {{--<div class="mr-2 ml-3">--}}
                                                    {{--<i class="fa fa-fw fa-check-circle text-success"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="media-body pr-2">--}}
                                                    {{--<div class="font-w600">someone Claimed Listing</div>--}}
                                                    {{--<small class="text-muted"></small>--}}
                                                {{--</div>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                            {{--</ul>--}}
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Notifications Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Footer -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-white">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-white">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->
@stop