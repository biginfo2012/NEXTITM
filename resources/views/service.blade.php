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

        <article id="servicePage" class="content-area">
            <header class="pagesHero">
                <div class="pagesHero_txtWrapper">
                    <h1 class="pagesHero_title">SERVICE</h1>
                    <p class="pagesHero_txt">
                        全てのユーザー・クライアントが満足できるサービスの提供を目指しております。
                    </p>
                </div>
            </header>
            <div class="pagesContainer">
                <section class="webDesign">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">WEB DESIGN</span><br class="sp-only">
                            <span class="pagesSection_title-gray">ウェブ制作事業</span>
                        </h2>
                    </header>
                    <p class="webDesign_txt">
                        “お客様の理想の未来をデザインしたい”という想いから<br>
                        常にお客様の立場から提案することを前提にプロとして企画・提案・制作いたします。<br>
                        その上で、お客様とターゲット双方にとって最適なサイト設計・ビジュアル表現を持って<br>
                        最良のものをご提供いたします。
                    </p>
                    <div class="circles">
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">ウェブサイト制作</p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    MEO対策<br>
                                    サービス
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    ポスターなどの<br>
                                    印刷物
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    <span class="circle_txt-small">会社案内・名刺などの</span><br>
                                    ビジネスアイテム<br>
                                    の制作</p>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="webDesign_linkBtn">FUTURES DESIGN</a> -->
                </section> <!-- webDesign -->

                <section class="officeSolution">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">OFFICE SOLUTION</span><br class="sp-only">
                            <span class="pagesSection_title-gray">オフィスソリューション事業</span>
                        </h2>
                    </header>
                    <p class="officeSolution_txt">
                        “あなたの頼れるオフィスパートナー”として多様化する時代の流れに対応し、<br>
                        最適な商材を素早く提供いたします。 常に情熱を持ってお客様の望む、より良い環境を実現するよう努めます。
                    </p>
                    <div class="circles">
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    格安<br>
                                    インターネット回線<br>
                                    の取次
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    電話回線の<br>
                                    固定費削減
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    各種OA機器の導入
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    QR決済サービスの<br>
                                    導入サポート
                                </p>
                            </div>
                        </div>
                    </div>
                </section>  <!-- officeSolution -->

                <section class="influencerMarketing">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">INFLUENCER MARKETING</span><br class="sp-only">
                            <span class="pagesSection_title-gray">インフルエンサーマーケティング事業</span>
                        </h2>
                    </header>
                    <p class="influencerMarketing_txt">
                        “いつも、ヒトから”弊社の強みである1,000～10,000フォロワーのナノインフルエンサーにフォーカスし<br>
                        クライアントの「やりたい」を実現させます。ナノインフルエンサーを起用することで、<br>
                        より身近に親和性の高いPRを行うことが出来ます。
                    </p>
                    <div class="circles">
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    SNSを用いた<br>
                                    インフルエンサー<br>
                                    の投稿</p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    プロモーション<br>
                                    イベントへの集客
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    キャスティング<br>
                                    業務の代行
                                </p>
                            </div>
                        </div>
                    </div>
                </section> <!-- influencerMarketing -->

                <section class="storeConsulting">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">STORE CONSULTING</span><br class="sp-only">
                            <span class="pagesSection_title-gray">店舗コンサルティング</span>
                        </h2>
                    </header>
                    <p class="storeConsulting_txt">
                        “人と人の繋がりを大切に”お客様の心に残るような最高の「空間」「時間」「思い出」の提供を第一に考え、
                        弊社独自のサービスをご提案いたします。全てのお客様に「最高の笑顔」になって頂けるように最大限に貢献いたします。
                    </p>
                    <div class="circles">
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    全国の提携店舗<br>
                                    にて各種イベント<br>
                                    の開催
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    各種パーティー<br>
                                    の運営<br>
                                    コンサルティング
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    店舗PR活動
                                </p>
                            </div>
                        </div>
                    </div>
                </section> <!-- storeConsulting -->

            </div> <!-- pagesContainer -->
        </article>


    </main>
@endsection

@section('page-js')

@endsection
