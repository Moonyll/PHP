<?php
$pseudoVal ="";
$motdepasseVal="";
setcookie("pseudo", $pseudoVal, time() + 365*24*3600,null, null, false, true);
setcookie("motdepasse", $motdepasseVal, time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles.css">
<title>PHP - Variables superglobales, sessions et cookies - 3 & 4</title>
</head>
<body>
<p class=title>Cookies Login & Password - 3 & 4</p>
<form method="post" action="cookiepage.php">
<p class=title>Login :</p>
<input type="text" name="login"/><br>
<p class=title>Mot De Passe :</p>
<input type="text" name="password"/><br>
<br>
<input type="submit" value="Valider"/>
</form>
<br>
<?php
echo "login : ".$_COOKIE["pseudo"]." password : ".$_COOKIE["motdepasse"];
echo "<br>";
?>
<br>
<a href="index.php">Retour</a>
</body>
</html>



