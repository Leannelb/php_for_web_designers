<?php
$flowers = array('tulips', 'roses', 'daffodils', 'orchids', 'daisies');
$flowers[] = 'irises';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Using in_array()</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Finding an Array Element</h1>
<?php
$order = 'marigolds';
if (in_array($order, $flowers)) {
	echo "<p>Yes, $order are in stock.</p>";
} else {
	echo "<p>Sorry, no $order available.</p>";
}
?>
</body>
</html>