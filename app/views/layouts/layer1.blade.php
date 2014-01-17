@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-9">
        <article class="card">
            @yield('header')
            <div class="links">
                <ol class="breadcrumb">
                    <li> {{ link_to_route('Home', 'Home') }} </li>
                    @yield('breadcrumbs')
                </ol>
            </div>
            <div class="content">
                @yield('main-content')
            </div>
        </article>
    </div>
    <div class="col-md-3">
        <aside class="card">
            @yield('aside')
        </aside>
    </div>

@stop
