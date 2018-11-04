<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Missing File with include</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Carry On with include</h1>
<p>This paragraph is in the original HTML, and it should be followed by an unordered list which comes from an include file.</p>
<?php include 'includes/lists.php'; ?>
<p>with an imclude file as above, if the file can't be found it will still continue down the page. Therefore the line seen below, will still render as the script carries on.</p>
<p>The final paragraph is in the original HTML, and should be displayed even if the external file can't be found.</p>
</body>
</html>