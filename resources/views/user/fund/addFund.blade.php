<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Assets</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8870696.ba836efa.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8870696.d3c72f4a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-8c0c3ac6.27e1c228.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-8c0c3ac6.576dd3c7.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-6df100a6="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-6df100a6="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <!---->
                        <div data-v-397da544="" class="left_title"> Wallet </div>
                        <!---->
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
                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="container">
                        <div data-v-6df100a6="" data-v-cfc9a7fc="" class="com-1">
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="n">Total Balance</div>
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="s"> Detail<img data-v-6df100a6=""
                                        data-v-cfc9a7fc=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAOVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAABra2v4+PgAAAAAAAAAAADk5OQAAADd3d2goKAAAADy8vL///+hq0BzAAAAEnRSTlMzACwYLwYdTOUoIRKzDKZmD9OK32BQAAABUklEQVRYw7WX0XKEIAxFLwlJC9TW+v8f2yk7O26tGE12z3uOERBzkQZI01oIAKhUniUN2BdMSthAOp0WcMYu1MQW9PIhWcUSrOWjLg4FUmBCMhZwxgkyjwSKk/C+QHGauicouED5L1Bcom4FjIvoXwHjMvwokIzLZHkQEByUVdDggu8CIbjId4HCCd8EkuEk3wQNbrgLCG7yr2BCgCnBXMLP5fvt4EDDeoOvZVnehwZKEFiCQ4NghsHHoaGBETIoKkKGioKQoYAQMtBo77dsDObW7fP5CkH4FcKLGN7G+EHSUD0YLVSPOfw5Ry+U6JVWn3Gppgw31P8LDDetC/wtZOkCfwuausDdAkkX+Fto64hT4IDCQ9bTxryOOuu7oFMjo2582O7UwLh/cSX1RZHn5Mxa5DD2NbIebwVP0WyUm9FXGlnldviuofDdkZnX+K9N0oAfKgMTw/lKDHwAAAAASUVORK5CYII=">
                                </div>
                            </div>
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="amount"> 6.1642 <span data-v-6df100a6=""
                                    data-v-cfc9a7fc="">USDT</span></div>
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="col">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="col-left"><span data-v-6df100a6=""
                                        data-v-cfc9a7fc=""><img data-v-6df100a6="" data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkBAMAAAATLoWrAAAAD1BMVEUAAAAE3AAD3AAE2wAE3ABuQteJAAAABHRSTlMAgFBAnsFh3gAAADNJREFUKM9jGAXogEkBQ0jEEV2E0cVFAF2Ri4sjhiJ0ZSogIWcUIRNMISZBIDBgGAUoAABJbwaD+etRRAAAAABJRU5ErkJggg==">
                                        0% </span><span data-v-6df100a6="" data-v-cfc9a7fc="">(+$0)</span></div>
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="col-right"><span data-v-6df100a6=""
                                        data-v-cfc9a7fc="">Pending： 0 U</span></div>
                            </div>
                            <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-con">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item">
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name">Strategy account</div>
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val"> 6.1642 </div>
                                </div>
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="balance-item">
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="name">Capital account</div>
                                    <div data-v-6df100a6="" data-v-cfc9a7fc="" class="val"> 0 </div>
                                </div>
                            </div>
                        </div>
                        <ul data-v-6df100a6="" data-v-cfc9a7fc="" class="tab flex">
                            <li data-v-6df100a6="" data-v-cfc9a7fc=""><img data-v-6df100a6="" data-v-cfc9a7fc=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAA0CAMAAAAdZIDnAAAARVBMVEUAAAD///////+n/3z///+f/36m/37///+m/32l/32l/36f/3j///////+m/32k/3yl/3r///////////////////+m/31k9+39AAAAFXRSTlMAYICg4BDP79+AXyBwv+9wUEAgEMCSNQRnAAAAzklEQVRIx+3P3Q6DIAyGYWA6BHH+De7/UmcN+k001iWejTchoU2eg4rcnY1OLdHYGWM6+qxbOeyR036N5kcI4UEfj1SKpEepQn2imkuqSRTtdBHbqGU5X3CgJEYo3JBVVqkqr6i6shtlq5pThEKwX8qGMDFGESIWFaGJlYwqn4Fqo2ppIH2mwMysTESMAnvRA+IUMTQjXoEB8QoMiFdgQLwCA+IVGBCvwIB4BWbEDwr9t9LFWfpANf5K70T1rDi8QfFGO7FrkOo8N4rcbX0AQuU1Y+ttcqkAAAAASUVORK5CYII=">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="s">Deposit</div>
                            </li>
                            <li data-v-6df100a6="" data-v-cfc9a7fc=""><img data-v-6df100a6="" data-v-cfc9a7fc=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAA0CAMAAAAdZIDnAAAASFBMVEUAAAD///////+n/3yl/33///////+m/37///////////+l/4Cl/3z///////+j/3z///+f/3jV/8LP/7qj/3z///+m/328/50T1kZbAAAAFXRSTlMAYICgf9/g7+/AcDCQQCAgEBDv70CBqdxqAAAAy0lEQVRIx+3Pyw6DIBRF0YO1Bd/aVv3/P23FxyFovKRx1LAHDC4sCIhdWJsna3Dbpqreo9z0W3DrWeIj1TNfscpTWZDKsMY981iC2zq0PzhQCmepMPX+RaVDGq6IBjJREZGJiohMVERksiIikxURmayINJmkiG43u8zsXBGVsArlzCTV6PnYrJZLdCcoFHpCq7JMF8JblqWg+jKLJIUOVFMNJMWoEFVU/6rM3ek1juPTHZgDlfUhZZ6qgpSCVyIbk2NXrZLz8hax6/oAHTQ1QeutVjYAAAAASUVORK5CYII=">
                                <div data-v-6df100a6="" data-v-cfc9a7fc="" class="s">Withdraw</div>
                            </li>
                        </ul>
                    </div>
                    <div data-v-ac2db8a0="" data-v-6df100a6="" class="revenue" data-v-cfc9a7fc="">
                        <div data-v-ac2db8a0="" class="container">
                            <div data-v-ac2db8a0="" class="total-income">
                                <div data-v-ac2db8a0="" class="title_box">
                                    <div data-v-ac2db8a0="" class="title">Asset Chart</div>
                                    <div data-v-ac2db8a0="" class="choose_day">
                                        <div data-v-ac2db8a0="">Last 7 days</div><i data-v-ac2db8a0=""
                                            class="arrow_down van-icon van-icon-arrow-down">
                                            <!----></i>
                                    </div>
                                </div>
                                <div data-v-ac2db8a0="" class="info">
                                    <div data-v-ac2db8a0="" class="" id="myChart1" _echarts_instance_="ec_1718013614910"
                                        style="width: 100%; height: 5.6rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <div
                                            style="position: relative; width: 385px; height: 280px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                            <canvas data-zr-dom-id="zr_0" width="770" height="560"
                                                style="position: absolute; left: 0px; top: 0px; width: 385px; height: 280px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <div data-v-4c14e1cc="" data-v-ac2db8a0="">
                            <!---->
                        </div>
                    </div>
                    <div data-v-372e76f5="" data-v-6df100a6="" class="revenue" data-v-cfc9a7fc="">
                        <div data-v-372e76f5="" class="container">
                            <div data-v-372e76f5="" class="total-income">
                                <div data-v-372e76f5="" class="title_box">
                                    <div data-v-372e76f5="" class="title">Asset composition</div>
                                </div>
                                <div data-v-372e76f5="" class="info">
                                    <div data-v-372e76f5="" id="myChart" _echarts_instance_="ec_1718013614911"
                                        style="width: 100%; height: 6rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <div
                                            style="position: relative; width: 385px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                            <canvas data-zr-dom-id="zr_0" width="770" height="600"
                                                style="position: absolute; left: 0px; top: 0px; width: 385px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-cfc9a7fc="" class="footer">
                <div data-v-6049d237="" data-v-6df100a6="" class="footers-con" data-v-cfc9a7fc="">
                    <div data-v-6049d237="" class="footers-h"></div>
                    <div data-v-6049d237="" class="footers wallet">
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="">
                                <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAAElBMVEUAAAD///////////////////8+Uq06AAAABnRSTlMAgHhwMBDny3G3AAAAf0lEQVQ4y82SwQmAMBAE87GAaAWCDQhWoA3YfzVCVphwgXicn8wjbDIQNlzSsJy5cFRJ7NrOVRL5hfQt7pSmIpQQWklO0b9K+MWq86URl8RmBQQF7VshmIcRZh60Nw+kPcJZ4/9TaW8E7Y2gpE/QPvB9OleRYr+deZDsPEij8gDZrx9ZZoOpVAAAAABJRU5ErkJggg=="
                                        alt=""></div><span data-v-6049d237="">AI Strategy</span>
                            </div>
                        </div>
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="">
                                <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAwBAMAAABK7o+KAAAAMFBMVEUAAAD///////////////////////////////////////////////////////////87TQQwAAAAEHRSTlMAgHAQXzAgeGhIUDhAKAgY868QGAAAAM9JREFUOMtjGADA6igSgF1moqCgDHYtgkCQgE2GAyTjgE2GUVA4UVAZh8xFQcG1WGQ2CoKBlgG6G18JQoGEI6ob+RVBolIgEs2N2wUFKx1LEtgWQWQckM2SMACzQgRBblRANmselG0IcqMCLLymCwqWwlSxIEybCHaRAWoowVgQs7arwUMWEV6iIJagENT0EoijGWFuYQbKYIQXpgzCLegyCLegyyDcApeBuxHhFoQMml6EDDOtZLar4ZKBsjBlmIeZDEOhBAYNBUFlGPTgBgBIoCyCCX0TdgAAAABJRU5ErkJggg=="
                                        alt=""></div><span data-v-6049d237="">Market</span>
                            </div>
                        </div>
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="">
                                <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAAMFBMVEUAAAD///////////////////////////////////////////////////////////87TQQwAAAAEHRSTlMAgEAfcBAIMHhgUFhIOChorzhHYAAAATlJREFUOMvlk6FPw0AUxi/tKIaJj1TcWBbGCQymJPwDFUySCjQ0WBAjkEyXhGAIAYFHkipmQNegGX/BBP/AHJL2XS7v1qsg2dw+0+++X+7uvZerWERnv/KjKW9nAJ7dPChQKowccArSZj33Y8hdfwx81sAEOBTCA8JkLr8Aumn5/QGO7HxtBvTJxJVhHQAP1lZuwTp6hy7jFt7t8obcglX+sV7pC+VUsArghUyLTmV5QI/MpamDa5QUPNFOu6sMNEvAlMq3fGnAkemlv0og+FZKRQ1gQi8xccA6SAMHtDToOWAfN0rtodsAHoXw0fkfSGug0CBGZANKppoP5kEbSPTp2wkDanWLWt4AOnk+xlsFZJ6/ArcEghlIw9JmxpLOaRGmZmC4M2O+hvnFvcrd8wM8GY2u2KViufoDH3dJdNaCAGAAAAAASUVORK5CYII="
                                        alt=""></div><span data-v-6049d237="">Home</span>
                            </div>
                        </div>
                        <div data-v-6049d237="" class="item item_active">
                            <div data-v-6049d237="" class="on">
                                <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAA6lBMVEUAAACL44x33YOL44u6851124F934a+9KF/34ej65eE4ol+34aj7Jaf6pOG4Yl43oRy3IGL5It03YOA34W/86F23YS38Z+p7Zhy3YK68Z+K44y48p953YW+86Gm65ee6JS986Bwz4CP5I2F4oqL44xx2oFx2oC+86K+8qFw2oBx2IB134OC44q//5+/75++86G78qCI4oqG4oqD4YmK44ty3IKU5pB934a/9KKx8Jx23YOp7ZiY55Gj65af6pR73oV43oSh6pWO5I2A4Ie18J2u7pqb6JKm7JeL5Iy38Z6r7pmd6ZOR5Y6l65fBNM6KAAAAL3RSTlMA/j8gHyDv37+Pf2Dv79/Av6B/EO/v7u7fwL+fkICAgF8Q7+7Pz8/AwJ+Qbz8QEPGBC60AAAHASURBVEjH3ZDpWoJAFIYhd0vL9s2lfQ9UCnMDTVk07v92+obJgz7gwNO/eg8Oc868nwrS3yKze3P7kEmsb+y8MY4zyXXOYxJ9k3T8RKx9sXvQ5Ww/sTWBbna7pmlub0iSiY34xZxnDdM0UNCBga3oSfOGYeio7HmGT3RdNwS6zskW9xYz1q57MflPDtMJNojUn8ttTn5zZc5GUX6x1W63UMDfsB3//HB1uvJFqRZoghYHDS4UgaNySiIqTa2JS8OKO8qHD4OuHDzbtSxrsuZomn8HbHFk2WHFO9lx5CIFxmN5XElJAlIVZ+ycBgEAX5iAckndFxDIYecdCFxyfh/oA4Ebdqx+34oPWEsBax4bsAA1c7DGq5dKhYUzpOkQRPuFEY7qIWc0Gg2iA1vsqOQ7gMYDsCaAE2+LO17geLbtRQdqOLIL3PFsGtu9HppICkdHNX/TAzSlRsAMTtBMZ7PYAKBmCgRu2PkAsQFyxIFoZwIEbtg5nEzctNhPu657SN2J6rpnaaF/BuWE2qqaiAYFXnOKoqqKqnDYnQ9UGoHc8i/mOv6802GXQg0WFCe3+p8bd/sKWMiAciy6f199kf4N34htgOvDL86rAAAAAElFTkSuQmCC"
                                        alt=""></div><span data-v-6049d237="">Funds</span>
                            </div>
                        </div>
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="">
                                <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAAMFBMVEUAAAD///////////////////////////////////////////////////////////87TQQwAAAAEHRSTlMAgHAQCDB4YEBIOCBQGFgocCNyLgAAASNJREFUOMtjoCtgWacoVGqARbxNEAgkMCWMBMFAGV2cWREiIYRuGJOgYIYBb5CgoAqaRKOgjAPQoonotjALCk4A0TyCYg4oEqyCQmABlkTBBSgS7IKiMCMfoNktC2EYCiqgSDAKCsAZ+CUQRglDGBfRjOKDuT9QsABFggvqfhZFwQC4INT9B0A0p6CgAXqQSIKC5CBGwDsJCqpeYAbGiQLOYCccUQhbgCDDAVOCOVxR6BVYnP6AeU1RoqD61Avo4jsToR48jCq+XRAOStHEEaAYIe4J5IpVfXZgub0cZOIE5AAU3wJNYIVIAbkNKL4BruqgoGA+VBFQzQaEufxA/QHQ+BecAqIRNkKTpaKgFHoEiIHpRKBO9BQOpoNSkQRhIoMUAAD/bDMrgZ8aDAAAAABJRU5ErkJggg=="
                                        alt=""></div><span data-v-6049d237="">Mine</span>
                            </div>
                        </div>
                    </div>
                </div>
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
</body>

</html>
