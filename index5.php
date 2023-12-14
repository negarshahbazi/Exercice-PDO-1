<?php
// ## Exercice 5

// Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
// Les afficher comme ceci :

// **Nom :** *Nom du client*

// **Prénom :** *Prénom du client*

// Trier les noms par ordre alphabétique.

require_once('./database.php');
$request = $database->query('SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ');
$clientsWhitStartM = $request->fetchAll();
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
        foreach ($clientsWhitStartM as $clientWhitStartM) {
       
            echo '<li>' . 'Nom:  ' . $clientWhitStartM['firstName'] .'*'. 'Prénom:  ' . $clientWhitStartM['lastName'] . '</li>';
        }
        ?>
    </ul>
</body>

</html>