<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Mine</title>
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
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-3d4e4f5e="" class="page">
            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="head_bg"><img data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                    src="{{asset('')}}assets/static/img/bg_my.f757132b.png"></div>
            <!---->
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="profile">
                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="container">
                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="head">
                                <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                <div data-v-6df716d9="" data-v-cfc9a7fc="" class="photo"><img data-v-6df716d9="" data-v-cfc9a7fc=""
                            src="{{ asset('') }}assets/static/img/logo1.png" style="width:195px;">
                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">
                                        <!-- <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n"> <img
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                src=""></div> -->
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="cid">  <span
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""></span></div>
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><a href="{{route('user.setting')}}"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAxCAMAAACrgNoQAAAANlBMVEUAAAD////////////////////////////////////////////////////////////////////xY8b8AAAAEXRSTlMA3+8gEIBgQNCgnzCwcFC/kHEO2T0AAAFbSURBVEjH7VXRcsQgCBREY3ImOf//Zxsbx/WwzjnTPnWOlyjCALtAzEducZE4JQ7RTTqkKnP2DzgsUw4rHKZystnSG3Pk72MiIbrsKJ++D3ZsGbZFZFlTCVBCpFt79vbP1KXuGtVT23ttrz12VSnVF2qw9FCzdFByYKZVQX+sWcs6KauCatnzu6gANDQvEDt1396xz7p7fL2LO1MKXmHIVoHEoiADzT3plpuqqSIsTYBqD45ifVYUxh9KXIBTuI6r2FznCU3XtxiwEl9eNWbsUEiyIwcgG+7jmTO2skFDZVo1M7HrUY+inZ5LPAtgBW+gDVSRGREnjBtoS20rhAtSJ2jypDYCzzQfKZ6pNxu3s8wMkNU7g4k5bIdqmS1r+5SFsQR8Y05QWxX03Zrxv1hkRc5mVR6Yi1sbzFDs6zKeWd93CMzlWPpSNzMjCxwef/pThLiYqWWKu/mf8gW53CQajDfu1QAAAABJRU5ErkJggg=="></a>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="notice"><a href="{{route('user.meassage')}}"><img
                                                data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAxCAMAAACrgNoQAAAANlBMVEUAAAD////////////////////////////////////////////////////////////////////xY8b8AAAAEXRSTlMAoGC/QH/fEO8gkJ9wz1CwMILXQ2IAAADTSURBVEjH7ZJLDoMwDETJ/0OgzP0v25TQRU1CHKlSVYm3jObJHsP0Pzg3FA8KUGFAsMgofn7DzsYWdBE0u7ApgnG8wsLjzcwonvCB6eVnEGZW3osYH5ZhlLZKH8cqSrroS9c2+7h2c3GqGZGJzfu/7mnPP4l3DWFFRpKPTt/ofEsf/cVOCsCj1mtpCL52w1TGVqmuK5G5hVsYEkxbkI18U4Bs5bEogkXdMOhAjBVdNN10bIQWXfT0PZw+CExBk55dnMeOnbgkcpc+0gLLOlY8TL/iCSgpHNC4M9c4AAAAAElFTkSuQmCC"></a>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="com-wallet flex">
                                <ul data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n">Strategy account：</div>
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="s">6.1642 USDT</div>
                                        </div>
                                    </li>
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n">Capital account：</div>
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="s">0 USDT</div>
                                        </div>
                                    </li>
                                </ul>
                                <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="str"><img data-v-3d4e4f5e=""
                                        data-v-cfc9a7fc=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHQAAAB0CAMAAABjROYVAAAAUVBMVEWm/3oAAACn/3ym/32k/32m/32m/3yl/32l/32l/3yl/32n/3ym/32m/32m/3yn/32l/3um/3yf/3in/4Cf/3im/32l/3yo/3yp/32l/3ym/32b0CplAAAAGnRSTlMuAJblO/C+gNhgl2LgzqKJU0gQICCwkG87bzKpl8UAAAIbSURBVGje7dtbbqQwEIXhAlwmjm0w987Z/0KHzigpNfSM5gFXjyL/G/gk4AmdourY6NYlMK4p2NXNJ4IOYmtxefHo0iPJANt+Gwxdkkm+twygm/+E3snoDV3dZgG0T9E5AnagLA0LEOYz6hiNp2ylBpyOaAt0hjJ26+QR07dZU+beP1VBU15TVCfozHlNUXn+RgM6UqlD/EJbNIZUujVof6MzkEgpDx4/0Q4LqWXR3tEZGEitATzuqIMlxSLaHY3YSDEPW9EMJs1ujJHk6Spl4WhFT6r1WHfYk2obFgpIpNqAQIAh1W5gAkg5oKBSQQta0II+7X9ATa+PmjfUaqiYeFR9Xdd9JlTMg1oDaPKgYoqqgIopqgIqpqg5UTFFVUDFFDUzKjXCFbSgBS1oQQta0IIWtKAF/UnoOx57MwqoqGLmRUUVUwEVVUwFVFQxc6KiipkP7eu69nRQxcyCSqKKqYdSb37mD8mCFrSgf6+gBf0XlPUnB6CAgVRLCLRgI9U87EsGM6+ZBo1gQ5oxJqqUt0EbYkVVi0iKWbgdHVl3wodpR6tW81Na0FV3dGS9t5qASXuAar4GqHtRb2obqi900hsVTzKfdlrz6fSKobjyJN6cJvF7idEkypZvwO585jAFYMl15mCBOD0/6ABgPy4XjY8AHw46pKkDwLb3yVzkDR+95Ts5VidUWBdxeVZIQY/uagOuicOyuvFE/AKpVXipvA5deAAAAABJRU5ErkJggg=="><span
                                        data-v-3d4e4f5e="" data-v-cfc9a7fc=""><a href="{{route('user.invest')}}" style="color:#fff;">Deposit</a></span></div>
                            </div>
                        </div>
                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="container">
                            <ul data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="nav1 flex">
                                <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAwCAYAAAC4wJK5AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEPSURBVHgB7ZnhDYIwEIWfxgE6Qjezm8gmuglugBt0BNygNhESQKnXWu0B9yXvH5e+1x4QDkAQBGGJKK+TV+3lCqnxMkhEe1kAjols5ykKTgGGQRSIGAClDc+pApFmUniJ2YGM6G7toZeaWjxNr1EOhVc/I3YzhY543b8I+tljBUgILhyI1zkwRtqJC5u6J7i9J0ZIO3FBQnBBQnBBQnBh0yGOXi3CU4ljxrokgt+0oI1z2ox1QT+pJ0GZfNwz1iXx6SQMwrva4v3oMbVOph2LgBqixPSvRyORGuMePKPMFFB1aw+9NNTiCt8Pfn8lg4gdsEBxw1NZRKKxgp8sPcbrBqCU+Sue7V3y4SIIgpDAA7aaiV7MDIgbAAAAAElFTkSuQmCC">
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n"><a href="{{route('user.strategy')}}" style="color:#fff;">My Strategy</a></div>
                                </li>
                                <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAA0CAYAAAAqunDVAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE9SURBVHgB7dlvrcIwFAXw817e94eEOgAH4AAJ4AAJ4AAcgAUUAA5wQB2AA+iSkUDH+mfdml1yfslNYLtbdkhLBwOIqE0/aG7i2X8zdfb0jEwNPD3n8lydU6buAXUxtS77n4oQS1PXwHMoZKIQdkGv4UZlXSKPVYj0hzyUqUP52jfckrUVSps6vbwvLnyI6rCzFXNlb22bIkPwTxTeh8ixpm+F+mG1qjlGoydz6ujo3aAaaOvo1xAQyu71XahGYqhfdE8HbmuN64tCRez7R9wn2mavtje47ijukKGSIcfwy+4rQ8Usvif0wxgJ7Hu3vrCXhwrOKSkYSgouvlIw1DeZI+wXq4t3wfTYWcfPXc0cflIwlBQMJQVDScFQUjCUFE2eTy1MzZAm9t+pqOdVTUINkP5QTKFDnFNERESU7gFgPHq2yCjE7QAAAABJRU5ErkJggg==">
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n"><a href="{{route('user.reward-bonus')}}" style="color:#fff;">Activity</a></div>
                                </li>
                                <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAK1SURBVHgB7ZiLkdMwEIZ/0sC5A9TBXQkuASpAVICpwO4g6SDpIEcFDhXcUYHdQdJBsJANQt7VywmXMPpmdmJb0kq/tHoFyGQymUzm7XiHt0cY1g92GuwVd0YxWD1YN9iZsONgW2iRN08F3eBzoClhBW6UNcKFmKZGUuDGSBVjilo8UsqBCpE9/o73F+hQ+BDoR4Ju5GH0L4z6ysF2TP49FiARFuvd2AgXHVGu8ZQpmfpLJFAjPiRqxpdEvJiJkijbIpIUMZNVhL8W8xGNYUPUEzyXJPh9YTOmK9uBDiOVT1g+Q0S7EISP0LlLNlIJKZiK9nCHBNWYEvHYcymoU0rQYny04ENCEGkC8fQInIMr49keRnWmChH0lfgmHfmfEM+D9X7iMpqCHq2079A94+MV88OkGH97ovJYQQLzkO+5zKYgu1DMifeH9f7g8PMFcTt+Q3xj27YCT0yl7x1p3wi/NcJQo/nJ+hYaObPjRotw7FWoMdIK0Du+T1SJhSeFKrFwSDkJ/tik0sSYz3eW2yKCgqlQOMqokDgSZSg2SD+BhLQluNKpF805Nc0DKiRkpP8Yaz3+ZxTgr8WTOFf6i8d/jWWCzHYEH3+eEiuhznETYhR7vrCt7Yrsf32U6i3Sb4b9YJ+hL24TqoNah0+18ap9zN6gVX4BvUg8gkeV+QhiKV96RTatNsRwl8QDdAeGdJ6Ann8d+BD87Uc9tHCH0gF6KW1G243ffOFwZPxVSEOAX9LbKdPaobqCuwcF9KrD9RzlU2A5FeO/UYlUL3J3IA4BvucuLWaiBD36s3CTSKfBvxEzYY/Ur21DQPfuMyLWdgfPmAuSuB4N/ohJuWt5sedThzuG2pQl7hgVsrag1E06iRUuix3DPRz3/2twaUEnz/vdYZ/WJf4DBPRcusoSmslkMpnMLfMTAhsoDtsZ22AAAAAASUVORK5CYII=">
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n"><a href="{{route('user.team')}}" style="color:#fff;">My team</a></div>
                                </li>
                                <li data-v-3d4e4f5e="" data-v-cfc9a7fc="">
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAYAAABXuSs3AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJGSURBVHgB1ZnhkdowEEZfMvkfl7Al0EHUQeggLoEOQgl0AB2EDnAqoAToICUQ6WzuuLUtS7KFzZvZAcFa+mzvrtYAL8oXXo/C2uorr4ETu7F2svbP2ooFI9Z+U4u9KRMWhrG2s3ahLfZuZ+f4jXl5i1dra2u/mvEQf5kJJ660tqeO11ukGZ6ITq4Qgc5Ph8yFJyD0J5dP7IH6jhTN+8fv92TCNGIvxIndNcfqGNfzGCYWuyMuXq/WtviFGNon+E5KVXFXxVWBH81rSCVwuGpQUd/+a4D/Wo2PJJCSXLdG6Ibwk3tEh8k69EB5EJuaXKmsOub2zmeok+tMnNi+5Eplo9Y4+hxjk+suNgf6wpV9jsJwCauoK4GQF+lYW4YO6BLvPpsqBEIoaV+wQYRu8XumoWD4jp3U2hsCEaYVf2+q/lDnUYl/7agw6ZpgjHhD2kNAqXzPJCCEiy8I2/or/ByV/45ExCM+ZTcdilc9z6hnSyGu2/OZT8iadjUbjRDfql4ihRxIy6fR4q983voPkUL03IYJEbVARR23qwAhvu7OkCFMNMJw9xfb3R3IFCax6O6uGvCPuTtZOSkhpcc3uvfORUHcbrlVvkmPaFNQErdtB/fej+T4tdaose8nM6FdkSoCyCH8pxp/9/gaNXYneWUGXHx3bVJ95S0mibMjhIkX4pL4KQjD4kvikvhpCH7xuvfesiCEfvH6s8X9ryMMt8RZmqopEPzi9ywYoV+8YeEIM/09MgXCZ/GLDhON8CF+tt47FWFEmPwHFfDgYXzA3PsAAAAASUVORK5CYII=">
                                    </div>
                                    <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="n"><a href="{{route('user.invate')}}" style="color:#fff;">Invitation</a></div>
                                </li>
                            </ul>
                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="line">
                                <ul data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ul1">
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1"> <a href="{{route('user.level-team')}}" style="color:#fff;">My Level</a></div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="vip"> V 0 </div>
                                            <!----><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                class="van-icon van-icon-arrow">
                                                <!----></i>
                                        </div>
                                    </li>
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">Customer service
                                            support</div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <!----><a href="{{route('user.GenerateTicket')}}"><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                class="van-icon van-icon-arrow">
                                                <!----></i></a></div>
                                    </li>
                                 
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">About us</div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <!----><a href="{{route('user.about')}}"><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                class="van-icon van-icon-arrow">
                                                <!----></i></a></div>
                                    </li>
                                    <!---->
                                    <li data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="ico"><img data-v-3d4e4f5e=""
                                                data-v-cfc9a7fc=""
                                                src="data:image/png;base64,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">
                                        </div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="flex1">Clear cache</div>
                                        <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="right">
                                            <!---->
                                            <!----><a href="{{route('user.dashboard')}}"><i data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                                class="van-icon van-icon-arrow">
                                                <!----></i></a></div>
                                    </li>
                                </ul>
                            </div>
                            <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="btn_list">
                                <div data-v-3d4e4f5e="" data-v-cfc9a7fc="" class="go"><button href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" data-v-3d4e4f5e=""
                                        data-v-cfc9a7fc=""><img data-v-3d4e4f5e="" data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAANlBMVEUAAACUmp+Tl5+VmZ+Tmp+TmZ+VmJ+Vmp+Pn5+Ump+UmZ6VlZ+PlZ+fn5+UmZ+TmZ+Ump+Ump9V2x+yAAAAEXRSTlMA7yB/74Bi3xDAsDAwEN+gnxjKr0gAAAC/SURBVEjH7ZVLDoMwDAVtB0KSlo/vf9l29xTASSxV6obZMiNkYoAeHEietEWRkw/dgOuiaJdcBdqHL8G+mgPu+uUSCJmk24Aa/D6Q5AuCamgHrLqdrodmEBeOBBYUYzO+GAUCT4GgXyDwFNehrfUORrCoRTLOwRtE6xbz8NDvCT6CAR+Bw0fQ9+1z2Krlg2+fA5+e8ux5gSL8ZgDWlSr+9NVIti+3wSGWnw7HtoIqyH2/VIGw84dCUtp6FnoY5wNKBCglvweqdgAAAABJRU5ErkJggg==">Log
                                        out </button>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
            @include('layouts.upnl.footer')