@extends('layouts.members')

@section('title', 'Song Scripture Search - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Song Search - Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ link_to_route('Members', 'Members') }} </li><li> {{ link_to_route('songs', 'Songs') }} </li><li class="active">Song Search by Scripture Reference</li>

@stop

@section('header')

<h1>Song search by Scripture reference</h1>

@stop

@section('main-content')

<p>Please enter a verse into the fields below. The book can be selected from the dropdown list, and the chapter and verse can be entered as At the moment you can only search for single verses. So something like Genesis 1 1 would work, but Genesis 1 1-2 would not.</p>

<br>

{{ Form::open(array('route' => 'scripturesearch', 'method' => 'get', 'class' => 'form-inline', 'role' => 'form')) }}
    <div class="form-group">
        {{ Form::label('book', 'Book') }}
        {{ Form::select('book', array(
        "Gen" => "Genesis",
        "Exod" => "Exodus",
        "Lev" => "Leviticus",
        "Num" => "Numbers",
        "Deut" => "Deuteronomy",
        "Josh" => "Joshua",
        "Judg" => "Judges",
        "Ruth" => "Ruth",
        "1Sam" => "1 Samuel",
        "2Sam" => "2 Samuel",
        "1Kgs" => "1 Kings",
        "2Kgs" => "2 Kings",
        "1Chr" => "1 Chronicles",
        "2Chr" => "2 Chronicles",
        "Ezra" => "Ezra",
        "Neh" => "Nehemiah",
        "Esth" => "Esther",
        "Job" => "Job",
        "Ps" => "Psalms",
        "Prov" => "Proverbs",
        "Eccl" => "Ecclesiastes",
        "Song" => "Song of Songs",
        "Isa" => "Isaiah",
        "Jer" => "Jeremiah",
        "Lam" => "Lamentations",
        "Ezek" => "Ezekiel",
        "Dan" => "Daniel",
        "Hos" => "Hosea",
        "Joel" => "Joel",
        "Amos" => "Amos",
        "Obad" => "Obadiah",
        "Jonah" => "Jonah",
        "Mic" => "Micah",
        "Nah" => "Nahum",
        "Hab" => "Habakkuk",
        "Zeph" => "Zephaniah",
        "Hag" => "Haggai",
        "Zech" => "Zechariah",
        "Mal" => "Malachi",

        "Matt" => "Matthew",
        "Mark" => "Mark",
        "Luke" => "Luke",
        "John" => "John",
        "Acts" => "Acts",
        "Rom" => "Romans",
        "1Cor" => "1 Corinthians",
        "2Cor" => "2 Corinthians",
        "Gal" => "Galatians",
        "Eph" => "Ephesians",
        "Phil" => "Philippians",
        "Col" => "Colossians",
        "1Thess" => "1 Thessalonians",
        "2Thess" => "2 Thessalonians",
        "1Tim" => "1 Timothy",
        "2Tim" => "2 Timothy",
        "Titus" => "Titus",
        "Phlm" => "Philemon",
        "Heb" => "Hebrews",
        "Jas" => "James",
        "1Pet" => "1 Peter",
        "2Pet" => "2 Peter",
        "1John" => "1 John",
        "2John" => "2 John",
        "3John" => "3 John",
        "Jude" => "Jude",
        "Rev" => "Revelation",
    ), NULL, array('class' => 'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('chapter', 'Chapter') }}
        {{ Form::text('chapter', NULL, array('class' => 'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('verse', 'Verse') }}
        {{ Form::text('verse', NULL, array('class' => 'form-control'))}}
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>

</form>

@if ($search != '')

    <h3>Results:</h3>

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
