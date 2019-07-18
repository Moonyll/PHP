<!DOCTYPE html>
<html>
<head>
<title>PHP - Les formulaires</title>
</head>
<body>
<h1>Partie 10 - TP.1</h1>
<form method="post" action="page10.php">
<fieldset>
        <legend>Personal information:</legend>
<label>Nom</label><br><input type="text" name="lastname" /><br>
<label>Prénom</label><br><input type="text" name="firstname"/><br>
<label>Date de naissance<br><input type="date" name="birth"/><br>
<label>Pays de naissance</label><br><input type="text" name="country"/><br>
<label>Nationalité</label><br><input type="text" name="origin"/><br>
<label>Adresse</label><br><input type="text" name="address"/><br>
<label>Email</label><br><input type="email" name="email"/><br>
<label>Téléphone</label><br><input type="tel" name="phone"/><br>
<label>Diplôme</label><br>
        <select name="diploma">
        <option value="sans">sans</option>
        <option value="bac">bac</option>
        <option value="bac+2">bac+2</option>
        <option value="bac+3 ou plus">bac+3 ou supérieur</option>
        </select><br>
<label>Numéro pôle emploi</label><br><input type="text" name="pnumber" /><br>
<label>Nombre de badge</label><br><input type="number" name="bnumber" /><br>
<label>Liens codecademy</label><br><input type="url" name="codelink" /><br>
<label>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><br>
<textarea name="hero"></textarea><br>
<label>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><br>
<textarea name="hack"></textarea><br>
<input type="submit">
</fieldset>
</form>
</body>
</html>
