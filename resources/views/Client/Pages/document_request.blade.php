@extends('Client.Master.master')
@section('content')
    <h5 style="padding:15px; background-color: #f1eee4;"> Home > <b>資料請求</b> </h5>
    <div class="main_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">中央美術学園 資料請求　Request for Materials</h2>
                </div>
                <div class="col-md-7">
                    <h5 style="padding-bottom: 10px; border-bottom: 3px solid lightgrey;"><span style="color:#55acee; font-size: 20px;">●</span> 資料請求</h5>
                    <br>
                    <p>
                        <!--「2019」中央美術学園（造形芸術学科、アートビジネス）入学案内資料の配布を開始しました。<br>-->
                        <!--本校の資料は、代金・送料ともにすべて無料です。<br>-->
                        <!--．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．<br><br>-->
                        2019 学校案内書、募集要項、出願書類、入試問題集などのセットです。<br>
                        アートディレクションは、貞安剛氏〈デザインコース主任講師〉が担当。<br>
                        内容は『学校案内』『募集要項・出願書類』とそれぞれの役割をもたせ、必要な情報をわかりやすく分冊の形態としました。<br>

                        資料請求は下記の、「お申し込みはこちら」をクリックしてください。<br>

                    </p>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 20px; text-align: center;">
                            <img src="{{url('public/client/images/pageImg/ArtBusiness_H1-01.jpg')}}" alt="" style="width:100%;" class="img-thumbnail">
                            <a href="#" class="btn btn-outline-secondary btn-sm">造形芸術学科</a>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px; text-align: center;">
                            <img src="{{url('public/client/images/pageImg/Honka_H1.jpg')}}" alt="" style="width:100%;" class="img-thumbnail">
                            <a href="#" class="btn btn-outline-secondary btn-sm">アートビジネス</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <a style="padding:5px 30px; border-radius: 50px; background-color: #55acee; color:#fff;">お申し込みはこちら</a>
                    <br><br><br>
                    <p>
                        ※資料請求に際して登録頂きました個人情報の管理は、本校進路課、教務課が責任を持っておこないます。<br>
                        ご登録頂いた住所・氏名・通学校名・その他の個人情報は<br>
                        <br><br>
                        ・関連資料の発送<br>
                        ・学校からのお知らせ<br>
                        ・個人を特定しない統計的集計<br>
                        ・匿名アンケート用紙の送付<br>
                        <br><br>
                        をおこなうために利用いたします。予めご了承ください。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="main_page">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12" style="margin-bottom: 20px;">-->
    <!--                <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">ITビジネス国際学園 資料請求　Request for Materials</h2>-->
    <!--            </div>-->
    <!--            <div class="col-md-9">-->
    <!--                <h5 style="padding-bottom: 10px; border-bottom: 3px solid lightgrey;"><span style="color:#55acee; font-size: 20px;">●</span> 資料請求</h5>-->
    <!--                <br>-->
    <!--                <p>-->
    <!--                    「2019」ITビジネス国際学園入学案内資料の配布を開始しました。<br>-->
    <!--                    本校の資料は、代金・送料ともにすべて無料です。<br>-->
    <!--                    ．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．．<br><br>-->

    <!--                    2019 学校案内書、募集要項、出願書類、入試問題集などのセットです。<br>-->
    <!--                    アートディレクションは、貞安剛氏〈デザインコース主任講師〉が担当。<br>-->
    <!--                    内容は『学校案内』『募集要項・出願書類』とそれぞれの役割をもたせ、必要な情報をわかりやすく分冊の形態としました。<br><br>-->
    <!--                    資料請求は下記の、「お申し込みはこちら」をクリックしてください。<br>-->

    <!--                </p>-->
    <!--            </div>-->
    <!--            <div class="col-md-3" style="margin-bottom: 20px; text-align: center;">-->
    <!--                        <img src="{{url('public/client/images/pageImg/normal_default.jpg')}}" alt="" style="width:100%;" class="img-thumbnail">-->
    <!--                        <a href="#" class="btn btn-outline-secondary btn-sm">ITビジネス国際学園</a>-->
    <!--            </div>-->
    <!--            <div class="col-md-12" style="margin-bottom: 20px;">-->
    <!--                <a style="padding:5px 30px; border-radius: 50px; background-color: #55acee; color:#fff;">お申し込みはこちら</a>-->
    <!--                <br><br><br>-->
    <!--                <p>-->
    <!--                    ※資料請求に際して登録頂きました個人情報の管理は、本校進路課、教務課が責任を持っておこないます。<br>-->
    <!--                    ご登録頂いた住所・氏名・通学校名・その他の個人情報は<br><br>-->
    <!--                    ・関連資料の発送<br>-->
    <!--                    ・学校からのお知らせ<br>-->
    <!--                    ・個人を特定しない統計的集計<br>-->
    <!--                    ・匿名アンケート用紙の送付<br><br>-->
    <!--                    をおこなうために利用いたします。予めご了承ください。<br>-->

    <!--                </p>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


@endsection