@extends('layouts.main')

@section('content')
    <!-- Facts Start -->
    <div class="container" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Forex Shares</h2>
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
                        {{--@foreach($shares as $share)--}}
                            {{--<tr>--}}
                                {{--<th scope="row">{{$loop->iteration}}</th>--}}
                                {{--<td>{{$share['name']}}</td>--}}
                                {{--<td>{{$share['signal']}}</td>--}}
                                {{--<td>{{$share['price']}}</td>--}}
                                {{--<td>{{$share['date']}}</td>--}}
                                {{--<td><a href="{{route('chart_show',$share['nick_name'])}}">show</a></td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        <tr>
                            <th scope="row">1</th>
                            <td>Euro</td>
                            <td>yes</td>
                            <td>3200</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','FX:EURUSD')}}">show</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Pound</td>
                            <td>no</td>
                            <td>500</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','FX:GBPUSD')}}">show</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Dollar</td>
                            <td>no</td>
                            <td>500</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','FX:USDJPY')}}">show</a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Eng pound</td>
                            <td>no</td>
                            <td>100</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','OANDA:GBPUSD')}}">show</a></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Canada dollar</td>
                            <td>yes</td>
                            <td>800</td>
                            <td>2021/11/10</td>
                            <td><a href="{{route('chart_show','OANDA:USDCAD')}}">show</a></td>
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