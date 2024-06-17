<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Market</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-6072d8a4.6ac11efd.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-6072d8a4.290faf4b.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-79aa18e0.f843b761.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-79aa18e0.e3404a41.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-5109cffc.e3562785.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-5109cffc.3f1196fb.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8870696.ba836efa.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8870696.d3c72f4a.1717187934571.chunk.js"></script>
</head>

<body class="main_en">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-c079ad96="" class="page" style="background: rgb(13, 13, 13);">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-c079ad96="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <div data-v-397da544="" class="back"><i data-v-397da544="" class="van-icon van-icon-arrow-left">
                                <!----></i></div>
                        <!---->
                        <div data-v-397da544="" class="name tac"> Market </div>
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
                    <div data-v-c079ad96="" data-v-cfc9a7fc="" class="container">
                        <div data-v-83cbb658="" data-v-c079ad96="" class="tabs-con" data-v-cfc9a7fc="">
                            <div data-v-83cbb658="" class="van-tabs van-tabs--line">
                                <div class="van-tabs__wrap van-tabs__wrap--scrollable">
                                    <div role="tablist"
                                        class="van-tabs__nav van-tabs__nav--line van-tabs__nav--complete">
                                        <div role="tab" aria-selected="true" class="van-tab van-tab--active"><span
                                                class="van-tab__text">Gainers</span></div>
                                        <div role="tab" class="van-tab"><span class="van-tab__text">24h Vol</span></div>
                                        <div class="van-tabs__line"
                                            style="transform: translateX(100.5px) translateX(-50%); transition-duration: 0.3s;">
                                        </div>
                                    </div>
                                </div>
                                <div class="van-tabs__content">
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <div data-v-c079ad96="" data-v-cfc9a7fc="" class="searchBox">
                            <div data-v-c079ad96="" data-v-cfc9a7fc="" class="flex">
                                <div data-v-c079ad96="" data-v-cfc9a7fc="" class="ico"><img data-v-c079ad96=""
                                        data-v-cfc9a7fc=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKESURBVHgB7ZjdccIwDIBFHrjjjQ3KBjBCNigbtCN0g45QNqAbQCcgTAAbOJ0A+sQdP0mlnrkzRnFI/AO55rvzkZjYlhRZsQTQ0vK/6YAlu91u0O12x3g57HQ6Mf72ZSO22FJqeZ4v9/v9vNfrpfAIHI/H1yzLFtjyim1FY+FeHA6HGIUQNQTXmwiqCLpA/3Q6fTgQ/KLRnDQ3+AQXGNCrNwiSoCBv+NxIFYauscX0Hz1jehu0l8AHUnhRYL1JlYVpLhzzGUwJsmCB8AIjyghqYjDKyqk7cT5PFnSxiDTOjNsT4AIZJnULzcAxnEtRpANbmFcsfESLAjcVYANnfW9RAqH9pK9n9Y3QQya+5il4hiKapsQC6iAjRDDr264b6R04cKx1LUMcwPAgmOJPovbJQ6KRiJkoVu/RMnMIBK71pXUNy8ZETN/TxQNRtIZA4FqJeq8b8ybQhTaqH3o/aCnIkKrug03ZmKuEhgaq92gV66SnClXXj6DhcAps1ZvQLgQGWTg4BX60+wEEAr+++gk3LRtzpQBaIVHv0SdjCAT6u67Ad+kYpu8ibGIoe4ZA6GvpxryJph0lWDKtXOIsyTDA5AUrqAt3nLZJIcvgrG9dcml0QkPIAlbuOy/g8mJnBS8myfjLi10l9WQQxkgTcIV8vVxBy6qGI1NIwc3r3E1LClvTGoWtovLkfapz5/yVyoe0b/TSIllblhYXhvEr798a6bMTgxC1Gs3JuQ32v+NmfgHXyG+EcCA8+XvMrUHCKxHJvRKKIusagiemMKkK710JQm5M8vG5VEhNSek6pWOCLL8PyuYrKGn6VcI1rRKPAqOECHG0d4qiRPOEP4NKjBsrfMuj8wshlNPh/rjnFwAAAABJRU5ErkJggg=="
                                        alt=""></div>
                                <div data-v-c079ad96="" data-v-cfc9a7fc="" class="flex1"><input data-v-c079ad96=""
                                        data-v-cfc9a7fc="" type="text" placeholder="Select stock"></div>
                            </div>
                        </div>
                        <div data-v-c079ad96="" data-v-cfc9a7fc="" class="quotes">
                            <table data-v-c079ad96="" data-v-cfc9a7fc="">
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <th data-v-c079ad96="" data-v-cfc9a7fc="">Currency/Name</th>
                                    <th data-v-c079ad96="" data-v-cfc9a7fc="">Last price</th>
                                    <th data-v-c079ad96="" data-v-cfc9a7fc="">24h change</th>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/1972eff0dd4ca2c8671a653a0d6f80ff.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">BTC<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$65734</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-1.15%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/1300dfbf56cae29948a5162db60d7b8b.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">BNB<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$596.4</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-1.30%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/9e96d563eec7f2217c5479d95d98ea14.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">ETH<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$3451.88</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-1.69%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/f64e173775c5555566d6e1b28436dd13.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">XRP<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$0.4935</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-2.23%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/ccd0e9f8df029ee7b372504f9207e20e.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">LTC<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$73.57</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-2.06%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/ccd0e9f8df029ee7b372504f9207e20e.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">LTC<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$77.34</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-2.08%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240307/ff75f2401df30d56ad4e9145a1a34540.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">DOGE<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$0.13386</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-2.38%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/9e96d563eec7f2217c5479d95d98ea14.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">ETH<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$3523.39</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-2.78%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/1a90e27ee0ab2ef54368e6dd95a3142e.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">BCH<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$414.3</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-3.31%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/08e86e3e02f72fe838cd13b92cfa8791.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">DOT<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$6.175</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-3.47%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/14187531babdf7b88ad8849de4f402b3.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">FIL<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$5.055</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-3.53%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/d0338a4fd6430124d021b4d1dc0688dd.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">LINK<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$14.332</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-5.34%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/08e86e3e02f72fe838cd13b92cfa8791.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">DOT<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$5.791</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-4.58%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/d0338a4fd6430124d021b4d1dc0688dd.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">LINK<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$13.788</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-5.05%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240307/ff75f2401df30d56ad4e9145a1a34540.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">DOGE<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$0.12199</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-5.27%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/1a90e27ee0ab2ef54368e6dd95a3142e.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">BCH<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$395</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-5.86%</var></td>
                                </tr>
                                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""
                                        style="display: flex; align-items: center;"><img data-v-c079ad96=""
                                            data-v-cfc9a7fc=""
                                            src="https://bitgrid-all.s3.ap-southeast-1.amazonaws.com/upload/20240306/14187531babdf7b88ad8849de4f402b3.png"><span
                                            data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                                            style="display: inline-block;">FIL<br data-v-c079ad96=""
                                                data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                                                class="sellCoinName"
                                                style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc="">$4.445</td>
                                    <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96="" data-v-cfc9a7fc=""
                                            class="on">-9.80%</var></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.upnl.footer')