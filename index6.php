<?php
// ## Exercice 6

// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : *Spectacle* par *artiste*, le *date* à *heure*.
require_once('./database.php');
$request = $database->query('SELECT * FROM shows ORDER BY title ASC ');
$shows = $request->fetchAll();
echo "<hr>";

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php
        foreach ($shows as $show) {
            echo '<li>' .  $show['title'] . ' *** ' . $show['date']  . ' *** ' . $show['startTime'] . '</li>';
        }
        ?>
    </ul>
</body>

</html>