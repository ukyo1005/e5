<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>
        var viewport = document.createElement('meta');
        viewport.setAttribute('name', 'viewport');
        if (screen.width < 1440) {
            viewport.setAttribute('content', 'width=device-width, initial-scale=1.0');
        } else {
            viewport.setAttribute('content', 'width=1440');
        }
        document.getElementsByTagName('head')[0].appendChild(viewport);
    </script>
    <title>E5</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/top.css">
    <!-- js -->
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./js/top.js"></script>
</head>

<body>
    <header class="header _01">
        <div class="header-inner">
            <p class="header-logo _top">
                <a href="/"><img src="./img/logo_pink.png" alt="株式会社E5"></a>
            </p>
            <nav class="gnav _top _pc-only">
                <ul class="gnav-list">
                    <li class="gnav-item">
                        <a href="/support">
                            <div class="gnav-item-icon">
                                <img src="./img/gnav-icon-support_white.png" alt="保育園サポート">
                            </div>
                            <p>保育園サポート</p>
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/consulting">
                            <div class="gnav-item-icon">
                                <img src="./img/gnav-icon-consul_white.png" alt="保育園コンサルティング">
                            </div>
                            <p>コンサルティング</p>
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/mw">
                            <div class="gnav-item-icon">
                                <img src="./img/gnav-icon-mw_white.png" alt="mama's work">
                            </div>
                            <p>mama's work</p>
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/company">
                            <div class="gnav-item-icon _com">
                                <img src="./img/gnav-icon-company_white.png" alt="会社情報">
                            </div>
                            <p class="_pr">会社情報</p>
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/contact">
                            <div class="gnav-item-icon _con">
                                <img src="./img/gnav-icon-contact_white.png" alt="お問い合わせ">
                            </div>
                            <p>お問い合わせ</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="spnav _bar _sp-only" id="sp-menu-open01">
                <p class="spnav-bar">MENU</p>
            </div>
            <p class="header-job-link _top"><a href="/job"><span>保育士</span><br class="_sp-only">求人</a></p>
        </div>
    </header>
    <!-- /.header -->
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
                        <a href="/mw">
                            <div class="gnav-item-icon">
                                <img src="./img/gnav-icon-mw_blue.png" alt="mama's work">
                            </div>
                            <p>mama's work</p>
                        </a>
                    </li>
                    <li class="gnav-item">
                        <a href="/company">
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
    <div class="mv">
        <div class="mv-bg">
            <div class="mv-ttl-wrap r-fadeIn">
                <h1 class="mv-ttl">
                    <span class="_lg">すき</span>を<span class="_lg">かたち</span>に
                </h1>
                <p class="mv-subttl">笑顔あふれる環境づくり</p>
            </div>
            <p class="mv-copy">
                <small>COPYRIGHT ©︎ E5 ALL RIGHTS RESERVED.</small>
            </p>
        </div>
    </div>
    <section class="about" id="about">
        <p class="about-lead s-fadeIn">保育園で働く人・子ども・お母さんの</p>
        <h2 class="about-ttl s-fadeIn">
            <span class="_lg">すき</span>を<span class="_lg">かたち</span>にします
        </h2>
        <div class="about-txt-wrap fadeIn">
            <p class="about-txt">
                保育園で働く人が「<span>職場がすき</span>」と言える<br>
                子どもたちが「<span>保育園がすき</span>」と言える<br>
                お母さんが「<span>仕事がすき</span>」と言える<br>
                そんな環境づくりをE5は妥協することなく<br class="_sp-only">徹底的にサポートします
            </p>
        </div>
    </section>
    <!--/.about -->
    <section class="service">
        <div class="section-inner top-inner service-inner">
            <h2 class="service-ttl fadeIn">
                <span>すきをかたちにする <span class="_lg">E5</span> のサービス</span>
            </h2>
            <ul class="service-list">
                <li class="service-item fadeIn">
                    <p class="service-item-pic"><img src="./img/servicesec-pic_01.png" alt="保育園サポート"></p>
                    <p class="service-item-link"><a href="" class="_sup">詳しく見る</a></p>
                    <div class="service-item-body">
                        <p class="ttl">保育園サポート</p>
                        <p class="txt">保育園で働いている人が自分の職場を好きと言えるよう、職員の方のお悩みをお聞きすることで、職場の人間関係や労働環境をよりよくし、職員の定着率を改善するサポートをいたします。</p>
                    </div>
                </li>
                <li class="service-item fadeIn">
                    <p class="service-item-pic"><img src="./img/servicesec-pic_02.png" alt="保育園コンサルティング"></p>
                    <p class="service-item-link"><a href="" class="_con">詳しく見る</a></p>
                    <div class="service-item-body">
                        <p class="ttl">保育園コンサルティング</p>
                        <p class="txt">コンサルティングを通し、子どもを預けるためだけでなく、「子どものために通わせたい」と思ってもらえる保育園づくりをサポートいたします。</p>
                    </div>
                </li>
                <li class="service-item fadeIn">
                    <p class="service-item-pic"><img src="./img/servicesec-pic_03.png" alt="mama's work"></p>
                    <p class="service-item-link"><a href="" class="_mw">詳しく見る</a></p>
                    <div class="service-item-body">
                        <p class="ttl">mama’s work</p>
                        <p class="txt">0~2歳の子どもをもつお母さんが、心に余裕を持って好きなことを仕事にできるよう、子どもを預けながら、在宅でお仕事ができる環境をご用意しております。</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- service -->
    <section class="job">
        <div class="section-inner top-inner job-inner">
            <div class="job-box">
                <div class="section-ttl-square _job">
                    <h2 class="section-ttl _fff _job">
                        <span class="en">JOB</span><br>
                        <span class="ja">求人情報</span>
                    </h2>
                </div>
                <p class="job-head">
                    <span>保育士求人情報</span>
                </p>
                <p class="job-txt">
                    E5では保育士として働きたい方への<br class="_sp-only">求人情報も紹介しております。<br>求人一覧ページから、<br class="_sp-only">求人をご覧いただけます。
                </p>
                <p class="job-link">
                    <a href="/job">求人一覧ページへ</a>
                </p>
            </div>
        </div>
    </section>
    <!-- job -->
    <section class="news">
        <div class="section-inner top-inner news-inner">
            <div class="news-box">
                <figure class="news-obj _01">
                    <img src="./img/newssec-obj_01.png" alt="子ども">
                </figure>
                <figure class="news-obj _02">
                    <img src="./img/newssec-obj_02.png" alt="子ども">
                </figure>
                <figure class="news-obj _03">
                    <img src="./img/newssec-obj_03.png" alt="子ども">
                </figure>
                <div class="section-ttl-square _news">
                    <h2 class="section-ttl _fff _news">
                        <span class="en">NEWS</span><br>
                        <span class="ja">お知らせ</span>
                    </h2>
                </div>
                <div class="news-list">
                    <article class="news-item">
                        <div class="news-item-head">
                            <p class="date"><time>2021.11.11</time></p>
                            <p class="label">
                                <span>実績</span>
                            </p>
                        </div>
                        <p class="news-item-body">
                            ニュースの本文が入ります。テキストですテキストです。テキストです。テキストです。
                        </p>
                    </article>
                    <article class="news-item">
                        <div class="news-item-head">
                            <p class="date"><time>2021.11.11</time></p>
                            <p class="label">
                                <span>実績</span>
                            </p>
                        </div>
                        <p class="news-item-body">
                            ニュースの本文が入ります。テキストですテキストです。テキストです。テキストです。
                        </p>
                    </article>
                    <article class="news-item">
                        <div class="news-item-head">
                            <p class="date"><time>2021.11.11</time></p>
                            <p class="label">
                                <span>実績</span>
                            </p>
                        </div>
                        <p class="news-item-body">
                            ニュースの本文が入ります。テキストですテキストです。テキストです。テキストです。
                        </p>
                    </article>
                    <article class="news-item">
                        <div class="news-item-head">
                            <p class="date"><time>2021.11.11</time></p>
                            <p class="label">
                                <span>お知らせ</span>
                            </p>
                        </div>
                        <p class="news-item-body">
                            ニュースの本文が入ります。テキストですテキストです。テキストです。テキストですニュースの本文が入ります。テキストですテキストです。テキストです。テキストです。
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="instagram">
        <div class="section-inner top-inner instagram-inner">
            <div class="instagram-head">
                <h2 class="section-ttl">
                    <span class="en">INSTAGRAM</span><br>
                    <span class="ja">インスタグラム</span>
                </h2>
                <p class="instagram-link">
                    <a href="https://www.instagram.com/e5_mamaswork/?hl=ja" target="_blank" rel="noopener noreferrer"><img src="./img/instagram-link.png" alt="写真のイラスト"></a>
                </p>
            </div>
            <div class="instagram-body _pc-only">
                <iframe src="https://snapwidget.com/embed/974968" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
            </div>
            <div class="instagram-body _sp-only">
                <iframe src="https://snapwidget.com/embed/933231" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
            </div>
        </div>
    </section>
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