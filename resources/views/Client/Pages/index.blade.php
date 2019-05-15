@extends('Client.Master.master')

@section('content')

    <!-- <div style="height: 113px;"></div> -->
    <div class="slide-one-item home-slider owl-carousel">

        <div class="site-blocks-cover inner-page" style="background-image: url({{asset('public/client/')}}/images/slider/01.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <!-- <div class="container"> -->
            {{--<div class="row align-items-center justify-content-center">--}}
                {{--<div class="col-md-7 text-center" data-aos="fade">--}}
                    {{--<h2>私たちの学校へようこそ</h2>--}}
                    {{--<span class="caption d-block text-black">専門学校中央美術学園</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- </div> -->
        </div>
        <div class="site-blocks-cover inner-page" style="background-image: url({{asset('public/client/')}}/images/slider/s2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <!-- <div class="container"> -->
            {{--<div class="row align-items-center justify-content-center">--}}
                {{--<div class="col-md-7 text-center" data-aos="fade">--}}
                    {{--<h2>私たちの学校へようこそ</h2>--}}
                    {{--<span class="caption d-block text-black">専門学校中央美術学園</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- </div> -->
        </div>

        <div class="site-blocks-cover inner-page" style="background-image: url({{asset('public/client/')}}/images//slider/s3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <!-- <div class="container"> -->
            {{--<div class="row align-items-center justify-content-center">--}}
                {{--<div class="col-md-7 text-center" data-aos="fade">--}}
                    {{--<h2>私たちの学校へようこそ</h2>--}}
                    {{--<span class="caption d-block text-black">専門学校中央美術学園</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- </div> -->
        </div>
        <div class="site-blocks-cover inner-page" style="background-image: url({{asset('public/client/')}}/images//slider/s1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <!-- <div class="container"> -->
            {{--<div class="row align-items-center justify-content-center">--}}
                {{--<div class="col-md-7 text-center" data-aos="fade">--}}
                    {{--<h2>私たちの学校へようこそ</h2>--}}
                    {{--<span class="caption d-block text-black">専門学校中央美術学園</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- </div> -->
        </div>
    </div>

        <div class="container">
            <div class="about_top">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_image">
                        <img src="{{asset('public/client/images/logo/Globe.png')}}" alt="">
                    </div>
                    <div class="about_before"></div>
                    <div class="about_rbg">
                        <h3>{{__('language.About_h3')}}</h3>
                        <p>
                            {{__('language.About_p')}}
                        </p>
                        <p>
                            {{__('language.About_p2')}}
                        </p>
                    </div>
                    <div class="about_before"></div>
                </div>
            </div> {{--row end --}}
            </div>
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
                <div class="col-md-8">
                   <div class="courses_back" style="margin-top: 42px;">
                       <div class="courses_head">
                            <img src="{{asset('public/client/images/logo/22.png')}}" width="100%;">
                       </div>
                       <div class="courses_title">
                        <h2 class="courses_title">中央美術学園</h2>
                        <!-- <h2>{{__('language.Art_Business')}}</h2> -->
                           <!-- <p>{{__('language.Art_Business')}}</p>  -->
                           <p>デザイン、イラスト、
                               アート</p>
                       </div>
                       <div class="courses_body">
                           <h3>{{__('language.About_us')}}</h3>
                           <p>
                               {{__('language.Art_Business_About')}}
                           </p>
                           <div class="row justify-content-md-center">
                               <div class="col-md-4">
                                   <h6><a href="https://www.cast.ac.jp/honka#list-item-1"> デザイン</a></h6>
                                   <h6><a href="https://www.cast.ac.jp/honka#list-item-2"> イラスト </a></h6>
                                   <h6><a href="https://www.cast.ac.jp/honka#list-item-3">アート </a></h6>
                               </div>
                           </div>
                           <div class="course_link">
                               <p><a class="course_link_a"  href="{{url('document_request')}}">資料請求</a></p>
                               <p><a href="{{url('honka')}}" style="color: blue;">Read More <i class="fa fa-angle-right"></i></a></p>
                           </div>
                       </div>
                   </div>
                </div>
           <!--  <div class="col-md-6"> -->
               <!--  <div class="courses_round">
                        <p>2020年 <br>
                        4月 <br>
                        開校予定</p>
                </div> -->
               <!--  <div class="courses_back">
                    <div class="courses_head">
                        <img src="{{asset('public/client/images/logo/23.png')}}" width="100%;"> -->
                       <!--  <h1><i class="fa fa-pen"></i></h1>
                        <h2>{{__('language.Department_of_Art_and_Design')}}</h2>
                        <p>{{__('language.Art_Illust_Manga_Design')}}</p> -->
                   <!--  </div>
                    <div class="courses_title">
                        <h2 class="courses_title">ITビジネス国際学園 </h2>
                        <sub>IT Business</sub>
                    </div> -->
                   <!--  <div class="courses_body" style="margin-top: 57px;">
                        <h3>{{__('language.About_us')}}</h3>
                        <p>
                           {{__('language.Art_design')}}
                        </p>
                        <h6>システムソフトウェア開発</h6>
                        <h6>ネットワーク・サーバー</h6>
                        <h6>プログラミング・情報処理</h6>
                        <h6>IT基礎</h6>
                        <div class="course_link">
                            <p><a  class="course_link_a" href="{{url('document_request')}}">資料請求</a> </p>
                             <p><a href="#">Read More <i class="fa fa-angle-right"></i></a> </p>
                        </div>

                    </div> -->
               <!--  </div> -->
           <!--  </div> -->
            </div>
        </div>

    <div class="information">
        <div class="container">
            <div class="page_arrow" style="float:right; margin:-28px -9px;">
            <img src="{{url('public/page_arrow.png')}}" alt="" style="width:70px;">
        </div>
            <div class="information_body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="information_left">
                            <div class="information_img">
                                <div class="round_info">
                                    <h2 class="info_h2">Information</h2>
                                <p class="small_info">中美からのお知らせ</p>
                                </div>
                            </div>
                            @foreach($information as $info)
                            <div class="information_text">
                                <a href="{{url('information-list/').'/'.$info->id}}">
                                <p>@if($info->color=='blue')
                                        <b style="color: #55acee;font-weight: 100">{{$info->info_date}}</b>
                                    @else
                                        <b style="color: red;font-weight: 100">{{$info->info_date}}</b>
                                    @endif
                                    {{$info->title}}
                                </p>
                                </a>
                            </div>
                                @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="information_right">
                            <div class="information_r_text">
                                <p><a href="{{url('document_request')}}">資料請求</a></p>
                            </div>

                            <div class="row">
                                <div class="information_image">
                                    <div class="col-md-12">
                                        <img src="{{asset('public/client/images/information/art-business.jpg')}}" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                         <div class="information_bt">
                                               {{--<a href="#" class="btn btn-outline-light text-dark btn-sm">資料請求</a>--}}
                                         </div>
                                        </div>
                                       <div class="col-md-6 col-xs-6">
                                         <div class="information_bt">
                                            {{--<a href="#" class="btn btn-outline-light text-dark btn-sm">資料請求</a>--}}
                                         </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="information_dtls">
                                                <p><i class="fa fa-circle"></i> 入学案内・願書</p>
                                                    <p>※資料・送料とも無料</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="information_l_image">
                            <div class="cast_paper_left">
                                <a href="{{url('cast-paper')}}">
                                    <img src="{{asset('public/client/images/information/cast_paper.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="below_cast_paper">
                                <img src="{{asset('public/client/images/information/below_cast_paper.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="information_link">
                            <a href="{{url('information-list')}}" style="color: #000">一覧はこちら <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news">
        <div class="container">
            <div class="round_news">
                <h2 class="news_b">News</h2>
                <p class="news_strong">中美ニュース</p>
            </div>
            <div class="row">
                    @foreach($events as $event)
                <div class="col-md-6">
                 <div class="allnews">
                     <div class="news_img">
                         @if(isset($event->event_image))
                         <img src="{{asset('public/uploads/event').'/'.$event->event_image}}" alt="">
                         @else
                         <img src="{{asset('public/client/images/logo/default-image.jpg')}}" alt="">
                             @endif
                     </div>
                     <div class="news_content">
                         <p>
                          <b>{{str_limit($event->title, 20)}}</b>  {{$event->post_date}}
                         </p>
                         <p>
                             {!! str_limit($event->event_details, 110) !!}
                         </p>
                     </div>
                 </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
    <div class="Section_class">
        <div class="container">
            <div class="page_arrow" style="float:right; margin:-36px 78px;">
            <img src="{{url('public/page_arrow.png')}}" alt="" style="width:70px;">
           </div>
        <div class="b_ndf">
            <div class="round_star1">
                <h2>授業の様子</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="state_all_c">
                        <img src="{{asset('public/client/images/stateclass/tyamada.jpg')}}" alt="">
                        <p><strong>2018.9.14 </strong></p>
                        <p>{{__('language.Art_Course')}}</p>
                        <p><b>{{__('language.Art_Course_p')}}</b></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="state_all_c">
                        <img src="{{asset('public/client/images/stateclass/AB_1.jpg')}}" alt="">
                        <p><strong>2018.9.14 </strong></p>
                        <p>{{__('language.Art_Business_c')}}</p>
                        <!-- <p><b>{{__('language.Art_Business_c_p')}}</b></p> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="state_all_c">
                        <img src="{{asset('public/client/images/stateclass/jishu_seisaku.jpg')}}" alt="">
                        <p><strong> 2018.9.14 </strong></p>
                        <p>{{__('language.Independent_production')}}</p>
                        <p><b>{{__('language.Independent_production_p')}}</b></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="state_all_c">
                        <img src="{{asset('public/client/images/stateclass/design.jpg')}}" alt="">
                        <p><strong> 2018.9.14 </strong></p>
                        <p>{{__('language.Design_course')}}</p>
                        <p><b>{{__('language.Design_course_p')}}</b></p>
                    </div>
                    <a href="#">{{__('language.List_is_here')}} <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
            
        </div>
    </div>

    <div class="team">
        <div class="container">
            <div class="round_star2">
            <h2 class="round_star2_h2">卒業生の情報</h2>
            </div>
            <div class="row justify-content-md-center">
                @foreach($graduate as $graduation)
                    <div class="col-md-4">
                        <div class="team_all_c">
                            <img src="{{url('public/uploads/graduate').'/'.$graduation->image}}" alt="">
                            <p><strong>{{$graduation->pass}} {{$graduation->courses}}</strong></p>
                            <p class="j_P">{{$graduation->student}}</p>
                            <p><b>{!! $graduation->details  !!}</b></p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{url('student-graduate')}}" style="color: #000">一覧はこちら <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <div class="our_team">
        <div class="container">
            <div class="container">
             <div class="page_arrow" style="float:right; margin:-66px 78px;">
            <img src="{{url('public/page_arrow.png')}}" alt="" style="width:70px;">
            </div>
            <div class="round_star">
                <h2 class="team_h2"> Our Management </h2>
                <p class="our_ma_p">スタッフ紹介</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{url('management-team')}}">
                    <div class="team_all_c">
                        <img src="{{asset('public/client/images/logo/new_logo.png')}}" alt="">
                        <p class="j_P">マネージメント</p>
                        <p><b>Management</b></p>
                    </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="#">
                    <div class="team_all_c">
                        <img src="{{asset('public/client/images/logo/new_logo.png')}}" alt="">
                        <p class="j_P">スタッフ</p>
                        <p><b>Staff</b></p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                    <div class="team_all_c">
                        <img src="{{asset('public/client/images/logo/new_logo.png')}}" alt="">
                        <p class="j_P">講師</p>
                        <p><b>Teachers</b></p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
 <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_img">
                        <img src="{{asset('public/client/images/logo/history.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map_location">
        <div class="container">
            <div class="location_map">
                <div class="round_contact">
                    <h2 class="contact_b">Contact </h2>
                        <p class="contact_strong">お問い合わせ</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d103696.03853569832!2d139.5399141!3d35.689282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018eef7f696ebcb%3A0x567e46f366cd5e70!2z5a2m5qCh5rOV5Lq66YOh5bGx5a2m5ZySIOS4reWkrue-juihk-WtpuWckg!5e0!3m2!1sen!2snp!4v1556892010322!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    {{--<div class="newss">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="newss_contain">--}}
                        {{--<h2>関連バナー</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="newss_contain">--}}
                        {{--<h2>関連バナー</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="newss_contain">--}}
                        {{--<h2>関連バナー</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection
