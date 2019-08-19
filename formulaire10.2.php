<!DOCTYPE html>
<html>
<head>
<title>PHP - Les formulaires</title>
</head>
<link rel="stylesheet" type="text/css" href="style10.css">
<body>
<h1>Partie 10 - TP.2</h1>
<?php if (!isset($_POST["newform"])) { ?>
<form method="post" action="formulaire10.2.php">
<fieldset>
        <legend>Information Personnelles</legend>
        <label>Civilité</label><br>
        <select name="civility">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
        </select><br>
<label>Nom</label><br><input type="text" name="lastname" placeholder="nom" /><br>
<label>Prénom</label><br><input type="text" name="firstname" placeholder="prénom"/><br>
<label>Age</label><br><input type="number" name="age" class="forms"/><br>
<label>Societé</label><br><input type="text" name="society" placeholder="société"/><br>
<br>
<input type="submit" name="newform">
</fieldset>
</form>
<?php } ?>
<!---->
<?php if (isset($_POST["newform"])) { ?>
        <fieldset>
        <legend>Information Personnelles</legend>
        <label>Civilité</label><br>
        <select name="civility">
        <option value="<?=$_POST["civility"]?>" selected><?=$_POST["civility"]?></option>
        </select><br>
<label>Nom</label><br><input type="text" value="<?=$_POST["lastname"]?>" readonly/><br>
<label>Prénom</label><br><input type="text" value="<?=$_POST["firstname"]?>" readonly/><br>
<label>Age</label><br><input type="number" value="<?=$_POST["age"]?>" class="forms" readonly/><br>
<label>Societé</label><br><input type="text" value="<?=$_POST["society"]?>" readonly/><br>
<a href="formulaire10.2.php">Modifier</a>
<br>
</fieldset>
<?php } ?>
</body>
</html>