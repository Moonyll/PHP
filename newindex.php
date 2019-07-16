<?php
echo 'PHP Partie 6';
?>
<p>Ex.1</p>
<p>Bonjour <?php echo $_GET["firstname"]. " " . $_GET["lastname"]. " " . $_GET["age"]; ?> !</p>

<p>Ex.2</p>
<?php
if (isset($_GET["firstname"]) AND isset($_GET["lastname"]) AND isset($_GET["age"])) // On a le nom et le prénom
{
	echo "Bonjour " . $_GET["firstname"] . " " . $_GET["lastname"] . " " . $_GET["age"]. " !";
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo "Il faut renseigner un nom, un prénom ou l'âge !";
}
?>