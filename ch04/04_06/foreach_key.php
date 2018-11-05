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
    if($flower == 'roses'){
        continue;
        // What this does is says: if 'roses' (lowercase as it only gets formatted below this loop). Is there, skip on and present the next item
    }
    echo '<li>' . ucFirst($flower) . '</li>';
    if($flower == 'orchids'){
        break;
        // This leaves the loop here and stops execuiting
    }

}
// Using foreach is much mkore powerful than implode
// v easy to traverse array
// each item in array accessed by being assigned as a temportry variable using the AS keyword
// ucFirst makes the first letter in the loop uppercase
// Skip a value: continue
// Stop a loop: break
?>
<!-- as is actually case insensitive as you can see -->
<!-- AS represents the array at a specific value in time. It is a temporary variable for the current array item -->
<!-- foreach loops are specifically for arrays -->
<!-- OUTPUT ON SCREEN:
Looping through a Simple Array
Tulips
Daffodils
Orchids
Daisies
Irises -->
</ul>

</body>
</html>