@section('nav_footer')
    <div class="chubi_contact">
        <div class="page_arrow" style="float:right; margin:-65px 78px;">
            <img src="{{url('public/page_arrow.png')}}" alt="" style="width:50px;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="chubi_contact_img">
                        <a href="{{url('home')}}"><img src="{{asset('public/client/images/logo/f_logo.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="contact_documents">
                    <a class="contact_doc_us" href="#">{{__('language.Contact_Us')}}</a>
                    <a class="Document_request_a" href="{{url('document_request')}}">{{__('language.Document_request')}}</a>
                   </div>
                </div>
                <div class="col-md-5">
                    <div class="social_icon">
                    <a href="#"><img src="{{asset('public/client/images/icon/line.png')}}"></a>
                    <a href="https://www.instagram.com/explore/tags/%E4%B8%AD%E5%A4%AE%E7%BE%8E%E8%A1%93%E5%AD%A6%E5%9C%92/">
                        <img src="{{asset('public/client/images/icon/insta.png')}}">
                    </a>
                    <a href="https://www.facebook.com/chubiartschool/">
                        <img src="{{asset('public/client/images/icon/facebook.png')}}">
                    </a>
                    <a href="https://twitter.com/search?q=%E4%B8%AD%E5%A4%AE%E7%BE%8E%E8%A1%93%E5%AD%A6%E5%9C%92&src=typd"><img src="{{asset('public/client/images/icon/twitter.png')}}"></a>
                </div>
                </div>
            </div>
        </div>
    </div>

<div class="chubi_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="fotter_list">
                    <li><a href=""><i class="fa fa-circle"></i> よくある質問</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> 保護者の方・在学生へ</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> 卒業生の方へ</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> 本学教職員の方へ</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> 個人情報保護について</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> 特定個人情報等の取扱いに <br>関する基本方針</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> このサイトについて</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> 公益通報について</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> 一般事業主行動計画</a></li>
                    <li><a href=""><i class="fa fa-circle"></i> 事業・財務状況</a></li>
                </div>
            </div>
            <div class="col-md-9">
               <div class="second_nf">
                    <div class="row">
                    <div class="col-md-4">
                         <h3 class="footer-heading mb-4"><i class="fa fa-circle"></i> 中央美術学園とは</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">  中央美術学園のあゆみ</a></li>
                                <li><a href="#"> 教育職員紹介</a></li>
                                <li><a href="#"> 校舎設備</a></li>
                            </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="footer-heading mb-4"><i class="fa fa-circle"></i> 学科紹介 </h3>
                            <ul class="list-unstyled">
                                <li><a href="#">  造形芸術学科
                                                                                    　アートコース／イラストコース
                                                                                    　 デザインコース
                                                                                    </a></li>
                                <!-- <li><a href="#">  アートビジネスコース</a></li> -->
                            </ul>
                    </div>
                    <div class="col-md-4">
                         <h3 class="footer-heading mb-4"><i class="fa fa-circle"></i> 進学・進路</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">  就職・求人会社一覧</a></li>
                            <li><a href="#">  卒業生紹介</a></li>
                            <li><a href="#">  人事採用担当者の方へ</a></li>
                            <li><a href="#">  卒業生対象の求人情報</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="footer-heading mb-4"><i class="fa fa-circle"></i> 入学案内</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">  造形芸術学科募集要項</a></li>
                               
                                <li><a href="#">  授業料</a></li>
                                <li><a href="#">  就学案内</a></li>
                                <li><a href="#">  学生寮の紹介</a></li>
                            </ul>
                    </div>
                    <div class="col-md-4">
                         <h3 class="footer-heading mb-4"><i class="fa fa-circle"></i> アクセス</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">  武蔵関駅からのアクセス</a></li>
                                <li><a href="#">  吉祥寺駅からのアクセス</a></li>
                            </ul>
                    </div>
                    <div class="col-md-4">
                         <h3 class="footer-heading mb-4"><i class="fa fa-circle"></i> 関連サイト</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://www.best-shingaku.net/senmon/school1162/">  ベスト進学ネット</a></li>
                        </ul>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
    <div class="copy_right">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright © Koriyama Gakuen Educational Foundation</p>
                </div>
            </div>
        </div>
    </div>
    @endsection