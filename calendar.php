<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="cld.css">
<title>PHP - Les dates</title>
</head>
<body>
<h1>PHP - Calendrier</h1>
<?php
function calendar ($m, $y)
{
    $sem = array(6,0,1,2,3,4,5); // Jours de la semaine du lundi = 0 au dimanche = 6
    //
    $mois = array('','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
    //
    $week = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
    //
    $t = mktime(12, 0, 0, $m, 1, $y); // Code timestamp du premier jour du mois et de l'année choisie
    //
    echo '<table><tbody>';
    // Mois et Année
    echo '<tr><td id="table_title" colspan="7">'.$mois[$m].' '.$y.'</td></tr>';
    // Jours de la semaine
    echo '<tr>';
    for ($i = 0 ; $i < 7 ; $i++)
    {
        echo '<td id="td_title">'.$week[$i].'</td>';
    }
    echo '</tr>';
    //
    // Calendrier
    //
    for ($l = 0 ; $l < 6 ; $l++) // calendrier sur 6 lignes
    {
        echo '<tr>';
        for ($i = 0 ; $i < 7 ; $i++) // 7 jours de la semaine
        {
            $w = $sem[(int)date('w',$t)]; // Jour de la semaine à traiter
            $m2 = (int)date('n',$t); // Tant que le mois reste celui du départ
            if (($w == $i) && ($m2 == $m)) // Si le jour de semaine et le mois correspondent
            {
                echo '<td class="table_value">'.date('j',$t).'</td>'; // Affichage du jour du mois
                $t += 86400; // Jour suivant...
            }
            else
            {
                echo '<td class="empty">&nbsp;</td>'; // Case vide
            }
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
}
calendar($_POST["month"],$_POST["year"]);
?>
</body>
</html>
