<?php
echo 'PHP Partie 6';
?>
<p>Ex.6</p>
<?php
if (isset($_GET["building"]) AND isset($_GET["room"])) 
{
	echo "Bâtiment : " . $_GET["building"] . " Appartement : " . $_GET["room"];
}
else
{
	echo "Il faut renseigner un bâtiment et un n° d'appartement !";
}
?>
