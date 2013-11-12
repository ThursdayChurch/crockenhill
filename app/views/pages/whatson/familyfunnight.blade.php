@extends('layouts.layer1')

@section('title', 'Family Fun Night - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Family Fun Night - a yearly event organised by the youth groups at Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ Link_to_route('WhatsOn', 'What\'s On') }} </li><li class="active">Family Fun Night</li>

@stop

@section('header', '<h1>Family Fun Night at Crockenhill Baptist Church</h1>')

@section('main-content')

<p>An evening of fun for all the family.</p>

@stop

@section('aside')

<h3>More Information</h3>

<p>When: A Friday evening in July</p>

@stop
