<?php
// Variable qui connecte à la BDD
// Test s'il n'y a pas d'erreurs
//try {
    $db = new PDO(
        'mysql:host=localhost;dbname=BalanceTonChat;charset=utf9',
        'root',
        '1234'
    );
/*}
// S'il y a une erreur, la récupère et l'affiche
catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// Query SQL
$sqlQuery = 'SELECT * FROM publications';
$publicationStatement = $db -> prepare($sqlQuery);

// Récupère les données et les stocke dans un tableau
$publicationStatement -> execute();
$publications = $publicationStatement -> fetchAll();

?>