@extends('layouts.members')

@section('title', 'Edit Pages')

@section('description', '<meta name="description" content="A list of website pages">')

@section('membercontent')

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Website Area</th>
                    <th>Last Edited</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td><a href="{{ URL::route('members.pages.edit', $page->slug) }}">{{ $page->heading }}</a>
                        </td>
                        <td>{{ $page->area }}</td>
                        <td>{{ $page->updated_at }}</td>
                        <td>
                            <a href="{{ URL::route('members.pages.changeimage', $page->slug) }}" class="btn btn-success">Change Image</a>
                            {{ Form::open(array('route' => array('members.pages.destroy', $page->slug), 'method' => 'delete', 'data-confirm' => 'Are you sure you want to delete this page?', 'class' => 'form-inline')) }}
                            <button type="submit" href="{{ URL::route('members.pages.destroy', $page->slug) }}" class="btn btn-danger">
                                Delete
                            </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
@stop
