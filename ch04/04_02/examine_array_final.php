<?php
$flowers = array('tulips', 'roses', 'daffodils', 'orchids', 'daisies');
$flowers[] = 'irises';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Examine an Array</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Examining an Array's Elements</h1>
<pre>
<?php print_r($flowers); ?>
</pre>
<p>The fourth element in the flowers array is <?php echo $flowers[3]; ?></p>
</body>
</html>