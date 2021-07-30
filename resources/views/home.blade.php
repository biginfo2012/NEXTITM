@extends('layout.app')
@section('page-css')
    <style>
        /* Chrome, Safari, Opera */
        /*@-webkit-keyframes test {*/
        /*    90% {background-position: right center;}*/
        /*}*/
        /*!* Standard syntax *!*/
        /*@keyframes test {*/
        /*    90% {background-position: right center;}*/
        /*}*/
        @keyframes test {
            0% {
                background-size: 300%;
            }
            100% {
                background-size: 80%;
            }
        }
        @-webkit-keyframes test {
            0% {
                background-size: 300%;
            }
            100% {
                background-size: 80%;
            }
        }
    </style>
@endsection

@section('content')
    <main id="content" class="site-content">

        <article id="frontPage" class="content-area">
            <section class="hero">
                <div class="hero_container" style="width: 100%">
                    <p id="hero_text1" style="">
                        <span class="hero_text1Element" data-id="0"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">お</span>
                        <span class="hero_text1Element" data-id="1"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">客</span>
                        <span class="hero_text1Element" data-id="2"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">様</span>
                        <span class="hero_text1Element" data-id="3"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">の</span>
                        <span class="hero_text1Element" data-id="4"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">最</span>
                        <span class="hero_text1Element" data-id="5"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">高</span>
                        <span class="hero_text1Element" data-id="6"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">に</span>
                        <span class="hero_text1Element" data-id="7"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                        <span class="hero_text1Element" data-id="8"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                    </p>
                    <svg id="handwritingmask" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 790 450">
                    </svg>
                    <p id="hero_text2" style="">
                        <span class="hero_text2Element" data-id="0"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">挑</span>
                        <span class="hero_text2Element" data-id="1"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">み</span>
                        <span class="hero_text2Element" data-id="2"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">続</span>
                        <span class="hero_text2Element" data-id="3"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">け</span>
                        <span class="hero_text2Element" data-id="4"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">る</span>
                        <span class="hero_text2Element" data-id="5"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">会</span>
                        <span class="hero_text2Element" data-id="6"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">社</span>
                        <span class="hero_text2Element" data-id="7"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">で</span>
                        <span class="hero_text2Element" data-id="8"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">す</span>
                    </p>
                </div>
            </section>

            <section class="about">
                <section class="company">
                    <div class="company_container">
                        <img class="company_bg" src="{{asset('img/Buildings.jpg')}}"
                             alt="company" style="opacity: 0.5;">
                        <div class="company_contentWrapper">
                            <div class="animationTargetWrapper">
                                <h2 class="company_title scrollAnimation"
                                    style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">COMPANY</h2>
                                <p class="company_txt scrollAnimation"
                                   style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                    わが社は、法令の順守と人権を尊重することを基本に内には和をもって社をととのえ<br>
                                    技術の向上と能率の増進につとめて社業の進展を期し、
                                    外にはお客様の信用と満足を得ることに努め、<br>
                                    客様の期待に応えるとともに、地域社会の発展にも貢献できる企業になることを念願としています。
                                </p>
                                <a href="{{route('company')}}" class="futuresBtn scrollAnimation"
                                   style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">VIEW MORE</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="service">
                    <div class="service_container">
                        <img class="service_img" src="{{asset('img/service1.jpg')}}"
                             alt="service">
                        <div class="service_contentWrapper">
                            <div class="animationTargetWrapper">
                                <h2 class="service_title scrollAnimation"
                                    style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">SERVICE</h2>
                                <p class="service_txt scrollAnimation"
                                   style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                    通信機器販売、通信機器施工、配管施工、水道施工を通し<br class="pc">
                                    全てのユーザー・クライアントが満足できるサービスの提供を目指しております。
                                </p>
                                <a href="{{route('service')}}" class="service_linkBtn scrollAnimation"
                                   style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">VIEW MORE</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="recruit">
                    <div class="recruit_container">
                        <div class="recruit_contentWrapper">
                            <div class="animationTargetWrapper">
                                <h2 class="recruit_title scrollAnimation"
                                    style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">RECRUIT</h2>
                                <p class="recruit_txt scrollAnimation"
                                   style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                    通信関連の建設業として発展してきた当社ですが、<br>
                                    近年では通信関連の保守・運用事業、<br>
                                    そのための優れた人材を育成しています。<br>
                                    当社では社会インフラを支える情報通信や新エネルギー、<br>
                                    そしてITソリューションに興味のある若い人たちを<br>
                                    広く求めています。
                                </p>
                                <a href="{{route('recruit')}}" class="recruit_linkBtn scrollAnimation"
                                   style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">VIEW MORE</a>
                            </div>
                        </div>
                        <img src="{{asset('img/talent.jpg')}}" alt="recruit"
                             class="recruit_img">
                    </div>
                </section>
            </section>
        </article><!-- #frontPage -->
    </main><!-- #content -->
@endsection

@section('page-js')

@endsection
