@extends('layouts.layer1')

@section('title', 'Menzone - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Menzone - the mens\' club of Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ Link_to_route('WhatsOn', 'What\'s On') }} </li><li class="active">Menzone</li>

@stop

@section('header', '<h1>Menzone at Crockenhill Baptist Church</h1>')

@section('main-content')

<p>A men's club, with speakers and activities to appeal to men of all ages.</p>

<p>Meetings are held in the church hall at 7:45 for 8 p.m. All men are welcome at Menzone; you do not need to have any other connection with the church – just come and enjoy the meetings.</p>

@stop

@section('aside')

<h3>More Information</h3>

<p>When: Occasional Mondays, 7:45 for 8:00PM</p>

<p>Contact : Peter Morris 01322 613780</p>
@stop
