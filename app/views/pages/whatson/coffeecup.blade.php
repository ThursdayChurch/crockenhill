@extends('layouts.layer1')

@section('title', 'Coffee Cup - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Coffee Cup - a weekly meeing for coffee, cake and chat at Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ Link_to_route('WhatsOn', 'What\'s On') }} </li><li class="active">Coffee Cup</li>

@stop

@section('header', '<h1>Coffee Cup at Crockenhill Baptist Church</h1>')

@section('main-content')

<p>Coffee Cup is for anyone who can get along to the church on Thursday morning. Drinks, toast and cakes are all served throughout the morning by our team of committed workers. It's a great opportunity to sit and chat and get to know others in the village.</p>

@stop

@section('aside')

<h3>More Information</h3>

<p>When: Thursdays in school term time, 10:30 to 12:00</p>

@stop
