        <!DOCTYPE html>
        <html>
        <head>
        <title>PHP - Les dates</title>
        </head>
        <body>
        <h1>PHP - Calendrier</h1>
        <form method="post" action="calendar.php">
        <p>
        Mois
        <select name="month">
        <option value="1">Janvier</option>
        <option value="2">Février</option>
        <option value="3">Mars</option>
        <option value="4">Avril</option>
        <option value="5">Mai</option>
        <option value="6">Juin</option>
        <option value="7">Juillet</option>
        <option value="8">Aout</option>
        <option value="9">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">Decembre</option>
        </select><br>
        Année
        <?php
        echo '<select name="year">';
        foreach (range(2000,2030) as $number)
        {
                echo "<option value=".$number.">".$number."</option>";
        }
        echo "</select>";
        ?>
        <br>
        <input type="submit">
        </form>
        </body>
        </html>
