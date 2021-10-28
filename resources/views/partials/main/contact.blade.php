@extends('layouts.main')
@section('custom-style')
@stop
@section('content')
    <div class="content-wrapper" style="min-height: 347px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>تماس</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                            <li class="breadcrumb-item active">تماس</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5 style="font-weight: 700"><span> ارتباط با طراح برنامه</span></h5>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <i class="fas fa-user-edit" style="font-size: x-large;"></i>
                            <span>امیر مختاری زاده</span>
                        </div>
                        <div class="col-12 mt-3">
                            <i class="fas fa-phone" style="font-size: x-large;"></i>
                            <span>09388150023</span>
                        </div>
                        <div class="col-12 mt-3">
                            <i class="fas fa-envelope" style="font-size: x-large;"></i>
                            <span>amirmokhtarizade@gmail.com</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->

    </div>
@stop

