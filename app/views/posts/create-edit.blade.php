@extends('layouts.master')
@section('content')
    @if (isset($post))
        <h1>Edit Post</h1>
        {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
    @else
        <h1>Create a New Post</h1>
        {{ Form::open(array('action'=>'PostsController@store', 'files' => true)) }}
    @endif
        
<div class="container col-md-4">

        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title') }}
            {{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
        </div>
        <div class="form-group">
            {{ Form::label('image', 'Image', array('class' => 'awesome')) }}
            {{ Form::file('image') }}
            {{ $errors->first('image', '<span class="help-block">:message</span><br>') }} 
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body') }}
            {{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
        </div>
        <div>
            {{ Form::submit('Save Post') }}
            {{ Form::close() }}
        </div>

    </div> <!-- end main container -->
@stop

