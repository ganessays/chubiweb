@extends('Client.Master.master')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="padding-left: 50px">
            <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">中美からのお知らせ</li>
        </ol>
    </nav>

   <div class="information_list">
       <div class="container">
           <div class="row">
               <div class="col-md-12" style="margin-bottom: 20px;">
                   <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">中美からのお知らせ Information</h2>
               </div>
               <div class="col-md-9">
                    <div class="information_details_right">
                        <h6>
                            @if($information->color=='blue')
                                <b style="color: #55acee;font-weight: 100">{{$information->info_date}}</b>
                            @else
                                <b style="color: red;font-weight: 100">{{$information->info_date}}</b>
                            @endif
                        </h6>
                        <p>{{$information->title}}</p>
                    </div>
                   <div class="information_img_rightt">
                       <img src="{{asset('public/client/images/information/honka1.jpg')}}" alt="">
                       <p>{!! $information->info_details !!}</p>
                       <h6><a href="{{url('information-list')}}">一覧はこちら </a></h6>
                   </div>
               </div>

               <div class="col-md-3">
                  <div class="info_left_slide_h2">
                      <h2>中美から</h2>
                  </div>
                   <div class="information_left_sidebar">
                       <p>2018.10.1</p>
                       <p>2018.10.1</p>
                       <p>2018.10.1</p>
                       <p>2018.10.1</p>
                       <p>2018.10.1</p>
                       <p>2018.10.1</p>
                       <p>2018.10.1</p>
                       <p>2018.10.1</p>
                   </div>
               </div>
           </div>
       </div>
   </div>


    @endsection