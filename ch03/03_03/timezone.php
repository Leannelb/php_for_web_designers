<?php
$day = date('l');
$time = date('H:i');
date_default_timezone_set('Europe/Malta');
$day_HI = date('l');
$time_HI = date('H:i')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Time Zone</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Changing the Time Zone</h1>
<p>The local time is now <?php echo $time; ?> on <?php echo $day; ?>.</p>
<p>The local time in Hawaii is now <?php echo $time_HI; ?> on <?php echo $day_HI; ?>.</p>

</body>
</html>