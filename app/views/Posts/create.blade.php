@extends('layouts.master')

@section('content')

<form action="{{{ action('PostsController@store') }}}" method="POST">
    <br>
    @if ($errors->has('title'))
        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
    @endif
    <br>
    @if ($errors->has('body'))
        {{ $errors->first('body', '<span class="help-block">:message</span>') }}
    @endif
    <br>
    <label for="title">Post Title</label>
    <input id="title" name="title" type="text" value="{{{ Input::old('title')}}}">
    <br>
    <label for="body">Post Body</label>
    <textarea id="body" name="body">{{{ Input::old('body') }}}</textarea>
    <br>
    <input type='submit'>
</form>
@stop

