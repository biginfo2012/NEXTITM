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
                        情報会社を支える新しい時代の通信工事会社として全てのお客様がに満足出来るサービスの提供を目的してなります。
                    </p>
                </div>
            </header>
            <div class="pagesContainer">
                <section class="webDesign">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">Telephone Work</span><br class="sp-only">
                            <span class="pagesSection_title-gray">電話工事</span>
                        </h2>
                    </header>
                    <p class="webDesign_txt">
                        お客様の用途に合わせてビジネスフォン等電話機の設定·施工　又、新規での電話機を導入等も承ります。
                    </p>
                    <div class="circles">
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">ビジネスフォン工事</p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    新規電話機導入
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="webDesign_linkBtn">FUTURES DESIGN</a> -->
                </section> <!-- webDesign -->

                <section class="officeSolution">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">Wiring and Plumbing</span><br class="sp-only">
                            <span class="pagesSection_title-gray">配線·配管工事</span>
                        </h2>
                    </header>
                    <p class="officeSolution_txt">
                        電話機·複合機·パソコン等、お客様のニーズに沿った工事
                    </p>
                    <div class="circles">
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    LAN配線工事
                                </p>
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    配管工事
                                </p>
                            </div>
                        </div>
                    </div>
                </section>  <!-- officeSolution -->

                <section class="influencerMarketing">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">Repair Equipment</span><br class="sp-only">
                            <span class="pagesSection_title-gray">通信設備の保守</span>
                        </h2>
                    </header>
                    <p class="influencerMarketing_txt">
                        企業には欠かせない電話機·複合機等のメンテナンスや保守管理
                    </p>
                    <div class="circles">
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    保守管理
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    メンテナンス<br>
                                    サービス
                                </p>
                            </div>
                        </div>
                    </div>
                </section> <!-- influencerMarketing -->
                <section class="influencerMarketing">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">Air conditioning equipment</span><br class="sp-only">
                            <span class="pagesSection_title-gray">空調設備</span>
                        </h2>
                    </header>
                    <p class="influencerMarketing_txt">
                        エアコン工事全般
                    </p>
                    <div class="circles">
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    エアコン入れ替え
                            </div>
                        </div>
                        <div class="circle">
                            <div class="circle_item">
                                <p class="circle_txt">
                                    新設工事
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div> <!-- pagesContainer -->
        </article>
    </main>
@endsection

@section('page-js')

@endsection
