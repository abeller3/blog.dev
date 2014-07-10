@if (Auth::check())
	{{ Auth::user()->email }}
	 <!-- navbar -->
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{ action('HomeController@showLogin') }}">Log In</a></li>
	        <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
	      </ul>
	      	{{ Form::open(array('action' => 'PostsController@index', 'class' => 'navbar-form navbar-left', 'method' => 'GET')) }}
    		{{ Form::text('search', null, array('placeholder' => 'Search Query', 'class'=> 'form-control col-lq-4')) }}
    		{{ Form::submit() }}
   			{{ Form::close() }}
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="{{ action('HomeController@logout') }}">Log Out</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


@else
	{{ link_to_action('HomeController@showLogin', 'Log In') }}
@endif
