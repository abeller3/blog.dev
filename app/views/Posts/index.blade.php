@extends('layouts.master')
@section('content')

<h1>Personal Blog Posts</h1>
<<<<<<< HEAD
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

=======

<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Title</th>
			<th>Creation Date</th>
			<th>Actions</th>
		</tr>
	
		@foreach ($posts as $post)
			<tr>
				<td class='posts'>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
				<td class='posts'>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
				<td class='posts'>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default btn-sm')) }}</td>
			</tr>
		@endforeach
	</table>
		{{ Form::open(array('action' => 'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}
	   	{{ Form::text('search', null, array('placeholder' => 'Search Query', 'class'=> 'form-control col-lq-4')) }}
	    	{{ Form::submit() }}
	   	{{ Form::close() }}
	</table>
</div>
>>>>>>> de14407f6a01f9baaa9aca9e581034efa1ee7d39
@stop
