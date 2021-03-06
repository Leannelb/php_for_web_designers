<?php
$features = array(
    'winter' => 'Beautiful arrangements for any occasion.',
    'spring' => 'It must be spring! Delicate daffodils have arrived.',
    'summer' => "It's summer, and we're in the pink!",
    'autumn' => "Summer's over, but our flowers are still a riot of colors."
    );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Associative Array Loops</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Using foreach with an Associative Array</h1>
<h2>Values Only</h2>
<?php 
foreach ($features AS $feature)
//to loop through array
{
    echo "<p>$feature</p>";
}
?>
<h2>Keys and Values</h2>
<?php 
foreach ($features AS $key => $value)
//how KEYS and Values WORK!!
{
    echo "<p>The caption for the $key feature is: $value</p>";
}
?>
</body>
</html>