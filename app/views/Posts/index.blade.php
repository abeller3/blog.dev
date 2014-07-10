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
	   {{ $post->renderBody() }}
	  	@if (Auth::check())
	  <a class="btn btn-primary" href="{{ action('PostsController@edit', array($post->id)) }}">Edit <span class="glyphicon glyphicon-chevron-right"></span></a>
	  @endif
	</div>
@endforeach




<!-- <div class="table-responsive">
  <table class="table">
	<tr>
		<th>Title</th>
		<th>Creation Date</th>
		@if (Auth::check())
			<th>Actions</th>
		@endif
	</tr>

@foreach ($posts as $post)
<tr>
	<td class='posts'>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
	<td class='posts'>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
	@if (Auth::check())
		<td class='posts'>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default btn-sm')) }}</td>
	@endif
</tr>
@endforeach
</table>
</div> -->
@stop
