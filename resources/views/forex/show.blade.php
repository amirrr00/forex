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
                        @foreach($shares as $share)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$share['name']}}</td>
                                <td>{{$share['signal']}}</td>
                                <td>{{$share['price']}}</td>
                                <td>{{$share['date']}}</td>
                                <td><a href="{{route('chart_show',$share['nick_name'])}}">show</a></td>
                            </tr>
                        @endforeach
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