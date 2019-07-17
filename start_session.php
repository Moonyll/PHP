<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css">
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
        Salut <?php echo $_SESSION['lastname']." ".$_SESSION['firstname']." ".$_SESSION['age']; ?> !<br />
        
    </p>
    <p>
        <a href="session.php">Retour</a><br />
    </p>
    </body>
</html>



