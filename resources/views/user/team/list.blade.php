<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Team List</title>
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
    <link href="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/css/app.23ae5dc0.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}assets/static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{asset('')}}assets/static/css/app.23ae5dc0.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-aef56f2a.f587d975.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-aef56f2a.b3c068cc.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-4d56d011.d2239d8d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-4d56d011.55574f9a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-a46085d6.d2823003.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-a46085d6.6a4896cb.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-97c0768a.2ab4315e.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-97c0768a.b8196644.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f31ad6d4.2882463c.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f31ad6d4.836d485b.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-0830ec22.59462d6e.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-0830ec22.94ec9a30.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-529a9802.d4a866bb.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-529a9802.18a0309a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a326f81.d6e1e630.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a326f81.29676938.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-11fdeb57.9da27de0.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-11fdeb57.5252596d.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8870696.ba836efa.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8870696.d3c72f4a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-8ea63dfa.b7fc1269.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-8ea63dfa.a6b9af6e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-5109cffc.e3562785.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-5109cffc.3f1196fb.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-17b291de.e7b989c3.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-17b291de.8772eeeb.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-64987b26.5bff7a5a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-64987b26.1b0de86e.1717187934571.chunk.js"></script>
</head>

<body class="main_en">
    <div id="app" class="applang">
        <div data-v-a5a9abc4="" class="home">
            <div data-v-cfc9a7fc="" data-v-a5a9abc4="" class="page">
                <div data-v-cfc9a7fc="" class="headers">
                    <div data-v-397da544="" data-v-a5a9abc4="" class="head" data-v-cfc9a7fc="">
                        <div data-v-397da544="" class="container flex">
                            <div data-v-397da544="" class="back"><i data-v-397da544=""
                                    class="van-icon van-icon-arrow-left">
                                    <!----></i></div>
                            <!---->
                            <div data-v-397da544="" class="name tac"> Team List </div>
                            <div data-v-397da544="" class="flex1"></div>
                            <!---->
                            <!---->
                            <!---->
                            <div data-v-397da544="" class="head_right"></div>
                        </div>
                    </div>
                </div>
                <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                    <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                        <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="container">
                            <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="box1">
                                <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="totalBox">
                                    <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="n">Total：0</div>
                                    <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="lvSet"> First generation data <img
                                            data-v-a5a9abc4="" data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkAgMAAACcbnALAAAADFBMVEUAAAD///////////84wDuoAAAABHRSTlMAzGZMZ+vIJAAAAEdJREFUGNNjGDhgA8YgcA2Ip4NZVxsYmMLBLNUEBs4IEANIgTggwBTGMLUBonlqUxjUGNXMCCiLMzQBymIKbYDZMg3JvgEEAG9+C4cqfDR2AAAAAElFTkSuQmCC">
                                    </div>
                                </div>
                                <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="lvList">
                                    <div data-v-a5a9abc4="" data-v-cfc9a7fc="" _echarts_instance_="ec_1718101505441"
                                        style="width: 100%; height: 6rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                                        <div
                                            style="position: relative; width: 353px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                            <canvas data-zr-dom-id="zr_0" width="706" height="600"
                                                style="position: absolute; left: 0px; top: 0px; width: 353px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                            <div
                                                style="position: absolute !important; visibility: hidden !important; padding: 0px !important; margin: 0px !important; border-width: 0px !important; user-select: none !important; width: 0px !important; height: 0px !important; inset: 0px auto auto 0px !important;">
                                            </div>
                                            <div
                                                style="position: absolute !important; visibility: hidden !important; padding: 0px !important; margin: 0px !important; border-width: 0px !important; user-select: none !important; width: 0px !important; height: 0px !important; inset: 0px 0px auto auto !important;">
                                            </div>
                                            <div
                                                style="position: absolute !important; visibility: hidden !important; padding: 0px !important; margin: 0px !important; border-width: 0px !important; user-select: none !important; width: 0px !important; height: 0px !important; inset: auto auto 0px 0px !important;">
                                            </div>
                                            <div
                                                style="position: absolute !important; visibility: hidden !important; padding: 0px !important; margin: 0px !important; border-width: 0px !important; user-select: none !important; width: 0px !important; height: 0px !important; inset: auto 0px 0px auto !important;">
                                            </div>
                                        </div>
                                        <div class=""></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="empty db" style="">
                                <div data-v-a5a9abc4="" data-v-cfc9a7fc="" class="flexs">
                                    <div data-v-a5a9abc4="" class="custom-image van-empty" data-v-cfc9a7fc="">
                                        <div class="van-empty__image"><img src="{{asset('')}}assets/static/img/none.66fca9cb.png"></div>
                                        <p class="van-empty__description">No record yet</p>
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div data-v-4c14e1cc="" data-v-a5a9abc4="" data-v-cfc9a7fc="">
                            <div class="van-overlay" style="z-index: 2005; display: none;"></div>
                            <div data-v-4c14e1cc="" class="van-popup van-popup--round van-popup--bottom"
                                style="background: none; z-index: 2006; display: none;">
                                <div data-v-4c14e1cc="" class="popup_box">
                                    <div data-v-4c14e1cc="" class="scroll">
                                        <div data-v-4c14e1cc="" class="ul">
                                            <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item"> All </div>
                                            </div>
                                            <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item active"> First generation data
                                                </div>
                                            </div>
                                            <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item"> Second generation data </div>
                                            </div>
                                            <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item"> Third generation data </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-4c14e1cc="" class="esc">Cancel</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           @include('layouts.upnl.footer')
