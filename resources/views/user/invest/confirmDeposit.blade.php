<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Deposit</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-198acc81.38a789e9.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-198acc81.12c44c37.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-494d233b.50573298.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-494d233b.77bc554e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-0830ec22.59462d6e.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-0830ec22.94ec9a30.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-b3422e30="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-b3422e30="" class="head" title1="Recharge Details" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <div data-v-397da544="" class="back"><a href="{{route('user.strategy')}}" style="color:white;"><i data-v-397da544="" class="van-icon van-icon-arrow-left">
                                <!----></i></div>
                        <!---->
                        <div data-v-397da544="" class="name tac"> Deposit </div>
                        <div data-v-397da544="" class="flex1"></div>
                        <!---->
                        <!---->
                        <!---->
                        <div data-v-397da544="" class="head_right"></div>
                    </div>
                </div>
            </div>
            <form method="post" action="{{ route('user.fundActivation') }}" name="balance/oper_frm" data-v-56930b78="" class="container">
            {{ csrf_field() }}
            <input name="paymentMode" value="{{$paymentMode}}" type="hidden">
                        <input name="amount" value="{{$amount}}" type="hidden">
                        <input name="orderId" value="{{$orderId}}" id="orderId" type="hidden">
                        <input name="transaction_id" value="{{$transaction_id}}" type="hidden">
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-b3422e30="" data-v-cfc9a7fc="" class="container">
                        <div data-v-b3422e30="" data-v-cfc9a7fc="" class="itemBox">
                            <div data-v-b3422e30="" data-v-cfc9a7fc="" class="cname">Amount</div>
                            <div data-v-b3422e30="" data-v-cfc9a7fc="" class="val flex">
                                    
                                <div data-v-b3422e30="" data-v-cfc9a7fc="" class="flex1"><input name="amount" value="{{$amount}}" ></div>
                               
                            </div>
                        </div>
                        <div data-v-b3422e30="" data-v-cfc9a7fc="" class="itemBox">
                            <div data-v-b3422e30="" data-v-cfc9a7fc="" class="cname">Payment Mode</div>
                            <div data-v-b3422e30="" data-v-cfc9a7fc="" class="val flex">
                                    
                                <div data-v-b3422e30="" data-v-cfc9a7fc="" class="flex1"><input name="paymentMode" value="{{$paymentMode}}" ></div>
                               
                            </div>
                        </div>
                            <div data-v-b3422e30="" data-v-cfc9a7fc="" class="mbox">
                                <p data-v-b3422e30="" data-v-cfc9a7fc="">Scan this QR code or Save pictures locally</p>
                                <div data-v-b3422e30="" data-v-cfc9a7fc="" id="qrcode"
                                    title="TP6EHELjoFDGRbHRsn8oY1NBBrvWRpELZG"><canvas width="185" height="185"
                                        style="display: none;"></canvas><img alt="Scan me!"
                                        src="data:image/png;base64,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"
                                        style="display: block;"></div>
                            </div>
                        </div>
                        <div data-v-b3422e30="" data-v-cfc9a7fc="" class="address_box">
                            <div data-v-b3422e30="" data-v-cfc9a7fc="" class="text">TP6EHELjoFDGRbHRsn8oY1NBBrvWRpELZG
                            </div>
                            <div data-v-b3422e30="" data-v-cfc9a7fc="" class="copy"><img data-v-b3422e30=""
                                    data-v-cfc9a7fc=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAADnRSTlMAn2DfgCAQ78+/sJCPUIWfNBMAAACISURBVCjPY6AekHv37vExJD7jOyB4iaLAUHDxO4VcJAUCDKzvBOwcYAoeAwUY3gkASagCU5gAzAQnFAEWoA0wAYSdDigCSkpKDCgCQIIOAgEgihUuwPTOShAIxN8pwPwy7x0YvGCACWTbgfjP3aACCMAKF1AUFISaAhUAaoCaAgX7gByIKdQBAOGIZAwmCV4kAAAAAElFTkSuQmCC">
                            </div>
                        </div>
                        <div data-v-b3422e30="" data-v-cfc9a7fc="" class="itemBox">
                            <div data-v-b3422e30="" data-v-cfc9a7fc="" class="tips">
                                <div data-v-b3422e30="" data-v-cfc9a7fc="" class="n">Note</div>
                                <div data-v-b3422e30="" data-v-cfc9a7fc="" class="p">
                                    <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif">1, lowest Deposit amount: 10
                                                    USDT</span></span></span></p>

                                    <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif">2. Deposit network: USDT-TRON
                                                </span></span></span></p>

                                    <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif">3, only TRC20 USDT recharge is
                                                    supported. Recharge other assets will not be
                                                    retrieved</span></span></span></p>

                                    <p><span style="color:#ffffff"><span style="font-size:11pt"><span
                                                    style="font-family:Arial,sans-serif">4, recharge requires
                                                    confirmation by the node on the chain , please wait
                                                    patiently</span></span></span></p>

                                    <p> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-4c14e1cc="" data-v-b3422e30="" data-v-cfc9a7fc="">
                        <!---->
                    </div>
                    <div data-v-4c14e1cc="" data-v-b3422e30="" data-v-cfc9a7fc="">
                        <!---->
                    </div>
                </div>
            </div>
    </form>
            <div data-v-cfc9a7fc="" class="footer"></div>
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAMAAAA0X5qLAAAAh1BMVEUAAAAAv44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av46sPT54AAAALHRSTlMA+wXZ+J87JB7ux4lDNRQPCvLq39PNp5BpWRmxgnAvvrnlw5RhT0sqwHRxeP/zXbkAAAGcSURBVDjLjZTXcqtAEAVnyUGIJBAKKFqS7dv//30XsHFJxrD0C0XRxc45TCEDvFsdrvfhxnGWMk1S7c70nI+bZFxdXFC8YG5GVNemxTdte7+3yxUdq4MMMaocsMza6CeSqLRo2A3dffvguPh1WEiDcuWFeN24mSNDdjS85Exs4OLJX7wpyOWJT8A25G+iFMyn2za1jOIAV+kxIU9knDUQ9d8C/EimyH9OXgawNiblrepfXSn8WKax+4wnCEWDC6ptNk5RC9GxgqqNZ1EstXL1tSP/oBQtS1DN5Qp7vbz1sdwu30b0pNAkPIOrd4131E2kAEf0rDqtaJvTY3YDvM+aOS5IH91KrWdUl2LGIhsI9PIDLm2DFmmslT++FyiDu7a5ANV1FoKpkw/gfwUFddDIO7Cl4wqBMf1iRRZJxxb86d5OYCf9fyS/TaYrFcqVeYQK6nmqEQLFPNc7AuZ2lrtYAcEs936kdZdjE97rSAxDEvG8j8wC/E8Zo1Yo/CAv0oyOYKKzN55QWTm9B9WpyGiwyMvFnLbih+M5xjDWf6S2MlzIf04ZAAAAAElFTkSuQmCC"
                    alt=""></div>
        </div>
        <div data-v-e73e51fc="" class="start-page" style="display: none;"><img data-v-e73e51fc=""
                src="/static/img/start.0aabcda5.gif"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js"></script>
</body>

</html>
