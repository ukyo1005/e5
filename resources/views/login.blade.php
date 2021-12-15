<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>保育士求人一覧</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/job.css')}}" rel="stylesheet">
</head>
<body>
    <header class="header02">
        <div class="header02-inner">
            <p class="header02-logo">
                <a href=""><img src="{{asset('/img/logo_blue.png')}}" alt=""></a>
            </p>
            <nav class="gnav _bar _pc-only">
                <ul class="gnav-list">
                    <li class="gnav-item"><a href="">保育園サポート</a></li>
                    <li class="gnav-item"><a href="">コンサルティング</a></li>
                    <li class="gnav-item"><a href="">mama's works</a></li>
                    <li class="gnav-item"><a href="">会社情報</a></li>
                    <li class="gnav-item"><a href="">お問い合わせ</a></li>
                </ul>
            </nav>
            <div class="spnav _bar _sp-only">
                <p class="spnav-bar">MENU</p>
            </div>
            <p class="job"><a href=""><span>保育士</span><br class="_sp-only">求人</a></p>
        </div>
    </header>
    <!-- /.header02 -->
    <div class="spnav-page _sp-only">
        <div class="spnav-page-head">
            <div class="home">
                <img src="{{asset('/img/logo_blue.png')}}" alt="">
                <span>ホームへ戻る</span>
            </div>
            <p class="close"><img src="{{asset('/img/icon-close')}}" alt=""></p>
        </div>
        <nav>
            <ul class="spnav-list">
                <li class="spnav-item">
                    <a href="">
                        <img src="{{asset('/img/support-icon.png')}}" alt="保育園サポート">
                        <span>保育園サポート<span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="">
                        <img src="{{asset('/img/consul-icon.png')}}" alt="コンサルティング">
                        <span>保育園コンサルティング</span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="">
                        <img src="{{asset('/img/mw-icon.png')}}" alt="mama's works">
                        <span>mama's works</span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="">
                        <img src="{{asset('/img/company-icon.png')}}" alt="会社">
                        <span>会社情報</span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="">
                        <img src="{{asset('/img/job-icon.png')}}" alt="保育士">
                        <span>保育士求人情報</span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="">
                        <img src="{{asset('/img/contact-icon.png')}}" alt="お問い合わせ">
                        <span>お問い合わせ</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="spnav-page-foot">
            <p class="close"><span>×</span>メニューを閉じる</p>
        </div>
    </div>
    <!-- /.spnav-page -->

    <figure class="page-icon _contact">
        <img src="{{asset('/img/job-icon.png')}}" alt=""> 
    </figure>
    <!-- /.page-icon -->

    <article class="contents">
        <div class="contents-inner job-inner">
            <h1 class="contents-ttl">保育士求人一覧</h1>
            <p class="contents-lead">
                保育士の求人情報を掲載しております。<br>
                気になる求人がございましたら、詳細ページよりお問い合わせ頂けます。
            </p>

            <div class="job-list">


                <article class="job-item">
                    <div class="data-label _sp-only">
                        <!-- sp ジャンル -->
                        <ul>
                            <li>パート</li>
                            <li>アルバイト</li>
                            <li>正社員</li>
                        </ul>
                        <!-- sp 詳細リンク-->
                        <a href="">詳細を見る</a>
                    </div>
                    <!-- 写真 -->
                    <p class="pic"><img src="{{asset('/img/job-sample.jpg')}}" alt=""></p>
                    <div class="data">
                        <div class="data-label _pc-only">
                            <!-- pc ジャンル -->
                            <ul>
                                <li>パート</li>
                                <li>アルバイト</li>
                                <li>正社員</li>
                                <li>契約社員</li>
                            </ul>
                            <!-- pc 詳細リンク-->
                            <a href="">詳細を見る</a>
                        </div>
                        <!-- タイトル -->
                        <h2 class="data-ttl"><a href="">{{$id}}</a></h2>
                        <!-- pc タイトル下コメント -->
                        <p class="data-comment _pc-only">2021.4月に新規開園の企業主導型保育園です！</p>
                    </div>
                    <!-- sp タイトル下コメント -->
                    <p class="data-comment _sp-only">2021.4月に新規開園の企業主導型保育園です！</p>
                    <!-- その他情報テーブル -->
                    <table class="data-table">
                        <tr>
                            <th>給与</th>
                            <td>正社員 月給 180,000円~220,000円<br>ボーナス支給</td>
                        </tr>
                        <tr>
                            <th>勤務地</th>
                            <td>北海道札幌市白石区〇〇丁目〇〇番地</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td>7:00~16:00 8:00~17:00 シフト制</td>
                        </tr>
                    </table>
                    <!-- 掲載期間 -->
                    <p class="job info">
                        <span>掲載日：<time>2021.11.1</time></span>
                        <span>掲載期間終了日：<time>2021.11.1</time></span>
                    </p>
                </article>
                <!-- job-item -->



                <article class="job-item">
                    <div class="data-label _sp-only">
                        <!-- sp ジャンル -->
                        <ul>
                            <li>パート</li>
                            <li>アルバイト</li>
                            <li>正社員</li>
                            <li>契約社員</li>
                            <li>契約社員</li>
                        </ul>
                        <!-- sp 詳細リンク-->
                        <a href="">詳細を見る</a>
                    </div>
                    <!-- 写真 -->
                    <p class="pic"><img src="{{asset('/img/job-sample.jpg')}}" alt=""></p>
                    <div class="data">
                        <div class="data-label _pc-only">
                            <!-- pc ジャンル -->
                            <ul>
                                <li>パート</li>
                                <li>アルバイト</li>
                                <li>正社員</li>
                                <li>契約社員</li>
                            </ul>
                            <!-- pc 詳細リンク-->
                            <a href="">詳細を見る</a>
                        </div>
                        <!-- タイトル -->
                        <h2 class="data-ttl"><a href="">札幌市白石区／企業主導型保育園の保育士（札幌白石保育園）募集します</a></h2>
                        <!-- pc タイトル下コメント -->
                        <p class="data-comment _pc-only">2021.4月に新規開園の企業主導型保育園です！</p>
                    </div>
                    <!-- sp タイトル下コメント -->
                    <p class="data-comment _sp-only">2021.4月に新規開園の企業主導型保育園です！</p>
                    <!-- その他情報テーブル -->
                    <table class="data-table">
                        <tr>
                            <th>給与</th>
                            <td>正社員 月給 180,000円~</td>
                        </tr>
                        <tr>
                            <th>勤務地</th>
                            <td>北海道札幌市白石区〇〇丁目〇〇番地</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td>7:00~16:00 8:00~17:00 シフト制</td>
                        </tr>
                    </table>
                    <!-- 掲載期間 -->
                    <p class="job info">
                        <span>掲載日：<time>2021.11.1</time></span>
                        <span>掲載期間終了日：<time>2021.11.1</time></span>
                    </p>
                </article>
                <!-- job-item -->


                <article class="job-item">
                    <div class="data-label _sp-only">
                        <!-- sp ジャンル -->
                        <ul>
                            <li>パート</li>
                            <li>契約社員</li>
                        </ul>
                        <!-- sp 詳細リンク-->
                        <a href="">詳細を見る</a>
                    </div>
                    <!-- 写真 -->
                    <p class="pic"><img src="{{asset('/img/job-sample.jpg')}}" alt=""></p>
                    <div class="data">
                        <div class="data-label _pc-only">
                            <!-- pc ジャンル -->
                            <ul>
                                <li>パート</li>
                                <li>契約社員</li>
                            </ul>
                            <!-- pc 詳細リンク-->
                            <a href="">詳細を見る</a>
                        </div>
                        <!-- タイトル -->
                        <h2 class="data-ttl"><a href="">札幌市白石区／企業主導型保育園の保育士（札幌白石保育園）募集！新規開園の保育園で楽しく働ける</a></h2>
                        <!-- pc タイトル下コメント -->
                        <p class="data-comment _pc-only">2021.4月に新規開園の企業主導型保育園です！一緒に楽しく働こう</p>
                    </div>
                    <!-- sp タイトル下コメント -->
                    <p class="data-comment _sp-only">2021.4月に新規開園の企業主導型保育園です！一緒に楽しく働こう</p>
                    <!-- その他情報テーブル -->
                    <table class="data-table">
                        <tr>
                            <th>給与</th>
                            <td>正社員 月給 180,000円~</td>
                        </tr>
                        <tr>
                            <th>勤務地</th>
                            <td>北海道札幌市白石区〇〇丁目〇〇番地</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td>7:00~16:00 8:00~17:00 シフト制</td>
                        </tr>
                    </table>
                    <!-- 掲載期間 -->
                    <p class="job info">
                        <span>掲載日：<time>2021.11.1</time></span>
                        <span>掲載期間終了日：<time>2021.11.1</time></span>
                    </p>
                </article>
                <!-- job-item -->


            </div>
            <!-- /.job-list -->
            <div class="pagenation">
                <ul>
                    <li class="_pre"><a href="#"><span></span></a></li>
                    <li><a href="" class="_active"><span>1</span></a></li>
                    <li><a href=""><span>2</span></a></li>
                    <li><a href=""><span>3</span></a></li>
                    <li><a href=""><span>4</span></a></li>
                    <li><a href=""><span>･･･</span></a></li>
                    <li class="_next"><a href="#"><span></span></a></li>
                </ul>
            </div>
        </div>
    </article>
    <!-- /.contents -->

    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-left">
                <p class="footer-logo"><a href=""><img src="{{asset('/img/logo_blue.png')}}" alt=""></a></p>
                <div>
                    <p class="footer-company">株式会社E5 (イーファイブ)</p>
                    <p class="footer-address">東京都中央区日本橋牡蠣殻町<br>2-15-5 水天宮CPビル6階</p>
                </div>
            </div>
            <div class="footer-center">
                <div class="fnav">
                    <div class="fnav-inner">
                        <ul class="fnav-list">
                            <li class="fnav-item"><a href="">ホーム</a></li>
                            <li class="fnav-item"><a href="">保育園サポート</a></li>
                            <li class="fnav-item"><a href="">コンサルティング</a></li>
                            <li class="fnav-item"><a href="">mama's works</a></li>
                        </ul>
                        <ul class="fnav-list">
                            <li class="fnav-item"><a href="">会社情報</a></li>
                            <li class="fnav-item"><a href="">お問い合わせ</a></li>
                            <li class="fnav-item"><a href="">保育士求人</a></li>
                            <li class="fnav-item"><a href="">プライバシーポリシー</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-contact">
                    <p>お電話でのお問い合わせ</p>
                    <p class="tel">
                        <a href="tel:080-8518-1456">
                            TEL
                            <span class="num">080</span>
                            -
                            <span class="num">8518</span>
                            -
                            <span class="num">1456</span>
                        </a>
                    </p>
                    <p class="btn">
                        <a href="">
                            フォームからのお問い合わせ
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <p class="copy">
            <small>COPYRIGHT ©︎ E5 ALL RIGHTS RESERVED.</small>
        </p>
    </footer>
    <!-- /.footer -->

</body>
</html>