<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>PHP - Variables superglobales, sessions et cookies</title>
</head>
<body>
<?php
if (isset($_POST["lastname"]) AND isset($_POST["firstname"]) AND isset($_POST["age"])) 
{
    echo "Hello " . $_POST["firstname"] . " " . $_POST["lastname"] . " agé de ". $_POST["age"] . " ans, bienvenue !";
    echo "<br>";
}
else
{
	echo "Veuillez renseigner un prénom, nom et un âge...";
}
//
$useragent = $_SERVER ['HTTP_USER_AGENT'];
$iP = $_SERVER['REMOTE_ADDR'];
$servername = gethostname();
//
echo "<br>";
echo " ";
echo " <b>Votre User Agent est  : </b> ";
echo "<br>";
echo $useragent;
echo "<br>";
echo " ";
echo " <b>Votre adresse IP est  : </b> ";
echo "<br>";
echo $iP;
echo "<br>";
echo " ";
echo " <b>Votre server se nomme : </b> ";
echo "<br>";
echo $servername;
echo "<br>";
echo " ";
//
?>
<br>
<a href="index8.php">Retour</a>
</body>
</html>



