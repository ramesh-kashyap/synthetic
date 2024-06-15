<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>{{siteName()}}</title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <link rel="icon" href="/logo1.ico" type="image/x-icon">
    <link rel="manifest" href="/manifest.json">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <meta name="google" content="notranslate">
    <script>
        window.addEventListener("error", function (event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        window.onload = function () {
            document.addEventListener("touchstart", function (event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
            var lastTouchEnd = 0;
            document.addEventListener(
                "touchend",
                function (event) {
                    var now = new Date().getTime();
                    if (now - lastTouchEnd <= 300) {
                        event.preventDefault();
                    }
                    lastTouchEnd = now;
                },
                false
            );
            document.addEventListener("gesturestart", function (event) {
                event.preventDefault();
            });
        };

        if ("standalone" in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                "click",
                function (event) {
                    noddy = event.target;
                    while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                        noddy = noddy.parentNode;
                    }
                    if (
                        "href" in noddy &&
                        noddy.href.indexOf("http") !== -1 &&
                        (noddy.href.indexOf(document.location.host) !== -1 || remotes)
                    ) {
                        event.preventDefault();
                        document.location.href = noddy.href;
                    }
                },
                false
            );
        }

    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            background-color: #000;
        }

    </style>
    <link href="{{ asset('') }}assets/static/js/app.83a7756d.1717187934571.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"
        rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"
        rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"
        rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"
        rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/css/app.23ae5dc0.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/static/css/app.23ae5dc0.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8"
        src="{{ asset('') }}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-6df716d9="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-6df716d9="" data-v-cfc9a7fc="" class="userHead flex">
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="photo"><img data-v-6df716d9="" data-v-cfc9a7fc=""
                            src="{{ asset('') }}assets/static/img/logo1.png">
                    </div>
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">
                    <!-- <div data-v-6df716d9="" data-v-cfc9a7fc="" class="n">Welcom to </div>
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="nickname"> riteshkk </div>
                       
                        -->
                    </div>
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><a href="{{route('user.meassage')}}"><img data-v-6df716d9="" data-v-cfc9a7fc=""
                            src="{{ asset('') }}assets/static/img/bell.png">
                    </div>
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><a href="{{route('user.lang')}}"><img data-v-6df716d9="" data-v-cfc9a7fc=""
                            src="{{ asset('') }}assets/static/img/earth.png"></div>
                </div>
            </div>
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <!---->
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="home">
                        <div data-v-45836ea7="" data-v-6df716d9="" class="banner" data-v-cfc9a7fc="">
                            <div data-v-45836ea7=""
                                class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight">
                                <div class="swiper-wrapper"
                                    style="transition-duration: 0ms; transform: translate3d(-850px, 0px, 0px); height: 239px;">
                                    <div data-v-45836ea7=""
                                        class="swiper-slide swiper-slide-active"
                                        data-swiper-slide-index="2" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/img/21.jpeg">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-prev"
                                        data-swiper-slide-index="0" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/img/21.jpeg">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-active"
                                        data-swiper-slide-index="1" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/img/21.jpeg">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-next"
                                        data-swiper-slide-index="2" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/img/21.jpeg">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7=""
                                        class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                        data-swiper-slide-index="0" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/upload/9f17096603d789feaa3487b53f6d1f68.jpg">
                                        </div>
                                    </div>
                                </div> <span class="swiper-notification" aria-live="assertive"
                                    aria-atomic="true"></span>
                            </div>
                            <div data-v-45836ea7="" class="navigation_dot">
                                <div data-v-45836ea7="" class="dot"></div>
                                <div data-v-45836ea7="" class="dot"></div>
                                <div data-v-45836ea7="" class="dot on"></div>
                            </div>
                        </div>
                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="container">
                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="notice_bar">
                                <div data-v-6df716d9="" role="alert" class="van-notice-bar" data-v-cfc9a7fc=""
                                    style="color: rgba(255, 255, 255, 0.7); background: none;"><i
                                        class="van-icon van-notice-bar__left-icon"><img
                                            src="{{asset('')}}assets/static/img/raj.png"
                                            class="van-icon__image">
                                        <!----></i>
                                    <div role="marquee" class="van-notice-bar__wrap">

                                    <marquee direction="left" scrollamount="5" behavior="scroll">Welcome Synthetic ventures - Your Ultimate Platform for
            Everything!
        </marquee>
                                      
                                    </div>

                                </div>
                            </div>
                            <ul data-v-6df716d9="" data-v-cfc9a7fc="" class="nav1">
                                
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <a href="{{route('user.strategy')}}" style="color:white;">
                                        <img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/12.png">
                                       <p data-v-6df716d9="" data-v-cfc9a7fc="" ><a href="{{route('user.strategy')}}" style="color:white;">Deposit</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.Withdraw')}}" style="color:white;"><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/14.png">
                                             <p data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.Withdraw')}}" style="color:white;">Withdraw</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.about')}}" style="color:white;"><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/15.png">
                                        <p data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.about')}}" style="color:white;">About</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.helpcenter')}}" style="color:white;">
                                        <img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/5b0695f769089437fccc9fd7b5f0ff47.png">
                                        <p data-v-6df716d9="" data-v-cfc9a7fc="">Help Center</a></p>
                                    </div>
                                </li>
                            </ul>
                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="incomeBox">
                                <ul data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/img/122.png">  </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="amount">{{currency()}} {{number_format($todaysIncome,2)}} </div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">Today's earnings
                                            </div>
                                        </div>
                                    </li>
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="" class="x"><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAi8AAAAJCAMAAADNYDx0AAAAOVBMVEUAAAD///////////////////////////////////////////////////////////////////////8KOjVvAAAAEnRSTlMAwN8goGAQ70CAsHBQf88wr5B+q07GAAABYElEQVRYw83X226DMBCE4TU2NpCQw77/w7bFVqfxCCrNlf9LJ/gTWSciZnYPXlI0tE8+/V3Ie/HHzVB8fS/Mdt4SigfsIBiITMHgYMoGIlM1uPHms/tPE15LdSH/6tOxkKxb2M/v0I/uVhMMRKZkcDBlA5EpGdyA84leC9aavbbi2tpsreC1xU6a/KhUTjAQmaqByFQNRKZmcOPNZ/VW7LSC3Wub1bK3bpfHFwdYMBCZooHIFA0Opmhww80neeuJ99as5d3pe3orXX7LcOIFA5EpGohM0eBgigY33Hxu3srdxQ/5/C7++YMoGIhM0UBkigYHUzS44eaTS3cYl15b+zt6+VGJ/0xisppgIDJFA5GpGohM0eDGm8/cPxuv/WeSuufGXL35+s8MthQMRKZmIDJFg4OpGtyA84kpbGs2tGxh+8DmENLSLbyfdl58h4AtBQORKRmITNHgYKoGN9x8vgDEBG7IN9Y1ggAAAABJRU5ErkJggg==">
                                    </li>
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/img/122.png"> </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="amount"> {{currency()}} {{number_format(Auth::user()->available_balance(),2)}} </div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">Total assets</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div data-v-83cbb658="" data-v-6df716d9="" class="tabs-con" data-v-cfc9a7fc="">
                                <div data-v-83cbb658="" class="van-tabs van-tabs--line">
                                    <div class="van-tabs__wrap van-tabs__wrap--scrollable">
                                        <div role="tablist"
                                            class="van-tabs__nav van-tabs__nav--line van-tabs__nav--complete">
                                            <div role="tab" aria-selected="true" class="van-tab van-tab--active"><span
                                                    class="van-tab__text"></span></div>
                                            <div role="tab" class="van-tab"><span
                                                    class="van-tab__text"></span></div>
                                            <div role="tab" class="van-tab"><span class="van-tab__text"></span>
                                            </div>
                                            <div role="tab" class="van-tab"><span class="van-tab__text"></span>
                                            </div>
                                            <div class="van-tabs__line"
                                                style="transform: translateX(52.5px) translateX(-50%); transition-duration: 0.3s;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="van-tabs__content">
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <!-- <div data-v-6df716d9="" data-v-cfc9a7fc="" class="clBox">
                                <ul data-v-6df716d9="" data-v-cfc9a7fc="" class="cllist">
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="" class="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="title">VIP1</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="mini">$50 [Mini]</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="rate">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="s"> 1.8<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span>-2<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span></div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="n">Daily income</div>
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="lv"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">LV.1
                                        </div><img data-v-6df716d9="" data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240319/3dc7be2d187bdf6ff56095aa33e5de43.png"
                                            class="img">
                                    </li>
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="" class="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="title">VIP2</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="mini">$300 [Mini]</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="rate">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="s"> 2.2<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span>-2.4<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span></div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="n">Daily income</div>
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="lv"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">LV.2
                                        </div><img data-v-6df716d9="" data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240320/9d1631e4b7ca54f0a8e1dc684a6d0b71.png"
                                            class="img">
                                    </li>
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="" class="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="title">VIP3</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="mini">$600 [Mini]</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="rate">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="s"> 2.6<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span>-2.8<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span></div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="n">Daily income</div>
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="lv"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">LV.3
                                        </div><img data-v-6df716d9="" data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240320/2fc893a4514324919cd7eb46efd3c9a9.png"
                                            class="img">
                                    </li>
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="" class="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="title">VIP4</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="mini">$1200 [Mini]</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="rate">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="s"> 3<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span>-3.3<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span></div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="n">Daily income</div>
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="lv"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">LV.4
                                        </div><img data-v-6df716d9="" data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240320/d76bc0ee51f50e119c486b84b0ee1e07.png"
                                            class="img">
                                    </li>
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="" class="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="title">VIP5</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="mini">$3000 [Mini]</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="rate">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="s"> 3.4<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span>-3.8<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span></div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="n">Daily income</div>
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="lv"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">LV.5
                                        </div><img data-v-6df716d9="" data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240320/04c0ac8fd9183ba52c66ea44aeaa7b22.png"
                                            class="img">
                                    </li>
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="" class="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="title">VIP6</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="mini">$5000 [Mini]</div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="rate">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="s"> 4<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span>-4.6<span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="">%</span></div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="n">Daily income</div>
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="lv"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">LV.6
                                        </div><img data-v-6df716d9="" data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240320/bd13af51ea1d7d1adb9db64ac1ed70b0.png"
                                            class="img">
                                    </li>
                                </ul>
                            </div> -->
                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="quotes">
                                <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">Transactions</div>
                                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="view" style="color:#fff;"> view all </div>
                                </div>
                                <table data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <tr data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/upload/1972eff0dd4ca2c8671a653a0d6f80ff.png"><span
                                                data-v-6df716d9="" data-v-cfc9a7fc="" class="buyCoinName"
                                                style="display: inline-block;">BTC<br data-v-6df716d9=""
                                                    data-v-cfc9a7fc=""><span data-v-6df716d9="" data-v-cfc9a7fc=""
                                                    class="sellCoinName"
                                                    style="color: rgb(146, 146, 146);">USDT</span></span></td>
                                        <td data-v-6df716d9="" data-v-cfc9a7fc="">$69308.75</td>
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><var data-v-6df716d9=""
                                                data-v-cfc9a7fc="" class="">+0.00%</var></td>
                                    </tr>
                                    <tr data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/upload/9e96d563eec7f2217c5479d95d98ea14.png"><span
                                                data-v-6df716d9="" data-v-cfc9a7fc="" class="buyCoinName"
                                                style="display: inline-block;">ETH<br data-v-6df716d9=""
                                                    data-v-cfc9a7fc=""><span data-v-6df716d9="" data-v-cfc9a7fc=""
                                                    class="sellCoinName"
                                                    style="color: rgb(146, 146, 146);">USDT</span></span></td>
                                        <td data-v-6df716d9="" data-v-cfc9a7fc="">$3688.76</td>
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><var data-v-6df716d9=""
                                                data-v-cfc9a7fc="" class="">+0.19%</var></td>
                                    </tr>
                                    <tr data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/upload/14187531babdf7b88ad8849de4f402b3.png"><span
                                                data-v-6df716d9="" data-v-cfc9a7fc="" class="buyCoinName"
                                                style="display: inline-block;">FIL<br data-v-6df716d9=""
                                                    data-v-cfc9a7fc=""><span data-v-6df716d9="" data-v-cfc9a7fc=""
                                                    class="sellCoinName"
                                                    style="color: rgb(146, 146, 146);">USDT</span></span></td>
                                        <td data-v-6df716d9="" data-v-cfc9a7fc="">$6.226</td>
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><var data-v-6df716d9=""
                                                data-v-cfc9a7fc="" class="">+2.84%</var></td>
                                    </tr>
                                    <tr data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/upload/1300dfbf56cae29948a5162db60d7b8b.png"><span
                                                data-v-6df716d9="" data-v-cfc9a7fc="" class="buyCoinName"
                                                style="display: inline-block;">BNB<br data-v-6df716d9=""
                                                    data-v-cfc9a7fc=""><span data-v-6df716d9="" data-v-cfc9a7fc=""
                                                    class="sellCoinName"
                                                    style="color: rgb(146, 146, 146);">USDT</span></span></td>
                                        <td data-v-6df716d9="" data-v-cfc9a7fc="">$680.1</td>
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><var data-v-6df716d9=""
                                                data-v-cfc9a7fc="" class="on">-0.38%</var></td>
                                    </tr>
                                </table>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
  
            @include('layouts.upnl.footer')