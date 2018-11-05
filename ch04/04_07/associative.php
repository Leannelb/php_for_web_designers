<?php
$flowers = array('tulips', 'roses', 'daffodils', 'orchids', 'daisies');
$flowers[] = 'irises';
$features = array(
    'winter' => 'Beautiful arrangements for any occasion',
    'spring' => 'It must be spring! The daffodills are here',
    'summer' => "It's summer, and we're in the pink",
    'autumn' => "Summer's over but our flowers are still a riot of colors"
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
<p><?php echo $features['spring'];?></p>
<!-- Without te {} line now (above.) We get htis error: 
    Parse error: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) in /Applications/MAMP/htdocs/exercises/ch02/02_01/ch04/04_07/associative.php on line 21 -->
<!-- IF you want a double quote in your sting you must include:  {$features['spring']} brackets. Else error  -->
<!-- This prints the following to the screen: 'spring' => 'It must be spring! The daffodills are here', -->

<pre>
<?php print_r($flowers); ?>
</pre>
</body>
</html>