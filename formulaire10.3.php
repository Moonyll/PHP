<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP - Les formulaires</title>
</head>
<link rel="stylesheet" type="text/css" href="style10.3.css">
<body>
<h1>Partie 10 - TP.3</h1>
<?php
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
function displayTable($table)
{
echo $table["name"]." ".$table["firstname"];
echo "<br>";
//
$url = base64_encode(file_get_contents($table["portrait"]));
echo '<img src="data:image/jpeg;base64,'.$url.'">';
//
echo "<br>";
echo "<br>";
}
displayTable($portrait1);
displayTable($portrait2);
displayTable($portrait3);
displayTable($portrait4);
?>
</body>
</html>