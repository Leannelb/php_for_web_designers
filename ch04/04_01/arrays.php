<?php $flowers = array('tulips', 'roses', 'daffodills', 'orchids');?>
<?php $flowers2 = ['tulips', 'roses', 'daffodills', 'orchids'];?>
<!-- 2 ways to define arrays above -->
<?php $flowers[] = 'irisis';?> 
<?php $flowers2[] = 'irisis';?> 
<!-- To add values to an array do the above -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Basic Arrays</title>
<pre>
<?php print_r($flowers)?>
<!-- The above is how to output the value of a php array to screen -->
<!-- The pre HTML tags display the array nicer, what I see on screen:
Array
(
    [0] => tulips
    [1] => roses
    [2] => daffodills
    [3] => orchids
    [4] => irisis
) -->
<!--If you try add . form a folder otehr than the one with .git and get the following error: 
    Another git process seems to be running in this repository
    Try deleting index.lock file in your .git directory.
    This worked for me now. -->
</pre>
<p>The fourth element is: <?php echo $flowers[3];?></p>
<!-- Display: The fourth element is: orchids -->
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Storing Multiple Values in an Array</h1>
</body>
</html>