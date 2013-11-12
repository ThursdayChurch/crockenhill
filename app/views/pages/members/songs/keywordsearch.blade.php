@extends('layouts.members')

@section('title', 'Song Search - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Song Search - Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ link_to_route('Members', 'Members') }} </li><li> {{ link_to_route('songs', 'Songs') }} </li><li class="active">Song Search by Keyword</li>

@stop

@section('header')

<h1>Songs containing a word or phrase</h1>

@stop

@section('main-content')

<p>You can search the lyrics of a song for a particular word or phrase. For example, try typing "Jesus' blood" in the box to see the 3 songs we know that contain that phrase. Note that the apostrophe is important, but it is not case sensitive.</p>

<br>

{{ Form::open(array('route' => 'keyword', 'method' => 'get', 'class' => 'form-inline')) }}
    {{ Form::text('search', null, array('class' => 'form-control form-narrow')) }}
    {{ Form::submit('Search', array('class' => 'btn btn-primary'))}}
{{ Form::close() }}

@if ($keyword != '')

    <h3>Results for {{ $keyword }}:</h3>

    <ul class="list-group">
        @foreach ($songs as $song)
            <li class="list-group-item">
                <h3>
                    {{ link_to_route('song', $song->title, $parameters = array($song->song_id))}}
                </h3>
                <div class="sermon-details">
                    <p>
                        @if ($song->praise_number != '')
                            <span class="glyphicon glyphicon-book"></span> &nbsp Praise Number {{ $song->praise_number }}
                        @endif
                    </p>
                    <p>
                        @if ($song->author != '')
                            <span class="glyphicon glyphicon-user"></span> &nbsp {{ $song->author }}
                        @endif
                    </p>
                    <p>
                        @if ($song->copyright != '')
                            <span class="glyphicon glyphicon-copyright-mark"></span> &nbsp {{ $song->copyright }}
                        @endif
                    </p>
                    <p>
                        @if ($song->play_date != '')
                            <span class="glyphicon glyphicon-copyright-mark"></span> &nbsp {{ $song->play_date }}
                        @endif
                    </p>
                </div>
            </li>
        @endforeach
    </ul>

@endif



@stop
