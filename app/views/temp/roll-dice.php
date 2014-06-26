<!doctype html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>
	The random dice roll was: <?= $random; ?><br>
	Your guess was: <?= $guess; ?><br>

	<? if ($guess == $random) : ?>
		<p>Your guess was correct</p>
	<? else : ?>
		<p>Sorry, please try again!</p>
	<? endif; ?>


    
</body>
</html>