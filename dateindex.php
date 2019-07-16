<?php
echo 'PHP Partie 6';
?>
<p>Ex.3</p>
<?php
if (isset($_GET["startDate"]) AND isset($_GET["endDate"])) 
{
	echo "Date du début : " . $_GET["startDate"] . " Date de fin : " . $_GET["endDate"];
}
else
{
	echo "Il faut renseigner une date de début ou de fin !";
}
?>
