<?php
    // <!-- ## Exercice 1
    // Afficher tous les clients. -->
    require_once('./database.php');
$request = $database->query('SELECT * FROM clients');
$clients = $request->fetchAll();

// var_dump($clients);
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
<h2>TOUS les clients:</h2>
    <ul>
        <?php
        foreach ($clients as $client) {
            echo '<li>' . $client['id'] . ' ' . $client['firstName'] . ' ' . $client['lastName'] . '</li>';
        }
        ?>
    </ul>
</body>

</html>