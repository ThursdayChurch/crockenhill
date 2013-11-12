@extends('layouts.members')

@section('title', 'Songs - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Songs - Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ link_to_route('Members', 'Members') }} </li><li> {{ link_to_route('songs', 'Songs') }} </li><li class="active">List</li>

@stop

@section('header', '<h1>Song List</h1>')

@section('main-content')

<p>All the psalms, hymns, and songs we know - in alphabetical order by first line. Please click on the songs to find out more information about them.</p>

<p>Please bear in mind that the data only goes up to the beginning of June 2013. It will be updated before going live.</p>

<ul class="list-group">
    @foreach ($songs as $song)
        <li class="list-group-item">
            <h3>
                {{ link_to_route('song', $song->title, $parameters = array($song->song_id))}}
            </h3>
            <div class="sermon-details">
                <p>
                    @if ($song->praise_number != '')
                        <span class="glyphicon glyphicon-book"></span> &nbsp Praise! {{ $song->praise_number }}
                    @endif
                </p>
                <p>
                    @if ($song->author != '')
                        <span class="glyphicon glyphicon-user"></span> &nbsp {{ $song->author }}
                    @endif
                </p>
            </div>
        </li>
    @endforeach
</ul>

@stop
