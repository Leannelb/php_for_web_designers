<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Missing File with require</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Give Up with require</h1>
<p>This paragraph is in the original HTML, and it should be followed by an unordered list which comes from an include file.</p>
<?php require 'includes/lists.php'; ?>
<p>The final paragraph will be displayed only if the external file can be found.</p>
</body>
</html>