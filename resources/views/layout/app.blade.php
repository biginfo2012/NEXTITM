<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-132219620-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-132219620-1');
    </script>

    <meta charset="UTF-8">
    <title>株式会社NEXT ITM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="https://futures-inc.co.jp/wp-content/themes/futures/favicon.ico">

    <!-- All in One SEO Pack 2.10.1 by Michael Torbert of Semper Fi Web Design[416,434] -->
    <meta name="description" content="Webデザイン、オフィスソリューション、店舗コンサルティングを通し、全てのユーザー・クライアントが満足できるサービスの提供を目指しております。">

    <link rel="next" href="https://domain.com/">
    <meta property="og:title" content="株式会社NEXT ITM">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://domain.com/">
    <meta property="og:site_name" content="NEXTITM">
    <meta property="og:description" content="Webデザイン、オフィスソリューション、店舗コンサルティングを通し、全てのユーザー・クライアントが満足できるサービスの提供を目指しております。">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="株式会社NEXT ITM">
    <meta name="twitter:description" content="Webデザイン、オフィスソリューション、店舗コンサルティングを通し、全てのユーザー・クライアントが満足できるサービスの提供を目指しております。">
    <!-- /all in one seo pack -->
    <link rel="dns-prefetch" href="//s.w.org">
{{--    <link rel="alternate" type="application/rss+xml" title="FUTURES » フィード" href="https://futures-inc.co.jp/feed/">--}}
{{--    <link rel="alternate" type="application/rss+xml" title="FUTURES » コメントフィード"--}}
{{--          href="https://futures-inc.co.jp/comments/feed/">--}}
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/futures-inc.co.jp\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.13"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <script src="{{ asset('js/wp-emoji-release.min.js') }}" type="text/javascript"
            defer=""></script>
    @yield('page-css')
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css"
          href="{{ asset('css/style.min.css?ver=5.0.13') }}" type="text/css"
          media="all">
    <link rel="stylesheet" id="contact-form-7-css"
          href="{{ asset('css/styles.css?ver=5.1') }}"
          type="text/css" media="all">
    <link rel="stylesheet" id="futures-style-css"
          href="{{ asset('css/style_theme.css') }}" type="text/css" media="all">
    <script type="text/javascript" src="{{ asset('js/jquery.js?ver=1.12.4') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>

    <script type="text/javascript"
            src="{{ asset('js/jquery-migrate.min.js?ver=1.4.1') }}"></script>
{{--    <link rel="https://api.w.org/" href="https://futures-inc.co.jp/wp-json/">--}}
{{--    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://futures-inc.co.jp/xmlrpc.php?rsd">--}}
{{--    <link rel="wlwmanifest" type="application/wlwmanifest+xml"--}}
{{--          href="https://futures-inc.co.jp/wp-includes/wlwmanifest.xml">--}}
{{--    <meta name="generator" content="WordPress 5.0.13">--}}
{{--    <link rel="shortlink" href="https://futures-inc.co.jp/">--}}
{{--    <link rel="alternate" type="application/json+oembed"--}}
{{--          href="https://futures-inc.co.jp/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffutures-inc.co.jp%2F">--}}
{{--    <link rel="alternate" type="text/xml+oembed"--}}
{{--          href="https://futures-inc.co.jp/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffutures-inc.co.jp%2F&amp;format=xml">--}}
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
</head>
<body class="home page-template-default page page-id-48 wp-custom-logo">
<!-- preloader -->
<div id="preloader">
    <div id="spinner">
        <div class="preloader-dot-loading">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
{{--    <div id="disable-preloader" class="btn btn-default btn-sm"></div>--}}
</div>
<div id="page" class="site">
    <!-- <a class="skip-link screen-reader-text" href="#content"></a> -->
{{--    <div class="gridLines">--}}
{{--        <span class="grid_line"></span>--}}
{{--        <span class="grid_line"></span>--}}
{{--        <span class="grid_line"></span>--}}
{{--        <span class="grid_line"></span>--}}
{{--        <span class="grid_line"></span>--}}
{{--        <span class="grid_line last"></span>--}}
{{--    </div>--}}

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

</div><!-- #page -->

<script type="text/javascript">
    let $preloader = $('#preloader');
    $(document).ready(function () {
        $preloader.fadeOut();
        $preloader.children('#disable-preloader').on('click', function(e) {
            $preloader.fadeOut();
            return false;
        });
    })

    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/futures-inc.co.jp\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript"
        src="{{ asset('js/scripts.js?ver=5.1') }}"></script>
<script type="text/javascript"
        src="{{ asset('js/main.js?ver=5.0.13') }}"></script>
<script type="text/javascript"
        src="{{ asset('js/navigation.js?ver=20151215') }}"></script>
<script type="text/javascript"
        src="{{ asset('js/skip-link-focus-fix.js?ver=20151215') }}"></script>
<script type="text/javascript" src="{{ asset('js/wp-embed.min.js?ver=5.0.13') }}"></script>

@yield('page-js')
</body>
</html>
