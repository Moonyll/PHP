<?php
echo 'PHP Partie 6';
?>
<p>Ex.4</p>
<?php
if (isset($_GET["language"]) AND isset($_GET["server"])) 
{
	echo "Language : " . $_GET["language"] . " Server : " . $_GET["server"];
}
else
{
	echo "Il faut renseigner un langage et un server !";
}
?>
