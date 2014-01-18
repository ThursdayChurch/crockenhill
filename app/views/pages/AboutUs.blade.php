@extends('layouts.layer1')

@section('title', 'Crockenhill Baptist Church - About Us')

@section('description', '<meta name="description" content="About Crockenhill Baptist Church">')

@section('breadcrumbs', '<li class="active">About Us</li>')

@section('header', 'About Crockenhill Baptist Church')

@section('main-content')

<p>We are a Bible-believing village church on the outskirts of greater London and just within the M25, and are committed to living under the authority of the Bible. There are about 50-70 of us on a Sunday morning, including children and young people.</p>
<p>We regularly come together in order to worship God, learn from the Bible, and enjoy fellowship with one another.  However, church life amounts to much more than what takes place on a Sunday or at other specific times during the week when church activities are held.  We want to encourage one another to live the Christian life 24/7 and to show to those whom we rub shoulders with everyday something of the love of God.</p>
<p>As a church we encourage people to become active followers of Jesus Christ, and provide opportunities for them to learn, serve and grow in their faith.  We welcome people of all ages and backgrounds to find out more about the good news of Jesus Christ, who by his death and resurrection has rescued people from their sin to life eternal.</p>

@stop

@section('aside')

<aside class="col-xs-6 col-md-3">
    <div class="card">
        <a href="{{ route('whatwebelieve') }}">
            <div class="header-container">
                <h5>What We Believe</h5>
            </div>
            <small>A short summary of our beliefs in everyday English. No technical terms here!</small>
        </a>
    </div>
</aside>
<aside class="col-xs-6 col-md-3">
    <div class="card">
        <a href="{{ route('statementoffaith') }}">
            <div class="header-container">
                <h5 class="">Statement of Faith</h5>
            </div>
        <small class="">A more complete summary of our beliefs, giving Bible references and using slightly more technical language.</small>
        </a>
    </div>
</aside>
<aside class="col-xs-6 col-md-3">
    <div class="card">
        <a href="{{ route('history') }}">
            <div class="header-container">
                <h5 class="">History</h5>
            </div>
            <small class="">Information about our church started.</small>
        </a>
    </div>
</aside>
<aside class="col-xs-6 col-md-3">
    <div class="card">
        <a href="{{ route('pastor') }}">
            <div class="header-container">
                <h5 class="">Pastor</h5>
            </div>
            <small class="">Our pastor, Mark Drury.</small>
        </a>
    </div>
</aside>

@stop
