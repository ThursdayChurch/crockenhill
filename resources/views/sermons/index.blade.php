@extends('page')

@section('dynamic_content')

@if ($user != null && $user->email == "admin@crockenhill.org")
    <a href="/sermons/create" class="btn btn-primary btn-lg btn-block" role="button">Upload a new sermon</a>
@endif

<div class="row">
  <div class="col-md-6">
    <h2>Morning</h2>
    @foreach ($latest_morning_sermons as $sermon)
      <h3><a href="sermons/{{$sermon->slug}}">{{$sermon->title}}</a></h3> 
      <p>
        <span class="glyphicon glyphicon-calendar"></span>
        &nbsp; {{date ('jS \of F Y', strtotime($sermon->date))}}
      </p>
      <p>
        <span class="glyphicon glyphicon-user"></span> &nbsp
        {{ $sermon->preacher }}
      </p>
      <p>
        <span class="glyphicon glyphicon-book"></span> &nbsp
        {{ $sermon->reference }}
      </p>
      @if ($user != null && $user->email == "admin@crockenhill.org")
        {!! Form::open(array('action' => array('SermonController@destroy', $sermon->slug), 'method' => 'delete')) !!}
          <div class="btn-group">
            <a href="/sermons/{{$sermon->slug}}/edit" class="btn btn-primary">
              Edit this sermon
            </a>
            
            <button type="submit" class="btn btn-danger">
              Delete this sermon
            </button>
          </div>
        {!! Form::close() !!}
      @endif
    @endforeach
  </div>
  <div class="col-md-6">
    <h2>Evening</h2>
        @foreach ($latest_evening_sermons as $sermon)
      <h3><a href="sermons/{{$sermon->slug}}">{{$sermon->title}}</a></h3> 
      <p>
        <span class="glyphicon glyphicon-calendar"></span>
        &nbsp; {{date ('jS \of F Y', strtotime($sermon->date))}}
      </p>
      <p>
        <span class="glyphicon glyphicon-user"></span> &nbsp
        {{ $sermon->preacher }}
      </p>
      <p>
        <span class="glyphicon glyphicon-book"></span> &nbsp
        {{ $sermon->reference }}
      </p>
      @if ($user != null && $user->email == "admin@crockenhill.org")
        {!! Form::open(array('action' => array('SermonController@destroy', $sermon->slug), 'method' => 'delete')) !!}
          <div class="btn-group">
            <a href="/sermons/{{$sermon->slug}}/edit" class="btn btn-primary">
              Edit this sermon
            </a>
            
            <button type="submit" class="btn btn-danger">
              Delete this sermon
            </button>
          </div>
        {!! Form::close() !!}
      @endif
    @endforeach
  </div>
</div>
<br>
<a href="/sermons/all" class="btn btn-primary btn-lg btn-block" role="button">Find older sermons</a>

@stop