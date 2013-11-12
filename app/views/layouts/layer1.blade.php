@extends('layouts.master')

@section('content')

<div class="container">

    <ol class="breadcrumb">
        <li> {{ link_to_route('Home', 'Home') }} </li>
        @yield('breadcrumbs')
    </ol>

    <div class="page-header">
        @yield('header')
    </div>

    <div class="row">
        <div class="col-md-8 main-content">
            @yield('main-content')
        </div>
        <aside class="col-md-4">
            @yield('aside')
        </aside>

</div>

@stop
