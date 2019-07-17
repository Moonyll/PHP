<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// Variables de session dans $_SESSION
$_SESSION['firstname'] = 'Cat';
$_SESSION['lastname'] = 'Felix';
$_SESSION['age'] = 25;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles.css">
<title>PHP - Variables superglobales, sessions et cookies</title>
</head>
<body>
<p class=title>Formulaire</p>
<form method="post" action="page8.php">
<p class=title>Nom :</p>
<input type="text" name="lastname"/><br>
<p class=title>Prénom :</p>
<input type="text" name="firstname"/><br>
<br>
<p class=title>Age :</p>
<input type="text" name="age"/><br>
<br>
<input type="submit" value="Valider"/>
</form>
<br>
<a href="page8.php">Page</a>
</body>
</html>



