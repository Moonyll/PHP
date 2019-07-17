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
<p>test</p>
<a href="start_session.php">Ouvrir Session</a>
</body>
</html>



