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
    <title>プライバシーポリシー</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/privacy.css">
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


    <figure class="page-icon _privacy">
        <img src="./img/privacy-icon.png" alt="プライバシーポリシー"> 
    </figure>
    <!-- /.page-icon -->

    <article class="contents privacy">
        <div class="contents-inner privacy-inner">
            <h1 class="contents-ttl">プライバシーポリシー</h1>
            <p class="contents-lead _tal">株式会社E5(以下「当社」といいます)は，本ウェブサイト上で提供するサービス(以下「本サービス」といいます)におけるプライバシー情報の取扱いについて以下のとおりプライバシーポリシー(以下「本ポリシー」といいます)を定めます。</p>
            <div class="privacy-wrap">
                <ul class="privacy-list">
                    <li class="privacy-item">
                        <p class="ttl">
                            <span class="box">第1条</span>
                            プライバシー情報
                        </p>
                        <p class="txt">
                            プライバシー情報のうち「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報を指します。
                        </p>
                    </li>
                    <li class="privacy-item">
                        <p class="ttl">
                            <span class="box">第2条</span>
                            プライバシー情報の収集方法
                        </p>
                        <p class="txt">
                            当社は，ユーザーが利用する際に氏名，生年月日，住所，電話番号，メールアドレスなどの個人情報をお尋ねすることがあります。
                        </p>
                    </li>
                    <li class="privacy-item">
                        <p class="ttl">
                            <span class="box">第3条</span>
                            個人情報を収集・利用する目的
                        </p>
                        <p class="txt">
                            当社が個人情報を収集・利用する目的は，以下のとおりです。<br>
                            （1）ユーザーにお知らせや連絡をするためにメールアドレスを利用する場合や必要に応じて連絡したりするため，氏名や住所などの連絡先情報を利用する目的<br>
                            （2）ユーザーの本人確認を行うために，氏名，生年月日，住所，電話番号，配達証明付き郵便の到達結果などの情報を利用する目的<br>
                            （3）ユーザーからのお問い合わせに対応するために，当社がユーザーに対してサービスを提供するにあたって必要となる情報や，ユーザーのサービス利用状況，連絡先情報などを利用する目的<br>
                            （4）上記の利用目的に付随する目的
                        </p>
                    </li>
                    <li class="privacy-item">
                        <p class="ttl">
                            <span class="box">第4条</span>
                            個人情報の第三者提供
                        </p>
                        <p class="txt">
                            当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。<br>
                            （1）法令に基づく場合<br>
                            （2）人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき<br>
                            （3）公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき<br>
                            （4）国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>
                            （5）予め次の事項を告知あるいは公表をしている場合
                            利用目的に第三者への提供を含むこと<br>
                            第三者に提供されるデータの項目<br>
                            第三者への提供の手段または方法<br>
                            本人の求めに応じて個人情報の第三者への提供を停止すること<br>
                            前項の定めにかかわらず，次に掲げる場合は第三者には該当しないものとします。<br>
                            （1）当社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合<br>
                            （2）合併その他の事由による事業の承継に伴って個人情報が提供される場合<br>
                            （3）個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いているとき
                        </p>
                    </li>
                    <li class="privacy-item">
                        <p class="ttl">
                            <span class="box">第5条</span>
                            個人情報の開示
                        </p>
                        <p class="txt">
                            当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。<br>
                            （1）本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合<br>
                            （2）当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合<br>
                            （3）その他法令に違反することとなる場合<br>
                            前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。
                        </p>
                    </li>
                    <li class="privacy-item">
                        <p class="ttl">
                            <span class="box">第6条</span>
                            個人情報の訂正および削除
                        </p>
                        <p class="txt">
                            ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正または削除を請求することができます。<br>
                            当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正または削除を行い，これをユーザーに通知します。<br>
                        </p>
                    </li>
                    <li class="privacy-item">
                        <p class="ttl">
                            <span class="box">第7条</span>
                            個人情報の利用停止等
                        </p>
                        <p class="txt">
                            当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，
                            または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）
                            を求められた場合には，遅滞なく必要な調査を行い，その結果に基づき，個人情報の利用停止等を行い，その旨本人に通知します。<br>
                            ただし，個人情報の利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，本人の権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じます。
                        </p>
                    </li>
                    <li class="privacy-item">
                        <p class="ttl">
                            <span class="box">第8条</span>
                            プライバシーポリシーの変更
                        </p>
                        <p class="txt">
                            本ポリシーの内容は，ユーザーに通知することなく，変更することができるものとします。<br>
                            当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。<br>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </article>
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