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
                   <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">Graduation</h2>
               </div>
           </div>
           <div class="row">
               @foreach($graduate as $graduation)
               <div class="col-md-3">
                       <a href="{{url('student-details/view/').'/'.$graduation->id}}">
                       <div class="graduate_details">
                           <img src="{{url('public/uploads/graduate').'/'.$graduation->image}}" alt="">
                           <p>{{$graduation->pass}}{{$graduation->courses}}</p>
                           <h6>{{$graduation->student}}</h6>
                       </div>
                   </a>
               </div>
               @endforeach
           </div>


       </div>
   </div>


    @endsection