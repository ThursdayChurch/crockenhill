@extends('layouts.layer1')

@section('title', 'Members Area - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Members area">')

@section('breadcrumbs', '<li class="active">Members</li>')

@section('header', '<h1>Members Area</h1>')

@section('main-content')

<p>This is the private area of the website for members. If you're a member, please enter the password. If you're not a member - don't worry, you're not missing out on anything.</p>

{{ Form::open(array('url' => 'membersarea/login', 'class' => 'form-horizontal')) }}
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
