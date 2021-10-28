{{--<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 347px; overflow-x: hidden;">--}}
    {{--<!-- Brand Logo -->--}}
    {{--<a href="{{route('home')}}" class="brand-link">--}}
        {{--<img src="{{asset('images/default/saba-logo.png')}}" alt="صباباتری" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        {{--<span class="brand-text font-weight-light">پنل مدیریت</span>--}}
    {{--</a>--}}

    {{--<!-- Sidebar -->--}}
    {{--<div class="sidebar" style="--}}
    {{--overflow-x: hidden;--}}
{{--">--}}
        {{--<div>--}}
            {{--<!-- Sidebar user panel (optional) -->--}}
            {{--<div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
                {{--<div class="image">--}}
                    {{--<img src="{{asset('/images/upload/user-profile/'.auth()->user()->picture)}}" class="img-circle elevation-2" alt="Image">--}}
                {{--</div>--}}
                {{--<div class="info">--}}
                    {{--<h4 href="#" style="color: white;">{{auth()->user()->first_name . ' ' . auth()->user()->last_name}}</h4>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Sidebar Menu -->--}}
            {{--<nav class="mt-2">--}}
                {{--<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">--}}
                    {{--<!-- Add icons to the links using the .nav-icon class--}}
                         {{--with font-awesome or any other icon font library -->--}}
                    {{--<li class="nav-item has-treeview {{ (request()->is('users/*')) ? 'menu-open' : '' }} {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'users_home')  ? 'active menu-open' : '' }}">--}}
                        {{--@if(auth()->user()->level == '1')--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                {{--<p>--}}
                                    {{--کاربر ها--}}
                                    {{--<i class="right fa fa-angle-left"></i>--}}
                                {{--</p>--}}
                            {{--</a>--}}
                        {{--@endif--}}
                        {{--<ul class="nav nav-treeview">--}}
                            {{--<li class="nav-item">--}}
                                {{--<a href="{{route('users_create')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'users_create')  ? 'active' : '' }}">--}}
                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                    {{--<p>ایجاد</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--<a href="{{route('users_list')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'users_list')  ? 'active' : '' }}">--}}
                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                    {{--<p>لیست</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--<a href="{{route('users_permission')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'users_permission')  ? 'active' : '' }}">--}}
                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                    {{--<p>سطح دسترسی</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
{{--                    users--}}
                    {{--<li class="nav-item has-treeview  {{ (request()->is('battries/*')) ? 'menu-open' : '' }} {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_home')  ? 'active menu-open' : '' }}">--}}
                        {{--<a href="#" class="nav-link">--}}
                            {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                            {{--<p>--}}
                                {{--باتری های اسقاط--}}
                                {{--<i class="right fa fa-angle-left"></i>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                        {{--<ul class="nav nav-treeview">--}}
                            {{--@if(auth()->user()->permission['add_cargo'] == 'on')--}}
                                {{--<li class="nav-item has-treeview  {{ (request()->is('users/*')) ? 'menu-open' : '' }}">--}}
                                    {{--<a href="{{route('battries_cargo_create')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_cargo_create')  ? 'active' : '' }}">--}}
                                        {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                        {{--<p>--}}
                                            {{--ثبت--}}
                                        {{--</p>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
{{--                            base tables--}}
                            {{--<li class="nav-item has-treeview  {{ (request()->is('battries/basic_information/*')) ? 'menu-open' : '' }} {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_basic_information_home')  ? 'active' : '' }}">--}}
                                {{--@if(auth()->user()->permission['info'] == 'on')--}}
                                    {{--<a href="#" class="nav-link">--}}
                                        {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                        {{--<p>--}}
                                            {{--اطلاعات پایه--}}
                                            {{--<i class="right fa fa-angle-left"></i>--}}
                                        {{--</p>--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                                {{--<ul class="nav nav-treeview">--}}
                                    {{--<li class="nav-item has-treeview  {{ (request()->is('battries/basic_information/battries*')) ? 'menu-open' : '' }}">--}}
                                        {{--@if(auth()->user()->permission['info_battries'] == 'on')--}}
                                            {{--<a href="#" class="nav-link">--}}
                                                {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                                {{--<p>--}}
                                                    {{--باتری ها--}}
                                                    {{--<i class="right fa fa-angle-left"></i>--}}
                                                {{--</p>--}}
                                            {{--</a>--}}
                                        {{--@endif--}}
                                        {{--<ul class="nav nav-treeview">--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_battries_create')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_battries_create')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>جدید</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_battries_list')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_battries_list')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>لیست</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--                                    industries--}}
                                    {{--<li class="nav-item has-treeview  {{ (request()->is('battries/basic_information/agencies*')) ? 'menu-open' : '' }}">--}}
                                        {{--@if(auth()->user()->permission['info_agencies'] == 'on')--}}
                                            {{--<a href="#" class="nav-link">--}}
                                                {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                                {{--<p>--}}
                                                    {{--نمایندگی ها--}}
                                                    {{--<i class="right fa fa-angle-left"></i>--}}
                                                {{--</p>--}}
                                            {{--</a>--}}
                                        {{--@endif--}}
                                        {{--<ul class="nav nav-treeview">--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_agencies_create')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_agencies_create')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>جدید</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_agencies_list')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_agencies_list')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>لیست</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--                                    products--}}
                                    {{--<li class="nav-item has-treeview  {{ (request()->is('battries/basic_information/carrier_companies*')) ? 'menu-open' : '' }}">--}}
                                        {{--@if(auth()->user()->permission['info_carrier'] == 'on')--}}
                                            {{--<a href="#" class="nav-link">--}}
                                                {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                                {{--<p>--}}
                                                    {{--شرکت حمل کننده--}}
                                                    {{--<i class="right fa fa-angle-left"></i>--}}
                                                {{--</p>--}}
                                            {{--</a>--}}
                                        {{--@endif--}}
                                        {{--<ul class="nav nav-treeview">--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_carrier_companies_create')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_carrier_companies_create')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>جدید</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_carrier_companies_list')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_carrier_companies_list')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>لیست</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--                                    materials--}}
                                    {{--<li class="nav-item has-treeview  {{ (request()->is('battries/basic_information/reports*')) ? 'menu-open' : '' }}">--}}
                                        {{--@if(auth()->user()->permission['info_reports'] == 'on')--}}
                                            {{--<a href="#" class="nav-link">--}}
                                                {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                                {{--<p>--}}
                                                    {{--مقادیر پرینت--}}
                                                    {{--<i class="right fa fa-angle-left"></i>--}}
                                                {{--</p>--}}
                                            {{--</a>--}}
                                        {{--@endif--}}
                                        {{--<ul class="nav nav-treeview">--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_reports_vars_create')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_reports_vars_create')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>جدید</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_reports_vars_list')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_reports_vars_list')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>لیست</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a href="{{route('battries_reports_defaults_create')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_reports_defaults_create')  ? 'active' : '' }}">--}}
                                                    {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                                    {{--<p>پیش فرض</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--                                    storages--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--                            base tables--}}
                            {{--<li class="nav-item has-treeview  {{ (request()->is('battries/show_reports*')) ? 'menu-open' : '' }}">--}}
                                {{--@if(auth()->user()->permission['reports'] == 'on')--}}
                                    {{--<a href="#" class="nav-link">--}}
                                        {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                        {{--<p>--}}
                                            {{--گزارش ها--}}
                                            {{--<i class="right fa fa-angle-left"></i>--}}
                                        {{--</p>--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                                {{--<ul class="nav nav-treeview">--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="{{route('battries_reports_group')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_reports_group')  ? 'active' : '' }}">--}}
                                            {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                            {{--<p>گزارش گروهی</p>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="{{route('battries_reports_mis')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_reports_mis')  ? 'active' : '' }}">--}}
                                            {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                            {{--<p>گزارش مدیریتی MIS</p>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--@if(auth()->user()->permission['show_cargo'] == 'on')--}}
                                            {{--<a href="{{route('battries_cargo_list')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_cargo_list')  ? 'active' : '' }}">--}}
                                                {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                                {{--<p>--}}
                                                    {{--لیست محموله ها--}}
                                                {{--</p>--}}
                                            {{--</a>--}}
                                        {{--@endif--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--@if(auth()->user()->permission['cargo_battries_show'] == 'on')--}}
                                            {{--<a href="{{route('battries_cargo_battries_list')}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'battries_cargo_battries_list')  ? 'active' : '' }}">--}}
                                                {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                                                {{--<p>--}}
                                                    {{--لیست باتری محموله ها--}}
                                                {{--</p>--}}
                                            {{--</a>--}}
                                        {{--@endif--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--                            daily performance--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--                    battries--}}
                    {{--<li class="nav-item">--}}
                        {{--<a href="{{route('users_change_password',auth()->user()->id)}}" class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'users_change_password')  ? 'active' : '' }}">--}}
                            {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                            {{--<p>تغییر رمز عبور</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</nav>--}}
            {{--<!-- /.sidebar-menu -->--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /.sidebar -->--}}
{{--</aside>--}}
