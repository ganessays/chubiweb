@section('nav_header')
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <div class="site-navbar-wrap js-site-navbar bg-white">
        <div class="container">
            <div class="site-navbar bg-light sticky-nav">
                <div class="py-1">
                    <div class="row align-items-center">
                        <div class="col-4 site_Logo">
                            <h2 class="mb-0 site-logo"><a href="{{url('')}}"><img src="{{asset('public/client/images/logo/new_logo.png')}}" alt=""></a></h2>
                        </div>
                        <div class="col-8">

                            <div class="social_icon_header">
                    <a href="#"><img src="{{asset('public/client/images/icon/line.png')}}"></a>
                    <a href="https://www.instagram.com/explore/tags/%E4%B8%AD%E5%A4%AE%E7%BE%8E%E8%A1%93%E5%AD%A6%E5%9C%92/">
                        <img src="{{asset('public/client/images/icon/insta.png')}}">
                    </a>
                    <a href="https://www.facebook.com/chubiartschool/">
                        <img src="{{asset('public/client/images/icon/facebook.png')}}">
                    </a>
                    <a href="https://twitter.com/search?q=%E4%B8%AD%E5%A4%AE%E7%BE%8E%E8%A1%93%E5%AD%A6%E5%9C%92&src=typd"><img src="{{asset('public/client/images/icon/twitter.png')}}"></a>
                </div>
                            <div class="social_icon">
                                <a href="{{url('lang/en')}}" class="english" style="padding: 5px 14px">English</a>
                                <a href="{{url('lang/jv')}}" class="english" style="padding: 5px 14px">japnese</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li><a class="<?php if(request()->segment('1') ==''){ echo 'active' ;} ?>" href="{{url('')}}">{{__('language.HOME')}}</a> </li>
                                        <li><a class="<?php if(request()->segment('1') =='experience'){ echo 'active' ;} ?>" href="{{url('experience')}}"> 体験授業・学校説明会</a> </li>
                                        <li><a class="<?php if(request()->segment('1') =='school'){ echo 'active' ;} ?>" href="{{url('school')}}">{{__('language.SCHOOL_INTRODUCTION')}}</a> </li>
                                       <!--  <li><a class="<?php if(request()->segment('1') =='department'){ echo 'active' ;} ?>" href="{{url('department')}}">{{__('language.DEPARTMENT_INTRODUCTION')}}</a> </li> -->
                                        <li><a class="<?php if(request()->segment('1') =='career_advancement'){ echo 'active' ;} ?>" href="{{url('career_advancement')}}">{{__('language.CAREER_COURSE')}}</a> </li>
                                        <li class="has-children">
                                            <a class="<?php if(request()->segment('1') =='admission'){ echo 'active' ;} ?>" href="{{url('admission')}}">{{__('language.ADMISSION_GUIDE')}}</a> 

                                            <ul class="dropdown arrow-top">
                                              <li><a href="#">中央美術学園 　授業料</a></li>
                                              <li><a href="#">中美_募集要項</a></li>

                                            </ul>

                                        </li>
                                        <li><a class="<?php if(request()->segment('1') =='access'){ echo 'active' ;} ?>" href="{{url('access')}}">{{__('language.ACCESS')}}</a> </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection