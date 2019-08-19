<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculatrice</title>
  </head>
  <body>
    <h1>Une calculatrice en PHP</h1>
    <form action="calculette.php" method="post">
      <input type="text" name="chiffre1" placeholder="0.00" pattern="[0-9]+(\.[0-9]{0,2})?%?" required/>
      <input type="text" name="chiffre2" placeholder="0.00" pattern="[0-9]+(\.[0-9]{0,2})?%?" required/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
      <input type="submit" name="reset" value="C"/>
    </form>
    <p>Résultat : </p>
    <?php
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
  echo $result = $nb1+$nb2;
  break;
  // Soustraction
  case "-":
  echo $result = $nb1-$nb2;
  break;
  // Multiplication
  case "*":
  echo $result = $nb1*$nb2;
  break;
  // Division
  case "/":
  $result = ($nb2!=0) ? $nb1/$nb2 : "Division par 0 impossible...";
  echo $result;
  break;
  // Reset
  case "C":
  break;
  // Default
  default:
  echo "Opération inconnue...";
  }
?>
  </body>
</html>