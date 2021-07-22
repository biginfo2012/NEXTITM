@extends('layout.app')
@section('page-css')
    <style>
        body.home #header{
            overflow: visible !important;
        }
    </style>
@endsection

@section('content')
    <main id="content" class="site-content">

        <article id="recruitPage" class="content-area">
            <header class="pagesHero">
                <div class="pagesHero_txtWrapper">
                    <h1 class="pagesHero_title">RECRUIT</h1>
                    <p class="pagesHero_txt">
                        Challenge Everything for Your future<br>
                        という理念のもと、自分の成長にこだわり、<br>
                        自ら能動的かつ迅速かつ柔軟に動き、結果を残す人材を求めています。
                    </p>
                </div>
            </header>
            <div class="pagesContainer">
                <div class="recruitTab">
                    <button type="button" class="recruitTab_btn active" data-id="webDesign">
                        <span class="recruitTab_txt-big">WEB DESIGN</span>
                        <span class="recruitTab_txt-small">WEBデザイン事業部の募集要項を見る</span>
                    </button>
                    <button type="button" class="recruitTab_btn" data-id="officeSolution">
                        <span class="recruitTab_txt-big">OFFICE SOLUTION</span>
                        <span class="recruitTab_txt-small">オフィスソリューション事業部の募集要項を見る</span>
                    </button>
                </div>
                <section id="webDesign" class="tabContent active">
                    <section class="designer">
                        <header class="pagesSection">
                            <h2 class="pagesSection_title">
                                <span class="pagesSection_title-green">DESIGNER</span><br class="sp-only">
                                <span class="pagesSection_title-gray">デザイナー</span>
                            </h2>
                        </header>
                        <p class="tabContent_innerTxt">
                            代表自ら率いるデザインチーム。Webサイトやインフォグラフィック、ロゴ制作まで幅広いデザインを担当していただきます。<br>
                            チームの中心となって、 クリエイティブな制作をしてくださる方を募集しています。
                        </p>
                        <table class="recruitTable">
                            <tbody>
                            <tr>
                                <th>仕事内容</th>
                                <td>
                                    コンセプトから自由な発想にもとづき新しいアイディアを創造できるデザイナーを募集しています。<br>
                                    WEBやグラフィックのデザイン制作まで、幅広い業務があります。<br>
                                </td>
                            </tr>
                            <tr>
                                <th>応募資格</th>
                                <td>
                                    <p>【必須スキル／経験】<br>
                                        ・Photoshop、Illustratorでのデザイン経験<br>
                                        ・デザインが好きな方</p>

                                    <p>【歓迎する人物像／経験】<br>
                                        ・WEBデザイナーとして1年以上の実務経験がある方<br>
                                        ・チームでの開発経験がある方</p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>10：00 ～ 19：00（休憩 1時間）　フレックスタイム制度あり</td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td>
                                    正社員<br>
                                    月給／25〜50万円以上<br>
                                    スキル・経験・実績により決定<br>
                                    試用期間3ヶ月
                                </td>
                            </tr>
                            <tr>
                                <th>昇給・賞与</th>
                                <td>昇給年1回／業績に応じた賞与有り</td>
                            </tr>
                            <tr>
                                <th>休日</th>
                                <td>土日祝祭日、休暇有給年10日、夏季休暇、年末年始休暇</td>
                            </tr>
                            <tr>
                                <th>勤務地</th>
                                <td>本社勤務</td>
                            </tr>
                            <tr>
                                <th>福利厚生・待遇</th>
                                <td>交通費支給、各種社会保険完備</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <section class="engineer">
                        <header class="pagesSection">
                            <h2 class="pagesSection_title">
                                <span class="pagesSection_title-green">ENGINEER</span><br class="sp-only">
                                <span class="pagesSection_title-gray">エンジニア</span>
                            </h2>
                        </header>
                        <p class="tabContent_innerTxt">
                            フロントエンドのエンジニアを募集しています。<br>
                            Webサイトの設計やコーディングを担当して頂きます。<br>
                            コーディングだけでなく、チーム内で自由に意見を交わし１つのプロジェクトを共に成功に導いてくれる方を募集しています。
                        </p>
                        <table class="recruitTable">
                            <tbody>
                            <tr>
                                <th>仕事内容</th>
                                <td>
                                    コンセプトから自由な発想にもとづき新しいアイディアを創造できるエンジニアを募集しています。<br>
                                    webサイトのHTML/CSS/JavaScriptを使ったフロントの開発、WordPressやCMSの実装、既存サービスの各種APIの連携、活用など<br>
                                </td>
                            </tr>
                            <tr>
                                <th>応募資格</th>
                                <td>
                                    <p>【必須スキル／経験】<br>
                                        ・HTML/CSSに関する基本的な知識<br>
                                        ・ライブラリを使った簡単なJavaScriptの実装スキル</p>

                                    <p>【歓迎する人物像／経験】<br>
                                        ・エンジニアとして1年以上の実務経験がある方<br>
                                        ・チームでのプロジェクト経験がある方<br>
                                        ・ディレクションやデザイン、情報設計などにも関わりたい<br>
                                        ・受託だけでなく自社サービスの開発にも関わりたい</p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>10：00 ～ 19：00（休憩 1時間）　フレックスタイム制度あり</td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td>
                                    正社員<br>
                                    月給／25〜50万円以上<br>
                                    スキル・経験・実績により決定<br>
                                    試用期間3ヶ月
                                </td>
                            </tr>
                            <tr>
                                <th>昇給・賞与</th>
                                <td>昇給年1回／業績に応じた賞与有り</td>
                            </tr>
                            <tr>
                                <th>休日</th>
                                <td>土日祝祭日、休暇有給年10日、夏季休暇、年末年始休暇</td>
                            </tr>
                            <tr>
                                <th>勤務地</th>
                                <td>本社勤務</td>
                            </tr>
                            <tr>
                                <th>福利厚生・待遇</th>
                                <td>交通費支給、各種社会保険完備</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <section class="director">
                        <header class="pagesSection">
                            <h2 class="pagesSection_title">
                                <span class="pagesSection_title-green">DIRECTOR</span><br class="sp-only">
                                <span class="pagesSection_title-gray">ディレクター</span>
                            </h2>
                        </header>
                        <p class="tabContent_innerTxt">
                            NEXTITMのWebディレクターは、制作全てに関わることが出来ます。<br>
                            クライアントとの打ち合わせからクリエイターへの指示出しなど納品まで積極的にプロジェクトの舵を握っていただきます。<br>
                            様々な種類のWeb制作において、幅広く活躍してください！
                        </p>
                        <table class="recruitTable">
                            <tbody>
                            <tr>
                                <th>仕事内容</th>
                                <td>
                                    お客さまから要望のヒアリング、提案書の作成、見積書の作成、ワイヤーフレームの作成、デザイナー、エンジニアの工数管理、スケジュール管理、制作物のクオリティ管理、修正指示<br>
                                    など、ウェブサイト制作に関わる業務一式を行っていただきます。
                                </td>
                            </tr>
                            <tr>
                                <th>応募資格</th>
                                <td>
                                    <p>【必須スキル／経験】<br>
                                        ・プロジェクトを円滑にするコミュニケーション能力<br>
                                        ・webの制作プロセスに対する基本的な理解</p>

                                    <p>【歓迎する人物像／経験】<br>
                                        ・WEBもしくはデザイン業界で1年以上の実務経験がある方<br>
                                        ・プロジェクトを円滑にするコミュニケーション能力<br>
                                        ・一緒に仕事をしたいと周りから思われる<br>
                                        ・向上心がある<br>
                                    </p>

                                </td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>10：00 ～ 19：00（休憩 1時間）　フレックスタイム制度あり</td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td>
                                    正社員<br>
                                    月給／25〜50万円以上<br>
                                    スキル・経験・実績により決定<br>
                                    試用期間3ヶ月
                                </td>
                            </tr>
                            <tr>
                                <th>昇給・賞与</th>
                                <td>昇給年1回／業績に応じた賞与有り</td>
                            </tr>
                            <tr>
                                <th>休日</th>
                                <td>土日祝祭日、休暇有給年10日、夏季休暇、年末年始休暇</td>
                            </tr>
                            <tr>
                                <th>勤務地</th>
                                <td>本社勤務</td>
                            </tr>
                            <tr>
                                <th>福利厚生・待遇</th>
                                <td>交通費支給、各種社会保険完備</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </section>
                <section id="officeSolution" class="tabContent">
                    <section class="designer">
                        <header class="pagesSection">
                            <h2 class="pagesSection_title">
                                <span class="pagesSection_title-green">Sales Marketing</span><br class="sp-only">
                                <span class="pagesSection_title-gray">営業</span>
                            </h2>
                        </header>
                        <p class="tabContent_innerTxt">
                            時代の流れに逆らわず、共に全力で走れるメンバーを募集します。<br>
                            業務内容はtoB・toCに関わらず営業全般を担当していただきます。
                        </p>
                        <table class="recruitTable">
                            <tbody>
                            <tr>
                                <th>仕事内容</th>
                                <td>
                                    通信系営業（テレマーケティング営業・訪問営業）<br>
                                    マーケティング系営業（SNSを主体にした集客コンサルティング）
                                </td>
                            </tr>
                            <tr>
                                <th>応募資格</th>
                                <td>
                                    <p>【必須スキル／経験】<br>
                                        ・やる気と向上心</p>

                                    <p>【歓迎する人物像／経験】<br>
                                        ・営業として1年以上の実務経験がある方<br>
                                        ・向上心がある
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>10：00 ～ 19：00（休憩 1時間）</td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td>
                                    正社員<br>
                                    月給／25〜50万円以上<br>
                                    スキル・経験・実績により決定<br>
                                    試用期間3ヶ月
                                </td>
                            </tr>
                            <tr>
                                <th>昇給・賞与</th>
                                <td>昇給年1回／成績に応じたインセンティブ賞与有り（四半期ごと）</td>
                            </tr>
                            <tr>
                                <th>休日</th>
                                <td>土日祝祭日、休暇有給年10日、夏季休暇、年末年始休暇</td>
                            </tr>
                            <tr>
                                <th>勤務地</th>
                                <td>本社勤務</td>
                            </tr>
                            <tr>
                                <th>福利厚生・待遇</th>
                                <td>交通費支給、各種社会保険完備</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </section>
            </div>
        </article>


    </main>
@endsection

@section('page-js')

@endsection
