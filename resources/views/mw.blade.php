<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>
        var viewport = document.createElement('meta');
        viewport.setAttribute('name', 'viewport');
        if(screen.width < 1440) {
            viewport.setAttribute('content', 'width=device-width, initial-scale=1.0');
        } else {
            viewport.setAttribute('content', 'width=1440');
        }
        document.getElementsByTagName('head')[0].appendChild(viewport);
    </script>
    <title>mama's work</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mw.css">
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
                        <a href="" class="_active">
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
    <div class="header_move" id="move-header">
        <div class="header-inner _move">
            <p class="header-logo _move">
                <a href="/"><img src="./img/logo_blue.png" alt="株式会社E5"></a>
            </p>
            <nav class="gnav _move _pc-only">
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
                        <a href="" class="_active">
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
            <div class="spnav _bar _sp-only _move" id="sp-menu-open02">
                <p class="spnav-bar">MENU</p>
            </div>
            <p class="header-job-link _move"><a href="/job"><span>保育士</span><br class="_sp-only">求人</a></p>
        </div>
    </div>
    <!-- /.header_move -->

    <figure class="page-icon _support">
        <img src="./img/mw-icon.png" alt="mama's work"> 
    </figure>
    <!-- /.page-icon -->
    <article class="contents _pb_0">
        <div class="contents-inner">
            <h1 class="contents-ttl">mama's work</h1>
            <p class="contents-lead">
                社会復帰にハードルを感じている0~2歳の子どもをもつお母さんが<br class="_pc-only">
                働くための第一歩を踏み出すための「すき」に合わせたお仕事をご紹介します。
            </p>
        </div>
        <section class="overview">
            <h2 class="section-ttl">mama’s workで<br>働くことへの第一歩を！</h2>
            <div class="section-inner overview-inner">
                <div class="problem">
                    <figure></figure>
                </div>
                <div class="solution">
                    <ul class="solution-list">
                        <li class="solution-item">
                            <p class="solution-item-ttl _sp-only"><span>好きなこと・得意なことで働ける！</span></p>
                            <div class="solution-item-body">
                                <p class="solution-item-ttl _pc-only"><span>好きなこと・得意なことで働ける！</span></p>
                                <p class="solution-item-txt">
                                    「パソコンは苦手だけど、手芸は好き」<br class="_pc-only">
                                    というお母さんには手芸のお仕事を。<br class="_pc-only">
                                    「パソコンの入力が得意」<br class="_pc-only">
                                    というお母さんには入力作業のお仕事を。
                                </p>
                            </div>
                            <p class="solution-item-pic"><img src="./img/mw-pic_02.png" alt="好きなことで働くママ"></p>
                        </li>
                        <li class="solution-item">
                            <p class="solution-item-ttl _sp-only"><span>子どもを預けて働ける！</span></p>
                            <p class="solution-item-pic _sm_sp"><img src="./img/mw-pic_03.png" alt="子どもを預けるママ"></p>
                            <div class="solution-item-body _sm_lg">
                                <p class="solution-item-ttl _pc-only"><span>子どもを預けて働ける！</span></p>
                                <p class="solution-item-txt">
                                    提携先の保育園をご紹介します。<br class="_pc-only">
                                    提携先割引があり、月額１万円でご利用いただけます。
                                </p>
                            </div>
                        </li>
                        <li class="solution-item">
                            <p class="solution-item-ttl _sp-only"><span>求職活動中でも働ける！</span></p>
                            <div class="solution-item-body">
                                <p class="solution-item-ttl _pc-only"><span>求職活動中でも働ける！</span></p>
                                <p class="solution-item-txt">
                                    子どもの預け先がないからと求職活動を<br class="_pc-only">諦めなくても大丈夫です。<br class="_pc-only">
                                    mama’s workで働きながら納得のいく<br class="_pc-only">就職先を探しましょう。
                                </p>
                            </div>
                            <p class="solution-item-pic"><img src="./img/mw-pic_31.png" alt="求職活動中のママ"></p>
                        </li>
                    </ul>
                </div>
                <table class="overview-table">
                    <tr>
                        <th>対象</th>
                        <td>0〜２才児のお子様がいらっしゃる方</td>
                    </tr>
                    <tr>
                        <th>勤務時間</th>
                        <td>週2〜4日　1日2〜4時間</td>
                    </tr>
                    <tr>
                        <th>時給</th>
                        <td>時給880円~1030円(地域によります)</td>
                    </tr>
                    <tr>
                        <th>業務内容</th>
                        <td>保育園のバックオフィス業務(手芸・パソコン業務など)</td>
                    </tr>
                    <tr>
                        <th>勤務場所</th>
                        <td>在宅(ママ友と集まってでもOK) 預け先は近隣の提携先園をご紹介</td>
                    </tr>
                </table>
            </div>
        </section>
        <!-- /.overview -->
        <section class="actual">
            <div class="section-inner actual-inner">
                <h2 class="section-ttl _row_1">お仕事の様子をご紹介</h2>
                <div class="actual-box">
                    <figure class="actual-pic">
                    </figure>
                </div>
            </div>
        </section>
        <!-- /.actual -->
        <section class="schedule">
            <div class="section-inner schedule-inner">
                <h2 class="section-ttl _fz_mix">
                    <span class="_sm">mama's workでの</span><br>
                    ママの1日のスケジュール(例)
                </h2>
                <div class="schedule-box">
                    <figure class="schedule-pic">
                        <img src="./img/mw-pic_05.jpg" alt="ママのスケジュール">
                    </figure>
                    <figure class="schedule-pic">
                        <img src="./img/mw-pic_06.jpg" alt="ママのスケジュール">
                    </figure>
                </div>
            </div>
        </section>
        <!-- /.actual -->
    </article>
    <!-- /.contents -->

    <section class="contact">
        <div class="contact-inner">
            <div class="contact-box">
                <h2 class="contact-ttl">
                    <span class="en">CONTACT</span><br>
                    <span class="ja">お問い合わせ</span>
                </h2>
                <p class="contact-txt">
                    ご質問・ご相談等ありましたら、<br class="_sp-only">お問い合わせフォーム<br class="_pc-only">またはお電話より<br class="_sp-only">お気軽にお問い合わせ下さい。
                </p>
                <p class="contact-btn">
                    <a href="/contact">フォームでのお問い合わせ</a>
                </p>
                <p class="contact-tel">
                    <a href="tel:080-8518-1456">
                        TEL
                        <span class="num">080</span>
                        -
                        <span class="num">8518</span>
                        -
                        <span class="num">1456</span>
                    </a>
                </p>
            </div>
        </div>
    </section>
    <!--/.contact -->

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
</body>
</html>