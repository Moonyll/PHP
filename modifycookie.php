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
<title>PHP - Variables superglobales, sessions et cookies - 5</title>
</head>
<body>
<p class=title>Modify Cookies Login & Password - 5</p>
<form method="post" action="modifycookie.php">
<p class=title>Login :</p>
<input type="text" name="new_login"/><br>
<p class=title>Mot De Passe :</p>
<input type="text" name="new_password"/><br>
<br>
<input type="submit" value="Valider"/>
</form>
<br>
<?php
if (isset($_POST["new_login"]) && isset($_POST["new_password"]))
{
    $pseudoVal = $_POST["new_login"];
    $motdepasseVal = $_POST["new_password"];
    setcookie("pseudo", $pseudoVal, time() + 365*24*3600,null, null, false, true);
    setcookie("motdepasse", $motdepasseVal, time() + 365*24*3600, null, null, false, true);
    echo "new login : ".$_COOKIE["pseudo"]. " new password : ".$_COOKIE["motdepasse"];
    echo "<br>";
}
else
{
echo "update ko";
echo "<br>";
}
?>
<br>
<a href="cookieform.php">Retour</a>
</body>
</html>


