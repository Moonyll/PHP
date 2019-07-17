<?php
setcookie("Login", $_POST["login"], time() + 365*24*3600, null, null, false, true);
setcookie("Mot_De_Passe", $_POST["password"], time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles.css">
<title>PHP - Variables superglobales, sessions et cookies</title>
</head>
<body>
<p class=title>Formulaire Login & Password</p>
<form method="post" action="cookieform.php">
<p class=title>Login :</p>
<input type="text" name="login"/><br>
<p class=title>Mot De Passe :</p>
<input type="text" name="password"/><br>
<br>
<input type="submit" value="Valider"/>
</form>
<br>
<?php
if (isset($_COOKIE["Login"]) && isset($_COOKIE["Mot_De_Passe"]))
{
    setcookie("Login", $_POST["login"], time() + 365*24*3600, null, null, false, true);
    setcookie("Mot_De_Passe", $_POST["password"], time() + 365*24*3600, null, null, false, true);
    echo $_COOKIE["Login"]." ".$_COOKIE["Mot_De_Passe"];
}
else
echo "Login et mot de passe non définis !";
?>

<a href="index.php">Retour</a>
</body>
</html>



