<?php
//  ## Exercice 2

// Afficher tous les types de spectacles possibles.
    require_once('./database.php');
$request = $database->query('SELECT * FROM showtypes');
$showtypes = $request->fetchAll();
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
        foreach ($showtypes as $showtype) {
            echo '<li>' . $showtype['id'] . ' ***' . $showtype['type']  .'</li>';
        }
        ?>
    </ul>
</body>

</html>