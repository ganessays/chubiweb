@extends('Client.Master.master')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="padding-left: 50px">
            <li class="breadcrumb-item"><a href="{{url('')}}">Home ></a></li>
            <li class="item">&nbsp;体験授業プログラム/学校説明会 > 学校説明会お申し込みフォーム</li>
        </ol>
    </nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin-bottom: 20px;">
				<span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">学校説明会お申し込みフォーム　School Briefing Application Form 
				</h2>
			</div>
		</div>
	</div>
<!-- me -->
<div class="container">
	<div class="row">
		@if(session('success'))
                    <div class="col-sm-12">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-success">Success</span> {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                @endif
                @if($errors->any())
                    <div class="col-sm-12">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            @foreach($errors->all() as $error)
                                <span class="badge badge-pill badge-danger">Error</span> {{$error}}<br>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                @endif
	</div>
</div>
<!--  -->

<!--  -->
<div class="full_design_g_u_application">
	<div class="container">
		<form action="" method="post">
			{{csrf_field()}}
		<div class="row" id="application_form_s">
			<div class="col-4">
				<p class="application_f">学校説明会希望日</p>
			</div>
			<div class="col-8">
				<select class="form-control" name="meeting">
					<option value="">日付を選択 ..</option>
					<option value="2019/5/26 (日)">2019/5/26 (日)</option>
					<option value="2019/6/16(日)">2019/6/16(日)</option>
					<option value="2019/6/30(日)">2019/6/30(日)</option>
					<option value="2019/7/28(日)">2019/7/28(日)</option>
					<option value="2019/8/10 (土)">2019/8/10 (土)</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<p class="application_f">国籍区分</p>
			</div>
			<div class="col-8">
				<div class="form-check">
					<input type="radio" name="nationality" value="japanese"> 日本国籍 (Japanese)
					<input type="radio" name="nationality" value="foreign"> 外国籍 (Foreign)
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<p class="application_f">氏　名</p>
			</div>
			<div class="col-8">
				<input type="text" name="first_name" class="form-control">
				<label>（例：中美　太郎／Chubi Taro）　※日本人の方は漢字記入、外国人の方は英語でお願します。</label>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<p class="application_f">フリガナ</p>
			</div>
			<div class="col-8">
				<input type="text" name="furigana" class="form-control">
				<label>（例：チュウビ　タロウ）　</label>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<p class="application_f">フリガナ</p>
			</div>
			<div class="col-8">
				<div class="form-check">
					<input type="radio" name="furigana2" value="male"> 男性
  					<input type="radio" name="furigana2" value="female"> 女性
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<p class="application_f">住　所</p>
			</div>
			<div class="col-8">
				<label>郵便番号（例：1170051）</label>
				<input type="text" name="street_address" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-4">
			</div>
			<div class="col-8">
				<label>住所（例：東京都練馬区関町北）</label>
				<input type="text" name="address" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-4">
			</div>
			<div class="col-8">
				<label>番地 ／ 建物名 ／ 部屋番号（例：2-34-12　中美ハイツ　101）</label>
				<input type="text" name="building_name" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<p></p>
			</div>
			<div class="col-8">
				<label>電話番号</label>
				<input type="text" name="phone_number" class="form-control">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-4">
				<p class="application_f">メールアドレス</p>
			</div>
			<div class="col-8">
				<input type="email" name="mail_address" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<p class="application_f">修学歴</p>
			</div>
			<div class="col-8">
				<label>区分（例：県立、私立、大検、海外、その他）</label>
				<input type="text" name="school_history" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-4">
			</div>
			<div class="col-8">
				<label>学校名</label>
				<input type="text" name="school_name" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-4">
			</div>
			<div class="col-8">
				<label>現在（例：在学中二年、卒業、中退、その他）</label>
				<input type="text" name="graduation" class="form-control">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-4">
				<p class="application_f">備　考</p>
			</div>
			<div class="col-8">
				<label>補足事項や質問があればご記入ください。</label>
				<textarea class="form-control" name="message" cols="3" rows="6"></textarea>
			</div>
		</div>
		<div class="row col">
				<p class="border_b_t">※個人情報について
			ご記入いただきました「お名前・ご住所」などの個人情報は、適切な安全対策のもとに管理し、学校情報案内以外の目的で使用することはありません。</p>
			
</div>
<div class="row justify-content-md-center">
	<div class="col-2">
		<button type="submit" class="btn btn-primary">送信する</button>
	</div>
	<br><br><br>
</div>

</form>
<style>
	.btn-primary {
    color: #f5faff;
    background-color: #1ea6df;
    border-color: #1ea6df;
    padding: 5px 72px;
}
</style>
	</div>
</div>

    @endsection