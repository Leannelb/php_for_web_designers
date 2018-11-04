<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Server-Side Includes</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Using Server-Side Includes</h1>
<p>This text is in the original HTML.</p>
<?php include 'includes/external.php'; ?>
<p>Now back to the original HTML. <a href="page02.php">Go to page 2</a>.</p>
</body>
</html>