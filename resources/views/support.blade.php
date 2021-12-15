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
    <title>保育園サポート</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/support.css">
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
                        <a href="" class="_active">
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
    <div class="header_move" id="move-header">
        <div class="header-inner _move">
            <p class="header-logo _move">
                <a href="/"><img src="./img/logo_blue.png" alt="株式会社E5"></a>
            </p>
            <nav class="gnav _move _pc-only">
                <ul class="gnav-list">
                    <li class="gnav-item">
                        <a href="" class="_active">
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
            <div class="spnav _bar _sp-only _move" id="sp-menu-open02">
                <p class="spnav-bar">MENU</p>
            </div>
            <p class="header-job-link _move"><a href="/job"><span>保育士</span><br class="_sp-only">求人</a></p>
        </div>
    </div>
    <!-- /.header_move -->

    <figure class="page-icon _support">
        <img src="./img/support-icon.png" alt="保育園サポート"> 
    </figure>
    <!-- /.page-icon -->

    <article class="contents _sp_pb_0">
        <div class="contents-inner">
            <h1 class="contents-ttl">保育園サポート</h1>
            <p class="contents-lead">
                E5では職員の離職防止・職場環境の向上や園児集客など<br class="_pc-only">
                保育園様の抱えているお悩みの解決のために様々なサポートを行います。
            </p>
        </div>
        <section class="problem">
            <div class="problem-inner">
                <div class="problem-box">
                    <p class="problem-pic">
                        <img src="./img/support-pic_01.png" alt="悩む保育士">
                    </p>
                    <div class="problem-body">
                        <p class="ttl">
                            ストレスの多い環境で働く保育士
                        </p>
                        <p class="txt">
                            保育士は、「職員同士の関係」「子どもとの関係」「保護者との関係」と、常に人と人の関係のなかで仕事をしています。そのため、知らず知らずのうちにストレスを感じており、知らない間に大きくなって抱え込んでしまいます。<br class="_pc-only">
                            そして、ストレスを抱え込みすぎることで、体調を崩しやすくなったり、退職につながってしまうこともあります。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.problem -->
        <div class="arrow-area">
            <p>1万円/月で<br>E5がサポート!</p>
        </div>
        <!-- /.arrow-area -->
        <section class="fukurou">
            <div class="fukurou-inner">
                <p class="fukurou-ttl">
                    <span>職員相談窓口</span><br>
                    ふくろうのもり
                </p>
                <div class="fukurou-card-wrap">
                    <div class="fukurou-card _01">
                        <p class="fukurou-card-pic">
                            <img src="./img/support-pic_02.png" alt="カウンセリング">
                        </p>
                        <div class="fukurou-card-body">
                            <p class="ttl">
                                <span>ふくろうの相談員がお話をお聞きします</span>
                            </p>
                            <p class="txt">
                                ふくろう(相談員)は12人おります。<br class="_pc-only">
                                保育園に携わってきた者ばかりのため、職員の状況を理解したうえで丁寧にお話をお聞きします。
                            </p>
                        </div>
                    </div>
                    <div class="fukurou-card _02">
                        <p class="fukurou-card-pic">
                            <img src="./img/support-pic_03.png" alt="保育士">
                        </p>
                        <div class="fukurou-card-body">
                            <p class="ttl">
                                <span>ふくろうのもりの話の進め方</span>
                            </p>
                            <p class="txt">
                                職員の方一人一人の悩みや思いに寄り添い、うまく思いや悩みを聞き出します。
                                話をしてよかった、スッキリした、そして「明日からまた頑張ろう！」という気持ちになるよう、お話を進めさせていただきます。                            </p>
                        </div>
                    </div>
                    <div class="fukurou-card _03">
                        <p class="ttl _pc-only">
                            <span>必須の相談窓口としてE5を</span>
                        </p>
                        <div class="fukurou-card-body">
                            <p class="fukurou-card-pic">
                                <img src="./img/support-pic_04.jpg" alt="表">
                            </p>
                            <p class="ttl _sp-only">
                                <span>必須の相談窓口としてE5を</span>
                            </p>
                            <p class="txt">
                                相談窓口を設けることは、企業主導型保育事業における専門的労務監査評価の基準事項となっております。より良い労働環境の園になるようサポートさせて頂きます。ぜひ、E5にお任せください。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                
        </section>
        <!-- /.fukurou -->

        <section class="service">
            <div class="service-inner">
                <p class="service-ttl">
                    問題解決のための<br>
                    様々なサービス
                </p>
                <p class="service-txt">
                    ご相談を受けたうえで、問題を解決するための<br class="_sp-only">サービスをご提案することができます。<br>
                    詳しい内容はお問い合わせフォームから<br class="_sp-only">お気軽にお問い合わせください。
                </p>
    
                <div class="service-pic-wrap">
                    <div class="left">
                        <img src="./img/support-pic_05.jpg" alt="サービス一覧表">
                    </div>
                    <div class="right">
                        <img src="./img/support-pic_06.jpg" alt="サービス一覧表">
                    </div>
                </div>
            </div>
        </section>
        <!-- /.service -->
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