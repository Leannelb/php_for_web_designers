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
<h1>Pasted here is what can be seen on the HTML/PHP output in browser and the errors shown when an include file cannot be found</h1>
<p>Warning: include(includes/lists.php): failed to open stream: No such file or directory in /Applications/MAMP/htdocs/exercises/ch02/02_01/02_02/include.php on line 12
</br>
Warning: include(): Failed opening 'includes/lists.php' for inclusion (include_path='.:/Applications/MAMP/bin/php/php7.2.8/lib/php') in /Applications/MAMP/htdocs/exercises/ch02/02_01/02_02/include.php on line 12
with an imclude file as above, if the file can't be found it will still continue down the page. Therefore the line seen below, will still render as the script carries on.
</br>
The final paragraph is in the original HTML, and should be displayed even if the external file can't be found.</p>
</body>
</html>