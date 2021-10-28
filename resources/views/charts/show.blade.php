@extends('layouts.main')

@section('content')
    <!-- Facts Start -->
    <div class="container" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Chart {{$nick_name}}</h2>
            </div>
        </div>
        <div class="row" style="justify-content: center;">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div id="tradingview_17b2e"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>

    <!-- Facts End -->
@endsection
@section('custom_script')
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
        const share="<?php echo $nick_name; ?>";
        new TradingView.widget(
            {
                "width": 980,
                "height": 610,
                "symbol": share,
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "light",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "show_popup_button": true,
                "popup_width": "1000",
                "popup_height": "650",
                "container_id": "tradingview_17b2e"
            }
        );
    </script>
@endsection