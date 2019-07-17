<!DOCTYPE html>
<html>
<head>
<title>PHP - Les formulaires</title>
</head>
<body>

<h1>Partie 7 : Ex 5.6.7.8 - PHP - Les formulaires</h1>
<!---->
Bienvenue <?php echo $_GET["choix"]. " " .$_GET["firstname"]. " ". $_GET["lastname"]. " !"; ?>
<br>
<!---->
<p>Ex.5.6.7.8 - Formulaire & Envoi de Fichier</p>
<form method="post" action="form_ex7.php" enctype="multipart/form-data">
<p>
<!---->
Civilité    <select name="choix">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
            </select><br>
Nom : <input type="text" name="lastname"/><br>
Prénom : <input type="text" name="firstname"/><br>
<input type="submit">
</form>
</p>
<!---->
<form action="form_ex7.php" method="post" enctype="multipart/form-data">
        <p>
                Envoyer un fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>
<!---->
Bienvenue <?php echo $_POST["choix"]. " " .$_POST["firstname"]. " ". $_GET["lastname"]. " !"; ?>
<br>
<?php
// Testons si le fichier a bien été envoyé 
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('pdf');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                 // On peut valider le fichier et le stocker définitivement
                 $path ='/home/pouwels/Téléchargements/uploads/'. basename($_FILES['monfichier']['name']);
                 move_uploaded_file($_FILES['monfichier']['tmp_name'], $path);
                 echo "L'envoi du fichier a bien été effectué !";
                 echo "<br>";
                 echo " ";
                 echo "<br>";
                 echo 'Chemin final du fichier, avec le nom et son extension :';
                 echo "<br>";
                 echo "";
                 echo $path;
                }
                else
                {
                echo 'fichier non envoyé, fichier non pdf !';
                }
        }
        else
        {
        echo 'fichier non envoyé, taille du fichier > 1Mo';
        }
}
else
{
    echo 'fichier ko';
}
?>
</body>
</html>
