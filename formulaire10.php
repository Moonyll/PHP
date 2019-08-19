<!DOCTYPE html>
<html>
<head>
<title>PHP - Les formulaires</title>
</head>
<link rel="stylesheet" type="text/css" href="style10.css">
<body>
<h1>Partie 10 - TP.1</h1>
<?php if (!isset($_POST["newform"])) { ?>
<form method="post" action="formulaire10.php">
<fieldset>
        <legend>Nouvel Apprenant - Information Personnelles   </legend>
<label>Nom</label><br><input type="text" name="lastname" placeholder="nom" /><br>
<label>Prénom</label><br><input type="text" name="firstname" placeholder="prénom"/><br>
<label>Date de naissance</label><br><input type="date" name="birth" class="forms"/><br>
<label>Pays de naissance</label><br><input type="text" name="country" placeholder="pays"/><br>
<label>Nationalité</label><br><input type="text" name="origin" placeholder="nationalité"/><br>
<label>Adresse</label><br><input type="text" name="address" placeholder="adresse"/><br>
<label>Email</label><br><input type="email" name="email"placeholder="adresse mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/><br>
<label>Téléphone</label><br><input type="tel" name="phone" placeholder="XX XX XX XX XX" pattern="\d{1,10}" maxlength="10"/><br>
<label>Diplôme</label><br>
        <select name="diploma">
        <option value="sans">sans</option>
        <option value="bac">bac</option>
        <option value="bac+2">bac+2</option>
        <option value="bac+3 ou plus">bac+3 ou supérieur</option>
        </select><br>
<label>Numéro pôle emploi</label><br><input type="text" name="pnumber" /><br>
<label>Nombre de badge</label><br><input type="number" name="bnumber" class="forms" /><br>
<label>Liens codecademy</label><br><input type="url" name="codelink" /><br>
<label>Si vous étiez un super héros / une super héroïne, qui seriez-vous et pourquoi ?</label><br>
<textarea name="hero" placeholder="votre texte ici"></textarea><br>
<label>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><br>
<textarea name="hack"placeholder="votre texte ici"></textarea><br>
<label>Avez vous déjà eu une expérience avec la programmation et / ou l'informatique avant de remplir ce formulaire ?</label><br>
<input type="radio" name="exp" value="oui">Oui
<input type="radio" name="exp" value="non"> Non
<br>
<input type="submit" name="newform">
</fieldset>
</form>
<?php } ?>
<!---->
<?php
if (isset($_POST["newform"]))
{
echo "<fieldset><legend>Bienvenue ".$_POST["firstname"]." ".$_POST["lastname"]." !</legend>";
echo "<p><label>Nom : </label>".$_POST["lastname"]." "."<label>Prénom : </label>".$_POST["firstname"]."</p>";
echo "<p><label>Date de naissance : </label>".$_POST["birth"]."</p>";
echo "<p><label>Pays de naissance : </label>".$_POST["country"]." "."<label>Nationalité : </label>".$_POST["origin"]."</p>";
echo "<p><label>Adresse : </label>".$_POST["address"]."</p>";
echo "<p><label>Email : </label>".$_POST["email"]." "."<label>Téléphone : </label>".$_POST["phone"]."</p>";
echo "<p><label>Diplôme : </label>".$_POST["diploma"]."</p>";
echo "<p><label>Numéro pôle emploi : </label>".$_POST["pnumber"]."</p>";
echo "<p><label>Nombre de badge : </label>".$_POST["bnumber"]."</p>";
echo "<p><label>Liens codecademy : </label>"."<a href=".$_POST["codelink"].">".$_POST["codelink"]."</a></p>";
echo "<p><label>Si vous étiez un super héros / une super héroïne, qui seriez-vous et pourquoi ? : </label></p>";
echo "<p class="."areas".">".$_POST["hero"]."</p>";
echo "<p><label>Racontez-nous un de vos 'hacks' (pas forcément technique ou informatique) : </label></p>";
echo "<p class="."areas".">".$_POST["hack"]."</p>";
echo "<p><label>Avez vous déjà eu une expérience avec la programmation et / ou l'informatique avant de remplir ce formulaire ?</label></p>";
echo "<p class="."areas".">".$_POST["exp"]."</p>";
echo "</fieldset>";
}
?>
</body>
</html>