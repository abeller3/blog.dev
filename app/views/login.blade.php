@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => 'HomeController@doLogin')) }}

<h2><span></span>Please Sign In</h2>
<input name="email" type='text' placeholder="email" value= "{{{ Input::old('email') }}}"</input>
<input name="password" type='password' placeholder="password" required></input>
<button type='submit'>Login</button>

{{ Form::close() }}

@stop