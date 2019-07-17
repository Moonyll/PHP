<!DOCTYPE html>
<html>
<head>
<title>PHP - Les formulaires</title>
</head>
<body>

<p>test</p>

<?php if ($_POST["lastname"]===NULL) { ?>

    <form method="post" action="testform.php">
 
 <p>
 Nom : <input type="text" name="lastname"/><br>
 Prénom : <input type="text" name="firstname"/><br>
 <input type="submit">
 </p>
 </form>

<?php } ?>

</body>
</html>
