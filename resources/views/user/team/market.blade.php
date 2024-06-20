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
        window.addEventListener("error", function(event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        window.onload = function() {
            document.addEventListener("touchstart", function(event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
            var lastTouchEnd = 0;
            document.addEventListener(
                "touchend",
                function(event) {
                    var now = new Date().getTime();
                    if (now - lastTouchEnd <= 300) {
                        event.preventDefault();
                    }
                    lastTouchEnd = now;
                },
                false
            );
            document.addEventListener("gesturestart", function(event) {
                event.preventDefault();
            });
        };

        if ("standalone" in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                "click",
                function(event) {
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
    <link href="{{ asset('') }}assets/static/js/app.83a7756d.1717187934571.js" rel="preload" as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}assets/static/css/app.23ae5dc0.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{ asset('') }}assets/static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/static/css/app.23ae5dc0.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-6072d8a4.6ac11efd.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-6072d8a4.290faf4b.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-79aa18e0.f843b761.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-79aa18e0.e3404a41.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-5109cffc.e3562785.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-5109cffc.3f1196fb.1717187934571.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/static/css/chunk-f8870696.ba836efa.css">
    <script charset="utf-8" src="{{ asset('') }}assets/static/js/chunk-f8870696.d3c72f4a.1717187934571.chunk.js">
    </script>
</head>

<body class="main_en">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-c079ad96="" class="page" style="background: rgb(13, 13, 13);">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-c079ad96="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <div data-v-397da544="" class="back">
                            
                            <a href="{{route('user.dashboard')}}" style="color: #fff">
                            <i data-v-397da544=""
                                class="van-icon van-icon-arrow-left">
                                <!----></i>
                            </a>
                            </div>
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
                                        <div role="tab" aria-selected="true" class="van-tab van-tab--active">
                                            <span class="van-tab__text">Gainers</span></div>
                                        <div role="tab" class="van-tab"><span class="van-tab__text">24h
                                                Vol</span></div>
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
                               

                                <tbody id="crypto-container">

                                </tbody>
                             
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="{{asset('')}}assets/js/crypto.js"></script>


            @include('layouts.upnl.footer')
