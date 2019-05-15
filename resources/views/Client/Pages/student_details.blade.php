@extends('Client.Master.master')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="padding-left: 50px">
            <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Graduation</li>
            <li class="breadcrumb-item active" aria-current="page"> {{$graduate->student}}</li>
        </ol>
    </nav>

   <div class="information_list">
       <div class="container">
           <div class="row">
               <div class="col-md-12" style="margin-bottom: 20px;">
                   <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">Graduation</h2>
               </div>
               <div class="col-md-4">
                    <div class="student_details">
                        <img src="{{url('public/uploads/graduate').'/'.$graduate->image}}" alt="">
                    </div>
               </div>
               <div class="col-md-8">
                    <div class="student_details_info">
                        <h5>{{$graduate->pass}}{{$graduate->courses}}</h5>
                        <h4>
                           {{$graduate->student}}
                        </h4>
                        <p>
                           {!! $graduate->details !!}
                        </p>
                        <h6><a href="{{url('student-graduate')}}">一覧はこちら</a></h6>
                    </div>
               </div>
           </div>
       </div>
   </div>


    @endsection