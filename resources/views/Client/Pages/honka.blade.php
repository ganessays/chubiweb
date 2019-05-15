@extends('Client.Master.master')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="padding-left: 50px">
            <li class="breadcrumb-item"><a href="{{url('')}}">Home > </a></li>
            <li class="item"> &nbsp; 中央美術学園</li>
        </ol>
    </nav>
<div class="chubi_honka">
	<div class="container">
		<div class="row">
			<img src="{{asset('public/client/images/pageImg/Chubi_Honka.jpg')}}">
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-bottom: 20px;">
             <h2 class="access_title" style="padding-left:30px;"><img src="{{asset('public/client/images/pageImg/Chubi_Honka_pen.png')}}" width="40px"> 進路・進学 Career Guidance</h2>
        </div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="honka_table_top">
				<p>
			“好きなこと”を仕事に。
		好きなことを仕事にする。こんな幸せなことはありません。もちろん、その夢をかなえるのは
		簡単にはできないこと。実現するまでには、大変な道のりが待っているかもしれません。
		でも、好きなことなら、努力もできます。また、よき仲間、よき先輩、よき指導者に巡り会うことで、その道のりは、決してつらいことばかりにはならないでしょう。中央美術学園には、そのすべてがそろっています。あとは自分を信じるだけ。道は必ず開けます。勇気をもって、この世界に飛び込んできてください。

		</p>
			</div>
		</div>
	</div>
</div>



	
<div class="honka_table">
	<div class="container">
		<div class="h_table">
		<div class="row">
			<div class="left_aerow"></div>
			<h3 class="honka_table_h3">履修科目</h3>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="honka_table_content">
				<p>共通必修、専科必修枠、必修選択、自由選択をそれぞれ履修し単位を獲得します。</p>
				<img src="{{asset('public/client/images/pageImg/tChubi_Honka.jpg')}}">
				<ul>
					<li> <i class="fa fa-circle"></i> 共通必修：全コース必修科目です。</li>
					<li> <i class="fa fa-circle"></i> 専科必修：選択したコースの必修科目です。</li>
					<li> <i class="fa fa-circle"></i> 必修選択枠：自分の選んだコースの他に別のコースを1種以上選択し、そのコース専科科目を履修します。</li>
					<li> <i class="fa fa-circle"></i> 自由選択枠：その他全ての科目を履修可能です。</li>
				</ul>
			</div>	
			</div>		
		</div>
		<div class="container">
			<div class="row">
			<div class="left_aerow"></div>
			<h3 class="honka_table_h3">共通必修</h3>
			<div class="table_i_honka">
			  <img src="{{asset('public/client/images/pageImg/honka2.jpg')}}">
			</div>
		</div>
		<div class="row">
			<div class="left_aerow"></div>
			<h3 class="honka_table_h3">履修参考</h3>
			<div class="table_i_honka">
			<img src="{{asset('public/client/images/pageImg/honka3.jpg')}}">
			</div>
		</div>
		</div>
		</div>
	</div>
</div>

	


<div class="container">
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
  <div id="list-item-1">
		<div class="honka_left_scr">
		<img src="{{asset('public/client/images/pageImg/illa.jpg')}}">
	</div>
  </div>
  <div id="list-item-2">
  	<div class="honka_left_scr">
		<img src="{{asset('public/client/images/pageImg/honka02.jpg')}}">
	</div>
  </div>
  <div id="list-item-3">
  	<div class="honka_left_scr">
		<img src="{{asset('public/client/images/pageImg/honka03.jpg')}}">
	</div>
  </div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-bottom: 20px;">
         <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;"> 募集要項　Guidelines for Applicants</h2>
         </div>
         <div class="col-md-12">
         	<div class="honka_Las_a">
         		<p>
         		中央美術学園の募集要項は以下をご覧ください。
         	</p>
         	<a href="#">募集要項</a>
         	</div>
         </div>
	</div>
</div>

    @endsection