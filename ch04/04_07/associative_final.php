<?php
$flowers = array('tulips', 'roses', 'daffodils', 'orchids', 'daisies');
$flowers[] = 'irises';
$features = array(
    'winter' => 'Beautiful arrangements for any occasion.',
	'spring' => 'It must be spring! Delicate daffodils are here.',
	'summer' => "It's summer, and we're in the pink.",
	'autumn' => "Summer's over, but our flowers are still a riot of colors."
	);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Associative Array</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Labeling Array Elements</h1>
<p><?php echo "The tagline for spring is : {$features['spring']}"; ?></p>
</body>
</html>