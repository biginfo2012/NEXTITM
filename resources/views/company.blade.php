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

        <article id="companyPage" class="content-area">
            <header class="pagesHero">
                <div class="pagesHero_txtWrapper">
                    <h1 class="pagesHero_title">COMPANY</h1>
                    <p class="pagesHero_txt">
                        私たちFUTURESはお客様への配慮を忘れず、ユーモアのある革新的なサービスをご提供を推進致します。<br>
                        常日頃、パートナーとしてあることを考え、ニーズを超えた、ウォントのご提供を推進致します。
                    </p>
                </div>
            </header>
            <section class="aboutUs">
                <div class="pagesContainer">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">ABOUT US</span>
                            <span class="pagesSection_title-gray">会社情報</span>
                        </h2>
                    </header>
                    <table class="aboutUsTable">
                        <tbody>
                        <tr>
                            <th>企業名</th>
                            <td>株式会社FUTURES</td>
                        </tr>
                        <tr>
                            <th>設立</th>
                            <td>2013年3月21日</td>
                        </tr>
                        <tr>
                            <th>資本金</th>
                            <td>500万円</td>
                        </tr>
                        <tr>
                            <th>役員</th>
                            <td>
                                代表取締役　福澤裕介<br>
                                専務取締役　早乙女豪
                            </td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>東京都渋谷区道玄坂1丁目22番10号 若葉ビル4F</td>
                        </tr>
                        <tr>
                            <th>主要取引先銀行</th>
                            <td>みずほ銀行</td>
                        </tr>
                        <tr>
                            <th>主要取引先</th>
                            <td>
                                株式会社USEN NETWORKS 様<br>
                                グリー株式会社 様
                            </td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>Webデザイン<br>
                                オフィスソリューション<br>
                                店舗コンサルティング<br>
                                インフルエンサーマーケティング事業及び広告代理店
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    {{--                    <div class="securityAction">--}}
                    {{--                        <a href="https://security-shien.ipa.go.jp/security/index.html" class="securityAction_link" target="_blank" rel="noopener noreferrer">--}}
                    {{--                            <img src="https://futures-inc.co.jp/wp-content/themes/futures/assets/img/security_action.png" alt="セキュリティ対策自己宣言">--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}
                </div>
            </section> <!-- about us -->

            <section class="access">
                <div class="access_contentWrapper">
                    <div class="access_txtWrapper">
                        <header class="pagesSection">
                            <h2 class="pagesSection_title">
                                <span class="pagesSection_title-green">ACCESS</span>
                                <span class="pagesSection_title-gray">アクセス</span>
                            </h2>
                        </header>
                        <p class="access_txt">
                            〒150-0043<br>
                            東京都渋谷区道玄坂1丁目22番10号 若葉ビル4F
                        </p>
                    </div>
                </div>
                <div class="access_mapWrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12967.358324988054!2d139.6955905!3d35.6563238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9fda27e16cfc4c7f!2z5qCq5byP5Lya56S-RlVUVVJFUw!5e0!3m2!1sja!2sjp!4v1543059021192"
                        class="access_map" width="1250" height="600" frameborder="0" style="border:0"
                        allowfullscreen="">
                    </iframe>
                </div>
            </section> <!-- access  -->
        </article>


    </main>
@endsection

@section('page-js')

@endsection
