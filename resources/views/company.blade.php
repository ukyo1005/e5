<!DOCTYPE html>
<html lang="ja">
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
    <title>会社情報</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/company.css">
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
                        <a href="/company" class="_active _com">
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
    <!-- /.header -->

    <div class="spnav-page _sp-only" id="sp-menu-page">
        <div class="spnav-page-head">
            <div class="home">
                <img src="./img/logo_blue.png" alt="戻る">
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
                            <img src="./img/gnav-icon-job_blue.png" alt="保育士求人情報">
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
                        <a href="/mw">
                            <div class="gnav-item-icon">
                                <img src="./img/gnav-icon-mw_blue.png" alt="mama’s work">
                            </div>
                            <p>mama's work</p>        
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/company" class="_active _com">
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


    <figure class="page-icon _contact">
        <img src="./img/company-icon.png" alt="お問い合わせ"> 
    </figure>
    <!-- /.page-icon -->

    <article class="contents">
        <div class="contents-inner company-inner">
            <h1 class="contents-ttl">会社情報</h1>
        </div>
        <section class="origin">
            <div class="contents-inner company-inner">
                <h2 class="section-ttl">
                    <span>社名の由来</span>
                </h2>
                <p class="origin-lead">従業員の行動基準と会社の事業活動を表す<br class="_sp-only">５つの言葉の頭文字が社名の由来です。</p>
                <ul class="origin-list">
                    <li class="origin-item">
                        <div class="origin-item-box _hd">
                            <div class="heading">
                                <p class="top">
                                    <span class="_ac">E</span>5
                                </p>
                                <p class="bottom">
                                    <span>5</span>
                                    <span>つ</span>
                                    <span>の</span>
                                    <span>E</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="origin-item">
                        <div class="origin-item-box _bd">
                            <p class="num">01</p>
                            <p class="en">
                                <span class="_lg">E</span>xplorer
                            </p>
                            <p class="meaning">
                                <span>行動基準</span>
                                <span>探求する</span>
                            </p>
                            <p class="txt"><span class="_pc-only">ひとりひとり</span><span class="_sp-only">一人一人</span>の「すき」をかたちにするため自ら動いて探求します。</p>
                        </div>
                    </li>
                    <li class="origin-item">
                        <div class="origin-item-box _bd">
                            <p class="num">02</p>
                            <p class="en">
                                <span class="_lg">E</span>njoy
                            </p>
                            <p class="meaning">
                                <span>行動基準</span>
                                <span>楽しむ</span>
                            </p>
                            <p class="txt _02">だれよりも楽しみながら<br class="_pc-only">「すき」をかたちにして<br class="_pc-only">いきます。</p>
                        </div>
                    </li>
                    <li class="origin-item">
                        <div class="origin-item-box _bg">
                            <p class="num">03</p>
                            <p class="en">
                                <span class="_lg">E</span>ducation
                            </p>
                            <p class="meaning">
                                <span>事業活動</span>
                                <span>教育する</span>
                            </p>
                            <p class="txt">人材育成のための、研修事業などを行います。</p>
                        </div>
                    </li>
                    <li class="origin-item">
                        <div class="origin-item-box _bg">
                            <p class="num">04</p>
                            <p class="en">
                                <span class="_lg">E</span>valuate
                            </p>
                            <p class="meaning">
                                <span>事業活動</span>
                                <span>評価する</span>
                            </p>
                            <p class="txt">第三者評価やコンサルティング事業などを行います。</p>
                        </div>
                    </li>
                    <li class="origin-item">
                        <div class="origin-item-box _bg">
                            <p class="num">05</p>
                            <p class="en">
                                <span class="_lg">E</span>stablish
                            </p>
                            <p class="meaning">
                                <span>事業活動</span>
                                <span>設立する</span>
                            </p>
                            <p class="txt">開業支援や、コンサルティング事業などを行います。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="overview">
            <div class="overview-bg"></div>
            <div class="contents-inner company-inner">
                <div class="overview-wrap">
                    <h2 class="section-ttl _mt_0">
                        <span>会社概要</span>
                    </h2>
                    <table class="overview-table">
                        <tr>
                            <th>商号</th>
                            <td>株式会社E5</td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td>東京都中央区日本橋牡蠣殻町2-15-5 水天宮CPビル6階</td>
                        </tr>
                        <tr>
                            <th>代表取締役</th>
                            <td>鈴木浩一</td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>090-8518-1456</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>保育所コンサルティング・マーケティングリサーチ業務・人材育成のための研修事業・広告宣伝に関する企画・広告物の制作・保育所サポート業務・在宅ワーク管理業務</td>
                        </tr>
                        <tr>
                            <th>アクセス</th>
                            <td>〜〜線〇〇駅より徒歩◯分</td>
                        </tr>
                    </table>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7029101912667!2d139.78470271525893!3d35.68431658019355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889459355925f%3A0xe7e81708e65ac061!2z44CSMTAzLTAwMTQg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL6JuO5q6755S677yS5LiB55uu77yR77yV4oiS77yVIOawtOWkqeWuru-8o--8sOODk-ODqyA26ZqO!5e0!3m2!1sja!2sjp!4v1637319462894!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
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
    <!-- /.footer -->

</body>
</html>