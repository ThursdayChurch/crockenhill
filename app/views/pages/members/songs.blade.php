@extends('layouts.members')

@section('title', 'Songs - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Songs - Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ link_to_route('Members', 'Members') }} </li><li class="active">Songs</li>

@stop

@section('header', '<h1>Songs</h1>')

@section('main-content')

<p>If you're leading a service - you can use this section of the website to help you choose songs. You can view a list of all the songs we know, or search by keyword or Scripture reference. It will tell you how many times we've had the song in the last 5 years, and when we last sang it. This should help you work out how well people know it.</p>

<br>

{{ link_to_route('keyword', 'Find a song containing a word or phrase', $parameters = array(), $attributes = array('class' => 'btn btn-primary btn-lg btn-block'))}}

<br>

{{ link_to_route('scripturesearch', 'Find a song by Scripture reference', $parameters = array(), $attributes = array('class' => 'btn btn-primary btn-lg btn-block'))}}

<br>

{{ link_to_route('songslist', 'View a list of all the songs', $parameters = array(), $attributes = array('class' => 'btn btn-primary btn-lg btn-block'))}}

@stop
