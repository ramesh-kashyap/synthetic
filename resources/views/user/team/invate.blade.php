<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Invite friends</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-aef56f2a.f587d975.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-aef56f2a.b3c068cc.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-55f99183.7fd6d71d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-55f99183.e36ebbe6.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-422886cf="" class="home">
            <div data-v-cfc9a7fc="" data-v-422886cf="" class="page" style="background: transparent;">
                <div data-v-cfc9a7fc="" class="headers">
                    <div data-v-397da544="" data-v-422886cf="" class="head" data-v-cfc9a7fc="">
                        <div data-v-397da544="" class="container flex">
                            <div data-v-397da544="" class="back"><a href="{{route('user.Mine')}}" style="color:#fff;"><i data-v-397da544=""
                                    class="van-icon van-icon-arrow-left">
                                    <!----></i></a></div>
                            <!---->
                            <div data-v-397da544="" class="name tac"> Invite friends </div>
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
                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="container">
                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="text_box">
                                <div data-v-422886cf="" data-v-cfc9a7fc="" class="flex">
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" ><img data-v-422886cf=""
                                            data-v-cfc9a7fc=""
                                            src="{{ asset('') }}assets/static/img/logo2.png" style="width:80px;"> 
                                    </div>
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" class="info">
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="n"> riteshkk <img
                                                data-v-422886cf="" data-v-cfc9a7fc=""
                                                src="{{asset('')}}assets/static/img/lv1.0c323966.png"></div>
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="cid"> UID: <span
                                                data-v-422886cf="" data-v-cfc9a7fc="">119103</span></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="income">
                                <div data-v-422886cf="" data-v-cfc9a7fc="">Total Commission：<span data-v-422886cf=""
                                        data-v-cfc9a7fc="">0 USDT</span></div>
                            </div>
                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="box">
                                <div data-v-422886cf="" data-v-cfc9a7fc="" class="m">
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" class="qrcode"
                                        title="https://ai.bitgrid.cloud/user/reg2/?inviteCode=4KLYJQ"><canvas
                                            width="180" height="180" style="display: none;"></canvas><img alt="Scan me!"
                                            src="data:image/png;base64,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"
                                            style="display: block;"></div>
                                </div>
                                <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_list">
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_box">
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="title">Invitation link</div>
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_content">
                                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="link">
                                                https://ai.bitgrid.cloud/user/reg2/?inviteCode=4KLYJQ</div>
                                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="copy"><img
                                                    data-v-422886cf="" data-v-cfc9a7fc=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAQlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////8IX9KGAAAAFXRSTlMAkSNtB1L04di+eKyTzs2acl4VC6s3epBYAAAAkUlEQVQoz53R2QoDIQyFYZe423Zm2vP+r9pQjAvYm/mvAh8RUSXZgFF0SspYEyEPJN2qD95pYICiRiwD7AT1H+gfkLm2kD3gNmDBHRsIwOekDQCJpy3ou/CaIHV4g8VKBQgNeHnNCtAiPisBPs2MSAlIdMgPMdQJTuDq8JygAKaNkUVLCfDUwGGN7yMSMQr9Yb79PxCb2V0yIwAAAABJRU5ErkJggg==">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_box">
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="title">Invitation code</div>
                                        <div data-v-422886cf="" data-v-cfc9a7fc="" class="link_content">
                                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="link">4KLYJQ</div>
                                            <div data-v-422886cf="" data-v-cfc9a7fc="" class="copy"><img
                                                    data-v-422886cf="" data-v-cfc9a7fc=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAQlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////8IX9KGAAAAFXRSTlMAkSNtB1L04di+eKyTzs2acl4VC6s3epBYAAAAkUlEQVQoz53R2QoDIQyFYZe423Zm2vP+r9pQjAvYm/mvAh8RUSXZgFF0SspYEyEPJN2qD95pYICiRiwD7AT1H+gfkLm2kD3gNmDBHRsIwOekDQCJpy3ou/CaIHV4g8VKBQgNeHnNCtAiPisBPs2MSAlIdMgPMdQJTuDq8JygAKaNkUVLCfDUwGGN7yMSMQr9Yb79PxCb2V0yIwAAAABJRU5ErkJggg==">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAMAAAA0X5qLAAAAh1BMVEUAAAAAv44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av46sPT54AAAALHRSTlMA+wXZ+J87JB7ux4lDNRQPCvLq39PNp5BpWRmxgnAvvrnlw5RhT0sqwHRxeP/zXbkAAAGcSURBVDjLjZTXcqtAEAVnyUGIJBAKKFqS7dv//30XsHFJxrD0C0XRxc45TCEDvFsdrvfhxnGWMk1S7c70nI+bZFxdXFC8YG5GVNemxTdte7+3yxUdq4MMMaocsMza6CeSqLRo2A3dffvguPh1WEiDcuWFeN24mSNDdjS85Exs4OLJX7wpyOWJT8A25G+iFMyn2za1jOIAV+kxIU9knDUQ9d8C/EimyH9OXgawNiblrepfXSn8WKax+4wnCEWDC6ptNk5RC9GxgqqNZ1EstXL1tSP/oBQtS1DN5Qp7vbz1sdwu30b0pNAkPIOrd4131E2kAEf0rDqtaJvTY3YDvM+aOS5IH91KrWdUl2LGIhsI9PIDLm2DFmmslT++FyiDu7a5ANV1FoKpkw/gfwUFddDIO7Cl4wqBMf1iRRZJxxb86d5OYCf9fyS/TaYrFcqVeYQK6nmqEQLFPNc7AuZ2lrtYAcEs936kdZdjE97rSAxDEvG8j8wC/E8Zo1Yo/CAv0oyOYKKzN55QWTm9B9WpyGiwyMvFnLbih+M5xjDWf6S2MlzIf04ZAAAAAElFTkSuQmCC"
                    alt=""></div>
        </div>
        <div data-v-e73e51fc="" class="start-page" style="display: none;"><img data-v-e73e51fc=""
                src="{{asset('')}}assets/static/img/start.0aabcda5.gif"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js"></script>
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2006; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">Login successful</div>
    </div>
</body>

</html>
