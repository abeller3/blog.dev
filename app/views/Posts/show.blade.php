@extends('layouts.master')

@section('content')
<h1>{{{ $post->title }}}</h1>
<h1>{{{ $post->created_at }}}</h1>
@stop


