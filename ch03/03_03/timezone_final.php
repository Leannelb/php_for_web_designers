<?php
$day = date('l');
$time = date('H:i');
date_default_timezone_set('Pacific/Honolulu');
$day_HI = date('l');
$time_HI = date('H:i');
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
<p>The time in Hawaii is now <?php echo $time_HI; ?> on <?php echo $day_HI; ?>.</p>

</body>
</html>