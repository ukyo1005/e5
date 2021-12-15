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
    <title>保育園コンサルティング</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/consul.css">
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
                        <a href="" class="_active">
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
                        <a href="" class="_active">
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
            <div class="spnav _bar _sp-only _move" id="sp-menu-open02">
                <p class="spnav-bar">MENU</p>
            </div>
            <p class="header-job-link _move"><a href="/job"><span>保育士</span><br class="_sp-only">求人</a></p>
        </div>
    </div>
    <!-- /.header_move -->

    <figure class="page-icon _consul">
        <img src="./img/consul-icon.png" alt="保育園コンサルティング"> 
    </figure>
    <!-- /.page-icon -->
    <article class="contents _sp_pb_0 consul">
        <div class="contents-inner consul-inner">
            <h1 class="contents-ttl">保育園コンサルティング</h1>
            <p class="contents-lead">
                E5では「子どもを預けるため」だけの保育園ではなく<br class="_pc-only">
                「子どものために通わせたい」保育園を作るためにコンサルティングを行っています。
            </p>
            <p class="consul-pic"></p>
            <ul class="consul-list">
                <li class="consul-item">
                    <p class="consul-item-ttl _sp_row_2">デザイン性のある読みやすい<br class="_sp-only">独自マニュアルの作成</p>
                    <div class="consul-item-body">
                        <p class="pic _sm">
                            <img src="./img/consul-pic_02.png" alt="マニュアル">
                        </p>
                        <p class="txt">良いマニュアルを作ることは「全職員が同水準で業務にあたる」「業務の無駄を省く」「業務効率化」「保育の質を上げる」「人間関係を円滑にする」等、良い職場環境にするための必須事項です。<br class="_pc-only">
                            国のガイドライン、地域別ガイドラインに対応し、ガイドライン変更時には更新連絡。園にあわせ、生きたマニュアルを作ります。<br class="_pc-only">
                            保育士はひとりひとりが自身の保育の正解を持っており、その個々の正解のぶつかり合いが人間関係に軋轢を生んでいます。<br class="_pc-only">
                            個々の正解ではなく、園の保育理念をもとに園の正解をつくることで人間関係の軋轢も確実に減らすことができます。
                        </p>
                    </div>
                </li>
                <li class="consul-item">
                    <p class="consul-item-ttl">保育士の業務サポート</p>
                    <div class="consul-item-body">
                        <p class="pic">
                            <img src="./img/consul-pic_03.png" alt="壁面作り">
                        </p>
                        <p class="txt">
                            保育士の残業の原因である事務作業や壁面作り等をmama’s workのスタッフと連携して代行・サポートします。<br class="_pc-only">
                            保育士でなくてもできる仕事を外注することで、余分な人件費を削除することができます。そのうえ、労働の負担や時間が減ることによって、保育士の子どもへの関わり方が深くなり、保育の質の向上につながります。<br class="_pc-only">
                            また、「こんなものが欲しい」というオーダーをして頂ければ、ハンドメイドでご希望に添ってお作りいたします。
                        </p>
                    </div>
                </li>
                <li class="consul-item">
                    <p class="consul-item-ttl">選ばれる園の特徴づくり</p>
                    <div class="consul-item-body">
                        <p class="pic">
                            <img src="./img/consul-pic_04.png" alt="選ばれる園">
                        </p>
                        <p class="txt">
                            ただ単に「子どもを預けるため」だけに自宅近くの保育園を選ぶのではなく、「遠くても子どものために通わせたい」と思う選ばれる園づくりが必要です。また、そのような園に「ここで働きたい」と思ってくれる意欲のある人材が集まります。<br class="_pc-only">
                            保護者・子ども・保育士から選ばれる園になるために、地域ニーズにあわせたどこにもない園の特徴づくりをお手伝いします。
                        </p>
                    </div>
                </li>
                <li class="consul-item _half">
                    <div class="consul-item-half">
                        <p class="consul-item-ttl">開業支援</p>
                        <div class="consul-item-body">
                            <p class="pic">
                                <img src="./img/consul-pic_05.png" alt="開業">
                            </p>
                            <p class="txt">
                                安定経営可能な保育園を開園できるようお手伝いします。マーケティング、地域選定、図面、保育内容、マニュアル、求人、研修、申請、園児募集など開園までフルサポートします。開園後の運営支援も可能です。
                            </p>
                        </div>
                    </div>
                    <div class="consul-item-half">
                        <p class="consul-item-ttl">運営支援</p>
                        <div class="consul-item-body">
                            <p class="pic _sp_sm">
                                <img src="./img/consul-pic_06.png" alt="運営">
                            </p>
                            <p class="txt">
                                保育園の運営でのお困りごとを解決・支援します。
                                「職員の採用育成がうまくいかない」「保育の質が低い」「園児が集まらない」など、運営面でのお困りごとを改善するまでサポートします。
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

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