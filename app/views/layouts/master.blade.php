<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href='/css/blog.css'>	
</head>
<body>
	@include('Posts.navbar')
	@if (Session::has('successMessage'))
	    <div class="alert alert-info">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
	@yield('content')
  @yield('portfolio')
  @yield('resume')
</body>
</html>