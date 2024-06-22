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
                            src="{{ asset('') }}assets/static/img/earth.png"></a> </div>
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
                                        <div data-v-45836ea7="" class="item">
                                                <iframe src="https://www.youtube.com/embed/D4N5YK6vn_Q?autoplay=1&controls=0&showinfo=0&rel=0&modestbranding=1&mute=0" width="100%" height="100%"  frameborder="0" allow="autoplay; encrypted-media"></iframe>


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

                                    <marquee direction="left" scrollamount="5" behavior="scroll">@lang('Welcome Synthetic ventures - Your Ultimate Platform for Everything!')
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
                                       <p data-v-6df716d9="" data-v-cfc9a7fc="" >@lang('Deposit')</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.Withdraw')}}" style="color:white;"><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/14.png">
                                             <p data-v-6df716d9="" data-v-cfc9a7fc="">@lang('Withdraw')</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.team')}}" style="color:white;"><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/5b0695f769089437fccc9fd7b5f0ff47.png">
                                        <p data-v-6df716d9="" data-v-cfc9a7fc="">@lang('My Team')</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.helpcenter')}}" style="color:white;">
                                        <img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="{{asset('')}}assets/static/img/15.png">
                                        <p data-v-6df716d9="" data-v-cfc9a7fc="">@lang('Help Center')</a></p>
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
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="amount"> {{currency()}} {{number_format(Auth::user()->available_balance(),2)}} </div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">@lang('Total assets')</div>
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
                                          
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="amount">{{currency()}} {{number_format($todaysIncome,2)}} </div>
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">@lang('Todays earnings')
                                            </div>
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
                         
                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="quotes">
                                <div data-v-6df716d9="" data-v-cfc9a7fc="" class="name">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">@lang('Transactions')</div>
                                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="view"><a  style="color:#fff;" href="{{route('user.Market')}}">@lang('view all') </a></div>
                                </div>
                                <table data-v-6df716d9="" data-v-cfc9a7fc="">

                                   
                                    <tbody id="crypto-container">
                                        <tr data-v-6df716d9="" data-v-cfc9a7fc="">
                                            <td data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                                    data-v-cfc9a7fc=""
                                                    src="{{asset('')}}assets/static/upload/1972eff0dd4ca2c8671a653a0d6f80ff.png"><span
                                                    data-v-6df716d9="" data-v-cfc9a7fc="" class="buyCoinName"
                                                    style="display: inline-block;">BTCUSDT<br data-v-6df716d9=""
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
                                                    style="display: inline-block;">ETHUSDT<br data-v-6df716d9=""
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
                                                    style="display: inline-block;">FILUSDT<br data-v-6df716d9=""
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
                                                    style="display: inline-block;">BNBUSDT<br data-v-6df716d9=""
                                                        data-v-cfc9a7fc=""><span data-v-6df716d9="" data-v-cfc9a7fc=""
                                                        class="sellCoinName"
                                                        style="color: rgb(146, 146, 146);">USDT</span></span></td>
                                            <td data-v-6df716d9="" data-v-cfc9a7fc="">$680.1</td>
                                            <td data-v-6df716d9="" data-v-cfc9a7fc=""><var data-v-6df716d9=""
                                                    data-v-cfc9a7fc="" class="on">-0.38%</var></td>
                                        </tr>
                                    </tbody>
                                   
                                </table>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
  
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="{{asset('')}}assets/js/dashboard.js"></script>
            {{-- <script src="{{asset('')}}assets/js/crypto.js"></script> --}}

            @include('layouts.upnl.footer')