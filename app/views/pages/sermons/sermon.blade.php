@extends('layouts.layer1')

@section('title')
{{ $current_sermon->title }} - Crockenhill Baptist Church
@stop

@section('description', '<meta name="description" content="A recorded sermon from Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ link_to_route('Sermons', 'Sermons') }} </li><li class="active"> {{ $current_sermon->title }}</li>

@stop

@section('header')
<h1>{{ $current_sermon->title }}</h1>
@stop

@section('main-content')

<audio id="sermon" src="{{asset('sermon_files/' . $current_sermon->filename . '.mp3')}}" controls>
    <p><a href="http://crockenhill.org/sermon_files/{{$current_sermon->filename}}.mp3">Click here to download or listen</a></p>
</audio>

<div class="sermon-details">
    <p>
        <span class="glyphicon glyphicon-calendar"></span> &nbsp
        {{ date ('jS \of F', strtotime($current_sermon->date)) }}
    </p>
    <p>
        <span class="glyphicon glyphicon-user"></span> &nbsp
        {{ $current_sermon->preacher }}
    </p>
    <p>
        <span class="glyphicon glyphicon-book"></span> &nbsp
        {{ $current_sermon->reference }}
    </p>
    <p>
        <span class="glyphicon glyphicon-download-alt"></span> &nbsp
        <a href="{{ URL::asset('sermon_files/' . $current_sermon->filename . '.mp3') }}" target="_blank">
            Download this sermon to your computer
        </a>
    </p>
</div>

@stop

@section('aside')

@include('layouts.sections.sermonsfragment')

@stop
