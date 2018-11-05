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
<p><?php echo $flowers; ?></p>
<!-- Trying to echo an array gives errors -->
</body>
</html>