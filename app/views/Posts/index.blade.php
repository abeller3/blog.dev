@extends('layouts.master')
@section('content')

<h1>Personal Blog Posts</h1>
<hr>          <!-- blog entry -->
@foreach ($posts as $post)
	<div class="blog-post">
	  <h1><a href="{{ action('PostsController@show', array($post->id)) }}">{{{$post->title}}}</a></h1>
	    <hr>
	  <p><span class="glyphicon glyphicon-time"></span>Post on {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
	  <hr>
	  @if($post->img_path)
	<img src="{{{ $post->img_path }}}" class="img-responsive">
	@endif
	   <p>{{{ $post->body }}}<p>
	  	@if (Auth::check())
	  <a class="btn btn-primary" href="{{ action('PostsController@edit', array($post->id)) }}">Edit <span class="glyphicon glyphicon-chevron-right"></span></a>

	  @endif
	</div>
@endforeach

<?php echo $posts->links(); ?>

@stop
