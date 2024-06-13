<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>BitGrid Strategy</title>
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
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAANlBMVEUAAADMzMzOzs7Ozs7Ozs7Nzc3Ly8vNzc3Hx8fPz8/Ozs7Nzc3Ozs7Nzc3Ozs7Nzc3Pz8/Ozs5GhKiSAAAAEXRSTlMAQO9g33AwgCAQv5DPn7CPIKRmiGQAAAC7SURBVEjH7dTLEoMgDEDREHmLj/z/z9YF7dSCSZjpwoVnf0eRRHh8+DVHGLBbIkwDgaGDAa3kCh3spHwrh/QWQGGhLwuINjrZQDDRiXx0+xtk8XuOPWJug5kNShtYNqCOxM1cL4j8mVtmNJi4a7tfEHpB0F+0POK5FxRmN6kr8WduOWkZ1Cvh6IJjJ089Th6vA/TyAeQtQi5A9ofXQgd/FU0VlUFg5pRfVKMMkm2+pcBjvS21fc5riPCoXlqeKN947yKJAAAAAElFTkSuQmCC"></a>
                        <!---->
                    </div>
                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><a href="{{route('user.lang')}}"><img data-v-6df716d9="" data-v-cfc9a7fc=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAPFBMVEUAAADNzc3Ozs7Nzc3Nzc3Pz8/Ozs7Pz8/Hx8fMzMzNzc3Ozs7Ozs7Ozs7Nzc3Ozs7MzMzNzc3Ozs7Ozs6GsOFhAAAAE3RSTlMAgN9gcBDvICBAMM+/oJCwUI/A6fP77AAAAURJREFUSMftlc2WgyAMhdsoqCD+zH3/d50mmkYK1ll1MaffoqTnJJBcQrx9+QhN4N/gSdahuXAfiHjpCPA9W57ehbgVuLOR8GBi6w6s7sy/iwB6NsB4dnQPg/rSV/PAj9QBoWV7PI1w9HSaIcxst2zFWlYrmEEqheBFBjHXwl3TEE2x01v0UAQQoCUsGtBoEQDVDjAphV3iSYNz4kGYpAFpq1oYXyTFxqJJmEyLFaTYNhj0NEs8wA435uM2lAXo4Smv+b7hpGhFNnXPP/+N9lh0Wy06v+p0LetcvbiQBUTt7/LiuqI/i959eXXjVfPFenunv7W3JR41WFjOHpDV5rUgk8DbATlTfQgEfYkFLmra5ZghdzrIRnUyjS9Gn8xHzsmmZmSjipuOUqZdscm9+zrQppPXPIiGqw+KOATyQdbm9uUT/ALCJCSmWvDsuAAAAABJRU5ErkJggg=="></a>
                    </div>
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
                                                src="{{asset('')}}assets/static/upload/349a0fc0d488577f8f52f8ab6bef87cf.jpg">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-prev"
                                        data-swiper-slide-index="0" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/upload/9f17096603d789feaa3487b53f6d1f68.jpg">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-active"
                                        data-swiper-slide-index="1" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/upload/349a0fc0d488577f8f52f8ab6bef87cf.jpg">
                                        </div>
                                    </div>
                                    <div data-v-45836ea7="" class="swiper-slide swiper-slide-next"
                                        data-swiper-slide-index="2" style="width: 425px;">
                                        <div data-v-45836ea7="" class="item"><img data-v-45836ea7=""
                                                src="{{asset('')}}assets/static/upload/349a0fc0d488577f8f52f8ab6bef87cf.jpg">
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
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAXVBMVEUAAAD///////////////+m/32l/36m/36m/3yn/4Cf/3mk/3z///////+f/3j///+l/32m/3ym/3yl/32m/3z///+l/3uj/3ym/37///+l/33///////////+m/31ZZQvyAAAAHXRSTlMAYMDfIOCA78AgIHAQzxDvf6CQ789wYEDPsLCfXwQB4n4AAADoSURBVDjLzZLLloIwEEQLMW8MoI7Oi/7/z5yiZ+A4kujWWsCi7ulKJ4XX075tO2AwPsWKP00NILPGWPQVsE6oUyr6BKhgDZFh6/cKKDKSSPf+4W0FGMSUCHz306pD1yiQ/AXUUcQD7a2PZtnCRCA7kQzm7n710eEPOM5E1hBLYIdFC4BgaPHHjDKAq8bDiakA4Ah+zyI14PwEiCLvGnEqA1cmXBTzN2t+/V8TumZCX7goRz9wAOcENO32qu2nzQBGkfHRYw0iLmzqsAJ5PkiqFiYOjr6tVU5dcelxaX2o1H4PWOO5xuvoB7qzHHkn6/4VAAAAAElFTkSuQmCC"
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
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240305/48b209d9e0c8b108911785e5a136c405.png">
                                       <p data-v-6df716d9="" data-v-cfc9a7fc="" ><a href="{{route('user.strategy')}}" style="color:white;">Deposit</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240305/54ac7efb773104922091b6f8d46d487c.png">
                                             <p data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.Withdraw')}}" style="color:white;">Withdraw</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240305/eaa31429797c1a02783fc21aaafb140d.png">
                                        <p data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.about')}}" style="color:white;">About</a></p>
                                    </div>
                                </li>
                                <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <div data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240305/5b0695f769089437fccc9fd7b5f0ff47.png">
                                        <p data-v-6df716d9="" data-v-cfc9a7fc=""><a href="{{route('user.helpcenter')}}" style="color:white;">Help Center</a></p>
                                    </div>
                                </li>
                            </ul>
                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="incomeBox">
                                <ul data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <li data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="ico"><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="amount"> $0 </div>
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
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAABU1BMVEXm6/oAAAD////o7fv7/P79/v/2+P3x9P37/P7t8fz////////5+/7+///2+P73+P79/v/r7/z7/f79/v/v8vzs8Pv////+///////+/v/8/f76+//5+v74+v73+f/9/v/8/f/5+v7////+///+/v/9/v/8/f/7/P77+/78/P/3+f73+P7z9v3w8P/+///w8/7v8vv////////5+//5+/7v8vvs8fz3/f3////8/f/9/f/09fzv7//////////3+f3z9v709P3m7//u7v////////8AAABx3IF23YNz3IIgICDv7+/g4OCAgICU5aAQEBB634XAwMB43oRgYGCQkJB934ZAQEDg+OGgoKCB4Ih/4Ifb9t+n6qhQUFDPz8+g6KeE4on3/fid56SJ44u47r3v+/Dm+ejF8cevr6+r66yR5JaF4JIwMDDN89KwsLCm6LBwcHAkCKZWAAAARXRSTlMzAP02mcxlTIxA8+V/2Flzsjmmrz481NDNvKCGfF8fwJuC7sbDt6qVkYhtaFEI30pG6dt2b0QlD/i0ol0V+uJ5VRsFK+awc5UJAAAFpklEQVRo3rTNzWqDQBiF4ZMs4l/GBLQzExOHZtKNEEacBrQLhUK8/1vqP5USrZD5nt3ZnBeLAXXJjF7e0M+eWiYXNfwcBPLd0hGZ3wgEtm11so4D3CWID4luW5v/CdR+05gigBsH0zR+PQyoU1jt4VBRNUz9BhQPrQenPBty9ROoeSg9OObJ8FR/BwrNSjhXMl18BWLdlSBQdjr9DMjqCBL7Sn4E4kqAiKji98Du+gwix2uygIoYqKQsesWqy0Am61Z4NBuQ2RgfL+YMMmfzBGEfQCa1EoyBEGP0Ac5BiHP6gBCY4K3GxJhDiMmAH/bjovW8gJQYs+2nbfEvKfFGaxk0pwmEAZQDiIJpHHOKl2QmJv8huT8VxSKKtDpNU1uN1TbT/3/rB45CdJeQQ95wwdH33GX2GyzL0GACjqXDBcw3A2K/0QVsoGnoMSVfKxO40c0ROCv+MdSNYhJ7WxcwFVug+EIx7bZcHxy4uvrAgNj1gTpYxXMGzksELi8NNTWn+B82AdsoRuyaQK3asCSAa+lwUPRVgdtb45RPLgWUP8liVwZsh7dxqkapwP29cYILi+XPHU8p3/ZsNpvlCnBl8xrmec0oRuyN04VWxP+n1xuPR6PpdDqfz2ezHwm/UrbrFRlW8WEW+8XF6ZSGF8/zeoJEkkrSSCuiX7xjbItdFTBh2RU8IYmMxofIMtUPwmgSx/EkCncJuyhwd6cN7CPZStYI4WPQ2dOf+AhVQ43YVYEqrLs59ts1ewb8uPOa4QAw9YFmU/2Qu8d4vcQfBZ1j+r62IHa5lJN+9e/zMS/AsKMg+A3UdYGHB8VBdlCS9/8d9rObEBxbFRB7q1V+VESZMvAZ5O80o7elDgh1C+H5y4EF+EFu44HcEmKgotCI/fpa+86y2maHeQtMcsIh8PUx+yBSLkHs2sAZPKUnYBfZwPdsR0J2+IdEMICKMvCfEvNpTRgIongO0SYkVulVoXjy31HvnpaCm20aViRQkl5KEWql3//krJjNJHkL+sjFQH7Pzb4ZZ/UdAaPHWQl8/PAFJKKS5EsAeST6bOY2uIlMfumjZf1f0aWxKfkuRB0I0e8xIH0JkVlWWQVWU1T5OwqRwXyODSio73YJb9+8BhKeIGYLZgCiuwx8SlHdL/7aW5DotkWOqpnoQeAeKsRnJaqCusmpW4SOmhvsUUMiOjbojzrd4sDrlsfU2mKDxQK+n64Ya5fbmJ74CrrflejjMRrqgHSjgRYqk832dAabTHS6YIIG/daSLIq/9VZ4+8hgOkUngyhs3eKo9JagghukAtQB0ZGB3636kB63vfRIXKX1XpqGV93UsNtNYy+O75rLe6zSRC1pqyFDe2zok8ldBgFrbHnNP9hg4Vmb6HQBWA/VnV1CcZZX/H7H63jkQYPtFp4vY7AsybrDqdmPNF6Aoa/XcKoQr35LpjmnjZ9M9kniI6+hD4dgfI8EVs6KIFF8MjLBBhpCA3IYCawjn7s4H08thr7Z4HN+4HdkXJNdh19I4TwOEn259LBcPVA1LU6ZOe3EHhTRnQbu/3dkbtOfHgxeRM+e22C18h7Q00AYySxXSuWluOol9FwiOl0PKW4nrGd7KDa41GruqhHDQBS9YoKFSVgyIJX2F0hYjbSFXfjx//+UiR3WJiwLC5qjRzNwbqNOt2nwJs3352n/aPEKsct+H9v8PrKv5rC/Dug66CF25YCxwzhCEbHfbtBD7PoBYSaoQXPAMDPU4DmDgoMaLjBKSFAjh4JoLdSwNsKw9VDCW2dgliFBiTQsEmBc8lDBp+M39p4yQQHKadkDTMktKfjbXMwRsFLr6vtdy+seIER2vrbfO4pn7SGS91TX7xGvxY2198xUTc/M/fqvejJBEqiKXvy4PynPTBtVokynFeZCnMoGEB1nvwkn9JgRPabiw98iCFs/xavzBzKCQrkORikkAAAAAElFTkSuQmCC">
                                        </div>
                                        <div data-v-6df716d9="" data-v-cfc9a7fc="" class="flex1">
                                            <div data-v-6df716d9="" data-v-cfc9a7fc="" class="amount"> $6.1642 </div>
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
                                    <div data-v-6df716d9="" data-v-cfc9a7fc="" class="view"> view all </div>
                                </div>
                                <table data-v-6df716d9="" data-v-cfc9a7fc="">
                                    <tr data-v-6df716d9="" data-v-cfc9a7fc="">
                                        <td data-v-6df716d9="" data-v-cfc9a7fc=""><img data-v-6df716d9=""
                                                data-v-cfc9a7fc=""
                                                src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/1972eff0dd4ca2c8671a653a0d6f80ff.png"><span
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
                                                src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/9e96d563eec7f2217c5479d95d98ea14.png"><span
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
                                                src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/14187531babdf7b88ad8849de4f402b3.png"><span
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
                                                src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/1300dfbf56cae29948a5162db60d7b8b.png"><span
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