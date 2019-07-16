<?php
echo 'PHP Partie 6';
?>
<p>Ex.5</p>
<?php
if (isset($_GET["week"])) 
{
	echo "Semaine : " . $_GET["week"];
}
else
{
	echo "Il faut renseigner une semaine";
}
?>
