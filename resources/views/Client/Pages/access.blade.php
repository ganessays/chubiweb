@extends('Client.Master.master')
@section('content')
<div class="main_page">
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="access_img">
    				<img src="{{asset('public/client/images/pageImg/access.jpg')}}" alt="">
    			</div>
				<span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">アクセス / Access</h2>
    			<p>● 所在地　〒177-0051 東京都練馬区関町北 2-34-12　TEL:03-3929-1230   FAX:03-5991-7236</p>
    	
    		<div class="Access_map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3905842.9312736755!2d134.94639367870334!3d36.49545743066954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2sJapan!5e0!3m2!1sen!2snp!4v1550136414990" width="100%" height="300px;" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
        </div>
    	</div>
    </div>

    <div class="Access_route">
    	<div class="container">
    		<h2 class="Access_route_title">アクセス路線</h2>
    		<div class="row">
    			<div class="col-md-2"> 
    				<h2 class="Access_route_title2">西武新宿線から：</h2>
				</div>
				<div class="col-md-4"> 
					<div class="access_router_mid">
						<p>西武新宿線「武蔵関駅」 南口下車（改札を抜けて右手側）駅の階段を降り、右手側の「駅前通り商店街」を抜けて線路沿いに直進。駅から徒歩4分。
					</p>
					<img src="{{asset('public/client/images/pageImg/access_route.jpg')}}" alt="">
					<p class="route_p">武蔵関駅南口</p>
					</div>
				</div>
				<div class="col-md-6"> 
					<div class="route_location">
						<img src="{{asset('public/client/images/pageImg/center_art_location.jpg')}}" alt="">
					</div>
				</div>
    		</div>
    		<div class="row">
    			<div class="col-md-2">
    				<h2 class="Access_route_title2">▪吉祥寺から：</h2>
    			</div>
    			<div class="col-md-10">
    				<p>
    					JR中央線、京王井の頭線「吉祥寺駅」北口バスロータリーより西武バス乗車（吉61、吉62、吉66番いずれか）
						約18分。「武蔵関駅入口」下車、バス停から徒歩6分。
    				</p>
    			</div>
    		</div>
    	</div>            	
    </div>
</div>
@endsection
