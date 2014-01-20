@extends('layouts.layer1')

@section('title', 'What\'s On - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="What\'s On - activities at Crockenhill Baptist Church">')

@section('breadcrumbs', '<li class="active">What\'s On</li>')

@section('header', '<h1>What\'s on at Crockenhill Baptist Church</h1>')

@section('main-content')

<p>There are many things on throughout the week at the church. We've divided them up into four sections. Please take a look through these pages and see if anything interests you. The pages should contain contact details if you would like more information.</p>

<div>
    <section class="panel panel-default">
	    <div class="panel-heading">
	        <h3 class="panel-title">Sunday Services & Bible Studies</h3>
        </div>
	    <div class="panel-body">
	        <p>Our main activities as a church are about meeting to worship God and study his word together.</p>
	        <dl>
                <dt><a href="{{ route('sunday') }}">Sunday Services</a></dt>
                <dd>We have two services on a Sunday, at 10:30AM and 6:30PM. Everyone is warmly welcome to these services.</dd>
                <dt><a href="{{ route('biblestudy') }}">Bible Studies</a></dt>
                <dd>We also have groups meeting midweek to discuss a Bible passage and pray.</dd>
            </dl>
        </div>
    </section>

    <section class="panel panel-default">
	    <div class="panel-heading">
	        <h3 class="panel-title">Children & Young People</h3>
        </div>
        <div class="panel-body">
	        <p>We have a series of four children's and young people's groups, which meet during school term time:</p>
	        <dl>
		        <dt><a href="{{ route('babytalk') }}">Baby Talk</a></dt>
		        <dd>A group for parents with pre-school children</dd>
		        <dt><a href="{{ route('adventurers') }}">Adventurers</a></dt>
		        <dd>A group for 6-9 year olds</dd>
		        <dt><a href="{{ route('1150') }}">11:50</a></dt>
		        <dd>A group for 10-12 year olds</dd>
		        <dt><a href="{{ route('link') }}">Link</a></dt>
		        <dd>A group for teenagers</dd>
	        </dl>
	        <p>We also have Creche and "Outback" for school age children, which run during the morning service every Sunday.</p>
	    </div>
    </section>

    <section class="panel panel-default">
	    <div class="panel-heading">
	        <h3 class="panel-title">Adult Clubs & Groups</h3>
        </div>
        <div class="panel-body">
	        <p>We don't just run groups for children! We have several different groups for adults.</p>
	        <dl>
		        <dt><a href="{{ route('menzone') }}">Menzone</a></dt>
		        <dd>A men's club, with speakers and activities to appeal to men of all ages.</dd>
		        <dt><a href="{{ route('coffeecup') }}">Coffee Cup</a></dt>
		        <dd>A meeting for coffee, cake and chat.</dd>
		        <dt><a href="{{ route('cameo') }}">CAMEO</a></dt>
		        <dd>Come And Meet Each Other</dd>
		        <dt><a href="{{ route('walkinggroup') }}">Walking Group</a></dt>
		        <dd>Leisurely morning walks in the local countryside.</dd>
	        </dl>
        <div>
    </section>

    <section class="panel panel-default">
        <div class="panel-heading">
	        <h3 class="panel-title">Occasional & Special Events</h3>
        </div>
        <div class="panel-body">
	        <p>In addition to our weekly groups, we also have some yearly or irregular events.</p>
	        <dl>
	            <dt><a href="{{ route('buzzclub') }}">Buzz Club</a></dt>
	            <dd>Our holiday Bible club for primary school children.</dd>
	            <dt><a href="{{ route('familyfunnight') }}">Family Fun Night</a></dt>
	            <dd>An evening for the family at the end of the school year.</dd>
	            <dt><a href="{{ route('carolsatthechequers') }}">Carols at the Chequers</a></dt>
	            <dd>A carol service in the village pub.</dd>
	            <dt><a href="{{ route('christianityexplored') }}">Christianity Explored course</a></dt>
	            <dd>A 7 week course for people wanting to find out more about Christianity.</dd>
            </dl>
        </div>
    </section>

</div>

@stop
