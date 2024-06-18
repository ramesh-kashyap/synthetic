<html lang="en" style="font-size: 50px;" class="pc">

<head>
    <meta charset="utf-8">
    <title>BitGrid</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-6072d8a4.6ac11efd.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-6072d8a4.290faf4b.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-79aa18e0.f843b761.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-79aa18e0.e3404a41.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-5109cffc.e3562785.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-5109cffc.3f1196fb.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-167ffb9b="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-167ffb9b="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">

                        <div data-v-397da544="" class="left_title"> Strategy </div>

                        <div data-v-397da544="" class="flex1"></div>

                        <div data-v-397da544="" class="head_right"><img data-v-167ffb9b="" data-v-397da544=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAPFBMVEUAAAD////////////////////////////////////////////////////////////////////////////YSWgTAAAAE3RSTlMAv8Ag30Bg76AQMHDPkICwn1DQSxq5iQAAAYFJREFUSMfdlUG2gyAMRdUYIyBi6/73+oOk5KDA+ZNO+iZV8m4IQcrwQzLuGBvyWPHb+ezoMA8/nV1tdyDmp6mudyT20r/w0GiGhpA4WxkNPAJDUzvnKxc+nucUO2XxppQFGFhqQKVT2ANsraE9wDxmEJ/hh1etJHgtN6Gs+r0PT6Cv7wDo/OEdmv8B4Cm3ChoALCzQ3WUp0m4rRnQT5/z5hfbGLey/fJODa9opvpCtlLSlXPK1uxx+zTL+WDSwpH6Nfyocm12C7OfS4jyyPGwBa/7WPJNyhmWKKjBn2ypPkgXqAF4TKKCjrg44DtkHMBBvXx3wDOQ6tP+behS4p91PIcTTnIHk0WxCNABdA5SErCH0u6REkI3Y64ChtEdKeNkHVKD4uw1FzPiYGEhbITgUNc23cxlynWqxRXQrCB8N5YFg0Zzkze37hysMak9HTGXT/XJgiu0kB7Eg1lMFnxuM+Iaj9JT9irhVhPEtKK8L7GqZ9IZzfavOGfiKWx0Ov6Y/i5cqRP3WDagAAAAASUVORK5CYII="
                                class="record_icon"></div>
                    </div>
                </div>
            </div>
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="container">
                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="totalBox" style="border-radius: 4%;
    border-color: black;">
                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="name flex">
                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex1">Total Balance</div>
                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s" style=""> My Wallet<img
                                        data-v-167ffb9b="" data-v-cfc9a7fc=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAANlBMVEXS/9IAAADS/9LU/9TU/9TV/9XQ/9DA/Kyr/HvU/9TT/9Pa/9qu+4Kv+4S5/Zus+3ut+36q+3jdZBpaAAAAEXRSTlMzAC0GFCEZTeUoHA6zpmbZzB36ToMAAAFKSURBVFjDtZdLdsMgDEUf+rWIpq33v9mmg5wkjkHGcu5c9wASIKF0YHGthCtU1RqXDtuC5oQVpG2vgA3bkPAOARsGOEcCwRiSoYArQoj7AsEeSHoCx05sW6DYjW4JKiaorwLFFLoWGCbxZ4FgGnkUMOYhfhAQDlDvAsEh5CZgAnB0EwgqMKxIBCcYLgHBCYRLwCAFMfQvaEjQCsJLcFl+PgYFjWgH38uyfHYNVMCIBEMDoyHga2gQGFIGhyJlUFSkDBWElIF6uV+zMoSp2+byDkF6C+lDTKcxX0ieiodBUvFo6eucf1CKhzXx242HnvGoFiSf9WI4jJzytSWW4LfvPbGAUxqMKxUHoGSTBU62efbcaPp0fLbVTTfb57f7MxXpuZEHNhi6CCGVx2NfpLBw8PQoPB59haLwePjWFwd5MHyv4Wb38d+FS4c/ZqkSYvi2fKYAAAAASUVORK5CYII=">
                                </div>
                            </div>
                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="amount" style=""> 6.1642 <span
                                    data-v-167ffb9b="" data-v-cfc9a7fc="">USDT</span></div>
                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="">
                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n" style=";">Today's earnings
                                    </div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"
                                        style="> 0 <span data-v-167ffb9b=""
                                            data-v-cfc9a7fc="">U</span></div>
                                </li>
                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class=" n" style=""> Total revenue</div>
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s" style=""> 6.1642 <span
                                            data-v-167ffb9b="" data-v-cfc9a7fc="" style="">U</span></div>
                                </li>
                            </ul>
                        </div>
                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="add" style="    padding-top: 1rem;
