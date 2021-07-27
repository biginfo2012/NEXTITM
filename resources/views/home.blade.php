@extends('layout.app')
@section('page-css')

@endsection

@section('content')
    <main id="content" class="site-content">

        <article id="frontPage" class="content-area">
            <section class="hero">
                <div class="hero_container" style="background-image: url('/img/everything.png'); background-size: contain; background-repeat: no-repeat; background-position-y: bottom">
                    <p id="hero_text1">
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
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">挑</span>
                        <span class="hero_text1Element" data-id="8"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">み</span>
                    </p>
                    <svg id="handwritingmask" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 790 450">
{{--                        <image xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                               xlink:href="{{asset('img/everything.png')}}"--}}
{{--                               mask="url(#clipmask)" id="handwritingmask_img" width="790" height="450"--}}
{{--                               class="active"></image>--}}
{{--                        <mask id="clipmask" maskUnits="">--}}
{{--                            <path class="cls-1" d="M27,199.05l77-52.83s119-63,143.84-59.82"--}}
{{--                                  transform="translate(10 5.99)"--}}
{{--                                  style="stroke-dasharray: 250, 252; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1" d="M110.36,126.49s13.54,14.64-22.73,251.4" transform="translate(4 6.99)"--}}
{{--                                  style="stroke-dasharray: 254, 256; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1" d="M75.13,280.35L175.9,218.99"--}}
{{--                                  style="stroke-dasharray: 118, 120; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1" d="M0,424S115.22,318.63,239.54,309.31" transform="translate(9 11.99)"--}}
{{--                                  style="stroke-dasharray: 270, 272; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1" d="M202.59,191.89s8.16,42,11.65,117.42c0,0,6.41-143,68.15-161.1"--}}
{{--                                  transform="translate(10 6.99)"--}}
{{--                                  style="stroke-dasharray: 302, 304; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1"--}}
{{--                                  d="M265.5,232.67s38.45-21,16.89-48.93c0,0-42.52,39.61-14,90.87,0,0,29.13-10.49,36.12-40.19"--}}
{{--                                  transform="translate(8 10.99)"--}}
{{--                                  style="stroke-dasharray: 216, 218; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1"--}}
{{--                                  d="M304.53,183.74l11.07-5.24,2.91,16.31-14,74.55S334.24,168,366.85,152.87"--}}
{{--                                  transform="translate(10 6.99)"--}}
{{--                                  style="stroke-dasharray: 240, 242; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1"--}}
{{--                                  d="M366.85,180s-23.65,54.12-5.54,60.64,48.3-87.81,48.3-87.81-63.62,216.59-42.76,240"--}}
{{--                                  transform="translate(14 10.99)"--}}
{{--                                  style="stroke-dasharray: 416, 418; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1" d="M332.63,152.87l121.5-91.32s150.18-95.84,193.2-42.26"--}}
{{--                                  transform="translate(14 8.99)"--}}
{{--                                  style="stroke-dasharray: 363, 365; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1" d="M466.21,26.84s-54.34,168.29-25.66,198.48c0,0,26.9-1.12,46.52-45.58"--}}
{{--                                  transform="translate(15 12.99)"--}}
{{--                                  style="stroke-dasharray: 273, 275; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1"--}}
{{--                                  d="M521.3,35.89s-47.09,167.28-30.23,223.88c0,0,4.57-106.83,43.06-133.28v11.28S508.47,217,522.81,221.54,550,179.28,550,179.28"--}}
{{--                                  transform="translate(17 6.99)"--}}
{{--                                  style="stroke-dasharray: 524, 526; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1" d="M601.2,75.54L584.88,95.27"--}}
{{--                                  style="stroke-dasharray: 26, 28; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1" d="M574.88,122.68s-24.15,68.68,0,70.94c0,0,21.13-22.9,24.9-45.41"--}}
{{--                                  transform="translate(17 9.99)"--}}
{{--                                  style="stroke-dasharray: 130, 132; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1"--}}
{{--                                  d="M620.91,98.53s-30.18,62.93-8.3,100.52c0,0,22.64-91.46,49.81-109.57v14.33s-36.22,66.41-15.09,69.43,30.94-30.58,30.94-30.58"--}}
{{--                                  transform="translate(20 6.99)"--}}
{{--                                  style="stroke-dasharray: 365, 367; stroke-dashoffset: 0;"></path>--}}
{{--                            <path class="cls-1"--}}
{{--                                  d="M716.76,86.28S673,128,688.83,158.15s31.7-63.39,31.7-63.39,16.74,92.31-37.15,187.4l-8.88-22.39s20.37-111.43,93.57-152.94"--}}
{{--                                  transform="translate(23 10.99)"--}}
{{--                                  style="stroke-dasharray: 570, 572; stroke-dashoffset: 0;"></path>--}}
{{--                        </mask>--}}
                    </svg>
                    <p id="hero_text2">
                        <span class="hero_text2Element" data-id="0"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                        <span class="hero_text2Element" data-id="1"
                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
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
{{--                        <span class="hero_text2Element" data-id="9"--}}
{{--                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">T</span>--}}
{{--                        <span class="hero_text2Element" data-id="10"--}}
{{--                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">U</span>--}}
{{--                        <span class="hero_text2Element" data-id="11"--}}
{{--                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">R</span>--}}
{{--                        <span class="hero_text2Element" data-id="12"--}}
{{--                              style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">E</span>--}}
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

{{--            <section class="frontBlog">--}}
{{--                <div class="frontBlog_titleWrapper">--}}
{{--                    <h2 class="frontBlog_title">BLOG</h2>--}}
{{--                </div>--}}

{{--                <div class="blogContents">--}}
{{--                    <div class="blogContents_item">--}}
{{--                        <a href="https://futures-inc.co.jp/news/hp%e3%83%aa%e3%83%8b%e3%83%a5%e3%83%bc%e3%82%a2%e3%83%ab%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"--}}
{{--                           class="blogContents_item-img">--}}
{{--                            <img width="1085" height="550"--}}
{{--                                 src="https://futures-inc.co.jp/wp-content/uploads/2019/01/futures_eyecatch.png"--}}
{{--                                 class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""--}}
{{--                                 srcset="https://futures-inc.co.jp/wp-content/uploads/2019/01/futures_eyecatch.png 1085w, https://futures-inc.co.jp/wp-content/uploads/2019/01/futures_eyecatch-300x152.png 300w, https://futures-inc.co.jp/wp-content/uploads/2019/01/futures_eyecatch-768x389.png 768w, https://futures-inc.co.jp/wp-content/uploads/2019/01/futures_eyecatch-1024x519.png 1024w"--}}
{{--                                 sizes="(max-width: 1085px) 100vw, 1085px"> <span class="blogContents_item-hover">VIEW MORE</span>--}}
{{--                        </a>--}}
{{--                        <a href="https://futures-inc.co.jp/category/news/" class="blogContents_item-cat">NEWS</a>--}}
{{--                        <a href="https://futures-inc.co.jp/news/hp%e3%83%aa%e3%83%8b%e3%83%a5%e3%83%bc%e3%82%a2%e3%83%ab%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"--}}
{{--                           class="blogContents_item-title">HPリニューアルのお知らせ</a>--}}
{{--                        <span class="blogContents_item-date">2019/1/07</span>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </section>--}}
        </article><!-- #frontPage -->


    </main><!-- #content -->
@endsection

@section('page-js')

@endsection
