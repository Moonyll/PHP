<?php
echo 'PHP Partie 1';
?>
<p>Ex.1</p>
<?php
$age_du_chat = 7;
echo "l'age du chat est de $age_du_chat ans.";
?>
<p>Ex.2</p>
<?php
$lastname = 'John';
$firstname = 'Doe';
$age = 150;
echo "$lastname $firstname $age years old.";
?>
<p>Ex.3</p>
<?php
$km = 1;
echo "$km \n";
echo "<br/>";
$km = 3;
echo "$km \n";
echo "<br/>";
$km = 125;
echo "$km \n";
?>
<p>Ex.4</p>
<?php
$string = "chat";
$int = 7;
$float = 1.77;
$bool = true;
//
echo $string;
echo "<br/>";
echo $int;
echo "<br/>";
echo $float;
echo "<br/>";
echo $bool ? 'true' : 'false';
//
?>
<p>Ex.5</p>
<?php
$number = NULL;
echo "initial number value is : $number";
$number = 10;
echo "<br/>";
echo "updated number value is : $number";
?>
<p>Ex.6</p>
<?php
$name = 'World';
echo "Bonjour $name, comment vas tu ?";
?>
<p>Ex.7</p>
<?php
$lastname = 'Felix';
$firstname = 'The Cat';
$age = 77;
echo "Bonjour $lastname $firstname, tu as $age ans";
?>
<p>Ex.8</p>
<?php
//
$nb1=NULL;
$nb2=NULL;
$nb3=NULL;
//
$nb1 = 3+4;
$nb2 = 5*20;
$nb3 = 45/5;
echo "$nb1  $nb2  $nb3";
echo "<br/>";
?>
<?php
echo "<br/>";
echo 'PHP Partie 2';
?>
<p>Ex.1</p>
<?php
$age = 7;

if ($age < 18)
{
echo "Vous êtes mineur.";
}
else
{
echo "Vous êtes majeur.";
}
?>
<p>Ex.2</p>
<?php
$isEasy = true;
// echo $isEasy ? "C'est facile !!" : "C'est difficile !!!";
if ($isEasy === true)
{
echo "C'est facile !!";
}
else
{
echo "C'est difficile !!!";
}
?>
<p>Ex.3</p>
<?php
$min=1;
$max=100;
$min_g=0;
$max_g=1;
$age=rand($min,$max);
$gender_type=array("Homme","Femme");
$gender = $gender_type[rand($min_g,$max_g)];
//
if ($age<18 & $gender==$gender_type[0])
{
echo $age;
echo "<br/>";
echo"Vous êtes un homme et vous êtes mineur.";
}
elseif ($age>=18 & $gender==$gender_type[0])
{
echo $age;
echo "<br/>";
echo "Vous êtes un homme et vous êtes majeur.";
}
elseif ($age<18 & $gender==$gender_type[1])
{
echo $age;
echo "<br/>";
echo"Vous êtes une femme et vous êtes mineur.";
}
elseif ($age>=18 & $gender==$gender_type[1])
{
echo $age;
echo "<br/>";
echo"Vous êtes une femme et vous êtes majeur.";
}
//
?>
<p>Ex.4</p>
<?php
$min=1;
$max=9;
$magnitude=rand($min,$max);
//
switch ($magnitude)
{ 
    case 1:
        echo "Magnitude $magnitude";
        echo "<br/>";
        echo "Micro-séisme impossible à ressentir.";
    break;
    
    case 2:
        echo "Magnitude $magnitude";
        echo "<br/>";    
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;
    
    case 3:
        echo "Magnitude $magnitude";
        echo "<br/>";
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    
    case 4:
        echo "Magnitude $magnitude";
        echo "<br/>";
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
    
    case 5:
        echo "Magnitude $magnitude";
        echo "<br/>";
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;
    
    case 6:
        echo "Magnitude $magnitude";
        echo "<br/>";
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    
    case 7:
        echo "Magnitude $magnitude";
        echo "<br/>";
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;

    case 8:
        echo "Magnitude $magnitude";
        echo "<br/>";
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;

    case 9:
        echo "Magnitude $magnitude";
        echo "<br/>";
        echo "Séisme capable de tout détruire sur une très vaste zone.";
    break;
 
    default:
        echo "Désolé, magnitude inconnue";
}
?>
<p>Ex.5</p>
<?php
$gender="Homme";
if ($gender !=="Homme")
{
echo "C'est une développeuse !!!";
}
else
{
echo "C'est un développeur !!!";
}
?>
<p>Ex.6</p>
<?php
$age = 23;
if ($age >= 18)
echo "Tu es majeur";
else
{
echo "Tu n'es pas majeur";
}
?>
<p>Ex.7</p>
<?php
  $isOk = false;
  if($isOk == false)
  {
  echo "c'est pas bon !!!";
  }
  else
  {
  echo "c'est ok !!";
  }
?>
<p>Ex.8</p>
<?php
  $isOk="variable";
  //
  if($isOk)
  {
  echo "c'est ok !!";
  echo "<br/>";
  }
  else
  {
  echo "c'est pas bon !!!";
  echo "<br/>";
  }
  //
