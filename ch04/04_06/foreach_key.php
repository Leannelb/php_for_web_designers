<?php
$flowers = array('tulips', 'roses', 'daffodils', 'orchids', 'daisies');
$flowers[] = 'irises';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Using a foreach Loop</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Looping through a Simple Array</h1>
<ul>
<?php
foreach ($flowers AS $flower){
    echo '<li>'.$flower.'</li>';
}
?>
<!-- as is actually case insensitive as you can see -->
<!-- AS represents the array at a specific value in time. It is a temporary variable for the current array item -->
<!-- foreach loops are specifically for arrays -->

</ul>

</body>
</html>