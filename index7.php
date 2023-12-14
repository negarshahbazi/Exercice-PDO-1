<?php
//    ## Exercice 7

// Afficher tous les clients comme ceci :

// **Nom :** *Nom de famille du client*

// **Prénom :** *Prénom du client*

// **Date de naissance :** *Date de naissance du client*

// **Carte de fidélité :** *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*

// **Numéro de carte :** *Numéro de la carte fidélité du client s'il en possède une.*
    require_once('./database.php');
    $request = $database->query('SELECT * FROM clients  LEFT JOIN cards ON cards.cardNumber=clients.cardNumber ');
    $allClients = $request->fetchAll();
    // $cards = $request->fetchAll();

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

    <ul>
        <?php
        foreach ($allClients as $client) {
         
            if ($client['cardTypesId']===1){
            echo '<li>' . $client['id'] . '** nom : ' . $client['lastName'] . '**prénom:  ' . $client['firstName'] . '**Date de naissance: ' . $client['birthDate'] .'**Carte de fidélité : YES ** Numéro de carte :  ' . $client['cardNumber'] .'</li>';
        }else{
            echo '<li>' . $client['id'] . '** nom : ' . $client['lastName'] . '**prénom:  ' . $client['firstName'] . '**Date de naissance: ' . $client['birthDate'] .'**Carte de fidélité : NO ** Numéro de carte : -  </li>';
        }}
        // je peux mettre au liue de if else======>     $client['cardTypesId']===1 ? "yes" : "no"
        ?>
    </ul>