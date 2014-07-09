@extends('layouts.master')
@section('content')
    @if (isset($post))
        <h1>Edit Post</h1>
        {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
    @else
        <h1>Create a New Post</h1>
        {{ Form::open(array('action'=>'PostsController@store', 'files' => true)) }}
    @endif
        
        <div>
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title') }}
            {{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
        </div>
        <div>
            <div>
            {{ Form::label('image', 'Image') }}
            {{ Form::file('image') }}
            {{ $errors->first('image', '<span class="help-block">:message</span><br>') }} 
        </div>
        <div>
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body') }}
            {{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
        </div>
        {{ Form::submit('Save Post') }}
    {{ Form::close() }}

@stop

