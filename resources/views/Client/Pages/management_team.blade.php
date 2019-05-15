@extends('Client.Master.master')
@section('content')
<div class="main_page">
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
				<span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">Our Management</h2>


        </div>
    	</div>
    </div>
</div>
<div class="our_team" style="margin-bottom: 80px;">
	<div class="container">
		<div class="container">
			<div class="round_star">
				<h2 class="team_h2"> Our Management </h2>
				<p class="our_ma_p">スタッフ紹介</p>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="team_all_c">
						<img src="{{asset('public/client/images/team/indra.jpg')}}" alt="">
						<p><strong>理事長 </strong></p>
						<p class="j_P">カドカ・インドラ・バハドゥル</p>
						<p><b>Khadka Endra Bahadur</b></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team_all_c">
						<img src="{{asset('public/client/images/team/Yasunuma_Asanuma.jpg')}}" alt="">
						<p><strong>学校長 </strong></p>
						<p class="j_P">浅沼　泰</p>
						<p><b>Yasunuma Asanuma</b></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team_all_c">
						<img src="{{asset('public/client/images/team/ishikkawa.jpg')}}" alt="">
						<p><strong>学校長代理 </strong></p>
						<p class="j_P">石川浩太郎</p>
						<p><b>Koutarou Ishikawa </b></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team_all_c">
						<img src="{{asset('public/client/images/team/Sadayasu.jpg')}}" alt="">
						<p><strong>副校長 </strong></p>
						<p class="j_P">貞安 剛</p>
						<p><b>Go Sadayasu</b></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
