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
                        @foreach($cryptoes as $crypto)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$crypto['name']}}</td>
                                <td>{{$crypto['signal']}}</td>
                                <td>{{$crypto['price']}}</td>
                                <td>{{$crypto['date']}}</td>
                                <td><a href="{{route('chart_show',$crypto['nick_name'])}}">show</a></td>
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