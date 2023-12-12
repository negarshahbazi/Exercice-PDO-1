<?php
//    ## Exercice 7

// Afficher tous les clients comme ceci :

// **Nom :** *Nom de famille du client*

// **Prénom :** *Prénom du client*

// **Date de naissance :** *Date de naissance du client*

// **Carte de fidélité :** *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*

// **Numéro de carte :** *Numéro de la carte fidélité du client s'il en possède une.*
    require_once('./database.php');
$request = $database->query('SELECT * FROM clients');
$clients = $request->fetchAll();
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
        foreach ($clients as $client) {
            echo '<li>' . $client['id'] . '** nom : ' . $client['firstName'] . '**prénom:  ' . $client['lastName'] . '**Date de naissance: ' . $client['birthDate'] .'** Numéro de carte : ' . $client['card'] . ' ' . $client['cardNumber'] .'</li>';
        }
        ?>
    </ul>