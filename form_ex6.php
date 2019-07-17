<!DOCTYPE html>
<html>
<head>
<title>PHP - Les formulaires</title>
</head>
<body>

<h1>Partie 7 : PHP - Les formulaires</h1>
<!---->
Bienvenue <?php echo $_GET["choix"]. " " .$_GET["firstname"]. " ". $_GET["lastname"]. " !"; ?>
<br>
<!---->
<p>Ex.6 - Formulaire</p>
<form method="post" action="form_ex6.php">
<p>
<!---->
Civilité    <select name="choix">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
            </select><br>
Nom : <input type="text" name="lastname"/><br>
Prénom : <input type="text" name="firstname"/><br>
<input type="submit">
</p>
<!---->
Bienvenue <?php echo $_POST["choix"]. " " .$_POST["firstname"]. " ". $_GET["lastname"]. " !"; ?>
<br>
</body>
</html>
