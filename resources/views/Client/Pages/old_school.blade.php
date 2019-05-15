@extends('Client.Master.master')
@section('content')

    <div class="main_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="access_img">
                        <img src="{{asset('public/client/images/pageImg/cover_school.jpg')}}" alt="">
                    </div>
                    <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">学校 / School</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">建学宣言　Declaration of construction</h2>
                </div>
                <div class="col-md-9">
                    <p>
                        われわれの最高の生きがいは芸術である。<br>
                        ここに芸術への情熱に燃え続ける人間の一団がある。<br>
                        それが中央美術学園である。ここでは官製の肩書きも特権も通用しない。<br>
                        通用するのは実力だけであり、それを支持するのは自由と情熱である。<br>
                        思索は無限に自由である。しかし行動は無限でありえない。<br>
                        社会生活における行動はすべて社会の制約を受ける。<br>
                        そこに行動の自由の限界がある。<br>
                        この制約される行動と無制限の思念とが調和されるところに完全な自由がある。<br>
                        われらは芸術を追求することによって思念と行動を調和させ、<br>
                        完全な自由の中に生きようとするものである。<br>
                        自由は責任を伴わなければならない。<br>
                        自己の主張する自由に責任を負うところに自主性が成立する。<br>
                        われらの学園には勉強の強制はない。<br>
                        学問も制作も研究することそのことが目的である。<br>
                        芸術の追求は自由の実践であると共に、追求の生活そのものがわれらの生きがいであり、<br>
                        最高の喜びであらねばならない。<br>
                        この自主的研究を支持するものとして情熱がある。<br>
                        情熱とは感情のたかまるところであり、生命の激しく燃焼することである。<br>
                        感情のたかまるところ沈滞もだるさもない。<br>
                        生命の激しく燃焼するとき、すべての不純物は焼きつくされる。<br>
                        ここには、苦労も享楽もない。<br>
                        有るものは発見の驚き、成長の歓喜、そして追求による生命の躍動。<br>
                        ここでは天才者が年限によってしばられることなく、<br>
                        遅鈍者が未熟のまま突き出されることもない。<br>
                        速成必ずしも尊ばれず、遅鈍必ずしも軽蔑しない。<br>
                        われらは芸術を愛し、愛することによって、生きがいを感ずるのである。<br>
                        愛する者の悩みと喜び、これこそわれらの生活である。<br>
                        芸術の世界を動かすものは自由と情熱である。<br>
                        情熱は感動であり、芸術は感動の表現である。<br>
                        自由は情熱をたかめ、情熱は研究を進め実力をたかめる。<br>
                        若さのもつ美しい情熱はあらゆる困難を押し切ってゆく。<br>
                        尊き青春の一瞬を無駄にすることなく、<br>
                        若き情熱のすべてを芸術の一点に集中せしめる、<br>
                        芸術一路、求道の集団をつくりたい。<br><br><br><br>
                        初代学校長・郡山三郎<br>
                        昭和22年11月3日、学園創立に言す）
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="school_img_section">
                        <img src="{{url('public/client/images/pageImg/school_01.jpg')}}" alt="" class="img-thumbnail">
                        <p style="font-size: 12px;">機関紙創刊号 1948年（昭和23年）3月6日</p>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="school_img_section">
                        <img src="{{url('public/client/images/pageImg/school_02.jpg')}}" alt="" class="img-thumbnail">
                        <p style="font-size: 12px;">改訂版美術講座表紙　表紙デザイン・新島実</p>
                    </div>
                    <div style="clear: both; margin-bottom: 10px;"></div>
                    <div class="school_img_section">
                        <img src="{{url('public/client/images/pageImg/school_03.jpg')}}" alt="" class="img-thumbnail">
                        <p style="font-size: 12px;">月間「中美」最終号324号　表紙絵・北村智</p>
                    </div>
                    <div style="clear: both; margin-bottom: 10px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="school_history">
        <div class="page_arrow" style="float:right; margin:-65px 250px;">
            <img src="{{url('public/page_arrow.png')}}" alt="" style="width:50px;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">歴史　History</h2>
                </div>
                <div class="col-md-12">
                    <b><span style="color:#55acee; font-size: 20px;">●</span> 中央美術学園の歩み</b>
                    <br><br>
                    <p style="text-align: justify; margin-bottom: 30px;">
                        中央美術学園は1947年（昭和22年）に帝国美術学校（現武蔵野美術大学）の若き指導者だった郡山三郎が日本で最初と思われる美術通信教育機関として創立しました。芸術を生み出す感動が原点。一歩でも理想的な美術学校へ近づこうと、常に自由で新しくをモットーに前進発展。教育機関として独自の活動を実践し、2017年に創立70周年をむかえました。
                    </p>
                    <table>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1947</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">9</td>
                            <td style="padding:0 50px;"><p>学園創立宣言 絵画の通信教育機関として発足
                                    <br>
                                    学園長：郡山三郎<br>
                                    指導者：郡山三郎、今泉篤男、岡鹿之助、岡田謙三、児島善三郎、清水多嘉示、田中一松、中島健蔵、<br>
                                    　　　　西田正秋、野口弥太郎、福田豊四郎、岡田堅二、吉川逸治
                                </p></td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="2" style="width:80px; text-align: left;">▪1951</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>通学部絵画科学生募集開始
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">11</td>
                            <td style="padding:0 50px;"><p>各支部が連合し学友会を結成、「学友」第1号発行
                                </p>
                                <img src="{{url('public/client/images/pageImg/Gakuyuu.jpg')}}" alt="" style="width:100px;">
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="3" style="width:80px; text-align: left;">▪1952</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">5</td>
                            <td style="padding:0 50px;"><p>第1回卒業生誕生
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">5</td>
                            <td style="padding:0 50px;"><p>中央美術協会創立、会長 児島善三郎
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">9</td>
                            <td style="padding:0 50px;"><p>第1回中央美術協会展開催、会場 東京日本橋白木屋
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="2" style="width:80px; text-align: left;">▪1955</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>月刊誌｢中美」発刊
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">12</td>
                            <td style="padding:0 50px;"><p>東京都より各種学校として認可
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1957</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>デザイン科増設学生募集開始、同時に彫刻科を新設、別科として児童絵画科、書道科設置</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1959</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">6</td>
                            <td style="padding:0 50px;"><p>灘波田龍起特別講義「抽象絵画について」</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1962</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>田中一光特別実技実習</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1963</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">5</td>
                            <td style="padding:0 50px;"><p>永井一正特別講義「アメリカの広告」</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1963</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">10</td>
                            <td style="padding:0 50px;"><p>練馬区関町3丁目812番地に新校舎（旧校舎）建設開始</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1964</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">8</td>
                            <td style="padding:0 50px;"><p>新校舎（旧校舎）完成</p>
                                <img src="{{url('public/client/images/pageImg/cover_school_01.png')}}" alt="" style="width:80%;">
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1971</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">11</td>
                            <td style="padding:0 50px;"><p>創立24周年学園祭　記念講演　木村恒久</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1973</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">11</td>
                            <td style="padding:0 50px;"><p>美術講座24巻全面改訂編集刊行開始　表紙デザイン　新島実</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1975</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">11</td>
                            <td style="padding:0 50px;"><p>創立28周年学園祭　記念講演　柳宗理「アノニマスとモダンアート」</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1976</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">6</td>
                            <td style="padding:0 50px;"><p>専修学校法により専門学校認可</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <td colspan="1"></td>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1978</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">5</td>
                            <td style="padding:0 50px;"><p>学校法人郡山学園登記完了　理事長　郡山三郎</p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="3" style="width:80px; text-align: left;">▪1982</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">2</td>
                            <td style="padding:0 50px;">
                                <p>
                                    創立者　郡山三郎逝去
                                </p>
                            </td>
                            <td rowspan="3">
                                <img src="{{url('public/client/images/pageImg/main.jpg')}}" alt="" style="width:20%;">
                            </td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;"></td>
                            <td style="padding:0 50px;"><p>郡山三郎　永年の美術教育の功労により叙勲 勲6等単光旭日章
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">5</td>
                            <td style="padding:0 50px;"><p>理事長　郡山鐡郎　就任
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1985</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>通信教育部募集停止　最終入学者総数16,100名
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1992</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">10</td>
                            <td style="padding:0 50px;"><p>創立45年記念事業をブルガリア・ソフィア大学心理学教室との共催で<br>
                                    「翼を持った子供たちー創造と自由」展をソフィア市で開催
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="2" style="width:80px; text-align: left;">▪1993</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>創立45年記念事業「翼を持った子供たちー創造と自由」展を<br>
                                    目黒美術館市民ギャラリーで開催
                                </p>
                            </td>
                            <td rowspan="2">
                                <img src="{{url('public/client/images/pageImg/school_img-001.jpg')}}" alt="" style="width:50%;">
                            </td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">9</td>
                            <td style="padding:0 50px;"><p>創立45年記念事業「翼を持った子供たちー創造と自由」展を<br>
                                    神戸さんちかホールで開催
                                </p>
                            </td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="2" style="width:80px; text-align: left;">▪1996</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">10</td>
                            <td style="padding:0 50px;"><p>空山基　特別講義
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">2</td>
                            <td style="padding:0 50px;"><p>第1回全学合同作品講評会開催<br>
                                    第1回イラストコース作品展（原宿）

                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1997</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>マンガコース開設、創立50周年学園祭
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1998</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">10</td>
                            <td style="padding:0 50px;"><p>中美アートサークル設立
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪1999</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">6</td>
                            <td style="padding:0 50px;"><p>卒業生空山基がデザインしたペットロボットAIBO発売開始
                                </p>
                            </td>
                            <td colspan="1">
                                <img src="{{url('public/client/images/pageImg/vol2-01.jpg')}}" alt="" style="width:50%;">
                            </td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2000</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>第1回板橋区立美術館イラストフリマ大会参加（サークル）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2002</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">8</td>
                            <td style="padding:0 50px;"><p>第1回新島ガラス工房研修旅行
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2003</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">6</td>
                            <td style="padding:0 50px;"><p>亀戸アートイラストフリマ大会参加（サークル）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2004</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">2</td>
                            <td style="padding:0 50px;"><p>デザインフェスタ参加（サークル）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2005</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">3</td>
                            <td style="padding:0 50px;"><p>中美アートサークル第１回作品展
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2007</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">11</td>
                            <td style="padding:0 50px;"><p>創立60周年学園祭
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2008</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">3</td>
                            <td style="padding:0 50px;"><p>校友会展開催（武蔵関ギャラリー）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2009</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">9</td>
                            <td style="padding:0 50px;"><p>学生作品展開催（NHKギャラリー）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>

                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2010</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">1</td>
                            <td style="padding:0 50px;"><p>吉祥寺アートセンター設立
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="2" style="width:80px; text-align: left;">▪2011</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">9</td>
                            <td style="padding:0 50px;"><p>東京都練馬区関町北２丁目34番地に新校舎建設 ９月移転
                                </p>
                            </td>
                            <td rowspan="2">
                                <img src="{{url('public/client/images/pageImg/school_building.jpg')}}" alt="" style="width:50%;">
                            </td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">10</td>
                            <td style="padding:0 50px;"><p>第1回むさしせき公園写生大会主催
                                </p>
                            </td>
                        </tr>

                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2012</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">1</td>
                            <td style="padding:0 50px;"><p>吉祥寺アートプロジェクト開催<br>
                                    （〜2013まで。毎月、吉祥寺各所のギャラリーやカフェを<br>
                                    会場にして学生や卒業生、講師の作品展を開催）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>

                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="5" style="width:80px; text-align: left;">▪2013</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>デザインフェスタ参加（全学）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">6</td>
                            <td style="padding:0 50px;"><p>アニメコース開設
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">7</td>
                            <td style="padding:0 50px;"><p>星槎学園高校生の授業受入開始
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">11</td>
                            <td style="padding:0 50px;"><p>土曜こども絵画造形教室開設
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">3</td>
                            <td style="padding:0 50px;"><p>日曜絵画教室開設
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>

                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="2" style="width:80px; text-align: left;">▪2014</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>練馬アニメーション協議会正会員に加盟
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">6</td>
                            <td style="padding:0 50px;"><p>カナダの映像専門学校NADセンターと姉妹校提携調印
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>

                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="3" style="width:80px; text-align: left;">▪2015</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>アニ玉祭参加（全学・大宮）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>アートビジネスコース開設<br>
                                    同時に留学生の受け入れも開始
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">8</td>
                            <td style="padding:0 50px;"><p>中国の清華大学生19人がサマースクールに参加
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2016</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">7</td>
                            <td style="padding:0 50px;"><p>中国人気アニメ「泰時名月」のプロヂューサー、制作会社が来校）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td rowspan="2" style="width:80px; text-align: left;">▪2017</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">3</td>
                            <td style="padding:0 50px;"><p>中美3月展（在校生、卒業生、講師の合同作品展）開催（吉祥寺）
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">4</td>
                            <td style="padding:0 50px;"><p>創立70周年
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>
                        <tr style="border-top:1px solid #c8c6c3;">
                            <td style="width:80px; text-align: left;">▪2018</td>
                            <td style="width:60px; text-align: center; background-color: #e1dcd6;">8</td>
                            <td style="padding:0 50px;"><p>理事長　カドカ・インドラ・バハドゥル　就任
                                </p>
                            </td>
                            <td colspan="1"></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="main_page">
        <div class="container">
            <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">校舎設備　School Facilities</h2>
            <div class="row">
                <div class="col-md-4">
                    <b><span style="color:#55acee; font-size: 20px;">●</span> 環境に恵まれた立地</b>
                    <p>
                        校舎のすぐそばにボート池で有名な武蔵関公園があり、授画を描いたり、休み時間の気分転換にも最適です。校舎前の桜並木の通りは4月にはピンク色に囲まれ、自然環境の恵みを受けながら落ち着いて学べます。
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="{{url('public/client/images/pageImg/tyamada.jpg')}}" alt="" class="img-thumbnail">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a style="padding:5px 30px; border-radius: 50px; background-color: #55acee; color:#fff;">1F</a>
                    <img src="{{url('public/client/images/pageImg/ko_1.png')}}" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                   <div class="chubi_school">
                       <h5 style="border-bottom: 2px solid lightgrey; padding-bottom: 7px;">図書室</h5>
                       <div class="school_c_image">
                           <img src="{{url('public/client/images/pageImg/chubi1.jpg')}}" alt="" class="img-thumbnail">
                       </div>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem esse neque odit unde! Animi beatae, deleniti dicta, dolores eos libero minima, necessitatibus non repellat reprehenderit tempora temporibus vel veniam vitae.
                       </p>
                   </div>

                    <div class="chubi_school">
                        <h5 style="border-bottom: 2px solid lightgrey; padding-bottom: 7px;">図書室</h5>
                        <div class="school_c_image">
                            <img src="{{url('public/client/images/pageImg/chubi1.jpg')}}" alt="" class="img-thumbnail">
                        </div>
                        <p>
                            ●●●●●●●●●●●●●●●●●●●●●●● ●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●
                        </p>
                    </div>

                    <div class="chubi_school">
                        <h5 style="border-bottom: 2px solid lightgrey; padding-bottom: 7px;">図書室</h5>
                        <div class="school_c_image">
                            <img src="{{url('public/client/images/pageImg/chubi1.jpg')}}" alt="" class="img-thumbnail">
                        </div>
                        <p>
                            ●●●●●●●●●●●●●●●●●●●●●●● ●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <span style="background-color: #92c5ea; width:12px; height:41px; padding:0; margin:0; float: left;"></span><h2 class="access_title" style="padding-left:30px;">校舎設備　School Facilities</h2>
                </div>
                <div class="col-md-4">
                    <b><span style="color:#55acee; font-size: 20px;">●</span> 環境に恵まれた立地</b>
                    <br><br>
                    <p style="text-align: justify;">
                        校舎のすぐそばにボート池で有名な武蔵関公園があり、授業でスケッチや風景画を描いたり、休み時間の気分転換にも最適です。校舎前の桜並木の通りは4月にはピンク色に囲まれ、自然環境の恵みを受けながら落ち着いて学べます。
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="{{url('public/client/images/pageImg/tyamada.jpg')}}" alt="" class="img-thumbnail">
                </div>
            </div>
            <div class="row" style="margin-top: 30px; ">
                <div class="col-md-4" style="text-align: center;">
                    <div class="col-md-12" style=" margin-bottom:20px;">
                        <a style="padding:5px 30px; border-radius: 50px; background-color: #55acee; color:#fff;">1F</a>
                    </div>
                    <div class="col-md-12">
                        <img src="{{url('public/client/images/pageImg/ko_1.png')}}" alt="" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-8">
                    <h5 style="border-bottom: 2px solid lightgrey; padding-bottom: 7px;">図書室</h5>
                    <div style="height:200px; width:35%; float:left; background-color: lightgrey;">

                    </div>
                    <div style="float: right; padding-left:20px;">
                        <p style="text-align: justify;">
                            ●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                    <h5 style="border-bottom: 2px solid lightgrey; padding:30px 0 7px;">購買コーナー</h5>
                    <div style="height:200px; width:35%; float:left; background-color: lightgrey;">

                    </div>
                    <div style="float: right; padding-left:20px;">
                        <p style="text-align: justify;">
                            ●●●●●●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●
                            ●●●●
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                </div>

            </div>
            <div class="row" style="margin-top: 70px; ">
                <div class="col-md-4" style="text-align: center;">
                    <div class="col-md-12" style=" margin-bottom:20px;">
                        <a style="padding:5px 30px; border-radius: 50px; background-color: #55acee; color:#fff;">2F</a>
                    </div>
                    <div class="col-md-12">
                        <img src="{{url('public/client/images/pageImg/ko_2.png')}}" alt="" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-8">
                    <h5 style="border-bottom: 2px solid lightgrey; padding-bottom: 7px;">実習室</h5>
                    <div style="height:200px; width:35%; float:left; background-color: lightgrey;">

                    </div>
                    <div style="float: right; padding-left:20px;">
                        <p style="text-align: justify;">
                            ●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●●●
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                    <h5 style="border-bottom: 2px solid lightgrey; padding:30px 0 7px;">ラウンジ（自習室）</h5>
                    <div style="height:200px; width:35%; float:left; background-color: lightgrey;">

                    </div>
                    <div style="float: right; padding-left:20px;">
                        <p style="text-align: justify;">
                            ●●●●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●
                            ●●●●
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                </div>

            </div>
            <div class="row" style="margin-top: 70px; ">
                <div class="col-md-4" style="text-align: center;">
                    <div class="col-md-12" style=" margin-bottom:20px;">
                        <a style="padding:5px 30px; border-radius: 50px; background-color: #55acee; color:#fff;">3F</a>
                    </div>
                    <div class="col-md-12">
                        <img src="{{url('public/client/images/pageImg/ko_3.png')}}" alt="" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-8">
                    <h5 style="border-bottom: 2px solid lightgrey; padding-bottom: 7px;">MACルーム</h5>
                    <div style="height:200px; width:35%; float:left; background-color: lightgrey;">

                    </div>
                    <div style="width:65%; float: right; padding-left:20px;">
                        <p style="text-align: justify;">
                            パソコン（アップル社／iMac等）、プロのデザイナーやイラストレーターが活用しているソフトウェア（イラストレーター、フォトショップ、インデザイン等）、デジタルカラーコピー出力機、大判デジタルカラープリンター等、デジタル時代に対応した機器を着々と整備しています。
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                    <h5 style="border-bottom: 2px solid lightgrey; padding:30px 0 7px;">アートビジネス教室</h5>
                    <div style="height:200px; width:35%; float:left; background-color: lightgrey;">

                    </div>
                    <div style="float: right; padding-left:20px;">
                        <p style="text-align: justify;">
                            ●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●
                            ●●●●●●●●●●●●●●●●●●●●●●●●
                            ●●●●
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                </div>

            </div>
        </div>
    </div>

@endsection