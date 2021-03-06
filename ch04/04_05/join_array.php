<?php
$flowers = array('tulips', 'roses', 'daffodils', 'orchids', 'daisies');
$flowers[] = 'irises';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Join an Array</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Joining an Array with implode()</h1>
<pre>
<p><?php print_r($flowers); ?></p>
</pre>
<ul><li><?php echo implode('</li><li>', $flowers);?></li></ul>
<!-- echo implode(', ' , $flowers) Prints: tulips, roses, daffodils, orchids, daisies, irises -->
<!-- ?php echo implode($flowers);Prints tulipsrosesdaffodilsorchidsdaisiesirises -->

<!-- Trying to echo an array gives errors -->
<!-- error is:

( ! ) Notice: Array to string conversion in /Applications/MAMP/htdocs/exercises/ch02/02_01/ch04/04_05/join_array.php on line 15
Call Stack
#	Time	Memory	Function	Location
1	0.0004	401720	{main}( )	.../join_array.php:0
Array -->
</body>
</html>