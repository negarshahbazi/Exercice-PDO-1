<?php
// ## Exercice 4

// N'afficher que les clients possédant une carte de fidélité.
require_once('./database.php');

$request = $database->query('SELECT * FROM clients INNER JOIN cards ON cards.cardNumber = clients.cardNumber WHERE cardTypesId=1');
$clientsWithCarts = $request->fetchAll();

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
        foreach ($clientsWithCarts as $clientsWithCart ) {
           
             
            echo '<li>'  . $clientsWithCart['firstName'] . ' ' . $clientsWithCart['lastName'] . '</li>';}
        
        ?>
    </ul>
</body>

</html>