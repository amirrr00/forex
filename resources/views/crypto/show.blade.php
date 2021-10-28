@extends('layouts.main')

@section('content')
    <!-- Facts Start -->
    <div class="container" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Cryptoes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Signal</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Chart</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach($cryptoes as $crypto)--}}
                            {{--<tr>--}}
                                {{--<th scope="row">{{$loop->iteration}}</th>--}}
                                {{--<td>{{$crypto['name']}}</td>--}}
                                {{--<td>{{$crypto['signal']}}</td>--}}
                                {{--<td>{{$crypto['price']}}</td>--}}
                                {{--<td>{{$crypto['date']}}</td>--}}
                                {{--<td><a href="{{route('chart_show',$crypto['nick_name'])}}">show</a></td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        <tr>
                            <th scope="row">1</th>
                            <td>Bitcoin</td>
                            <td>yes</td>
                            <td>85000</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','BINANCE:BTCUSDT')}}">show</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Dodge</td>
                            <td>no</td>
                            <td>500</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','BINANCE:DOGEUSDT')}}">show</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Solo</td>
                            <td>no</td>
                            <td>500</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','BINANCE:SOLUSDT')}}">show</a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Etheriom</td>
                            <td>no</td>
                            <td>100</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','BINANCE:ETHUSDT')}}">show</a></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Shiba</td>
                            <td>no</td>
                            <td>150</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','BINANCE:SHIBUSDT')}}">show</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Facts End -->
@endsection
@section('custom_script')

@endsection