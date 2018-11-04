<?php
$day = date('l');
$time = date('H:i');
$hour = date('H');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Using Date Parts</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Using Date Parts to Control Output</h1>
<p>Today is <?php echo $day; ?>. The time is now <?php echo $time; ?>.</p>
<?php if ($hour > 5 && $hour <12) { ?>
<p>Good morning.</p>
<?php } elseif ($hour >= 12 && $hour < 18) { ?>
<p>Good afternoon.</p>
<?php } elseif ($hour >=18 && $hour < 23) { ?>
<p>Good evening.</p>
<?php } else { ?>
<p>It's late at night.</p>
<?php } ?>
</body>
</html>