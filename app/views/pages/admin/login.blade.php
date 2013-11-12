@extends('layouts.layer1')

@section('title', 'Admin Area - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Admin area">')

@section('breadcrumbs', '<li class="active">Admin</li>')

@section('header', '<h1>Admin Area</h1>')

@section('main-content')

<p>If you want to add new content, update or change something about the website, this is the place to do it. If you don't want to do any of those things, please ignore this page.</p>

{{ Form::open(array('url' => 'admin/login', 'class' => 'form-horizontal')) }}
    <div class="form-group">
    <br>
        {{ Form::label('password', 'Password: ') }}
    </div>
    <div class="form-group">
        {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Login', array('class' => 'btn btn-primary btn-lg')) }}
    </div>
{{ Form::close() }}

@stop
