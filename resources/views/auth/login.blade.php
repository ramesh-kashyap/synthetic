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

    <meta itemprop="name" content="{{siteName()}}">
    <meta itemprop="description"
        content="Welcome to Synthetic Venture - Your Path to Smart Crypto Investments!">
    <meta itemprop="image" content="{{asset('assets/static/image/logo.png')}}">

    <meta property="og:type" content="website">
    <meta property="og:title"
        content="Synthetic Venture">
    <meta property="og:description"
        content="Welcome to Synthetic Venture - Your Path to Smart Crypto Investments!">
    <meta property="og:image" content="{{asset('assets/static/image/logo.png')}}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="{{asset('')}}">


    <script>
        window.addEventListener("er7ror", function (event) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <div data-v-a34da882="" data-v-cfc9a7fc="" class="lang"><a href="{{route('user.lang')}}"><img data-v-a34da882="" data-v-cfc9a7fc=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAAZlBMVEUAAAAVFRUWFhYQEBAVFRUWFhYVFRUVFRUVFRUVFRUVFRUVFRUVFRUVFRUYGBgQEBAWFhbOzs5ycnK3t7ctLS1bW1tmZmYhISHDw8N+fn6goKBERESsrKyJiYmUlJQ4ODhQUFA5OTlkLOJfAAAAEHRSTlMA7+AQz7CggHBAkI/AYCAgGfxI1gAAAitJREFUWMPll9miqiAUhhE1tREC1Jyq93/JI4tD6LZdTHf7u8jVhV+sXxlCa6oyxwn5SpLlRYV+JS0S4gDeXd5rDsSZd6oyIR7g00/PgXhyWLd1JN5kKTJkJIDjpq/g7k4kkBIBFxwqSlRMOwIEN3chEUhhQBEoZhGOIUoQqkgUKlTEEZUojyPKURZHhFESR5Qg8gFxl5/PlsG1F+QDH0Q9Y/LCGaUtl1XLhIeouVF6lcVIZ26yus7XxlXEh/l2LgsqaRvpngvGnUTQD+0gJwrUsu7A5CJq2OvmSYkmWdeyGhoH0Q1u7iFhJWohfihvliLTjizv9D/cWHtrETSmInpokVAhSZitCAZkHrniCi1rqZ1oWDyoUYtGlTbQ2Yk4VTx0M8C0bJRbiWqq6PXoALaMvrYSTcufZSsR131aicRV0UDYGhhEY75sRV78dVG9DLt+G7awEo3fH//k9ELeV6IB1hGnF5Jv5rukc58ipPs2aQe3ZWQMW0ZMMIOWAg/Xhc1k2urATPStGlDw4n93XfxJM+hYttsRa/w2yFrn675BGhPs07I3s3sP3PsQcXu9CsL9EAEIpp5bq/thrPdcRgTc+GTtE66CfCDe0Q/HEWXxjsdlHFER7y9EnLQxQnH+jOxmURpDdEYz+xgDkqTBKeEzAspQ0Qk04c3t0Ytj2OwwpJm/55iiJfvAvgwn7KNJSrThvPMYjmprq8JOoymMZkNV5Fli4cB5WaEV/wDnFTWJG/z43wAAAABJRU5ErkJggg==">
               
               </a>     </div>
            </div>
          
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="container">
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="logo"><img data-v-a34da882=""
                                data-v-cfc9a7fc=""
                                src="{{asset('')}}assets/static/img/logo1.png">
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="s">@lang('WELCOME TO SYNTHETIC VENTURES')</div>
                        </div>
                        <form action="{{route('login')}}" method="POST">
                                {{ csrf_field() }}
                        <ul data-v-a34da882="" data-v-cfc9a7fc="" class="tab">
                            <li data-v-a34da882="" data-v-cfc9a7fc="" class="email-tab"> @lang('Email') </li>
                            <li data-v-a34da882="" data-v-cfc9a7fc="" class="username-tab on"> @lang('Username') </li>
                        </ul>
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="item">
                            <!---->
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="it input-container">
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="n">@lang('Username')</div>
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="val inp flex">
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input data-v-a34da882=""
                                            data-v-cfc9a7fc="" type="text" placeholder="Enter username" name="username"></div>
                                </div>
                            </div>
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="it">
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="n">@lang('Password')</div>
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex inp val">
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input data-v-a34da882="" id="passwordInput"
                                            data-v-cfc9a7fc="" placeholder="Please enter your password" name="password" type="password">
                                    </div>
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="yj"><i id="check" onclick="togglePasswordVisibility()" class="fa fa-eye-slash" style="    font-size: 20px;
                                        margin-top: -10px;"></i>
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
                                                <!----></i></div><span class="van-checkbox__label">@lang('Remember account password') </span>
                                    </div>
                                </div>
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="kfBox"> @lang('Forgot password') </div>
                            </div>
                            <div data-v-a34da882="" data-v-cfc9a7fc="" class="go"><button data-v-a34da882=""
                                    data-v-cfc9a7fc="" type="submit" class="btn2">@lang('Login') </button>
                                <div data-v-a34da882="" data-v-cfc9a7fc="" class="wrap bet">
                                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="wr"> @lang('No account') <span
                                            data-v-a34da882="" data-v-cfc9a7fc=""><a href="{{route('register')}}" style="color:#ebd100;">@lang('Register now')</a></span></div>
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
    @include('partials.notify')

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function() {
    
    $('#check').click(function(){
         
          if($(this).hasClass('fa-eye-slash')){
             
            $(this).removeClass('fa-eye-slash');
            
            $(this).addClass('fa-eye');
            
            $('#test-input').attr('type','text');
              
          }else{
           
            $(this).removeClass('fa-eye');
            
            $(this).addClass('fa-eye-slash');  
            
            $('#test-input').attr('type','password');
          }
      });
      
  });
      </script>
      
      <script>
  function togglePasswordVisibility() {
      var passwordInput = document.getElementById('passwordInput');
      if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
      } else {
          passwordInput.type = 'password';
      }
  }
  
  
  
  </script>

    <!-- Your other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js"></script>

    <!-- Your custom script -->
    <script>
        $(document).ready(function() {
            $('.email-tab').click(function() {
                $('.input-container').html(`
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="n">Email</div>
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="val inp flex">
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input data-v-a34da882="" data-v-cfc9a7fc="" type="email" placeholder="Enter email" name="username"></div>
                    </div>
                `);
                $('.email-tab').addClass('on');
                $('.username-tab').removeClass('on');
            });

            $('.username-tab').click(function() {
                $('.input-container').html(`
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="n">Username</div>
                    <div data-v-a34da882="" data-v-cfc9a7fc="" class="val inp flex">
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="ico"></div>
                        <div data-v-a34da882="" data-v-cfc9a7fc="" class="flex1"><input data-v-a34da882="" data-v-cfc9a7fc="" type="text" placeholder="Enter username" name="username"></div>
                    </div>
                `);
                $('.username-tab').addClass('on');
                $('.email-tab').removeClass('on');
            });
        });
    </script>
</body>



</html>
