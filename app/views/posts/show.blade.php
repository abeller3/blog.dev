@extends('layouts.master')

@section('content')
	<h1>{{{ $post->title }}}</h1>
	<h5>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}<br>
	<h3>Updated At: </h3>
	<p>{{ link_to_action('PostsController@show', $post->updated_at->format('l, F jS Y @ h:i:s A'), array($post->id)) }}</p>
	<h3>Post Content</h3>
	@if (Auth::Check())
		@if($post->img_path)
			<p><img src="{{{ $post->img_path }}}" class="img-responsive"></p>
		@endif
	@else
		{{ Session::flash('errorMessage', 'You must be logged in to view post content.') }}
	@endif
	@if (Auth::check())
	<a href="{{action('PostsController@edit', $post->id)}}" class="btn btn-info btn-sm" role="button">Edit</a>
	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
	<button type='submit' class='btn btn-info'>Delete</button>
	{{ Form::close() }}
	@endif

@stop


