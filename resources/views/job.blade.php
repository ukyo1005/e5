<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>
        var viewport = document.createElement('meta');
        viewport.setAttribute('name', 'viewport');
        if(screen.width < 768) {
            viewport.setAttribute('content', 'width=device-width, initial-scale=1.0');
        } else {
            viewport.setAttribute('content', 'width=1440');
        }
        document.getElementsByTagName('head')[0].appendChild(viewport);
    </script>
    <title>保育士求人一覧</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/job.css">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./js/child.js"></script>
</head>
<body>
    <header class="header _02">
        <div class="header-inner">
            <p class="header-logo">
                <a href="/"><img src="./img/logo_blue.png" alt="株式会社E5"></a>
            </p>
            <nav class="gnav _pc-only">
                <ul class="gnav-list">
                    <li class="gnav-item">
                        <a href="/support">
                            <div class="gnav-item-icon">
                                <img src="./img/gnav-icon-support_blue.png" alt="保育園サポート">
                            </div>
                            <p>保育園サポート</p>
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/consulting">
                            <div class="gnav-item-icon">
                                <img src="./img/gnav-icon-consul_blue.png" alt="保育園コンサルティング">
                            </div>
                            <p>コンサルティング</p>
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/mw">
                            <div class="gnav-item-icon">
                                <img src="./img/gnav-icon-mw_blue.png" alt="mama's work">
                            </div>
                            <p>mama's work</p>        
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/company" class="_com">
                            <div class="gnav-item-icon _com">
                                <img src="./img/gnav-icon-company_blue.png" alt="会社情報">
                            </div>
                            <p class="_pr">会社情報</p>
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/contact">
                            <div class="gnav-item-icon _con">
                                <img src="./img/gnav-icon-contact_blue.png" alt="お問い合わせ">
                            </div>
                            <p>お問い合わせ</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="spnav _bar _sp-only" id="sp-menu-open01">
                <p class="spnav-bar">MENU</p>
            </div>
            <p class="header-job-link"><a href="/job"><span>保育士</span><br class="_sp-only">求人</a></p>
        </div>
    </header>
    <!-- /.header _02 -->
    <div class="spnav-page _sp-only" id="sp-menu-page">
        <div class="spnav-page-head">
            <div class="home">
                <img src="./img/logo_blue.png" alt="株式会社E5">
                <span>ホームへ戻る</span>
            </div>
            <p class="close" id="sp-menu-close01"><img src="./img/icon-close.svg" alt="閉じる"></p>
        </div>
        <nav>
            <ul class="spnav-list">
                <li class="spnav-item">
                    <a href="/support">
                        <div class="icon _sup">
                            <img src="./img/gnav-icon-support_blue.png" alt="保育園サポート">
                        </div>
                        <span>保育園サポート<span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="/consulting">
                        <div class="icon _cs">
                            <img src="./img/gnav-icon-consul_blue.png" alt="保育園コンサルティング">
                        </div>
                        <span>保育園コンサルティング</span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="/mw">
                        <div class="icon _mw">
                            <img src="./img/gnav-icon-mw_blue.png" alt="mama's work">
                        </div>
                        <span>mama's work</span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="/company">
                        <div class="icon _com">
                            <img src="./img/gnav-icon-company_blue.png" alt="会社情報">
                        </div>
                        <span>会社情報</span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="/job">
                        <div class="icon _job">
                            <img src="./img/gnav-icon-job_blue.png" alt="保育士求人">
                        </div>
                        <span>保育士求人情報</span>
                    </a>
                </li>
                <li class="spnav-item">
                    <a href="/contact">
                        <div class="icon _con">
                            <img src="./img/gnav-icon-contact_blue.png" alt="お問い合わせ">
                        </div>
                        <span>お問い合わせ</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="spnav-page-foot">
            <p class="close" id="sp-menu-close02"><span>×</span>メニューを閉じる</p>
        </div>
    </div>
    <!-- /.spnav-page -->


    <figure class="page-icon _contact">
        <img src="./img/job-icon.png" alt="保育士求人"> 
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
                        <a href="/jobDetail">詳細を見る</a>
                    </div>
                    <!-- 写真 -->
                    <p class="pic"><img src="./img/job-sample.jpg" alt="求人イメージ"></p>
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
                        <h2 class="data-ttl"><a href="">札幌白石保育園/企業方保育園の保育士募集</a></h2>
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
                    <p class="pic"><img src="./img/job-sample.jpg" alt="求人イメージ"></p>
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
                    <p class="pic"><img src="./img/job-sample.jpg" alt="求人イメージ"></p>
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
                <p class="footer-logo"><a href="/"><img src="./img/logo_white.png" alt="株式会社E5"></a></p>
                <div>
                    <p class="footer-company">株式会社E5 (イーファイブ)</p>
                    <p class="footer-address">東京都中央区日本橋牡蠣殻町<br>2-15-5 水天宮CPビル6階</p>
                </div>
            </div>
            <div class="footer-center">
                <div class="fnav">
                    <div class="fnav-inner">
                        <ul class="fnav-list">
                            <li class="fnav-item"><a href="/">ホーム</a></li>
                            <li class="fnav-item"><a href="/support">保育園サポート</a></li>
                            <li class="fnav-item"><a href="/consulting">コンサルティング</a></li>
                            <li class="fnav-item"><a href="/mw">mama's work</a></li>
                        </ul>
                        <ul class="fnav-list">
                            <li class="fnav-item"><a href="/company">会社情報</a></li>
                            <li class="fnav-item"><a href="/contact">お問い合わせ</a></li>
                            <li class="fnav-item"><a href="/job">保育士求人</a></li>
                            <li class="fnav-item"><a href="/privacy">プライバシーポリシー</a></li>
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
                        <a href="/contact">
                            フォームでのお問い合わせ
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