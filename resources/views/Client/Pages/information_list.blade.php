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