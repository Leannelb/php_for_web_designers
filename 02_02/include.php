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
<?php include ('includes/list.php'); #this line ?>
<p>the list / lists is important. this was changed in order to see the error messages for includes/requires. List is correct</p>
<p>with an imclude file as above, if the file can't be found it will still continue down the page. Therefore the line seen below, will still render as the script carries on.</p>
<p>The final paragraph is in the original HTML, and should be displayed even if the external file can't be found.</p>
<p>NB V IMPORTANT: include file path as can be seen should be in relation tot his file locally</p>
<ul>
<li>Use a path relative to the current document</li>
<li>if you need to go up a level ../</li>
    <li>if both files are n the same folder use ./ This ensures php only looks in current folder</li>
    <li>Paths relative to the site root dont work - these always begin with /</li>
    </ul>
<p></p>
</body>
</html>