"><button data-v-167ffb9b=""
                            data-v-cfc9a7fc="" class="btn2"><img data-v-167ffb9b="" data-v-cfc9a7fc=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAxAQMAAACmkLhhAAAABlBMVEUAAAAAAAClZ7nPAAAAAXRSTlMAQObYZgAAABpJREFUGNNjIAqwP6Anxf4fCB4QQdHZZSQAALGHOjODQZQ0AAAAAElFTkSuQmCC">
                            Add strategy </button></div>
                </div>
                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="orderList">
                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="cname">My Strategy</div>
                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="" class="list">
                                @foreach($recharges as $recharge)
                                
                                @php
                                     $planDetail = \DB::table('plans')->where('id',$recharge->plan)->first(); 

                                    // dd($planDetail);
                                @endphp

                                
                                <?php 
                                                                    
                                $date1 = $recharge->created_at;
                                $date1 = strtotime($date1);
                                $date1 = strtotime(" + ".($planDetail?$planDetail->days:0)." days", $date1);
                                $new_date1= date('Y-m-d H:i:s', $date1);

                                //   echo $new_date1;
                                ?>

                                <script>
                                // Set the date we're counting down to
                                var x = setInterval(function() {
                                    
                                    var countDownDate = new Date("{{$new_date1}}").getTime();
                                 
                                     // Get todays date and time
                                     // var now = new Date().getTime();


                                     var now =  new Date(new Date().toLocaleString('en-US', {timeZone: 'Asia/Kolkata'}))

                                     // Find the distance between now an the count down date
                                     var distance = countDownDate - now;
                                     
                                     // Time calculations for days, hours, minutes and seconds
                                     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                     
                                     // Output the result in an element with id="demo"
                                     
                                 
                                     
                                     document.getElementById("countdown-{{ $recharge->id }}").innerHTML = "<span>" + days + ":</span><span>" + "<span>" + hours + ":</span><span>" + minutes + ":</span><span>" + seconds + "</span>";
                                         //   $('#left_time').html('Hello');
                                     
                                     // If the count down is over, write some text 
                                     if (distance < 0) {
                                     clearInterval(timer);
                                         document.getElementById("countdown-{{ $recharge->id }}").innerHTML = "EXPIRED";
                                     }
                              
                                 },1000);
                                </script>




                                <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                    <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex">
                                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="ico">
                                            <img data-v-167ffb9b="" data-v-cfc9a7fc=""
                                                data-src="/assets/images/3dc7be2d187bdf6ff56095aa33e5de43.png"
                                                src="/assets/images/3dc7be2d187bdf6ff56095aa33e5de43.png"
                                                lazy="loaded"></div>
                                        <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex1">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n1 flex">
                                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">
                                                    {{ $recharge->plan == 1 ? "VIP 1" : ($recharge->plan == 2 ? "VIP 2" : ($recharge->plan == 3 ? "VIP 3" : "VIP 4")) }}
                                                </div>
                                                                                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="status">
                                                    <span data-v-167ffb9b="" data-v-cfc9a7fc="">{{ $recharge->roiCandition==0?"Running":"Completed" }}</span></div>
                                            </div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n2 flex">
                                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="sun"><img
                                                        data-v-167ffb9b="" data-v-cfc9a7fc=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAMAAACrZuH4AAAAM1BMVEUAAAD///////////////////////////////////////////////////////////////+3leKCAAAAEHRSTlMAYJ/fMCDvEHBAwJCvgFDP9KY6pgAAAJNJREFUOMvNktEOwyAIRVUUUdvu/v/XLjFZxOLWZH3peSBijkpA91Aiy4XhEW4YAZpXNsKBmX19vc7+NBJR7OGr4THC2sjEqYcbdQwEzQ4ErJpE8M5QQfFjbyBnSYQBR2eJ2iC/EBgkqS/zUQFZvNFUpTtQzOy3KW+oJwNIU575dEkxRxrk4vMJgjV+7pTRZbXzKN5DrAf2kOJR1wAAAABJRU5ErkJggg==">+4
                                                </div>
                                                <!---->
                                                <!---->
                                                <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="time flex" style="font-size: 13px;"> Remaining
                                                    time: <span id="countdown-{{ $recharge->id }}"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul data-v-167ffb9b="" data-v-cfc9a7fc="" class="flex">
                                        <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">Investment</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> {{ $recharge->amount }} <span>
                                        </li>
                                        <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">Today earning</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> {{ $recharge->todayEarning ?? 0   }} 
                                               
                                                </div>
                                        </li>
                                        <li data-v-167ffb9b="" data-v-cfc9a7fc="">
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="n">Rate of return</div>
                                            <div data-v-167ffb9b="" data-v-cfc9a7fc="" class="s"> {{ $planDetail?$planDetail->profit:0   }} % </div>
                                        </li>
                                    </ul><button data-v-167ffb9b="" data-v-cfc9a7fc="" class="btn2"> start </button>
                                </li>
                                @endforeach
                            </ul>

                            <ul data-v-167ffb9b="" data-v-cfc9a7fc="" class="list" style="display: none;"></ul>
                        </div>
                        
                    <div class="van-overlay" style="z-index: 2027; display: none;"></div>
                    <div data-v-167ffb9b="" class="van-popup van-popup--bottom"
                        style="background: none; z-index: 2028; display: none;">
                        <div data-v-167ffb9b="" class="popBox">
                            <div data-v-167ffb9b="" class="cname"> Add strategy <img data-v-167ffb9b=""
                                    class="close-btn"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8BAMAAADI0sRBAAAAMFBMVEX///8AAAD///////////////////////////////////////////////////////9PNSPeAAAAD3RSTlMZAKgVDtOpJwRuCYxv8eL5+dI9AAABKUlEQVQ4y43VMUoDYRAF4Gc2CIqIiymCla1VErCwTLCxtPMQFvEKQQ/gDdQbeBPvsmAhkkz+3fx5gc3bmbzqh8fX7LAzKOtc3aOV26+maOo3iDxs6wFkZpt6ONZ1sWjqV3TkLtXEkqO8RGcmqZ521/0SQzhZYODVM1x49QSfXn2KqVf3Mfbqgq+TazA3+/VHxWfP3pFDbEY+sj/kEJtVxLbH50Y+Ss/HVn1siRP/vkDyjJ8AzYk1J9acWHNiyVfEmhNLTiw5scx5apcCc1T88iI9q1M5mFzjpeYc1VxyjopzlxjQnKMil5hcY3KJu/hPxpl/t+oz4pr/A23e4MyJd5wYeMZhKYLfP1gewerxF9dRsPaCpemv3GBhB+s+PhbkAruHKj5zwZFcA76M1d2Br6D2AAAAAElFTkSuQmCC">
                            </div>
                            <div data-v-83cbb658="" data-v-167ffb9b="" class="tabs-con">
                                <div data-v-83cbb658="" class="van-tabs van-tabs--line">
                                    <div class="van-tabs__wrap van-tabs__wrap--scrollable">
                                        <div role="tablist"
                                            class="van-tabs__nav van-tabs__nav--line van-tabs__nav--complete">
                                            <div role="tab" aria-selected="true" class="van-tab van-tab--active"><span
                                                    class="van-tab__text">Strategy</span></div>
                                            <div role="tab" class="van-tab"><span
                                                    class="van-tab__text">Investment</span></div>
                                            <div role="tab" class="van-tab"><span class="van-tab__text">Pledge</span>
                                            </div>
                                            <div role="tab" class="van-tab"><span class="van-tab__text">Exchange</span>
                                            </div>
                                            <div class="van-tabs__line"
                                                style="transform: translateX(53.5px) translateX(-50%); transition-duration: 0.3s;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="van-tabs__content">

                                    </div>
                                </div>
                            </div>
                            <ul data-v-167ffb9b="" class="cllist">
                                @foreach($data as $value)
                                <a href="{{route('edit',['id'=>$value->id])}}">
                                    <li data-v-167ffb9b="">
                                        <div data-v-167ffb9b="" class="title" style="color:white;">VIP{{ $value->id}}
                                        </div>
                                        <div data-v-167ffb9b="" class="mini" style="color:white;">
                                            ${{ $value->min }}-${{ $value->mix}}</div>
                                        <div data-v-167ffb9b="" class="mini" style="color:white;">
                                            {{ $value->profit }}Daily Profit</div>
                                        <div data-v-167ffb9b="" class="rate">
                                            <div data-v-167ffb9b="" class="s"><span data-v-167ffb9b=""
                                                    style="color:white;">{{ $value->days}}</span><img data-v-167ffb9b=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEwAAAAsCAMAAAD4va5DAAAB71BMVEUAAAD////////////////////////////////7yY34mir////////////////////4p0b5oTf////////////6tWL6w4H++/b4lBr6sFb806Tkz6H4myr5qUnNrHDizJv3myn4minQtHvPsnn7wHj6v3j3kxr///9ifurlz5/kzp3jzZviy5nhyZjgyJbawIrZv4jVuYH2+P7+8uPXvIXexZLdxI/cw47bwYzYvYfWuoNshut1ju3fx5T+/Pj9+vWwvvSnt/P++fGTpvH95MX6wn/Ttn3QsnfRs3nPsHT5pD7//vzx59Dm067816rfxpPUt37StXv6u274oTfY3/ro2Lrq27n927Ll0aX80Jv4njG6xvZ/lu7w5Mrt3r7NrnH6tWH3liHj6Pz+9Of48ub07Nz94b7p2LP806ThzaL6xIT6tmX4ojv4oDX1kx3s7/z79/GJnu/+793z6tbv4sXo1av8y5H7x4j6vnPF0Pixv/WdrvJ6ku727+H+7Nf96tP+58zw5Mvl1bXn06b5s135rlL5rE75qUjs7/3BzPearfKdrvFviOz59Or96dL95cft4Mbr3cL837reyZ78zpfTtoHxrV/qpVr4mCTr7/3O1/iFm+5wiexog+v92Kzzzqflzp7bxJr1wILynz3xmTFSpJKxAAAAJnRSTlMA71CwkBDf0L/+/cBwIIB//vrgYED9+vn38fDv6OXg3/T07+/q6uLdKcsAAATKSURBVEjHhZdnVxNBFIZZAikUBXvv7huRmkUUEpOQYktRAymERCNFilIEaQqCVHvvvf1QZ3aT7MyG8n7JmcmZ59w6czdPo8L8Ap1eAASDsSC/cMP1etpmFMBKt9E6f01Uvh6Ap217eZEoFpWlTB4QWdrdNqvZbE24na0gsvsjC7GKiljPNX8XAP3WVVGlRsBl2icyutQvAR02c0a2+4+A57HKkycrKk4Qjd11AIbSXFaJAJd3l6jRYEiCpdmsiuDsdxWaLIITSrSszcCeQ+IqagkCToZmmwIeMrSxbmBzDssrrqF+nmZuZmhUSULjWTt3i2vqo4OnJSyEVklovxRaj52llQD7ueM3eNoHoJml3QHuVjLGRYCSbB4F7OBZL6OXuA0vLDbeU3uMpSUhZHJqQFDktASUxTtv3lZ3etFqZtWOriqWNgqjwtoKaSB7aiDVIooTmBUX4WOsi7vgZmFWCyKEEYudUGgLdijNoEdIPRUCRqIj6BXb8JJ3dMjMO6roWtq2JPRyE0FiDr2DrM43Etq4MLpwh6NZ0rCMp3ZsIzAdjrGnbo8jLendALNv0kTNmYbRwFGYn0atECgXuYYE4JjzybiUuv0XFisXtTQsk4YFCIXES4/I6RaAm+Kn0AMQLan7Hj4F5lbM+P3+QDapXSQFBTDxsDYAE+S3iNKi7P5jTXX4L5+trq7K0EZRkGdEioe9ALCsRAmYZS0emmZhbnSfunz2LKFVybRr0JGKLcsJmSS3U5T6y2QGFq5DbRiuIrRqYlwl7dQxUhwCijjYJIhe9PZ73wBgK7AIvsduPgOBSM/rvoyreyHkASKnH2B0k70ngSfOZwwNON3QcCrSXaXQDgIENsjBRgBMTnjk0ugVWQGJaR52htACvoBsG4Vp3YwDcNHQBQFwiS6C5RtfaPa+nuTzmZ504KibW1CeW2VUcicwvV6Gju93mLpNwD76KlB9uuGUktQxGEg3bVfv+0V642NCWWgSkEJH+1euNGZqas6cOU1p1LgIivMKmIYOQtZS1kYsss3Z8YRvzmRtrUKTjUuigG2nuAOy5sZvLa94JRANsO00ZeXbKdBYW0OMS9NoOxUKyD68K5NRCayibM1imq9Z1DQ2qrb1AWT0MMLE31sjPqQltah//MEXM6unGK2vl2kKLgIdHVbgYh7yFeD2Jx88c52ds+Ns0UiaS2MIsSaG1jCs3Nt6eNlu6hSXgbg4yD93IXzWGDZc19TUlKWFoVeGH7gOqznzRcV+PMgZEiTc5yI2hEBdXV1TPTGuluCqhpEeh4zYw9waLWIvglpYEB2cYVPoOneF0giO2uaHQX2E+UEjHteOG7mPcN85ldYYhlDKjAe7xXX0UTMeJID5C1cJ7YpCewswY9Um7Ny/NuuDA/e4UcOC8PkLKq3Pjk0EwtCwYy2WFzyrGQhfPE9pV2VaGJSloQUHVkP9+8mzrO2URWAK7Vz9K5XFjqFSKAc16HXxY2izBY7A9esXKY7S5tUxlFWpAZCOl3OPi8kFtNpUq5wWoPv9dSKZ9j7sAIppHnO1VR7dTakyOrqXb29TRnenO0FHd5u7vRVEjvnfjUcPHDjS9PZ1NwD9Ol8COrASijdab9MStJ87xQYBELboyOfMhmte/wHeciG5fv//ZgAAAABJRU5ErkJggg==">
                                            </div>
                                            <div data-v-167ffb9b="" class="n" style="color:white;">Days</div>
                                        </div>
                                        <div data-v-167ffb9b="" class="lv"><img data-v-167ffb9b=""
                                                src="data:image/png;base64,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">VIP{{ $value->id}}
                                        </div><img data-v-167ffb9b=""
                                            src="{{asset('')}}assets/static/upload/3dc7be2d187bdf6ff56095aa33e5de43.png"
                                            class="img">
                                    </li>
                                </a>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com//jquery-3.3.1.min.js"> </script>
            <script>
                $(".btn2").click(function () {
                    // alert("hi");
                    // $(".van-overlay").toggleClass("van-overlay-active");
                    $('.van-popup--bottom').toggle().css('display', 'block');

                });
                $(".close-btn").click(function () {
                    // alert("hi");
                    // $(".van-overlay").toggleClass("van-overlay-active");
                    $('.van-popup--bottom').toggle().css('display', 'none');

                });

            </script>
          

            @include('layouts.upnl.footer')
