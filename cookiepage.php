<?php
if (isset($_POST["login"]) && isset($_POST["password"]))
{
$pseudoVal = $_POST["login"];
$motdepasseVal= $_POST["password"];
// Mise à jour
setcookie("pseudo", $pseudoVal, time() + 365*24*3600, null, null, false, true);
setcookie("motdepasse", $motdepasseVal, time() + 365*24*3600, null, null, false, true);
header("Location: cookiepage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles.css">
<title>PHP - Variables superglobales, sessions et cookies 3 & 4</title>
</head>
<body>
<p class=title>Cookies Login & Password</p>
<br>
<?php
echo "login : ".$_COOKIE["pseudo"]." password : ".$_COOKIE["motdepasse"];
echo "<br>";
?>
<br>
<a href="cookieform.php">Retour</a>
<br>
<a href="modifycookie.php">Modifier les cookies</a>
<script src="script.js"></script>
</body>
</html>



