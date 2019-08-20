<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylecalc.css">
    <title>Calculatrice</title>
  </head>
  <body>
    <h1>Une calculatrice en PHP</h1>
    <form action="calculette.php" method="post">
      <input type="text" name="chiffre1" size="10" placeholder="0.00" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="0" required/>
      <input type="text" name="chiffre2" size="10" placeholder="0.00" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="0" required/>
      <div>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
      <input type="submit" name="reset" value="C"/>
      </div>
    </form>
    <div class ="display"><?php
// var_dump($_POST["chiffre1"],$_POST["chiffre1"]);
// Variables
$nb1=(float)($_POST["chiffre1"]);
$nb2=(float)($_POST["chiffre2"]);
$op = array($_POST["addition"],$_POST["soustraction"],$_POST["multiplication"],$_POST["division"],$_POST["reset"]);
// Opération choisie
foreach($op as $operator)
{
    if($operator)
    {
    $choosen_operator = $operator;
    }
}
// Opération
switch($choosen_operator)
  {
  // Addition
  case "+" :
  echo "<br>";
  echo "Addition : "."<br>".$nb1." + ".$nb2." = ".$result = $nb1+$nb2;
  break;
  // Soustraction
  case "-":
  echo "<br>";
  echo "Soustraction : "."<br>".$nb1." - ".$nb2." = ".$result = $nb1-$nb2;
  break;
  // Multiplication
  case "*":
  echo "<br>";
  echo "Multiplication : "."<br>".$nb1." * ".$nb2." = ".$result = $nb1*$nb2;
  break;
  // Division
  case "/":
  echo "<br>";
  $result = ($nb2!=0) ? $nb1." / ".$nb2." = ".$result = $nb1/$nb2 : "Division par 0 impossible...";
  echo "Division : "."<br>".$result;
  break;
  // Reset
  case "C":
  $_POST["chiffre1"]=0;
  $_POST["chiffre2"]=0;
  echo "<br>";
  echo "Calculette réinitialisée !";
  break;
  // Default
  default:
  echo "<br>";
  echo "Opération inconnue...";
  }
?></div>
  </body>
</html>