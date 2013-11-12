@extends('layouts.master')

@section('title', 'Crockenhill Baptist Church')

@section('description', '<meta name="description" content="We are an independent evangelical church located in the village of Crockenhill in Kent.">')

@section('content')

    <div class="home-head">
        <div class="container">
            <h1 class="text-center">Crockenhill Baptist Church</h1>
            <p class="text-center lead">A friendly, Bible believing church just outside Swanley.</p>
        </div>
    </div>

    <div class="home-body">
        <div class="container">
            <div id="container" class="js-masonry" data-masonry-options='{"itemSelector": ".home-block"}'>
                <div class="home-block-list">
                    <a href="{{ route('AboutUs') }}" class="home-block">
                        <section class="media">
                            <div class="pull-left glyphicon glyphicon-user media-object"></div>
                            <div class="media-body">
                                <h3 class="media-heading">Who?</h2>

                            	<p>Although the church exists worldwide, we are a local expression of the world-wide family of God’s people in Crockenhill – and have been for over 200 years!</p>
                        	</div>
                        </section>
                    </a>

                    <a href="{{ route('WhatsOn') }}" class="home-block">
                        <section class="media">
                            <div class="pull-left glyphicon glyphicon-calendar media-object"></div>
                            <div class="media-body">
                                <h3 class="media-heading">What?</h2>

                                <p>There are many things on at Crockenhill Baptist Church. The main meetings are our Sunday services, but we also have many other groups. We have groups for children and young people, bible study and prayer groups, a men's group, and many more.</p>
                            </div>
                        </section>
                    </a>

                    <a href="{{ route('Where') }}" class="home-block">               
                        <section class="media">
                            <div class="pull-left glyphicon glyphicon-home media-object"></div>
                            <div class="media-body">
                                <h3 class="media-heading">Where?</h2>

                                <p>We are located in the village of Crockenhill in Kent, which is a mile or so south of Swanley. If you are travelling from a distance, we are just off junction 3 of the M25. </p>
                            </div>
                        </section>
                    </a>

                    <a href="{{ route('sunday') }}" class="home-block">
                        <section class="media">
                            <div class="pull-left glyphicon glyphicon-time media-object"></div>
                            <div class="media-body">
                                <h3 class="media-heading">When?</h2>

                                <p>Our main church gatherings are on Sundays. Our morning worship service starts at 10:30 a.m. and includes those of all ages. The evening meeting starts at 6:30 p.m., where a different sermon is preached. Once a month we have an all-age service at 5:00 p.m. During the week we meet for Bible study and prayer in smaller groups.</p>
                            </div>
                        </section>
                    </a>

                    <a href="{{ route('AboutUs') }}" class="home-block">
                        <section class="media">
                            <div class="pull-left glyphicon glyphicon-question-sign media-object"></div>
                            <div class="media-body">
                                <h3 class="media-heading">Why?</h2>

                        	    <p>Our church exists to worship God, strengthen believers in their faith, and to proclaim the good news of Christianity to all, so that others might experience the wonderful salvation of God through faith in Jesus Christ. We are far from being a perfect church, but can testify to God’s goodness and power in helping us to live for him.</p>
                    	    </div>
                        </section>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop

@section('footer')
    <footer class="home-footer">
        <div class="row">
            <section class="col-sm-4">

                <h4 class="text-center">Latest Sermons</h4>

                <div class="row">
                    <div class="col-md-6">

                        <h5>Morning</h5>

                        <p>
                            {{ link_to_route('sermon', '"'.$latest_morning_sermon->title.'"', $parameters = array($latest_morning_sermon->filename))}}
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-calendar"></span> &nbsp
                            {{ date ('jS \of F', strtotime($latest_morning_sermon->date)) }}
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-user"></span> &nbsp
                            {{ $latest_morning_sermon->preacher }}
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-book"></span> &nbsp
                            {{ $latest_morning_sermon->reference }}
                        </p>

                    </div>
                    <div class="col-md-6">

                        <h5>Evening</h5>

                        <p>
                            {{ link_to_route('sermon', '"'.$latest_evening_sermon->title.'"', $parameters = array($latest_evening_sermon->filename))}}
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-calendar"></span> &nbsp
                            {{ date ('jS \of F', strtotime($latest_evening_sermon->date)) }}
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-user"></span> &nbsp
                            {{ $latest_evening_sermon->preacher }}
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-book"></span> &nbsp
                            {{ $latest_evening_sermon->reference }}
                        </p>

                    </div>
                </div>

            </section>
            <section class="col-sm-4">
                <h4 class="text-center">Contact our pastor</h4>
                <div class="media">
                    <img src=" {{ asset('images/mark-whitecircle.png') }} " alt="Mark Drury" class="mark-icon media-object pull-left"/>
                    <div class="media-body">
                        <br>
                        <p><span class="pull-left glyphicon glyphicon-earphone"></span> &nbsp&nbsp 01322 663995</p>
                        <p><span class="pull-left glyphicon glyphicon-envelope"></span> &nbsp&nbsp {{HTML::mailto('pastor@crockenhill.org', 'pastor@crockenhill.org')}}</span></p>
                    </div>
                </div>
            </section>
            <section class="col-sm-4">
                <h4 class="text-center">Address</h4>
                <div class="row">
                    <div class="col-xs-1">
                        <span class="pull-left glyphicon glyphicon-home"></span>
                    </div>
                    <div class="col-xs-11">
                        <address>
                            Crockenhill Baptist Church<br />
                            Eynsford Road<br />
                            Crockenhill<br />
                            Kent<br />
                            BR8 8JS<br />
                        </address>
                    </div>
                </div>
            </section>
        </div>
        <p class="text-center copyright"><small>&copy; {{ date('Y') }} Crockenhill Baptist Church</small></p>
    </footer>
    
    <script>
        $( window ).load( function()
        {
            var columns    = 3,
                setColumns = function() { columns = $( window ).width() > 640 ? 3 : $( window ).width() > 320 ? 2 : 1; };
         
            setColumns();
            $( window ).resize( setColumns );
         
            $( '.home-block-list' ).masonry(
            {
                itemSelector: '.home-block',
                columnWidth:  function( containerWidth ) { return containerWidth / columns; }
            });
        });
    </script>
@stop
