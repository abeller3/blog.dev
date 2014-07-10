<!doctype html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>

	The random dice roll was: {{{$random}}}<br>
	Your guess was: {{{$guess}}}<br>

	@if ($random == $guess)
		<p style="color:blue;">Your guess was correct!!!</p>
	@else
		<p style="color:red;">Sorry, please try again!</p>
	@endif
    
</body>
</html>