@extends('layouts.main')

@section('content')
    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg" style="margin: 0 0;align-items: baseline;">
        <div class="container">
            <div class="row" style="border: solid 5px;border-color: gold;">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="facts-text">
                            <p><h4 style="color: white;">Breaking News</h4></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        {{--<i class="fa fa-user"></i>--}}
                        <div class="facts-text">
                            {{--<h3 data-toggle="counter-up">350</h3>--}}
                            {{--<p>Engineers & Workers</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        {{--<i class="fa fa-users"></i>--}}
                        <div class="facts-text">
                            {{--<h3 data-toggle="counter-up">1500</h3>--}}
                            {{--<p>Happy Clients</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        {{--<i class="fa fa-check"></i>--}}
                        <div class="facts-text">
                            {{--<h3 data-toggle="counter-up">5000</h3>--}}
                            {{--<p>Projects Completed</p>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container" style="margin-top: 15px;">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
                    {
                        "symbols": [
                        {
                            "proName": "FOREXCOM:SPXUSD",
                            "title": "S&P 500"
                        },
                        {
                            "proName": "FOREXCOM:NSXUSD",
                            "title": "Nasdaq 100"
                        },
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "BTC/USD"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "ETH/USD"
                        }
                    ],
                        "colorTheme": "light",
                        "isTransparent": false,
                        "showSymbolLogo": true,
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container" style="margin-top: 15px;">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [
                        {
                            "proName": "FOREXCOM:SPXUSD",
                            "title": "S&P 500"
                        },
                        {
                            "proName": "FOREXCOM:NSXUSD",
                            "title": "Nasdaq 100"
                        },
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "BTC/USD"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "ETH/USD"
                        }
                    ],
                        "showSymbolLogo": true,
                        "colorTheme": "light",
                        "isTransparent": false,
                        "displayMode": "adaptive",
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>
    <!-- Facts End -->
    <!-- Price Start -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Cross Rates</p>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-top: 10px;border: 1px solid #e0e3eb;">
                    <p>
                        See the most traded currency crosses that are displayed by popularity and regions. Switch between the Prices and Heat Map modes to see the latest price updates along with the strongest and weakest currencies. The table lets you compare cross rates and exchange rates of the most popular currencies throughout the world.
                    </p>
                </div>
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                        {
                            "width": "100%",
                            "height": "400",
                            "currencies": [
                            "EUR",
                            "USD",
                            "JPY",
                            "GBP",
                            "CHF",
                            "AUD",
                            "CAD",
                            "NZD",
                            "CNY"
                        ],
                            "isTransparent": false,
                            "colorTheme": "light",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>
    <!-- Price End -->
@endsection
@section('custom_script')

@endsection