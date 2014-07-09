@extends('layouts.master')
@section('content')

<h1>Personal Blog Posts</h1>

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
@stop