?>
<?php
echo "<br/>";
echo 'PHP Partie 3';
?>
<p>Ex.1</p>
<?php
echo "<br/>";
$var = 0;
//
while ($var < 10)
{
    echo $var;
    echo "<br/>";
    $var++;
}
//
?>
<p>Ex.2</p>
<?php
$nb1 = 0;
//
$min=1;
$max=100;
$nb2=rand($min,$max);
//
while ($nb1 < 20)
{
    echo $nb1*$nb2;
    echo "<br/>";
    $nb1++;
}
?>
<p>Ex.3</p>
<?php
$nb1 = 100;
//
$min=1;
$max=100;
$nb2=rand($min,$max);
//
while ($nb1 > 10)
{
    echo $nb1*$nb2;
    echo "<br/>";
    $nb1--;
}
?>
<p>Ex.4</p>
<?php
echo "<br/>";
$var = 1;
while ($var < 10)
{
    echo $var;
    echo "<br/>";
    $var= $var + ($var/2);
}
?>
<p>Ex.5</p>
<?php
$var = 1;
while ($var <= 15)
{
    echo $var;
    echo "<br/>";
    echo "On y arrive presque.";
    echo "<br/>";
    $var++;
}
?>
<p>Ex.6</p>
<?php
$var = 20;
while ($var >= 0)
{
    echo $var;
    echo "<br/>";
    echo "C'est presque bon.";
    echo "<br/>";
    $var--;
}
?>
<p>Ex.7</p>
<?php
$var = 1;
while ($var <=100 )
{
    echo $var;
    echo "<br/>";
    echo "On tient le bon bout.";
    echo "<br/>";
    $var=$var+15;
}
?>
<p>Ex.8</p>
<?php
$var = 200;
while ($var >=0 )
{
    echo $var;
    echo "<br/>";
    echo "Enfin !!!!.";
    echo "<br/>";
    $var=$var-12;
}
?>
<?php
echo "<br/>";
echo 'PHP Partie 4';
?>
<p>Ex.1</p>
<?php
function returnTrue($bool)
{
echo $bool ? "true" : "false";
}
$bool_value = true;
returnTrue($bool_value);
?>
<p>Ex.2</p>
<?php
function returnString($string)
{
echo $string;
}
$string_value = "Hello World !";
returnString($string_value);
?>
<p>Ex.3</p>
<?php
function concatString($string1,$string2)
{
echo $string1 . $string2;
}
$string_value1 = "Hello ";
$string_value2 = "World !";
concatString($string_value1,$string_value2);
?>
<p>Ex.4</p>
<?php
function compareNumber($nb1,$nb2)
{  
    if ($nb1>$nb2)
    {
    echo "Le premier nombre est plus grand";
    }
    elseif ($nb1<$nb2)
    {
    echo "Le premier nombre est plus petit";
    }
    else
    {
    echo "Les deux nombres sont identiques";
    }
}
$nb_value1=3;
$nb_value2=12;
compareNumber($nb_value1,$nb_value2);
?>
<p>Ex.5</p>
<?php
function fuseNbString($nb,$string)
{
echo $nb . $string;
}
$nb_value =100;
$string_value = " Potatoes !";
concatString($nb_value,$string_value);
?>
<p>Ex.6</p>
<?php
function helloM($lastname,$firstname,$age)
{
echo "Bonjour $lastname $firstname, tu as $age ans.";
}
helloM("Doe","John",170);
?>
<p>Ex.7</p>
<?php
function genderAge($age,$gender)
{
if ($age<18 & $gender=="Homme")
{
echo $age;
echo "<br/>";
echo"Vous êtes un homme et vous êtes mineur.";
}
elseif ($age>=18 & $gender=="Homme")
{
echo $age;
echo "<br/>";
echo "Vous êtes un homme et vous êtes majeur.";
}
elseif ($age<18 & $gender=="Femme")
{
echo $age;
echo "<br/>";
echo"Vous êtes une femme et vous êtes mineur.";
}
elseif ($age>=18 & $gender=="Femme")
{
echo $age;
echo "<br/>";
echo"Vous êtes une femme et vous êtes majeur.";
}
}
genderAge(25,"Femme");
?>
<p>Ex.8</p>
<?php
function sumNb($nb1,$nb2,$nb3)
{
echo $nb1+$nb2+$nb3;
}
sumNb(1,100,1000);
echo "<br/>";
?>
<?php
echo "<br/>";
echo 'PHP Partie 5';
?>
<p>Ex.1</p>
<?php
$months = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
echo $months[1];
?>
<p>Ex.2</p>
<?php
echo $months[2];
?>
<p>Ex.3</p>
<?php
echo $months[5];
?>
<p>Ex.4</p>
<?php
$months[7] = "août"; 
echo $months[7];
?>
<p>Ex.5</p>
<?php
$dep = array("02"=>"Aisne", "59"=>"Nord", "60"=>"Oise", "62"=>"Pas-de-Calais","80"=>"Somme")
?>
<p>Ex.6</p>
<?php
echo $dep["59"];
?>
<p>Ex.7</p>
<?php
echo "La ville de Reims se trouve dans le département de la " . $dep["80"];
?>
<p>Ex.8</p>
<?php
$arrlength = count($months);
for($i = 0; $i < $arrlength; $i++)
{
echo $months[$i];
echo "<br>";
}
?>
<p>Ex.9</p>
<?php
foreach($dep as $dep_number => $dep_name)
{
    echo "Département : " . $dep_name .".";
    echo "<br>";
}
?>
<p>Ex.10</p>
<?php
foreach($dep as $dep_number => $dep_name)
{
    echo "N°" . $dep_number . " - Département : " . $dep_name .".";
    echo "<br>";
}
?>
<?php
echo "<br/>";
echo 'PHP Partie 6';
?>
<p>Ex.1</p>

<a href="newindex.php?lastname=Nemare&amp;firstname=Jean&amp;age=25">Vers Partie 6.1.2</a>
<a href="dateindex.php?startDate=2/05/2016&amp;endDate=27/11/2016">Vers Partie 6.3</a>
<a href="langindex.php?language=PHP&amp;server=LAMP">Vers Partie 6.4</a>
<a href="weekindex.php?week=12">Vers Partie 6.5</a>
<a href="flatindex.php?building=12&amp;room=101">Vers Partie 6.6</a>
<a href="formulaire.php?">Vers Partie 7 </a>
