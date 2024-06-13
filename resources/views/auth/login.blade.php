<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Bitgrid</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js "></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-a34da882="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-a34da882="" data-v-cfc9a7fc="" class="custom"><img data-v-a34da882="" data-v-cfc9a7fc=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAASFBMVEUAAACUmp+Tm5+Vmp+TmZ6Ul5+UmZ+Pn5+UmZ+Tl52Ump+UmZ2Tmp+Ump+SmZ6UlZ+VmJ6Tmp6Ump+UmZ+Vmp+fn5+Vmp+Ump+ZwjL7AAAAF3RSTlMAv0DfgCCgEI9A73DvsGAwYFDPcDAQz3vS0vQAAAE5SURBVEjH7VVbbsQgDAxvCIXddHfL/W/aOKkKjjFIlfpTdb4S22PDYMPyNxFiUm+lFCX85qbRTkNshQ3jcF8IhOHjI2Sn0Fz8V/rV5udr/31uVp0W1S3ixOmMr8YoBc84XOvjar4rhuG5TCYdnqvAGawffUE0+Pwljar5KSwwAjWxgrt3SIcKILkpbuDPqADO0JVENP+wg/uwZ/AuApwACSKnpJFudkzIaE2JrIjAoEWAardljLXVff3u/dyRVJxN3yYd9f7WzIikBNAOwUD8kCAwIRaOUKUg+j/OD0qoH5gg/wm/QdgIQcE8aK07k3qYdpdHJ61LhcWE0G0NByWYe1cQAsAo9jFwlhIAUu+IsjudEXwKEeYwBY3xHB4JOEVIZXrViYIwLZBpvBkSIvP6snAJZU9y+Sk+AbtVNBMW8XUdAAAAAElFTkSuQmCC">
                </div>
                <div data-v-a34da882="" data-v-cfc9a7fc="" class="lang"><img data-v-a34da882="" data-v-cfc9a7fc=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAAZlBMVEUAAAAVFRUWFhYQEBAVFRUWFhYVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUYGBgQEBAWFhbOzs5ycnK3t7ctLS1bW1tmZmYhISHDw8N+fn6goKBERESsrKyJiYmUlJQ4ODhQUFA5OTlkLOJfAAAAEHRSTlMA7+AQz7CggHBAkI/AYCAgGfxI1gAAAitJREFUWMPll9miqiAUhhE1tREC1Jyq93/JI4tD6LZdTHf7u8jVhV+sXxlCa6oyxwn5SpLlRYV+JS0S4gDeXd5rDsSZd6oyIR7g00/PgXhyWLd1JN5kKTJkJIDjpq/g7k4kkBIBFxwqSlRMOwIEN3chEUhhQBEoZhGOIUoQqkgUKlTEEZUojyPKURZHhFESR5Qg8gFxl5/PlsG1F+QDH0Q9Y/LCGaUtl1XLhIeouVF6lcVIZ26yus7XxlXEh/l2LgsqaRvpngvGnUTQD+0gJwrUsu7A5CJq2OvmSYkmWdeyGhoH0Q1u7iFhJWohfihvliLTjizv9D/cWHtrETSmInpokVAhSZitCAZkHrniCi1rqZ1oWDyoUYtGlTbQ2Yk4VTx0M8C0bJRbiWqq6PXoALaMvrYSTcufZSsR131aicRV0UDYGhhEY75sRV78dVG9DLt+G7awEo3fH//k9ELeV6IB1hGnF5Jv5rukc58ipPs2aQe3ZWQMW0ZMMIOWAg/Xhc1k2urATPStGlDw4n93XfxJM+hYttsRa/w2yFrn675BGhPs07I3s3sP3PsQcXu9CsL9EAEIpp5bq/thrPdcRgTc+GTtE66CfCDe0Q/HEWXxjsdlHFER7y9EnLQxQnH+jOxmURpDdEYz+xgDkqTBKeEzAspQ0Qk04c3t0Ytj2OwwpJm/55iiJfvAvgwn7KNJSrThvPMYjmprq8JOoymMZkNV5Fli4cB5WaEV/wDnFTWJG/z43wAAAABJRU5ErkJggg==">
                </div>
            </div>
          
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="container">
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="logo"><img data-v-a34da882=""
                                data-v-cfc9a7fc=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPYAAABJCAMAAAA5UCtaAAAC
                                6FBMVEUAAADc3Nzf39+d6ZTf399734be3t541oSS5o9x2oLd3d2/95+U5o+F34ff39+G4Ymg6Jei6p
                                Ry24IbrZdx24Jx24GD4Ii78Z+p7Zzf39+A4Id43YR73YXf399x24Jy24KK44u886Ct7pqz8Jy68qC58p6c6J
                                O+86EZrZuX55G18Z2V5pCs7pqs7ppm1Yey8JsRqp268Z943oTf399d0Io5vpLe3t6M44x23YQSqZ1XzYvf39983oa/
                                +59+4IaW55Cp7Zil65ZQyo0ut5af6pTe3t4vuJaK44xx3IKb6ZOw75yF4omA4Ie38Z6v75uj65ab6JIRqJ3g4ODf39983
                                4V03YJMyI2e7JO88p8XrJur7pkrt5ae6pQms5ei6pVw2YVz24KD4Il/4IeA4Idx3IG98p9z24J634S+86G786Cx75um7JeI
                                44sPqJ5GxY+98qAltJiS5Y963oVx24Hf398WrJsotJe78qAgsZlv2oOO5I2r7pkltJeQ5JARqpwesJo4vZOz8J2F4YpBwZC48
                                Z6f6ZRBwZA5vZM+wZEmtJfc3NyG4Ymr65cUrJyl55Uwr58Yp5+/86GZ6JGR5Y4PqJ2K5IyK4owmspba2to1v5Ubrpjf39+Y55GH
                                4oqU5pCE4YmA4Ie38Z6h6pV63oWn7Jis7pqa6JIdr5qC4Yi68p+K44t934af6pSq7Zik65aN5I2u7pqm7Jez8J0jspiS5o+j65az
                                75yR5Y5/4Iex75tx24G18Z133YN13YMgsZmW55Cr7Zmw75uc6ZOQ5Y6J44sltJiN44yd6ZOb6JKp7Zh43oRz3IK+86EarpontZeO5
                                Y153oQYrJsqtpeI44u886AVq5w1vJR+4Id03IKv75svuJU7v5IxupU/wZGM5IxZzopj04hn1Yd83oVDw5BJxo+F4okRqZ0st5Zd0Ilr
                                2IYYrZtTy4xWzItv2YU4vZNGxI9f0olMyI4UqpxQyY1OyY1x3IO48p6y8JxN9oT1AAAAm3RSTlMAYCD+v/7AEN8fgCBgIBBgIGBgIJ+/gH
                                AQ38C/YO/v37+gn5BgQODAv7+ggH9gXyD+4N/Pv5+QgH9fXzAvEO/g38C/oI9AQD8//t/f38DAn5+PgHBwb19PMO/v7+/g4N/PsJ+Pb1BQ
                                P+/v7+/v2r+wsLCvr5+fj4B/f3Bvbx/v79/Pz7+wsLCAb2BQUEA/MBAQ78/Pr5+fUDAwL7XUMtEAAAtPSURBVHja7JbPS5NhHMCfpDdRyMDN
                                LoXruONYLJTEQ4PhoUukgYzBksiTIYpiICUEWgfJQxAVssEODd7jLiPcTu2y0XjnWBu2Lm+64D0o+Rf0/X7fn9scs+3S+7jP83x/PN+NwYe98
                                D6sR48ePXpcCBzjD94t1GoLK9vsggDG7hc1gwUH4x0y9tQ8YOvxnGKD3TjjFzSePS2VaJ/ChqAG4NObjEulQomigEHFSLPcPefba+5ZRVEKSg
                                F3AVtLhxXXCuMKh/ubhqJQMVFgmewwjvj48vM5WWf84ADrNEpRosY4GtA5zdFTvhNKn5tFxg1rCZ10ogXGZ27GDaFEJpHIZDBDxdAwT9QF3atv+
                                HmDBfIZnXw+k9dqfRNc5MmYWNvPA5Ss7Gvj0OL6e86MCf9+K0L+9cBbxin+32cR3Gpl3D/1xBl2hUdmBpid8R80sxFoYTzjdOUMnHYWR+1qtXpAq0
                                r9agvjCpCChQV2ymVjb3+1gWCgwfjpjNObOos9r329fd8b+GA1nl7y7jWRpcAUZnZF1T7GROW1rgzGsawkSTFJykKCIlFHZwhaY8ym+I7r8DFiYC
                                mGgDQVIwTIkAwmmU3x/ajDQcP5SVkWUU/GEGU5JsiCLEPAGA4wEGVREGRxntmTem0fzSZEQQQtsVwWkTKF2utDQTtNM3uy+dNKAEdX7yeBcrIMO1
                                pORqER4UwDMRmFDFAtJ68zK0N9jbD/hAGVfqbxymq9QaO56Pmp1770qZnLDzt2n3q+7HKNjrpGloe7fVWOfMnhGja0f1nYpD87Ho/GI5BgwwKo0Tp
                                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">
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="s">Welcome BitGrid</div>
                        </div>
                        <form action="{{route('login')}}" method="POST">
    {{ csrf_field() }}
                        <ul data-v-a34da882="" data-v-cfc9a7fc="" class="tab">
                            <li data-v-a34da882="" data-v-cfc9a7fc="" class=""> Email </li>
                            <li data-v-a34da882="" data-v-cfc9a7fc="" class="on"> Username </li>
                        </ul>
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="item">
                            <!---->
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="it">
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="n" >Username</div>
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="val inp flex">
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input data-v-a34da882=""
                                            data-v-cfc9a7fc="" type="text" placeholder="Enter username" name="username"></div>
                                </div>
                            </div>
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="it">
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="n">Password</div>
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex inp val">
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input data-v-a34da882=""
                                            data-v-cfc9a7fc="" placeholder="Please enter your password" name="password" type="password">
                                    </div>
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="yj"><img data-v-a34da882=""
                                            data-v-cfc9a7fc=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJjSURBVHgB7VhtdeMwEFwfAjM4QQiDM4QwOEEwA6sIHAYpgyuDhEGuCNwicBlspXr7ulFkfdhy+qOa9/a1SWZXY2n0YQEUFBQUFPxkVJAZiFjrP40OoaOmr990/DdRVdVbRA35Ia6qHuEeMKJ1tDpOGIbhSB1iplbHuBK2BAk3DY6YjoFyxYz4qAdYbCEq3sOXTTieYbLMC30WFH8cXMN50PFbh2LfP2gLKcgN6vWjo0fPONmo9uQKss+AfijYAiRgcFhhD4nwPIiCLTAj/uDr8Yia3XeJN5NWwgp8t/idh/+5pB5xWjJN/CPL1DHiKd+MroA1IDEp4lv0L6mm1mNA/J79dsEVFjXFeqsxn/gO06EcdRqL08MS4DTkHG0Cd8BpNBoK18goT73W4qatcnjr+6OHa9vMWKS2OF2seJbDrTZiipWs5AH9m5P0cXHhauPomDgrUe9zyAD/iXHbHOJZvj0fmpgk7r9jBP/kagAzrfNW/Zt5+CuQL2BZox3kO5i9JrFThw2v50uLGXdYvF3dRGzigSUN6J/E3HLRS2WEBnsSB+1sJ3MxfQJ3tXiqa6+EIiXf3tINfBvZU2bx9kYmYQnw2koGjYPTZRa/s+odYCnIHhdW7Oowt5H40bLO8sMcFbWPFSM1dA/xAnIA3W9jOcX/3Uw8a2TuIRQsBE4WtY/s+cWzBvuM4vfoviAQsAUw/Boo0XPjRhzfDd7NMfze4jlOOL0TKwrz/wXdWH1BEBIvfeJnODEY6eG26fUZcSrAO0cID97gpSDqbhQTrrtJ2I6CX6+/6DjHXK8XFBQUFBTE4h2QBIpR8NLK1AAAAABJRU5ErkJggg==">
                                    </div>
                                </div>
                            </div>
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="box3">
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="cache_account">
                                    <div data-v-a34da882="" role="checkbox" tabindex="0" aria-checked="true"
                                        class="van-checkbox" data-v-cfc9a7fc="">
                                        <div
                                            class="van-checkbox__icon van-checkbox__icon--square van-checkbox__icon--checked">
                                            <i class="van-icon van-icon-success"
                                                style="border-color: rgb(113, 219, 129); background-color: rgb(113, 219, 129);">
                                                <!----></i></div><span class="van-checkbox__label">Remember account
                                            password </span>
                                    </div>
                                </div>
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="kfBox"> Forgot password? </div>
                            </div>
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="go"><button data-v-a34da882=""
                                    data-v-cfc9a7fc="" type="submit" class="btn2"> Login </button>
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="wrap bet">
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="wr"> No account? <span
                                            data-v-a34da882="" data-v-cfc9a7fc="">Register now</span></div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
    
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
