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

        <article id="contactPage" class="content-area">
            <header class="pagesHero">
                <div class="pagesHero_txtWrapper">
                    <h1 class="pagesHero_title">CONTACT</h1>
                </div>
            </header>
            <div class="pagesContainer">
                <section class="contactForm">
                    <header class="pagesSection">
                        <h2 class="pagesSection_title">
                            <span class="pagesSection_title-green">CONTACT FORM</span><br class="sp-only">
                            <span class="pagesSection_title-gray">コンタクトフォーム</span>
                        </h2>
                    </header>
                    <p class="contactForm_txt">
                        <span class="redTxt">※</span>は入力必須項目です。
                    </p>

                    <div role="form" class="wpcf7" id="wpcf7-f47-o1" lang="ja" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="{{route('question')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                            @csrf
                            <table class="contactTable">
                                <tbody>
                                <tr>
                                    <th><span class="redTxt">※</span>お問い合わせ項目</th>
                                    <td>
                                        <div class="selectWrapper">
                                            <span
                                                class="wpcf7-form-control-wrap your-contact">
                                                <select name="your_contact"
                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false">
                                                    <option value="採用について">採用について</option>
                                                    <option value="見積もり">見積もり</option>
                                                    <option value="問い合わせ">問い合わせ</option>
                                                    <option value="その他">その他</option>
                                                </select>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="contactTable_companyHead">会社名</th>
                                    <td><span class="wpcf7-form-control-wrap company-name">
                                            <input type="text" name="company_name" value="" size="40"
                                                   class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                   placeholder="個人の方は空欄ままで結構です">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="redTxt">※</span>名前</th>
                                    <td><span class="wpcf7-form-control-wrap your-name">
                                            <input type="text" name="your_name" value="" size="40"
                                                   class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                   placeholder="お名前をご入力ください">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="redTxt">※</span>フリガナ</th>
                                    <td>
                                        <span class="wpcf7-form-control-wrap your-phonetic">
                                            <input type="text" name="your_phonetic" value="" size="40"
                                                   class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                   placeholder="フリガナをご入力ください">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="redTxt">※</span>メールアドレス</th>
                                    <td>
                                        <span class="wpcf7-form-control-wrap your-email">
                                            <input type="email" name="your_email" value="" size="40"
                                                   class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                   aria-required="true" aria-invalid="false" placeholder="例) example@example.com">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="redTxt">※</span>お問い合わせ内容</th>
                                    <td>
                                        <span class="wpcf7-form-control-wrap your-message">
                                            <textarea name="your_message" cols="40" rows="10"
                                                      class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                      aria-required="true" aria-invalid="false" placeholder="お問い合わせ内容をご入力ください">
                                            </textarea>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>プライバシーポリシー</th>
                                    <td>
                                        <div class="contactTable_policyArea">
                                            <h3>個人情報の取り扱いについて</h3>
                                            <p>
                                                プライバシーポリシーについて<br>
                                                当プライバシーポリシーは、株式会社FUTURES(以下弊社)がインターネットに関連して取り扱う個人情報の保護について、そのポリシーを規定するものです。<br><br>
                                                個人情報の収集について<br>
                                                弊社は、お客様個人を特定できる情報
                                                (個人情報)や、お客様にご連絡を差し上げるための情報が必要な場合に、情報の提供をお願いすることがあります。また、弊社はお客様のハードウェアおよびソフトウェアに関する特定の情報を収集します。この種の情報には、IP
                                                アドレス、ブラウザの種類、オペレーティングシステム、お客様が閲覧されたページなどが含まれる場合があります。このようにして収集された情報は、弊社サービスの運用、弊社サービスの品質の維持、および弊社ホームページの利用状況に関する統計の作成のために使用されます。<br><br>
                                                個人情報の保護<br>
                                                弊社は、法の定めるところによる請求を受けた場合、または自己防衛として法的手段などを適用しなければならない場合を除き、取り扱っている個人情報を本人の同意なく第三者に開示する事はありません。ただし、弊社の運用するネットワークサービスにつき、誠意ある形でその脆弱性などについての御指摘をいただく場合には、情報提供者の秘密を守ることを、法の定めるところによる請求などに対して優先いたします。<br><br>
                                                お問い合せ<br>
                                                当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。<br>
                                                info@futures-inc.co.jp
                                            </p>
                                        </div>
                                        <p><span class="wpcf7-form-control-wrap acceptance">
                                                <span class="wpcf7-form-control wpcf7-acceptance">
                                                    <span class="wpcf7-list-item">
                                                        <label>
                                                            <input type="checkbox" name="acceptance"
                                                                   value="1" aria-invalid="false">
                                                            <span class="wpcf7-list-item-label">個人情報の取り扱いについて、上記事項に同意します。</span>
                                                        </label>
                                                    </span>
                                                </span>
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="contactForm_btnWrapper">
                                <input type="submit" value="送信" class="wpcf7-form-control wpcf7-submit contactForm_btn" disabled="">
                                <span class="ajax-loader"></span>
                            </p>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div>
                </section> <!-- contact -->
            </div>
        </article>


    </main>
@endsection

@section('page-js')

@endsection
