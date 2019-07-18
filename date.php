<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles.css">
<title>PHP - Les dates</title>
</head>
<body>
<p class=title>Les Dates</p>

<p>Ex.1</p>
<?php
$date = date("d/m/Y");
Print("Nous sommes le $date.");
?>
<p>Ex.2</p>
<?php
$date = date("d-m-Y");
Print("Nous sommes le $date.");
?>
<p>Ex.3</p>
<?php
setlocale(LC_TIME, 'fr_FR.utf8','fra');
$date = date("Y-m-d");
echo strftime("%A %d %B %G", strtotime($date));
// %A te donne le jour en lettres

// - %d te donne le jour en chiffres

// - %B te donne le mois en lettres

// - %G te donne l'année
?>
<p>Ex.4.1</p>
<?php
echo time();
?>
<p>Ex.4.2</p>
<?php
echo mktime(15, 0, 0, 8, 02, 2016); //int mktime ( int hour, int minute, int second, int month, int day, int year [, int is_dst])
?>
<p>Ex.5</p>
<?php
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31
$date = date("d/m/Y");
//
$now = time();
$date = mktime(15, 0, 0, 5, 16, 2016);
$seconds  = $now - $date;
$day = $seconds/86400;
echo $day;

//echo "il y $number jours en Février 2016.";
?>
<p>Ex.6</p>
<?php

$date = date("Y-m-d",strtotime(date("Y-m-d", strtotime($date)) . " +20 day"));
echo ($date);
?>
<p>Ex.6</p>
<?php
$date = date("Y-m-d");
$date = date("Y-m-d",strtotime(date("Y-m-d", strtotime($date)) . " -22 day"));
echo ($date);
?>
<br>
<br>
<a href="index.php">Retour</a>
</body>
</html>



