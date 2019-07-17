<!DOCTYPE html>
<html>
<head>
<title>PHP - Les formulaires</title>
</head>
<body>

<h1>Partie 7 : PHP - Les formulaires</h1>
<p>Ex.5 - Formulaire - GET </p>
<form method="get" action="form_ex5.php">
 
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
Bienvenue <?php echo $_GET["choix"]. " " .$_GET["firstname"]. " ". $_GET["lastname"]. " !"; ?>
<br>
<!---->
</body>
</html>
