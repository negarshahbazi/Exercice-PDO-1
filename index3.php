<?php
// ## Exercice 3
// Afficher les 20 premiers clients.
require_once('./database.php');
$request = $database->query('SELECT * FROM clients LIMIT 20 OFFSET 0');
$clients = $request->fetchAll();
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
        foreach ($clients as $client) {
            echo '<li>' . $client['id'] . ' ' . $client['firstName'] . ' ' . $client['lastName'] . '</li>';
        }
        ?>
    </ul>
</body>

</html>