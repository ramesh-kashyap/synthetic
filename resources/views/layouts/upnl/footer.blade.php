<div data-v-cfc9a7fc="" class="footer">
                <div data-v-6049d237="" data-v-6df716d9="" class="footers-con" data-v-cfc9a7fc="">
                    <div data-v-6049d237="" class="footers-h"></div>
                    <div data-v-6049d237="" class="footers home">
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="">
                                <a href="{{route('user.strategy')}}"> <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="{{ asset('') }}assets/static/img/deposit.png"><alt=""></div><span data-v-6049d237="">@lang('AI Strategy')</span></a>
                            </div>
                        </div>
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="">
                                <a href="{{route('user.Market')}}"> <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="{{ asset('') }}assets/static/img/market.png"><alt=""></div><span data-v-6049d237="">@lang('Market')</span></a>
                            </div>
                        </div>
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="on">
                                <a href="{{route('user.dashboard')}}" > <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="{{ asset('') }}assets/static/img/icons8-home-100.png" style="width:50px;width:50px;"
                                        alt=""></div><span data-v-6049d237="" style="color:white;">@lang('Home')</span></a>
                            </div>
                        </div>
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="">
                                <a href="{{route('user.wallet')}}">  <div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="{{ asset('') }}assets/static/img/1222.png"  alt=""></div><span data-v-6049d237="">@lang('Wallet')</span></a>
                            </div>
                        </div>
                        <div data-v-6049d237="" class="item">
                            <div data-v-6049d237="" class="">
                                <a href="{{route('user.Mine')}}"><div data-v-6049d237="" class="icon"><img data-v-6049d237=""
                                        src="{{ asset('') }}assets/static/img/p.png" alt=""></div><span data-v-6049d237="">@lang('Mine')</span></a>
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
                src="{{ asset('') }}assets/static/img/start.0aabcda5.gif"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js">
    </script>
    <script src="{{ asset('') }}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{ asset('') }}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js">
    </script>
    <script src="{{ asset('') }}assets/static/js/app.83a7756d.1717187934571.js"></script>
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2001; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">@lang('Login successful')</div>
    </div>
</body>
@include('partials.notify')

</html>